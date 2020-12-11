<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options'=>[
            'class'=>'table-responsive'
        ],
        'columns' => [

            'id',
            'text_head_uz',
            [
                'attribute'=>'text_body_uz',
                'format' => 'raw',
            ],
            'text_head_ru',
            [
                'attribute'=>'text_body_ru',
                'format' => 'raw',
            ],
            'text_head_en',
            [
                'attribute'=>'text_body_en',
                'format' => 'raw',
            ],
            'create_date',
            [
                'attribute' => 'image',
                'format' => 'html',
                'contentOptions'=>['class'=> 'text-center', 'style'=>'width: 220px'],
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/..'. $data['image_location'],
                        ['width' => '100px', 'style'=>['background-color'=>'#393939']]);
                },
            ],

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
                    },
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
            ],

        ],
    ]); ?>


</div>
