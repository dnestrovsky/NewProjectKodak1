@extends('layouts.guest')

@section('content')
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="rounded" style="background: #2EE59D; box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
        <form method="POST" action="{{ route('register') }}" class="ui-form">
            @csrf
            <img class="d-block w-100 rounded"  src="../img/palitra.jpg" alt="Лого" style="box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
            <h3>Регистрация</h3>
            <!-- Name -->
            <div class = "form-row">
                <input id="name" class="block mt-1 w-full" type="text" placeholder="Имя" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
                <div class = "form-row">
                <input id="email" class="block mt-1 w-full" type="email" placeholder="Email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
                <div class = "form-row">
                <input id="password" class="block mt-1 w-full" placeholder="Пароль"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="form-row">
                <input id="password_confirmation" class="block mt-1 w-full" placeholder="Повтор пароля"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Уже зарегистрированы?') }}
                </a>

                <p><input type="submit" value="Регистрация"></p>
            </div>
        </form>
        </div>
@endsection
