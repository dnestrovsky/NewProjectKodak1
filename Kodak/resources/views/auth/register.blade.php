@extends('layouts.guest')
@section('title-block', 'Регистрация')

@section('content')
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="container">
        <div class="forms">

            <!-- Registration Form -->
            <div class="form login">
                <span class="title">Регистрация</span>

                <form method="POST" action="{{ route('register') }}">

                    @csrf
                    <div class="input-field">
                        <input id="name" type="text" name="name" :value="old('name')" placeholder="Введите ваше имя"
                            required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input id="email" type="text" name="email" :value="old('email')" placeholder="Введите email"
                            required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input id="password" type="password" name="password" class="password"
                            placeholder="Создайте пароль" required autocomplete="new-password">
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input id="password_confirmation" type="password" name="password_confirmation"
                            class="password" placeholder="Подтвердите пароль" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Зарегистрироваться">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
