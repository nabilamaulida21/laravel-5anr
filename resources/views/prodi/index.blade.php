<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Prodi</title>
    @vite('resources/css/app.css')
</head>

<body class="p-8">

    <a href="{{ route('prodi.create') }}" class="text-sm font-bold text-white bg-blue-600 px-5 py-2">Tambah</a>
    <table class="table-auto mt-5">
        <thead>
            <tr class="border text-center">
                <th class="px-5">ID</th>
                <th class="px-5">Kode Prodi</th>
                <th class="px-5">Nama Prodi</th>
                <th class="px-5">Nama Kaprodi</th>
                <th class="px-5">Opsi</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($banyak_prodi as $prodi)
            <tr class="text-center border">
                <td class="px-5">{{ $prodi->id }}</td>
                <td class="px-5">{{ $prodi->kode_prodi }}</td>
                <td class="px-5">{{ $prodi->nama_prodi }}</td>
                <td class="px-5">{{ $prodi->nama_kaprodi }}</td>
                <td class="px-5 flex items-center gap-3">
                    <a href="{{ route('prodi.edit', $prodi->id) }}" class="text-blue-700 font-bold">
                        Edit
                    </a>

                    <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                        @csrf
                        @method('DELETE') <button type="submit" class="text-red-600 font-bold cursor-pointer">
                            Hapus
                        </button>
                    </form>
            </tr>
        @endforeach
        </tbody>
    </table>

</body>

</html>
