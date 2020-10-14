<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 25.09.2020
 * Time: 9:13
 */

namespace frontend\modules\sitemap\model;


use frontend\modules\category\model\Category;
use frontend\modules\items\model\Items;
use yii\base\Model;

class SitemapUrlHelper extends Model
{

    const LIMIT_CONST = 50000;


    public static function getAllUrls()
    {
        $defaultURls = [
            '/',
        ];

        if (!$res = \Yii::$app->cache->get('allUrls')) {

            $res = [];
            $urlsPuzzles = Items::find()
                ->with('category')
                ->asArray()
                ->all();


            foreach ($urlsPuzzles as $urlsPuzzle) {

                $urls[] = $urlsPuzzle['category']['name_transliteration'] . '/' . $urlsPuzzle['id'];
            }

            $urlsCategorys = Category::find()
                ->asArray()
                ->all();

            $urlsCategoryArr = [];

            foreach ($urlsCategorys as $urlsCategory) {
                $urlsCategoryArr[] = '/' . $urlsCategory['name_transliteration'];
            }

            $res = array_merge($defaultURls,$urlsCategoryArr, $urls);

            \Yii::$app->cache->set('allUrls', $res, 3600 * 6);
        }


        return $res;
    }

    public static function getCountPage()
    {

        $countPage = 0;
        $arrUrls = self::getAllUrls();

        if (!empty($arrUrls)) {
            $countPage = ceil(count($arrUrls) / self::LIMIT_CONST);
        }

        return $countPage;

    }

}