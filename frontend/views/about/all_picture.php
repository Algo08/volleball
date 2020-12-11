<?php
/**
 * @var \yii\debug\models\timeline\DataProvider $dataProvider
 */
use yii\helpers\Url;
use yii\widgets\ListView;

$this->title = Yii::t('main','Gallery');

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
<div id="pictures" class="section">

    <!-- Page Content -->
    <div class="container page-top">

        <div class="row m-0">

            <div class="list-view">
                <!-- row -->
                <?= ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => 'list_view_item',
                    'summary'=>'',
                    'emptyText'=> Yii::t('main','Balki, siz boshqa tillarda ma`lumot topaolarsiz'),
                    'options'=>[
                        'class'=>'row'
                    ],
                    'itemOptions'=>[
                        'class'=>'col-lg-3 col-md-4 col-xs-6 thumb zoom img-fluid'
                    ],
                    'pager' => [
                        'options'=>['class'=>'pagination post-pagination col-12 d-flex justify-content-center'],   // set clas name used in ui list of pagination
                        'prevPageLabel' => 'Back',   // Set the label for the “previous” page button
                        'nextPageLabel' => 'Next',   // Set the label for the “next” page button
                        'nextPageCssClass'=>'pagination-next-a pull-right col-3',    // Set CSS class for the “next” page button
                        'prevPageCssClass'=>'pagination-back-a pull-left col-3',    // Set CSS class for the “previous” page button
                        'maxButtonCount'=>10,    // Set maximum number of page buttons that can be displayed
                        'pageCssClass'=>'pages'
                    ],
                ]);?>
                <!-- /row -->
                <div id="preloader1" style="display: none;"><div class="preloader"></div></div>
            </div>

        </div>




    </div>

</div>
<?php
$script = <<< JS

$(document).ready(function(){
    $(".thumb.zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
JS;
$this->registerJs( $script );
?>
