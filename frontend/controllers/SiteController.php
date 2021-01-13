<?php
namespace frontend\controllers;

use common\models\Contact;
use common\models\Count;
use common\models\Documents;
use common\models\Gallery;
use common\models\Message;
use common\models\News;
use common\models\Slide;
use common\models\Trainer;
use common\models\Video;
use Yii;
use yii\bootstrap\ActiveForm;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
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
        $trainer = Trainer::find()->all();
        $contact = Contact::find()->one();
        $slides = Slide::find()->all();
        $videos = Video::find()->limit(6)->all();
        $documents = Documents::find()->orderBy(['create_date'=>SORT_DESC])->limit(5)->all();
        return $this->render('index',[
            'slides'=>$slides,
            'news'=>$news,
            'pictures'=>$pictures,
            'count'=>$count,
            'trainer'=>$trainer,
            'contact'=>$contact,
            'videos'=>$videos,
            'documents'=>$documents
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
