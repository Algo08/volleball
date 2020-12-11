<?php
/**
 * @var \common\models\News $news
 * @var \common\models\Comments[] $comments
 */

use yii\bootstrap4\Html;
use yii\helpers\Url;
?>

<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(<?=Url::to('@web/frontend/web/theme/img/page-background.jpg')?>)"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <ul class="hero-area-tree">
                    <li><a href="<?= Yii::$app->homeUrl?>"><?=Yii::t('main','Bosh sahifa')?></a></li>
                    <li><?=$news->text_head?></li>
                </ul>
                <h1 class="white-text"><?=$news->text_head?></h1>
                <ul class="blog-post-meta">
<!--                    <li class="blog-meta-author">By : <a href="#">John Doe</a></li>-->
                    <li><i class="fa fa-calendar-o mr-2"></i><?=date('M d, yy H:i',strtotime($news->create_date))?></li>
<!--                    <li class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></li>-->
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-0 section container px-2">
    <div class="blog-post">
        <?=$news->text_body?>
    </div>
    <div class="blog-share d-flex justify-content-end">
        <h4 class="d-flex align-items-center"><?=Yii::t('main', 'Baham ko`ring:')?></h4>
        <?= \ymaker\social\share\widgets\SocialShare::widget([
            'containerOptions'=> ['tag'=>'ul','class'=>'list-group list-group-horizontal'],
            'configurator'  => 'socialShare',
            'url'           => \yii\helpers\Url::to(['news-view','id' => $news->id], true),
            'title'         => Yii::t('main','Yangiliklar'),
            'description'   => $news->text_head,
            'imageUrl'      => \yii\helpers\Url::to(Yii::getAlias('@web').$news->image_location, true),
        ]); ?>
    </div>
    <!-- blog comments -->
    <div class="blog-comments">
        <h3><?=$news->cOMMENTS.' '.Yii::t('main','Izohlar')?></h3>
        <?php if (Yii::$app->user->identity):?>
            <div class="media mb-2">
                <div class="media-left">
                    <img src="<?= Url::to('@web'.Yii::$app->user->identity->image_location)?>" alt="">
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><?= Yii::$app->user->identity->username?></h4>
                    <?= Html::input('search','','',
                        ['class' => 'form-control shadow-none mb-3 mt-2 rounded-0 comment-input',
                            'placeholder' => 'text', 'data-value' => $news->id, 'data-reply' => ''])?>
                </div>
            </div>

            <!-- Default comment -->
            <div class="default-comment d-none">
                <div class="media-left">
                    <img src="<?= Url::to('@web'.Yii::$app->user->identity->image_location)?>" alt="">
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><?= Yii::$app->user->identity->username?></h4>
                    <p class="text"></p>
                    <div class="date-reply"><span class="date"></span></div>
                </div>
            </div>
            <!-- /Default comment -->
        <?php endif;?>
        <?= $this->renderAjax('comments',['comments'=>$comments])?>
    </div>
</div>

