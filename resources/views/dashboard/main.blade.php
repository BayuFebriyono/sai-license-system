<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('maxer/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('maxer/assets/css/app.css') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
       @include('dashboard.navbar');
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield('content')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <p class="text-center">2022 &copy; Training Center</p>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('mazer/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('mazer/assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('mazer/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('mazer/assets/js/mazer.js') }}"></script>
</body>

</html>
