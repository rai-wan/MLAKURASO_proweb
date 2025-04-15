<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <!-- Link Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-screen h-screen flex overflow-hidden font-sans m-0">
    <!-- Gambar -->
    <div class="w-1/2 bg-cover bg-center" style="background-image: url('/images/makan2.jpg');"></div>

    <!-- Form -->
    <div class="w-1/2 flex items-center justify-center">
        <form method="POST" action="#" class="bg-white bg-opacity-80 p-10 rounded shadow w-80">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">LOGIN</h2>

            <label for="username" class="block mb-1 font-semibold">Username:</label>
            <input type="text" id="username" name="username" required class="w-full mb-4 p-2 border rounded">

            <label for="password" class="block mb-1 font-semibold">Password:</label>
            <input type="password" id="password" name="password" required class="w-full mb-4 p-2 border rounded">

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white p-2 rounded">Login</button>

            <div class="text-center mt-4">
                Please Register <a href="/register" class="text-blue-600 hover:underline">Here!</a>
            </div>
        </form>
    </div>
</body>
</html>
