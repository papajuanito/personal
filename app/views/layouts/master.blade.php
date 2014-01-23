<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{{ $locale }}"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="{{ $locale }}"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="{{ $locale }}"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{{ $locale }}"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        @section('title')
        <title>Javier Vélazquez</title>
        @show

        @section('meta')
        <meta name="description" content="test">
        <meta name="keywords" content="test">
        <meta name="robots" content="index, follow, nosnippet">
        @show
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
        <link rel="home" href="{{ url() }}">

        @section('stylesheets')
            @if ($environment == 'production' || $environment == 'staging')
            <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
            @else
            <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
            @endif
        @show

        <meta property="og:type" content="website">
        @section('og-tags')
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        @show
        <meta property="og:admins" content="">

        @section('scripts')
        <script src="{{ asset('scripts/vendor/modernizr.custom.js') }}"></script>
        @show
    </head>
    <body data-base="{{ url() }}" data-assets="{{ asset('') }}" data-route="{{ Route::current()->getName() }}" itemscope itemtype="http://schema.org/Event">
        @include('partials/header')

        @yield('content')

        @include('partials/footer')

        @if ($environment == 'production' || $environment == 'staging')
        <script src="{{ asset('scripts/main.min.js') }}"></script>
        @else
        <script data-main="{{ asset('scripts/js/config') }}" src="{{ asset('bower_components/requirejs/require.js') }}"></script>
        @endif

        <div class="reveal-modal-bg"></div>
    </body>
</html>
