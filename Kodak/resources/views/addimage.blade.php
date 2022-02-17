@extends('layouts.dashboard')

@section('title-block', 'АП Добавление')


@section('content')

<section id="home">
  <div class="inner-width">
      <div class="content">
          <ul class="breadcrumb">
              <li><a href="/dashboard">Главная</a></li>
              <li><a href="{{route('souvenirs.index')}}">Все сувениры</a></li>
              <li>Добавление примера</li>
          </ul>
        <form name="addimagetoalbum" method="POST" action="{{ route('images.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
          <input type="hidden" name="souvenir_id"value="{{ $souvenir->id }}" />
          <fieldset>
            <legend> Добавление примера к сувениру {{$souvenir->name}} </legend>
              <label for="description">Описание( * не обязательно )</label>
              <textarea name="description" type="text" class="contact-form-text" placeholder="Описание"></textarea>
              <label for="image">Выберете фото</label>
              <input type="file" name="image" class="contact-form-text" id="image">
            <button type="submit" class="contact-form-btn">Добавить фото</button>
          </fieldset>
        </form>
      </div>
    </div> <!-- /container -->
  </section>

@endsection