<?php

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'debug'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20'] // регулируйте в соответствии со своими нуждами
        ],
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['127.0.0.1']
        ],

        'site' => [
            'class' => 'frontend\modules\site\Module',
        ],
        'category' => [
            'class' => 'frontend\modules\category\Module',
        ],
        'items' => [
            'class' => 'frontend\modules\items\Module',
        ],

        'sitemap' => [
            'class' => 'frontend\modules\sitemap\Module',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'enableCsrfValidation' => false,
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        'view' => [
//            'class' => 'app\modules\common\components\View',
            'theme' => [
                'basePath' => '@app/themes/votpusk',
                'baseUrl' => '@web/themes/votpusk',
                'pathMap' => [
                    '@app/views' => '@app/themes/votpusk',
                    '@app/modules' => '@app/themes/votpusk/modules',
                ]
            ]
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/default/main-page',
                '<name_transliteration:[\w-]+>/<id:\d+>' => 'items/default/detail',
                '<name_transliteration:[\w-]+>' => 'category/default/list',

                'sitemap.xml' => 'sitemap/default',
                'sitemap/<index:\d+>' => 'sitemap/default/sitemap',

//                'names' => 'rhyme/page-with-name',

//                '<module:[\w-]+>/admin/<action:[\w-]+>/<id:\d+>' => '<module>/admin/<action>',
//                '<module:[\w-]+>/admin/<action:[\w-]+>' => '<module>/admin/<action>',
//                [
//                    'class' => 'frontend\modules\url\components\rule\UrlRule',
//                ],
//                'rhyme/<rhyme:\D+>' => 'rhyme/search-rhyme',
//                'rhyme/index' => 'rhyme/index',
            ],
        ],


    ],
    'params' => $params,
];
