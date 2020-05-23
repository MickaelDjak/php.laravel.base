@extends('layouts.article_page_real')

@section('banner')
    <div class="post-article-image">
        <div class="article-image">
            <img src="https://i.imgur.com/0buQ75a.jpg" alt="Space">
        </div>
    </div>
@endsection

@section('title')
    Familiarity Bias is Holding You Back: It’s Time to Embrace Arrow Functions
@endsection

@section('slides')
    @include('blocks.external.slides')
@endsection

@section('video')
    <iframe width="560" height="315" src="https://www.youtube.com/embed/8bFMj_6IMDQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endsection

@section('text')
    @foreach(range(1,8) as $i)
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
    @endforeach
@endsection
