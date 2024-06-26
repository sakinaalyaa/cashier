<table class="table table-compact table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>NIP</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Telepon</th>
            <th>Agama</th>
            <th>Status Nikah</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $p->nip }}</td>
                <td>{{ $p->nik }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->jenis_kelamin }}</td>
                <td>{{ $p->tempat_lahir }}</td>
                <td>{{ $p->tanggal_lahir }}</td>
                <td>{{ $p->telepon }}</td>
                <td>{{ $p->agama }}</td>
                <td>{{ $p->status_nikah }}</td>
                <td>{{ $p->alamat}}</td>
                <td>{{ $p->foto }}</td>

                <td>
                    <button type="button" class="btn btn-primary btn-edit" data-bs-toggle="modal"
                        data-bs-target="#modalEditKaryawan" data-mode="edit" data-id="{{ $p->id }}"
                        data-nip="{{ $p->nip }}"
                        data-nik="{{ $p->nik }}"
                        data-nama="{{ $p->nama }}"
                        data-jenis_kelamin="{{ $p->jenis_kelamin }}"
                        data-tempat_lahir="{{ $p->tempat_lahir }}"
                        data-tanggal_lahir="{{ $p->tanggal_lahir }}"
                        data-telepon="{{ $p->telepon }}"
                        data-agama="{{ $p->agama }}"
                        data-status_nikah="{{ $p->status_nikah }}"
                        data-alamat="{{ $p->alamat }}"
                        data-foto="{{ $p->foto }}">

                
                        <i class="fas fa-edit"></i>
                    </button>
                    <form action="{{ route('karyawan.destroy', $p->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="button" class="btn btn-danger delete-data"><i class="fa fa-trash"></i></button>
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>