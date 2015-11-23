<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=119.29.101.11;dbname=mysql',
            'username' => 'root',
            'password' => 'zhanglu',
            // 'tablePrefix' => 'wly_',
            'charset' => 'utf8',

            // 'class' => 'yii\db\Connection',
            // 'dsn' => 'mysql:host=localhost;dbname=niutou-local',
            // 'username' => 'root',
            // 'password' => '',
            // 'tablePrefix' => 'wly_',
            // 'charset' => 'utf8',
        ],
    ],
];
