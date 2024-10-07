<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <!-- Container -->
        <div class="flex w-full max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Register Form -->
            <div class="w-1/2 p-8">
                <div class="text-left mb-4">
                    <h2 class="text-3xl font-bold text-gray-900">Create an account</h2>
                    <p class="text-gray-600">Sign up to get access to exclusive content and features.</p>
                </div>

                <!-- Form Livewire -->
                <form wire:submit.prevent="register">
                    <!-- Alert for errors -->
                    @if (session()->has('error'))
                        <div class="bg-red-500 text-white p-2 rounded-lg mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input wire:model="name" type="text" id="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" placeholder="Enter your name" required>
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input wire:model="email" type="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" placeholder="Enter your mail address" required>
                        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input wire:model="password" type="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" placeholder="Enter password" required>
                        @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                        <input wire:model="password_confirmation" type="password" id="password_confirmation" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" placeholder="Confirm your password" required>
                        @error('password_confirmation') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-lg hover:bg-indigo-500 transition">Sign Up</button>
                </form>

                <p class="mt-6 text-center text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-indigo-500 hover:underline">Login here</a></p>
            </div>

            <!-- Image/Design Section -->
            <div class="hidden lg:block w-1/2 bg-indigo-900 relative">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/400" alt="Design" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
