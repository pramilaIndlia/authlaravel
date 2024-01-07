<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        margin-top:"40px"
    }
</style>
<body>
    <x-header/>
<table border="1" >
<thead>
    <tr>
        <th>Name</th>
        <th>Lname</th>
        <th>Email</th>
    </tr>
</thead>
<tbody>
   
    @foreach($data as $member)
    <tr>
    <td>{{ $member->name }}</td>
    <td>{{ $member->lname }}</td>
    <td>{{ $member->email }}</td>
    </tr>
@endforeach
   
</tbody>
</table>
</body>
</html>