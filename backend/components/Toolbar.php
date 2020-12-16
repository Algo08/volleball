<?php
namespace app\components;
use common\models\Message;
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
        $messages = Message::find()->where(['readed'=>0])->all();
        $countMess = count($messages);
        return $this->render('toolbar',['messages'=>$messages,'countMess'=>$countMess]);
    }

}