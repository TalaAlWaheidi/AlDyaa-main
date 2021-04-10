<div>
    <button  class="btn btn-outline-dribbble d-inline-flex" data-toggle="modal"
             data-target="#exampleModal-{{$id}}"
    >{{ $namear . " | ".$nameen  }}</button>
    <div class="modal fade" id="exampleModal-{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-2">{{$namear}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputUsername0">Arabic Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername0" value="{{$namear}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">English Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" value="{{$nameen}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername2">City</label>
                        <input type="text" class="form-control" id="exampleInputUsername2" value="{{$city}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername2">Delivery Price</label>
                        <input type="text" class="form-control" id="exampleInputUsername3" value="{{$deliveryprice}}" readonly>
                    </div>
                    <div class="form-group">
                        <label class="badge {{ $active== 1 ? 'badge-success' : 'badge-danger' }}  badge-pill" > {{ $active ? 'Active' : 'Not Active' }}  </label>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
