<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AtricleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atricle-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить статью', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'title',
                'label' => 'Заголовок'
            ],
            [
                'attribute'=>'description',
                'label' => 'Описание'
            ],
            [
                'attribute'=>'content',
                'label' => 'Содержание'
            ],
            [
                'attribute'=>'date',
                'label' => 'Дата публикации'
            ],
            [
                'format'=>'html',
                'label'=>'Изображение',
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
