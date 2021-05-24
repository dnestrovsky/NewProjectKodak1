<!-- Navbar -->
<nav class="navbar">
    <div class="inner-width">
        <a href="/" class="logo" style="background-image: url(../img/white-logo.png); background-size: contain;"></a>
        <button class="menu-toggler">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-menu">
            <a href="/">@lang('main.main')</a>
            <a href="/services">@lang('main.servicii')</a>
            <a href="/souvenirs-all">@lang('main.suvenir')</a>
            <a href="/contact">@lang('main.cont')</a>
            <a href="{{ route('locale', __('main.set_lang')) }}">@lang('main.set_lang')</a>
            @if (Route::has('login'))
                @auth
                <a href="/dashboard" class="sign">Админка</a>
            @else
                    <a href="/login" class="sign">@lang('main.auth')</a>
                @endauth
                @endif
        </div>
    </div>
</nav>
