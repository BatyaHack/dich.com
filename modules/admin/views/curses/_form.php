<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Curses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="curses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Group::find()->all(), list_group, list_group))->label("Имя") ?>

    <?= $form->field($model, 'lesson')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Subjects::find()->all(), name, name))->label("Предмет") ?>

    <?= $form->field($model, 'teacher')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(), name, name))->label("Учителя") ?>

    <?= $form->field($model, 'date_start')->textInput()->label("Дата начала") ?>

    <?= $form->field($model, 'date_end')->textInput()->label("Дата конца") ?>

    <?= $form->field($model, 'type_payment')->dropDownList(['абонимент' =>'абонимент','наличька'=> 'наличька'])->label("Тип абонплаты") ?>

    <?= $form->field($model, 'teach_salary')->textInput()->label("ЗП учителя") ?>

    <?= $form->field($model, 'student_payment')->textInput()->label("Цена") ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
