<?php

use frontend\modules\search\form\SearchQuery;
use yii\helpers\Html;

$SearchQuery = new SearchQuery();

?>

<div class="container">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img width="30" alt="Brand"
                     src="https://vashservice.ua/image/image-remont-notebook-hp.jpg">
            </a>
        </div>

        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Загадки по категориям
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Ссылка</a></li>
                    <li><a href="#">Ссылка</a></li>
                </ul>
            </li>
        </ul>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">


            </ul>

            <?php

            use yii\widgets\ActiveForm;

            $form = ActiveForm::begin([
                'action' => '/rhyme/index',
                'options' => ['class' => 'navbar-form navbar-left'],
            ]) ?>
            <div class="form-group">
                <?= $form->field($SearchQuery, 'query')
                    ->textInput([
                        'class' => 'form-control',
                        'placeholder' => 'Поиск',
                    ])->label('');
                ?>
            </div>
            <?= Html::submitButton('Найти', ['class' => 'btn btn-default buttonCenter']) ?>
            <?php ActiveForm::end() ?>


            <?php /*?>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
     <?php */ ?>
        </div><!-- /.navbar-collapse -->
    </nav>
</div><!-- /.container-fluid -->