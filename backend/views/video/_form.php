<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Video */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="video-form">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Uz</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ru</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">En</a>
        </li>
    </ul>
    <?php $form = ActiveForm::begin(); ?>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <?= $form->field($model, 'text_uz')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <?= $form->field($model, 'text_ru')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <?= $form->field($model, 'text_en')->textInput(['maxlength' => true]) ?>
        </div>
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
    <?= $form->field($model, 'video_link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
