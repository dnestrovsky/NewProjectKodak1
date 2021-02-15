<x-guest-layout>
    <x-auth-card>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Забыли пароль? Не проблема. Мы отправим Вам на E-mail инструкции по восстановлению пароля.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}" class="ui-form">
            @csrf

            <!-- Email Address -->
                <div class="form-row">
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus /><label for="email">Email</label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
