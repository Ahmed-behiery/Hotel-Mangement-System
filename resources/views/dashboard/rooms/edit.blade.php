@extends('layouts.app')

@section('content')
@if ($errors->any())
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger pb-1">
                    <ul>
                        @foreach ($errors->all() as $error)
                            -&nbsp;{{ $error }}<br>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="row">
    <div class="col-md-12">
    <div class="card w-100 mt-5">
    <div class="card-header bg-info">
                <h3 class="card-title pt-2 btn btn-dark p-2">Edit Room | {{ $room->name }}</h3>

                
            </div>

            <form class="p-5" action="{{ route('dashboard.rooms.update', $room) }}" method="post"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                {{-- INPUT [ USER NAME, EMAIL, PHONE, NATIONAL ID, PASSWORD, CONFIRMED PASSWORD ] --}}
                <!-- Email Input -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-user-edit"></i> </span>
                        </div>
                        <input type="text" name='name' class="form-control" placeholder="Room Name :" value="{{ old('name') ?? $room->name }}">
                    </div>
                    @error('name') <span class="red"> {{ $message }} </span> @enderror
                </div>

                <div class="row">
                    <!-- Number Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-list-ol"></i></span>
                                </div>
                                <input type="number" name='number' class="form-control" placeholder="Room Number : " value="{{ old('number') ?? $room->number }}">
                            </div>
                            @error('number') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>

                    <!-- Size Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-list-ol"></i></span>
                                </div>
                                <input type="number" name='size' class="form-control" placeholder="Room Capacity : " autocomplete value="{{ old('size') ?? $room->size }}">
                            </div>
                            @error('size') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>

                    <!-- Price Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-dollar-sign"></i></span>
                                </div>
                                <input type="text" name="price" class="form-control" placeholder="Room Price :" value="{{ old('price') ?? $room->price }}">
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
                                <input type="number" name='floor' class="form-control" placeholder="Floor Number :" value="{{ old('floor') ?? $room->floor }}">
                            </div>
                            @error('floor') <span class="red"> {{ $message }} </span> @enderror
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
