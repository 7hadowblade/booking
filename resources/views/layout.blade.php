<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 60px;
            background-color:#808080;
            overflow-x: hidden;
            transition: width 0.5s;
            z-index: 1;
            padding-top: 1rem;
        }

        #navbar:hover {
            width: 200px;
        }

        .navbar-items {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .navbar-item {
            text-align: left;
            padding: 1rem;
        }

        .navbar-item a {
            display: block;
            color: #000;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .navbar-item a:hover {
            color: white;
        }

        .navbar-item .link-text {
            display: none;
            margin-left: 10px;
        }

        #navbar:hover .navbar-item .link-text {
            display: inline;
        }
    </style>
</head>

<body>
    <nav id="navbar">
        <ul class="navbar-items">
                <li class="navbar-item">
                <a href="{{ route('welcome') }}">
                    <div class="navbar-item-inner-icon-wrapper flexbox"></div>
                    <span class="link-text">Booking</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="{{ route('internautes.index') }}">
                    <div class="navbar-item-inner-icon-wrapper flexbox"></div>
                    <span class="link-text">Internautes</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="{{ route('reservations.index') }}">
                    <div class="navbar-item-inner-icon-wrapper flexbox"></div>
                    <span class="link-text">Reservations</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="{{ route('hotels.index') }}">
                    <div class="navbar-item-inner-icon-wrapper flexbox"></div>
                    <span class="link-text">Hotels</span>
                </a>
            </li>
        </ul>
    </nav>

    <main role="main" class="container">
        @yield('content')
    </main>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
