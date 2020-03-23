<template>
<div class="">
    <div class="row">

        <div class="col-lg-4">
            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title"> Create Property Types</h4>
                    <p class="text-muted m-b-30 ">
                        Impedit ad eius est perferendis consequuntur commodi
                        et vero neque at, dignissimos magni iure similique unde
                        cum doloribus quia aliquid ut excepturi?.
                    </p>
                    <!-- create type -->
                    <!-- create type -->
                    <div class="">
                        <p class="text-success">{{msg}}</p>
                    </div>

                    <form action="#" @submit.prevent>

                        <div class="form-group">
                            <label>Property Status</label>
                            <div>
                                <input type="text" class="form-control" required placeholder="Type Name." v-model="property_status_name" />
                            </div>
                        </div>

                        <div class="form-group m-b-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light" @click="addStatus()">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
        <div class="col-lg-8">
            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Property Types</h4>
                    <p class="text-muted m-b-30 ">
                        Impedit ad eius est perferendis consequuntur commodi
                        et vero neque at, dignissimos magni iure similique unde
                        cum doloribus quia aliquid ut excepturi?.              
                    </p>
                    <!-- types table -->
                    <!-- types table -->
                    <table class="table">
                        <thead>
                            <tr>

                                <th scope="col">Status name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                <!-- <th></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="property,key in properties">

                                <td>{{property.property_status_name}}</td>
                                <td><a type="button" id="show-modal" @click="showModal=true;
            setVal(property.id, property.property_status_name)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editproperty">Edit
                                    </a></td>
                                <td><a type="button" class="btn btn-danger btn-sm" @click="deteleStatus(property.id, key)"> Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <nav>
                        <ul class="pagination">
                            <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                                <a href="#" class="page-link" @click="getPropertyStauses(pagination.prev_page_url)"> Prev</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link text-dark" href="#">
                                    Page {{pagination.current_page}} of {{pagination.last_page}}
                                </a>
                            </li>
                            <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
                                <a href="#" class="page-link" @click="getPropertyStatuses(pagination.next_page_url)"> next</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <!-- edit property type -->
    <div v-if="showModal">
        <div class="modal fade" id="editproperty" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><a href="#">Edit Property Status</a></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form v-on:submit.prevent>
                            <div class="" slot="body">

                                <h6 class="text-bold mt-2 dark">Type Name</h6>
                                <input type="text" name="" class="form-control" :value="this.property_status_name" id="property_status_name">
                                <input type="hidden" name="" class="form-control" :value="this.id" id="id">
                                <button v-on:click.prevent class="mt-1 form-control btn btn-outline-success btn-sm" data-dismiss="modal" @click="updatePropertyStatus()">Update</button>
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
    data() {
        return {
            property_status_name: "",
            msg: "",
            pagination: {

            },
            showModal: false,
            properties: {
                property_status_name: ""
            }
        }
    },
    mounted() {
        this.getPropertyStauses()
        console.log("Status component is mounted");
    },
    methods: {
        addStatus() {
            axios.post(`/api/admin_addpropertystatus`, {
                    property_status_name: this.property_status_name,

                })
                .then(response => {
                    console.log(response.data)
                    this.msg = "Successfully added property status"
                    this.property_status_name = ""
                    this.getPropertyStauses()

                })
                .catch(err => {
                    console.log(err);
                })
        },
        getPropertyStauses(url) {
            url = url || "api/admin_getpropertystatus"
            let vm = this;
            fetch(url).then(response => response.json())
                .then(response => {
                    this.properties = response.data
                    // console.log("Successfully fetched")
                    vm.makePagination(response.meta, response.links);
                })
                .catch(err => console.log(err));
        },
        makePagination(meta, links) {
            let pagination = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page: meta.next_page,
                next_page_url: links.next,
                prev_page_url: links.prev
            };
            this.pagination = pagination;
        },
        setVal(id, property_status_name) {
            this.id = id
            this.property_status_name = property_status_name
        },
        updatePropertyStatus() {
            var id = document.getElementById('id').value
            var property_status_name = document.getElementById('property_status_name').value
            axios.put(`api/updatepropertystatus/`, {
                    property_status_name: property_status_name,
                    id: id
                })
                .then(
                    res => {
                        this.getPropertyStauses()
                    }
                )
                .catch(err => {
                    console.log(err);
                })
        },
        deteleStatus(id, key) {
            if (confirm('Are you sure you want to delete')) {
                axios.delete(`api/deletestatus/${id}`)
                    .then(response => {
                        console.log(response)
                        // remove the room type with a given key binding
                        this.properties.splice(key, 1)
                        this.getPropertyStauses()
                        this.msg = "Successfully Deleted"
                    })
                    .catch(err => {
                        console.log(err)
                    })
            } else {
                console.log('thanks for not deleting me')
            }
        }
    }
}
</script>

<style lang="css" scoped>
</style>
