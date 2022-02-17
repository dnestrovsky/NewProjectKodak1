<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Palitra-Kodak - предоставляем фотоуслуги в городе Floresti уже на протяжении больше 10-ти лет">
    <meta name="keywords" content="Palitra-Kodak, kodak, Kodak, home, печать фотографий, фотоуслуги, город флорешть, печать фото, фото, фото на документы">
    <meta name="author" content="Palitra-Kodak">
    <meta name="copyright" content="Palitra-Kodak">
    <title>@yield('title-block')</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link type="image/x-icon" rel="shortcut icon" href="/favicon.ico">
    <link type="image/png" sizes="16x16" rel="icon" href="/favicon-16x16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="/favicon-32x32.png">
    <link type="image/png" sizes="96x96" rel="icon" href="/favicon-96x96.png">
    <link type="image/png" sizes="120x120" rel="icon" href="/favicon-120x120.png">
    <link type="image/png" sizes="192x192" rel="icon" href="/favicon-192x192.png">
</head>


<body>


@include('inc.header')

@yield('content')

@include('inc.footer')

<script src="//code.tidio.co/nekdv3kjblhff9vhxm8re80mpgxvwatn.js" async></script>

<!-- Viber BTN -->
<a class="viberbutton fab fa-viber viber" href="viber://chat?number=%2B37367358811"></a>

<!-- Go Top BTN -->
<button class="goTop fas fa-arrow-up"></button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
