@extends('layouts.app')
@section('content')
<div class="card col-md-10 grid-margin stretch-card mb-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Delivery Line Form</h4>
            <p class="card-description">
                Delivery Line Information
            </p>
            <form class="forms-sample" method="POST" action="{{ route('delivaryline.store') }}">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputCity" class="col-sm-3 col-form-label">Delivery Line Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" id="exampleInputCity"
                            placeholder="Delivery Line Name" value="{{ old('line') }}">
                        @error('line')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="exampleSelectCity">City</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="exampleSelectCity" name="selector">
                            <option>Choose City</option>
                            @foreach ($area as $item)
                            <option value=" {{ $item->id }}">{{ $item->name }}</option>
                @endforeach
                </select>
                @error('selector')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
    </div> --}}
    <button type="submit" class="btn btn-primary mr-2">Create</button>
    {{-- <button class="btn btn-light">Cancel</button> --}}
    </form>
</div>
</div>
</div>

@endsection
