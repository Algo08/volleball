<?php
/**
 * @var \common\models\Gallery[] $gallery
 * @var integer $key
 */

use yii\helpers\Url;

$this->title = Yii::t('main', 'Gallery');

?>
<!-- banner-text -->
<div class="banner-text" style="background: url(<?=Url::to('@web/theme/img/b1.jpg')?>) no-repeat bottom; min-height: 250px">
    <div class="overlay"></div>
    <div class="container">
        <div class="slider">
            <div class="callbacks_container" style="margin: 100px">
                <ol class="breadcrumb">
                    <li><a href="<?= Yii::$app->homeUrl?>"><?=Yii::t('main','Bosh sahifa')?></a></li>
                    <li class="active"><?=$this->title?></li>
                </ol>
            </div>
        </div>
    </div>
</div><div class="container-fluid news-section container" id="gallery-blog">
    <h3 class="title">Our Gallery
        <img src="<?=Url::to('@web/frontend/web/theme/img/logo2.png')?>" alt="" />
    </h3>
    <div class="row m-0"  id="gallery">
        <?= $this->render('foreach_list',['gallery'=>$gallery])?>
    </div>
    <h2 class="text-center page-header">
        <small class="other font-weight-light btn btn-lg" data-value="<?=$key?>"><?= Yii::t('main','Yana rasmlar')?></small>
        <i class="fa fa-spinner" id="loading" style="opacity: 0;"></i>
    </h2>
</div>
<?php
$urlGallery = \yii\helpers\Url::to(['other-photos']);
$hammasi = Yii::t('main', 'Hammasi shular');
$script = <<< JS

$(document).ajaxStart(function(){
    $('#loading').css('opacity', '1');
 }).ajaxStop(function(){
    $('#loading').css('opacity', '0');
 });
var btnLast = $('.other.font-weight-light');
var galleryDiv = $('#gallery');
var keyNumber = btnLast.data('value');
        btnLast.on('click',function(event) {
            event.preventDefault();
            $.ajax({
                url: '$urlGallery',
                data:{
                    key: keyNumber,
                }, 
                success: function (data) {
                    if(data == 0){    
                        btnLast.html('$hammasi'); 
                    }
                    else {
                        galleryDiv.html(galleryDiv.html()+data);
                        keyNumber += 3;
                    }   
                 }
            });
        });
      
JS;
$this->registerJs( $script );
?>
