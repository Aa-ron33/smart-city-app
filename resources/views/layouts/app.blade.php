<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart City HQ</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-blue-50 flex flex-col">
    
    <!-- Header -->
    <header class="bg-blue-500 text-white p-4">
        <h1 class="text-2xl font-bold text-center py-2">HQ Smart City</h1>
        <p class="text-center text-sm opacity-90">your all in one apps</p>
    </header>

    <!-- Navbar -->
    <nav class="bg-blue-500 text-white">
        <ul class="flex flex-wrap justify-center gap-2 p-3">
            <li><a href="/" class="px-3 py-1 rounded text-sm hover:bg-blue-600">Home</a></li>
            <li><a href="/about" class="px-3 py-1 rounded text-sm hover:bg-blue-600">About</a></li>
            <li><a href="/services" class="px-3 py-1 rounded text-sm hover:bg-blue-600">Services</a></li>
            <li><a href="/contact" class="px-3 py-1 rounded text-sm hover:bg-blue-600">Contact</a></li>
            <li><a href="/login" class="px-3 py-1 rounded text-sm hover:bg-blue-600">Login</a></li>
            <li><a href="/register" class="px-3 py-1 rounded text-sm hover:bg-blue-600">Register</a></li>
            <li><a href="/dashboard" class="px-3 py-1 rounded text-sm hover:bg-blue-600">Dashboard</a></li>
            <li><a href="/complaints" class="px-3 py-1 rounded text-sm hover:bg-blue-600">Complaints</a></li>
        </ul>
    </nav>

    <!-- Konten Halaman -->
    <main class="flex-1">  
        @yield('content')
    </main>

    {{-- <!-- Footer --> --}}
    <footer class="bg-blue-500 text-white p-4 text-center">
        <p>Follow us on Twitter, Facebook, and Instagram</p>
    </footer>

</body>
</html>