<?php

namespace backend\controllers;

use backend\models\CommentSearch;
use common\models\Comments;
use Yii;


class CommentsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel = new CommentSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     */
    public function actionDelete($id)
    {
        $comment = Comments::findOne($id);
        $replyComment = Comments::find()->where(['reply_to'=>$comment->id])->all();
        if ($comment->delete()){
            foreach ($replyComment as $reply){
                $reply->delete();
            }
        }
        return $this->redirect(['index']);
    }

}
