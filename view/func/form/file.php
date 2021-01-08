<?php require dirname(__DIR__, 2) . '/includes/header.php' ?>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">File Upload</div>
                <div class="card-body">
                    <form action="/func/form/upload" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <input type="file" name="avatar" class="form-control" placeholder="File">
                        </div>
                        <div class="input-group mt-2">
                            <textarea name="comment" class="form-control" placeholder="Write some comment here"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-md btn-primary mt-2">
                                <i class="bi bi-upload"></i> Upload
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php require dirname(__DIR__, 2) . '/includes/footer.php' ?>