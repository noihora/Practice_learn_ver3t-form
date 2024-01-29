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
        <div class="flex flex-col h-screen">    
            <header>
                <div class="pl-10 py-5">
                    <div class="sticky top-0 font-extrabold text-3xl">
                        Atte
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
