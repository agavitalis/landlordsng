<template>
  <div class="">
    <form action="#">

        <div class="form-group">
            <label>Min Length</label>
            <div>
                <input type="text" class="form-control" required
                        data-parsley-minlength="6" placeholder="Min 6 chars."/>
            </div>
        </div>
        <div class="form-group">
            <label>Max Length</label>
            <div>
                <input type="text" class="form-control" required
                        data-parsley-maxlength="6" placeholder="Max 6 chars."/>
            </div>
        </div>


        <div class="form-group m-b-0">
            <div>
                <button type="submit" class="btn btn-primary waves-effect waves-light">
                    Submit
                </button>
                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                    Cancel
                </button>
            </div>
        </div>
    </form>

  </div>
</template>

<script>
export default {
  data(){
    return{

    }
  },
  mounted(){
    console.log("Type component is mounted");
  }
}
</script>

<style lang="css" scoped>
</style>
