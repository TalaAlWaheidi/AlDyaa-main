<template>
    <div>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                :data-target="dataTarget"
                :id="userId"
        >View</button>
        <div class="modal fade" :id="modalId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel-2">User Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputUsername0">User ID</label>
                            <input type="text" class="form-control" id="exampleInputUsername0" :value="userId" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">User Name</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" :value="userName" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername2">User Email</label>
                            <input type="text" class="form-control" id="exampleInputUsername2" :value="userEmail" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername3">User Role</label>
                            <input type="text" class="form-control" id="exampleInputUsername3" :value="userRole" readonly>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "ViewUserModal",
    props: {
        userName: {
            required: true,
            type: String
        },
        userId: {
            required: true,
            type: Number
        },
        userEmail:{
            required: true,
            type: String
        },
        userRole:{
            required: true,
            type: String
        },
        dataTarget:{
            required:true,
            type:String
        },
        modalId:{
            required:true,
            type:String
        }

    },
    data(){
        return {
            // id: null,
            // filtered: {
            //     username :null,
            //     useremail : null,
            //
            // }
        }
    },
    mounted() {
        console.log(this.props)
    }
}
</script>

<style scoped>

</style>
