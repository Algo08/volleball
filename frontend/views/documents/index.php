<?php
/**
 * @var \yii\debug\models\timeline\DataProvider $dataProvider
 * @var integer $key
 */

use yii\helpers\Url;
use yii\widgets\ListView;

$this->title = Yii::t('main', 'Hujjatlar');

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
<div class="services" id="services">
    <div class="container">
        <div class="agileits_updates_grid_right">
            <!-- row -->
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => 'list_view_item',
                'summary'=>'',
                'emptyText'=> Yii::t('main','Balki, siz boshqa tillarda ma`lumot topaolarsiz'),
                'options'=>[
                    'class'=>'panel-group',
                    'id'=>'accordion',
                    'role'=>'tablist',
                    'aria-multiselectable'=>'true'
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
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

