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

<form action="{{ route('updateStudent',$student->id)}}" method="POST">
@csrf
@method('put')
  
<div>
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" name="studentName" value="{{ old('studentName', $student->studentName ?? '') }}">
        @error('studentName')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="{{ old('age', $student->age ?? '') }}">
        @error('age')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <input type="submit" value="Submit">
</form> 

</div>
</body>
</html>