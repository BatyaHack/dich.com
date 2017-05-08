<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LectureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Аудитория';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lecture-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить аудиторию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'name',
                'label' => 'Имя'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
