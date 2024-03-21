<!-- Modal -->
<div class="modal fade" id="modalEditMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Menu</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="menu" id="edit-form">
        @method("put")
        @csrf
        <div class="modal-body">
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

                        <div class="modal-body">
                        <form method="POST" action="{{ url('menu/import') }}" enctype="multipart/form-data"> @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="jenis">File Excel</label>
                                    <input type="file" name="import" id="import">
                                </div>

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
