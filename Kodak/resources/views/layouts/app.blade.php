<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Palitra-Kodak - магазин, который предоставляет фотоуслуги в городе Floresti">
    <meta name="keywords" content="Paltra-Kodak, kodak, Kodak, home, печать фотографий, фотоуслуги">
    <meta name="author" content="Palitra-Kodak">
    <meta name="copyright" content="Palitra-Kodak">
    <title>@yield('title-block')</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="../css/app.css?v<?php echo(mt_rand(3000,5000)); ?>">
    <link rel="shortcut icon" href="https://palitra-kodak.site/favicon.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
</head>

<body>

@include('inc.header')

@yield('content')

@include('inc.footer')

<script src="//code.tidio.co/nekdv3kjblhff9vhxm8re80mpgxvwatn.js" async></script>

<!-- Go Top BTN -->
<a class="viberbutton fab fa-viber viber" href="viber://chat?number=%2B37367279199"></a>

<!-- Go Top BTN -->
<button class="goTop fas fa-arrow-up"></button>

</body>
</html>
