<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', config('company.subheadline'))">
    <meta name="theme-color" content="#172238">

    <title>@hasSection('title')@yield('title') — @endif{{ config('company.name') }}</title>

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="@yield('body_class', 'min-h-screen')">
    @include('partials.navbar')

    <main id="main">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
