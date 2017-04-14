<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tabel */

$this->title = 'Update Tabel: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tabels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tabel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
