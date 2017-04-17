<?php

namespace app\modules\admin\controllers;

use app\models\Classes;
use app\models\Curses;
use app\models\Lesson;
use app\models\Subjects;
use app\models\Tabel;
use Yii;
use app\models\Users;
use app\models\UsersSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends Controller
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
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Users model.
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
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Users();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Users model.
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
     * Deletes an existing Users model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {

        //Удаление пользователя из табеля при удалении самого пользователя
        if( Tabel::find()->where("user_id=:user_id", [":user_id"=>$id])->all() != null) {
            $delete_table = Tabel::find()->where("user_id=:user_id", [":user_id" => $id])
                ->all();


            foreach ($delete_table as $k => $v) {
                $v->delete();
                $v->save();
            }
        }
        //================================================================





        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function  actionSetCurses($id)
    {
        $curs = $this->findModel($id);

        $curslist = ArrayHelper::map(Curses::find()->all(), 'id', 'name');
        $namecurs = $curs->curses->name;




        if(Yii::$app->request->isPost) {
            $cur = Yii::$app->request->post('Curses');
            if ($curs->saveCurses($cur)) {
                //увеличение школьников на предмете
                $lesson = Subjects::find()->where('name=:name',
                    [':name' => $curs->curses->lesson])->all();

                $lesson[0]->num_stu += 1;
                $lesson[0]->save();
                //==================================================//




                $classes = Classes::find()->where('curses_id=:curses_id', ['curses_id' => $cur])
                    ->all();
                $les = Lesson::find()->where('classes_id=:classes_id', [':classes_id' => $classes[0]->id])
                    ->all();

                if ($classes == null) {
                    echo 'нет расписания для данного курса';die;
                }

                //Создания табеля
                /* Я не знаю почему тут не очищается таблица! Хотя точно такой же код выше работает!!!!
                if (Tabel::find()->where("user_id=:user_id", [":user_id" => $id])->all() != null) {
                    $update = Tabel::find()->where("user_id=:user_id", [":user_id" => $id])
                        ->all();
                    print_r($update);
                    foreach ($update as $k=>$v)
                    {
                        $v->delete();
                        $v->save();
                    }
                }*/


                for ($i = 0, $n = 1; $i < $les[0]->data_lesson; $i++, $n++) {
                    $tabel = new Tabel();
                    $tabel->user_id = $curs->id;
                    $tabel->curses_id = $cur;
                    $tabel->date_lesson = $n;
                    $tabel->save();

                    //================================================================================================//
                }
                    return $this->redirect(['view', 'id' => $curs->id]);

            }
        }



        return $this->render('addcurses',[
            'curs' => $namecurs,
            'curslist' => $curslist
        ]);
    }


    public function actionTesttest()
    {
         $dataString = Yii::$app->request->post('id');
         $dataArry = explode(',', $dataString);


         $data_tabel = Tabel::find()->where("user_id=:user_id", ["user_id"=>$dataArry[0]])
                                    ->all();

        if($data_tabel != null)
        {
            for ($tab = 0, $dat = 1; $tab < count($data_tabel); $tab++, $dat++)
            {
                $data_tabel[$tab]->visitation = $dataArry[$dat];
                $data_tabel[$tab]->save();
            }
        }
        else {
            echo 'Что то пошло не так при исправлении табеля';
            die;
        }

        /*для успешного зевершения*/ return "OK";//не может вернуть массив!
    }
}
