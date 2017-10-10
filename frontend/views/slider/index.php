<!--<link rel="stylesheet" href="../../web/css/slider/nivo-slider.css" type="text/css" />  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>  
<script src="../../web/js/slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>-->
<?php

use frontend\assets\SliderAsset;

SliderAsset::register($this);
$this->registerJsFile('@web/js/slider/scripts.js', ['depends' => [
    SliderAsset::className(),
]]);

?>

<div id="slider" class="nivoSlider">     
    <img src="/files/photos/watch.jpg" alt="" />    
    <img src="/files/photos/surf.jpg" alt="" />     
    <img src="/files/photos/burger.jpg" alt="" />     
    <img src="/files/photos/subway.jpg" alt="" /> 
</div>