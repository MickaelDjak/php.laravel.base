@extends('layouts.catalog')

@section('content')
    @include('preachings.preachings')
@endsection

@section('pagination')
    <div class="row ">
        <div class="column">
            @include('blocks.pagination.pagination')
        </div>
    </div>
@endsection
