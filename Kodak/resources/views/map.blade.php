@extends('layouts.app')


@section('title-block', 'Kodak - Карта')
@section('title-page', 'Карта')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item"><a href="#">Контакты</a></li>
            <li class="breadcrumb-item active" aria-current="page">Магазин</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <h2>Магазин</h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Город</li>
            <li class="list-group-item text-muted">Флорешть</li>
            <li class="list-group-item">Адрес</li>
            <li class="list-group-item text-muted">str. 31 august 1989 26/a</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d354.3251750468904!2d28.30350188889246!3d47.8878621074764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x40cc8531da8f622d%3A0x8131fad3e9ba4d74!2sstr.%2031%20august%201989%2034%2C%20Flore%C5%9Fti%2C%20Moldova!3m2!1d47.887715799999995!2d28.3031062!5e0!3m2!1sen!2s!4v1612793937859!5m2!1sen!2s" class = "w-100" height="700" frameborder="0" style="border:1px solid black;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
@endsection
