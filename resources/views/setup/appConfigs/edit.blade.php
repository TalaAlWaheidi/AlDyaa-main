@extends('layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New User</h4>
                <p class="card-description">
                    Create New user With Role Admin Or Delivery Man
                </p>
                <form class="forms-sample" method="POST" action="{{ route('setups.app-config.update', $config->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $config->id }}">
                    <div class="form-group">
                        <label for="exampleInputName1">Arabic Name</label>
                        <input type="text" class="form-control "
                               name="name"
                               id="exampleInputName1"
                               placeholder="Name"
                               value="{{ $config->name_ar }}"
                               readonly
                        >

                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">English Name</label>
                        <input type="text" class="form-control "
                               name="name"
                               id="exampleInputName1"
                               placeholder="Name"
                               value="{{ $config->name_en }}"
                               readonly
                        >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Value</label>
                        <input type="text" name="value"
                               class="form-control @error('value') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder="Password"
                               value="{{ $config->value }}"
                        >
                        @error('value')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
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
                    <a href="{{ route('admins.users.all') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>

@endsection
