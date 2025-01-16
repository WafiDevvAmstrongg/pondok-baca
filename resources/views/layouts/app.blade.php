<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pondok Baca - Perpustakaan Santri Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
    </style>
</head>
<body>
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
                    <button class="p-2 rounded-lg hover:bg-gray-100">
                        <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>
                    <button class="p-2 rounded-lg hover:bg-gray-100">
                        <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    <img src="{{asset('img/author.jpeg')}}" alt="Profile" class="h-8 w-8 rounded-full">
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-50 max-w-6xl mx-auto px-4 py-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Tentang PondokBaca</h3>
                        <p class="mt-4 text-gray-600">
                            Temukan Koleksi Digital Buku-buku menarik di PondokBaca
                        </p>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Link</h3>
                        <ul class="mt-4 space-y-2">
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Toko</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">API</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Bantuan</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Laporkan</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Komunitas</h3>
                        <ul class="mt-4 space-y-2">
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Discord</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Twitter</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Instagram</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-gray-900">Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Berita</h3>
                        <p class="mt-4 text-gray-600">Mari bergabung dengan PondokBaca dan mulai guncangkan dunia😎</p>
                    </div>
                </div>
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <p class="text-center text-gray-600">&copy; 2025 WahidDev. All rights reserved.</p>
                </div>
            </div>
    </footer>
</body>
</html>