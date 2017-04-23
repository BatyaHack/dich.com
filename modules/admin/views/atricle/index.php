<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AtricleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Atricles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atricle-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Atricle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description',
            'content',
            'date',
            [
                'format'=>'html',
                'label'=>'Image',
                'value'=>function($data){
                    return Html::img($data->getImage(), ['width' => 200]);
                }
            ],
            // 'img',
            // 'view_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
