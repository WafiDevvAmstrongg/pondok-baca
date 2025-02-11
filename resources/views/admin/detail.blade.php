@extends('layouts.app')

@section('content')
<main class="max-w-6xl mx-auto px-4 py-8">
    <!-- Grid Koleksi Buku -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-8">
        <!-- Buku 1 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer" onclick="openModal('book1')">
            <div class="relative aspect-square">
                <img src="{{ asset('img/buku1.jpg') }}" alt="Buku 1" class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-1">Panduan Sex Dalam Islam</h3>
                <p class="text-sm text-gray-600">by Wafi Udin</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-sm text-gray-600">Stok Buku</span>
                    <span class="text-sm text-gray-600">107</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Buku -->
    <div id="bookModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-gray-900 p-6 rounded-lg shadow-lg max-w-4xl w-full flex flex-col md:flex-row text-white">
            <!-- Gambar Buku -->
            <div class="w-full md:w-1/2 flex justify-center items-center p-4">
                <img id="bookImage" class="w-full md:w-96 h-auto rounded-lg shadow-lg" src="" alt="Book Image">
            </div>

            <!-- Detail Buku -->
            <div class="w-full md:w-1/2 p-4">
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
    </div>

</main>

<script>
    function openModal(bookId) {
        let bookDetails = {
            'book1': {
                title: 'Panduan Sex Dalam Islam',
                image: '{{ asset('img/buku1.jpg') }}',
                description: 'Buku ini membahas panduan seks dalam Islam berdasarkan hadits dan Al-Quran.',
                author: 'Wafi Udin',
                year: '2023',
                pages: '250',
                stock: '107',
            },
            // Tambahkan buku lainnya di sini
        };

        let book = bookDetails[bookId];

        document.getElementById("bookTitle").innerText = book.title;
        document.getElementById("bookImage").src = book.image;
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
