<!-- Navbar -->
<nav class="navbar">
    <div class="inner-width">
        <a href="/dashboard" class="logo" style="background-image: url(/img/logo.png); background-size: contain;"></a>
        <button class="menu-toggler">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-menu">
            <a href="/dashboard">Главная</a>
            <a href="{{route('souvenirs.index')}}">Сувениры</a>
            <a href="{{ route('home') }}">тестики</a>
        </div>
    </div>
</nav>
