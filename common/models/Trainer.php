<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "trainer".
 *
 * @property int $id
 * @property string $text
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $mail
 * @property string $image_location
 */
class Trainer extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trainer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'image_location'], 'required'],
            [['text', 'facebook', 'instagram', 'mail', 'image_location'], 'string', 'max' => 100],
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
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'mail' => 'Mail',
            'image_location' => 'Image Location',
        ];
    }

    /**
     * @return bool
     */
    public function upload()
    {
        if ($this->imageFile) {
            $this->imageFile->saveAs('../../frontend/web/img/userImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            \yii\imagine\Image::crop(Yii::getAlias('@webroot') .'/../../frontend/web/img/userImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension,300,400)
                ->save(Yii::getAlias('../../frontend/web/img/userImg/'. $this->imageFile->baseName . '1.' . $this->imageFile->extension), ['quality' => 90]);

            unlink(Yii::getAlias('@webroot') .'/../../frontend/web/img/userImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            if ($this->image_location && is_file(Yii::getAlias('@webroot').'/../..'.$this->image_location)){
                unlink(Yii::getAlias('@webroot').'/../..'.$this->image_location);
            }
            $this->image_location = '/frontend/web/img/userImg/'. $this->imageFile->baseName . '1.' . $this->imageFile->extension;
            return true;
        } else {
            return false;
        }
    }

}
