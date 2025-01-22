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
    @include('partials.header')
    <!-- Main Content -->
    @yield('content')
    @include('partials.footer')

    <script>
        function toggleLoginModal() {
            const loginModal = document.getElementById('loginModal');
            const registerModal = document.getElementById('registerModal');
            loginModal.classList.toggle('hidden');
            registerModal.classList.add('hidden');
        }

        function toggleRegisterModal() {
            const registerModal = document.getElementById('registerModal');
            const loginModal = document.getElementById('loginModal');
            registerModal.classList.toggle('hidden');
            loginModal.classList.add('hidden');
        }

        function switchToRegister() {
            const loginModal = document.getElementById('loginModal');
            const registerModal = document.getElementById('registerModal');
            loginModal.classList.add('hidden');
            registerModal.classList.remove('hidden');
        }

        function switchToLogin() {
            const loginModal = document.getElementById('loginModal');
            const registerModal = document.getElementById('registerModal');
            registerModal.classList.add('hidden');
            loginModal.classList.remove('hidden');
        }

        // Close modals when clicking outside
        document.addEventListener('click', function(e) {
            const loginModal = document.getElementById('loginModal');
            const registerModal = document.getElementById('registerModal');

            if (e.target === loginModal) {
                toggleLoginModal();
            }
            if (e.target === registerModal) {
                toggleRegisterModal();
            }
        });
        function toggleDropdown() {
            const dropdown = document.getElementById('profileDropdown');
            dropdown.classList.toggle('hidden');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            const dropdown = document.getElementById('profileDropdown');
            const profileButton = document.getElementById('profileButton');

            if (!dropdown.contains(e.target) && !profileButton.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
