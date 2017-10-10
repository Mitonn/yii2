<?php

namespace console\controllers;

use yii\helpers\Console;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
use console\models\Logger;

class MailerController extends \yii\console\Controller
{
    /**
     * Sending newsletter
     */
    public function actionSend()
    {
        $newsList = News::getList();
        $subscribers = Subscriber::getList();
        
        $count = Sender::run($subscribers, $newsList);
        
        Console::output("\nEmails send: {$count}");
    }
    
    public function actionSalary()
    {
        $subscribers = Subscriber::getList();
        
        Sender::sendSalary($subscribers);
        
        Logger::recordCurrentTimeToLog();
    }
    
}