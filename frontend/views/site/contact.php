<?php
/**
 * @var \common\models\Contact $contact
**/
use borales\extensions\phoneInput\PhoneInput;
use developit\captcha\Captcha;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$model = new \common\models\Message();
?>
<div class="contact" id="contact">
    <div class="container">
        <h3 class="title"><?=Yii::t('main','Biz bilan bog`laning')?></h3>
        <div class="contact-grid-agiles-w3l">
            <div class="col-md-5 col-xs-5 contact-grid-agile">
                <div class="contact-right2 m-0">
                    <div class="call ">
                        <div class="col-xs-4 contact-grdr-w3l">
                            <h3>Tel :</h3>
                        </div>
                        <div class="col-xs-8 contact-grdr-w3l">
                            <ul>
                                <li><?=$contact->phone?></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="call">
                        <div class="col-xs-4 contact-grdr-w3l">
                            <h3><?=Yii::t('main','Manzil')?> :</h3>
                        </div>
                        <div class="col-xs-8 contact-grdr-w3l">
                            <ul>
                                <li><a href="<?=$contact->location_url ?? '#'?>" target="_blank"><?=$contact->location?></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="call">
                        <div class="col-xs-4 contact-grdr-w3l">
                            <h3>Mail us :</h3>
                        </div>
                        <div class="col-xs-8 contact-grdr-w3l">
                            <ul>
                                <li>
                                    <a href="mailto:<?=$contact->mail?>"><?=$contact->mail?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-xs-7 contact-grid-agile">
<!--                <form action="#" method="post">-->
<!--                    <input type="text" placeholder="Name" name="name" required="">-->
<!--                    <input type="email" placeholder="Email" name="email" required="">-->
<!--                    <input type="text" placeholder="Subject" name="subject" required="">-->
<!--                    <textarea placeholder="Message.." name="message" required=""></textarea>-->
<!--                    <input type="submit" value="Send Now">-->
<!--                </form>-->
                <?php $form = ActiveForm::begin([
                    'id' => 'contact-us',
                    'action'=>Url::to(['contact'])
                ]); ?>

                <?= $form->field($model, 'name')->textInput(['placeholder' => $model->getAttributeLabel('name')])->label(false) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder' => $model->getAttributeLabel('email')])->label(false) ?>

                <?=$form->field($model, 'phone')->widget(PhoneInput::className(), [
                    'jsOptions' => [
                        'preferredCountries' => ['uz', 'ru', 'kz', 'gb'],
                    ]
                ])->label(false);?>

                <?= $form->field($model, 'text')->textarea(['placeholder' => $model->getAttributeLabel('text')])->label(false) ?>

                <?= $form->field($model, 'captcha')->widget(Captcha::className(), [
                    'template' => '<div class="row m-0"><div class="col-lg-3 mx-auto">{image}</div><div class="col-lg-9">{input}</div></div>',
                    'captchaAction' => '/site/captcha'
                ])->label(false)?>

                <?= Html::submitButton(Yii::t('main','Yuborish'), ['class' => 'contact-grid-agile']) ?>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
