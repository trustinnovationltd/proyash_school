<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TIL') }}</title>

    <!--Favicon-->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Family accommodation">
    <meta name="author" content="Md Mostafijur Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="">
    @includeIf('backend.layouts.partials.auth.css')
    <style>
        body {
            position: relative;
            margin: 0;
            padding: 0;
            z-index: 0;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("/assets/backend/images/school1.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
            filter: blur(5px);
            /* Adjust blur level */
            z-index: -1;
            /* Push behind content */
        }
    </style>

</head> <!--end::Head--> <!--begin::Body-->

<body class="login-page bg-body-secondary">

    @yield('content')

    @includeIf('backend.layouts.partials.auth.script')

</body><!--end::Body-->

</html>
