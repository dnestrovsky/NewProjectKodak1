<div class="collapse" id="navbarHeader">
  <div class="jumbotron" style="background-image: linear-gradient(to bottom, #777777 100%, #777777 50%), url(../img/phot-2.jpg) !important;
  background-blend-mode: multiply;
  background-size: cover;" data-color="black">
  <div class="container">
    <div class="row">
      <div class="col-sm border-right">
        <h4 class="text-white">Наш адрес</h4>
        <p class="text-muted">Улица Пушкина</p>
      </div>
      <div class="col-sm border-right">
        <h4 class="text-white">График работы</h4>
        <table class="table_col text-white font-weight-bold">
        <tr>
          <td>Понедельник</td>
          <td>Выходной</td>
          </tr>
        <tr>
          <td>Вторник</td>
          <td>8:00 - 16:00</td>
          </tr>
        <tr>
          <td>Среда</td>
          <td>8:00 - 16:00</td>
          </tr>
        <tr>
          <td>Четверг</td>
          <td>8:00 - 16:00</td>
          </tr>
        <tr>
          <td>Пятница</td>
          <td>8:00 - 16:00</td>
          </tr>
          <tr>
            <td>Суббота</td>
            <td>8:00 - 14:00</td>
            </tr>
            <tr>
              <td>Воскресенье</td>
              <td>8:00 - 14:00</td>
              </tr>
      </table>
    </div>
      <div class="col-sm">
        <h4 class="text-white">Наши контакты</h4>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white text-justify font-weight-bold"><img src="img/gmail.svg" class="mr-2" width="24" height="24"></img>kodak.floresti@mail.ru</a></li>
          <hr class="my-2">
          <li><a href="#" class="text-white text-justify font-weight-bold"><img src="img/gmail.svg" class="mr-2" width="24" height="24"></img>kodak.floresti.kodak@gmail.ru</a></li>
          <hr class="my-2">
          <li><a href="#" class="text-white text-justify font-weight-bold"><img src="img/viber.svg" class="mr-2" width="24" height="24">+373 (67) 279199</a></li>
          <hr class="my-2">
          <li><a href="#" class="text-white text-justify font-weight-bold"><img src="img/whatsapp.svg" class="mr-2" width="24" height="24">+373 (67) 279199</a></li>
          <hr class="my-2">
          <li><a href="#" class="text-white text-justify font-weight-bold"><img src="img/telephone.svg" class="mr-2" width="24" height="24"></img>0 (250) 2-56-24</a></li>
          <hr class="my-2">
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" style = "box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22) !important;">
  <h5 class="my-0 mr-md-auto font-weight-normal">@yield('title-page')</h5>
    @if (Route::has('login'))
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')" class="transform-button mr-2" onclick="event.preventDefault(); this.closest('form').submit();"><span>Выйти</span></a>
                </form>
                <a href="/dashboard" class="transform-button"><span>Админ-панель</span></a>
            @else
                <a href="/login" class="transform-button"><span>Авторизация</span></a>
                @if (Route::has('register'))
                    <a href="/register" class="transform-button"><span>Регистрация(Тест версия)</span></a>
                @endif
            @endauth
    @endif
</div>
