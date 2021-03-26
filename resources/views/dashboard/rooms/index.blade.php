@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-info mb-1">
        <h3 class="card-title pt-2 btn btn-dark p-2"> Rooms : {{ $count }} </h3>

        <div class="card-tools">
            <a href="{{ route('dashboard.rooms.create') }}" type="button" class="btn btn-warning">
                <i class="fa fa-plus"></i> Create New Room
            </a>
        </div>
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
