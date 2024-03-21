<!-- Modal -->
<div class="modal fade" id="modalFormKaryawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="karyawan">
                    @csrf
                    <div class="form-group row">

                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nip" placeholder="nip" name="nip">
                        </div>

                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nik" placeholder="nik" name="nik">
                        </div>

                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
                        </div>


                        <label for="status_nikah" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <select id="jenis_kelamin" name="jenis_kelamin" class="col-sm-2 col-form-label">
                                <option value="laki-laki">Cowo</option>
                                <option value="perempuan">Cewe</option>
                            </select>
                        </div>

                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tempat_lahir" placeholder="tempat_lahir" name="tempat_lahir">
                        </div>

                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tanggal_lahir" placeholder="tanggal_lahir" name="tanggal_lahir">
                        </div>

                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="telepon" placeholder="telepon" name="telepon">
                        </div>

                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="agama" placeholder="agama" name="agama">
                        </div>
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Status Nikah</label>
                        <div class="col-sm-9">
                            <select id="status_nikah" name="status_nikah" class="col-sm-2 col-form-label">
                                <option value="belum nikah">Belum Nikah</option>
                                <option value="nikah">Nikah</option>
                            </select>
                        </div>

                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat">
                        </div>

                        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="foto" placeholder="foto" name="foto">
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-close btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> -->
</div>