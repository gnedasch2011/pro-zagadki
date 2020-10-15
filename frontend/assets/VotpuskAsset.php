<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class VotpuskAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/bootstrap/css/bootstrap-grid.min.css',
        'libs/owl/assets/owl.carousel.min.css',
        'css/fonts.css',
        'css/main.css',
        'css/media.css',
    ];

    public $js = [
        'js/main.js',
    ];

    public $depends = [
        'frontend\assets\AppAsset',
    ];
}
