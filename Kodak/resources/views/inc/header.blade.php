<!-- Navbar -->
<nav class="navbar">
    <div class="inner-width">
        <a href="{{route('home')}}" class="logo" style="background-image: url(../img/white-logo.png); background-size: contain;"></a>
        <button class="menu-toggler">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-menu">
            <a href="{{ route('home') }}">@lang('main.main')</a>
            <a href="{{ route('services') }}">@lang('main.servicii')</a>
            <a href="{{ route('souvenir-data') }}">@lang('main.suvenir')</a>
            <a href="{{ route('contact') }}">@lang('main.cont')</a>
            <a href="{{ route('locale', __('main.set_lang')) }}">@lang('main.set_lang')</a>
        </div>
    </div>
</nav>
