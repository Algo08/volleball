<?php

namespace frontend\controllers;

use common\models\Video;
use yii\data\ActiveDataProvider;

class VideoController extends \yii\web\Controller
{
    public function actionView($sinf = null, $lang=null)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Video::find()
                ->andFilterWhere(['class'=>$sinf])
                ->andFilterWhere(['lang'=>$lang]),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        if (\Yii::$app->request->isAjax){
            return $this->renderAjax('list_view',['dataProvider'=>$dataProvider]);
        }
        $videos = Video::find()->select(['*','COUNT(*) AS cnt'])->groupBy('class')->all();

//        echo '<pre>'; print_r($videos); die();
        return $this->render('view',[
            'dataProvider'=>$dataProvider,
            'videos'=>$videos
        ]);
    }
}
