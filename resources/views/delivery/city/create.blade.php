@extends('layouts.app')
@section('content')
<div class="card col-md-10 grid-margin stretch-card mb-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">City Form</h4>
            <p class="card-description">
                City Information
            </p>
            <form class="forms-sample" method="POST" action="{{ route('city.store') }}">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputCity" class="col-sm-3 col-form-label">City Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" id="exampleInputCity"
                            placeholder="City Name" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputCost" class="col-sm-3 col-form-label">Delivary Cost</label>
                    <div class="col-sm-8">
                        <input type="text" name="cost" class="form-control" id="exampleInputCost"
                            placeholder="Delivary Cost" value="{{ old('cost') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Create</button>
                {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
        </div>
    </div>
</div>

@endsection
