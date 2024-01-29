<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Atte</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
    </head>
    <body>
        <div>    
            <header class="">
                <div class="flex justify-between">
                    <div class="pe-8 pl-10 py-5 sticky top-0 font-extrabold text-3xl">
                        Atte
                    </div>
                    <div class="">
                        <ul class="space-x-10 pl-10 py-5 mr-10 flex flex-row text-base font-bold">
                            <li><a href="http://localhost/">ホーム</a></li>
                            <li><a href="http://localhost/attendance">日付一覧</a></li>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('ログアウト') }}
                            </x-dropdown-link>
                        </form>
                        </ul>
                    </div>
                </div>
            </header>    
            <div class="font-sans text-gray-900 antialiased">
                {{ $slot }}
            </div>
            <div class="bg-white sticky bottom-0 text-center font-medium">
                <small>Atte,inc.</small>
            </div>
        </div>    
    </body>
</html>
