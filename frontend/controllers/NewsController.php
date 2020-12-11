<?php

namespace frontend\controllers;

use common\models\Comments;
use common\models\News;
use Yii;

class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionNewsPage()
    {
        $news = News::find()->orderBy(['create_date'=>SORT_DESC])->limit(6)->all();
        return $this->render('news_page', [
            'news' => $news,
            'key' => 6
        ]);
    }

    public function actionOtherNews($key)
    {
        $news = News::find()->orderBy(['create_date' => SORT_DESC])->limit(3)->offset($key)->all();
        return $news ? $this->renderAjax('news_foreach_list', ['news' => $news]) : 0;
    }

    /**
     * @param null $id
     * @return string
     */
    public function actionNewsView($id = null)
    {
        $news = News::findOne($id);
        $comments = Comments::find()->where(['and',['news_id'=>$news->id],['reply_to'=>null]])->orderBy(['create_date'=>SORT_DESC])->limit(30)->all();
        return $this->render('news_view', [
            'news' => $news,
            'comments' => $comments
        ]);
    }

    /**
     * @param $text
     * @param $id
     * @param $reply
     * @param $key
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function actionAddComment($text, $id, $reply)
    {
        $comments = new Comments();
        if (Yii::$app->request->isAjax) {
            $comments->text = $text;
            $comments->news_id = $id;
            $comments->user_id = Yii::$app->user->id;
            $comments->reply_to = $reply;

            $comments->create_date = date('Y-m-d H:i:s');
            $comments->save();
            return Yii::$app->formatter->asDate($comments->create_date).
                ' '.Yii::$app->formatter->asTime($comments->create_date, 'short');

        }
    }

}
