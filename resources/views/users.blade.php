@extends('layout')

@section('contant')

<div class="table-wrapper">
         <table class ="fl-table">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Lname</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Edit</th>
                  <th>Delete</th>
               </tr>
            </thead>
            <tbody>
               @foreach($data as $member)
               <tr>
                  <td>{{ $member->id }}</td>
                  <td>{{ $member->name }}</td>
                  <td>{{ $member->lname }}</td>
                  <td>{{ $member->email }}</td>
                  <td>{{$member->password}}</td>
                  <td><a href="{{ url('edit/' . $member['id']) }}">Edit</a></td>
                  <td><a href="{{ url('delete/' . $member['id']) }}">Delete</a></td>
               </tr>
               @endforeach
      
      </tbody>
      </table>
      </div>
@endsection