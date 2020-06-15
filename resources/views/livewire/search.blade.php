<div class="row gnc-form-box">
    <h2 class="column small-12">Быстрый поиск</h2>
    <div class="column small-12 gnc-form-box-form-section">
        <input
            wire:model="search"
            class="gnc-form-box-input"
            type="text"
            placeholder="Поисковый запос..."
        />
    </div>
    <div class="column">
        {{$data->links('blocks.pagination.lw_index')}}
    </div>

    <div>
        @forelse ($data as $model)
            @if($model->type === 'event')
                @include('events.card',['event' => $model])
            @endif

            @if($model->type === 'post')
                @include('posts.card',['post' => $model])
            @endif

            @if($model->type === 'preaching')
                @include('preachings.card',['preaching' => $model])
            @endif
        @empty
            <p class="text-gray-900">No contacts found...</p>
        @endforelse
    </div>
</div>

