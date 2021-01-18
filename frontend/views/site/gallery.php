<?php
/**
 * @var \common\models\Gallery[] $pictures
**/
use yii\helpers\Url;

?>
<div class="gallery" id="gallery">
    <div class="container">
        <h3 class="title"><?=Yii::t('main','Galleriya')?>
            <img src="<?=Url::to('@web/frontend/web/img/logo.png')?>" alt="" />
        </h3>
        <div class="gallery-main">
            <div class="gallery-bott">
                <?php foreach ($pictures as $picture):?>
                <div class="col-xs-4 col1 gallery-grid">
                    <a href="<?=Url::to('@web'.$picture->image_location)?>" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-bubba">
                            <img class="img-responsive" src="<?=Url::to('@web'.$picture->image_location)?>" alt="">
                            <figcaption>
                                <h4 class="gal"><?=$picture->name?></h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <?php endforeach;?>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>