<?php

namespace app\controllers;

use app\models\Atricle;
use app\models\Login;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


class NewsController extends Controller
{
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


    //Устанавливаем новый шаблон
    public $layout = 'other_page';

    public function actionIndex($id)
    {
        $article = Atricle::findOne($id);

        Yii::$app->formatter->locale = 'ru-RU'; //какой то завтык. НЕ ставит локаль :(
        $date = Yii::$app->formatter->asDate($article->date);

        return $this->render('index.php', [
            'article' => $article,
            'date' => $date,
        ]);
    }

    public static function actionGetTitleArticle()
    {
        $article = Atricle::find()->orderBy('id')->all();
        $article = array_reverse($article);
        $article = array_slice($article, 0, 11);
        return $article;
    }
}