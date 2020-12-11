<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
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
<div class="site-login section container">
    <div class="row">
        <div class="col-lg-5 center-block">
            <div class="contact-form">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder'=>'Username'])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false) ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'main-button icon-button pull-right col-12', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
