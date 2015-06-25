<?php

$mongo = getenv("MONGOHQ_URL");
if(empty($mongo)) {
    $mongo = "mongodb://:@localhost:27017/shareloco";
    // mongodb://heroku:XXXXXXXXXXXXX@dogen.mongohq.com:10010/appXXXXX
}
return [
    'class' => 'yii\mongodb\Connection',
    // 'class' => 'yii\db\Connection',
    'dsn' => $mongo, // 'mysql:host=localhost;dbname=yii2basic',
    // 'username' => 'root',
    // 'password' => '',
    'charset' => 'utf8',
];
