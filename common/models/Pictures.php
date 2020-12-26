<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pictures".
 *
 * @property int $id
 * @property string $image_location
 * @property string $comment
 * @property string $comment_uz
 * @property string $comment_ru
 * @property string $comment_en
 */
class Pictures extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pictures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment_uz'], 'required'],
            [['image_location', 'comment_uz', 'comment_ru', 'comment_en'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_location' => 'Location Image',
            'comment' => 'Comment',
            'comment_uz' => 'Comment Uz',
            'comment_ru' => 'Comment Ru',
            'comment_en' => 'Comment En',
        ];
    }

    /**
     * @return string
     */
    public function getComment(){
        switch (Yii::$app->language){
            case 'ru': return $this->comment_ru == null ? $this->comment_uz : $this->comment_ru ;break;
            case 'en': return $this->comment_en == null ? $this->comment_uz : $this->comment_en ;break;
            default   : return $this->comment_uz;break;
        }
    }

    /**
     * @return bool
     */
    public function upload()
    {
        if ($this->imageFile) {
            $this->imageFile->saveAs('../../frontend/web/img/pictures/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            \yii\imagine\Image::crop(Yii::getAlias('@webroot') .'/../../frontend/web/img/pictures/'. $this->imageFile->baseName . '.' . $this->imageFile->extension,1400,750)
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
