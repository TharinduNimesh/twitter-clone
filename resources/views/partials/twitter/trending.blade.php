<!-- Search Bar -->
<flux:input 
    type="search" 
    placeholder="Search Twitter" 
    icon="magnifying-glass"
    class:input="bg-transparent"
/>

<!-- Trending Section -->
<x-card title="Trends for you">
    <div class="space-y-4">
        <div class="space-y-1">
            <p class="text-sm text-gray-500">Trending in Technology</p>
            <p class="font-bold dark:text-white">#FluxUI</p>
            <p class="text-sm text-gray-500">15.2K Tweets</p>
        </div>
        <div class="space-y-1">
            <p class="text-sm text-gray-500">Trending in Web Dev</p>
            <p class="font-bold dark:text-white">#Laravel</p>
            <p class="text-sm text-gray-500">8.8K Tweets</p>
        </div>
    </div>
</x-card>

<!-- Who to follow -->
<x-card title="Who to follow">
    <div class="space-y-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <flux:avatar src="https://ui-avatars.com/api/?name=Dev" class="w-10 h-10 rounded-full"/>
                <div>
                    <p class="font-bold dark:text-white">Dev Community</p>
                    <p class="text-sm text-gray-500">@devcom</p>
                </div>
            </div>
            <flux:button size="sm">Follow</flux:button>
        </div>
    </div>
</x-card>