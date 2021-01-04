<?php

namespace frontend\controllers;

use common\models\Video;

class VideoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $videos = Video::find()->orderBy(['id'=>SORT_DESC])->limit(6)->all();
        return $this->render('view', [
            'videos' => $videos,
            'key' => 6
        ]);
    }

    public function actionOtherVideos($key)
    {
        $videos = Video::find()->orderBy(['id' => SORT_DESC])->limit(3)->offset($key)->all();
        return $videos ? $this->renderAjax('foreach_list', ['videos' => $videos]) : 0;
    }

}
