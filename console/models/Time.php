<?php

namespace console\models;

use Yii;

class Time
{
    public static function getCurrentTime()
    {
        $currentTime = time();
        $formatter = Yii::$app->formatter;
        
        return $formatter->asDate($currentTime, 'yyyy-MM-dd H:mm');
    }
}