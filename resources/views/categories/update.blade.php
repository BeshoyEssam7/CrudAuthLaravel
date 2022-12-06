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
    <h1 class="text-center"> Update Category</h1>


    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <p class="alert alert-danger">  {{ $error }}</p>
    @endforeach
@endif

<div class="container">

        <form action='{{url("update/category/$category->id")}}' method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Category name</label>
                <input type="text" name="name" class="form-control" value="{{$category->name}}" placeholder="Name">
              </div>
              <div class="mb-3">
                <label fo class="form-label">Category description</label>
                <textarea class="form-control" name="desc"  rows="3">{{$category->desc}}</textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image"  >
              </div>
              <div class="mb-3">
                <label  class="form-label">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Price" value="{{$category->price}}" >

              </div>
              <button type="submit" class="btn btn-info">Update</button>
        </form>
</div>
</body>
</html>
