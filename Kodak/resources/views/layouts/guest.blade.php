<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title-block')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/test.css') }}">

    <!-- Scripts -->
</head>

<body>

    @yield('content')

    <script type='text/javascript' src="{{ mix('/js/script.js') }}"></script>

</body>

</html>
