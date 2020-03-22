<template>
  <div class="">
    <div class="">
      <p class="text-success">{{msg}}</p>
    </div>
    <form action="#" @submit.prevent>

        <div class="form-group">
            <label>Property Name</label>
            <div>
                <input type="text" class="form-control" required
                         placeholder="Property Name." v-model="property_name"/>
            </div>
        </div>
        <div class="form-group">
            <label>Property Type</label>
            <div>
                <input type="text" class="form-control" required
                         placeholder="Property Type." v-model="property_type"/>
            </div>
        </div>


        <div class="form-group m-b-0">
            <div>
                <button type="submit" class="btn btn-primary waves-effect waves-light"
                @click="addType()">
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
      property_type:"",
      property_name:"",
      msg:""
    }
  },
  mounted(){
    console.log("Type component is mounted");
  },
  methods:{
    addType(){
      axios.post(`/api/admin_addpropertytype`,{
        property_name:this.property_name,
        property_type:this.property_type
      })
      .then(response=>{
        console.log(response.data)
        this.msg="Successfully added type"
        this.property_name=""
        this.property_type=""
      })
      .catch(err=>{
        console.log(err);
      })
    }
  }
}
</script>

<style lang="css" scoped>
</style>
