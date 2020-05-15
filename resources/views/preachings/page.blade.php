@extends('layouts.index')

@section('content')
    <div class="post-article-container">
        <div class="post-article-image">
            <div class="article-image">
                <img src="https://i.imgur.com/0buQ75a.jpg" alt="Space">
            </div>
        </div>

        <div class="row  align-center">
            <div class="large-12 columns post-article-title">
                <h3 class="article-title">
                    Familiarity Bias is Holding You Back: It’s Time to Embrace Arrow Functions
                </h3>
            </div>
        </div>

        <div class="row align-center">
            <div class="large-12 columns">
                @include('blocks.marker.marker')
            </div>
        </div>

        <div class="row align-center">
            <div class="large-12 columns">
                @include('blocks.author.author_social')
            </div>
        </div>

        <div class="row post-article-content ">
            <div class="columns small-12 medium-9 article-content ">
                <div class="post-article-video">
                    <iframe width="95%" height="400px" src="https://www.youtube.com/embed/6Ptwm9G8ySo" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>

                <div class="post-article-slides">
                    <iframe src="//www.slideshare.net/slideshow/embed_code/key/5pgeUI3weW1FOi" width="95%" height="400"
                            frameborder="0" marginwidth="0" marginheight="0" scrolling="no"
                            style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 95%;"
                            allowfullscreen></iframe>
                    <div style="margin-bottom:5px">
                        <strong>
                            <a href="//www.slideshare.net/IbcChurch/513627"
                               title="Айсберг успіху - Станіслав Грунтковський на Ісуса Навина 5:13-6:27"
                               target="_blank">Айсберг успіху - Станіслав Грунтковський на Ісуса
                                Навина 5:13-6:27</a>
                        </strong> <strong>
                            <a href="https://www.slideshare.net/IbcChurch" target="_blank">Ірпінська Біблійна
                                Церква</a>
                        </strong>
                    </div>
                </div>

                <div class="post-article-audio">
                    <audio controls preload="none" style="width: 95%">
                        <source src="/audio/song.mp3" type="audio/mpeg">
                        <a href="audio/song.mp3">Скачайте музыку</a>.
                    </audio>
                </div>

                <div class="post-article-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate accusantium unde culpa est
                        dolorem earum in numquam accusamus, recusandae dolorum. Aperiam nesciunt iste numquam
                        laboriosam, asperiores explicabo impedit laborum, non, itaque quae nemo, assumenda sequi autem
                        pariatur debitis obcaecati culpa mollitia ratione perspiciatis officiis accusamus magni!
                        Inventore ipsam alias non ea dolores veritatis vero sint libero tempore. Alias vero, libero
                        sapiente, maxime facilis magnam, natus modi mollitia at ut numquam consequuntur expedita
                        recusandae incidunt perspiciatis placeat sint doloribus. Ipsam numquam, optio consequuntur
                        commodi possimus! Earum rem rerum, possimus, quae repellat modi omnis quos sapiente magni
                        nesciunt similique atque veniam ipsa.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate accusantium unde culpa est
                        dolorem earum in numquam accusamus, recusandae dolorum. Aperiam nesciunt iste numquam
                        laboriosam, asperiores explicabo impedit laborum, non, itaque quae nemo, assumenda sequi autem
                        pariatur debitis obcaecati culpa mollitia ratione perspiciatis officiis accusamus magni!
                        Inventore ipsam alias non ea dolores veritatis vero sint libero tempore. Alias vero, libero
                        sapiente, maxime facilis magnam, natus modi mollitia at ut numquam consequuntur expedita
                        recusandae incidunt perspiciatis placeat sint doloribus. Ipsam numquam, optio consequuntur
                        commodi possimus! Earum rem rerum, possimus, quae repellat modi omnis quos sapiente magni
                        nesciunt similique atque veniam ipsa.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate accusantium unde culpa est
                        dolorem earum in numquam accusamus, recusandae dolorum. Aperiam nesciunt iste numquam
                        laboriosam, asperiores explicabo impedit laborum, non, itaque quae nemo, assumenda sequi autem
                        pariatur debitis obcaecati culpa mollitia ratione perspiciatis officiis accusamus magni!
                        Inventore ipsam alias non ea dolores veritatis vero sint libero tempore. Alias vero, libero
                        sapiente, maxime facilis magnam, natus modi mollitia at ut numquam consequuntur expedita
                        recusandae incidunt perspiciatis placeat sint doloribus. Ipsam numquam, optio consequuntur
                        commodi possimus! Earum rem rerum, possimus, quae repellat modi omnis quos sapiente magni
                        nesciunt similique atque veniam ipsa.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate accusantium unde culpa est
                        dolorem earum in numquam accusamus, recusandae dolorum. Aperiam nesciunt iste numquam
                        laboriosam, asperiores explicabo impedit laborum, non, itaque quae nemo, assumenda sequi autem
                        pariatur debitis obcaecati culpa mollitia ratione perspiciatis officiis accusamus magni!
                        Inventore ipsam alias non ea dolores veritatis vero sint libero tempore. Alias vero, libero
                        sapiente, maxime facilis magnam, natus modi mollitia at ut numquam consequuntur expedita
                        recusandae incidunt perspiciatis placeat sint doloribus. Ipsam numquam, optio consequuntur
                        commodi possimus! Earum rem rerum, possimus, quae repellat modi omnis quos sapiente magni
                        nesciunt similique atque veniam ipsa.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate accusantium unde culpa est
                        dolorem earum in numquam accusamus, recusandae dolorum. Aperiam nesciunt iste numquam
                        laboriosam, asperiores explicabo impedit laborum, non, itaque quae nemo, assumenda sequi autem
                        pariatur debitis obcaecati culpa mollitia ratione perspiciatis officiis accusamus magni!
                        Inventore ipsam alias non ea dolores veritatis vero sint libero tempore. Alias vero, libero
                        sapiente, maxime facilis magnam, natus modi mollitia at ut numquam consequuntur expedita
                        recusandae incidunt perspiciatis placeat sint doloribus. Ipsam numquam, optio consequuntur
                        commodi possimus! Earum rem rerum, possimus, quae repellat modi omnis quos sapiente magni
                        nesciunt similique atque veniam ipsa.
                    </p>
                </div>
            </div>

            <div class="columns small-12 medium-3 article-content">
                @include('blocks.sidebar.articl')
            </div>
        </div>
    </div>
@endsection

@section('comments')
    <div class="row">
        <div class="columns small-12 medium-9">
            @include('blocks.comments.list')
        </div>
    </div>
@endsection
