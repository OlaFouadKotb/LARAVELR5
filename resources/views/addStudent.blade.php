<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
@include('includes.nav1')
<div class="container" style="margin: left 20px;">
<h2>ADD STUDENTS</h2>

<form action="{{ route('insertStudent')}}" method="POST">
@csrf
  <label for="fname">Student Name:</label><br>
  <input type="text" id="studentName" name="studentName" value=""><br>
  <label for="age">Age</label><br>
  <input type="number" id="age" name="age" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

</div>
</body>
</html>