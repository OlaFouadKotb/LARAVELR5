<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ route('insertClient') }}" method="POST">
@csrf
  <label for="clientname">clientName</label><br>
  <input type="text" id="clientName" name="clientName" value=""><br>
  <label for="lname">phone</label><br>
  <input type="text" id="phone" name="phone" value=""><br><br>
  <label for="clientname">email</label><br>
  <input type="text" id="email" name="email" value=""><br>
  <label for="lname">website</label><br>
  <input type="text" id="website" name="website" value=""><br><br> 
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>