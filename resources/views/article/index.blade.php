@extends('layouts/main')

@section('title','Articles')

@section('container')
<div class="container">

    <div class="row mt-5">
        <div class="col">
        <h1 class="float-left">Tabel Articles</h1>
        <a class="btn btn btn-outline-primary align-bottom float-right" type="button" href="/article/create">Add</a>

        </div>
    </div>
    <div class="row">
    <div class="col">
        @foreach($data_articles as $article)
        <div class="card my-2">
        <div class="card-body">    
            <a href="/article/{{$article->id}}/delete" class="btn btn-danger float-right">Delete</a>
            <h5 class="card-title">{{ $article->name }}</h5>
            @php
                $categoryName = 'categoryName';
                foreach($data_categories as $category){
                    if($article->category_id == $category->id){
                        $categoryName = $category->name;
                        break;
                    }
                }
            @endphp
            <p class="card-text"> category : {{$categoryName}}</p>
            <a href="/article/{{$article->id}}/show" class="btn btn-primary">Read</a>
        </div>
        </div>
        @endforeach
        
    </div>
    </div>
    
</div>


@endsection