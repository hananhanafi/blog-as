@extends('layouts/main')

@section('title','Articles')

@section('container')
    <div class="container">

        <form method="post" action="/article/{{$article->id}}/update" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Judul</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Enter judul"
                    name="name"
                    value="{{$article->name}}">
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select id="category_id" class="form-control" name="category_id" >
                        @foreach($data_categories as $category)
                            <option value="{{$category->id}}" @if($category->id == $article->category_id) selected  @endif >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="10">{{$article->content}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
        </div>

@endsection