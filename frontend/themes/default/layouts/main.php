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
\frontend\assets\VotpuskAsset::register($this);
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
<div class="wrapper">
    <?php $this->beginBody() ?>
    <?= $this->render('@app/themes/default/layouts/block/headers/_header.php'); ?>
    <section class="main_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?= $content; ?>
                </div>
                <div class="col-md-3">
                    <aside>
                        <img src="img/baner2.png" alt="">
                        <div class="news_side">
                            <h3><a href="#">Новости</a></h3>
                            <div class="news_data">07.10.2020</div>
                            <ul>
                                <li><a href="#">Около 300 тысяч туристов посетили Египет за три
                                        месяца</a></li>
                                <li><a href="#">Российские авиакомпании получили допуск на полеты в
                                        24 страны</a></li>
                                <li><a href="#">В Ростуризме рассчитывают, что меры безопасности не
                                        повлияют на программу кешбэка</a></li>
                                <li><a href="#">Выставка под открытым небом «Людвиг ван Бетховен –
                                        Ода «К радости»</a></li>
                                <li><a href="#">Raffles Maldives Meradhoo представляет новую
                                        королевскую резиденцию Royal Residence</a></li>
                            </ul>
                            <a href="#" class="all_news_link">Все новости</a>
                        </div>
                        <div class="baner_side"><img src="img/baner2.png" alt=""></div>
                    </aside>
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
    </section>


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

            <!--        ///Правый блок рекламы-->

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <?= $content ?>
            </div>

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
    <?= $this->render('@app/themes/default/layouts/block/headers/_footer.php'); ?>
    <?php $this->endBody() ?>
</div>
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