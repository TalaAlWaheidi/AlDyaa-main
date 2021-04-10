@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body ">
            <span class="card-title">Sub Categories Table</span>
            <div class="rtl">
                <a href="{{ route('delivery.areas.create') }}"
                   class="w-auto btn btn-outline-success btn-rounded btn-fw top-right mb-3">Create New Area</a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table flex-grow">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Arabic Name</th>
                                <th>English Name</th>
                                <th>Locality</th>
                                <th>Active</th>
                                <th>Has Delivery Price</th>
                                <th>Delivery Price</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($areas as $area)
                                <tr>
                                    <td> {{ $area->id  }} </td>
                                    <td> {{ $area->name_ar  }} </td>
                                    <td > {{ $area->name_en ?? '------' }} </td>
                                    <td>
                                        <x-parent-locality-component
                                            id="{{ $area->locality->id }}"
                                            namear="{{ $area->locality->name_ar }}"
                                            nameen="{{ $area->locality->name_en }}"
                                            city="{{ $area->locality->city->name_ar . ' | ' . $area->locality->city->name_en }}"
                                            deliveryprice="{{ $area->locality->delivery_price }}"
                                            active="{{ $area->locality->active }}"
                                        ></x-parent-locality-component>
                                    </td>

                                    <td>
                                        @if($area->active == 1 )
                                            <label class="badge badge-success badge-pill">Active</label>
                                        @else
                                            <label class="badge badge-danger badge-pill">Not Active</label>
                                        @endif
                                    </td>
                                    <td>
                                        @if($area->has_delivery_price == 1 )
                                            <label class="badge badge-success badge-pill">Has</label>
                                        @else
                                            <label class="badge badge-danger badge-pill">Has'nt</label>
                                    @endif
                                    </td>
                                    <td>{{ $area->delivery_price }}</td>
                                    <td class="d-inline-flex">
                                        <a href="{{ route('delivery.areas.edit', $area->id) }}"
                                           class="btn btn-outline-info">Edit</a>
                                        <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{ $area->id }}').submit();">
                                            delete
                                            <form id="delete-form-{{$area->id}}"
                                                  action="{{ route('delivery.areas.delete', $area->id) }}"
                                                  method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $area->id }}">
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

