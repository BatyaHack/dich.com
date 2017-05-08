<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Atricle */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Atricles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atricle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Уст. изобр.', ['set-images', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'=>'title',
                'label'=>'Заголовок'
            ],
            [
                'attribute'=>'description',
                'label'=>'Описание'
            ],
            [
                'attribute'=>'content',
                'label'=>'Содержание'
            ],
            [
                'attribute'=>'date',
                'label'=>'Дата публикации'
            ],
            [
                'attribute'=>'img',
                'label'=>'Изображение'
            ],
            [
                'attribute'=>'view_id',
                'label'=>'ИД Вид'
            ],
        ],
    ]) ?>

</div>
