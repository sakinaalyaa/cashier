<!-- Modal -->
<div class="modal fade" id="modalFormJenis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data jenis</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="jenis">
                    @csrf
                    <div class="form-group row">
                        
                    <label for="nama_jenis" class="col-sm-2 col-form-label">Nama Jenis</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_jenis" placeholder="nama_jenis" name="nama_jenis">
                    </div>
                    
                    <!-- <label for="category_id" class="col-sm-2 col-form-label">Category Id</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="category_id" placeholder="category_id" name="category_id">
                    </div> -->

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