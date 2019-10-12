<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'LaravelReview')</title>
</head>
<body>
    <div>
        <p>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/contact">Contact us</a></li>
                <li><a href="/about">About us</a></li>
            </ul>        
        </p>
    </div>
    <div>
        @yield('bodyContent')
    </div>
</body>
</html>