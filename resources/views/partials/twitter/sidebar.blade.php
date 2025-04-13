<!-- Twitter Logo -->
<div class="p-3">
    <img src="{{ asset('logo.png') }}" alt="Logo" class="w-8 h-8"/>
</div>

<!-- Menu Items -->
<flux:navlist class="space-y-1">
    <flux:navlist.item href="#" icon="home" current>
        Home
    </flux:navlist.item>

    <flux:navlist.item href="#" icon="magnifying-glass">
        Explore
    </flux:navlist.item>

    <flux:navlist.item href="#" icon="bell">
        Notifications
    </flux:navlist.item>

    <flux:navlist.item href="#" icon="envelope">
        Messages
    </flux:navlist.item>

    <flux:navlist.item href="#" icon="bookmark">
        Bookmarks
    </flux:navlist.item>

    <flux:navlist.item href="#" icon="user">
        Profile
    </flux:navlist.item>
</flux:navlist>

<flux:button class="w-full bg-blue-500 hover:bg-blue-600">
    Tweet
</flux:button>