@extends('layouts.app')

@section('content')
<main class="max-w-6xl mx-auto px-4 py-8">
    <!-- Hero Section -->
    <div class="rounded-2xl bg-gradient-to-r from-emerald-100 via-teal-100 to-green-100 p-8 mb-12">
        <div class="flex justify-between items-center">
            <div class="max-w-xl">
                <h1 class="text-4xl font-bold mb-4">Temukan Koleksi Digital Buku.</h1>
                <p class="text-gray-700 text-lg mb-6">Kumpulan buku-buku dalam bentuk digital, dari kaligrafi hingga kitab-kitab klasik yang telah didigitalisasi.</p>
                <button class="bg-emerald-600 text-white px-6 py-3 rounded-xl hover:bg-emerald-700">
                    Jelajahi Sekarang
                </button>
                <a href="{{ route('dashboard') }}" class="bg-emerald-600 text-white px-6 py-3 rounded-xl hover:bg-emerald-700 ml-2">
                    Pergi ke Dashboard
                </a>
            </div>
            <div class="hidden lg:block">
                <img src="{{asset('img/hero.png')}}" alt="Hero" class="h-60 w-60 object-cover rounded-xl">
            </div>
        </div>
    </div>

    <!-- Categories Scrollbar -->
    <div class="flex overflow-x-auto gap-3 pb-4 no-scrollbar">
        @foreach(['Semua', 'Fiqih', 'Hadits', 'Tafsir', 'Akhlak', 'Kaligrafi', 'Seni Islam', 'Audio'] as $category)
        <button class="flex-none px-4 py-2 rounded-full {{ $category === 'Semua' ? 'bg-emerald-100 text-emerald-800' : 'bg-gray-100 hover:bg-gray-200' }}">
            {{ $category }}
        </button>
        @endforeach
    </div>

    <!-- Featured Collections Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-8">
        <!-- Collection Card 1 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
            <div class="relative aspect-square">
                <img src="{{asset('img/buku1.jpg')}}" alt="Karya" class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="p-4">
                <div class="flex items-center gap-2 mb-1">
                    <div class="flex">
                        <img src="{{asset('img/author.jpeg')}}" alt="Author" class="h-6 w-6 rounded-full ring-2 ring-white">
                    </div>
                    <span class="text-sm text-gray-600">by Wafi Udin</span>
                </div>
                <h3 class="font-semibold text-lg mb-1">Panduan Sex Dalam Islam</h3>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-sm text-gray-600">Stok Buku</span>
                    <span class="text-sm text-gray-600">107</span>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
            <div class="relative aspect-square">
                <img src="{{asset('img/buku2.jpg')}}" alt="Karya" class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="p-4">
                <div class="flex items-center gap-2 mb-1">
                    <div class="flex">
                        <img src="{{asset('img/author.jpeg')}}" alt="Author" class="h-6 w-6 rounded-full ring-2 ring-white">
                    </div>
                    <span class="text-sm text-gray-600">by Wafi Udin</span>
                </div>
                <h3 class="font-semibold text-lg mb-1">Poligami Bukti Keadilan Allah</h3>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-sm text-gray-600">Stok Buku</span>
                    <span class="text-sm text-gray-600">200</span>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
            <div class="relative aspect-square">
                <img src="{{asset('img/buku3.jpg')}}" alt="Karya" class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="p-4">
                <div class="flex items-center gap-2 mb-1">
                    <div class="flex">
                        <img src="{{asset('img/author.jpeg')}}" alt="Author" class="h-6 w-6 rounded-full ring-2 ring-white">
                    </div>
                    <span class="text-sm text-gray-600">by Wafi Udin</span>
                </div>
                <h3 class="font-semibold text-lg mb-1">Kuliah Wahidiyah</h3>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-sm text-gray-600">Stok Buku</span>
                    <span class="text-sm text-gray-600">988</span>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
            <div class="relative aspect-square">
                <img src="{{asset('img/buku4.jpg')}}" alt="Karya" class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="p-4">
                <div class="flex items-center gap-2 mb-1">
                    <div class="flex">
                        <img src="{{asset('img/author.jpeg')}}" alt="Author" class="h-6 w-6 rounded-full ring-2 ring-white">
                    </div>
                    <span class="text-sm text-gray-600">by Wafi Udin</span>
                </div>
                <h3 class="font-semibold text-lg mb-1">Fenomena Shalawat Wahidiyah</h3>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-sm text-gray-600">Stok Buku</span>
                    <span class="text-sm text-gray-600">780</span>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
