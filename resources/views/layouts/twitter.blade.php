<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <title>{{ $title ?? 'Twitter' }}</title>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-900">
        <div class="container mx-auto flex min-h-screen max-w-7xl">
            <!-- Left Sidebar -->
            <div class="w-64 border-r border-gray-200 dark:border-zinc-800 p-4 flex flex-col space-y-4">
                @include('partials.twitter.sidebar')
            </div>

            <!-- Main Content -->
            <div class="flex-1 border-r border-gray-200 dark:border-zinc-800">
                @yield('content')
            </div>

            <!-- Right Sidebar -->
            <div class="w-80 p-4 space-y-4">
                @include('partials.twitter.trending')
            </div>
        </div>

        @fluxScripts
    </body>
</html>