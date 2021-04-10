@extends('layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New Area</h4>
                <form class="forms-sample" method="POST" action="{{ route('delivery.areas.update', $area->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputName1">Arabic Name</label>
                        <input type="text"
                               class="form-control @error('name_ar') is-invalid @enderror "
                               name="name_ar"
                               id="exampleInputName1"
                               placeholder="Arabic Name"
                               value="{{ $area->name_ar }}"
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
                               value="{{ $area->name_en }}"
                        >
                        @error('name_en')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Locality</label>
                        <select class="form-control @error('locality') is-invalid @enderror" name="locality"
                                id="exampleSelectGender">
                            <option value="">---</option>
                            @foreach($localities as $locality)
                                <option
                                    value="{{ $locality->id }}" {{ $area->locality_id == $locality->id ? 'selected' : '' }}>
                                    {{ $locality->name_ar . ' | ' . $locality->name_en }}
                                </option>
                            @endforeach

                        </select>
                        @error('locality')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-check form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" name="active" class="form-check-input"
                                       {{ $area->active == 1 ? 'checked' : '' }} value="1">
                                Active
                                <i class="input-helper"></i></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" name="has_delivery_price"
                                       class="form-check-input" value="1"
                                    {{ $area->has_delivery_price == 1 ? 'checked' : '' }}
                                >
                                Has Delivery Price
                                <i class="input-helper"></i></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail3">Delivery Price</label>
                        <input type="number"
                               step=".01"
                               class="form-control @error('delivery_price') is-invalid @enderror"
                               name="delivery_price" id="exampleInputEmail3" placeholder="Delivery Price"
                               value="{{ $area->delivery_price }}"
                        >
                        @error('delivery_price')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('delivery.areas.all') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>

@endsection
