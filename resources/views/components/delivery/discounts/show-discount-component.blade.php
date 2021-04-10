<div>
    <button  class="btn btn-outline-dribbble d-inline-flex" data-toggle="modal"
             data-target="#exampleModal-{{$id}}"
    >Show</button>
    <div class="modal fade" id="exampleModal-{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-2">Delivery Discount Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputUsername0">ID</label>
                        <input type="text" class="form-control" id="exampleInputUsername0" value="{{$id}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Products Amount</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" value="{{$amount}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername2">Discount Percentage</label>
                        <input type="text" class="form-control" id="exampleInputUsername2" value="{{$percentage}}" readonly>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>
