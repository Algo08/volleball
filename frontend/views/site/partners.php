<?php
/**
 * @var \common\models\Partners[] $partners
 **/
?>
<div class="partners">
    <div class="container">
        <div class="owl-partners-slider owl-carousel">
            <?php foreach ($partners as $partner):?>
                <div class="item p-5">
                    <a href="<?= $partner->url?>" title="<?= $partner->name?>">
                        <img src="<?= \yii\helpers\Url::to('@web'.$partner->image_location)?>" alt="">
                    </a>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
