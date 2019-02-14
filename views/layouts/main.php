<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Image', 'url' => ['/site/image']],
            ['label' => 'Upload', 'url' => ['/site/upload']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer id="footer-Section">
    <div class="footer-top-layout">
        <div class="container">
            <div class="row">
                <div class="OurBlog">
                    <h4>Our Blog</h4>
                    <p>BCM wins mandate for Avendus Wealth Management portal revamp</p>
                    <div class="post-blog-date">20th Oct 2016</div>
                </div>
                <div class=" col-lg-8 col-lg-offset-2">
                    <div class="col-sm-4">
                        <div class="footer-col-item">
                            <h4>Go Travel Cloud</h4>
                            <address>
                                501,507 your company address<br>
                                400015 Maharashtra, UK
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-col-item">
                            <h4>Reach Us</h4>
                            <div class="item-contact"> <a href="tel:630-885-9200"><span class="link-id">P</span>:<span>630-885-9200</span></a> <a href="tel:630-839.2006"><span class="link-id">F</span>:<span>630-839.2006</span></a> <a href="mailto:info@brandcatmedia.com"><span class="link-id">E</span>:<span>info@brandcatmedia.com</span></a> </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-col-item">
                            <h4>Sign up for Newsletter</h4>
                            <form class="signUpNewsletter" action="" method="get">
                                <input name="" class="gt-email form-control" placeholder="You@youremail.com" type="text">
                                <input name="" class="btn-go" value="Go" type="button">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-layout">
        <div class="socialMedia-footer"> <a href="#"><img src="img/socialMedia_01.png"></a> <a href="#"><img src="img/socialMedia_02.png"></a> <a href="#"><img src="img/socialMedia_03.png"></a> <a href="#"><img src="img/socialMedia_04.png"></a> <a href="#"><img src="img/socialMedia_05.png"></a> </div>
        <div class="copyright-tag">Copyright © 2017 company name. All Rights Reserved.</div>
    </div>
</footer>

<!--<footer class="footer">-->
<!--    <div class="container">-->
<!--        <p class="pull-left">&copy; My Company --><?//= date('Y') ?><!--</p>-->
<!---->
<!--        <p class="pull-right">--><?//= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
