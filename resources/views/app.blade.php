{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', "Raven's Treasure") }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/iconoRaven.png') }}">

    <!-- Include any CSS or JavaScript libraries here -->
</head>
<body>
    @include('layouts.nav') <!-- Include the navigation view -->

    <div class="container">
        @yield('content') <!-- This will be replaced by the content of specific views -->
    </div>

    <!-- Include any JavaScript files at the end of the body -->
</body>
</html> --}}


<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Raven's Treasure")</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* public/css/app.css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header,
        footer {
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header .logo img {
            vertical-align: middle;
        }

        header .title {
            display: inline-block;
            vertical-align: middle;
            margin-left: 10px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #007bff;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        footer p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('images/iconoRaven.png') }}" alt="Logo" height="50">
            </div>
            <div class="title">
                <h1>Raven's Treasure</h1>
            </div>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/users">Users</a></li>
            <li><a href="/designs">Designs</a></li>
            <li><a href="/categories">Categories</a></li>
            <!-- Añade más enlaces según sea necesario -->
        </ul>
    </nav>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Raven's Treasure. All rights reserved.</p>
            <p>Contact us at: <a href="mailto:info@myapplication.com">info@myapplication.com</a></p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
