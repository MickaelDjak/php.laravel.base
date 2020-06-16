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
</div>

<div class="row gnc-form-box">
    <div class="column">
        {{$data->links('blocks.pagination.lw_index')}}
    </div>
</div>

<div class="row gnc-form-box">
    <div class="column">
        @forelse ($data as $model)
            @include('blocks.cards.article',['article' => $model])
        @empty
            <p class="text-gray-900">No contacts found...</p>
        @endforelse
    </div>
</div>
