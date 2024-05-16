<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Edit Client</title>
  </head>
<body>
 @include('includes.nav')
<div class="container" style="margin: left 20px;">
<h2> EDIT CILIENTS</h2>

<form action="{{ route('updateClient',$client->id)}}" method="POST">
@csrf
@method('put')
  <label for="clientname">clientName</label><br>
  <input type="text" id="clientName" name="clientName" value="{{$client->clientName}}"><br>
  <label for="lname">phone</label><br>
  <input type="text" id="phone" name="phone" value="{{$client->phone}}"><br><br>
  <label for="clientname">email</label><br>
  <input type="text" id="email" name="email" value="{{$client->email}}"><br>
  <label for="lname">website</label><br>
  <input type="text" id="website" name="website" value="{{$client->website}}"><br><br> 
  <input type="submit" value="Submit">
</form> 
</div>

</body>
</html>