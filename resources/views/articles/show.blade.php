@extends('layout')

@section('content')
<div id="wrapper">
    <ul class="style1">
        <li class="first">
            <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>

            <p>{{$article->slug}}</p>

        </li>
    </ul>
</div>
@endsection