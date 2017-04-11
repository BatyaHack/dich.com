<div class="curses-form">

    <?php $f = \yii\widgets\ActiveForm::begin();?>

    <?= \yii\helpers\Html::dropDownList('Curses', $curs, $curslist, ['class'=>'form-control']);?>

    <div class="from-group">
        <?= \yii\helpers\Html::submitButton('Отправить', ['class'=>'btn btn-success']);?>
    </div>

    <?php \yii\widgets\ActiveForm::end();?>
</div>
