@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body ">
            <span class="card-title">Sub Category Details</span>
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
                                <th>Arabic Description</th>
                                <th>English Description</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> {{ $subCategory->id  }} </td>
                                <td> {{ $subCategory->name_ar  }} </td>
                                <td> {{ $subCategory->name_en ?? '------' }} </td>
                                <td>
                                    <x-parent-category-component
                                        id="{{ $subCategory->category->id }}"
                                        message="{{ $subCategory->category->name_ar}}"
                                        category="{{$subCategory->category->name_ar}}"
                                        nameeng="{{ $subCategory->category->name_en }}"
                                        descar="{{ $subCategory->category->description_ar  ?? '-----'}}"
                                        descen="{{ $subCategory->category->description_en ?? '-----' }}"
                                        active="{{ $subCategory->category->active  }}"
                                    ></x-parent-category-component>
                                </td>
                                <td>{{ $subCategory->description_ar ?? '----' }}</td>
                                <td>{{ $subCategory->description_en ?? '----' }}</td>
                                <td>
                                    @if($subCategory->active == 1 )
                                        <label class="badge badge-success badge-pill">Active</label>
                                    @else
                                        <label class="badge badge-danger badge-pill">Not Active</label>
                                    @endif
                                </td>

                                <td>

                                    <a href="{{ route('setups.sub.category.edit', $subCategory->id) }}"
                                       class="btn btn-outline-info d-inline-flex">Edit</a>
                                    <button class="btn btn-outline-danger d-inline-flex" onclick="event.preventDefault();
                                        document.getElementById('delete-form-{{ $subCategory->id }}').submit();">
                                        delete
                                        <form id="delete-form-{{$subCategory->id}}"
                                              action="{{ route('setups.sub.category.delete', $subCategory->id) }}"
                                              method="POST" class="d-none">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $subCategory->id }}">
                                        </form>
                                    </button>
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    Start Products Table --}}
    <div class="card mt-5">
        <div class="card-body ">
            <span class="card-title">products Details</span>
            <div class="rtl">
{{--                <a href="{{ route('setups.sub.category.create') }}"--}}
{{--                   class="w-auto btn btn-outline-success btn-rounded btn-fw top-right mb-3">Create New Sub Category</a>--}}
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Arabic Name</th>
                                <th>Unit</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($subProducts as $product)
                                <tr>
                                    <td> {{ $product->name_en  }} </td>

                                    <td>
                                        <x-parent-unit-component
                                            id="{{ $product->unit->id }}"
                                            image="{{ $product->unit->image ?? '-------' }}"
                                            arabicname="{{ $product->unit->name_ar }}"
                                            englishname="{{ $product->unit->name_en }}"
                                            arabicdesc="{{ $product->unit->description_ar ?? '----------' }}"
                                            englishdesc="{{ $product->unit->description_en ??'----------' }}"
                                            rate="{{ $product->unit->rate }}"
                                            active="{{ $product->unit->active }}"
                                        ></x-parent-unit-component>
                                    </td>
                                    <td>

                                        <a href="{{ route('setups.sub.category.edit', $product->id) }}"
                                           class="btn btn-outline-info">Edit</a>
                                        <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{ $product->id }}').submit();">
                                            delete
                                            <form id="delete-form-{{$product->id}}"
                                                  action="{{ route('setups.sub.category.delete', $product->id) }}"
                                                  method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $product->id }}">
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
