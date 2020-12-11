<?php
/**
 * @var \common\models\Pictures $model
 */
?>

    <a href="<?= \yii\helpers\Url::to('@web'.$model->image_location)?>" class="fancybox position-relative" rel="ligthbox">
        <img  src="<?= \yii\helpers\Url::to('@web'.$model->image_location)?>" class="zoom img-fluid"  alt="">
        <span class="fancy-title"><?=$model->comment?></span>
    </a>
<?php
$script = <<< JS

$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
  
});
JS;
$this->registerJs( $script );
?>
