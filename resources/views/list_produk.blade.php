<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-6 text-indigo-600">📦 Daftar Produk Toko</h1>

        <!-- Form Tambah Produk -->
        <div class="max-w-xl mx-auto mb-8 p-6 bg-white shadow-md rounded-lg">
            <form method="POST" action="{{ route('produk.simpan') }}">
                @csrf
                <h2 class="text-2xl font-bold mb-4 text-indigo-600">Tambah Produk</h2>

                <div class="mb-4">
                    <label class="block text-gray-700">Nama Produk</label>
                    <input type="text" name="nama" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Harga</label>
                    <input type="number" name="harga" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
                </div>

                <button type="submit" class="bg-indigo-500 text-white px-6 py-2 rounded hover:bg-indigo-600">Simpan</button>
            </form>
        </div>

        <!-- Tabel Daftar Produk -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto border-collapse">
                <thead class="bg-indigo-500 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">#</th>
                        <th class="px-6 py-3 text-left">Nama Produk</th>
                        <th class="px-6 py-3 text-left">Deskripsi</th>
                        <th class="px-6 py-3 text-left">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($produk as $index => $p)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 font-semibold text-gray-800">{{ $p->nama }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $p->deskripsi }}</td>
                        <td class="px-6 py-4 text-green-600 font-medium">Rp{{ number_format($p->harga, 0, ',', '.') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-red-500">Belum ada produk</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <p class="text-center text-sm text-gray-500 mt-6">Tampilan data produk Laravel x TailwindCSS</p>
    </div>

</body>
</html>
