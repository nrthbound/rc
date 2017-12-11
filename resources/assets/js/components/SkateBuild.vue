<template>
  <div>
    <div class="columns">
      <div class="column is-6">
        <div class="field">
          <label class="label">Deck</label>
          <input type="text" v-model="form.deck" @input="updateBuild" class="input" />
        </div>
      </div>
      <div class="column is-6">
        <div class="field">
          <label class="label">Trucks</label>
          <input type="text" v-model="form.trucks" @input="updateBuild" class="input" />
        </div>
      </div>
    </div>

    <div class="columns">
      <div class="column is-6">
        <div class="field">
          <label class="label">Wheels</label>
          <input type="text" v-model="form.wheels" @input="updateBuild" class="input" />
        </div>
      </div>
      <div class="column is-6">
        <div class="field">
          <label class="label">Bearings</label>
          <input type="text" v-model="form.bearings" @input="updateBuild" class="input" />
        </div>
      </div>
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
      this.$emit('partsO', this.form);
    }, 300),
  }
};
</script>

<style lang="scss" scoped>

</style>
