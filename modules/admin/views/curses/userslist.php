<style>
    td, th{
        border: 2px solid black;
        padding: 10px 30px;
        font-size: 20px;
        text-align: center;
    }
</style>


<table>
    <?php $count = 1?>
    <tr ><th colspan="2">Ученики:</th></tr>
    <?php foreach ($listuser as $user) {?>
    <tr>
        <td>
            <b><?=$count?></b>
        </td>
        <td>
            <b><?=$user?></b>
        </td>

    </tr>
        <?php $count++ ?>
    <?php }?>
</table>
<!-- <?=  \yii\helpers\Html::a('Добавить ученика', ['mytest', 'id' => $id], ['class' => 'btn btn-primary']) ?>-->