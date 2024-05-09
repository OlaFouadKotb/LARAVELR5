<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">clients</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('addClient')}}">ADD</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""{{route('clients')}}"">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{route('clients')}}">Clients</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

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