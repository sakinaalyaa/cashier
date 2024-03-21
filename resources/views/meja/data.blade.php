<table class="table table-compact table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nomor Meja</th>
            <th>kapasitas</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($meja as $p)
        <tr>
            <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
            <td>{{$p->nomor_meja}}</td>
            <td>{{$p->kapasitas}}</td>
            <td>{{$p->status}}</td>
            <td>
                <button type="button" class="btn btn-primary btn-edit" data-bs-toggle="modal" data-bs-target="#modalEditMeja" data-mode="edit" data-id="{{ $p->id }}"
                 data-nomor_meja="{{ $p->nomor_meja }}"
                 data-kapasitas="{{ $p->kapasitas }}"
                 data-status="{{ $p->status }}"><i class="fas fa-edit"></i>
                </button>
                <form action="{{ route('meja.destroy', $p->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="button" class="btn btn-danger delete-data"><i class="fa fa-trash"></i></button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>