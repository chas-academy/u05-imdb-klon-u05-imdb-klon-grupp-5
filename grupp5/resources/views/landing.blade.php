<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('nav_footer/style.css') }}">

    <title>Document</title>
</head>

<body>
    <nav>
        <ul class="navbar">
            <img src="{{ URL('images/logo.png') }}" alt="logo">
            <form action="" method="GET">
                <input type="text" placeholder="Search.." name="query"><button type="submit">Search</button></input>

            </form>
            <li>Settings</li>
            <li>Watchlist</li>
            <button class="signin-button">Sign in</button>
        </ul>
    </nav>
</body>

</html>