<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal webiste</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body>
@include('inc.header')

@yield('content')

@include('inc.footer')

<!-- Go Top BTN -->
<button class="goTop fas fa-arrow-up"></button>

<script type="text/javascript">

    var count = new Date("apr 10,2021 00:01:00").getTime();
    var x = setInterval(function() {
        var now = new Date().getTime();
        var d = count - now;

        var days = Math.floor(d/(1000*60*60*24));
        var hours = Math.floor((d%(1000*60*60*24))/(1000*60*60));
        var minutes = Math.floor((d%(1000*60*60))/(1000*60));
        var seconds = Math.floor((d%(1000*60))/1000);

        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        if(d <= 0){
            clearInterval(x);
        }
    },1000);
</script>

</body>
</html>
