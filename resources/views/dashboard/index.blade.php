@extends('dashboard.layout')
@section('content')
 
<div class="container">
    
    <div class="row">
        <div class="col-12">
          <a href="javascript:void(0)" class="btn btn-success mb-2" id="create-new-post">Add Deceased</a> 
          
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Obituary Id</th>
                 <th>IAGD No.</th>
                 <th>Name</th>
                 <th>Pet Type</th>
                 <th>Date of Death</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody id="posts-crud">
              @foreach($ob_data as $post)
              <tr id="post_id_{{ $post->ob_id }}">
                 <td>{{ $post->ob_id  }}</td>
                 <td>{{ $post->iagd_no }}</td>
                 <td>{{ $post->animal_name }}</td>
                 <td>{{ $post->PetType }}</td>
                 <td>{{ $post->Date_of_death }}</td>
                 <td>
                    <a href="javascript:void(0)" id="edit-post" data-id="{{ $post->ob_id }}" class="btn btn-info">Edit</a>    

                    <a href="javascript:void(0)" id="delete-post" data-id="{{ $post->ob_id }}" class="btn btn-danger delete-post">Delete</a>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          
       </div> 
    </div>
</div>
<div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="postCrudModal"></h4>
    </div>
    <div class="modal-body">
        <form id="postForm" name="postForm" class="form-horizontal">
           <input type="hidden" name="post_id" id="post_id">
            <div class="form-group">
                <label for="name" class="col-sm-12 control-label">IAGD No.</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="iagd_no" name="iagd_no" value="" required="">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-12 control-label">Name</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="animal_name" name="animal_name" value="" required="">
                </div>
            </div>
 
            <div class="form-group">
                <label class="col-sm-12 control-label">PetType</label>
                <div class="col-sm-12">
                    <input class="form-control" id="PetType" name="PetType" value="" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12 control-label">Date of death</label>
                <div class="col-sm-12">
                    <input class="form-control" type="date" id="Date_of_death" name="Date_of_death" value="" required="">
                    
                </div>
            </div>
            <div class="col-sm-offset-2 col-sm-10">
             <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save
             </button>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        
    </div>
</div>
</div>
</div>


@endsection