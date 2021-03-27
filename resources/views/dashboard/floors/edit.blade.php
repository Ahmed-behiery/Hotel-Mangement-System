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
                <h3 class="card-title pt-2 btn btn-dark p-2">Edit Floor <i class="fas fa-arrow-right"></i>  {{ $floor->name }}</h3>

            </div>

            <form class="p-5" action="{{ route('dashboard.floors.update', $floor) }}" method="post"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                {{-- INPUT [ Name | Number ] --}}

                <!-- Name Input -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-user-edit"></i> </span>
                        </div>
                        <input type="text" name='name' class="form-control" placeholder="name :" value="{{ old('name') ?? $floor->name }}">
                    </div>
                    <!-- @error('name') <span class="red"> {{ $message }} </span> @enderror -->
                </div><!-- End Name Input -->

                 <!-- Number Input -->
                 <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-list-ol"></i></span>
                        </div>
                        <input type="number" name='number' class="form-control" placeholder="Floor Number :" value="{{ old('number') ?? $floor->number }}">
                    </div>
                    <!-- @error('name') <span class="red"> {{ $message }} </span> @enderror -->
                </div><!-- End Number Input -->

                <button type="submit" class="btn btn-success mt-4 d-block" style="width: 75%; margin: auto">Save</button>

            </form>
            <!-- /.form-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection
