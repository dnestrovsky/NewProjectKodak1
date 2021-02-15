@extends('layouts.app')


@section('title-block','Заказы')
@section('title-page','Заказы')

@section('content')
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

    <button type="submit" class="btn btn-secondary btn-lg btn-block" style="background: #f69a73;">Заказать</button>
    </div>
  </form>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  ...
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
              </div>
          </div>
      </div>
  </div>

@endsection
