<?php
return [
    // Web
    '' => 'web/default/index',
    'login' => 'web/default/login',
    'logout' => 'web/default/logout',
    '<controller:[\w-]+>' => 'web/<controller>/index',
    '<controller:[\w-]+>/<action:[\w-]+>' => 'web/<controller>/<action>',
    '<module:[\w-]+>/<controller:[\w-]+>/<action:[\w-]+>' => '<module>/<controller>/<action>',

    // admin
    'admin/' => 'admin/default/index',
    'admin/<controller:[\w-]+>' => 'admin/<controller>/index',
    'admin/<controller:[\w-]+>/<action:[\w-]+>' => 'admin/<controller>/<action>',

    // api latest
    'api/' => 'api/v1/default/index',
    'api/<controller:[\w-]+>' => 'api/v1/<controller>/index',
    'api/<controller:[\w-]+>/<action:[\w-]+>' => 'api/v1/<controller>/<action>',

    // api version 1
    'ap1/v1' => 'api/v1/default/index',
    'ap1/v1/<controller:[\w-]+>' => 'api/v1/<controller>/index',
    'ap1/v1/<controller:[\w-]+>/<action:[\w-]+>' => 'api/v1/<controller>/<action>',

];
