<!-- Modal -->
<div class="modal fade" id="modalFormPelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Pelanggan</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post" action="pelanggan">
            @csrf
            <div class="form-group row">

            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
            </div>

            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
            </div>

            <label for="nomor_telepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nomor_telepon" placeholder="Nomor Telepon" name="nomor_telepon">
            </div>

            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
            </div>

            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-close btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>