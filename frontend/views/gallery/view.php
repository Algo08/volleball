<?php
/**
 * @var \common\models\Gallery[] $gallery
 * @var \common\models\GallerySection[] $sections
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
</div>
<div class="container-fluid news-section container" id="gallery-blog">
    <h3 class="title"><?=Yii::t('main','Rasmlar')?></h3>
    <ul class="nav nav-tabs">
        <?php foreach ($sections as $section):?>
        <li><a data-toggle="tab" class="sections" href="javascript:0" data-key="<?=$section->id?>"><?=$section->name?></a></li>
        <?php endforeach;?>
    </ul>

    <div class="tab-content">
        <div class="row m-0"  id="gallery">
            <?= $this->render('foreach_list',['gallery'=>$gallery])?>
        </div>
        <h2 class="text-center page-header">
            <small class="other font-weight-light btn btn-lg" data-key="" data-value="<?=$key?>"><?= Yii::t('main','Yana rasmlar')?></small>
            <i class="fa fa-spinner" id="loading" style="opacity: 0;"></i>
        </h2>
    </div>
</div>
<?php
$urlGallery = \yii\helpers\Url::to(['other-photos']);
$urlSection = \yii\helpers\Url::to(['section']);
$hammasi = Yii::t('main', 'Hammasi shular');
$script = <<< JS

$(document).ajaxStart(function(){
    $('#loading').css('opacity', '1');
 }).ajaxStop(function(){
    $('#loading').css('opacity', '0');
 });
var btnLast = $('.other.font-weight-light');
var sections = $('.sections');
var galleryDiv = $('#gallery');
        btnLast.on('click',function(event) {
            event.preventDefault();
            var keySection = $(this).attr('data-key');
            var keyNumber = $(this).attr('data-value');
            $.ajax({
                url: '$urlGallery',
                data:{
                    key: keyNumber,
                    section: keySection,
                }, 
                success: function (data) {
                    if(data == 0){    
                        btnLast.html('$hammasi'); 
                    }
                    else {
                        galleryDiv.append(data);
                        btnLast.attr('data-value',parseInt(keyNumber)+3);
                    }   
                 }
            });
        });
        
        sections.on('click',function(event) {
            event.preventDefault();
            var keySection = $(this).data('key'); 
            $.ajax({
                url: '$urlSection',
                data:{
                    key: keySection,
                }, 
                success: function (data) {
                   galleryDiv.html(data);
                   btnLast.attr('data-value',6);
                   btnLast.attr('data-key',keySection);
                 }
            });
        });
      
JS;
$this->registerJs( $script );
?>
