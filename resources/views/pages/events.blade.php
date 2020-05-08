@extends('layouts.catalog')

@section('content')
    @include('events.events')
@endsection

@section('pagination')
    <div class="row ">
        <div class="column">
            @include('blocks.pagination.pagination')
        </div>
    </div>
@endsection
