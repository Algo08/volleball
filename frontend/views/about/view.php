<?php
/**
 * @var \common\models\About $model
 */
use yii\helpers\Url;

$this->title = Yii::t('main','Biz haqimizda');

?>
    <div id="about" class="section">
        <div class="container">
            <?=$model->text?>
        </div>
    </div>
