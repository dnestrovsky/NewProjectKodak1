<!-- Footer -->
<footer style="background: url(../img/bg.jpg) no-repeat center; background-size: cover;">
    <div class="footer-container">
        <div class="left-col">
            <img src="../img/pic.png" alt="" class="logofooter">
            <div class="social-media">
                <a href="{{ route('contact') }}"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ route('contact') }}"><i class="fab fa-viber"></i></a>
                <a href="{{ route('contact') }}"><i class="fab fa-whatsapp"></i></a>
                <a href="{{ route('contact') }}"><i class="fas fa-envelope"></i></a>
            </div>
            <p class="rights-text">Created & Designed By <strong>@dnestrovsky</strong></p>
        </div>

        <div class="right-col">
            <h1>© Palitra Kodak</h1>
            <div class="border"></div>
            <form action="" class="newsletter-form">
                <a href="{{ route('contact') }}" class="btn">@lang('main.cont')</a>
            </form>
        </div>
    </div>
</footer>
