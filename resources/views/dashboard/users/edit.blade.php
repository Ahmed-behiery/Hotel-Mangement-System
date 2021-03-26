@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card w-100 mt-5">
            <div class="card-header bg-info">
                <h3 class="card-title pt-2 btn btn-dark p-2">Edit Manager <i class="fas fa-arrow-right"></i> {{ $user->name }}</h3>

            </div>

            <form class="p-5" action="{{ route('dashboard.users.update', $user) }}" method="post"
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
                            value="{{ old('email') ?? $user->email }}">
                    </div>
                    @error('email') <span class="red"> {{ $message }} </span> @enderror
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
                            @error('password') <span class="red"> {{ $message }} </span> @enderror
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
                            @error('password') <span class="red"> {{ $message }} </span> @enderror
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
                                    value="{{ old('name') ?? $user->name }}">
                            </div>
                            @error('name') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>

                    <!-- Phone Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-mobile-alt"></i> </span>
                                </div>
                                <input type="text" name='phone' class="form-control" placeholder="Phone :" value="{{ old('phone') ?? $user->phone }}">
                            </div>
                            @error('phone') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>

                    {{-- NATIONAL ID Input --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-address-card"></i> </span>
                                </div>
                                <input type="text" name='national_id' class="form-control" value="{{ old('national_id') ?? $user->national_id }}" placeholder="Your National ID">
                            </div>
                            @error('national_id') <span class="red"> {{ $message }} </span> @enderror
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
                                    value="{{ old('image') ?? $user->image }}">
                            </div>
                            @error('image') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-4 d-block " style="width: 75%; margin: auto">Update</button>

            </form>
            <!-- /.form-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection
