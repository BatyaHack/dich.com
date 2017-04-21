<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClassesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="classes-index">

    <h1>Расписание</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Classes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //Добавим таблице свои строки
        /*
        'rowOptions'=> function ($model, $key, $index, $grid){
            $class = $index%2?'odd':'even';
            return[
                'key'=>$key,
                'index'=>$index,
                'class'=>$class
            ];
        },*/
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            [
                'attribute'=>'curses_id',
                'label'=>'Курс',
                'format'=>'text',
                'content' => function($data){
                    return $data->getCursesName();
                },
            ],
            [
                'attribute'=>'lecture_id',
                'label'=>'Аудитория',
                'format'=>'text',
                'content'=> function ($data){
                    return $data->getLectureName();
                }
            ],
            [
                'attribute'=>'data_day',
                'label'=>'Дни занятий',
                'format'=>'text',
                'content'=>function($data){
                    return $data->getDataDay($data->data_day);
                }
            ],
            //'data_start_time',
            // 'data_end_time',



            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
