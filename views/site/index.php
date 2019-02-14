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
$this->registerCssFile('@web/css/detail.css');
$this->registerJsFile('@web/js/air-slider.min.js');
$this->registerJsFile('@web/js/air-slider.setup.js');

?>

<div class="row">
    <div class="col-md-8 col-sm-7 col-xs-12">
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
            <div class="slide">
                <img src="./img/football/f1.jpg" alt="slide4"/>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-5 col-xs-12">
        <div class="list-group">
            <a href="#" class="list-group-item disabled">
                Cras justo odio
            </a>
            <a href="#" class="list-group-item">
                <i class="glyphicon glyphicon-triangle-right"></i>
                <span>Dapibus ac facilisis in</span>
            </a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
        </div>
    </div>
</div>
