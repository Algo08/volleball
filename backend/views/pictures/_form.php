<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pictures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pictures-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'comment_uz')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'comment_ru')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'comment_en')->textInput(['maxlength' => true]) ?>

    <div class="text-center mt-3">
        <?=$form->field($model, 'imageFile')
            ->widget(\fv\yii\croppie\Widget::class,
                [
                    'format' => 'jpeg',
                    'clientOptions' => [
                        'viewport'=>[
                            'width'=>1400,
                            'height' => 750,
                        ],
                        'boundary'=>[
                            'width'=>1450,
                            'height' => 800
                        ],
                        'enableExif'=>'true',
                    ],
                    'rotateCcwLabel' => '<i class="icon-undo"></i> 90&deg',
                    'rotateCwLabel' => '<i class="icon-rotate-right"></i> 90&deg',
                    'uploadButtonOptions' => [
                        'value'=>'test',
                    ],
                ])
            ->label(false);?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
