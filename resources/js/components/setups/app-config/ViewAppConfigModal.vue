<template>
    <div>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                :data-target="dataTarget"
                :id="configId"
        >View</button>
        <div class="modal fade" :id="modalId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel-2">Config Info</h5>
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
                            <label for="exampleInputUsername2">Value</label>
                            <input type="text" class="form-control" id="exampleInputUsername2" :value="configValue" readonly>
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
    name: "ViewAppConfigModal",
    props: {
        nameAr: {
            required: true,
            type: String
        },
        configId: {
            required: true,
            type: Number
        },
        nameEn:{
            required: true,
            type: String
        },
        configValue:{
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
        if (this.nameEn){
            return ;
        }
        else{
            this.nameEn = '-----'
        }
    },
}
</script>

<style scoped>

</style>
