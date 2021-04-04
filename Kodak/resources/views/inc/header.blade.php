<!-- Navbar -->
<nav class="navbar">
    <div class="inner-width">
        <a href="/" class="logo"></a>
        <button class="menu-toggler">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-menu">
            <a href="/">Главная</a>
            <a href="#about">О Нас</a>
            <a href="/services">Услуги</a>
            <a href="/souvenirs-all">Сувениры</a>
            <a href="/contact">Контакты</a>
            @if (Route::has('login'))
                @auth
                <a href="/dashboard" class="sign">Админ-Панель</a>
            @else
                <a href="/login" class="sign">Войти ;)</a>
                @endauth
                @endif
        </div>
    </div>
</nav>
