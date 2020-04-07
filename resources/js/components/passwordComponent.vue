<template>
<div class="">
  <h3 class=" bottom30 margin40">Change Your Password</h3>
  <p class="text-center text-danger">{{error}}</p>
  <p class="text-center text-success">{{msg}}</p>
  <div class="row">
      <form class="callus" @submit.prevent>
          <div class="col-sm-4">
              <div class="single-query">
                  <label>Current Password:</label>
              </div>
          </div>
          <div class="col-sm-8">
              <div class="single-query form-group">
                  <input type="password" class="keyword-input" v-model="old_password">
              </div>
          </div>
          <div class="col-sm-4">
              <div class="single-query">
                  <label>New Password:</label>
              </div>
          </div>
          <div class="col-sm-8">
              <div class="single-query form-group">
                  <input type="password" class="keyword-input" v-model="new_password">
              </div>
          </div>
          <div class="col-sm-4">
              <div class="single-query">
                  <label>Confirm Password:</label>
              </div>
          </div>
          <div class="col-sm-8">
              <div class="single-query form-group">
                  <input type="password" class="keyword-input" v-model="confirm_password">
              </div>
          </div>
          <div class="col-sm-12 text-right">
              <a class="btn-blue border_radius" @click="changePassword">Save Changes</a>
          </div>
      </form>
  </div>
</div>
</template>

<script>
export default {
  data(){
    return{
      new_password:"",
      old_password:"",
      confirm_password:"",
      error: "",
      msg:""
    }
  },
  mounted(){
    console.log("mounted");
  },
  methods:{
    changePassword(){
      var myid = this.$userId;
      if(this.new_password== this.confirm_password){
        axios.post(`/api/edit_password/${myid}`,{
          old_password:this.old_password,
          new_password:this.new_password,
        }).then(res=>{
          if (res.data =="password is invalid"){
            this.error= "Old password is incorrect";
          }else{
            console.log(res.data);
            this.msg = "Password is updated"
          }
        }).catch(err=>{
          console.log(err);
        })
      }else{
        this.error="New passwords do not match"
      }
    }
  }
}
</script>

<style lang="css" scoped>
</style>
