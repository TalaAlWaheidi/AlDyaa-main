@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body ">
            <span class="card-title">Units Table</span>
            <div class="rtl">
                <a href="{{ route('setups.units.create') }}"
                   class="w-auto btn btn-outline-success btn-rounded btn-fw top-right mb-3">Create New Unit</a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Arabic Name</th>
                                <th>English Name</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($units as $unit)
                                <tr>
                                    <td> {{ $unit->id  }} </td>
                                    <td>
                                        @if($unit->image)
                                            <img src="{{ $unit->image  }}" alt="---">
                                        @else
                                            ------
                                        @endif

                                    </td>
                                    <td> {{ $unit->name_ar  }} </td>
                                    <td> {{ $unit->name_en ?? '------' }} </td>
                                    <td>
                                        @if($unit->active == 1 )
                                            <label class="badge badge-success badge-pill">Active</label>
                                        @else
                                            <label class="badge badge-danger badge-pill">Not Active</label>
                                        @endif


                                    </td>
                                    <td class="d-inline-flex">
                                        <x-show-unit-component
                                            id="{{ $unit->id }}"
                                            image="{{ $unit->image ?? '-------' }}"
                                            arabicname="{{ $unit->name_ar }}"
                                            englishname="{{ $unit->name_en }}"
                                            arabicdesc="{{ $unit->description_ar ?? '----------' }}"
                                            englishdesc="{{ $unit->description_en ??'----------' }}"
                                            rate="{{ $unit->rate }}"
                                            active="{{ $unit->active }}"
                                        ></x-show-unit-component>

                                        <a href="{{ route('setups.units.edit', $unit->id) }}"
                                           class="btn btn-outline-info">Edit</a>

                                        <button class="btn btn-outline-danger" onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{ $unit->id }}').submit();">
                                            delete
                                            <form id="delete-form-{{$unit->id}}"
                                                  action="{{ route('setups.units.delete', $unit->id) }}" method="POST"
                                                  class="d-none">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $unit->id }}">
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
