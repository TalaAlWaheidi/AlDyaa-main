<template>
    <div>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                :data-target="dataTarget"
                :id="categoryId"
        >View</button>
        <div class="modal fade" :id="modalId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel-2">Category Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputUsername0">Arabic Name</label>
                            <input type="text" class="form-control" id="exampleInputUsername0" :value="nameAr" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">English Name</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" :value="nameEn" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername2">Arabic Description</label>
                            <input type="text" class="form-control" id="exampleInputUsername2" :value="arabic" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername2">English Description</label>
                            <input type="text" class="form-control" id="exampleInputUsername3" :value="english" readonly>
                        </div>
                        <div class="form-group">
                            <label class="badge badge-success badge-pill" v-if="active">Active</label>
                            <label class="badge badge-danger badge-pill" v-else>Not Active</label>
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
    name: "ViewCategoryModal",
    props: {
        nameAr: {
            required: true,
            type: String
        },
        categoryId: {
            required: true,
            type: Number
        },
        nameEn:{
            required: true,
            type: String
        },
        active:{
            required: true,
            type: Number
        },
        dataTarget:{
            required:true,
            type:String
        },
        modalId:{
            required:true,
            type:String
        },
        descAr:{
            required:false,
            type: String
        },
        descEn:{
            required:false,
            type:String
        },


    },
    data(){
        return {
            arabic : this.descAr ?? '------',
            english : this.descEn ?? '-----'
        }
    },
    computed() {

        // fillNullValues(){
            // if (this.descAr){
            //     return ;
            // }
            // else{
            //     this.descAr = '-----'
            // }

            // if (this.descEn){
            //     return ;
            // }
            // else{
            //     this.descEn = '-----'
            // }

        // }
    },
    // mounted() {
    //     this.fillNullValues()
    // }
}
</script>

<style scoped>

</style>
