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
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit You Profile</h3>
            </div>

            <form class="p-3" action="{{ route('dashboard.reservations.update', $reservation) }}" method="post"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                {{-- INPUT [ Name | Number ] --}}
               
                <!-- Client_id -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-at"></i> </span>
                        </div>
                        <input type="number" name='client_id' class="form-control" placeholder="Client id : ">
                    </div>
                </div><!-- End Client_id -->

                 <!-- Room id -->
                 <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-at"></i> </span>
                        </div>
                        <input type="number" name='room_id' class="form-control" placeholder="Room id : ">
                    </div>
                </div><!-- End Room_id -->

                <!-- accompany number -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-at"></i> </span>
                        </div>
                        <input type="number" name='accompany_number' class="form-control" placeholder="Accompany Number  : ">
                    </div>
                </div><!-- End accompany number -->

               <!-- paid price -->
               <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-at"></i> </span>
                        </div>
                        <input type="number" name='paid_price' class="form-control" placeholder="Paid Price  : ">
                    </div>
                </div><!--End paid price -->

                <!-- <button type="submit" class="btn btn-primary d-block " style="width: 100%">Update</button> -->

            </form>
            <!-- /.form-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection