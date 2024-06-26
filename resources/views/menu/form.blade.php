<!-- Modal -->
<div class="modal fade" id="modalFormMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post" action="menu">
            <!-- <form method="post" action="{{ url(request()->segment(1).'/menu/import') }}" enctype="multipart/form-data"> -->
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="menu">File Excel</label>
                            <input type="file" name="import" id="import">
                        </div>
                        </div>
                    <div class="form-group row">

                        <label for="jenis_id" class="col-sm-2 col-form-label">Jenis Id</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jenis_id" placeholder="jenis_id" name="jenis_id">
                        </div>

                        <label for="nama_menu" class="col-sm-2 col-form-label">Nama Menu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_menu" placeholder="nama_menu" name="nama_menu">
                        </div>

                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="harga" placeholder="harga" name="harga">
                        </div>

                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="image" placeholder="image" name="image">
                        </div>

                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="deskripsi" placeholder="deskripsi" name="deskripsi">
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
</div>
