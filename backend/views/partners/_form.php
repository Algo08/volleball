<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Partners */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="partners-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sequence')->textInput() ?>

    <?= $form->field($model, 'show')->textInput() ?>


    <?=$form->field($model, 'imageFile')
        ->widget(\fv\yii\croppie\Widget::class,
            [
                'format' => 'png',
                'clientOptions' => [
                    'viewport'=>[
                        'width'=>151,
                        'height' => 113,
                    ],
                    'boundary'=>[
                        'width'=>170,
                        'height' => 120
                    ],
                    'enableExif'=>'true',
                    'url' => null
                ],
                'rotateCcwLabel' => '<i class="icon-undo"></i> 90&deg',
                'rotateCwLabel' => '<i class="icon-rotate-right"></i> 90&deg',
                'uploadButtonOptions' => [
                    'value'=>'test',
                ],
            ])
        ->label(false);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
