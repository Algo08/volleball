<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "slide".
 *
 * @property int $id
 * @property string $text_head
 * @property string $text_head_uz
 * @property string|null $text_head_ru
 * @property string|null $text_head_en
 * @property string $text_part
 * @property string $text_part_uz
 * @property string|null $text_part_ru
 * @property string|null $text_part_en
 * @property string|null $image_location
 */
class Slide extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slide';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_head_uz', 'text_part_uz'], 'required'],
            [['text_head_uz', 'text_head_ru', 'text_head_en', 'text_part_uz', 'text_part_ru', 'text_part_en'], 'string', 'max' => 100],
            [['image_location'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_head_uz' => 'Text Head Uz',
            'text_head_ru' => 'Text Head Ru',
            'text_head_en' => 'Text Head En',
            'text_part_uz' => 'Text Part Uz',
            'text_part_ru' => 'Text Part Ru',
            'text_part_en' => 'Text Part En',
            'image_location' => 'Image location',
        ];
    }

    /**
     * @return string
     */
    public function getText_head(){
        switch (Yii::$app->language){
            case 'ru': return $this->text_head_ru == null ? $this->text_head_uz : $this->text_head_ru ;break;
            case 'en': return $this->text_head_en == null ? $this->text_head_uz : $this->text_head_en ;break;
            default   : return $this->text_head_uz;break;
        }
    }
    /**
     * @return string
     */
    public function getText_part(){
        switch (Yii::$app->language){
            case 'ru': return $this->text_part_ru == null ? $this->text_part_uz : $this->text_part_ru ;break;
            case 'en': return $this->text_part_en == null ? $this->text_part_uz : $this->text_part_en ;break;
            default   : return $this->text_part_uz;break;
        }
    }

    /**
     * @return bool
     */
    public function upload()
    {
        if ($this->imageFile) {
            $this->imageFile->saveAs('../../frontend/web/img/pictures/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            \yii\imagine\Image::crop(Yii::getAlias('@webroot') .'/../../frontend/web/img/pictures/'. $this->imageFile->baseName . '.' . $this->imageFile->extension,960,540)
                ->save(Yii::getAlias('../../frontend/web/img/pictures/'. $this->imageFile->baseName . '1.' . $this->imageFile->extension), ['quality' => 90]);

            unlink(Yii::getAlias('@webroot') .'/../../frontend/web/img/pictures/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            if ($this->image_location && is_file(Yii::getAlias('@webroot').'/../..'.$this->image_location)){
                unlink(Yii::getAlias('@webroot').'/../..'.$this->image_location);
            }
            $this->image_location = '/frontend/web/img/pictures/'. $this->imageFile->baseName . '1.' . $this->imageFile->extension;
            return true;
        } else {
            return false;
        }
    }


}
