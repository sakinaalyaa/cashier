<table class="table table-compact table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Karyawan</th>
            <th>Tanggal Masuk</th>
            <th>Waktu Masuk</th>
            <th>Status</th>
            <th>Waktu Keluar</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($absensi as $p)
        <tr>
            <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
            <td>{{ $p->nama_karyawan }}</td>
            <td>{{ $p->tanggal_masuk }}</td>
            <td>{{ $p->waktu_masuk }}</td>
            <td>{{ $p->status }}</td>
            <td>{{ $p->waktu_keluar }}</td>



            <td>
                <button type="button" class="btn btn-primary form-edit" data-bs-toggle="modal" data-bs-target="#modalEditabsensi" data-mode="edit" data-id="{{ $p->id }}" 
                data-nama_karyawan="{{ $p->nama_karyawan}}" 
                data-tanggal_masuk="{{ $p->tanggal_masuk}}"
                data-waktu_masuk="{{ $p->waktu_masuk}}"
                data-status="{{ $p->status}}"
                data-waktu_keluar="{{ $p->waktu_keluar}}"
                >
                    <i class="fa fa-edit"></i>
                </button>
                <form action="{{ route('absensi.destroy', $p->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="button" class="btn btn-danger delete-data"><i class="fa fa-trash"></i></button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>