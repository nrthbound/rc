<template>
    <div>
      <form @submit.prevent="saveBuild" method="post" action="/build/save">
        <div class="errors">
          <ul>
            <li v-for="e in errors" :key="e.id">
                {{e}}
            </li>
          </ul>
        </div>
          <div class="field">
            <label class="label">Build Name</label>
            <div class="control">
              <input class="input" name="name" v-validate="'required|min:4'" :class="{'is-danger': errors.has('name') }" v-model="form.name" type="text">
            </div>
          </div>

          <div class="field is-horizontal">
            <div class="field-label">
              <label class="label">Build Type</label>
            </div>
            <div class="field-body">
              <div class="field is-narrow">
                <div class="control">
                  <input class="fancy" v-model="form.type" id="skateboard" type="radio" name="buildType" value="skateboard">
                  <label class="fancy" for="skateboard">Skateboard</label>
                  <input class="fancy" v-model="form.type" id="bmx" type="radio" name="buildType" value="bmx">
                  <label class="fancy" for="bmx">BMX</label>
                </div>
              </div>
            </div>
          </div>

          <div class="field">

          </div>

          <button>Submit</button>

      </form>
    </div>
</template>

<script>
    export default {
      data() {
        return {
          form: {},
        };
      },
      methods: {
        saveBuild() {
          let self = this;
          axios.post('/build/save', {
            name: this.form.name,
            type: this.form.type
          })
          .then(response => {
            this.$emit('saved', response.data);
            self.clearAll();
          })
          .catch(error => {
            self.errors = [],
            _.each(error.response.data.errors, (err) => {
              self.errors.push(err[0]);
            });
          });
        },
        clearAll() {
          this.form = {};
        },
      }
    };
</script>

<style lang="scss" scoped>

$primary: cornflowerblue;

  // Animated Stuff
  input.fancy[type="checkbox"],
  input.fancy[type="radio"] {
      position: absolute;
      opacity: 0;
      z-index: -1;
  }
  label.fancy {
      position: relative;
      display: inline-block;
      margin-right: 10px;
      margin-bottom: 10px;
      padding-left: 30px;
      padding-right: 10px;
      line-height: 36px;
      cursor: pointer;
  }
  label.fancy::before {
      content: " ";
      position: absolute;
      top: 6px;
      left: 0;
      display: block;
      width: 24px;
      height: 24px;
      border: 2px solid $primary;
      border-radius: 4px;
      z-index: -1;
  }
  input.fancy[type="radio"] + label.fancy::before {
      border-radius: 18px;
  }
  /* Checked */
  input.fancy[type="checkbox"]:checked + label.fancy,
  input.fancy[type="radio"]:checked + label.fancy {
      padding-left: 10px;
      color: #fff;
  }
  input.fancy[type="checkbox"]:checked + label.fancy::before,
  input.fancy[type="radio"]:checked + label.fancy::before {
      top: 0;
      width: 100%;
      height: 100%;
      background: $primary;
  }
  /* Transition */
  label.fancy,
  label.fancy::before {
      -webkit-transition: .25s all ease;
      -o-transition: .25s all ease;
      transition: .25s all ease;
  }

</style>
