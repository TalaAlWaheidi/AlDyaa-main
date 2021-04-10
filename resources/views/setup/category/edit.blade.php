@extends('layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New User</h4>
                <p class="card-description">
                    Create New user With Role Admin Or Delivery Man
                </p>
                <form class="forms-sample" method="POST" action="{{ route('setups.category.update', $category->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputName1">Arabic Name</label>
                        <input type="text"
                               class="form-control @error('name_ar') is-invalid @enderror "
                               name="name_ar"
                               id="exampleInputName1"
                               placeholder="Arabic Name"
                               value="{{ $category->name_ar }}"
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
                               value="{{ $category->name_en }}"
                        >
                        @error('name_en')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Arabic Description</label>
                        <textarea class="form-control" name="desc_ar" id="exampleTextarea1" rows="4" placeholder="Arabic Description">{{ $category->description_ar }}</textarea>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">English Description</label>
                        <textarea class="form-control" name="desc_en" id="exampleTextarea1" rows="4" placeholder="English Description">{{ $category->description_en }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" name="active" class="form-check-input" value="1" {{ $category->active == 1 ? 'checked' : '' }}>
                                Active
                                <i class="input-helper"></i></label>
                        </div>
                    </div>

                    {{--                    <div class="form-group">--}}
                    {{--                        <label>File upload</label>--}}
                    {{--                        <input type="file" name="img[]" class="file-upload-default">--}}
                    {{--                        <div class="input-group col-xs-12">--}}
                    {{--                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">--}}
                    {{--                            <span class="input-group-append">--}}
                    {{--                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>--}}
                    {{--                        </span>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('setups.category.all') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
