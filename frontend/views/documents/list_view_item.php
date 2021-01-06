<?php
/**
 * @var \common\models\Documents $model
*/

use yii\helpers\Url;

?>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading<?=$model->id?>">
        <h4 class="panel-title asd">
            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$model->id?>" aria-expanded="true"
               aria-controls="collapse<?=$model->id?>">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                <i class="glyphicon glyphicon-minus" aria-hidden="true"></i><?=$model->name?>
            </a>
        </h4>
    </div>
    <div id="collapse<?=$model->id?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?=$model->id?>">
        <div class="panel-body panel_text">
            <?=$model->text?>
        </div>
        <div style="padding-bottom: 15px; margin-left: 20px">
            <a class="all" href="<?=Url::to('@web'.$model->location_doc)?>">Yuklab olish</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>