<!-- Modal -->
<div class="modal fade" id="modalEditMeja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Meja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="meja" id="edit-form">
          @method("put")
          @csrf
          <div class="form-group row">

                        <label for="nomor_meja" class="col-sm-2 col-form-label">Nomor Meja</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nomor_meja" placeholder="nomor_meja" name="nomor_meja">
                        </div>

                        <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kapasitas" placeholder="kapasitas" name="kapasitas">
                        </div>

                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="status" placeholder="status" name="status">
                        </div>

                        <div class="modal-body">
                        <form method="POST" action="{{ url('menu/import') }}" enctype="multipart/form-data"> @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="jenis">File Excel</label>
                                    <input type="file" name="import" id="import">
                                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-close btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>