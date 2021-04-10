@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body ">
            <span class="card-title">Sub Categories Table</span>
            <div class="rtl">
                <a href="{{ route('delivery.branches.create') }}"
                   class="w-auto btn btn-outline-success btn-rounded btn-fw top-right mb-3">Create New Branch</a>
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
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($branches as $branch)
                                <tr>
                                    <td> {{ $branch->id  }} </td>
                                    <td> {{ $branch->name_ar  }} </td>
                                    <td > {{ $branch->name_en ?? '------' }} </td>
                                    <td>
                                        <x-parent-city-component
                                            id="{{ $branch->city->id }}"
                                            namearabic="{{ $branch->city->name_ar }}"
                                            nameenglish="{{ $branch->city->name_en }}"
                                            country="{{ $branch->city->country_id }}"
                                            active="{{ $branch->city->active }}"

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
                                        {{ $branch->latitude }}
                                    </td>
                                    <td>{{ $branch->longitude }}</td>
                                    <td>
                                        @if($branch->active == 1 )
                                            <label class="badge badge-success badge-pill">Active</label>
                                        @else
                                            <label class="badge badge-danger badge-pill">Not Active</label>
                                        @endif
                                    </td>
                                    <td class="d-inline-flex">
                                        <a href="{{ route('delivery.branches.edit', $branch->id) }}"
                                           class="btn btn-outline-info">Edit</a>
                                        <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{ $branch->id }}').submit();">
                                            delete
                                            <form id="delete-form-{{$branch->id}}"
                                                  action="{{ route('delivery.branches.delete', $branch->id) }}"
                                                  method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $branch->id }}">
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

