<section class="row">
    @for ($i = 0; $i < 4; $i++)
        <div class="column small-12 medium-6">
            @include('blocks.cards.event', [
    'src' => "https://images.pexels.com/photos/300857/pexels-photo-300857.jpeg?h=350&auto=compress&cs=tinysrgb"
])
        </div>
    @endfor
</section>
