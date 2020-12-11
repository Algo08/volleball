<?php
namespace app\components;
use yii\base\Widget;

/**
 * Created by PhpStorm.
 * User: AGC PROJECTS
 * Date: 11.06.2019
 * Time: 14:28
 */

class Toolbar extends Widget
{
    public function run()
    {
        $appilations = \common\models\Appilation::find()->where(['readed'=>0])->all();
        $countMess = count($appilations);
        return $this->render('toolbar',['appilations'=>$appilations,'countMess'=>$countMess]);
    }

}