<!DOCTYPE html>
<html>
<head>
    <title>Edit Client</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('includes.nav')

    <div class="container" style="margin-left: 20px;">
        <h2>Edit Client</h2>

        <form action="{{ route('updateClient', $client->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="clientName">Client Name:</label>
                <input type="text" id="clientName" name="clientName" class="form-control" value="{{ old('clientName', $client->clientName) }}">
                @error('clientName')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', $client->phone) }}">
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $client->email) }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="website">Website:</label>
                <input type="url" id="website" name="website" class="form-control" value="{{ old('website', $client->website) }}">
                @error('website')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" class="form-control">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @if ($client->image)
                    <p>Current Image: <img src="{{ asset('assets/images/' . $client->image) }}" style="max-width: 200px;" alt="Current Image"></p>
                @endif
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>