<?php

namespace app\modules\admin\controllers;

use app\models\Curses;
use app\models\Lesson;
use Yii;
use app\models\Classes;
use app\models\ClassesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClassesController implements the CRUD actions for Classes model.
 */
class ClassesController extends Controller
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
     * Lists all Classes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClassesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Classes model.
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
     * Creates a new Classes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new Classes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $curses = Curses::find()->where('id=:id', [':id'=>$model->curses_id])
                ->all();




            //считаем количество пар
            function count_dow_in_range($startdate,$enddate,$dow) {


                global $dayWeeck, $lessen_day;

                /*$startdate -- unix timestamp, левая граница интервала
                $enddate -- unix timestamp, правая граница интервала
                $dow -- искомый день недели аналогично формату ф-ции date('w'), где вс=0, сб=6 */

                $i=0; /*счетчик искомого дня недели*/
                while($startdate<=$enddate) {
                    if(date('w',$startdate)==$dow) $i++;
                    $startdate+=86400;
                }
                return $i;
            }


            //Ищем первый нужный для нас день
            function find_first_day($startdate,$enddate,$lessen_day)
            {
                $find = $startdate;
                $dayWeeck = [
                    'Sunday',
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday'
                ];

                while($startdate<=$enddate) {
                    if(strftime('%A', $startdate) == $dayWeeck[$lessen_day])
                    {
                        $find = $startdate;
                        break;
                    }
                    $startdate+=86400;
                }
                return date("Y-m-d", $find);
            }






            $count_lesson = count_dow_in_range(strtotime($curses[0]->date_start),
                strtotime($curses[0]->date_end),$model->data_day);

            $first_day = find_first_day(strtotime($curses[0]->date_start),
                strtotime($curses[0]->date_end), $model->data_day);

            var_dump($first_day);


            $new_lesson = new Lesson();
            $new_lesson->classes_id = $model->id;
            $new_lesson->data_lesson = $count_lesson;
            $new_lesson->first_lesson = $first_day;
            $new_lesson->save();




            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Classes model.
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
     * Deletes an existing Classes model.
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
     * Finds the Classes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Classes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Classes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
