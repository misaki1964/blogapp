<?php

Environment::configure('test', false, [
    'MYSQL_DB_HOST'  => 'localhost',
    'MYSQL_USERNAME' => 'webapp',
    'MYSQL_PASSWORD' => 'passw0rd',
    'MYSQL_DB_NAME'  => 'test_blog',    // (1)
    'MYSQL_TEST_DB_NAME' => 'test_blog',
    'MYSQL_PREFIX'   => '',
], function() {                         // カンマから
    CakePlugin::load('Bdd');
});                                     // } までを追加
