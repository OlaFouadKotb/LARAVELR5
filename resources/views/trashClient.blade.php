<!DOCTYPE html>
<html lang="en">
<head>
  <title> Trashed Clients</title>
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

@include('includes.nav')
<div class="container">
  <h2> Trash Clients </h2>
  <table class="table table-hover">
  <thead>
<tr>
    <td>Name</td>
    <td>phone</td>
    <td>email</td>
    <td>website</td>
    <td>restore</td>
    <td>show</td>
    <td>Delete</td>
  </tr>
</thead>
    <tbody>
    @foreach($trash as $client)
<tr>
<td>{{ $client->clientName }}</td>
<td>{{ $client->phone}}</td>
<td>{{ $client->email }}</td>
<td>{{ $client->website}}</td>
<td><a href="{{route('restoreClient',$client->id)}}">Restore</a></td>
<td><a href="{{route('showClient',$client->id)}}">show</a></td>
<td>
  <form action="{{route('forceDeleteClient')}}" method="post">
    @csrf
    @method('DELETE')
    <input type="hidden" value="{{$client->id}}" name="id">
    <input type="submit" onclick=" return confirm('Are you sure to delete')" value="delete">
  </form>
</td>
</tr>
@endforeach
     
    </tbody>

    
  </table>
</div>

</body>
</html>
