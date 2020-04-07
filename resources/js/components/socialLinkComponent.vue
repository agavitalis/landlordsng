<template>
  <div class="">
    <h3 class="bottom30 margin40">My Social Network</h3>
    <div class="row">
        <form class="callus" @submit.prevent>
            <div class="col-sm-4">
                <div class="single-query">
                    <label>Facebook:</label>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="single-query form-group">
                    <input type="text" placeholder="http://facebook.com/"
                    v-model="fb_url" class="keyword-input">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-query">
                    <label>Twitter:</label>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="single-query form-group">
                    <input type="text" placeholder="http://twitter.com/"
                    v-model="twitter_url" class="keyword-input">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="single-query">
                    <label>Linkedin:</label>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="single-query form-group">
                    <input type="text" placeholder="http://linkedin.com"
                    v-model="linkedln_url" class="keyword-input">
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                <a class="btn-blue border_radius" @click="updateSocials">Save Changes</a>
            </div>
        </form>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      fb_url:"",
      twitter_url:"",
      linkedln_url:"",
      error:"",
      msg:""
    }
  },
  mounted(){
    console.log("social component is mounted");
  },
  methods:{
  updateSocials(){
    var id = this.$userId
    axios.post(`/api/edit_links/${id}`,{
      fb_url:this.fb_url,
      twitter_url:this.twitter_url,
      linkedln_url:this.linkedln_url
    }).then(res=>{
      console.log(res.data);
      this.msg= "Social Links updated"
    }).catch(err=>{
      console.log(err);
    })
  }
  }
}
</script>

<style lang="css" scoped>
</style>
