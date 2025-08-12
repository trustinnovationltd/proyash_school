<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name') }}</title>

    <!--Favicon-->
    <?php
    use App\Models\Website\WebsiteSettings;
    $settings = WebsiteSettings::select('logo', 'title', 'phone', 'email')->first();
    ?>
    @if ($settings && $settings->logo)
        <link rel="icon" href="{{ asset($settings->logo) }}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{ asset($settings->logo) }}">
        <link rel="shortcut icon" href="{{ asset($settings->logo) }}">
    @else
        <link rel="icon" href="{{ asset('backend/img/logo.png') }}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{ asset('backend/img/logo.png') }}">
        <link rel="shortcut icon" href="{{ asset('backend/img/logo.png') }}">
    @endif
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="">
    <meta name="author" content="Trust Innovation Limited">
    <meta name="description" content="Proyash School Management System">
    <meta name="keywords" content="">
    <!--end::Primary Meta Tags-->

    @include('backend.layouts.partials.css')

    @yield('css')

</head>
<!--end::Head-->

<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        @include('backend.layouts.partials.header')
        {{-- @include('backend.layouts.partials.notifications') --}}
        <!--end::Header-->

        <!--begin::Sidebar-->
        @include('backend.layouts.partials.sidebar')
        <!--end::Sidebar-->

        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">@yield('title')</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">@yield('main_menu')</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    @yield('active_menu')
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->

            </div>
            <!--end::App Content Header-->

            <!--begin::App Content-->
            @include('backend.layouts.partials.notifications')
            <div class="app-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->

        <!--begin::Footer-->
        @include('backend.layouts.partials.footer')
        <!--end::Footer-->
    </div> <!--end::App Wrapper-->

    <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    @include('backend.layouts.partials.script')

    @yield('script')

    <!--end::Script-->
</body><!--end::Body-->

</html>
