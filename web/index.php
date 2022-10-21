<?php

// comment out the following two lines when deployed to production
//Режим дебага отключаем, т.к. при импорте, память копится от AR

//if (isset($_SERVER['SERVER_ADDR']) && $_SERVER['SERVER_ADDR'] == '127.0.0.1' && strpos($_SERVER['REQUEST_URI'], '1c_exchange.php') === false) {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');
//}

//Yii::getLogger()->autoFlush = 1;
// when sending a message to log routes, also notify them to dump the message
// into the corresponding persistent storage (e.g. DB, email)
//Yii::getLogger()->autoDump = true;

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();
