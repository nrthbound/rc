<template>
    <div class="content">
        <div class="container">
            <div class="columns">
              <div class="column is-4 is-offset-4">
                <create-build @saved="updateBuildList"></create-build>
              </div>
            </div>
            <div class="columns">
                <div class="column">
                    <h1>Build List</h1>
                    Filter by: <a href="#" @click.prevent="filter = 'BMX'">BMX</a> | <a href="#" @click.prevent="filter = 'Skateboard'">Skateboard</a>
                </div>
            </div>

            <div class="columns" v-for="chunk in filtered(buildChunks)" :key="chunk.id">
              <build-list
                v-for="(build,index) in chunk"
                :data="build"
                :index="index"
                :key="build.id"
                @delete="deleteBuild">
              </build-list>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  mounted() {
    axios.get('/builds')
      .then(response => {
        this.builds = response.data;
      })
      .catch();
  },
  data() {
    return {
      filter: '',
      builds: [],
    };
  },
  methods: {
    updateBuildList(payload) {
      this.builds.push(payload);
    },
    deleteBuild(payload) {
      axios.post(`/build/${payload.id}/delete`).then(response => {
        this.sortedBuilds.splice(payload.index, 1);
      });
    },
    filtered(builds) {
      return builds;
    },
  },
  computed: {
    sortedBuilds() {
      return this.builds.sort((a,b) => {
        return a.id < b.id;
      });
    },
    buildChunks() {
      return _.chunk(this.sortedBuilds, 4);
    },
  },
};
</script>

<style lang="scss" scoped>

</style>
