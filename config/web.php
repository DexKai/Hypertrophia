<?php

$params = require(__DIR__ . '/params.php');


$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'language' => 'es',
    //'sourceLanguage' => 'es',

    'bootstrap' => [
        'log',
        function () { return Yii::$app->getModule("user"); }, // to set up /user routes
    ],
    'modules' => [
        'user' => [
            'class' => 'app\modules\user\Module',
            // set custom module properties here ...
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'HK65BIV3OIvBbvDNymFGu_iZm8uekslp',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'class' => 'amnah\yii2\user\components\User',
            'enableAutoLogin' => false,
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'user' => [
                        'class' => 'yii\i18n\PhpMessageSource',
                        'basePath' => '@app/messages', // example: @app/messages/fr/user.php
                        //'sourceLanguage' => 'es',
                        //'fileMap' => [
                        //'app' => 'app.php',
                        //]
                    ]
                ],
            ],
        ],
        'user' => [
            'class' => 'amnah\yii2\user\components\User',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
            'messageConfig' => [
                'from' => ['pgsoto@alumnos.ubiobio.cl' => 'Admin'], // this is needed for sending emails
                'charset' => 'UTF-8',
            ],
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            // Disable index.php
            'showScriptName' => true,
            // Disable r= routes
            'enablePrettyUrl' => false,
            'enableStrictParsing' => false,
            'suffix' => '.html',
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
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
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
