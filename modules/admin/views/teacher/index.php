<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Учителя';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить учителя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'name',
                'label' => 'Имя',
            ],
            [
                'attribute' => 'phone',
                'label' => 'Телефон',
            ],
            [
                'attribute' => 'login',
                'label' => 'Логин',
            ],
            [
                'attribute' => 'password',
                'label' => 'Пароль',
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
