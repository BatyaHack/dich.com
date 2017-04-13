<?php

namespace app\modules\admin\controllers;

use app\models\Subjects;
use app\models\Users;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Yii;
use app\models\Curses;
use app\models\CursesSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CursesController implements the CRUD actions for Curses model.
 */
class CursesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Curses models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CursesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Curses model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Curses model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Curses();



        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            //добавление количество курсов в уроке
            $lesson = Subjects::find()->where('name=:name', ['name'=> $model->lesson])
                            ->all();

            $lesson[0]->num_cou += 1;
            $lesson[0]->save();


            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Curses model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Curses model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Curses model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Curses the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Curses::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionListuser($id)
    {
        $list_user = $this->findModel($id);
        $current_curs = $id;
        $cutuser = ArrayHelper::map($list_user->users, id, name);

        return $this->render('userslist', [
            'listuser' => $cutuser,
            'id' => $current_curs
        ]);
    }

    public function actionMytest($id)
    {
        $all_users = Users::find()->all();
        $all_users = ArrayHelper::map($all_users, id, name);

        if(Yii::$app->request->isPost)
        {
            $name = Yii::$app->request->post('name');

            $name = Users::find()
                ->where("id=:id", [":id"=>$name])
                ->all();


            if($name !=null && $name[0]->saveCurses($id))
            {
                return $this->redirect(['view', 'id'=>$id]);
            }
        }

        return $this->render('useradd', [
            'id' => $id,
            'all_users' => $all_users,
        ]);

    }
}

/*
    public function saveCurses($curses_id)
    {
        $curses = Curses::findOne($curses_id);

        if($curses != null)
        {
            $this->link('curses', $curses);
            return true;
        }
    }
 */
