<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">

    <!-- Header -->
    <header class="bg-white shadow p-4 flex justify-between items-center fixed w-full top-0 left-0">
        <h1 class="text-2xl font-bold">Dashboard</h1>

        <nav class="hidden md:flex space-x-6">
            <a href="/dokter" class="text-gray-600 hover:text-blue-500 font-medium">Dokter</a>
            <a href="/pasien" class="text-gray-600 hover:text-blue-500 font-medium">Pasien</a>
            <a href="/pendaftaran" class="text-gray-600 hover:text-blue-500 font-medium">Rawat Jalan</a>
            <a href="/rekam-medis" class="text-gray-600 hover:text-blue-500 font-medium">Rekam Medis</a>
            <a href="/obat" class="text-gray-600 hover:text-blue-500 font-medium">Obat</a>
            <a href="/jadwal" class="text-gray-600 hover:text-blue-500 font-medium">Jadwal</a>
        </nav>
        
    </header>

    <main class="container mx-auto p-4 mt-[5rem]">
        @yield('content')
    </main>

    <footer class="bg-white shadow p-4 mt-4 text-center text-gray-500">
        &copy; 2025 My App
    </footer>

</body>

</html>