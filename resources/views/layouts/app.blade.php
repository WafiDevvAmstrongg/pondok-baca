<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .main-content {
            min-height: calc(100vh - 140px);
            padding: 20px 0;
        }
    </style>
</head>
<body>
    @include('partials.header')
    
    <div class="main-content">
        @yield('content')
    </div>
    
    @include('partials.footer')
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>