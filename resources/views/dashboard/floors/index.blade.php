@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-info mb-1">
        <h3 class="card-title pt-2 btn btn-dark p-2"> Floors : {{ $count }} </h3>

        <div class="card-tools">
            <a href="{{ route('dashboard.floors.create') }}" type="button" class="btn btn-default bg-warning">
                <i class="fa fa-plus"></i> Create New Floor
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
