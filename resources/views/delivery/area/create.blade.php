@extends('layouts.app')
@section('content')
<div class="card col-md-10 grid-margin stretch-card mb-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">City Form</h4>
            <p class="card-description">
                City Information
            </p>
            <form class="forms-sample" method="POST" action="{{ route('area.store') }}">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputArea" class="col-sm-3 col-form-label">Area Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" id="exampleInputArea"
                            placeholder="Area Name" value="{{ old('name') }}">
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
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Create</button>
                {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
        </div>
    </div>
</div>

@endsection
