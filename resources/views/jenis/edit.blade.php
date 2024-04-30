<!-- Modal -->
<div class="modal fade" id="modalEditJenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Jenis</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="jenis" id="edit-form">
        @method("put")
        @csrf
        <div class="modal-body">
          <div class="form-group row">

            <label for="nama_jenis" class="col-sm-3 col-form-label">Nama Jenis</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_jenis" placeholder="nama_jenis" name="nama_jenis">
            </div>
<!-- 
            <label for="category_id" class="col-sm-3 col-form-label">Category Id</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="category_id" placeholder="Category Id" name="category_id">
            </div> -->

            <div class="modal-body">
              <form method="POST" action="{{ url('jenis/import') }}" enctype="multipart/form-data"> @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="jenis">File Excel</label>
                    <input type="file" name="import" id="import">
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



