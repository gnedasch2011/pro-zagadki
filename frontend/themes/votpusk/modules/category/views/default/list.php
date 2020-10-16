<div class="main_text">
    <h1><?= $h1 ?? ''; ?></h1>
</div>

<div class="row">

    <?php

    foreach ($models as $model) {
        echo $this->render('@app/themes/votpusk/modules/items/views/default/_block/item/detailPuzzles', [
                'model' => $model,
            ]
        );
    }

    ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php
        echo \yii\widgets\LinkPager::widget([
            'pagination' => $pages,

        ]); ?>

    </div>

</div>

