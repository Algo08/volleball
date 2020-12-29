<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $image_location
 * @property int $sequence
 * @property int $show
 */
class Partners extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url', 'sequence'], 'required'],
            [['sequence', 'show'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['url', 'image_location'], 'string', 'max' => 100],
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
            'url' => 'Url',
            'image_location' => 'Image Location',
            'sequence' => 'ketma ketlik',
            'show' => 'show',
        ];
    }

    /**
     * @return bool
     */
    public function upload()
    {
        if ($this->imageFile) {
            $this->imageFile->saveAs('../../frontend/web/img/partners/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            \yii\imagine\Image::crop(Yii::getAlias('@webroot') .'/../../frontend/web/img/partners/'. $this->imageFile->baseName . '.' . $this->imageFile->extension,151,113)
                ->save(Yii::getAlias('../../frontend/web/img/partners/'. $this->imageFile->baseName . '1.' . $this->imageFile->extension), ['quality' => 90]);

            unlink(Yii::getAlias('@webroot') .'/../../frontend/web/img/partners/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            if ($this->image_location && is_file(Yii::getAlias('@webroot').'/../..'.$this->image_location)){
                unlink(Yii::getAlias('@webroot').'/../..'.$this->image_location);
            }
            $this->image_location = '/frontend/web/img/partners/'. $this->imageFile->baseName . '1.' . $this->imageFile->extension;
            return true;
        } else {
            return false;
        }
    }
}
