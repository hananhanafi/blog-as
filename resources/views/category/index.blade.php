@extends('layouts/main')

@section('title','Categories')

@section('container')

<div class="container">
    <div class="mt-5">

    <div class="row">
        <div class="col">
        <h1 class="float-left">Tabel Categories</h1>
        <button class="btn btn btn-outline-primary align-bottom float-right" type="button" data-toggle="modal" data-target="#modal">Add</button>

        </div>
    </div>
    
    
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>
                <a href="/siswa/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/siswa/delete" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Delete</a>
            </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Categories</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="post" action="/siswa/store">
                @csrf
                    <div class="form-group">
                        <label for="nama">Category Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
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