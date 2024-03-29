<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 22.09.2020
 * Time: 8:36
 */

namespace frontend\modules\search\controllers;

use frontend\modules\items\model\Items;
use frontend\modules\search\form\SearchQuery;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $SearchQuery = new SearchQuery();
        echo "<pre>"; print_r($_POST);die();
        if ($SearchQuery->load(\Yii::$app->request->post()) && $SearchQuery->validate()) {
                echo "<pre>"; print_r($SearchQuery);die();
            $searchWord = $SearchQuery->query;

            $items = Items::searchItems($searchWord);

            return $this->render('resultSearch', [
                'items' => $items ?? [],
                'searchWord' => $searchWord,
            ]);

        }

        return $this->render('resultSearch', [
            'items' => $items ?? [],
            'searchWord' => $searchWord,
        ]);
    }
}