@extends('layouts.app')
@section('content')
<div class="card col-md-10 grid-margin stretch-card mb-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Delivary Man Form</h4>
            <p class="card-description">
                Delivary Man Information
            </p>
            <form class="forms-sample" method="POST" action="{{ route('delivaryman.store') }}">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" id="exampleInputUsername"
                            placeholder="Username" value="{{ old('name') }}">
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label for="exampleInput" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                    </div>
                </div> --}}
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                    <div class="col-sm-9">
                        <input type="text" name="phone" class="form-control" id="exampleInputMobile"
                            placeholder="Mobile number" value="{{ old('phone') }}">
                    </div>
                </div>
                <div class=" form-group row">
                    <label for="exampleInputAddress" class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputAddress" placeholder="Amman-Jordan"
                            name="address" value="{{ old('address') }}">
                    </div>
                </div>
                <div class=" form-group row">
                    <label for="exampleInputCarNum" class="col-sm-3 col-form-label">Car Number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="carnum" id="exampleInputCarNum"
                            placeholder="Car Number" value="{{ old('carnum') }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Create</button>
                {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
        </div>
    </div>
</div>

@endsection
