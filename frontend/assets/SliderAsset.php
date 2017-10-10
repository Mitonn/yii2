<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class SliderAsset extends AssetBundle
{
    public $css = [
        'css/slider/nivo-slider.css',
    ];
    
    public $js = [
        'js/slider/jquery.nivo.slider.pack.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}