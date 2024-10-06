<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <!-- Container -->
        <div class="flex w-full max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Login Form -->
            <div class="w-1/2 p-8">
                <div class="text-left mb-4">
                    <h2 class="text-3xl font-bold text-gray-900">Welcome back!</h2>
                    <p class="text-gray-600">Login to get unlimited access to data & information.</p>
                </div>

                <!-- Form Livewire -->
                <form wire:submit.prevent="login">
                    <!-- Alert for errors -->
                    @if (session()->has('error'))
                        <div class="bg-red-500 text-white p-2 rounded-lg mb-4">
                            {{ session('error') }}
                        </div>
                    @endif

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

                    <div class="flex items-center justify-between mb-4">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                            <span class="ml-2 text-gray-700">Remember me</span>
                        </label>
                        <a href="#" class="text-indigo-500 hover:underline">Forgot your password?</a>
                    </div>

                    <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-lg hover:bg-indigo-500 transition">Log in</button>
                </form>

                <div class="text-center my-4 text-gray-500">Or log in with</div>

                <div class="flex items-center justify-center space-x-4">
                    <button class="w-full bg-white border border-gray-300 p-3 rounded-lg flex items-center justify-center hover:bg-gray-100 transition">
                        <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google Logo" class="w-6 h-6 mr-2">
                        <span>Sign up with Google</span>
                    </button>
                </div>

                <p class="mt-6 text-center text-gray-600">Don't have an account? <a href="{{route('register')}}" class="text-indigo-500 hover:underline">Register here</a></p>
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
