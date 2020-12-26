<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $phone
 * @property string $location
 * @property string $location_url
 * @property string $mail
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone', 'location', 'mail'], 'required'],
            [['location_url'], 'string'],
            [['mail'],'email'],
            [['phone', 'mail','location'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
            'location' => 'Location',
            'location_url' => 'Location Url',
            'mail' => 'Mail',
        ];
    }
}
