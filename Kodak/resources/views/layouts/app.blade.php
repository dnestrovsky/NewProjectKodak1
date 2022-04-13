<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description-block')">
    <meta name="keywords"
        content="Palitra-Kodak, kodak, Kodak, home, печать фотографий, фотоуслуги, город флорешть, floresti, печать фото, фото, фото на документы, фотосалон, фотосалон рядом, фотосалон фото, адрес фотосалон">
    <meta name="author" content="Palitra-Kodak">
    <meta name="copyright" content="Palitra-Kodak">
    <title>@yield('title-block')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link type="image/x-icon" rel="shortcut icon" href="/favicon.ico">
    <link type="image/png" sizes="16x16" rel="icon" href="/favicon-16x16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="/favicon-32x32.png">
    <link type="image/png" sizes="96x96" rel="icon" href="/favicon-96x96.png">
    <link type="image/png" sizes="120x120" rel="icon" href="/favicon-120x120.png">
    <link type="image/png" sizes="192x192" rel="icon" href="/favicon-192x192.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZFF84QL8CB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZFF84QL8CB');
    </script>

    
</head>


<body>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
                k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(88106302, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/88106302" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->


    @include('inc.header')

    @yield('content')

    @include('inc.footer')

    <script src="//code.tidio.co/nekdv3kjblhff9vhxm8re80mpgxvwatn.js" async></script>

    <!-- Go Top BTN -->
    <button class="goTop fas fa-arrow-up"></button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('/js/gallery.js') }}"></script>

   
</body>

</html>
