<?php

namespace frontend\widgets\emailsList;

use Yii;
use yii\base\Widget;

class EmailsList extends Widget
{
    public function run()
    {
        $sql = 'SELECT email FROM employee';
        $list = Yii::$app->db->createCommand($sql)->queryAll();
        
        return $this->render('block', [
            'list' => $list,
        ]);
    }
}