<a href="{{ route('prodi.create') }}">Tambah</a>
<table>
    @foreach ($banyak_prodi as $prodi)
    <tr>
        <td>{{ $prodi->id }}</td>
        <td>{{ $prodi->kode_prodi }}</td>
        <td>{{ $prodi->nama_prodi }}</td>
        <td>{{ $prodi->nama_kaprodi }}</td>
        <td>
            <a href="#">Ubah</a>
            <a href="#">Hapus</a>
    </tr>
    @endforeach
</table>
