<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Atricle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atricle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton("Установить картинку", ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
