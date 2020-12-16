<?php

/**
 * @var $this yii\web\View *
 * @var \common\models\News[] $news
 * @var \common\models\Gallery[] $pictures
 * @var \common\models\Count[] $count
 */

use yii\helpers\Url;

if (class_exists('yii\debug\Module')) {
    $this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);
}

$this->title = 'Volleyball';
?>
<body>

<!-- about -->
<?= $this->render('about')?>
<!-- //about -->

<!-- stats -->
<?= $this->render('stats',['count'=>$count])?>
<!-- //stats -->

<!-- services -->
<?= $this->render('services')?>

<!-- //services -->

<!-- team -->
<?= $this->render('team')?>
<!-- //team -->

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
<?= $this->render('contact')?>
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

jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
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