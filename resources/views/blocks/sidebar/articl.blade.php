@extends('blocks.sidebar.core')

@section('sidebar_bottom')
    <div class="gnc-sidebar-section">
        <h4>План статьи</h4>
        <ul class="vertical menu">
            <li><a href="#">Skyler</a></li>
            <li><a href="#">Jesse</a></li>
            <li><a href="#">Mike</a></li>
            <li><a href="#">Holly</a></li>
        </ul>
    </div>
@endsection

@section('sidebar_tag_list')
    @include('blocks.tags.tag')
@endsection
