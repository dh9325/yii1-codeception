<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

// change the following paths if necessary
$yii = dirname(__FILE__) . '/vendor/yiisoft/yii/framework/yii.php';
$autoloader = dirname(__FILE__) . '/vendor/autoload.php';
$config = dirname(__FILE__) . '/protected/config/test.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once($yii);
require_once($autoloader);
return [
    'class' => 'CWebApplication',
    'config' => $config
];
