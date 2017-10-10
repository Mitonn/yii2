<?php

namespace common\components;

use Yii;

class StringHelper
{
    private $limit;
    private $wordsLimit;
    
    public function __construct() {
        $this->limit = Yii::$app->params['shortTextLimit'];
        $this->wordsLimit = Yii::$app->params['wordsLimit'];
    }

    public function getShort($string, $limit = null)
    {
        if ($limit === null) {
            $limit = $this->limit;
        }
        
        return substr($string, 0, $limit);
    }
    
    public function getTruncatedStringSaveLastWord($string, $limit = null)
    {
        if ($limit === null) {
            $limit = $this->limit;
        }
        
        $wordsArr = explode(' ', $string);
        $resArr = [];
        
        foreach ($wordsArr as $word) {
            if (strlen(implode(' ', $resArr)) < $limit) {
                array_push($resArr, $word);
            } else {
                break;
            }
        }
        $resStr = implode(' ', $resArr);
        $resStr .= '...';
        
        return $resStr;
        
    }
    
    public function getTruncatedStringByWords($string, $wordsLimit = null)
    {
        if ($wordsLimit === null) {
            $wordsLimit = $this->wordsLimit;
        }
        
        $wordsArr = explode(' ', $string);
        $resArr = [];
        
        foreach ($wordsArr as $word) {
            if (count($resArr) < $wordsLimit) {
                array_push($resArr, $word);
            }
        }
        
        $resStr = implode(' ', $resArr);
        
        return $resStr;
    }
}