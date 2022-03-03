<!-- Navbar -->
<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="/img/logo.png" alt="">
            </span>

            <div class="text logo-text">
                <span class="name">Palitra-Kodak</span>
                <span class="profession">PhotoStudio</span>
            </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
        <div class="menu">

            <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="text" placeholder="Поиск...">
            </li>

            <ul class="menu-links">
                <li class="nav-link">
                    <a href="/dashboard">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Главная</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="{{ route('souvenirs.index') }}">
                        <i class='bx bx-bar-chart-alt-2 icon'></i>
                        <span class="text nav-text">Сувениры</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="{{ route('home') }}">
                        <i class='bx bx-bell icon'></i>
                        <span class="text nav-text">Вернуться на сайт</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                @if (Route::has('login'))
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">Выйти</span>
                        </form>
                    @endauth
                @endif
                </a>
            </li>

            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Dark режим</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>

        </div>
    </div>

</nav>
