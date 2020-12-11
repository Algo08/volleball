<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property int $user_id
 * @property int $news_id
 * @property string $text
 * @property int $reply_to
 * @property string $create_date
 *
 * @property User $uSER
 * @property Comments[] rEPLYCOMMENTS
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'news_id', 'text', 'create_date'], 'required'],
            [['user_id', 'news_id', 'reply_to'], 'integer'],
            [['text'], 'string'],
            [['create_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'news_id' => 'News ID',
            'text' => 'Text',
            'reply_to' => 'Reply To',
            'create_date' => 'Create Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUSER()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }


    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public function getREPLYCOMMENTS()
    {
        return Comments::find()->where(['reply_to'=>$this->id])->all();
    }
}
