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
                        <!-- Profile Button -->
                        <button id="profileButton" 
                                onclick="toggleDropdown()"
                                class="flex items-center gap-2 focus:outline-none">
                            <img src="{{ asset('img/author.jpeg') }}" 
                                 alt="Profile" 
                                 class="h-8 w-8 rounded-full object-cover ring-2 ring-emerald-500">
                            <span class="text-gray-700 font-medium">{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Enhanced Dropdown -->
                        <div id="profileDropdown" 
                             class="hidden absolute right-0 mt-2 w-60 bg-white rounded-xl shadow-lg ring-1 ring-black ring-opacity-5 py-1 z-50">
                            <!-- User Info Section -->
                            <div class="px-4 py-3 border-b border-gray-100">
                                <p class="text-sm text-gray-500">Signed in as</p>
                                <p class="text-sm font-medium text-gray-900 truncate">{{ Auth::user()->email }}</p>
                            </div>

                            <!-- Menu Items -->
                            <div class="py-1">
                                <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    Profile
                                </a>
                                <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                                    <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Settings
                                </a>
                            </div>

                            <!-- Divider -->
                            <div class="border-t border-gray-100"></div>

                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" 
                                        class="group flex w-full items-center px-4 py-2 text-sm text-red-700 hover:bg-red-50">
                                    <svg class="mr-3 h-5 w-5 text-red-400 group-hover:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    Sign out
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Jika belum login -->
                    <button onclick="toggleLoginModal()" class="text-white bg-emerald-600 px-4 py-2 rounded-lg hover:bg-emerald-700">
                        Login
                    </button>
                @endauth
            </div>
        </div>
    </div>

    <!-- Include Login Modal -->
    @include('auth.login')
    @include('auth.register')
</header>