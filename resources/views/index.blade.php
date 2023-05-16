@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {!! $dataTable->table() !!}
    </div>
</div>
@endsection

@push('scripts')
{!! $dataTable->scripts() !!}
@endpush
