<div class="sidebar">
    <div class="logo-details">
        <i class='bx bx-trim'></i>
        <span class="logo_name">Kodak</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/dashboard">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Главная страница</span>
            </a>
        </li>
        <li>
            <a href="{{ route('souvenirs.index') }}">
                <i class='bx bx-box'></i>
                <span class="links_name">Продукты</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-pie-chart-alt-2'></i>
                <span class="links_name">Аналитика</span>
            </a>
        </li>
        <li>
            <a href="{{ route('home') }}">
                <i class='bx bx-message'></i>
                <span class="links_name">Вернуться на сайт</span>
            </a>
        </li>
        <li class="log_out">
            @if (Route::has('login'))
                @auth
                    <a href="route('logout')"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class='bx bx-log-out'></i>
                        <span class="links_name">Выйти</span>
                    </a>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                        @csrf
                    </form>
                @endauth
            @endif
        </li>
    </ul>
</div>
