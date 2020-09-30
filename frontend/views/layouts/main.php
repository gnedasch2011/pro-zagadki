<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="image/x-icon" href="/images/main/favicon/favicon.ico" rel="icon">
    <script src="/js/metrika.js"></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<?= $this->render('@app/views/block/headers/_header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php
            // $this is the view object currently being used
            echo Breadcrumbs::widget([
                'homeLink' => [
                    'label' => 'Рифмы к словам',
                    'url' => Yii::$app->homeUrl,
                    'title' => 'Рифмы к словам',
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]);
            ?>
        </div>


        <?= $content ?>

        <!--        ///Правый блок рекламы-->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

            <?php
            echo \yii\widgets\Menu::widget([
                'items' => \frontend\modules\menu\model\MenuHelper::getItemsForMenu(),
                'itemOptions' => ['class' => '', 'style' => 'font-size = 12px;'],
                'submenuTemplate' => "\n<ul class='dropdown-menu' role='menu'>\n{items}\n</ul>\n",
                'options' => ['class' => 'nav'],
            ]);
            ?>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<style>

    #my_nav {
        background: #DBE8BA;
        border-radius: 6px;
        padding: 5px 15px;
    }

    #my_nav .nav-divider {
        background-color: #000;
    }

    #my_nav a {
        color: #204460;
    }
</style>