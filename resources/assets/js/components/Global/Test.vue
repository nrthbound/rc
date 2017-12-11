<template>
  <div style="margin-top: 100px;">

    <div class="container">
      <div class="columns">
        <div class="column is-4 is-offset-4">
          <div class="is-build-form">
            <div class="is-header">Create Build</div>
            <div class="is-body">

              <div class="field">
                <label class="label">Build Name</label>
                <div class="control">
                  <input class="input" type="text" placeholder="Text input">
                </div>
              </div>

              <div class="field">
                <label class="label">Build Type</label>
                <div class="control">
                  <label class="radio">
                    <input type="radio" name="rsvp">
                    BMX
                  </label>
                  <label class="radio">
                    <input type="radio" name="rsvp">
                    Skateboard
                  </label>
                </div>
              </div>

              <!-- Skateboard Form -->
              <div class="columns">
                <div class="column is-6">
                  <div class="field">
                    <label class="label">Deck</label>
                    <div class="control">
                      <input class="input" type="text" placeholder="Text input">
                    </div>
                  </div>
                </div>

                <div class="column is-6">
                  <div class="field">
                    <label class="label">Trucks</label>
                    <div class="control">
                      <input class="input" type="text" placeholder="Text input">
                    </div>
                  </div>
                </div>

              </div>

              <div class="columns">
                <div class="column is-6">
                  <div class="field">
                    <label class="label">Wheels</label>
                    <div class="control">
                      <input class="input" type="text" placeholder="Text input">
                    </div>
                  </div>
                </div>

                <div class="column is-6">
                  <div class="field">
                    <label class="label">Bearings</label>
                    <div class="control">
                      <input class="input" type="text" placeholder="Text input">
                    </div>
                  </div>
                </div>
              </div>

              <div class="field">
                <label class="label">About this Build</label>
                <div class="control">
                  <textarea class="textarea" placeholder="e.g. Hello world"></textarea>
                </div>
              </div>

               <div class="field">
                <label class="label">Add Photos</label>
                <div class="control">
                  <div class="dropzone">
                    Drag Images Here
                  </div>
                </div>
              </div>
            </div>

            <div class="is-footer">
              <div class="field is-grouped is-grouped-right">
                <p class="control">
                  <a class="button is-light">
                    Cancel
                  </a>
                </p>
                <p class="control">
                  <a class="button is-primary">
                    Save Build
                  </a>
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {

};
</script>

<style>
  body, html {
    background-color: #F8FAFC;
  }
</style>


<style lang="scss" scoped>

  .input {
    height: 40px;
    border: 1px solid #EDEDED;
    border-radius: 2px;
    box-shadow: none;
  }

  .is-build-form {
    background-color: #FFF;

    .is-header {
      padding: 20px;
      font-size: 1.4rem;
    }

    .is-body {
      padding: 20px;
    }

    .is-footer {
      padding: 20px;
    }

    .dropzone {
      text-align: center;
      padding: 30px;
      border: 1px dashed #EDEDED;
      border-radius: 3px;
    }

  }
</style>
