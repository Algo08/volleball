<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use developit\captcha\Captcha;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::$app->user->identity ? Yii::t('main','Shaxsiy kabinet') :Yii::t('main','Ro`yhatdan o`tish');
$signUp = Yii::$app->user->identity ? Yii::t('main','Saqlash') :Yii::t('main','Ro`yhatdan o`tish');
$this->params['breadcrumbs'][] = $this->title;
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
                <h1 class="white-text"><?=$this->title?></h1>

            </div>
        </div>
    </div>

</div>
<div id="contact" class="section container">
    <div class="row">
        <div class="col-lg-6 center-block">
            <div class="contact-form">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                    <?= $form->field($model, 'username',['enableAjaxValidation' => true])->textInput(['autofocus' => true, 'placeholder'=>'Username'])->label(false) ?>

                    <?= $form->field($model, 'email',['enableAjaxValidation' => true])->textInput(['placeholder'=>'Email'])->label(false) ?>
                    <?= $form->field($model, 'firstname',['enableAjaxValidation' => true])->textInput(['placeholder'=>'firstname'])->label(false) ?>
                    <?= $form->field($model, 'lastname',['enableAjaxValidation' => true])->textInput(['placeholder'=>'lastname'])->label(false) ?>
                    <?= $form->field($model, 'region',['enableAjaxValidation' => true])->textInput(['placeholder'=>'region'])->label(false) ?>
                    <?= $form->field($model, 'telegram_username',['enableAjaxValidation' => true])->textInput(['placeholder'=>'telegram_username'])->label(false) ?>

                    <?php if(!Yii::$app->user->identity):?>
                    <?= $form->field($model, 'password',['enableAjaxValidation' => true])->passwordInput(['placeholder'=>'Password'])->label(false) ?>
                    <?php endif;?>
                    <div class="text-center">
                        <?=$form->field($model, 'imageFile')
                            ->widget(\fv\yii\croppie\Widget::class,
                                [
                                    'format' => 'jpeg',
                                    'clientOptions' => [
                                        'viewport'=>[
                                            'width'=>120,
                                            'height' => 120
                                        ],
                                        'boundary'=>[
                                            'width'=>120,
                                            'height' => 120
                                        ],
                                        'enableExif'=>'true'
                                    ],
                                    'url' => '../../'.$model->image_location ?: '../images/profile_image/1.jpg',
                                    'rotateCcwLabel' => '<i class="icon-undo"></i> 90&deg',
                                    'rotateCwLabel' => '<i class="icon-rotate-right"></i> 90&deg',
                                    'uploadButtonOptions' => [
                                        'value'=>'test',
                                    ],
                                ])
                            ->label(false);?>
                    </div>
                <?= $form->field($model, 'captcha')->widget(Captcha::className(), [
                    'template' => '<div class="row m-0"><div class="col-lg-3 col-5 mb-3 mb-lg-0 mx-auto">{image}</div><div class="col">{input}</div></div>',
                    'captchaAction' => '/site/captcha'
                ])->label(false)?>
                    <div class="form-group">
                        <?= Html::submitButton($signUp, ['class' => 'main-button icon-button pull-right col-12', 'name' => 'signup-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <?php if (Yii::$app->user->identity):?>
            <div class="col-lg-6">
                <table class="table table-hover">
                    <tbody>
                    <thead class="main-color text-white">
                    <tr>
                        <th colspan="2" scope="col">Balans</th>
                    </tr>
                    </thead>
                    <tr>
                        <th scope="row"><?=Yii::t('main','Qolgan testlar soni')?></th>
                        <td><?=Yii::$app->user->identity->test_limit?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?=Yii::t('main','Tugash vaqti')?></th>
                        <td><?= Yii::$app->formatter->asDate(Yii::$app->user->identity->deadline).
                            ' '.Yii::$app->formatter->asTime(Yii::$app->user->identity->deadline, 'short')?></td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <a class="main-button icon-button m-auto" href="<?= Url::to(['/test/pay'])?>"><?=Yii::t('main','Hisobni to`dirish')?></a>
                </div>
            </div>
        <?php endif;?>
    </div>
</div>
