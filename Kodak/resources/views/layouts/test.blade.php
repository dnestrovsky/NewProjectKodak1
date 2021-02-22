<!doctype html>
<html lang="d">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/test.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body style="background-image: url(../img/background1.png);">
@include('test.header')

<main>
    @include('test.nav')
    <section class="container main-image-container mt-2" >
        <ul class="menu">
            <li title="Главная"><a href="#" class="home">Главная</a></li>
            <li title="Сувениры"><a href="/souvenirs-all" class="pencil">Сувениры</a></li>
            <li title="Магазин"><a href="/map" class="about">Магазин</a></li>
            <li title="Заказать"><a href="/orders" class="about">Заказать</a></li>
            <li title="Связь"><a href="/contact" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="about">Связь</a></li>
        </ul>
            @yield('content')
    </section>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Модальное окно</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('contact-form') }}" method="post" class="decor">
                        @csrf

                        <div class="container">
                            <div class="form-left-decoration"></div>
                            <div class="form-right-decoration"></div>
                            <div class="circle"></div>
                            <div class="form-inner">
                                <h3>Сделать заказ прямо сейчас</h3>
                                <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
                                <input type="text" name="phone" placeholder="Введите номер телефона" id="phone" class="form-control">
                                <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
                                <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control" rows="3"></textarea>
                                <input type="file" class="upload" id="photo-upload" multiple=""/>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg btn-block btn-warning" type="button">Заказать</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
    <div class="album py-5 container">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Какая-либо новость</h1>
                <p class="lead my-3">Краткая информация</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Продожить читать.</a></p>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Заказать</strong>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Получить заказ вы сможете в нашем магазине, по адресу указанному в контактах</p>
                        <a href="/orders" class="floating-button">
                            <p>Сделать заказ</p>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="248" height="248" fill="blue" class="bi bi-bag-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Связь</strong>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">Вы можете отправить нам сообщение</p>
                        <a href="/contact" class="floating-button">
                            <p>Связь с нами</p>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="248" height="248" fill="blue" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
