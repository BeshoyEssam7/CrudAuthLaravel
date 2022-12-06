<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">

    <title>Login</title>
</head>
<body>
<div class="container">
    <h1 class="py-5">Login Page</h1>
    @if ($errors->any())
@foreach ($errors->all() as $error )
{{$error}}
@endforeach
    @endif
    <form class="py-4" method="POST" action="{{url('login')}}">
        @csrf
        <div class="form-group">
          <label for="exampleDropdownFormEmail2">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleDropdownFormEmail2" placeholder="email@example.com">
        </div>
        <div class="form-group">
          <label for="exampleDropdownFormPassword2">Password</label>
          <input type="password" class="form-control" name="password" id="exampleDropdownFormPassword2" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>

      </form>
     <p> To create new account <a href=" {{url('register')}}">click here</a></p>
</div>














</body>
</html>
