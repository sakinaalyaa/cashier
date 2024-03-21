<table class="table table-compact table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            
    </thead>
    <tbody>
        @foreach ($category as $p)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $p->nama }}</td>
                <td>
                    <button type="button" class="btn btn-primary btn-edit" data-bs-toggle="modal"
                        data-bs-target="#modalEditcategory" data-mode="edit" data-id="{{ $p->id }}"
                       
                        data-nama="{{ $p->nama }}">

                
                        <i class="fas fa-edit"></i>
                    </button>
                    <form action="{{ route('category.destroy', $p->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="button" class="btn btn-danger delete-data "><i class="fa fa-trash"></i></button>
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>