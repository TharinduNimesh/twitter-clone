<div {{ $attributes->class(['bg-white dark:bg-zinc-800 rounded-xl shadow-sm border border-gray-200 dark:border-zinc-700']) }}>
    @if($title)
        <div class="p-4 border-b border-gray-200 dark:border-zinc-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $title }}</h3>
        </div>
    @endif
    
    <div class="p-4">
        {{ $slot }}
    </div>
</div>