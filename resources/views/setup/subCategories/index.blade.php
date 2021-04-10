@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body ">
            <span class="card-title">Sub Categories Table</span>
            <div class="rtl">
                <a href="{{ route('setups.sub.category.create') }}"
                   class="w-auto btn btn-outline-success btn-rounded btn-fw top-right mb-3">Create New Sub Category</a>
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
                                <th>Category</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subCategories as $category)
                                <tr>
                                    <td> {{ $category->id  }} </td>
                                    <td> {{ $category->name_ar  }} </td>
                                    <td> {{ $category->name_en ?? '------' }} </td>
                                    <td>
                                        <x-parent-category-component
                                            id="{{ $category->category->id }}"
                                            message="{{ $category->category->name_ar}}"
                                            category="{{$category->category->name_ar}}"
                                            nameeng="{{ $category->category->name_en }}"
                                            descar="{{ $category->category->description_ar  ?? '-----'}}"
                                            descen="{{ $category->category->description_en ?? '-----' }}"
                                            active="{{ $category->category->active  }}"
                                        ></x-parent-category-component>
                                    </td>
                                    <td>
                                        @if($category->active == 1 )
                                            <label class="badge badge-success badge-pill">Active</label>
                                        @else
                                            <label class="badge badge-danger badge-pill">Not Active</label>
                                        @endif
                                    </td>

                                    <td>

                                        <a href="{{ route('setups.sub.category.show', $category->id) }}"
                                           class="btn btn-outline-dribbble">Show</a>

                                        <a href="{{ route('setups.sub.category.edit', $category->id) }}"
                                           class="btn btn-outline-info">Edit</a>
                                        <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{ $category->id }}').submit();">
                                            delete
                                            <form id="delete-form-{{$category->id}}"
                                                  action="{{ route('setups.sub.category.delete', $category->id) }}"
                                                  method="POST" class="d-none">
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
