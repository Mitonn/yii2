<?php

namespace frontend\controllers;

use yii\web\Controller;

class HtmlHelperController extends Controller
{
    public function actionDemo()
    {
        return $this->render('demo');
    }
    
    public function actionEscapeOutput()
    {
        $comments = [
            [
                'id' => 10,
                'author' => 'Student',
                'text' => 'Hello!',
            ],
            [
                'id' => 11,
                'author' => 'Victor',
                'text' => 'Hello! How are you?',
            ],
            [
                'id' => 12,
                'author' => 'Hacker',
                'text' => '<b>Hello!</b><script>alert("I will steal your money");</script>',
            ],
        ];
        
        return $this->render('escape-output', [
            'comments' => $comments,
        ]);
    }
    
}