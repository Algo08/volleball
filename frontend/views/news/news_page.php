 <?php
/**
 * @var \common\models\News[] $news
 */
use yii\helpers\Url;

$this->title = Yii::t('main', 'Yangiliklar');
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

<div class="container-fluid px-0 section container">
    <div class="row m-0"  id="news">
        <?= $this->renderAjax('news_foreach_list',['news'=>$news])?>
    </div>
    <h6 class="text-center">
        <a class="other font-weight-light" href="javascript:0" data-value="<?=$key?>"><?= Yii::t('main','Yana yangiliklar')?></a>
        <i class="fa fa-spinner" id="loading" style="opacity: 0;"></i>
    </h6>
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
