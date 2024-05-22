<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey App</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{url('/task')}}">Home</a></li>
                <li><a href="{{url('/task/create')}}">Create Survey</a></li>
            </ul>
        </nav>
    </header>

<main>
    <div class="container">
        @yield('content')
    </div>
</main>

<!-- <footer>
    <p> &copy; {{date('Y')}} Task App</p>
</footer> -->

</body>
</html>