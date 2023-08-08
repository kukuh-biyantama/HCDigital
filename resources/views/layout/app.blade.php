<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_Management</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('jasamedika.jpg') }}">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="./dist/css/custom.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- data tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<!-- <body class="page__eventlist"> -->

<body class="page_eventlist">
    <nav class="navbar" style="width:auto;">
        @include('layout.nav.nav')
    </nav>
    <!-- = /. Navbar Section = -->
    <main class="home" style="margin-top: -10%;">
        @yield('utama')
        <!-- = /. Logo Client Section = -->

        <div class="mt-43"></div>
        <!-- = /. Gap Section = -->

        <div class="container-xxl py-60 overflow-hidden overflow-xxl-visible">
            @yield('content')
            <!-- /.row -->
        </div>
        <!-- = /. Gap Section = -->
    </main>
    <!-- = /. Main Section = -->

    <!-- = /. Main Section = -->
    <!-- = /. Footer Section = -->
    <!-- Bootstrap JS -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Vendors -->
    <script src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/fslightbox/fslightbox.js') }}"></script>
    <script src="{{ asset('vendors/svg-inject/dist/svg-inject.min.js') }}"></script>
    <!-- Template Function -->
    <script src="{{ asset('dist/js/theme.js') }}"></script>
    <!-- datatables -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
</body>

</html>