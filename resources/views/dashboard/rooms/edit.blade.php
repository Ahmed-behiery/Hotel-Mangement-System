@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title pt-2">Edit Room | {{ $room->name }}</h3>

                <div class="card-tools">
                    <a href="{{ route('dashboard.rooms.index') }}" type="button" class="btn btn-default bg-primary">
                        <i class="fa fa-backspace"></i> Back
                    </a>
                </div>
            </div>

            <form class="p-3" action="{{ route('dashboard.rooms.update', $room) }}" method="post"
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
                        <input type="text" name='name' class="form-control" placeholder="name :" value="{{ old('name') ?? $room->name }}">
                    </div>
                    @error('name') <span class="red"> {{ $message }} </span> @enderror
                </div>

                <div class="row">
                    <!-- Number Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-eye"></i> </span>
                                </div>
                                <input type="number" name='number' class="form-control" placeholder="Number : " value="{{ old('number') ?? $room->number }}">
                            </div>
                            @error('number') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>

                    <!-- Size Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-eye toggle-password"></i> </span>
                                </div>
                                <input type="number" name='size' class="form-control" placeholder="size : " autocomplete value="{{ old('size') ?? $room->size }}">
                            </div>
                            @error('size') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>

                    <!-- Price Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input type="text" name="price" class="form-control" placeholder="Price :" value="{{ old('price') ?? $room->price }}">
                            </div>
                            @error('price') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>

                    <!-- Floor Input -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-mobile-alt"></i> </span>
                                </div>
                                <input type="number" name='floor' class="form-control" placeholder="Floor :" value="{{ old('floor') ?? $room->floor }}">
                            </div>
                            @error('floor') <span class="red"> {{ $message }} </span> @enderror
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary d-block " style="width: 100%">Save</button>

            </form>
            <!-- /.form-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection
