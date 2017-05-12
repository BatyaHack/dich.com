<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public function actionIndex()
    {
        if(Yii::$app->user->isGuest)
        {
            Yii::$app->controller->layout = "/guest";
            $message = "Привет, гость!";
        }else{
            $message = "Привет, админ!";
        }
        return $this->render('index', [
            'message' => $message
        ]);
    }
}
