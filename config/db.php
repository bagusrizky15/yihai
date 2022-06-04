<?php

$db = [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=u1566180_yihai;port:3306',
    'username' => 'u1566180_admin',
    'password' => 'r;78_igPFj{9',
    'charset' => 'utf8',

];
if (YII_ENV_PROD) {
    $db['enableSchemaCache'] = true;
    $db['schemaCacheDuration'] = 0;
    $db['schemaCache'] = 'cache-db';
}
return $db;