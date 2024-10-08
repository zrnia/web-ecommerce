<!-- resources/views/components/navigation-menu.blade.php -->

<nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">

        <!-- Logo -->
        <div class="flex items-center">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="h-8 w-auto">
        </div>

        <!-- Search Bar (Center) -->
        <div class="flex-grow mx-6">
            <input type="text" placeholder="Search..." class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
        </div>

        <!-- Right Section (Authentication) -->
        <div class="flex items-center space-x-4">
            @auth
                <!-- Profile when logged in -->
                <x-nav-link href="{{ route('profile') }}">
                    Profile
                </x-nav-link>
            @else
                <!-- Masuk and Daftar when not logged in -->
                <x-nav-link href="{{ route('login') }}">
                    Masuk
                </x-nav-link>
                <x-nav-link href="{{ route('register') }}">
                    Daftar
                </x-nav-link>
            @endauth
        </div>
    </div>
</nav>
