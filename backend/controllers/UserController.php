<?php

namespace backend\controllers;

use backend\models\UserSearch;
use common\models\Room;
use Yii;
use yii\data\ActiveDataProvider;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel = new UserSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
    }

    public function actionRoom($id)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Room::find()->where(['user_id'=>$id])->orderBy(['create_date'=>SORT_DESC])
        ]);

        return $this->render('room', [
            'dataProvider' => $dataProvider,
        ]);
    }


}
