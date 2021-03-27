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
            <div class="w-50" style="margin: auto">
                     <h3 class="pt-2 text-center p-2 text-warning" style="margin: auto; letter-spacing: 8px">Create New Floor</h3>
                </div>
            </div>

            <form class="p-5" action="{{ route('dashboard.floors.store') }}" method="post"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post') }}

                {{-- INPUT [ Name | Number ] --}}
                
                <!-- Name Input -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-user-edit"></i> </span>
                        </div>
                        <input type="text" name='name' class="form-control" placeholder="Floor Name :">
                    </div>
                </div><!-- End Name Input -->

                 <!-- Number Input -->
                 <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-list-ol"></i> </span>
                        </div>
                        <input type="number" name='number' class="form-control" placeholder="Floor Number :">
                    </div>
                </div><!-- End Number Input -->

                <button type="submit" class="btn btn-success mt-4 d-block" style="width: 75%; margin: auto">Save</button>

            </form>
            <!-- /.form-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection
