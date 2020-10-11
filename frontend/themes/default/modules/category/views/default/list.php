
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php


        foreach ($models as $model) {
            echo $this->render('@app/themes/default/modules/items/views/default/detail', [
                    'model' => $model,
                ]
            );
        }
        ?>
    </div>
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php
        echo \yii\widgets\LinkPager::widget([
            'pagination' => $pages,
        ]);?>

    </div>
</div>
