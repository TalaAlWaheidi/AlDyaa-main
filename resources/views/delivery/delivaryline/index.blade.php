@extends('layouts.app')
@section('content')
@extends('vendor.sweetalert.alert')


<div class="card">
    <div class="card-body ">
        <span class="card-title">Delivery Lines Table</span>
        <div class="rtl">
            <a href="{{ route('delivaryline.create') }}"
                class="w-auto btn btn-outline-success btn-rounded btn-fw top-right mb-3">Create New Delivery Line</a>
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
                            @foreach($delivaryline as $deliveryline)
                            <tr>
                                <input type="hidden" class="serdelete_val_id" value="{{ $deliveryline->id }}">
                                <td> {{ $deliveryline->id  }} </td>
                                <td> {{ $deliveryline->name  }} </td>
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
                                    <a href="{{ route('line.all', $deliveryline->id) }}"
                                        class="btn btn-outline-warning">Details</a>

                                    <a href="{{ route('delivaryline.edit', $deliveryline->id) }}"
                                        class="btn btn-outline-info">Edit</a>

                                    {{-- <a href="{{ route('delivaryline.view', $deliveryline->id) }}"
                                    class="btn btn-outline-info">View</a> --}}

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
                        title: "Are you sure?",
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
                                url: '/delivaryline/delete/' + delete_id,
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
                                            window.location.href='/delivaryline';
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
