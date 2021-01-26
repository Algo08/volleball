<?php

namespace frontend\controllers;

use common\models\Gallery;
use common\models\GallerySection;

class GalleryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $sections = GallerySection::find()->where(['show'=>1])->all();
        $gallery = Gallery::find()->orderBy(['id'=>SORT_DESC])->limit(6)->all();
        return $this->render('view', [
            'sections' => $sections,
            'gallery' => $gallery,
            'key' => 6
        ]);
    }

    public function actionOtherPhotos($key,$section)
    {
        $gallery = Gallery::find()->andFilterWhere(['section'=>$section])->orderBy(['id' => SORT_DESC])->limit(3)->offset($key)->all();
        return $gallery ? $this->renderAjax('foreach_list', ['gallery' => $gallery]) : 0;
    }

    public function actionSection($key){
        $gallery = Gallery::find()->where(['section'=>$key])->orderBy(['id'=>SORT_DESC])->limit(6)->all();
        return $this->renderAjax('foreach_list',['gallery'=>$gallery]);
    }
}
