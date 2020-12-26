<?php

namespace backend\controllers;

use common\models\Message;
use yii\data\ActiveDataProvider;

class MessagesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Message::find()
                ->orderBy(['create_date'=>SORT_DESC]),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionMessage($id)
    {
        $message = Message::findOne($id);
        return $this->renderAjax('message',['message'=>$message]);
    }

    public function actionReaded($id)
    {
        $message = Message::findOne($id);
        $message->readed = 1;
        $message->save(false);
        return $this->redirect(['index']);
    }

}
