@extends('layouts.app')
@section('content')
@extends('vendor.sweetalert.alert')



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new line</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" id="validate" method="POST" action="">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputLine" class="col-sm-3 col-form-label">Line Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="exampleInputLine"
                                placeholder="Line Name" value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="exampleSelectDeliveryLine">Delivery Line
                            Name</label>
                        <div class="col-sm-8">
                            {{--                            <input type="text" class="form-control" name="selector" value="{{$line->name}}">--}}
                            <select class="form-control" id="exampleSelectCity" name="selector">
                                <option value=" {{ $line->id }}">{{ $line->name }}</option>
                                {{--                                @foreach ($lines as $line)--}}
                                {{-- <option value=" {{ $line->id }}">{{ $line->name }}</option> --}}
                                {{--                                @endforeach--}}
                            </select>
                            @error('selector')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary mr-2">Create</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
            </div>
            {{--            <div class="modal-footer">--}}
            {{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
            {{--                <button type="submit" class="btn btn-primary">Save changes</button>--}}
            {{--            </div>--}}
            </form>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-body ">
        <span class="card-title">Lines Table</span>
        <div class="rtl">
            <a href="/line/{id}" class="w-auto btn btn-outline-success btn-rounded btn-fw top-right mb-3"
                data-toggle="modal" data-target="#exampleModal">Create New Line</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lines as $line)
                            <tr>
                                <input type="hidden" class="serdelete_val_id" value="{{ $line->id }}">
                                <td> {{ $line->id  }} </td>
                                <td> {{ $line->name  }} </td>
                                <td>
                                    {{-- <view-category-modal class="d-inline-flex"
                                                :category-id="{{ json_encode($deliver->id)  }}"
                                    :name-ar="{{ json_encode($deliver->name) }}"
                                    :name-en="{{ json_encode($deliver->name_en) }}"
                                    :active="{{ json_encode($deliver->phone) }}"
                                    :desc-ar="{{ json_encode($deliver->address) }}"
                                    :desc-en="{{  json_encode($deliver->carnum )}}"
                                    :data-target="{{ json_encode('#exampleModal-'.$deliver->id) }}"
                                    :modal-id="{{ json_encode('exampleModal-'.$deliver->id) }}">
                                    </view-category-modal> --}}
                                    {{--
                                    <a href="{{ route('delivaryline.edit', $deliveryline->id) }}"
                                    class="btn btn-outline-info">Edit</a> --}}

                                    {{--                             <a href="{{ route('delivaryline.view', $deliveryline->id) }}"--}}
                                    {{--                            class="btn btn-outline-info">View</a> --}}

                                    <button type="button" class="btn btn-outline-danger servdeletebtn">Delete</button>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')


<script>
    $(document).ready(function(){
    $('#validate').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            type:"POST",
            url:"/line/create",
            data:$('#validate').serialize(),
            error:function(response){
            $('#exampleModal').modal('hide')
            // alert("Data Not Saved");
                swal("Good job!"
                    , "Data Saved!"
                    , "success")
                    .then((willDelete) => {
                                            // window.location.href='/line/'+id ;
                                            location.reload();
                                        });
        },
            success:function(error){
            console.log(error)
            alert("Data Saved");
        }
        });
        });
});
</script>

<script src="{{ asset('melody/js/data-table.js') }}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
            $('.servdeletebtn').click(function(e) {
                e.preventDefault();
                var delete_id = $(this).closest("tr").find('.serdelete_val_id').val();
                //    alert('anas');

                swal({
                            title: "Are you sure?"+delete_id,
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            var data = {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            };
                            $.ajax({
                                type: "DELETE",
                                url: '/line/delete/' + delete_id,
                               // data: data,
                                data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                                success: function(response) {
                                    swal({
                                        title: "Deleted!",
                                        text: "Your row has been deleted.",
                                        type: "success",
                                        buttons:false,
                                        timer: 800,
                                            })
                                        .then((willDelete) => {
                                            // window.location.href='/line/'+id ;
                                            location.reload();
                                        });
                                }
                            });
                        }
                    });
                });
        });



</script>


@endsection
