<?php
/**
 * @var \common\models\News[] $news
 * @var integer $key
 */

use yii\helpers\Url;
$this->title = Yii::t('main', 'Yangiliklar');

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
<div class="container-fluid section container" id="news-blog">
    <div class="row m-0"  id="news">
        <?= $this->render('news_foreach_list',['news'=>$news])?>
    </div>
    <h2 class="text-center page-header">
        <small class="other font-weight-light btn btn-lg" data-value="<?=$key?>"><?= Yii::t('main','Yana yangiliklar')?></small>
        <i class="fa fa-spinner" id="loading" style="opacity: 0;"></i>
    </h2>
</div>
<?php
$urlNews = \yii\helpers\Url::to(['other-news']);
$hammasi = Yii::t('main', 'Hammasi shular');
$script = <<< JS
$(document).ajaxStart(function(){
    $('#loading').css('opacity', '1');
 }).ajaxStop(function(){
    $('#loading').css('opacity', '0');
 });
var btnLast = $('.other.font-weight-light');
var newsDiv = $('#news');
var keyNumber = btnLast.data('value');
        btnLast.on('click',function(event) {
            event.preventDefault();
            $.ajax({
                url: '$urlNews',
                data:{
                    key: keyNumber,
                }, 
                success: function (data) {
                    if(data == 0){    
                        btnLast.html('$hammasi'); 
                    }
                    else {
                        newsDiv.html(newsDiv.html()+data);
                        keyNumber += 3;
                    }   
                 }
            });
        });
      
JS;
$this->registerJs( $script );
?>
