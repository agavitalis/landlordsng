<template>
  <div class="">
    <!-- types table -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Property Name</th>

          <th scope="col">Property Type</th>
          <th scope="col">Action</th>
          <!-- <th></th> -->
        </tr>
      </thead>
      <tbody>
        <tr v-for="property,key in properties">
          <td>{{property.property_name}}</td>
          <td>{{property.property_type}}</td>
          <td><a type="button" id="show-modal" @click="showModal=true;
            setVal(property.id, property.property_type,property.property_name)"
            class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editproperty">Edit
          </a></td>
          <td><a type="button" class="btn btn-danger btn-sm" @click="deteleType(property.id, key)"> Delete</a></td>
          </tr>
      </tbody>
    </table>
    <nav>
    <ul class="pagination">
      <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
      <a href="#" class="page-link" @click="getPropertyTypes(pagination.prev_page_url)"> Prev</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link text-dark" href="#">
        Page {{pagination.current_page}} of {{pagination.last_page}}
        </a>
      </li>
      <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
      <a href="#" class="page-link" @click="getPropertyTypes(pagination.next_page_url)"> next</a>
      </li>
    </ul>
    </nav>

    <!-- create type -->
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

<!-- edit property type -->
<div v-if="showModal">
  <div class="modal fade" id="editproperty" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><a href="#">Edit Property Type</a></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form v-on:submit.prevent>
            <div class="" slot="body">
              <h6 class="text-bold mt-2 dark">Property Name</h6>
              <input type="text" name="" class="form-control mt-1" :value="this.property_name" id="property_name">
              <h6 class="text-bold mt-2 dark">Property Type</h6>
              <input type="text" name="" class="form-control" :value="this.property_type" id="property_type">
              <input type="hidden" name="" class="form-control" :value="this.id" id="id">
              <button v-on:click.prevent class="mt-1 form-control btn btn-outline-success btn-sm"
               data-dismiss="modal" @click="updatePropertyType()">Update</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      property_type:"",
      property_name:"",
      msg:"",
      pagination:{

      },
      showModal:false,
      properties:{
        property_type:"",
        property_name:""
      }
    }
  },
  mounted(){
    this.getPropertyTypes()
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
    },
    getPropertyTypes(url){
      url = url||"api/admin_getpropertytype"
    let vm = this;
      fetch(url).then(response=>response.json())
      .then(response=>{
        this.properties=response.data
        // console.log("Successfully fetched")
        vm.makePagination(response.meta, response.links);
      })
      .catch(err => console.log(err));
    },
     makePagination(meta, links){
        let pagination = {
        current_page :meta.current_page,
        last_page: meta.last_page,
        next_page: meta.next_page,
        next_page_url: links.next,
        prev_page_url: links.prev
        };
        this.pagination = pagination;
      },
        setVal(id, property_type, property_name){
          this.id=id
          this.property_type= property_type
          this.property_name=property_name
      },
      updatePropertyType(){
        var id = document.getElementById('id').value
        var property_type= document.getElementById('property_type').value
        var property_name = document.getElementById('property_name').value
        axios.put(`api/updatepropertytype/`,
          {
            property_type:property_type,
            id:id
          })
          .then(
            res =>{
              this.getPropertyTypes()
            }
          )
          .catch(err=>{
            console.log(err);
          })
      },
      deteleType(id,key){
        if (confirm('Are you sure you want to delete')){
          axios.delete(`api/deletetype/${id}`)
          .then(response =>{
            console.log(response)
            // remove the room type with a given key binding
            this.properties.splice(key, 1)
            this.getPropertyTypes()
            this.msg ="Successfully Deleted"
          })
          .catch(err=>{
            console.log(err)
          })
        }
        else{
          console.log('thanks for not deleting me')
        }
      }
    }
}
</script>

<style lang="css" scoped>
</style>
