<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
        <!-- Close Button -->
        <button class="absolute top-2 right-2 text-gray-600 hover:text-gray-800" onclick="toggleLoginModal()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Modal Content -->
        <h2 class="text-2xl font-bold text-center text-emerald-600 mb-4">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Username -->
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                <input id="username" type="text" name="username" value="{{ old('username') }}"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-emerald-500 focus:border-emerald-500 
                              @error('username') border-red-500 @enderror"
                    required autofocus>
                @error('username')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                <input id="password" type="password" name="password"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-emerald-500 focus:border-emerald-500 
                              @error('password') border-red-500 @enderror"
                    required>
                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <input id="remember" type="checkbox" name="remember"
                        class="h-4 w-4 text-emerald-600 border-gray-300 rounded focus:ring-emerald-500">
                    <label for="remember" class="ml-2 text-sm text-gray-600">Remember Me</label>
                </div>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full bg-emerald-600 text-white py-2 px-4 rounded-lg hover:bg-emerald-700 focus:ring-2 focus:ring-emerald-500">
                    Login
                </button>
            </div>
        </form>
        <p class="text-center text-sm text-gray-600 mt-4">
            Don't have an account?
            <button type="button" onclick="switchToRegister()"
                class="text-emerald-600 hover:text-emerald-700 font-medium">
                Sign up
            </button>
        </p>
    </div>
</div>
