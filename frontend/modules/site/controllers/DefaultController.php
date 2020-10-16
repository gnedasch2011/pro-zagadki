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


        $urlsCategorys = \Yii::$app->db->createCommand('SELECT c.* FROM puzzles.items_categorys ic
right join category c on c.id = ic.category_id
where category_id is not null
group by c.name')->queryAll();
            
        $i = 0;
        $res = [];

        foreach ($urlsCategorys as $urlCategory) {
            if ($i > 10) {
                $letter = mb_substr($urlCategory['name'], 0, 1, 'utf-8');
                $res[$letter][$urlCategory['name']]['name'] = $urlCategory['name'];
                $res[$letter][$urlCategory['name']]['url'] = '/' . $urlCategory['name_transliteration'];
            }

            $i++;
        }

        ksort($res);

        return $this->render('MainPage', [
            'urlsCategorysGroup' => $res,
        ]);
    }


}

