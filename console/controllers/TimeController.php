<?php

namespace console\controllers;

use console\models\Logger;

class TimeController extends \yii\console\Controller
{
    /**
     * records current datetime to log.txt
     */
    public function actionRecord()
    {
        var_dump(Logger::recordCurrentTimeToLog());
    }
}