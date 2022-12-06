<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">

</head>

<body class="antialiased">
    <div class=" container">
        <h1 class="text-center py-5">About Authentication rules</h1>
        <p class="py-2">1. to visit the site you have make account</p>
        <p class="py-2">2. to make any updates on category you have to be leader</p>
        <p class="py-2">3. to delete any catetegory you hae to be manager</p>
        <p >to change role you can change it from database till making dash board</p>
        <div>
     <p>To login <a href="{{url('login')}}"> click here</a></p>

     <p> To create new account <a href=" {{url('register')}}">click here</a></p>

        </div>
    </div>
</body>

</html>
