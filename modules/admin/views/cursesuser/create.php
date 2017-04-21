<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cursesuser */

$this->title = 'Create Cursesuser';
$this->params['breadcrumbs'][] = ['label' => 'Cursesusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cursesuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
