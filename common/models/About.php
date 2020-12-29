<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $name
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
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
            [['text_uz', 'text_ru', 'text_en','name_uz', 'name_ru', 'name_en'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'text' => 'Text',
            'text_uz' => 'Text Uz',
            'text_ru' => 'Text Ru',
            'text_en' => 'Text En',
        ];
    }

    /**
     * @return string
     */
    public function getName(){
        switch (Yii::$app->language){
            case 'ru': return $this->name_ru == null ? $this->name_uz : $this->name_ru;break;
            case 'en': return $this->name_en == null ? $this->name_uz : $this->name_en;break;
            default   : return $this->name_uz;break;
        }
    }
    /**
     * @return string
     */
    public function getText(){
        switch (Yii::$app->language){
            case 'ru': return $this->text_ru == null ? $this->text_uz : $this->text_ru;break;
            case 'en': return $this->text_en == null ? $this->text_uz : $this->text_en;break;
            default   : return $this->text_uz;break;
        }
    }
}
