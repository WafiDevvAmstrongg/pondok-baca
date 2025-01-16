<!-- Header -->
<header class="bg-white">
    <div class="max-w-6xl mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-8">
                <!-- Logo -->
                <div class="flex items-center gap-2">
                    <svg class="h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    <span class="text-xl font-bold">PondokBaca</span>
                </div>

                <!-- Search Bar -->
                <div class="relative flex-1 max-w-lg">
                    <input type="text" placeholder="Cari kitab atau buku.." 
                           class="w-full pl-4 pr-10 py-2 rounded-xl bg-gray-100 focus:ring-2 focus:ring-emerald-500 focus:bg-white">
                    <button class="absolute right-3 top-2.5">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Profile & Actions -->
            <div class="flex items-center gap-4">
                @auth
                    <!-- Jika sudah login -->
                    <div class="relative">
                        <img src="{{ asset('img/author.jpeg') }}" alt="Profile" class="h-8 w-8 rounded-full cursor-pointer">
                        <!-- Dropdown -->
                        <div class="absolute right-0 mt-2 bg-white shadow-lg rounded-lg text-sm">
                            <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100">Profil Anda</a>
                            <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-100">
                                @csrf
                                <button type="submit" class="w-full text-left">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Jika belum login -->
                    <a href="{{ route('login') }}" class="text-white bg-emerald-600 px-4 py-2 rounded-lg hover:bg-emerald-700">
                        Login
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>
