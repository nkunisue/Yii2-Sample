<?php

$urlText = getenv("CLEARDB_DATABASE_URL");
if($urlText && ($url = parse_url($urlText))){
    $name = substr($url['path'],1);
    // FIXME: ?reconnect=true 設定が捨てられてしまう。
    return [
        'class' => 'yii\db\Connection',
        'dsn' => "{$url['scheme']}:host={$url['host']};dbname={$name}", // ?{$url['query']}",
        'username' => $url['user'],
        'password' => $url['pass'],
        'charset' => 'utf8',
    ];
}
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=shareloco',
    'username' => 'shareloco',
    'password' => 'takoyaki',
    'charset' => 'utf8',
];
