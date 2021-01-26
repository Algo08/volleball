<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallery_section".
 *
 * @property int $id
 * @property string $name
 * @property string $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property int $show
 * @property int $sequence
 */
class GallerySection extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery_section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'show', 'sequence'], 'required'],
            [['show', 'sequence'], 'integer'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 200],
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
            'show' => 'Show',
            'sequence' => 'Sequence',
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

}
