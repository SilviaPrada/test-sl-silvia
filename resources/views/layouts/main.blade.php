<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('dark') === null ? true : localStorage.getItem('dark') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('dark', val))" x-bind:class="{ 'dark': darkMode }" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Data Pegawai' }}</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}
    <script defer src="https://unpkg.com/alpinejs"></script>
</head>

<body class="h-full text-gray-800 dark:text-gray-200 bg-gray-100 dark:bg-gray-900">
    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow">
        <div class="flex justify-between items-center px-4 sm:px-6 md:px-10 lg:px-16 py-6">
            <h1 class="text-3xl font-bold flex items-center gap-2">
                <x-heroicon-o-document-text class="h-8 w-8 text-blue-600 dark:text-blue-400" />
                Sistem Data Pegawai
            </h1>

            <button @click="darkMode = !darkMode"
                class="flex items-center gap-2 px-3 py-1 rounded-md border border-blue-500 text-blue-500
               hover:bg-blue-500 hover:text-white
               dark:border-blue-400 dark:text-blue-400
               dark:hover:bg-blue-400 dark:hover:text-white
               transition-colors duration-200">

                <x-heroicon-o-moon x-show="!darkMode" class="h-5 w-5" />
                <x-heroicon-o-sun x-show="darkMode" class="h-5 w-5" />

                <span x-show="!darkMode">Dark</span>
                <span x-show="darkMode">Light</span>
            </button>
        </div>
    </nav>

    <!-- Content -->
    <main class="p-6">
        @yield('content')
    </main>
</body>

</html>
