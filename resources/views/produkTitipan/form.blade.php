<!-- Modal -->
<div class="modal fade" id="modalFormprodukTitipan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Produk Titipan</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="produkTitipan">
                    @csrf
                    <div class="form-group row">
                        <label for="nama_produk" class="col-sm-3 col-form-label">Nama Produk</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_produk" placeholder="Nama Produk" name="nama_produk" required>
                        </div>

                        <label for="nama_supplier" class="col-sm-3 col-form-label">Nama Supplier</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_supplier" placeholder="Nama Supplier" name="nama_supplier" required>
                        </div>

                        <label for="harga_beli" class="col-sm-3 col-form-label">Harga Beli</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="harga_beli" placeholder="Harga Beli" name="harga_beli" required>
                        </div>

                        <label for="harga_jual" class="col-sm-3 col-form-label">Harga Jual</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="harga_jual" placeholder="Harga Jual" name="harga_jual" required>
                        </div>

                        <label for="stok" class="col-sm-3 col-form-label">Stok</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="stok" placeholder="Stok" name="stok" required>
                        </div>

                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="keterangan" placeholder="Keterangan" name="keterangan">
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
 