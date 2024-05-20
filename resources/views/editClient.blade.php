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

<div>
        <label for="clientName">Client Name:</label>
        <input type="text" id="clientName" name="clientName" value="{{ old('clientName', $client->clientName ?? '') }}">
        @error('clientName')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone', $client->phone ?? '') }}">
        @error('phone')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $client->email ?? '') }}">
        @error('email')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="website">Website:</label>
        <input type="url" id="website" name="website" value="{{ old('website', $client->website ?? '') }}">
        @error('website')
            <div>{{ $message }}</div>
        @enderror
    </div>
  <input type="submit" value="Submit">
</form> 
</div>

</body>
</html>