@extends('layouts.guest')
@section('title-block', 'Авторизация')


@section('content')

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    @include('components.auth-validation-errors')

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Авторизация</span>

                <form method="POST" action="{{ route('login') }} ">
                    @csrf


                    <div class="input-field">
                        <input id="email" name="email" :value="old('email')" type="text" placeholder="Введите email"
                            required>
                        <i class="uil uil-envelope icon"></i>
                    </div>


                    <div class="input-field">
                        <input id="password" type="password" name="password" class="password"
                            placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>


                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input name="remember" type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Запомнить меня</label>
                        </div>

                        <a href="#" class="text">Забыли пароль?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Войти">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Нет аккаунта?
                        <a href="{{ route('register') }}" class="text signup-link">Регистрация</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

@endsection
