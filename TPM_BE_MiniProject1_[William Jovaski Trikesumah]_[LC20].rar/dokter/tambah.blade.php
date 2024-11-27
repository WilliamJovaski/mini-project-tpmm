<div>
    <form method="POST" action="{{ route('dokter.store') }}">
        @csrf
        <div>
            <label for="">ID Dokter</label>
            <input type="text" name="id_dokter">
        </div>
        <div>
            <label for="">Nama Dokter</label>
            <input type="text" name="nama_dokter">
        </div>
        <div>
            <label for="">Alamat Dokter</label>
            <input type="text" name="alamat_dokter">
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
    
        <button type="submit">Simpan</button>
    </form>
</div>