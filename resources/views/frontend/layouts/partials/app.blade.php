<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@include('frontend.layouts.partials.header')

<body class="home" itemscope>
    <!--Wrapper Start-->
    <main>
        @include('frontend.layouts.partials.menus')
        <div data-elementor-type="wp-page" data-elementor-id="6772" class="elementor elementor-6772">
            @yield('website_content')
        </div>
        <!-- Start:: Footer Section -->
        @include('frontend.layouts.partials.footer')
        <!-- End:: Footer Section -->
    </main>
    <!-- progress -->
    <div id="progress">
        <span id="progress-value"><i class="fa-solid fa-up-long"></i></span>
    </div>
    @include('frontend.layouts.partials.script')
</body>

</html>
