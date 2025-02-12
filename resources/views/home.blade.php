@extends('layouts.app')

@section('content')
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Hero Section -->
        <div class="rounded-2xl bg-gradient-to-r from-emerald-100 via-teal-100 to-green-100 p-8 mb-12">
            <div class="flex justify-between items-center">
                <div class="max-w-xl">
                    <h1 class="text-4xl font-bold mb-4">Temukan Koleksi Digital Buku.</h1>
                    <p class="text-gray-700 text-lg mb-6">Kumpulan buku-buku dalam bentuk digital, dari kaligrafi hingga
                        kitab-kitab klasik yang telah didigitalisasi.</p>
                    <button class="bg-emerald-600 text-white px-6 py-3 rounded-xl hover:bg-emerald-700">
                        Jelajahi Sekarang
                    </button>
                    @auth
                        @if (auth()->user()->role === 'admin' || auth()->user()->role === 'admin')
                            <a href="{{ route('dashboard') }}"
                                class="bg-emerald-600 text-white px-6 py-3 rounded-xl hover:bg-emerald-700">
                                Pergi ke Dashboard
                            </a>
                        @else
                            <a href="{{ route('home') }}"
                                class="bg-blue-500 text-white px-6 py-3 rounded-xl hover:bg-blue-600">
                                Kembali ke Beranda
                            </a>
                        @endif
                  
                    @endauth
                </div>
                <div class="hidden lg:block">
                    <img src="{{ asset('img/hero.png') }}" alt="Hero" class="h-60 w-60 object-cover rounded-xl">
                </div>
            </div>
        </div>

        <!-- Featured Collections Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-8">
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer" onclick="openModal('book1')">
                <div class="relative aspect-square">
                    <img src="{{ asset('img/buku1.jpg') }}" alt="Karya" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-1">Panduan Sex Dalam Islam</h3>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-sm text-gray-600">Stok Buku</span>
                        <span class="text-sm text-gray-600">107</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal Detail Buku -->
    <div id="bookModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-gray-800 text-white p-6 rounded-lg max-w-lg w-full">
            <h2 id="bookTitle" class="text-3xl font-bold mb-4"></h2>
            <p id="bookDescription" class="text-gray-300 mb-4"></p>
            <div class="text-sm text-gray-400 space-y-2">
                <p><strong>Penulis:</strong> <span id="bookAuthor"></span></p>
                <p><strong>Tahun Terbit:</strong> <span id="bookYear"></span></p>
                <p><strong>Jumlah Halaman:</strong> <span id="bookPages"></span></p>
                <p><strong>Stok:</strong> <span id="bookStock"></span></p>
            </div>
            <button id="closeModal" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 mt-6 rounded">Tutup</button>
        </div>
    </div>

    <script>
        function openModal(bookId) {
            let bookDetails = {
                'book1': {
                    title: 'Panduan Sex Dalam Islam',
                    description: 'Buku ini membahas panduan seks dalam Islam berdasarkan hadits dan Al-Quran.',
                    author: 'Ajizhh Bakrie',
                    year: '2023',
                    pages: '250',
                    stock: '107',
                }
            };

            let book = bookDetails[bookId];
            document.getElementById("bookTitle").innerText = book.title;
            document.getElementById("bookDescription").innerText = book.description;
            document.getElementById("bookAuthor").innerText = book.author;
            document.getElementById("bookYear").innerText = book.year;
            document.getElementById("bookPages").innerText = book.pages;
            document.getElementById("bookStock").innerText = book.stock;
            document.getElementById("bookModal").classList.remove("hidden");
        }

        document.getElementById("closeModal").addEventListener("click", function() {
            document.getElementById("bookModal").classList.add("hidden");
        });
    </script>
@endsection
