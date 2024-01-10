
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
<button type="button" style="display: inline-block; background-color: red; color: white; padding: 10px; text-decoration: none; border-radius: 10px; float: left;">
    <i class="fa fa-trash-o fa-lg"></i> All Delete
</button>


         <table class ="fl-table">
            <thead>
               <tr>
                  <th><input type="checkbox" name="" id="select_all_ids"></th>
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
               <tr>
                  <td><input type="checkbox" name="ids[{{$member->id}}]" value="{{$member->id}}"></td id="member->ids{{$member->id}}">
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
     

@endsection
