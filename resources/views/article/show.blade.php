@extends('layouts/main')

@section('title','Articles')

@section('container')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <a href="/article/{{$article->id}}/edit" class="btn btn-warning float-right">Edit</a>
            <h1>{{$article->name}}</h1>
            <h5>Category : {{$category->name}}</h5>
            <p>{{$article->content}}</p>
        </div>
    </div>
</div>


@endsection