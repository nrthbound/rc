<template>
  <div>
    <ul>
      <li v-for="e in errors" :key="e.id">
          {{e}}
      </li>
    </ul>
    <div class="field">
      <label class="label">Frame</label>
      <input type="text" v-model="form.frame" @input="updateBuild" class="input" />
    </div>
    <div class="field">
      <label class="label">Handlebars</label>
      <input type="text" v-model="form.handlebars" @input="updateBuild" class="input" />
    </div>
    <div class="field">
      <label class="label">Wheels</label>
      <input type="text" v-model="form.wheels" @input="updateBuild" class="input" />
    </div>
    <div class="field">
      <label class="label">Bearings</label>
      <input type="text" v-model="form.bearings" @input="updateBuild" class="input" />
    </div>

  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        deck: '',
        trucks: '',
        wheels: '',
        bearings: ''
      },
    };
  },
  methods: {
    updateBuild: _.debounce(function() {
      this.$emit('partsPicked', this.form);
    }, 300),
  }
};
</script>

<style lang="scss" scoped>

</style>
