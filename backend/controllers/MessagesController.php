<?php

namespace backend\controllers;

use common\models\Message;

class MessagesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $messages = Message::find()->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('index',['messages'=>$messages]);
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
