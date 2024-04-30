<div class="modal fade" id="cikiniw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ url('jenis/import') }}" enctype="multipart/form-data">
                    <div id="method"></div>
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="jenis">File Excel</label>
                            <input type="file" name="import" id="import">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
</div>