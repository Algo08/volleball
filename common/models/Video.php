<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $text
 * @property string $text_uz
 * @property string|null $text_ru
 * @property string|null $text_en
 * @property string $video_link
 * @property string $image_location
 * @property string $create_date
 */
class Video extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_uz', 'video_link', 'image_location', 'create_date'], 'required'],
            [['create_date'], 'safe'],
            [['text_uz', 'text_ru', 'text_en', 'video_link', 'image_location'], 'string', 'max' => 200],
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
            'video_link' => 'Video Link',
            'image_location' => 'Image Location',
            'create_date' => 'Create Date',
        ];
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

    /**
     * @return bool
     */
    public function upload()
    {
        if ($this->imageFile) {
            $this->imageFile->saveAs('../../frontend/web/img/videoImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            \yii\imagine\Image::crop(Yii::getAlias('@webroot') .'/../../frontend/web/img/videoImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension,350,197)
                ->save(Yii::getAlias('../../frontend/web/img/videoImg/'. $this->imageFile->baseName . '1.' . $this->imageFile->extension), ['quality' => 90]);

            unlink(Yii::getAlias('@webroot') .'/../../frontend/web/img/videoImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            if ($this->image_location && is_file(Yii::getAlias('@webroot').'/../..'.$this->image_location)){
                unlink(Yii::getAlias('@webroot').'/../..'.$this->image_location);
            }
            $this->image_location = '/frontend/web/img/videoImg/'. $this->imageFile->baseName . '1.' . $this->imageFile->extension;
            return true;
        } else {
            return false;
        }
    }
}
