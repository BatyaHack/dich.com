
<?php
    use yii\widgets\ActiveForm;
?>

<style>
    body{
        height: 100vh !important;
    }
    .middle-center{
        max-width: 600px;
        width: 100%;
        margin: auto;
        padding: 20px;
        background-color: white;
    }
    .wrap{
        width: 100%;
        height: 100%;
        background: url('http://luxfon.com/images/201203/luxfon.com_10227.jpg');
    }
</style>

<div class="middle-center">
    <h1>Логин</h1>
    <?php $form = ActiveForm::begin()?>

    <?=$form->field($model, 'email')->textInput()->label('Почта');?>
    <?=$form->field($model, 'password')->passwordInput()->label('Пароль')?>

    <div>
        <span>Еще не зарегестрировались?</span>
        <a href="/web/site/signup">Регистрация</a>
    </div>

    <div>
        <button class="btn btn-success">Отправить</button>
    </div>
</div>


<?php $form = ActiveForm::end()?>
