<div class="row gnc-form-box">
    <h2 class="column small-12"> {{ $type }}. Быстрый поиск</h2>
    <div class="column small-12 gnc-form-box-form-section">
        <div class="row">
            <div class="column small-3">
                <input
                    class="login-box-input"
                    id="r2"
                    wire:model="type"
                    type="radio"
                    name="type"
                    value="Посты"
                    checked
                />
                <label for="r2">Посты</label>
            </div>

            <div class="column small-3">
                <input
                    class="login-box-input"
                    id="r3"
                    wire:model="type"
                    type="radio"
                    name="type"
                    value="События"
                />
                <label for="r3">События</label>
            </div>

            <div class="column small-3">
                <input
                    class="login-box-input"
                    id="r4"
                    wire:model="type"
                    type="radio"
                    name="type"
                    value="Проповеди"
                />
                <label for="r4">Проповеди</label>
            </div>
        </div>
    </div>
    <div class="column small-12 gnc-form-box-form-section">
        <input
            class="login-box-input"
            wire:model="search"
            type="text"
            placeholder="Search..."
        />
    </div>
    <div class="column">
        {{$data->links('blocks.pagination.lw_index')}}
    </div>
    <div>
        @forelse ($data as $post)
            <div>
                <h3><a href="{{route('post_page',['slug'=> $post->slug])}}">{{ $post->title }}</a></h3>
                <h4>{{ $post->created_at }}</h4>
                @include('blocks.tags.list',['tags' => $post->tags])
                <p>{{ $post->preview_text }}</p>
            </div>
        @empty
            <p class="text-gray-900">No contacts found...</p>
        @endforelse
    </div>
</div>

