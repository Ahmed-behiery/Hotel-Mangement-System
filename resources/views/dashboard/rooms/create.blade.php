@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-md-12">
    <div class="card w-100 mt-5">
            <div class="card-header bg-info">
            <div class="w-50" style="margin: auto">
                     <h3 class="pt-2 text-center p-2 text-warning" style="margin: auto; letter-spacing: 8px">Create New Room</h3>
                </div>
            </div>

            <form class="p-5" action="{{ route('dashboard.rooms.store') }}" method="post"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post') }}

                {{-- INPUT [ USER NAME, EMAIL, PHONE, NATIONAL ID, PASSWORD, CONFIRMED PASSWORD ] --}}
                <!-- Name Input -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-user-edit"></i></span>
                        </div>
                        <input type="text" name='name' class="form-control" placeholder="Room Name :" value="{{ old('name') ?? '' }}">
                    </div>
                    @error('name') <span class="red"> {{ $message }} </span> @enderror
                </div>

                <div class="row">
                    <!-- Number Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
                                </div>
                                <input type="number" name='number' class="form-control" placeholder="Room Number">
                            </div>
                            @error('number') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>

                    <!-- Size Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
                                </div>
                                <input type="number" name='size' class="form-control" placeholder="Room Capacity : " autocomplete>
                            </div>
                            @error('size') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>

                    <!-- Price Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-dollar-sign"></i> </span>
                                </div>
                                <input type="text" name="price" class="form-control" placeholder="Room Price :" value="{{ old('price') ?? '' }}">
                            </div>
                            @error('price') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>

                    <!-- Floor Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
                                </div>
                                <input type="number" name='floor' class="form-control" placeholder="Floor Number :" value="{{ old('floor') ?? '' }}">
                            </div>
                            @error('floor') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-4 d-block" style="width: 75%; margin: auto">Save</button>

            </form>
            <!-- /.form-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection
