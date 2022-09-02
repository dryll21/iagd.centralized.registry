<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 
 <style>
   .container{
    padding: 0.5%;
   } 
</style>
</head>
<body>
 
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
</body>
</html>
<script>
  $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#create-new-post').click(function () {
        $('#btn-save').val("create-post");
        $('#postForm').trigger("reset");
        $('#postCrudModal').html("Add New post");
        $('#ajax-crud-modal').modal('show');
    });
 
    $('body').on('click', '#edit-post', function () {

      var post_id = $(this).data('id');
      $.get('dashboard/'+post_id+'/edit', function (data) {
         $('#postCrudModal').html("Edit post");
          $('#btn-save').val("edit-post");
          $('#ajax-crud-modal').modal('show');
          $('#post_id').val(data.ob_id);
          $('#animal_name').val(data.animal_name);
          $('#iagd_no').val(data.iagd_no);  
          $('#PetType').val(data.PetType);  
      })
   });
    $('body').on('click', '.delete-post', function () {
        var post_id = $(this).data("id");
        confirm("Are You sure want to delete !");
        
        $.ajax({
            type: "DELETE",
            url: "{{ url('dashboard')}}"+'/'+post_id,
            success: function (data) {
                $("#post_id_" + post_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });   
  });
 
 if ($("#postForm").length > 0) {
      $("#postForm").validate({
 
     submitHandler: function(form) {
      var actionType = $('#btn-save').val();
      $('#btn-save').html('Sending..');
      
      $.ajax({
          data: $('#postForm').serialize(),
          url: "{{ route('dashboard.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
              var post = '<tr id="post_id_' + data.ob_id + '"><td>' + data.ob_id + '</td><td>' + data.iagd_no + '</td><td>' + data.animal_name + '</td><td>' + data.PetType + '</td><td>' + data.Date_of_death + '</td>';
              post += '<td><a href="javascript:void(0)" id="edit-post" data-id="' + data.ob_id + '" class="btn btn-info">Edit</a><a href="javascript:void(0)" id="delete-post" data-id="' + data.ob_id + '" class="btn btn-danger delete-post">Delete</a></td></tr>';
               
              
              if (actionType == "create-post") {
                  $('#posts-crud').prepend(post);
              } else {
                  $("#post_id_" + data.ob_id).replaceWith(post);
              }
 
              $('#postForm').trigger("reset");
              $('#ajax-crud-modal').modal('hide');
              $('#btn-save').html('Save Changes');
              
          },
          error: function (data) {
              console.log('Error:', data);
              $('#btn-save').html('Save Changes');
          }
      });
    }
  })
    }
   
  
</script>