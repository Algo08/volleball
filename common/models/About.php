<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $text
 * @property string $text_uz
 * @property string $text_ru
 * @property string $text_en
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_uz'], 'required'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'text_uz' => 'Text Uz',
            'text_ru' => 'Text Ru',
            'text_en' => 'Text En',
        ];
    }

    /**
     * @return string
     */
    public function gettext(){
        switch (Yii::$app->language){
            case 'ru': return $this->text_ru ?? $this->text_uz ;break;
            case 'en': return $this->text_en ?? $this->text_uz ;break;
            default   : return $this->text_uz;break;
        }
    }
}
