<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{ route('contact-form') }}" method="post" class="decor">
                    @csrf

                    <div class="container">
                        <div class="form-left-decoration"></div>
                        <div class="form-right-decoration"></div>
                        <div class="circle"></div>
                        <div class="form-inner">
                            <h3>Задать вопрос</h3>
                            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
                            <input type="text" name="phone" placeholder="Введите номер телефона" id="phone" class="form-control">
                            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
                            <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block btn-warning" type="button">Отправить</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
