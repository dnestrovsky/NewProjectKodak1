<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">Kodak</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/dashboard" class="active">
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
                <span class="links_name">Сообщения</span>
            </a>
        </li>
        <li class="log_out">
            @if (Route::has('login'))
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class='bx bx-log-out'></i>
                            <span class="links_name">Выйти</span>
                        </a>
                    </form>
                @endauth
            @endif
        </li>
    </ul>
</div>
