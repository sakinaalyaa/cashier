@extends('template.layout')

@push('style')

@endpush

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">Pelanggan </h3> --}}
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

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nambah">
                <i class="fas fa-plus"></i> Tambah Pelanggan
            </button>

            <a href="{{ route('lo') }}" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Export XSLX
            </a>
            
            <a href="{{ route('ve') }}" class="btn btn-danger">
            <i class="fas fa-file-pdf"></i> Export PDF
            </a>

            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#cikiniw">
            <i class="fas fa-file-excel"></i> Import</button>

            @include('pelanggan.data')

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <!-- @include('template.footer') -->
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    @include('pelanggan.import')
</section>

@include('pelanggan.form')
@include('pelanggan.edit')
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

        $('#modalEditPelanggan').on('show.bs.modal', function(e) {
            let button = $(e.relatedTarget)
            let id = $(button).data('id')
            let nama = $(button).data('nama')
            let email = $(button).data('email')
            let nomor_telepon = $(button).data('nomor_telepon')
            let alamat = $(button).data('alamat')
        
            $(this).find('#nama').val(nama)
            $(this).find('#email').val(email)
            $(this).find('#nomor_telepon').val(nomor_telepon)
            $(this).find('#alamat').val(alamat)
           
            $('#edit-form').attr('action', `/pelanggan/${id}`)
        })
    })
</script>
@endpush