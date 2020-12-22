<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "new".
 *
 * @property int $id
 * @property string $text_head
 * @property string $text_part
 * @property string $text_body
 * @property string $text_head_uz
 * @property string $text_part_uz
 * @property string $text_body_uz
 * @property string $text_head_ru
 * @property string $text_part_ru
 * @property string $text_body_ru
 * @property string $text_head_en
 * @property string $text_part_en
 * @property string $text_body_en
 * @property string $image_location
 * @property string $create_date
 * @property int $cOMMENTS
 */
class News extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'new';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_head_uz', 'text_body_uz', 'image_location'], 'required'],
            [['text_body_uz', 'text_body_ru', 'text_body_en', 'text_part_uz', 'text_part_ru', 'text_part_en'], 'string'],
            [['create_date'], 'safe'],
            [['text_head_uz', 'text_head_ru', 'text_head_en', 'image_location'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_head' => 'Text Head',
            'text_part' => 'Text Part',
            'text_body' => 'Text Body',
            'text_head_uz' => 'Text Head Uz',
            'text_part_uz' => 'Text Part Uz',
            'text_body_uz' => 'Text Body Uz',
            'text_head_ru' => 'Text Head Ru',
            'text_part_ru' => 'Text Part Ru',
            'text_body_ru' => 'Text Body Ru',
            'text_head_en' => 'Text Head En',
            'text_part_en' => 'Text Part En',
            'text_body_en' => 'Text Body En',
            'image_location' => 'Image Location',
            'create_date' => 'Create Date',
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
     * @return string
     */
    public function getText_body(){
        switch (Yii::$app->language){
            case 'ru': return $this->text_body_ru == null ? $this->text_body_uz : $this->text_body_ru ;break;
            case 'en': return $this->text_body_en == null ? $this->text_body_uz : $this->text_body_en ;break;
            default   : return $this->text_body_uz;break;
        }
    }

    /**
     * @return bool
     */
    public function upload()
    {
        if ($this->imageFile) {
            $this->imageFile->saveAs('../../frontend/web/img/newsImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            \yii\imagine\Image::crop(Yii::getAlias('@webroot') .'/../../frontend/web/img/newsImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension,350,197)
                ->save(Yii::getAlias('../../frontend/web/img/newsImg/'. $this->imageFile->baseName . '1.' . $this->imageFile->extension), ['quality' => 90]);

            unlink(Yii::getAlias('@webroot') .'/../../frontend/web/img/newsImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            if ($this->image_location && is_file(Yii::getAlias('@webroot').'/../..'.$this->image_location)){
                unlink(Yii::getAlias('@webroot').'/../..'.$this->image_location);
            }
            $this->image_location = '/frontend/web/img/newsImg/'. $this->imageFile->baseName . '1.' . $this->imageFile->extension;
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool|int|string|null
     */
    public function getCOMMENTS()
    {
        return Comments::find()->where(['news_id'=>$this->id])->count();
    }
}
