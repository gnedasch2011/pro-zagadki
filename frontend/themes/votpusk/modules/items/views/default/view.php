<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-nav">
            <?php foreach ($model->categories as $category): ?>
                <a href="/<?= $category->url ?>">
                    <div class="page-nav-item" data-an="photos"><?= $category->name; ?></div>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php
        echo $this->render('@votpuskView/modules/items/views/default/_block/item/detailPuzzles', [
                'model' => $model,
            ]
        );
        ?>
    </div>

</div>
