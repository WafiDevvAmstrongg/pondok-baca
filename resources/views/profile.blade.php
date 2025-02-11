@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto p-6 my-6">
    <div class="bg-gradient-to-r from-gray-900 to-gray-800 shadow-lg rounded-xl p-8 flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-8">
        <!-- Avatar -->
        <div class="relative flex-shrink-0 cursor-pointer hover:scale-110 transition-transform duration-300" id="avatarContainer">
            <img id="avatar" class="w-36 h-36 rounded-full border-4 border-red-500 shadow-lg" 
                src="{{ asset('img/author.jpeg') }}" 
                alt="Avatar" loading="lazy">
        </div>
        <!-- Informasi Pribadi -->
        <div id="profileDetail" class="flex-grow text-white cursor-pointer">
            <h1 class="text-3xl font-semibold text-red-500 mb-2">About Me</h1>
            <p class="text-gray-400 mb-4">Avid Reader & Community Builder</p>
            <p class="text-gray-300 mb-4">
                Welcome to <span class="text-red-400 font-bold">Pondok Baca Nostalgia</span>. Passionate about books and knowledge, I strive to create a welcoming space for readers of all backgrounds.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-400">
                <div><strong>Birthday:</strong> 4th April 1998</div>
                <div><strong>E-mail:</strong> {{ Auth::user()->email }}</div>
                <div><strong>Residence:</strong> Indonesia</div>
                <div><strong>Freelance:</strong> Available</div>
            </div>
        </div>
    </div>

    <!-- Statistik -->
    <div class="bg-gray-800 shadow-lg rounded-xl p-6 mt-6 grid grid-cols-2 md:grid-cols-4 gap-4 text-center text-white">
        @php
            $stats = [
                ['label' => 'Total Suka', 'count' => 500, 'icon' => 'heart'],
                ['label' => 'Favorit', 'count' => 150, 'icon' => 'star'],
                ['label' => 'Dipinjam', 'count' => 850, 'icon' => 'book-open'],
                ['label' => 'Dikembalikan', 'count' => 190, 'icon' => 'check-circle']
            ];
        @endphp
        @foreach ($stats as $stat)
        <div class="p-4 bg-gray-900 rounded-lg shadow-md cursor-pointer stat-box flex flex-col items-center space-y-2 hover:bg-gray-700 transition duration-300">
            <i data-lucide="{{ $stat['icon'] }}" class="w-6 h-6 text-red-500"></i>
            <span class="block text-2xl font-bold text-red-500">{{ $stat['count'] }}</span>
            <span class="text-gray-400">{{ $stat['label'] }}</span>
        </div>
        @endforeach
    </div>
</div>

<!-- Pop-up Modal -->
<div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-md hidden">
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg max-w-lg text-white text-center transform scale-95 transition-all duration-300">
        <h2 class="text-2xl font-bold mb-4">Profile Detail</h2>
        <img class="w-40 h-40 rounded-full border-4 border-red-500 mx-auto mb-4" src="{{ asset('img/author.jpeg') }}" alt="Avatar">
        <p class="text-gray-300 mb-4">Welcome to <span class="text-red-400 font-bold">Pondok Baca Nostalgia</span>. Passionate about books and knowledge.</p>
        <button id="closeModal" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded transition duration-300">Close</button>
    </div>
</div>

<script>
    document.getElementById("avatarContainer").addEventListener("click", openModal);
    document.getElementById("profileDetail").addEventListener("click", openModal);
    document.getElementById("closeModal").addEventListener("click", closeModal);
    
    function openModal() {
        const modal = document.getElementById("modal");
        modal.classList.remove("hidden");
        modal.querySelector(".transform").classList.add("scale-100");
    }
    
    function closeModal() {
        const modal = document.getElementById("modal");
        modal.classList.add("hidden");
        modal.querySelector(".transform").classList.remove("scale-100");
    }
    
    document.querySelectorAll(".stat-box").forEach((box) => {
        box.addEventListener("click", function () {
            alert("Anda mengklik: " + this.innerText);
        });
    });
    
    lucide.createIcons();
</script>
@endsection
