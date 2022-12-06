<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">

    <title>Register</title>
</head>

<body>
    <div class="container">

        <h1 class="text-center py-5">Register</h1>

        @if ($errors->any())
@foreach ($errors->all() as $error )
{{$error}}
@endforeach
        @endif

        <form class=" p-4" action="{{url('register')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleDropdownFormName2">Full Name</label>
                <input type="text" class="form-control" name="name" id="exampleDropdownFormName2"
                    placeholder="name">
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormEmail2">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleDropdownFormEmail2"
                    placeholder="email@example.com">
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormPassword2">Password</label>
                <input type="password" class="form-control" name="password" id="exampleDropdownFormPassword2"
                    placeholder="password">
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormPassword_confirmation2">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="exampleDropdownFormPassword_confirmation2" placeholder="Confirm Password">
            </div>

            <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
        <p>To login <a href="{{url('login')}}"> click here</a></p>
    </div>
</body>

</html>
