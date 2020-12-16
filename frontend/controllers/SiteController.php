<?php
namespace frontend\controllers;

use common\models\Books;
use common\models\Count;
use common\models\Gallery;
use common\models\Message;
use common\models\News;
use common\models\Today;
use common\models\User;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\bootstrap4\ActiveForm;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['request-password-reset'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'developit\captcha\CaptchaAction',
                'type' => 'numbers', // 'numbers', 'letters' or 'default' (contains numbers & letters)
                'minLength' => 4,
                'maxLength' => 4,
            ],
        ];
    }


    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $news = News::find()->orderBy(['create_date'=>SORT_DESC])->limit(3)->all();
        $pictures = Gallery::find()->limit(6)->all();
        $count = Count::find()->all();
        return $this->render('index',[
            'news'=>$news,
            'pictures'=>$pictures,
            'count'=>$count
        ]);
    }

    public function actionContact(){
        $model = new Message();
        if ($model->load(Yii::$app->request->post())) {
            if  (Yii::$app->request->isAjax){
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }
            $model->create_date = date('Y-m-d H:i:s');
            if (Yii::$app->request->isPost && $model->save(false)) {
                return $this->redirect(Yii::$app->request->referrer);
            }
            echo '<pre>'; print_r($model->errors); die();

        }
    }

}
