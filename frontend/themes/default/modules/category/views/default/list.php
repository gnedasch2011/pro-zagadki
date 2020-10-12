<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php
        $i = 0;

        foreach ($models as $model) {

            if ($i % 3 == 0) {
                $colorBlock = 'gr4';
            } else {
                $colorBlock = 'gr5';

            }

            echo $this->render('@app/themes/default/modules/items/views/default/detail', [
                    'model' => $model,
                    'category' => $category,
                    'colorBlock' => $colorBlock,

                ]
            );

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
</div>
