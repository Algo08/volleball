<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Counts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="count-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_uz',
            'name_ru',
            'name_en',
            'amount',

            ['class' => 'yii\grid\ActionColumn',
                'contentOptions'=>['class'=> 'text-center', 'style'=>'width: 160px'],
                'buttons'=>[
                    'view'=>function ($url, $model) {
                        return Html::a('<i class="fa fa-eye mx-1"></i>',\yii\helpers\Url::to(['view','id'=>$model->id]),
                            ['class' => 'view']);
                    },
                    'update'=>function ($url, $model) {
                        return Html::a( '<i class="fa fa-pencil-alt mx-1"></i>',\yii\helpers\Url::to(['update','id'=>$model->id]),
                            ['class' => 'update'] );
                    }
                ],
            ],
        ],
    ]); ?>


</div>
