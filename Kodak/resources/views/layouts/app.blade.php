<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Palitra-Kodak - магазин, который предоставляет фотоуслуги в городе Floresti">
    <meta name="keywords" content="Palitra-Kodak, kodak, Kodak, home, печать фотографий, фотоуслуги">
    <meta name="author" content="Palitra-Kodak">
    <meta name="copyright" content="Palitra-Kodak">
    <title>@yield('title-block')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="../css/glide.core.min.css">
    <link rel="stylesheet" href="../css/glide.theme.min.css">
    <link type="image/x-icon" rel="shortcut icon" href="/favicon.ico">
    <link type="image/png" sizes="16x16" rel="icon" href="/favicon-16x16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="/favicon-32x32.png">
    <link type="image/png" sizes="96x96" rel="icon" href="/favicon-96x96.png">
    <link type="image/png" sizes="120x120" rel="icon" href="/favicon-120x120.png">
    <link type="image/png" sizes="192x192" rel="icon" href="/favicon-192x192.png">
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="../js/glide.min.js" charset="utf-8"></script>
</head>


<body>


@include('inc.header')

@yield('content')

@include('inc.footer')

<script src="//code.tidio.co/nekdv3kjblhff9vhxm8re80mpgxvwatn.js" async></script>

<!-- Go Top BTN -->
<a class="viberbutton fab fa-viber viber" href="viber://chat?number=%2B37367358811"></a>

<!-- Go Top BTN -->
<button class="goTop fas fa-arrow-up"></button>

<script>
    new Glide(".images",{
        type: 'carousel',
        perView: 5,
        focusAt: 'center',
        gap: 40,
        breakpoints: {
            1200:{
                perView: 3
            },
            800:{
                perView: 2
            }
        }
    }).mount();
</script>



</body>
</html>
