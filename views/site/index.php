<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

//$this->registerCssFile('@web/css/xzoom.css');
//$this->registerCssFile('@web/css/foundation.css');
//$this->registerJsFile('@web/js/jquery.js');
//$this->registerJsFile('@web/js/xzoom.min.js');
//$this->registerJsFile('@web/js/setup.js');

//$this->registerCssFile('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
//$this->registerCssFile('@web/css/slider.css');
//$this->registerJsFile('@web/js/prefixfree.min.js');
//$this->registerJsFile('@web/js/slider.setup.js');

$this->registerCssFile('@web/css/air-slider.min.css');
$this->registerJsFile('@web/js/air-slider.min.js');
$this->registerJsFile('@web/js/air-slider.setup.js');

?>


<div class="air-slider">
    <div class="slide">
        <img src="./img/gachoi02.jpg" alt="slide1"/>
    </div>
    <div class="slide">
        <img src="./img/gachoi03.jpg" alt="slide2"/>
    </div>
    <div class="slide">
        <img src="./img/gachoi04.jpg" alt="slide3"/>
    </div>
</div>
