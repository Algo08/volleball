<?php

namespace common\models;

use phpDocumentor\Reflection\File;
use Yii;

/**
 * This is the model class for table "documents".
 *
 * @property int $id
 * @property string $name
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $text
 * @property string $text_uz
 * @property string|null $text_ru
 * @property string|null $text_en
 * @property string|null $location_doc
 * @property string $create_date
 * @property File $file
 */
class Documents extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'text_uz'], 'required'],
            [['create_date'], 'safe'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 100],
            [['text_uz', 'text_ru', 'text_en', 'location_doc'], 'string', 'max' => 200],
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
            'location_doc' => 'Location Doc',
            'create_date' => 'Create Date',
        ];
    }

    /**
     * @return string
     */
    public function getName(){
        switch (Yii::$app->language){
            case 'ru': return $this->name_ru == null ? $this->name_uz : $this->name_ru ;break;
            case 'en': return $this->name_en == null ? $this->name_uz : $this->name_en ;break;
            default   : return $this->name_uz;break;
        }
    }

    /**
     * @return string
     */
    public function getText(){
        switch (Yii::$app->language){
            case 'ru': return $this->text_ru == null ? $this->text_uz : $this->text_ru ;break;
            case 'en': return $this->text_en == null ? $this->text_uz : $this->text_en ;break;
            default   : return $this->text_uz;break;
        }
    }


}
