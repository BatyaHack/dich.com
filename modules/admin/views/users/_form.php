<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Curses;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phone')->textInput()->label("Телефон") ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label("Имя") ?>

    <?= $form->field($model, 'date_of_birth')->textInput()->label("Дата рождения") ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label("Почта") ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true])->label("Логин") ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true])->label("Пароль") ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
