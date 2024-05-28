<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Raven's Treasure")</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
            background-color: #000;
        }

        header, footer {
            background-color: #2b2929;
            color: #fff;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header .header-content {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 0;
        }

        header .header-content img {
            margin-right: 10px;
        }

        nav {
            background-color: #333232;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: 700;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .nav-icons {
            display: flex;
            align-items: right;
        }

        .nav-icons svg {
            width: 24px;
            height: 24px;
            margin-left: 15px;
            cursor: pointer;
        }

        main {
            padding: 20px 0;
        }

        footer {
            background-color: #111;
            padding: 20px 0;
        }

        footer p, footer a {
            color: #fff;
            text-decoration: none;
        }

        footer img {
            margin-top: 10px;
        }

        .poppins-thin {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: normal;
}

.poppins-extralight {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: normal;
}

.poppins-light {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: normal;
}

.poppins-regular {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.poppins-medium {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: normal;
}

.poppins-semibold {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: normal;
}

.poppins-bold {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.poppins-extrabold {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  font-style: normal;
}

.poppins-black {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  font-style: normal;
}

.poppins-thin-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: italic;
}

.poppins-extralight-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: italic;
}

.poppins-light-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: italic;
}

.poppins-regular-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: italic;
}

.poppins-medium-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: italic;
}

.poppins-semibold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: italic;
}

.poppins-bold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: italic;
}

.poppins-extrabold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  font-style: italic;
}

.poppins-black-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  font-style: italic;
}






    </style>
    @livewireStyles
</head>

<body>
    <header>
        <div class="container">
            <div class="header-content">
                <img src="{{ asset('images/iconoRaven.png') }}" alt="Logo" height="50">
                <h1>Raven's Treasure</h1>
            </div>
        </div>
    </header>

    <nav>
        <div class="container">
            @include('layouts.nav')
                <div class="nav-icons">
                    <li>@livewire('cart-dropdown')</li>
                    <li>
                        <a href="/admin">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                        </a>
                    </li>
                </div>

        </div>
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
            <img src="{{ asset('images/iconoRaven.png') }}" alt="Logo" height="50">
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>

</html>
