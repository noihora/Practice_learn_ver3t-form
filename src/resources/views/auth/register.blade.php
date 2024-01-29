<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        <a href="/">
                <div class="font-medium text-xl">会員登録</div>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="名前" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="メールアドレス"/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" placeholder="パスワード" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required placeholder="確認パスワード"/>
            </div>

            <x-button class="">
                    {{ __('会員登録') }}
            </x-button>

            <div class="mt-6 text-center text-gray-400 text-sm font-semibold tracking-wide">
                アカウントをお持ちの方はこちらから
            </div>

            <div class="text-center">
                <a class="font-bold text-sm text-blue-500" href="{{ route('login') }}">
                    {{ __('ログイン') }}
                </a>


            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
