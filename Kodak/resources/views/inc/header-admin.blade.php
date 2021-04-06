<header>
    <div class="inner-width">
        <a href="#" class="logo"><img src="../img/logo.png" alt=""></a>
        <i class="menu-toggle-btn fas fa-bars"></i>
        <nav class="navigation-menu">
            <a href="/dashboard"><i class="fas fa-home home"></i> Главная</a>
            <a href="{{route('souvenirs.index')}}"><i class="fas fa-users team"></i>Все сувениры</a>
            <a href="/"><i class="fas fa-headset contact"></i>Вернуться на сайт</a>
            <a href="{{ route('messages-data') }}"><i class="fas fa-headset contact"></i>Сообщения</a>
            @if (Route::has('login'))
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fas fa-headset contact"></i>Выйти</a>
                    </form>
                @endauth
                @endif
        </nav>
    </div>
</header>
