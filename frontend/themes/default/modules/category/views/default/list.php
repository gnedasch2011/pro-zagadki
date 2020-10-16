<div class="main_text">
    <h2><?= $h1 ?? ''; ?></h2>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <?php
    $i = 0;

    foreach ($models as $model) {

        if ($i % 3 == 0) {
            $colorBlock = 'gr4';
        } else {
            $colorBlock = 'gr5';

        }

        echo "<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 block-puzzles {$colorBlock}\">";
        echo $this->render('@app/themes/default/modules/items/views/default/_block/item/detailPuzzles', [
                'model' => $model,
            ]
        );
        echo "</div>";
        $i++;
    }

    ?>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <?php
    echo \yii\widgets\LinkPager::widget([
        'pagination' => $pages,

    ]); ?>

</div>

