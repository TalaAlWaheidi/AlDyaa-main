@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body ">
            <span class="card-title">Localities Table</span>
            <div class="rtl">
                <a href="{{ route('delivery.localities.create') }}"
                   class="w-auto btn btn-outline-success btn-rounded btn-fw top-right mb-3">Create New Locality</a>
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
                                <th>City</th>
                                <th>Delivery Price</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($localities as $locality)
                                <tr>
                                    <td> {{ $locality->id  }} </td>
                                    <td> {{ $locality->name_ar  }} </td>
                                    <td > {{ $locality->name_en ?? '------' }} </td>
                                    <td>
                                        <x-parent-city-component
                                            id="{{ $locality->city->id }}"
                                            namearabic="{{ $locality->city->name_ar }}"
                                            nameenglish="{{ $locality->city->name_en }}"
                                            country="{{ $locality->city->country_id }}"
                                            active="{{ $locality->city->active }}"

                                        ></x-parent-city-component>
                                        {{--                                        <x-parent-locality-component--}}
                                        {{--                                            id="{{ $branch->locality->id }}"--}}
                                        {{--                                            namear="{{ $branch->locality->name_ar }}"--}}
                                        {{--                                            nameen="{{ $branch->locality->name_en }}"--}}
                                        {{--                                            city="{{ $branch->locality->city->name_ar . ' | ' . $branch->locality->city->name_en }}"--}}
                                        {{--                                            deliveryprice="{{ $area->locality->delivery_price }}"--}}
                                        {{--                                            active="{{ $branch->locality->active }}"--}}
                                        {{--                                        ></x-parent-locality-component>--}}
                                    </td>

                                    <td>
                                        {{ $locality->delivery_price }}
                                    </td>
                                    <td>
                                        @if($locality->active == 1 )
                                            <label class="badge badge-success badge-pill">Active</label>
                                        @else
                                            <label class="badge badge-danger badge-pill">Not Active</label>
                                        @endif
                                    </td>
                                    
                                    <td class="d-inline-flex">
                                        <a href="{{ route('delivery.localities.edit', $locality->id) }}"
                                           class="btn btn-outline-info">Edit</a>
                                        <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{ $locality->id }}').submit();">
                                            delete
                                            <form id="delete-form-{{$locality->id}}"
                                                  action="{{ route('delivery.localities.delete', $locality->id) }}"
                                                  method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $locality->id }}">
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

