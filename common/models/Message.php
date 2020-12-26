<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property boolean $readed
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $text
 * @property string $create_date
 */
class Message extends \yii\db\ActiveRecord
{
    public $captcha;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'text'], 'required'],
            [['text'], 'string'],
            [['create_date'], 'safe'],
            [['name', 'email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 14],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            [['readed'], 'integer'],
            [['captcha'], 'captcha'],
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
            'email' => 'Email',
            'phone' => 'Phone',
            'text' => 'Text',
            'readed' => 'Readed',
            'create_date' => 'Create Date',
        ];
    }
}
