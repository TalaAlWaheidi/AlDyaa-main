@extends('layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New Area</h4>
                <form class="forms-sample" method="POST" action="{{ route('delivery.branches.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Arabic Name</label>
                        <input type="text"
                               class="form-control @error('name_ar') is-invalid @enderror "
                               name="name_ar"
                               id="exampleInputName1"
                               placeholder="Arabic Name"
                               value="{{ old('name_ar') }}"
                        >
                        @error('name_ar')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">English Name</label>
                        <input type="text"
                               class="form-control @error('name_en') is-invalid @enderror"
                               name="name_en" id="exampleInputEmail3" placeholder="English Name"
                               value="{{ old('name_en') }}"
                        >
                        @error('name_en')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">City</label>
                        <select class="form-control @error('city') is-invalid @enderror" name="city"
                                id="exampleSelectGender">
                            <option value="">---</option>
                            @foreach($cities as $city)
                                <option
                                    value="{{ $city->id }}" {{ old('city') == $city->id ? 'selected' : '' }}>{{ $city->name_ar . ' | ' . $city->name_en }}</option>
                            @endforeach

                        </select>
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Latitude</label>
                        <input type="text"
                               class="form-control @error('latitude') is-invalid @enderror"
                               name="latitude" id="exampleInputEmail3" placeholder="Latitude"
                               value="{{ old('latitude') }}"
                        >
                        @error('latitude')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Longitude</label>
                        <input type="text"
                               class="form-control @error('longitude') is-invalid @enderror"
                               name="longitude" id="exampleInputEmail3" placeholder="Longitude"
                               value="{{ old('longitude') }}"
                        >
                        @error('longitude')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" name="active" class="form-check-input" value="1">
                                Active
                                <i class="input-helper"></i></label>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('delivery.branches.all') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>

@endsection
