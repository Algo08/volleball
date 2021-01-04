<?php
/**
 * @var \common\models\Video $video
**/

use yii\helpers\Url;

?>
<div class="col-xs-4  col1">
    <a class="btn video-modal"  data-key="<?=str_replace('watch?v=', 'embed/', $video->video_link)?>">
        <figure class="effect-bubba">
            <img class="img-responsive" src="<?=Url::to('@web'.$video->image_location)?>" alt="">
            <figcaption>
                <h4 class="gal"><?=$video->text?></h4>
            </figcaption>
        </figure>
    </a>
</div>

