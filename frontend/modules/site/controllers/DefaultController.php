<?php

namespace frontend\modules\site\controllers;

use frontend\modules\category\model\Category;
use frontend\modules\page\model\Page;
use frontend\modules\url\components\ControllerWithParam;
use Yii;
use yii\web\Controller;


class DefaultController extends ControllerWithParam
{
    public function actionMainPage()
    {

        $this->view->title = "Загадки с ответами | 100500 загадок на Pro-Zagadki.ru";
        $this->view->registerMetaTag(
            ['name' => 'description', 'content' => "Лучшие загадки с ответами для детей и взрослых! Более 100500 загадок на разные темы на Pro-Zagadki.ru"]
        );

      
        $urlsCategorys = Category::find()
            ->asArray()
            ->all();


        return $this->render('MainPage', [
            'urlsCategoryArr' => $urlsCategorys,
        ]);
    }


}

