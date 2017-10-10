<?php

namespace frontend\models;

use Yii;

class Count
{
    public static function getCount()
    {
        $sql = 'SELECT COUNT(*) FROM news';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        
        return $result;
    }
    
}