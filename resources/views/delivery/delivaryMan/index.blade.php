@extends('layouts.app')
@section('content')




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
                                    <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                        document.getElementById('delete-form-{{ $deliver->id }}').submit();">
                                        delete
                                        <form id="delete-form-{{$deliver->id}}"
                                            action="{{ route('delivaryman.delete', $deliver->id) }}" method="POST"
                                            class="d-none">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $deliver->id }}">
                                        </form>
                                    </button>
                                    {{-- <form method="post" action="/delivarymann/{{$deliver->id}}">
                                    @method("DELETE")
                                    @csrf
                                    <input type="submit" value="delete" class="btn btn-danger"
                                        onclick="return confirm('Are you sure?')">
                                    </form> --}}
                                    {{-- <a class="text-danger" href="/delivarymann/{{$deliver->id}}"><span
                                        class="btn btn-outline-danger">Delete</span></a> --}}
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
