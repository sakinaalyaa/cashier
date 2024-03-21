<table class="table table-compact table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Category Id</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($jenis as $p)
        <tr>
            <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
            <td>{{ $p->nama_jenis }}</td>
            <td>{{ $p->category_id }}</td>



            <td>
                <button type="button" class="btn btn-primary form-edit" data-bs-toggle="modal" data-bs-target="#modalEditJenis" data-mode="edit" data-id="{{ $p->id }}" data-nama_jenis="{{ $p->nama_jenis}}" data-category_id="{{ $p->category_id}}">
                    <i class="fa fa-edit"></i>
                </button>
                <form action="{{ route('jenis.destroy', $p->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="button" class="btn btn-danger delete-data"><i class="fa fa-trash"></i></button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>