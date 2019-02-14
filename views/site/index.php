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

<!--<div class="row">-->
<!--    <div class="col-md-8 col-sm-7 col-xs-12">-->
<!--        <div class="air-slider">-->
<!--            <div class="slide">-->
<!--                <img src="./img/gachoi02.jpg" alt="slide1"/>-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="./img/gachoi03.jpg" alt="slide2"/>-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="./img/gachoi04.jpg" alt="slide3"/>-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="./img/football/f1.jpg" alt="slide4"/>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="col-md-4 col-sm-5 col-xs-12">-->
<!--        <div class="list-group">-->
<!--            <a href="#" class="list-group-item disabled">-->
<!--                Cras justo odio-->
<!--            </a>-->
<!--            <a href="#" class="list-group-item">-->
<!--                <i class="glyphicon glyphicon-triangle-right"></i>-->
<!--                <span>Dapibus ac facilisis in</span>-->
<!--            </a>-->
<!--            <a href="#" class="list-group-item">Morbi leo risus</a>-->
<!--            <a href="#" class="list-group-item">Porta ac consectetur ac</a>-->
<!--            <a href="#" class="list-group-item">Vestibulum at eros</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="card">
    <div class="container-fliud">
        <div class="wrapper row">
            <div class="col-md-6 col-sm-7 col-xs-12">
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
            <div class="details col-md-6 col-sm-5 col-xs-12">
                <h3 class="product-title">Tía chân vàng</h3>
                <div class="rating">
                    <div class="stars">
                        <span class="sizes">Chiến tích:</span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="review-no">41 reviews</span>
                </div>
                <h4 class="price">Giá: <span>$180</span></h4>
                <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                <h5 class="sizes">Trạng cân:
                    <span class="size" data-toggle="tooltip" title="small">3.0</span>
                </h5>
                <h5 class="colors">Màu:
                    <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                    <span class="color green"></span>
                    <span class="color blue"></span>
                </h5>
                <div class="action">
                    <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                    <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                </div>
                <h5 class="sizes">Mô tả:</h5>
                <p class="product-description">Lối đánh lên đè xuống vỉa</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2>Gà <b>Cùng Loại</b></h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="./img/gachoi05.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Apple iPad</h4>
                                    <p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="./img/gachoi06.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Sony Headphone</h4>
                                    <p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="./img/gachoi07.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Macbook Air</h4>
                                    <p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="./img/gachoi08.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Nikon DSLR</h4>
                                    <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="./img/gachoi09.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Sony Play Station</h4>
                                    <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="./img/gachoi10.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Macbook Pro</h4>
                                    <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="./img/gachoi11.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Bose Speaker</h4>
                                    <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="./img/gachoi12.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Samsung Galaxy S8</h4>
                                    <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="./img/gachoi13.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Apple iPhone</h4>
                                    <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="./img/gachoi01.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Canon DSLR</h4>
                                    <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="./img/gachoi02.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Google Pixel</h4>
                                    <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="./img/gachoi03.jpg" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    <h4>Apple Watch</h4>
                                    <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>

