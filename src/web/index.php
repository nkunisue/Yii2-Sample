<?php
if($_SERVER['REMOTE_ADDR'] == '172.16.14.1'){
    // vagrant 環境は開発環境とする
    defined('YII_DEBUG') or define('YII_DEBUG', isset($envConf['mode']) ? $envConf['mode'] == 'dev' : true);
    defined('YII_ENV') or define('YII_ENV', isset($envConf['mode']) ? $envConf['mode'] : 'dev');
}

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
