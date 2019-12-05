@extends('layouts/main')

@section('title','Articles')

@section('container')
<div class="container">

    <div class="row mt-5">
        <div class="col">
        <h1 class="float-left">Tabel Articles</h1>
        <button class="btn btn btn-outline-primary align-bottom float-right" type="button" data-toggle="modal" data-target="#modal">Add</button>

        </div>
    </div>
    <div class="row">
    <div class="col">
        <div class="card my-2">
        <div class="card-body">    
            <a href="#" class="btn btn-danger float-right">Delete</a>
            <h5 class="card-title">Judul</h5>
            <p class="card-text"> category : category</p>
            <a href="/blog/read" class="btn btn-primary">Read</a>
        </div>
        </div>
        <div class="card my-2">
        <div class="card-body">    
            <a href="#" class="btn btn-danger float-right">Delete</a>
            <h5 class="card-title">Judul</h5>
            <p class="card-text"> category : category</p>
            <a href="#" class="btn btn-primary">Read</a>
        </div>
        </div>
        <div class="card my-2">
        <div class="card-body">    
            <a href="#" class="btn btn-danger float-right">Delete</a>
            <h5 class="card-title">Judul</h5>
            <p class="card-text"> category : category</p>
            <a href="#" class="btn btn-primary">Read</a>
        </div>
        </div>
        
    </div>
    </div>
    
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Articles</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="post" action="/siswa/store">
                @csrf
                    <div class="form-group">
                        <label for="nama">Judul</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="10"></textarea>
                    </div>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>         <button type="submit" class="btn btn-primary">Submit</button>

                </form>
                </div>
                </div>
            </div>
</div>


@endsection