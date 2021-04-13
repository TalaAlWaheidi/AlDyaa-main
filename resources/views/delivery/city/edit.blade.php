@extends('layouts.app')
@section('content')
<div class="card col-md-10 grid-margin stretch-card mb-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">City Form</h4>
            <p class="card-description">
                Update City Information
            </p>
            <form class="forms-sample" method="POST" action="{{ route('city.update', $city->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="exampleInputCity" class="col-sm-3 col-form-label">City Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" id="exampleInputCity"
                            placeholder="City Name" value="{{ $city->name }}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
        </div>
    </div>
</div>

@endsection
