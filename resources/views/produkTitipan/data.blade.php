<table class="table table-compact table-stripped" id="myTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Nama Supplier</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produkTitipan as $p)
        <tr>
            <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
            <td>{{$p->nama_produk}}</td>
            <td>{{$p->nama_supplier}}</td>
            <td>{{$p->harga_beli}}</td>
            <td>{{$p->harga_jual}}</td>
            <td>{{$p->stok}}</td>
            <td>{{$p->keterangan}}</td>

            <td>
                <button type="button" class="btn btn-primary btn-edit" data-bs-toggle="modal" data-bs-target="#modalEditprodukTitipan" data-mode="edit" data-id="{{ $p->id }}" 
                data-nama_produk="{{ $p->nama_produk }}"
                data-nama_supplier="{{ $p->nama_supplier }}"
                data-harga_beli="{{ $p->harga_beli }}"
                data-harga_jual="{{ $p->harga_jual }}"
                data-stok="{{ $p->stok }}"
                data-keterangan="{{ $p->keterangan }}"
                ><i class="fas fa-edit"></i>
                </button>
                <form action="{{ route('produkTitipan.destroy', $p->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="button" class="btn btn-danger delete-data"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>