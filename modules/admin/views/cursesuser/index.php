<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CursesuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cursesusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cursesuser-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cursesuser', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'users_id',
            'curses_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
