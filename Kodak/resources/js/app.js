$(document).ready(function () {
    $(window).scroll(function () {
        if (this.scrollY > 20) {
            $(".navbar").addClass("sticky");
            $(".goTop").fadeIn();
        } else {
            $(".navbar").removeClass("sticky");
            $(".goTop").fadeOut();
        }
    });

    $(".goTop").click(function () {
        scroll(0, 0);
    });

    $(".menu-toggler").click(function () {
        $(this).toggleClass("active");
        $(".navbar-menu").toggleClass("active");
    });
});

jQuery(document).ready(function () {
    var date = new Date(); // Создаём переменную типа Date()
    var weekdays = ["7", "1", "2", "3", "4", "5", "6"]; // Создаём массив дней
    var weekday = weekdays[date.getDay()]; //Получаем номер текущего дня
    jQuery('.grafik-test div[data-day="' + weekday + '"]').addClass("today"); //Добавляем класс
});


document.tidioChatLang = document.querySelector('html').getAttribute('lang');