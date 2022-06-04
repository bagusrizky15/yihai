<?php

$vendorDir = dirname(__DIR__);

return array (
  'yiisoft/yii2-jui' => 
  array (
    'name' => 'yiisoft/yii2-jui',
    'version' => '9999999-dev',
    'alias' => 
    array (
      '@yii/jui' => $vendorDir . '/yiisoft/yii2-jui/src',
    ),
  ),
  '2amigos/yii2-dosamigos-asset-bundle' => 
  array (
    'name' => '2amigos/yii2-dosamigos-asset-bundle',
    'version' => '0.1.0.0',
    'alias' => 
    array (
      '@dosamigos/assets' => $vendorDir . '/2amigos/yii2-dosamigos-asset-bundle',
    ),
  ),
  '2amigos/yii2-grid-view-library' => 
  array (
    'name' => '2amigos/yii2-grid-view-library',
    'version' => '9999999-dev',
    'alias' => 
    array (
      '@dosamigos/grid' => $vendorDir . '/2amigos/yii2-grid-view-library/src',
    ),
  ),
);
