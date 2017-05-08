<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Atricle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atricle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label('Заголовок') ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true])->label('Описание') ?>

    <?= $form->field($model, 'content')->textarea(['rows' => '15','maxlength' => true])->label('Содержание') ?>

    <?= $form->field($model, 'date')->textInput()->label('Дата пабликации') ?>

    <?= $form->field($model, 'view_id')->textInput()->label("ИД Вид") ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
