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

  <h2>Client Data</h2>
  <h2> <a href="{{route('client.create')}}" class="btn btn-primary">Add new Client</a></h2>
  <table class="table">
    <thead>
      <tr>
          <th>serial</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    @foreach($client as $clients)
      <tr>
          <td>{{$loop->index + 1}}</td>
        <td>{{ $clients->name }}</td>
        <td>{{ $clients->email }}</td>
        <td>{{ $clients->phone }}</td>
        <td>{{ $clients->address }}</td>

        <td>


          <div class="row">

            <a href="{{route('client.edit', $clients->id)}}" class="btn btn-primary">Edit</a>
            <form action="{{route('client.destroy', $clients->id)}}" method="get">
              @csrf
            <input type="submit" name="submit" value="Delete" class="btn btn-danger">
            </form>
          </div>

        
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>