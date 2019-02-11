<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Images';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/main.css');
$this->registerCssFile('@web/css/image.css');
$this->registerCssFile('@web/css/template1.css');
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
</div>

<div class="s007">
    <form>
        <div class="inner-form">
            <div class="advance-search">
                <span class="desc">Tìm kiếm gà chọi theo ý muốn...</span>
                <div class="row">
                    <div class="input-field">
                        <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul" class="text-uppercase">
                                <option placeholder="" value="">Khu vực</option>
                                <option>ACCESSORIES</option>
                                <option>SUBJECT B</option>
                                <option>SUBJECT C</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-field">
                        <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul">
                                <option placeholder="" value="">Trạng thái</option>
                                <option>Đã bán</option>
                                <option>Có bán</option>
                                <option>Không bán</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-field">
                        <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul">
                                <option placeholder="" value="">Loại</option>
                                <option>Bình thường</option>
                                <option>Lục đinh</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul" class="text-uppercase">
                                <option placeholder="" value="">Màu lông</option>
                                <option>ACCESSORIES</option>
                                <option>SUBJECT B</option>
                                <option>SUBJECT C</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-field">
                        <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul">
                                <option placeholder="" value="">Trạng đánh</option>
                                <option>GREEN</option>
                                <option>SUBJECT B</option>
                                <option>SUBJECT C</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-field">
                        <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul">
                                <option placeholder="" value="">Tuổi</option>
                                <option>SIZE</option>
                                <option>SUBJECT B</option>
                                <option>SUBJECT C</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row second">
                    <div class="input-field">
                        <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul">
                                <option placeholder="" value="">Lối đánh</option>
                                <option>SALE</option>
                                <option>SUBJECT B</option>
                                <option>SUBJECT C</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-field">
                        <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul">
                                <option placeholder="" value="">Cân nặng</option>
                                <option>THIS WEEK</option>
                                <option>SUBJECT B</option>
                                <option>SUBJECT C</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-field">
                        <div class="input-select">
                            <select data-trigger="" name="choices-single-defaul">
                                <option placeholder="" value="">Chiến tích</option>
                                <option>TYPE</option>
                                <option>SUBJECT B</option>
                                <option>SUBJECT C</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row third">
                    <div class="input-field">
                        <button class="btn-search center-block">Tìm kiếm</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi01.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">3.0</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">3.000.000 <span class="currency">đ<span></span>
                </p>

                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sold">Đã bán</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi02.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                        $random = rand(1, 10);

                        for ($i = 1; $i <= 10; $i++) {
                            if ($i <= $random) {
                                echo '<span class="fa fa-star checked"></span>&nbsp;';
                            } else {
                                echo '<span class="fa fa-star"></span>&nbsp;';
                            }
                        }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi03.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi04.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi01.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">3.0</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">3.000.000 <span class="currency">đ<span></span>
                </p>

                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sold">Đã bán</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi02.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi03.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi04.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi05.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi06.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi07.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi08.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi09.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi10.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi11.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 layout-custom">
        <div class="main-product">
            <div class="chanel-image center-block">
                <img src="./img/gachoi12.jpg" alt="..." class="img-responsive center-block">
            </div>

            <hr>

            <div class="chanel-short-info">
                <p>
                    <span class="bold-label">Trạng cân:</span>
                    <span class="bold-value">2.7</span>
                </p>
                <p>
                    <span class="bold-label">Thành tích:</span>

                    <?php
                    $random = rand(1, 10);

                    for ($i = 1; $i <= 10; $i++) {
                        if ($i <= $random) {
                            echo '<span class="fa fa-star checked"></span>&nbsp;';
                        } else {
                            echo '<span class="fa fa-star"></span>&nbsp;';
                        }
                    }
                    ?>
                </p>
                <p>
                    <span class="bold-label">Giá:</span>
                    <span class="bold-value">1.500.000 <span class="currency">đ</span></span>
                </p>
                <p>
                    <span class="bold-label">Trạng thái:</span>
                    <span class="bold-value status-sell">Chưa bán</span>
                </p>
            </div>
        </div>
    </div>
</div>

<script src="./js/extention/choices.js"></script>
<script>
        const customSelects = document.querySelectorAll("select");
        const deleteBtn = document.getElementById('delete');
        const choices = new Choices(
            'select',
            {
                searchEnabled: false,
                removeItemButton: true,
                itemSelectText: '',
            }
        );

        for (let i = 0; i < customSelects.length; i++) {
            customSelects[i].addEventListener(
                'addItem',
                function(event) {
                    if (event.detail.value) {
                        let parent = this.parentNode.parentNode;

                        parent.classList.add('valid');
                        parent.classList.remove('invalid');
                    } else {
                        let parent = this.parentNode.parentNode;
                        parent.classList.add('invalid');
                        parent.classList.remove('valid');
                    }
                },
                false
            );
        }

        deleteBtn.addEventListener("click", function(e) {
            e.preventDefault();

            const deleteAll = document.querySelectorAll('.choices__button');

            for (let i = 0; i < deleteAll.length; i++) {
                deleteAll[i].click();
            }
        });
</script>
