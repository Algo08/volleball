<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Documents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documents-form">
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
            <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'text_uz')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'text_ru')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'text_en')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row m-0 my-4">
        <?= $form->field($model, 'file[]', ['options'=>['class'=>'col custom-file']])->label(null,['class'=>'custom-file-label'])->fileInput(['class'=>'custom-file-input']) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
