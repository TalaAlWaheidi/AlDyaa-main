@extends('layouts.app')
@section('content')
@extends('vendor.sweetalert.alert')



<!-- Modal -->
{{-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> --}}

{{-- action="{{ route('delivaryman.delete', $deliver->id) }}" --}}
{{-- <form id="delete_modal" method="post">
                @csrf
                @method('DELETE') --}}
{{-- <button class="btn btn-danger btn-sm delete-confirm" data-name="{{ $deliver->id }}"
type=" submit">Delete</button> --}}


{{-- <div class="modal-body">
                    <input id="delete_aboutus_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes.Delete It</button>
                </div>

            </form>
        </div>
    </div>
</div> --}}

<div class="card">
    <div class="card-body ">
        <span class="card-title">Delivery Man Table</span>
        <div class="rtl">
            <a href="{{ route('delivaryman.create') }}"
                class="w-auto btn btn-outline-success btn-rounded btn-fw top-right mb-3">Create New Delivery Man</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Car Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($deliveryMan as $deliver)
                            <tr>
                                <input type="hidden" class="serdelete_val_id" value="{{ $deliver->id }}">
                                <td> {{ $deliver->id  }} </td>
                                <td> {{ $deliver->name  }} </td>
                                <td> {{ $deliver->phone }} </td>
                                <td> {{ $deliver->address }} </td>
                                <td> {{ $deliver->carnum }} </td>
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

                                    <a href="{{ route('delivaryman.edit', $deliver->id) }}"
                                        class="btn btn-outline-info">Edit</a>
                                    {{-- <button class="btn btn-outline-danger swalalert"
                                        onsubmit="document.getElementById('delete-form-{{ $deliver->id }}')">
                                    delete
                                    <form id="delete-form-{{$deliver->id}}"
                                        action="{{ route('delivaryman.delete', $deliver->id) }}" method="POST"
                                        class="d-none">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $deliver->id }}">
                                    </form>
                                    </button> --}}
                                    {{-- <form method="post" action="/delivarymann/{{$deliver->id}}">
                                    @method("DELETE")
                                    @csrf
                                    <input type="submit" value="delete" class="btn btn-danger"
                                        onclick="return confirm('Are you sure?')">
                                    </form> --}}
                                    {{-- <a class="btn btn-danger deletebtn" href="javascript:void(0)" data-toggle="modal"
                                        data-target="#deleteModal">Delete</a> --}}

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
<script src="{{ asset('melody/js/data-table.js') }}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
            $('.servdeletebtn').click(function(e) {
                e.preventDefault();
                var delete_id = $(this).closest("tr").find('.serdelete_val_id').val();
                //    alert('anas');

                swal({
                        title: "Are you sure?" + delete_id,
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
                                url: '/delivaryman/delete/' + delete_id,
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
                                            window.location.href='/delivaryman';
                                            //location.reload();
                                        });
                                }
                            });
                        }
                    });
                });
        });



</script>


@endsection
