<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="h-full">
        <div class="min-h-full">
            <nav class="bg-pink-700">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                    <img class="size-8" src="https://unsplash.it/50/50" alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- below what the code is saying in the class is, if the request is the homepage then apply these styles but if not apply these default ones -->
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                        {{-- When you prefix with a ':' it says it should be treated as a boolean --}}
                        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                        <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </nav>
        
            <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            </div>
            </header>
            <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- $slot is a placeholder that signals to the browser where content will be inserted. In this case, because it's part of the layout file, we place consistent content in this file, while $slot will hold the specific content from the view file. -->

                <!-- instead of using php echo $slot use this: -->
                {{ $slot }}
            </div>
            </main>
        </div>
        

        
    </body>
</html>
