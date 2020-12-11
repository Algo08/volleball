<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $name
 * @property int $class
 * @property int $theme
 * @property int $cnt
 * @property string $image_location
 * @property string $create_date
 * @property string $url
 * @property string $lang
 */
class Video extends \yii\db\ActiveRecord
{
    public $imageFile;
    public $cnt;

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
            [['name', 'class', 'theme', 'image_location', 'url'], 'required'],
            [['class', 'theme'], 'integer'],
            [['create_date'], 'safe'],
            [['name', 'image_location', 'url', 'lang'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'class' => 'Sinf',
            'theme' => 'Mavzu raqami',
            'image_location' => 'Image Location',
            'create_date' => 'Create Date',
            'url' => 'Video linki',
            'lang' => 'Tili',
        ];
    }

    /**
     * @return bool
     */
    public function upload()
    {
        if ($this->imageFile) {
            $this->imageFile->saveAs('../../frontend/web/img/videoImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            \yii\imagine\Image::crop(Yii::getAlias('@webroot') .'/../../frontend/web/img/videoImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension,350,233)
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
