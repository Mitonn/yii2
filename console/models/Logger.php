<?php

namespace console\models;

use Yii;
use console\models\Time;

class Logger
{
    public static function recordCurrentTimeToLog()
    {
        $filePath = Yii::$app->params['logFilePath'];
        $f = fopen($filePath, 'a');
        if (filesize($filePath) == 0) {
            $timeStr = Time::getCurrentTime();
        } else {
            $timeStr = "\n" . Time::getCurrentTime();
        }
        fwrite($f, $timeStr);
        fclose($f);
    }
}