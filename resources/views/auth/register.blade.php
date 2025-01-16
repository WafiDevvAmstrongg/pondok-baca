<div id="registerModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
        <!-- Close Button -->
        <button 
            class="absolute top-2 right-2 text-gray-600 hover:text-gray-800"
            onclick="toggleRegisterModal()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Modal Content -->
        <h2 class="text-2xl font-bold text-center text-emerald-600 mb-4">Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" 
                       class="w-full px-4 py-2 border rounded-lg focus:ring-emerald-500 focus:border-emerald-500 
                              @error('name') border-red-500 @enderror" required autofocus>
                @error('name')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" 
                       class="w-full px-4 py-2 border rounded-lg focus:ring-emerald-500 focus:border-emerald-500 
                              @error('email') border-red-500 @enderror" required>
                @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Username --}}
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                <input id="username" type="text" name="username" value="{{ old('username') }}" 
                       class="w-full px-4 py-2 border rounded-lg focus:ring-emerald-500 focus:border-emerald-500 
                              @error('username') border-red-500 @enderror" required>
                @error('username')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="reg-password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                <input id="reg-password" type="password" name="password" 
                       class="w-full px-4 py-2 border rounded-lg focus:ring-emerald-500 focus:border-emerald-500 
                              @error('password') border-red-500 @enderror" required>
                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" 
                       class="w-full px-4 py-2 border rounded-lg focus:ring-emerald-500 focus:border-emerald-500" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                    class="w-full bg-emerald-600 text-white py-2 px-4 rounded-lg hover:bg-emerald-700 focus:ring-2 focus:ring-emerald-500 mb-4">
                Register
            </button>

            <!-- Login Link -->
            <p class="text-center text-sm text-gray-600">
                Already have an account? 
                <button type="button" onclick="switchToLogin()" class="text-emerald-600 hover:text-emerald-700 font-medium">
                    Sign in
                </button>
            </p>
        </form>
    </div>
</div>