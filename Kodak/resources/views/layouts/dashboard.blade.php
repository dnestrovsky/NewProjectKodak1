<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="/css/admin.css?v<?php echo(mt_rand(3000,5000)); ?>">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script type='text/javascript' src="/js/app.js?v<?php echo(mt_rand(3000,5000)); ?>"></script>
</head>
<body>

@include('inc.header-admin')

@yield('content')

@include('inc.footer-admin')

<!-- Go Top BTN -->
<button class="goTop fas fa-arrow-up"></button>

<script>
    $(".menu-icon").click(function(){
        $(this).toggleClass("active");
        $(".navigation-menu").toggleClass("active");
        $(".menu-icon i").toggleClass("fa-times");
    });
</script>

</body>
</html>
