<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Group */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-view">

    <h1><?= Html::encode($model->list_group) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Добавить ученика', ['addappr', 'id' => $model->id], ['class'=> 'btn btn-success'])?>
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
               'attribute' => 'list_group',
               'label' => "Группа"
            ],

        ],
    ]) ?>

</div>
