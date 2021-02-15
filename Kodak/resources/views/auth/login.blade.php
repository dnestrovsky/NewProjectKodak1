@extends('layouts.guest')


@section('content')

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }} " class="ui-form">
            @csrf
            <h3>Войти на сайт</h3>
            <!-- Email Address -->
                <div class="form-row">
                <input id="email" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus />
                </div>

            <!-- Password -->
                <div class="form-row">
                <input id="password"
                                type="password"
                                name="password" placeholder="Пароль"
                                required autocomplete="current-password" />
                </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Забыли пароль?') }}
                    </a>
                @endif

                <p><input type="submit" value="Войти"></p>
            </div>
        </form>
@endsection
