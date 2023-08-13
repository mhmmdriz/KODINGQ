<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | {{ $title }}</title>
    {{-- bootstrap css  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- my style --}}
    <link rel="stylesheet" href="/css/style.css">

    <style>
        .btn.active {
            background-color: #1E1E1E; /* Your desired active color */
        }
    </style>
</head>
<body data-bs-theme="dark">
    {{-- directive --}}
    @include('partials.navbar')

    <div class="container-fluid mt-4">
        @yield('container')
    </div>
    {{-- <div class="container-fluid mt-4">
        <div class="row">
            @include('partials.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4">
            @yield('container')
            </main>
        </div>
    </div> --}}

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>