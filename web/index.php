<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
// Including the Yii framework itself (1)
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

// Getting the configuration (2)
$config = require(__DIR__ . '/../config/web.php');

// Making and launching the application immediately (3)
ini_set('display_errors', true);
(new yii\web\Application($config))->run();
