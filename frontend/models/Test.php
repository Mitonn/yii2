<?php

namespace frontend\models;

use Yii;
use frontend\components\StringHelper;

/**
 * 
 */
class Test
{
    /**
     * @param integer $max
     * @return array
     */
    public static function getNewsList($max)
    {
        $max = intval($max);
        $sql = 'SELECT * FROM news LIMIT ' . $max;
        
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        
        //$helper = new StringHelper();
        $helper = Yii::$app->stringHelper;
        
        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                //$item['content'] = $helper->getShort($item['content']);
                //$item['content'] = $helper->getTruncatedStringSaveLastWord($item['content']);
                $item['content'] = $helper->getTruncatedStringByWords($item['content']);
            }
        }
        
        return $result;
        
    }
    
    /**
     * @param integer $id
     * @return mixed
     */
    public static function getItem($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM news WHERE id = $id";
        
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
}