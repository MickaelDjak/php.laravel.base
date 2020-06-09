<div class="row">
    <h1 class="column small-12">Быстрый поиск</h1>

    <div class="column small-12">
        <input
            wire:model="search"
            type="text"
            placeholder="Search..."
        />
    </div>
    <div class="row ">
        <div class="column">
            {{$data->links('blocks.pagination.lw_index')}}
        </div>
    </div>
    <div>
        @forelse ($data as $post)
            <div>
                <h3><a href="{{route('post_page',['slug'=> $post->slug])}}">{{ $post->title }}</a></h3>
                @include('blocks.tags.list',['tags' => $post->tags])
                <p>{{ $post->preview_text }}</p>
            </div>
        @empty
            <p class="text-gray-900">No contacts found...</p>
        @endforelse
    </div>
</div>

