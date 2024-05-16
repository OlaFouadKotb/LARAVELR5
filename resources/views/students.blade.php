<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>

@include('includes.nav1')
<div class="container">
  <h2>Students Data</h2>
  <table class="table table-hover">

    <thead>
<tr>
    <td>Name</td>
    <td>Age</td>
    <td>Edit</td>
    <td>Show</td>
    <td>Delete</td>
  </tr>
</thead>
<tbody>
    @foreach($students as $student)
<tr>
<td>{{$student->studentName }}</td>
<td>{{$student->age}}</td>
<td><a href="{{route('editStudent',$student->id)}}">Edit</a></td>
<td><a href="{{route('showStudent',$student->id)}}">Show</a></td>
<td>
  <form action="{{route('delStudent')}}" method="post">
    @csrf
    @method('DELETE')
    <input type="hidden" value="{{$student->id}}" name="id">
    <input type="submit" value="delete">
  </form>
</td>
</tr>


@endforeach
     
</tbody>
  </table>
</div>
</body>
</html>
