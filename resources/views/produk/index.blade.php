@extends('template.layout')

@push('style')

@endpush

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">Produk </h3> --}}
            <!-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>

            </div> -->
        </div>

        <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }} </li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFormProduk">
                <i class="fas fa-plus"></i> Tambah Produk Titipan
            </button>

            @include('produk.data')

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <!-- @include('template.footer') -->
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->


</section>

@include('produk.form')
@include('produk.edit')
@endsection



@push('script')
<script>
    $(function() {
        $('#myTable').DataTable()
    })
</script>
<script>
    $('.alert-success').fadeTo(2000, 500).slideUp(500, function() {
        $('.alert-success').slideUp(500)
    })

    $('.alert-danger').fadeTo(2000, 500).slideUp(500, function() {
        $('.alert-danger').slideUp(500)
    })



    $('.delete-data').on('click', function(e) {
        const nama = $(this).closest('tr').find('td:eq(1)').text();
        console.log('tes')
        Swal.fire({
            icon: 'error',
            title: 'Hapus Data',
            html: `Apakah data <b>${nama}</b> akan di hapus?`,
            confirmButtonText: 'Ya',
            denyButtonText: 'Tidak',
            'showDenyButton': true,
            focusConfirm: false
        }).then((result) => {
            if (result.isConfirmed)
                $(e.target).closest('form').submit()
            else swal.close()
        })
    })

    $(document).ready(function() {

        $('#modalEditProduk').on('show.bs.modal', function(e) {
            let button = $(e.relatedTarget);
            let id = $(button).data('id');
            let nama_produk = $(button).data('nama_produk');
            let nama_supplier = $(button).data('nama_supplier');
            let harga_beli = $(button).data('harga_beli');
            let harga_jual = $(button).data('harga_jual');
            let stok = $(button).data('stok');
            let keterangan = $(button).data('keterangan');

            $(this).find('#nama_produk').val(nama_produk);
            $(this).find('#nama_supplier').val(nama_supplier);
            $(this).find('#harga_beli').val(harga_beli);
            $(this).find('#harga_jual').val(harga_jual);
            $(this).find('#stok').val(stok);
            $(this).find('#keterangan').val(keterangan);

           
            $('#edit-form').attr('action', `/produk/${id}`)
        })
    })
</script>
@endpush