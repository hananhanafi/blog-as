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
        @if (session('sukses'))
        <div class="alert alert-success">
            {{session('sukses')}}
        </div>
        @endif
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
            @foreach($data_categories as $category)
            <tr class="data-row">
            <th scope="row" class="id">{{$category->id}}</th>
            <td class="name">{{$category->name}}</td>
            <td>
                <button class="btn btn-warning btn-sm" id="edit-item">Edit</button>
                <a href="/category/{{$category->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Delete</a>
            </td>
            </tr>
            @endforeach
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
                <form method="post" action="/category/store">
                @csrf
                    <div class="form-group">
                        <label for="nama">Category Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>        
                     <button type="submit" class="btn btn-primary">Submit</button>

                </form>
                </div>
                </div>
            </div>
</div>

<!--Edit Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Categories</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="post" action="" id="edit-form">
                @csrf
                    <div class="form-group">
                        <label for="nama">Category Name</label>
                        <input type="text" class="form-control" id="modal-input-name" placeholder="Enter name" name="name">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>         <button type="submit" class="btn btn-primary">Submit</button>

                </form>
                </div>
                </div>
            </div>
</div>


<script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
  /**
   * for showing edit item popup
   */

  $(document).on('click', "#edit-item", function() {
    console.log("keklik");
    $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

    var options = {
      'backdrop': 'static'
    };
    $('#edit-modal').modal(options)
  })

  // on modal show
  $('#edit-modal').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
    var row = el.closest(".data-row");

    // get the data
    var id = row.children(".id").text();
    var name = row.children(".name").text();

    // fill the data in the input fields
    $("#modal-input-name").val(name);
    $("#edit-form").attr('action','/category/'+id+'/update');


  })

  // on modal hide
  $('#edit-modal').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  })
})


</script>
@endsection