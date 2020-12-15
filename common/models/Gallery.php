<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $name
 * @property string $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string $image_location
 */
class Gallery extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz'], 'required'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 100],
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
            'name' => 'Name',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'image_location' => 'Image Location',
        ];
    }

    /**
     * @return string
     */
    public function getname(){
        switch (Yii::$app->language){
            case 'ru': return $this->name_ru == null ? $this->name_uz : $this->name_ru ;break;
            case 'en': return $this->name_en == null ? $this->name_uz : $this->name_en ;break;
            default   : return $this->name_uz;break;
        }
    }

    /**
     * @return bool
     */
    public function upload()
    {
        if ($this->imageFile) {
            $this->imageFile->saveAs('../../frontend/web/img/pictures/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            \yii\imagine\Image::crop(Yii::getAlias('@webroot') .'/../../frontend/web/img/pictures/'. $this->imageFile->baseName . '.' . $this->imageFile->extension,1280,720)
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
