@include('blocks.search.index')

@yield('sidebar_top')

@include('blocks.sidebar.elements.readBibleToday')
@include('blocks.sidebar.elements.prayerNeedToday')
@include('blocks.sidebar.elements.donateToday')
@include('blocks.sidebar.elements.subscribe')

@yield('sidebar_bottom')

@yield('sidebar_tag_list')
