<?php

namespace app\modules\admin\controllers;
use app\controllers\BehaviorsController;

use Yii;
use app\models\Cursesuser;
use app\models\CursesuserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CursesuserController implements the CRUD actions for Cursesuser model.
 */
class GameController extends BehaviorsController
{
    public function actionIndex()
    {
        if(Yii::$app->user->isGuest)
        {
            Yii::$app->controller->layout = "/guest";
        }
        return $this->render('index');
    }
}
