<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Предметы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subjects-index">

    <h1>Предметы</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать предмет', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'name',
                'label' => 'Имя'
            ],
            [
                'attribute' => 'num_cou',
                'label' => 'Кол-во курсов'
            ],
            [
                'attribute' => 'num_stu',
                'label' => 'Кол-во студентов'
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
