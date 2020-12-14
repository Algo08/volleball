<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

if (class_exists('yii\debug\Module')) {
    $this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);
}

$this->title = 'My Yii Application';
?>
<body>

<!-- about -->
<?= $this->renderAjax('about')?>
<!-- //about -->

<!-- stats -->
<?= $this->renderAjax('stats')?>
<!-- //stats -->

<!-- services -->
<?= $this->renderAjax('services')?>

<!-- //services -->

<!-- team -->
<?= $this->renderAjax('team')?>
<!-- //team -->

<!-- news -->
<div class="news-section" >
    <div class="container">
        <h3 class="title">Our Blog
            <img src="<?=Url::to('@web/frontend/web/theme/img/logo2.png')?>" alt="" />
        </h3>
        <div class="news-grids-w3l">
            <?php foreach ($news as $new):?>
                <?= $this->renderAjax('/news/news_card',['news'=>$new])?>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- //blog -->

<!-- gallery -->
<?= $this->renderAjax('gallery')?>
<!-- //gallery -->

<!-- contact -->
<?= $this->renderAjax('contact')?>
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