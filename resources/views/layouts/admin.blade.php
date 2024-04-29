<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Add CSS --}}
        @stack('stylesheet')

        {{-- Tailwind --}}
        @vite('resources/css/app.css')

        {{-- Css --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body class="bg-grayPOS-2 font-interPOS">
        {{-- Aside --}}
        @include('partials.aside')

        {{-- Header --}}
        @include('partials.header')

        {{-- Main --}}
        <main class="relative top-[74px] ml-[280px] mb-7
            transition-margin-left duration-200 ease-linear">
            <div class="px-10 py-5">
                {{ $slot }}
            </div>
        </main>

        {{-- Add Script --}}
        @stack('scripts')
    </body>
</html>