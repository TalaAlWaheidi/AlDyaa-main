@extends('layouts.app')
@section('content')
<div class="card col-md-10 grid-margin stretch-card mb-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Area Form</h4>
            <p class="card-description">
                Update Area Information
            </p>
            <form class="forms-sample" method="POST" action="{{ route('area.update',$area->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="exampleInputArea" class="col-sm-3 col-form-label">Area Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" id="exampleInputArea"
                            placeholder="Area Name" value="{{ $area->name }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="exampleSelectCity">City</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="exampleSelectCity" name="selector">
                            <option>Choose City</option>
                            @foreach ($city as $item)
                            <option value=" {{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('selector')
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
                            placeholder="Delivary Cost" value="{{ $area->cost }}">
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
