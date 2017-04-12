<table>
    <?php foreach ($listuser as $user) {?>
    <tr>
        <td>
            <?=$user?>
        </td>
        <td>
            <?$user?>
        </td>
    </tr>
    <?php }?>
</table>
<?= \yii\helpers\Html::a('Добавить ученика', ['mytest', 'id' => $id], ['class' => 'btn btn-primary']) ?>