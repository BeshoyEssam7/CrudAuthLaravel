<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">

</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('categories') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>

            </ul>
            <ul>
                @guest

                    <a href="{{ url('login') }}">login</a>
                    {{-- <li class="nav-item active">
                </li> --}}
                    <a href="{{ url('register') }}">Register</a>
                @endguest
                {{-- <li class="nav-item active">
                </li> --}}
                @auth
                <p> welcmoe {{ Auth::user()->name }}</p>

                    <form action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button type="submit">logout</button>
                    </form>
                @endauth
                {{-- <li class="nav-item active">
                </li> --}}
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
        </div>
    </nav>
    <h1 class="text-center">Category Details</h1>
    <div class="container">
        <p>back to <a href="{{ url('categories') }}">all categories</a></p>
        <h3 class="my-5">{{ $category->name }}</h3>
        {{-- <p>About {{$category->name}}</p> --}}
        <p>{{ $category->desc }}</p>
        <h5> Price: {{ $category->price }} $</h5>



        @if (Auth::user()->role == 'manager' or Auth::user()->role == 'leader')
            <p>To Update <a class="btn btn-info" href='{{ url("edit/$category->id") }}'>click here</a></p>
        @endif
        @if (Auth::user()->role == 'manager')
            <form action='{{ url("delete/category/$category->id") }}' method="POST">
                @csrf
                @method('Delete')
                <button type="submit">Delete category</button>
            </form>
    </div>
    @endif
    <p></p>
</body>

</html>
