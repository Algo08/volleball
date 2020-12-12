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
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'homeUrl' => '/volleybol',
    'components' => [
        'socialShare' => [
            'class' => \ymaker\social\share\configurators\Configurator::class,
            'socialNetworks' => [
                'facebook' => [
                    'class' => \ymaker\social\share\drivers\Facebook::class,
                    'label' => Yii::t('app', '<i class="fa fa-facebook"></i>'),
                    'options' => ['class' => 'fb facebook'],
                ],
                'twitter' => [
                    'class' => \ymaker\social\share\drivers\Telegram::class,
                    'label' => Yii::t('app', '<i class="fa fa-telegram"></i>'),
                    'options' => ['class' => 'tw twitter'],
                ],
                'googlePlus' => [
                    'class' => \ymaker\social\share\drivers\GooglePlus::class,
                    'label' => Yii::t('app', '<i class="fa fa-google-plus"></i>'),
                    'options' => ['class' => 'gp google-plus'],
                ],
            ],
            'options' => [
                'class' => 'social-network ',
            ],
        ],
        'request' => [
            'baseUrl'=>'/volleybol',
            'csrfParam' => '_csrf-frontend',
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
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['uz', 'ru', 'en'], // List all supported languages here
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
            ],
        ],


    ],
    'params' => $params,
];
