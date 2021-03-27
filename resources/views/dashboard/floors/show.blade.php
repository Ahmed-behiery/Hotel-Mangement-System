@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit You Profile</h3>
            </div>

            <form class="p-3" action="{{ route('dashboard.floors.update', $floor) }}" method="post"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                {{-- INPUT [ Name | Number ] --}}
               
                <!-- Name Input -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-at"></i> </span>
                        </div>
                        <input type="text" name='name' class="form-control" placeholder="name :" value="{{ old('name') ?? $floor->name }}">
                    </div>
                    @error('name') <span class="red"> {{ $message }} </span> @enderror
                </div><!-- End Name Input -->

                 <!-- Number Input -->
                 <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-at"></i> </span>
                        </div>
                        <input type="number" name='number' class="form-control" placeholder="number :" value="{{ old('number') ?? $floor->number }}">
                    </div>
                    @error('name') <span class="red"> {{ $message }} </span> @enderror
                </div><!-- End Number Input -->

                <button type="submit" class="btn btn-primary d-block " style="width: 100%">Update</button>

            </form>
            <!-- /.form-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection