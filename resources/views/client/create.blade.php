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
  <h2>Create Client Data</h2>
 


  <form action="{{route('client.store')}}" method="post" enctype="multipart/form-data"> 
  @csrf
  
  <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" name="name" id="name" placeholder="Enter Name">
    @error('name')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="email">
    @error('email')
    <span class="text-danger">{{ $message }}</span>
  @enderror
  </div>


  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="phone" class="form-control" name="phone" id="phone" placeholder="phone">
    @error('phone')
    <span class="text-danger">{{ $message }}</span>
  @enderror
  </div>


  <div class="form-group">
    <label for="address">Address</label>
    <input type="address" class="form-control" name="address" id="address" placeholder="address">
    @error('address')
    <span class="text-danger">{{ $message }}</span>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>