<?php

namespace frontend\modules\zagadki\controllers;

use common\helpers\HelperCommon;
use frontend\modules\category\model\Category;
use frontend\modules\category\model\CategoryBase;
use frontend\modules\menu\model\MenuHelper;
use frontend\modules\page\model\Page;
use frontend\modules\url\components\ControllerWithParam;
use Yii;
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
        echo "<pre>"; print_r('ffdf');die();
        return $this->render('MainPage', [
        ]);
    }

    public function actionList($category)
    {
        $category = Category::findOne(['name_transliteration' => $category]);


        echo "<pre>";
        print_r($category->items);
        die();

//        $categorys = $res = \Yii::$app->db->createCommand('SELECT * FROM puzzles.category')
//            ->bindValues([
////                                ':word' => trim(),
//                ]
//            )
//            ->queryAll();
//
//
//        foreach ($categorys as $category) {
//            $str = HelperCommon::transliterate($category['name']);
//
//           Yii::$app->db->createCommand()->update('category', ['name_transliteration' => $str], ['id' => $category['id']])->execute();
//        }

        die('ok');

        echo "<pre>";
        print_r($categorys);
        die();
    }


}

