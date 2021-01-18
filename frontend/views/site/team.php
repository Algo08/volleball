<?php
/**
 * @var \common\models\Trainer[] $trainer
 **/
use yii\helpers\Url;

?>
<div class="team  wthree" id="team">
    <div class="overlay"></div>
    <div class="container" style="position: relative">
        <h3 class="title"><?=Yii::t('main','Murabbiylar')?>
            <img src="<?=Url::to('@web/frontend/web/img/logo.png')?>" alt="" />
        </h3>
        <div class="team-bottom">
            <?php foreach ($trainer as $coach):?>
            <div class="col-md-3 col-xs-3 team-grid">
                <img src="<?=Url::to('@web'.$coach->image_location)?>" class="img-responsive" alt="">
                <div class="caption">
                    <div class="team-text">
                        <h4><?=$coach->text?></h4>
                    </div>
                    <ul>
                        <li>
                            <a href="<?=$coach->facebook ?? '#'?>" target="_blank">
                                <i class="fa fa-facebook f1" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?=$coach->instagram ?? '#'?>" target="_blank">
                                <i class="fa fa-instagram f2" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?=$coach->mail ?? '#'?>" target="_blank">
                                <i class="fa fa-envelope-o f3" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php endforeach;?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>