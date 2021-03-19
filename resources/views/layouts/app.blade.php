<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>
<body>

@include('inc.navbar')

<div class="container">
    @include('inc.messages')
    @yield('content')
</div>

<footer id="footer" class="text-center">

</footer>

<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>