<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Practice') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
  <h2>Client Data Edit</h2>



  <form action="{{route('client.update',$clients->id)}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="row">

        <div class="form-group col-md-4 mt-3">
            <div class="mb-3">
                <label for="name"><h4>Name</h4></label>
                <input type="text" class="form-control" id="name" name="name" value="{{$clients->name}}">

                @error('name')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-5">
                <label for="email"><h4>Email</h4></label>
                <input type="text" class="form-control" id="email" name="email" value="{{$clients->email}}">

                @error('email')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="mb-5">
              <label for="phone"><h4>Phone</h4></label>
              <input type="text" class="form-control" id="phone" name="phone" value="{{$clients->phone}}">

              @error('phone')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-2">
            <label for="address"><h4>Address</h4></label>
            <input type="text" class="form-control" id="address" name="address" value="{{$clients->address}}">

            @error('address')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        </div>
    </div>
        <input type="submit" name="submit" value="Update" class="btn btn-primary mt-5">
    </form>
</div>
</body>
</html>