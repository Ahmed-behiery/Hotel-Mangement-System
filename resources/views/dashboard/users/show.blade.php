@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit You Profile</h3>
            </div>

            <form class="p-3" action="{{ route('dashboard.admins.update', $admin) }}" method="post"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                {{-- INPUT [ USER NAME, EMAIL, PHONE, NATIONAL ID, PASSWORD, CONFIRMED PASSWORD ] --}}
                <!-- Email Input -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-at"></i> </span>
                        </div>
                        <input type="email" name='email' class="form-control" placeholder="Email :"
                            value="{{ old('email') ?? $admin->email }}">
                    </div>
                </div>

                <div class="row">
                    <!-- Password Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-eye"></i> </span>
                                </div>
                                <input type="password" name='password' class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>

                    <!-- Confirmed Password Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-eye toggle-password"></i> </span>
                                </div>
                                <input type="password" name='password_confirmation' class="form-control" placeholder="Password Confirmation" autocomplete>
                            </div>
                        </div>
                    </div>

                    <!-- User Name Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="Name :"
                                    value="{{ old('name') ?? $admin->name }}">
                            </div>
                        </div>
                    </div>

                    <!-- Phone Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-mobile-alt"></i> </span>
                                </div>
                                <input type="text" name='phone' class="form-control" placeholder="Phone :" value="{{ old('phone') ?? $admin->phone }}">
                            </div>
                        </div>
                    </div>

                    {{-- NATIONAL ID Input --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input type="text" name='national_id' class="form-control" value="{{ old('national_id') ?? $admin->national_id }}" placeholder="Your National ID">
                            </div>
                        </div>
                    </div>

                    <!-- Image Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-image"></i> </span>
                                </div>
                                <input type="file" name='image' class="form-control image" placeholder="Your Image"
                                    value="{{ old('image') ?? $admin->image }}">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary d-block " style="width: 100%">Update</button>

            </form>
            <!-- /.form-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection