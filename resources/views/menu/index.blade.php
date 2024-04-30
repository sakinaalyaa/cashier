@extends('template.layout')

@push('style')

@endpush

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">

            {{-- <h3 class="card-title">menu </h3> --}}
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
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
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
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFormMenu">
                <i class="fas fa-plus"></i> Tambah Menu
            </button>

            <a href="{{ route('tidak') }}" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Export XSLX
            </a>

            <a href="{{ route('hiu') }}" class="btn btn-danger">
                <i class="fas fa-file-pdf"></i> Export PDF
            </a>

            <button href="{{ 'import-menu' }}" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#cikiniw">
                <i class="fa fa-file-excel"></i> Import
            </button>


            @include('menu.data')

            @include('menu.edit')

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <!-- @include('template.footer') -->
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    @include('menu.import')
</section>

@include('menu.form')

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

        $('#modalEditMenu').on('show.bs.modal', function(e) {
            let button = $(e.relatedTarget)
            let id = $(button).data('id')
            let jenis_id = $(button).data('jenis_id')
            let nama_menu = $(button).data('nama_menu')
            let harga = $(button).data('harga')
            let image = $(button).data('image')
            let deskripsi = $(button).data('deskripsi')



            $(this).find('#jenis_id').val(jenis_id)
            $(this).find('#nama_menu ').val(nama_menu)
            $(this).find('#harga').val(harga)
            $(this).find('#image').val(image)
            $(this).find('#deskripsi').val(deskripsi)


            $('#edit-form').attr('action', `/menu/${id}`)
        })
    })
</script>
@endpush