<?php

/* @var $this \yii\web\View */
/* @var $content string */

use cinghie\multilanguage\widgets\MultiLanguageWidget;
use yii\bootstrap\Dropdown;
use yii\bootstrap\Nav;
use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- header -->
<div class="header">
    <div class="header-left">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <h1>
                            <a href="index.html">
                                Volleyball
                                <img class="logo-position" src="<?=Url::to('@web/frontend/web/theme/img/logo4.png')?>" alt="" />
                            </a>
                        </h1>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-9" id="link-effect-9">
                        <?php
                        $menuItems = [
                            ['label' => Yii::t('main','Bosh sahifa'), 'url' => ['/site/index'], 'linkOptions'=>['class'=>'hvr-overline-from-center scroll']],
                            ['label' => Yii::t('main','Yangiliklar'), 'url' => ['/news/news-page'], 'linkOptions'=>['class'=>'hvr-overline-from-center']],
                            ['label' => Yii::t('main','Biz haqimizda'), 'url' => ['#about'], 'linkOptions'=>['class'=>'hvr-overline-from-center scroll']],
                            ['label' => Yii::t('main','Instructors'), 'url' => ['#team'], 'linkOptions'=>['class'=>'hvr-overline-from-center scroll']],
                            ['label' => Yii::t('main','Gallery'), 'url' => ['#gallery'], 'linkOptions'=>['class'=>'hvr-overline-from-center scroll']],
                            ['label' => Yii::t('main','Contact'), 'url' => ['#contact'], 'linkOptions'=>['class'=>'hvr-overline-from-center scroll']],
                        ];
                        $menuItems[] =
                                '<li>'.
                                MultiLanguageWidget::widget([
                                    'addCurrentLang' => false, // add current lang
                                    'calling_controller' => $this->context,
                                    'image_type' => 'classic', // classic or rounded
                                    'link_home' => false, // true or false
                                    'widget_type' => 'selector', // classic or selector
                                    'width' => '20'
                                ]);
                                '.</li>';
                        echo Nav::widget([
                            'options' => ['class' => 'nav navbar-nav'],
                            'items' => $menuItems,
                        ]);?>
                    </nav>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //header -->



<div>
    <!-- banner-text -->
    <div class="banner-text">
        <div class="container">
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>

                            <div class="banner-w3lstext">
                                <h3>a wide selection of tennis accessories</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit.</p>
                                <div class="video-pop-wthree">
                                    <a href="#small-dialog1" class="view play-icon popup-with-zoom-anim ">
                                        <i class="fa fa-play-circle" aria-hidden="true"></i>Watch Our Video</a>
                                    <div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
                                        <iframe src="https://player.vimeo.com/video/137808596?title=0&byline=0&portrait=0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>

                            <div class="banner-w3lstext">
                                <h3>everything you need for tennis playing</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit.</p>
                                <div class="video-pop-wthree">
                                    <a href="#small-dialog2" class="view play-icon popup-with-zoom-anim ">
                                        <i class="fa fa-play-circle" aria-hidden="true"></i>Watch Our Video</a>
                                    <div id="small-dialog2" class="mfp-hide w3ls_small_dialog wthree_pop">
                                        <iframe src="https://player.vimeo.com/video/137808596?title=0&byline=0&portrait=0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>

                            <div class="banner-w3lstext">
                                <h3>we build leaders on the court</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit.</p>
                                <div class="video-pop-wthree">
                                    <a href="#small-dialog3" class="view play-icon popup-with-zoom-anim ">
                                        <i class="fa fa-play-circle" aria-hidden="true"></i>Watch Our Video</a>
                                    <div id="small-dialog3" class="mfp-hide w3ls_small_dialog wthree_pop">
                                        <iframe src="https://player.vimeo.com/video/137808596?title=0&byline=0&portrait=0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner-text -->
    <?= Alert::widget() ?>
    <?= $content ?>
</div>

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-xs-4 agileinfo_footer_grid">
            <h4>About Us</h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                <span>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
            </p>
        </div>
        <div class="col-xs-4 agileinfo_footer_grid">
            <h4>Address</h4>
            <ul>
                <li>
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span> 738 Diamond Road, New York City</li>
                <li>
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    <a href="mailto:info@example.com">info@example.com</a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (0123) 0111 111 222</li>
                <li>
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Mon-Sat 09:00 AM - 05:00PM </li>
            </ul>
        </div>
        <div class="col-xs-4 agileinfo_footer_grid">
            <h4>Instagram Posts</h4>
            <div class="agileinfo_footer_grid1">
                <a href="#">
                    <img src="<?=Url::to('@web/frontend/web/theme/img/f1.jpg')?>" alt=" " class="img-responsive">
                </a>
            </div>
            <div class="agileinfo_footer_grid1">
                <a href="#">
                    <img src="<?=Url::to('@web/frontend/web/theme/img/f2.jpg')?>" alt=" " class="img-responsive">
                </a>
            </div>
            <div class="agileinfo_footer_grid1">
                <a href="#">
                    <img src="<?=Url::to('@web/frontend/web/theme/img/f3.jpg')?>" alt=" " class="img-responsive">
                </a>
            </div>
            <div class="agileinfo_footer_grid1">
                <a href="#">
                    <img src="<?=Url::to('@web/frontend/web/theme/img/f4.jpg')?>" alt=" " class="img-responsive">
                </a>
            </div>
            <div class="agileinfo_footer_grid1">
                <a href="#">
                    <img src="<?=Url::to('@web/frontend/web/theme/img/f5.jpg')?>" alt=" " class="img-responsive">
                </a>
            </div>
            <div class="agileinfo_footer_grid1">
                <a href="#">
                    <img src="<?=Url::to('@web/frontend/web/theme/img/f6.jpg')?>" alt=" " class="img-responsive">
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
        <div class=" newsletter">
            <h4>Subscribe Here</h4>
            <form action="#" method="post" class="newsletter">
                <input class="email" type="email" name="email" placeholder="Your email...">
                <input type="submit" class="submit" value="subscribe">
            </form>
            <div class="clearfix"> </div>
        </div>
        <div class="w3agile_footer_copy">
            <p>© 2018 Tennis Hub. All rights reserved | Design by
                <a href="http://w3layouts.com/">W3layouts.</a>
            </p>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //footer -->
<?php $this->endBody() ?>

<?php
$script = <<< JS
// You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
JS;
$this->registerJs( $script );
?>

</body>
</html>
<?php $this->endPage() ?>
