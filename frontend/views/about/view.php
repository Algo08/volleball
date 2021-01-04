<?php
/**
 * @var \common\models\About $model
 */
use yii\helpers\Url;

$this->title = Yii::t('main',$model->name);

?>
<!-- banner-text -->
<div class="banner-text" style="background: url(<?=Url::to('@web/theme/img/b1.jpg')?>) no-repeat bottom; min-height: 250px">
    <div class="overlay"></div>
    <div class="container">
        <div class="slider">
            <div class="callbacks_container" style="margin: 100px">
                <ol class="breadcrumb">
                    <li><a href="<?= Yii::$app->homeUrl?>"><?=Yii::t('main','Bosh sahifa')?></a></li>
                    <li class="active"><?=$this->title?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div id="about" class="section">
    <div class="container">
        <?=$model->text?>
    </div>
</div>
