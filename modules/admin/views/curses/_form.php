<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Curses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="curses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Group::find()->all(), list_group, list_group)) ?>

    <?= $form->field($model, 'lesson')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Subjects::find()->all(), name, name)) ?>

    <?= $form->field($model, 'teacher')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Teacher::find()->all(), name, name)) ?>

    <?= $form->field($model, 'date_start')->textInput() ?>

    <?= $form->field($model, 'date_end')->textInput() ?>

    <?= $form->field($model, 'type_payment')->dropDownList(['абонимент' =>'абонимент','наличька'=> 'наличька']) ?>

    <?= $form->field($model, 'teach_salary')->textInput() ?>

    <?= $form->field($model, 'student_payment')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
