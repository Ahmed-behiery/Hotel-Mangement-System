@extends('layouts.ui')

@section('content')
<div class="card">
    <div class="card-header text-center" style=" color: yellow; background: black;"><span style="letter-spacing:8px;">Available Rooms</span> :&nbsp; {{ $count }} </div>
    <div class="card-body">
        <div class="card-body table-responsive p-0">
            {!! $dataTable->table() !!}
        </div>
    </div>
</div>
@endsection

@push('scripts')
    {{  $dataTable->scripts()  }}
@endpush
