<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <div class="font-medium text-xl">ログイン</div>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('')" />

                <x-input id="email" class="block mt-6 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="メールアドレス"/>
            </div>

            <!-- Password -->
            <div class="mt-6">
                <x-label for="password" :value="__('')" />

                <x-input id="password" class="block mt-6 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="パスワード"/>
            </div>

            <x-button class="">
                    {{ __('ログイン') }}
            </x-button>
            <div class="mt-6 text-center text-gray-400 text-sm font-semibold tracking-wide">
                アカウントをお持ちでない方はこちらから
            </div>
            <div class="text-center">
                @if (Route::has('password.request'))
                    <a class="font-bold text-sm text-blue-500" href="{{ route('register') }}">
                        {{ __('会員登録') }}
                    </a>
                @endif
            </div>
        </form>
        
    </x-auth-card>
</x-guest-layout>
