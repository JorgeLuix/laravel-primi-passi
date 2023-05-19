<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Homepage</title>
</head>
<body>
    <header>
        <ul class="d-flex p-3 me-auto mb-2 mb-lg-0">
        <li class="list-unstyled"><a class="nav-link" href=" {{route('home')}} ">Home</a></li>
        <li class="px-3 list-unstyled"><a class="nav-link" href="{{route('about')}} ">About</a></li>
        <li class="list-unstyled"><a class="nav-link" href="{{route('contact')}} ">Contact</a></li>
        </ul>
    </header>
        <div class="container">
            <h1>Hello, {{ $name }}! </h1>
        </div>
</body>
</html>
