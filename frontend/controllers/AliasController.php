<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class AliasController extends Controller
{   
    public function actionExample()
    {   
        $result = mkdir(Yii::getAlias('@files') . '/test3');
        var_dump($result);
        
//        $result = mkdir('/var/www/project/frontend/web/files/test1');
//        var_dump($result);
    }
}