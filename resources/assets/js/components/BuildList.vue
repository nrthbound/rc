<template>
    <div class="column is-3">
      <div class="card">
        <div class="card-image">
          <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <p class="title is-4">{{data.name}}</p>
              <span class="tag is-link" v-text="data.type"></span>
            </div>
          </div>

          <div class="content">
            <time datetime="2016-1-1">{{data.created_at | humanTime}}</time>
            <button @click="deleteItem" type="button" class="button is-small is-text">Delete</button>
          </div>
        </div>
      </div>
  </div>
</template>

<script>
export default {
  props: {
    data: {
      type: Object,
      required: true
    },
    index: {
      type: Number,
    }
  },
  methods: {
    deleteItem() {
      this.$emit('delete', {'id':this.data.id, 'index':this.index});
    }
  }
};
</script>

<style lang="scss" scoped>
  .is-build-list-item {
    font-size: 0.85rem;

    .is-build-list {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    h2 {
      display: inline-block;
      margin-right: 15px;
    }
  }
</style>
