<?php

namespace frontend\controllers;

use common\models\Documents;
use yii\data\ActiveDataProvider;

class DocumentsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Documents::find()
                ->orderBy(['create_date'=>SORT_DESC]),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        return $this->render('index',[
                'dataProvider'=>$dataProvider
            ]);
    }

}
