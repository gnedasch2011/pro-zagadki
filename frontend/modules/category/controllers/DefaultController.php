<?php

namespace frontend\modules\category\controllers;

use frontend\modules\category\model\Category;
use frontend\modules\page\model\Page;
use frontend\modules\url\components\ControllerWithParam;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;


class DefaultController extends ControllerWithParam
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionView($param)
    {
        $page = Page::find()->where(['id' => $param])->one();

        $this->setPageParams($page);

        return $this->render('view', [
            'page' => $page,
        ]);
    }


    public function actionMainPage()
    {
        return $this->render('MainPage', [
        ]);
    }

    public function actionList($name_transliteration)
    {
        $category = Category::find()->where(['name_transliteration' => $name_transliteration])->one();
        $query = $category->getItems();

        $this->view->title = "Загадки про {$category->name} с ответами | 50 загадок на Pro-Zagadki.ru";
        $this->view->registerMetaTag(
            ['name' => 'description', 'content' => "Загадки про {$category->name}. Подборка из 50 загадок с ответами для детей и взрослых на Pro-Zagadki.ru"]
        );

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);

        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $h1 = "Загадки на тему \"" . $category->name . "\"";

        $this->view->params['breadcrumbs'][] = array(
            'label' => $category->name,
        );


        return $this->render('list', [
            'models' => $models,
            'pages' => $pages,
            'category' => $category,
            'h1' => $h1,

        ]);
    }


}

