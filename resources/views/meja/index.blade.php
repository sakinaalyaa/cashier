@extends('template.layout')

@push('style')

@endpush

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            {{-- <h3 class="card-title">Meja </h3> --}}
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

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFormMeja">
                <i class="fas fa-plus"></i> Tambah Meja
            </button>

            <a href="{{ route('su') }}" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Export XSLX
            </a>
            
            <a href="{{ route('si') }}" class="btn btn-danger">
            <i class="fas fa-file-pdf"></i> Export PDF
            </a>

            <button type="button" class="btn btn-warning"data-toggle="modal" data-target="#formImport">
            <i class="fas fa-file-excel"></i> Import</button>

            @include('meja.data')

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <!-- @include('template.footer') -->
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->


</section>

@include('meja.form')
@include('meja.edit')
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

        $('#modalEditMeja').on('show.bs.modal', function(e) {
            let button = $(e.relatedTarget)
            let id = $(button).data('id')
            let nomor_meja = $(button).data('nomor_meja')
            let kapasitas = $(button).data('kapasitas')
            let status = $(button).data('status')
        
            $(this).find('#nomor_meja').val(nomor_meja)
            $(this).find('#kapasitas').val(kapasitas)
            $(this).find('#status').val(status)
           
            $('#edit-form').attr('action', `/meja/${id}`)
        })
    })
</script>
@endpush