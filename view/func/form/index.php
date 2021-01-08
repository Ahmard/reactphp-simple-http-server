<?php require dirname(__DIR__, 2) . '/includes/header.php' ?>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Submission</div>
                <div class="card-body">
                    <form action="/func/form/submit" method="post">
                        <div class="input-group">
                            <input type="text" name="name" class="form-control" placeholder="Your name">
                        </div>
                        <div class="input-group mt-2">
                            <input type="email" name="email" class="form-control" placeholder="Your email address">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-md btn-primary mt-2">
                                <i class="bi bi-save2"></i> Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php require dirname(__DIR__, 2) . '/includes/footer.php' ?>