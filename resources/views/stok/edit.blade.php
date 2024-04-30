<!-- Modal -->
<div class="modal fade" id="modalEditStok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Stok</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="stok" id="edit-form">
          @method("put")
          @csrf
          <div class="form-group row">

            <label for="menu_id" class="col-sm-2 col-form-label">Menu Id</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="menu_id" placeholder="menu_id" name="menu_id">
            </div>

            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="jumlah" placeholder="jumlah" name="jumlah">
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-close btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>