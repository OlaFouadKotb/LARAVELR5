<!DOCTYPE html>
<html>
<body>

<h2>ADD STUDENTS</h2>

<form action="{{ route('insertStudent')}}" method="POST">
@csrf
  <label for="fname">Student Name:</label><br>
  <input type="text" id="studentName" name="studentName" value=""><br>
  <label for="age">Age</label><br>
  <input type="number" id="age" name="age" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>