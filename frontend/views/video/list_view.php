<?php
/**
 *  @var \yii\debug\models\timeline\DataProvider $dataProvider
 */

use yii\widgets\ListView;

?>
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
            'class'=>'col-md-4'
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

