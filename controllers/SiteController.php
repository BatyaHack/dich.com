<?php

namespace app\controllers;

use app\models\Atricle;
use app\models\Login;
use app\models\Signin;
use app\models\Users;
use app\models\Signup;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
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
     * @inheritdoc
     */

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->redirect('/web/site/signin');

        // build a DB query to get all articles with status = 1
        $query = Atricle::find();

        // get the total number of articles (but do not fetch the article data yet)
        $count = $query->count();

        // create a pagination object with the total count
        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>6]);

        // limit the query using the pagination and retrieve the articles
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index.php', [
            'articles' => $articles,
            'pagination' => $pagination
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('signin');
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about.php');
    }

    public function actionSignup(){
        Yii::$app->controller->layout = "/guest";
        $signup_model = new Signup();

        if(Yii::$app->request->post('Signup')){

            $signup_model->attributes = Yii::$app->request->post('Signup');

            if($signup_model->validate() && $signup_model->signup()){
                Yii::$app->user->login($signup_model->getUser());
                return $this->redirect('/web/admin/game');
            }
        }

        return $this->render('signup.php', ['model'=>$signup_model]);
    }

    public function actionSignin(){
        Yii::$app->controller->layout = "/guest";

        if(!Yii::$app->user->isGuest){
            return $this->redirect('/web/admin/game');
        }

        $signin_model = new Signin();

        if(Yii::$app->request->post('Signin')){

             $signin_model->attributes = Yii::$app->request->post('Signin');

             if($signin_model->validate()){
                 Yii::$app->user->login($signin_model->getUser());
                 return $this->redirect('/web/admin/game');
             }
        }

        return $this->render('signin.php', ['model'=>$signin_model]);
    }
}
