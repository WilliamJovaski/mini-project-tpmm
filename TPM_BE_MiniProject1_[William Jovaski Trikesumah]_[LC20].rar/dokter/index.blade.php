<a href="{{ route('dokter.create') }}">Tambah Dokter</a>
<table>
<thead>
<tr>

    <th>No</th>
    <th>ID Dokter</th>
    <th>Nama Dokter</th>
    <th>Alamat Dokter</th>
    <th>Jenis Kelamin</th>
</tr>
</thead>
<tbody>
@foreach ($dokter as $d)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$d->id_dokter}}</td>
        <td>{{$d->nama_dokter}}</td>
        <td>{{$d->alamat_dokter}}</td>
        <td>{{$d->jenis_kelamin}}</td>
        </tr>
    @endforeach
    </tbody>
</table>