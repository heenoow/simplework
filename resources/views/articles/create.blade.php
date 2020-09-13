@extends('layout')


@section('content')
<form method="post" action="{{ action('ArticlesController@store') }}">
    @csrf
    <div class="form-group">
        <label for="title">
            <h4> Title:</h4>
        </label>
        <input type="text" class="form-control" name="title">
    </div>

    <div class="form-group">
        <label for="slug">
            <h4> Slug:</h4>
        </label>
        <input type="text" class="form-control" name="slug">

    </div>

    <div class="form-group">
        <label for="body">
            <h4> Body:</h4>
        </label>
        <input type="textarea" class="form-control" name="body">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection