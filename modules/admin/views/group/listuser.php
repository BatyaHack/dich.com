<p><?=$id?></p>



<?php $f = \yii\widgets\ActiveForm::begin();?>

<?= \yii\helpers\Html::dropDownList('name', null, $users, ['class'=>'form-control']);?>

<div class="form-group">
    <?= \yii\helpers\Html::submitButton('Отправить', ['class'=>'btn btn-success']);?>
</div>

<?php \yii\widgets\ActiveForm::end();?>
