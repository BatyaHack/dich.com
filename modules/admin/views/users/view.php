<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Установить курс', ['set-curses', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'phone',
            'name',
            'date_of_birth',
            'email:email',
            'login',
            'password',
            [
                'attribute' => 'cursesid',
                'label' => 'Курсы',
                'format' => 'text',
                'value' => function($data) {
                    return $data->getCursesName('/');
                },
            ],
        ],
    ]) ?>


    <?php
        $fesites = \app\models\Tabel::find()->where("user_id=:user_id", ["user_id"=>$model->id])->all();
        $current_id = $model->id;
    ?>


    <p>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
        Посещения
        <table width="100%">
        <tr style="padding: 10px">
            <th style="background-color: #5cb85c">Номер занятия</th>
            <th style="background-color: #5cb85c">Был-небыл</th>
        </tr style="padding: 10px">
            <?php foreach ($fesites as $v) { ?>
                <tr>
                <?php if($v->curses_id != $oldGroyp) {?>
                    </tr><tr style="background-color: lemonchiffon">
                    <td colspan="2" style="text-align: center; padding: 10px;"><?=$v->curses->name?></td>
                <?php }?>
                    <tr>
                        <td style="background-color: #5cb85c"><?=$v->calendar?></td>
                        <td class="visibility"><input type="checkbox" class="visit" value="<?=$v->visitation?>"></td>
                    </tr>
                </tr>
            <?php $oldGroyp = $v->curses_id; }?>
        </table>



        <script>
            $(document).ready(function () {


                $('.visit').attr('checked', function () {
                    if ($(this).val()=='1') {
                        return 'checked';
                    }
                    else{
                        return;
                    }
                });


                $('.visibility').css('background-color', function () {
                    if($(this).children().prop('checked')){
                        return "#5cb85c";
                    }
                    else{
                        return 'red';
                    }
                });


                var dataArry = [];

                $('.visit').click(function () {

                    var leng_tabel = $('.visit').length;
                    dataArry[0] = <?=$current_id?>;

                    for (var i = 1; i < leng_tabel+1; i++) {
                        dataArry[i] = SaveData(i-1);
                    }

                    console.log(dataArry[0]);
                    console.log(dataArry[1]);
                    console.log(dataArry[2]);
                    console.log(dataArry[3]);
                    console.log(dataArry.length);




                    $.ajax(
                        {
                            type: 'POST',
                            url: 'http://dich.com/admin/users/testtest',
                            data: 'id=' + dataArry,
                            success: function (response) {
                                if(response === "OK")
                                {
                                    //походу тут надо разабрать какие то json данные
                                    location.reload();
                                }
                                else
                                    alert("Ошибка в запросе! Сервер вернул вот что: " + response);
                            }
                        }
                    );

                });


                function SaveData(i) {
                    if($('.visit').eq(i).prop('checked')){
                        return 1;
                    }
                    else{
                        return 0;
                    }
                }


                });
        </script>
    </p>
</div>
