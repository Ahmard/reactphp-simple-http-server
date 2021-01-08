<?php
require dirname(__DIR__, 2) . '/includes/header.php';

/**@var array $uploaded**/
/**@var array $submitted**/
/**@var React\Http\Io\UploadedFile $avatar**/
$avatar = $uploaded['avatar'];
?>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">File Upload</div>
                <div class="card-body">
                    <div class="list-group">
                        <div class="list-group-item"><b>Name:</b> <?=$avatar->getClientFilename()?></div>
                        <div class="list-group-item"><b>Type:</b> <?=$avatar->getClientMediaType()?></div>
                        <div class="list-group-item"><b>Size:</b> <?=$avatar->getSize()?></div>
                        <div class="list-group-item"><b>Submitted Comment:</b> <?=$submitted['comment'] ?? null?></div>
                    </div>
                </div>
            </div>
        </div>
<?php require dirname(__DIR__, 2) . '/includes/footer.php' ?>