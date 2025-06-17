<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4 text-indigo-600">✏️ Edit Produk</h1>

        <form method="POST" action="{{ route('produk.update', $produk->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700">Nama Produk</label>
                <input type="text" name="nama" value="{{ $produk->nama }}" class="w-full border px-4 py-2 rounded">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border px-4 py-2 rounded">{{ $produk->deskripsi }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Harga</label>
                <input type="number" name="harga" value="{{ $produk->harga }}" class="w-full border px-4 py-2 rounded">
            </div>

            <div class="flex justify-between">
                <a href="{{ route('produk.list') }}" class="text-gray-600 hover:underline">← Kembali</a>
                <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
