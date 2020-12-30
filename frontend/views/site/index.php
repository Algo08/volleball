<?php

/**
 * @var $this yii\web\View *
 * @var \common\models\News[] $news
 * @var \common\models\Gallery[] $pictures
 * @var \common\models\Count[] $count
 * @var \common\models\Trainer[] $trainer
 * @var \common\models\Contact $contact
 * @var \common\models\Slide[] $slides
*/

use yii\helpers\Url;

if (class_exists('yii\debug\Module')) {
    $this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);
}

$this->title = 'Volleyball';
?>
<body>

<!-- banner-text -->
<div class="banner-text" style="background: url(<?=Url::to('@web/theme/img/b1.jpg')?>) no-repeat bottom;">
    <div class="overlay"></div>
    <div class="container">
        <div class="slider">
            <div class="callbacks_container">
                <div class="owl-main-slider owl-carousel">
                    <?php foreach ($slides as $slide):?>
                        <div class="item p-5 banner-w3lstext">
                            <h3><?=$slide->text_head?></h3>
                            <p><?=$slide->text_part?></p>
                            <div class="video-pop-wthree">
                                <a href="#small-dialog1" class="view play-icon popup-with-zoom-anim ">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>Videoni ko'rish</a>
                                <div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
                                    <iframe src="<?=$slide->video?>"></iframe>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- news -->
<div class="news-section" id="news">
    <div class="container">
        <h3 class="title">Our Blog
            <img src="<?=Url::to('@web/frontend/web/theme/img/logo2.png')?>" alt="" />
        </h3>
        <div class="news-grids-w3l">
            <?php foreach ($news as $new):?>
                <?= $this->renderAjax('/news/news_card',['news'=>$new])?>
            <?php endforeach;?>
        </div>
        <div class="col-sm-12 text-center">
            <a class="all" href="<?=Url::to(['/news/news-page#news-blog'])?>">Barchasi</a>
        </div>
    </div>
</div>
<!-- //blog -->

<!-- stats -->
<?= $this->render('stats',['count'=>$count])?>
<!-- //stats -->

<!-- services -->
<?= $this->render('services')?>

<!-- //services -->

<!-- team -->
<?= $this->render('team',['trainer'=>$trainer])?>
<!-- //team -->


<!-- gallery -->
<div class="gallery" id="gallery">
    <div class="container">
        <h3 class="title">Our Gallery
            <img src="<?=Url::to('@web/frontend/web/theme/img/logo2.png')?>" alt="" />
        </h3>
        <div class="gallery-main">
            <div class="gallery-bott">
                <?php foreach ($pictures as $g):?>
                    <?= $this->renderAjax('/gallery/photo',['gallery'=>$g])?>
                <?php endforeach;?>
                <div class="clearfix"> </div>
            </div>
            <div class="col-sm-12 text-center">
                <a class="all" href="<?=Url::to(['/gallery#gallery-blog'])?>">Barchasi</a>
            </div>
        </div>
    </div>
</div>
<!-- //gallery -->

<!-- contact -->
<?= $this->render('contact',['contact'=>$contact])?>
<!-- //contact -->


<?php
$urlTable = \yii\helpers\Url::to('view');

$script = <<< JS
$(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
$(function () {
        $('.gallery-grid a').Chocolat();
    });


    
$(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
JS;
$this->registerJs( $script );
?>
    
</body>