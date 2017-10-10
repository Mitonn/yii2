<?php

namespace console\models;

use Yii;
use console\models\Time;

class Sender
{
    public static function run($subscribers, $newsList)
    {
        foreach ($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('/mailer/newslist', [
                'newsList' => $newsList,
            ])
                    ->setFrom('dmitry.monya@gmail.com')
                    ->setTo($subscriber['email'])
                    ->setSubject('Тема сообщения')
                    ->send();

            var_dump($result);
        }
    }
    
    public static function sendSalary($subscribers)
    {
        foreach ($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('/mailer/salary', [
                'subscriber' => $subscriber,
                'time' => Time::getCurrentTime(),
            ])
                    ->setFrom('dmitry.monya@gmail.com')
                    ->setTo($subscriber['email'])
                    ->setSubject('Тема сообщения')
                    ->send();

            var_dump($result);
        }
    }
}