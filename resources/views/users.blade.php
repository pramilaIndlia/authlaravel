
@extends('layout')

@section('contant')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<div class="table-wrapper" >
<div class="p-2 mb-1 bg-white text-black">
   
		<div class="container">
      <h1>All Members</h1>
<a href="sign-up" style="display: inline-block;  background-color: aqua; color: white; padding: 10px; text-decoration: none; border-radius: 5px;  float: right;">
    <i class="fa fa-fw fa-pencil"></i> Add New Member
</a>
<a href="/users" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger" id="deleteAllSelectedRecord">
            <i class="material-icons fa fa-trash" aria-hidden="true"></i>
            <span>All Delete</span>
          </a>


         <table class ="fl-table">
            <thead>
               <tr>
               <th>
            <span class="custom-checkbox">
              <input type="checkbox" name="" id="select_all_ids">
              <label for="selectAll"></label>
            </span>
          </th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Lname</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Rpass</th>
                  <th><i class="fa fa-fw fa-pencil"></i> Edit</th>
                  <th><i class="fa fa-trash-o fa-lg"></i>Delete</th>
               </tr>
            </thead>
            <tbody class="text-align:center">
               @foreach($data as $member)
               <tr  id="employee_ids{{$member['id']}}">
               <td>
            <span class="custom-checkbox">
              <input type="checkbox" id="checkbox5" 
              name="ids" class="checkbox_ids" 
              value="{{ $member->id }}">
              <label for="checkbox5"></label>
            </span>
          </td>
                  <td>{{ $member->id }}</td>
                  <td>{{ $member->name }}</td>
                  <td>{{ $member->lname }}</td>
                  <td>{{ $member->email }}</td>
                  <td>{{$member->password}}</td>
                  <th>{{$member->rpass}}</th>
                  <th><a class="btn btn-info" href="{{ url('edit/' . $member['id']) }}"><i class="fa fa-pencil fa-fw"></i> Edit</a></th>
                  <th><a class="btn btn-danger" href="{{ url('delete/' . $member['id']) }}">
                   <i class="fa fa-trash-o fa-lg"></i> Delete</a></th>
               </tr>
               @endforeach
      
      </tbody>
      </table>
      <div >
         {{$data->links()}}
      </div>
     

      </div>
      <script>
          document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const modalToOpen = urlParams.get('modal');
        console.log(modalToOpen,'modalToOpen')
            if (modalToOpen) {
              $(`#${modalToOpen}`).modal('show');
            }
          });
        </script>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
   $(document).ready(function() {
            $("#select_all_ids").click(function() {
              $(".checkbox_ids").prop("checked", $(this).prop("checked"));
            });

            $('#deleteAllSelectedRecord').click(function(e) {
              e.preventDefault();
              var all_ids = [];


              $('input:checkbox[name=ids]:checked').each(function() {
                all_ids.push($(this).val());
              });
              $.ajax({
                url: "{{ route('delete.multiple') }}",
                type: "DELETE",
                data: {
                  ids: all_ids,
                  _token: "{{ csrf_token() }}"
                },

                success: function(response) {
                  $.each(all_ids, function(key, val) {
                    $('#employee_ids' + val).remove();
                  });
                }
              });
            });

            document.addEventListener("DOMContentLoaded", function() {
              

              function togglePaginationVisibility() {
                var paginationContainer = $('#pagination-container');
                paginationContainer.toggle(numberOfUsers > 0);
              }
              togglePaginationVisibility();

              $('#deleteUserButton').on('click', function() {
                togglePaginationVisibility();
              });
            });

          });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
