<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <!-- Include meta tags for SEO and social media -->
    @include('layouts.meta')
    <!-- Include CSS stylesheets -->
    @include('layouts.css')
</head>

<body class="{{ Nav::isRoute('home', 'isHome') }}">
    <div id="preloader"
        style="width: 100%;height: 100%;position: fixed;z-index: 99999;left: 0;top: 0;right: 0;bottom: 0;display: flex;align-items: center;justify-content: center; transition: opacity 0.4s ease; ">
        <div class="circle"
            style="position: absolute;width: 200px;height: 200px;background: #DDB17A; border-radius: 50%;box-shadow: 0 0 0 100vw #fff;">
        </div>
        <img loading="lazy" decoding="async" class="logo" src="{{asset('frontend/images/logo.svg')}}"
            style="width: 90px;height: auto; z-index: 1;" width="108" height="92" alt="logo">
    </div>


    <!-- Include header -->
    @include('layouts.header')

    <main>
        <!-- Main content area -->
        @yield('content')

        <!-- Include footer -->
        @include('layouts.footer')
    </main>

    <!-- Include JavaScript files -->
    @include('layouts.js')
</body>

</html>