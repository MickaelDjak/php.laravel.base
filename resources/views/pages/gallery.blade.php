@extends('layouts.data')

@section('content')
    @for($j= 2020; $j > 2017; $j--)
        @component('blocks.title.title')
            @slot('name')
                Фотографии за {{ $j }}
            @endslot
            {{--                {{ url('/ministry') }}--}}
        @endcomponent
        <div class="row">
            <div class="gnc-image-gallery column">
                <div class="gnc-image-gallery-grid">
                    <div class="gnc-image-gallery-item">
                        <img src="https://placehold.it/300x300" class="" height="" width="" alt="">
                        <div class="callout">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio
                            aliquam, corrupti, quis rem beatae quidem, labore, aspernatur nihil distinctio fugit
                            sint facilis sunt eius fugiat iusto blanditiis tenetur alias ut.
                        </div>
                    </div>
                    <div class="gnc-image-gallery-item">
                    </div>
                    <div class="gnc-image-gallery-item">
                        <img src="https://placehold.it/300x600" class="" height="" width="" alt="">
                        <div class="callout">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Op.</div>
                    </div>
                    <div class="gnc-image-gallery-item">
                        <img src="https://placehold.it/300x200" class="" height="" width="" alt="">
                        <div class="callout">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio
                            aliquam, corrupti, quis rem beatae quidem, labore, aspernatur nihil distinctio fugit
                            sint facilis sunt eius fugiat iusto blanditiis tenetur alias ut. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit. Odio beatae deserunt quisquam similique vitae hic
                            eveniet, velit, natus unde tempora excepturi labore, veniam necessitatibus. Vitae,
                            magnam sequi. Veritatis, cumque, iste?
                        </div>
                    </div>

                    <div class="gnc-image-gallery-item">
                        <img src="https://placehold.it/700x200" class="" height="" width="" alt="">
                        <div class="callout">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio
                            aliquam, corrupti, quis rem beatae quidem, labore, a ut.
                        </div>
                    </div>
                    <div class="gnc-image-gallery-item">
                        <img src="https://placehold.it/350x400" class="" height="" width="" alt="">
                        <div class="callout">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio
                            aliquam, corrupti, quis rem beatae quidem, labo?
                        </div>
                    </div>

                    <div class="gnc-image-gallery-item">
                        <img src="https://placehold.it/450x400" class="" height="" width="" alt="">
                        <div class="callout">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio
                            aliquam, corrupti, quis rem beatae quidem, la, consectetur adipisicing elit. Odio beatae
                            deserunt quisquam similique vitae hic eveniet, velit, natus unde tempora excepturi
                            labore, veniam necessitatibus. Vitae, magnam sequi. Veritatis, cumque, iste?
                        </div>
                    </div>

                    <div class="gnc-image-gallery-item">
                        <img src="https://placehold.it/350x80" class="" height="" width="" alt="">
                        <div class="callout">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio
                            aliquam, corrupti, quis rem beatae quidem, labore, aspernatur nihil distinctio fugit
                            sint facilis sunt eius fam necessitatibus. Vitae, magnam sequi. Veritatis, cumque, iste?
                        </div>
                    </div>
                    <div class="gnc-image-gallery-item">
                        <img src="https://placehold.it/400x400" class="" height="" width="" alt="">
                    </div>
                    <div class="gnc-image-gallery-item">
                        <img src="https://placehold.it/440x400" class="" height="" width="" alt="">
                        <div class="callout">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio
                            aliquam, corrupti, quis rem beatae quidem, labore, aspernatur nihil distinctio fugit
                            sint facilis sunt eius fam necessitatibus. Vitae, magnam sequi. Veritatis, cumque, iste?
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endfor
@endsection
