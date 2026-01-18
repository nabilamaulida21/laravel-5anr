<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Prodi</title>
    @vite('resources/css/app.css')
  </head>
  <body class="p-8">
    
    <div class="max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-6">Tambah Data Prodi</h1>

        <form action="{{ route('prodi.store') }}" method="POST" class="space-y-4">
            @csrf <div>
                <label for="kode_prodi" class="block mb-1 font-medium">Kode Prodi</label>
                <input type="text" name="kode_prodi" id="kode_prodi" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div>
                <label for="nama_prodi" class="block mb-1 font-medium">Nama Prodi</label>
                <input type="text" name="nama_prodi" id="nama_prodi" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div>
                <label for="nama_kaprodi" class="block mb-1 font-medium">Nama Kaprodi</label>
                <input type="text" name="nama_kaprodi" id="nama_kaprodi" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 cursor-pointer">
                Simpan
            </button>
        </form>
    </div>

  </body>
</html>