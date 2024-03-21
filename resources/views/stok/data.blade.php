<table class="table table-compact table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Jumlah</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stok as $p)
        <tr>
            <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
            <td>{{$p->jumlah}}</td>

            <td>
                <button type="button" class="btn btn-primary btn-edit" data-bs-toggle="modal" data-bs-target="#modalEditStok" data-mode="edit" data-id="{{ $p->id }}" data-jumlah="{{ $p->jumlah }}"><i class="fas fa-edit"></i>
                </button>
                <form action="{{ route('stok.destroy', $p->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="button" class="btn btn-danger delete-data"><i class="fa fa-trash"></i></button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>