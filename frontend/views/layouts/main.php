<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* @var \common\models\About[] $about */
/* @var \common\models\Contact $contact */

use cinghie\multilanguage\widgets\MultiLanguageWidget;
use yii\bootstrap\Nav;
use yii\bootstrap\Dropdown;
use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

$contact = \common\models\Contact::find()->one();
$about = \common\models\About::find()->all();
$partners = \common\models\Partners::find()->all();

$itemAbout = [];
foreach ($about as $key=>$item){
    $itemAbout[$key] = ['label' => $item->name, 'url' => Url::to(['about/view','id'=>$item->id]), 'linkOptions'=>['class'=>'hvr-overline-from-center scroll about text-center']];
}
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
        <div class="container" style="padding: 0">
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
                            <a href="<?=Url::home()?>">
                                <img class="logo-position" src="<?=Url::to('@web/frontend/web/img/logo.png')?>" alt="" />
                            </a>
                        </h1>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-9 navbar-expand-lg" id="link-effect-9">
                        <?php

                        $menuItems = [
                            ['label' => Yii::t('main','Bosh sahifa'), 'url' => ['/'], 'linkOptions'=>['class'=>'hvr-overline-from-center scroll']],
                            ['label' => Yii::t('main','Yangiliklar'), 'url' => ['/#news'], 'linkOptions'=>['class'=>'hvr-overline-from-center scroll']],
//                            ['label' => Yii::t('main','Biz haqimizda'), 'url' => ['/#about'], 'linkOptions'=>['class'=>'hvr-overline-from-center scroll']],
                            ['label' => Yii::t('main','Trenerlar'), 'url' => ['/#team'], 'linkOptions'=>['class'=>'hvr-overline-from-center scroll']],
                            ['label' => Yii::t('main','Rasmlar'), 'url' => ['/#gallery'], 'linkOptions'=>['class'=>'hvr-overline-from-center scroll']],
                        ];
                        $menuItems[] =
                            '<li>
                                <a href="#" data-toggle="dropdown" class="hvr-overline-from-center scroll">'.Yii::t('main','Biz haqimizda').'</a>
                                '.Dropdown::widget([
                                'items' => $itemAbout,
                            ])
                            .' 
                            </li><li>'.
                                MultiLanguageWidget::widget([
                                    'addCurrentLang' => false, // add current lang
                                    'calling_controller' => $this->context,
                                    'image_type' => 'classic', // classic or rounded
                                    'link_home' => false, // true or false
                                    'widget_type' => 'selector', // classic or selector
                                    'width' => '20'
                                ]).'</li>';

                        echo Nav::widget([
                            'options' => ['class' => 'nav navbar-nav col-12'],
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

    <!-- //banner-text -->
    <?= Alert::widget() ?>
    <?= $content ?>
</div>

<?= $this->render('../site/partners',['partners'=>$partners])?>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-xs-4 agileinfo_footer_grid">
            <h4><?=Yii::t('main','Biz haqimizda')?></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                <span>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
            </p>
        </div>
        <div class="col-xs-4 agileinfo_footer_grid">
            <h4>Address</h4>
            <ul>
                <li>
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    <a href="<?=$contact->location_url ?? '#'?>" target="_blank"><?=$contact->location?></a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    <a href="mailto:<?=$contact->mail?>"><?=$contact->mail?></a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <?=$contact->phone?></li>
                <li>
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Mon-Sat 09:00 AM - 05:00PM </li>
            </ul>
        </div>
        <div class="col-xs-4 agileinfo_footer_grid">
            <h4><?=Yii::t('main','Ijtimoiy tarmoqlar')?></h4>
            <a class="col-xs-2" href="<?=$contact->facebook?>">
                <i class="fa fa-facebook" style="font-size: 25px;"></i>
            </a>
            <a class="col-xs-2" href="<?=$contact->youtube?>">
                <i class="fa fa-youtube" style="font-size: 25px;"></i>
            </a>
            <a class="col-xs-2" href="<?=$contact->telegram?>">
                <i class="fa fa-paper-plane" style="font-size: 25px;"></i>
            </a>
            <a class="col-xs-2" href="<?=$contact->instagram?>">
                <i class="fa fa-instagram" style="font-size: 25px;"></i>
            </a>
            <a class="col-xs-2" href="<?=$contact->twitter?>">
                <i class="fa fa-twitter" style="font-size: 25px;"></i>
            </a>
        </div>
        <div class="clearfix"> </div>

        <div class="w3agile_footer_copy">
            <p>© 2020 Volleyball. All rights reserved
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
