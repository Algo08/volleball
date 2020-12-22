<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a class="hvr-overline-from-center scroll" href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="#about" class="hvr-overline-from-center scroll">About Us</a>
                            </li>
                            <li>
                                <a href="#services" class="hvr-overline-from-center scroll">Services</a>
                            </li>
                            <li>
                                <a href="#team" class="hvr-overline-from-center scroll">Instructors</a>
                            </li>
                            <li>
                                <a href="#gallery" class="hvr-overline-from-center scroll">Gallery</a>
                            </li>
                            <li>
                                <a href="#contact" class="hvr-overline-from-center scroll">Contact Us</a>
                            </li>
                        </ul>
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
</body>
</html>
<?php $this->endPage() ?>
