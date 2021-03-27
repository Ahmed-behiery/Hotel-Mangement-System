@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title pt-2"> Reservations : {{ $count }} </h3>
        @if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('manager') ) 

        <div class="card-tools">
            <a href="{{ route('dashboard.reservations.create') }}" type="button" class="btn btn-primary">
                <i class="fa fa-plus"></i> Create New Reservation
            </a>
        </div>
        @endif
    </div>

    <div class="card-body table-responsive p-0">
        {!! $dataTable->table() !!}
    </div>

    <!-- /.card-body -->
</div>
<!-- /.card -->

@endsection

@push('scripts')
    {{  $dataTable->scripts()  }}
@endpush
