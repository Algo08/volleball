<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Video */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="video-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="row">

        <?= $form->field($model, 'class',['options'=>['class'=>'col']])->dropDownList(Yii::$app->params['sinf'])?>

        <?= $form->field($model, 'theme',['options'=>['class'=>'col']])->textInput() ?>

        <?= $form->field($model, 'lang',['options'=>['class'=>'col-md-2 col-12']])->dropDownList(
            [
                'uz'=>'Uz',
                'ru'=>'Ru',
                'ko'=>'Qo',
            ],           // Flat array ('id'=>'label')
            ['prompt'=>'']    // options
        ) ?>
    </div>
    <div class="text-center mt-3">
        <?=$form->field($model, 'imageFile')
            ->widget(\fv\yii\croppie\Widget::class,
                [
                    'format' => 'jpeg',
                    'clientOptions' => [
                        'viewport'=>[
                            'width'=>350,
                            'height' => 233,
                        ],
                        'boundary'=>[
                            'width'=>400,
                            'height' => 300
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
    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
