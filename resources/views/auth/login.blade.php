<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login Page</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="px-6 py-4 bg-gray-50 border-b border-gray-200 rounded-t-lg">
                <h2 class="text-xl font-semibold">Login</h2>
            </div>

            <div class="p-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                        <input type="text" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                            name="username" 
                            value="{{ old('username') }}" 
                            required 
                            autofocus>
                        @error('username')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                            name="password" 
                            required>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="flex items-center">
                            <input type="checkbox" 
                                class="form-checkbox text-blue-500" 
                                name="remember" 
                                id="remember">
                            <span class="ml-2 text-gray-700">Remember Me</span>
                        </label>
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="{{ route('register') }}" class="text-sm text-blue-500 hover:text-blue-600">
                            Don't have account? Register here
                        </a>
                        <button type="submit" 
                            class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Login
                        </button>
                    </div>
                </form>
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
</body>
</html>
