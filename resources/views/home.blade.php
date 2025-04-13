@extends('layouts.twitter')

@section('content')
<!-- Header -->
<div class="p-4 border-b border-gray-200 dark:border-zinc-800 flex justify-between items-center">
    <h1 class="text-xl font-bold dark:text-white">Home</h1>
    
    @auth
        <div class="relative" x-data="{ open: false }">
            <div @click="open = !open" class="flex items-center cursor-pointer">
                <flux:avatar src="{{ auth()->user()->avatar ?? 'https://ui-avatars.com/api/?name=' . auth()->user()->name }}" class="w-10 h-10 rounded-full"/>
                <flux:icon name="chevron-down" class="w-4 h-4 ml-1 text-gray-500"/>
            </div>
            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white dark:bg-zinc-800 rounded-md shadow-lg py-1 z-10">
                <a href="{{ route('settings.profile') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-zinc-700">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-100 dark:hover:bg-zinc-700">Logout</button>
                </form>
            </div>
        </div>
    @else
        <div class="flex space-x-2">
            <flux:button tag="a" href="{{ route('login') }}" variant="outline" size="sm">Sign In</flux:button>
            <flux:button tag="a" href="{{ route('register') }}" size="sm">Sign Up</flux:button>
        </div>
    @endauth
</div>

<!-- Tweet Composer -->
<div class="p-4 border-b border-gray-200 dark:border-zinc-800">
    <div class="flex space-x-4">
        <flux:avatar src="https://ui-avatars.com/api/?name=User" class="w-12 h-12 rounded-full"/>
        <div class="flex-1">
            <flux:textarea placeholder="What's happening?" class="w-full bg-transparent border-none"/>
            <div class="flex justify-between items-center mt-4">
                <div class="flex space-x-4">
                    <flux:icon name="photo" class="w-5 h-5 text-blue-500"/>
                    <flux:icon name="gif" class="w-5 h-5 text-blue-500"/>
                    <flux:icon name="chart-bar" class="w-5 h-5 text-blue-500"/>
                    <flux:icon name="face-smile" class="w-5 h-5 text-blue-500"/>
                </div>
                <flux:button size="sm">Tweet</flux:button>
            </div>
        </div>
    </div>
</div>

<!-- Sample Tweets -->
<div class="divide-y divide-gray-200 dark:divide-zinc-800">
    <!-- Tweet 1 -->
    <div class="p-4 hover:bg-gray-50 dark:hover:bg-zinc-800 transition">
        <div class="flex space-x-4">
            <flux:avatar src="https://ui-avatars.com/api/?name=John" class="w-12 h-12 rounded-full"/>
            <div>
                <div class="flex items-center space-x-2">
                    <span class="font-bold dark:text-white">John Doe</span>
                    <span class="text-gray-500">@johndoe</span>
                    <span class="text-gray-500">· 1h</span>
                </div>
                <p class="text-gray-900 dark:text-gray-100 mt-2">
                    Just setting up my Twitter clone! #coding #webdev
                </p>
                <div class="flex justify-between mt-4 text-gray-500 max-w-md">
                    <flux:button variant="ghost" size="sm">
                        <flux:icon name="chat-bubble-bottom-center" class="w-4 h-4 mr-2"/> 12
                    </flux:button>
                    <flux:button variant="ghost" size="sm">
                        <flux:icon name="arrow-path" class="w-4 h-4 mr-2"/> 24
                    </flux:button>
                    <flux:button variant="ghost" size="sm">
                        <flux:icon name="heart" class="w-4 h-4 mr-2"/> 88
                    </flux:button>
                    <flux:button variant="ghost" size="sm">
                        <flux:icon name="share" class="w-4 h-4"/>
                    </flux:button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tweet 2 -->
    <div class="p-4 hover:bg-gray-50 dark:hover:bg-zinc-800 transition">
        <div class="flex space-x-4">
            <flux:avatar src="https://ui-avatars.com/api/?name=Jane" class="w-12 h-12 rounded-full"/>
            <div>
                <div class="flex items-center space-x-2">
                    <span class="font-bold dark:text-white">Jane Smith</span>
                    <span class="text-gray-500">@janesmith</span>
                    <span class="text-gray-500">· 2h</span>
                </div>
                <p class="text-gray-900 dark:text-gray-100 mt-2">
                    Loving the new Flux UI components! They make building interfaces so much easier 🚀
                </p>
                <div class="flex justify-between mt-4 text-gray-500 max-w-md">
                    <flux:button variant="ghost" size="sm">
                        <flux:icon name="chat-bubble-bottom-center" class="w-4 h-4 mr-2"/> 8
                    </flux:button>
                    <flux:button variant="ghost" size="sm">
                        <flux:icon name="arrow-path" class="w-4 h-4 mr-2"/> 16
                    </flux:button>
                    <flux:button variant="ghost" size="sm">
                        <flux:icon name="heart" class="w-4 h-4 mr-2"/> 45
                    </flux:button>
                    <flux:button variant="ghost" size="sm">
                        <flux:icon name="share" class="w-4 h-4"/>
                    </flux:button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
