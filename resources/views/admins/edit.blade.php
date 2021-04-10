@extends('layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New User</h4>
                <p class="card-description">
                    Create New user With Role Admin Or Delivery Man
                </p>
                <form class="forms-sample" method="POST" action="{{ route('admins.users.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror "
                               name="name"
                               id="exampleInputName1"
                               placeholder="Name"
                               value="{{ $user->name }}"
                        >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               name="email" id="exampleInputEmail3" placeholder="Email"
                               value="{{ $user->email }}"
                        >
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Role</label>
                        <select class="form-control @error('role') is-invalid @enderror" name="role" id="exampleSelectGender">
                            <option {{ $user->role == "Admin" ? 'selected': '' }} value="Admin">Admin</option>
                            <option {{ $user->role == "Delivery Man" ? 'selected': '' }} value="Delivery Man">Delivery Man</option>
                        </select>
                        @error('role')
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
