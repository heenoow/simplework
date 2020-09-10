@extends('layout')


@section('articles')

@foreach($articles as $article)
<li class="first">

    <h3><a href="">{{$article->title}}</a></h3>
    <p>{{$article->slug}}</p>
</li>
@endforeach

@endsection