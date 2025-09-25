<a {{ $attributes->merge([
    'class' => 'flex items-center gap-1 px-3 py-1 border border-orange-500 text-orange-500 rounded
                hover:bg-orange-500 hover:text-white
                dark:border-orange-400 dark:text-orange-400
                dark:hover:bg-orange-400 dark:hover:text-white
                focus:outline-none focus:ring-2 focus:ring-orange-400 focus:ring-offset-1
                transition-colors duration-200'
]) }}>
    <x-heroicon-o-pencil class="h-4 w-4" />
    <span>{{ $slot }}</span>
</a>
