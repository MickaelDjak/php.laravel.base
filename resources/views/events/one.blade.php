<div class="card card-product-hover">
    <a href="{{ route('event_page') }}">
        <img src="https://zurb.com/blog/system/images/690/original/blue_bw_web.jpg?1354921642"
             alt="sweet foundation shirt"/>
    </a>

    <div class="card-product-hover-icons">
        <a href="#"><i class="fa fa-star-o"></i></a>
        <a href="#"><i class="fa fa-share-alt"></i></a>
    </div>
    <div class="card-product-hover-details">
        @include('blocks.publish_type_and_date')
        <a href="{{ route('event_page') }}"><h3 class="card-product-hover-title">Поехали с нами ...</h3></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad autem cumque deleniti dolore dolorum
            earum excepturi, fugiat iusto labore laborum laudantium maiores minima nobis officiis possimus praesentium
            quae quasi, quia temporibus veniam voluptatem voluptatum? Asperiores autem beatae dignissimos esse in labore
            laborum quam quidem sint, soluta suscipit unde vel?</p>
        @include('blocks.author-data')
    </div>

</div>
