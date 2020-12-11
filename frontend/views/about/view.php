<?php
/**
 * @var \common\models\Books[] $books
 * @var \common\models\Books[] $md
 * @var \common\models\Books[] $ps
 * @var \common\models\Books $bk
 * @var \common\models\Books $at
 * @var yii\data\ActiveDataProvider $dataProvider
 */
use yii\helpers\Url;

$this->title = Yii::t('main','Biz haqimizda');

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
                        <li><?=$this->title?></li>
                    </ul>
                    <h1 class="white-text" id="title"><?=$this->title?></h1>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="section">
        <div class="container">
            <?=$model->text?>
        </div>
    </div>
