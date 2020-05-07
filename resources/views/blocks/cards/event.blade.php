<div class="marketing-site-content-section">
    <div class="marketing-site-content-section-block small-order-2 medium-order-1">
        <h3 class="marketing-site-content-section-block-header">
            <a href="{{ route('event_page') }}">
                Honing its dynamic pricing formula, Vacasa wants to make homeowners more cash than Airbnb
            </a>
        </h3>
        @include('blocks.marker.marker')
        <p class="marketing-site-content-section-block-subheader subheader">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat longshoreman... </p>

        @include('blocks.author.author')

        <a href="#" class="round button small">Читать детальнее</a>
    </div>

    <div class="marketing-site-content-section-img small-order-1 medium-order-2">
        <a href="{{ route('event_page') }}">
            <img src="{{ $src }}" alt="" />
        </a>
    </div>
</div>

