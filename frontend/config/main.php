<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'en',
    'controllerNamespace' => 'frontend\controllers',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'news-list' => 'test/index',
                'news-view/<id:\d+>' => 'test/view',
                'news-count' => 'count/index',
            ],
        ],
        'stringHelper' => [
            'class' => 'common\components\StringHelper',
        ],
        /*'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'dmitry.monya@gmail.com',
                'password' => 'fvytlomllpjusqvx',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],*/  
//        'assetManager' => [
//            'bundles' => [
//                'yii\web\JqueryAsset' => [
//                    'js'=>[]
//                ],
//                'yii\web\YiiAsset' => [
//                    'js'=>[]
//                ],
//                'yii\bootstrap\BootstrapPluginAsset' => [
//                    'js'=>[]
//                ],
//            ],
//        ],
    ],
    'params' => $params,
    'aliases' => [
        '@files' => '/var/www/project/frontend/web/files',
        '@photos' => '@files/photos',
        '@images' => '/files/photos',
    ],
];
