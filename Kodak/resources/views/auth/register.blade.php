@extends('layouts.guest')

@section('content')
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" class="ui-form">
            @csrf

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
                    {{ __('Already registered?') }}
                </a>

                <p><input type="submit" value="Регистрация"></p>
            </div>
        </form>
@endsection
