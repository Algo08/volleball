<?php

namespace frontend\controllers;

use common\models\Gallery;

class GalleryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $gallery = Gallery::find()->orderBy(['id'=>SORT_DESC])->limit(6)->all();
        return $this->render('view', [
            'gallery' => $gallery,
            'key' => 6
        ]);
    }

    public function actionOtherPhotos($key)
    {
        $gallery = Gallery::find()->orderBy(['id' => SORT_DESC])->limit(3)->offset($key)->all();
        return $gallery ? $this->renderAjax('foreach_list', ['gallery' => $gallery]) : 0;
    }

}
