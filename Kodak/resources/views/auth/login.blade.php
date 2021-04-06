@extends('layouts.guest')
@section('title-block', 'Auth')


@section('content')

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('login') }} " class="box">
            @csrf
            <h1>Admin Panel</h1>
            <!-- Email Address -->
                <input id="email" type="text" name="email" placeholder="Email" :value="old('email')" required autofocus />
            <!-- Password -->
                <input id="password" type="password" name="password" placeholder="Пароль" required autocomplete="current-password" />
            <!-- Remember Me -->
                <label for="remember_me">
                    <input id="remember_me" type="checkbox"  name="remember">
                    <span {{ __('Запомнить меня') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a  href="{{ route('password.request') }}">
                        {{ __('Забыли пароль?') }}
                    </a>
                @endif

                <p><input type="submit" value="Войти"></p>
        </form>

@endsection
