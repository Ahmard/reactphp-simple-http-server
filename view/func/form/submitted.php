<?php require dirname(__DIR__, 2) . '/includes/header.php' ?>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Submitted Form Data</div>
                <div class="card-body">
                    <div class="list-group">
                        <?php
                        /**@var array $formData**/
                        foreach ($formData as $inputName => $inputValue){
                            echo "<div class='list-group-item'>{$inputName}: {$inputValue}</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
<?php require dirname(__DIR__, 2) . '/includes/footer.php' ?>