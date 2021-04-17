@extends('layouts.guest')
@section('title-block', 'Auth')

@section('content')
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}" class="box">
            @csrf
            <h1>Регистрация</h1>
            <!-- Name -->

                <input id="name"  type="text" placeholder="Имя" name="name" :value="old('name')" required autofocus />

            <!-- Email Address -->
                <input id="email"  type="text" placeholder="Email" name="email" :value="old('email')" required />


            <!-- Password -->
                <input id="password"  placeholder="Пароль"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

            <!-- Confirm Password -->
                <input id="password_confirmation"  placeholder="Повтор пароля"
                                type="password"
                                name="password_confirmation" required />


                <a  href="{{ route('login') }}">
                    {{ __('Уже зарегистрированы?') }}
                </a>

                <p><input type="submit" value="Регистрация"></p>
        </form>
@endsection
