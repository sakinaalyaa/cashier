<div class="mt-4">
    <table class="table table-compact table-stripped" id="myTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>Jenis Id</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Image</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menu as $p)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $p->jenis_id }}</td>
                <td>{{ $p->nama_menu }}</td>
                <td>{{ $p->harga }}</td>
                <td>{{ $p->image }}</td>
                <td>{{ $p->deskripsi }}</td>




                <td>
                    <button type="button" class="btn btn-primary btn-edit" data-bs-toggle="modal" data-bs-target="#modalEditMenu" data-mode="edit" data-id="{{ $p->id }}" data-jenis_id="{{ $p->jenis_id }}" data-nama_menu="{{ $p->nama_menu }}" data-harga="{{ $p->harga }}"  data-image="{{ $p->image }}" data-deskripsi="{{ $p->deskripsi }}"><i class="fas fa-edit"></i>
                    </button>
                    <form action="{{ route('menu.destroy', $p->id) }}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>