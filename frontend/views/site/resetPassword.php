<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Reset password';
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
<div class="site-reset-password section container">
    <h4><?= Html::encode($this->title) ?></h4>

    <p>Please choose your new password:</p>

    <div class="row">
        <div class="col-lg-6">
            <div class="contact-form">
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true, 'placeholder'=>'Password'])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'main-button icon-button pull-right col-5']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
