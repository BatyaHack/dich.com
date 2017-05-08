<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Curses */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Curses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Просмотреть студентов', ['listuser', 'id'=> $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
                'attribute' => 'name',
                'label' => 'Имя',
            ],
            [
                'attribute' => 'lesson',
                'label' => 'Предмет',
            ],
            [
                'attribute' => 'teacher',
                'label' => 'Учитель',
            ],
            [
                'attribute' => 'date_start',
                'label' => 'Дата начала',
            ],
            [
                'attribute' => 'date_end',
                'label' => 'Дата конца',
            ],
            [
                'attribute' => 'type_payment',
                'label' => 'Цена',
            ],
            [
                'attribute' => 'teach_salary',
                'label' => 'ЗП учителя',
            ],


        ],
    ]) ?>

</div>
