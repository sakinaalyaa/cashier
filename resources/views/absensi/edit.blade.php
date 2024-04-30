<!-- Modal -->
<div class="modal fade" id="modalEditabsensi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Absensi</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="absensi" id="edit-form">
        @method("put")
        @csrf
        <div class="modal-body">
          <div class="form-group row">

                    <label for="nama_karyawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_karyawan" placeholder="nama_karyawan" name="nama_karyawan">
                    </div>
                    
                    <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="tanggal_masuk" placeholder="tanggal_masuk" name="tanggal_masuk">
                    </div>

                    <label for="waktu_masuk" class="col-sm-2 col-form-label">Waktu Masuk</label>
                    <div class="col-sm-9">
                        <input type="time" class="form-control" id="waktu_masuk" placeholder="waktu_masuk" name="waktu_masuk">
                    </div>

                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="status" name="status">
                            <option value="masuk">masuk</option>
                            <option value="cuti">cuti</option>
                            <option value="izin">izin</option>
                        </select>
                    </div>

                    <label for="waktu_keluar" class="col-sm-2 col-form-label">Waktu Keluar</label>
                    <div class="col-sm-9">
                        <input type="time" class="form-control" id="waktu_keluar" placeholder="waktu_keluar" name="waktu_keluar">
                    </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Edit</button>
        </div>
      </form>
    </div>
  </div>
</div>
