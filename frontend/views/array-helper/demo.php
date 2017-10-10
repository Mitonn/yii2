<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

echo '<pre>';
print_r($employees);

$emails = ArrayHelper::getColumn($employees, 'email');

echo implode(' ', $emails);
echo '<br>';


$listData = ArrayHelper::map($employees, 'id', 'email');

echo Html::dropDownList('emails', [], $listData);
