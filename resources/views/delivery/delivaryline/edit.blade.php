@extends('layouts.app')
@section('content')
<div class="card col-md-10 grid-margin stretch-card mb-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Delivary Line Form</h4>
            <p class="card-description">
                Update Delivary Line Information
            </p>
            <form class="forms-sample" method="POST" action="{{ route('delivaryline.update', $deliveryline->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="exampleInputCity" class="col-sm-3 col-form-label">Delivary Line Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" id="exampleInputCity"
                            placeholder="Delivery Line Name" value="{{ $deliveryline->name }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Update</button>
                {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
        </div>
    </div>
</div>
@endsection
