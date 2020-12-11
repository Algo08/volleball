<?php
/**
 * @var \yii\debug\models\timeline\DataProvider $dataProvider
 * @var \backend\models\UserSearch $searchModel
 */

use yii\bootstrap4\Html;
use yii\grid\GridView;

?>


<?=GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'text',
        'uSER.username',
        [
            'class' => 'yii\grid\ActionColumn',
            'contentOptions'=>['class'=> 'text-center', 'style'=>'width: 160px'],
            'buttons'=>[
                'delete'=>function ($url, $model) {
                    return Html::a( '<i class="fa fa-trash mx-1"></i>',\yii\helpers\Url::to(['delete','id'=>$model->id]),
                        ['class' => 'delete', 'data-key'=>$model->id,
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ] );
                }
            ],
        ],    ],
]);
?>