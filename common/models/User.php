<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\validators\DateValidator;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $verification_token
 * @property string $email
 * @property string $auth_key

 * @property string $image_location
 * @property string $firstname
 * @property string $lastname
 * @property string $region
 * @property string $telegram_username

 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $admin
 * @property integer $test_limit
 * @property DateValidator $deadline
 * @property string $password write-only password
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;

    public $imageFile;
    public $captcha;
    public $password;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_DELETED]],
            ['username', 'trim'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],

            [['username', 'email', 'telegram_username', 'firstname', 'lastname', 'region', 'password'], 'required'],
            ['username', 'string', 'length' => [5, 15]],
            [['username', 'telegram_username', 'firstname', 'lastname', 'region'], 'match', 'pattern' => '/^[a-z]\w*$/i'],

            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
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
            'username' => 'username',
            'firstname' => Yii::t('main', 'Ism'),
            'lastname' => Yii::t('main', 'Familya'),
            'region' => Yii::t('main', 'Shahar yoki Tuman'),
            'password' => 'password',
            'password_hash' => 'password_hash',
            'email' => 'Email',
            'telegram_username' => Yii::t('main','Telegramdagi Username'),
            'image_location' => 'image',
            'deadline' => 'deadline',
            'test_limit' => 'test limit',
        ];
    }

    public function beforeSave($insert) {

        if ($insert) {
            $this->sendEmail($this);
        }

        return parent::beforeSave($insert);

    }

    /**
     * @return bool
     */
    public function upload()
    {
        if ($this->imageFile) {
            $this->imageFile->saveAs('img/userImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);
            \yii\imagine\Image::crop(Yii::getAlias('@webroot') .'/img/userImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension,120,120)
                ->save(Yii::getAlias('img/userImg/'. $this->imageFile->baseName . '1.' . $this->imageFile->extension), ['quality' => 90]);

            unlink(Yii::getAlias('@webroot') .'/img/userImg/'. $this->imageFile->baseName . '.' . $this->imageFile->extension);

            if ($this->image_location && is_file(Yii::getAlias('@webroot').str_replace('../', '/', $this->image_location))){
                unlink(Yii::getAlias('@webroot').str_replace('../', '/', $this->image_location));
            }
            $this->image_location = '/frontend/web/img/userImg/'. $this->imageFile->baseName . '1.' . $this->imageFile->extension;
            return true;
        } else {
            return false;
        }
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds user by verification email token
     *
     * @param string $token verify email token
     * @return static|null
     */
    public static function findByVerificationToken($token) {
        return static::findOne([
            'verification_token' => $token,
            'status' => self::STATUS_INACTIVE
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Generates new token for email verification
     */
    public function generateEmailVerificationToken()
    {
        $this->verification_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}
