<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

$this->registerCssFile('@web/css/xzoom.css');
$this->registerCssFile('@web/css/foundation.css');
$this->registerJsFile('@web/js/jquery.js');
$this->registerJsFile('@web/js/xzoom.min.js');
$this->registerJsFile('@web/js/setup.js');
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="large-12 column text-center"><a href="https://payalord.github.io/xZoom"><img src="images/logo.png" alt=""></a></div>
        <div class="large-12 column"><p><h2>Demo</h2></p></div>
        <div class="large-12 column">
            <ul>
                <li><a href="#default">Default options</a></li>
                <li><a href="#output">Output window</a></li>
                <li><a href="#lens">Lens options</a></li>
                <li><a href="#fancy">With Fancy Box</a></li>
                <li><a href="#magnific">With Magnific Pop-Up</a></li>
            </ul>
        </div>
    </div>

    <!-- default start -->
    <section id="default" class="padding-top0">
        <div class="row">
            <div class="large-12 column"><h3>Default options</h3></div>
            <div class="large-5 column">
                <div class="xzoom-container">
                    <img class="xzoom" id="xzoom-default" src="./img/gachoi02.jpg" xoriginal="./img/gachoi02.jpg" />
                    <div class="xzoom-thumbs">
                        <a href="./img/gachoi02.jpg"><img class="xzoom-gallery" width="80" src="./img/gachoi02.jpg"  xpreview="./img/gachoi02.jpg" title="The description goes here"></a>
                        <a href="./img/gachoi03.jpg"><img class="xzoom-gallery" width="80" src="./img/gachoi03.jpg" title="The description goes here"></a>
                        <a href="./img/gachoi04.jpg"><img class="xzoom-gallery" width="80" src="./img/gachoi04.jpg" title="The description goes here"></a>
                        <a href="./img/gachoi05.jpg"><img class="xzoom-gallery" width="80" src="./img/gachoi05.jpg" title="The description goes here"></a>
                    </div>
                </div>
            </div>
            <div class="large-7 column"></div>
        </div>
    </section>
</div>
