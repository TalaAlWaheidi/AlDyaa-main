@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body ">
            <span class="card-title">Categories Table</span>
            <div class="rtl">
                <a href="{{ route('setups.category.create') }}" class="w-auto btn btn-outline-success btn-rounded btn-fw top-right mb-3">Create New Category</a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Arabic Name</th>
                                <th>English Name</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td> {{ $category->id  }} </td>
                                    <td> {{ $category->name_ar  }} </td>
                                    <td> {{ $category->name_en ?? '------' }} </td>
                                    <td>
                                        @if($category->active == 1 )
                                            <label class="badge badge-success badge-pill">Active</label>
                                        @else
                                            <label class="badge badge-danger badge-pill">Not Active</label>
                                        @endif


                                    </td>
                                    <td>
                                        <view-category-modal
                                            class="d-inline-flex"
                                            :category-id="{{ json_encode($category->id)  }}"
                                            :name-ar="{{ json_encode($category->name_ar) }}"
                                            :name-en="{{ json_encode($category->name_en) }}"
                                            :active="{{ json_encode($category->active) }}"
                                            :desc-ar="{{ json_encode($category->description_ar) }}"
                                            :desc-en="{{  json_encode($category->description_en )}}"
                                            :data-target="{{ json_encode('#exampleModal-'.$category->id) }}"
                                            :modal-id="{{ json_encode('exampleModal-'.$category->id) }}"
                                        ></view-category-modal>

                                        <a href="{{ route('setups.category.edit', $category->id) }}" class="btn btn-outline-info">Edit</a>
                                        <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{ $category->id }}').submit();">
                                            delete
                                            <form id="delete-form-{{$category->id}}" action="{{ route('setups.category.delete', $category->id) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $category->id }}">
                                            </form>
                                        </button>
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
    <script src="{{asset('melody/js/data-table.js')}}"></script>

@endsection
