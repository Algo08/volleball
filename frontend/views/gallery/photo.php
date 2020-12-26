<?php
/**
 * @var \common\models\Gallery $gallery
**/

use yii\helpers\Url;

?>
<div class="col-xs-4 col1 gallery-grid">
    <a href="<?=Url::to('@web'.$gallery->image_location)?>" class="b-link-stripe b-animate-go  thickbox">
        <figure class="effect-bubba">
            <img class="img-responsive" src="<?=Url::to('@web'.$gallery->image_location)?>" alt="">
            <figcaption>
                <h4 class="gal"><?=$gallery->name?></h4>
            </figcaption>
        </figure>
    </a>
</div>

<?php
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

      
JS;
$this->registerJs( $script );
?>