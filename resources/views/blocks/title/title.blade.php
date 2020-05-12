<div class="row align-center gnc-title">
    <h2 class="column">{{ $name }}</h2>
    @if($description ?? '' != '')
        <p>{{$description ?? ''}}</p>
    @endif

    @if($slot != '')
        <a class="column shrink" href="{{ $slot }}">@lang('navigation.view_all_items')</a>
    @endif
</div>
