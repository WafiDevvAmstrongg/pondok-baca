<div class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('images/logo.svg') }}" alt="BookNFT" class="h-8 w-auto">
                <span class="ml-2 text-xl font-bold text-gray-900">BookNFT</span>
            </div>

            <!-- Search Bar -->
            <div class="flex-1 max-w-2xl mx-8">
                <div class="relative">
                    <input type="text" 
                           placeholder="Search by title or ISBN..." 
                           class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <button class="absolute right-3 top-2.5">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Navigation -->
            <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-600 hover:text-gray-900">Explore</a>
                <a href="#" class="text-gray-600 hover:text-gray-900">Create</a>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Connect Wallet
                </button>
            </div>
        </div>
    </div>
</div>