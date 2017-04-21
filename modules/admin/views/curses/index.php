<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CursesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Curses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Curses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'name',
            [
                'attribute' => 'teacher',
                'filter' => function($data){
                    return $data->getTeacherName();
                },  /*Обязательно нужно задавать key!. Так как key сравнивается со значениями!*/
            ],
            'lesson',
            'student_payment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
