<?php

namespace frontend\controllers;

use common\models\About;
use common\models\Pictures;
use yii\data\ActiveDataProvider;

class AboutController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id)
    {
        $model = About::findOne($id);
        return $this->render('view',['model'=>$model]);
    }


    public function actionPictures()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Pictures::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('all_picture',['dataProvider'=>$dataProvider]);
    }


}
