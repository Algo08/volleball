<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Contact';
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
<div class="site-contact section container">
    <div class="row">
        <div class="col-lg-6">
            <h4><?= Html::encode($this->title) ?></h4>

            <div class="contact-form">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder'=>'Username'])->label(false) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder'=>'Email'])->label(false) ?>

                <?= $form->field($model, 'subject')->textInput(['placeholder'=>'Subject'])->label(false) ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder'=>'Enter your Message'])->label(false) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'main-button icon-button float-right', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            </div>
        </div>
        <!-- contact information -->
        <div class="col-lg-5 col-md-offset-1 pull-right">
            <h4>Contact Information</h4>
            <ul class="contact-details">
                <li><i class="fa fa-envelope"></i>Educate@email.com</li>
                <li><i class="fa fa-phone"></i>122-547-223-45</li>
                <li><i class="fa fa-map-marker"></i>4476 Clement Street</li>
            </ul>
            <!-- contact map -->
            <div id="contact-map"></div>
            <!-- /contact map -->
        </div>
        <!-- contact information -->
    </div>

</div>
