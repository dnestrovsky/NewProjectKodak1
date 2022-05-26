$(document).ready(function () {
    $(window).scroll(function () {
        if (this.scrollY > 20) {
            $(".navbar").addClass("sticky");
        } else {
            $(".navbar").removeClass("sticky");
        }
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) $(".gotopbtn").addClass("active");
        else $(".gotopbtn").removeClass("active");
    });
    $(".gotopbtn").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 800);
    });

    $(".menu-toggler").click(function () {
        $(this).toggleClass("active");
        $(".navbar-menu").toggleClass("active");
    });
});

jQuery(document).ready(function () {
    var date = new Date();
    var weekdays = ["7", "1", "2", "3", "4", "5", "6"]; 
    var weekday = weekdays[date.getDay()]; 
    jQuery('.grafik div[data-day="' + weekday + '"]').addClass("today");
});

document.tidioChatLang = document.querySelector("html").getAttribute("lang");
