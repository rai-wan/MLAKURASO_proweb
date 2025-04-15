<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mlakuraso</title>

    <!-- Font -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind Lokal -->
    <script src="/styles/tailwindcss3.4.1.js"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Selamat Datang di Mlakuraso!</h1>
        <p class="text-gray-600">Ini adalah contoh penggunaan Tailwind CSS lokal.</p>
    </div>
</body>
