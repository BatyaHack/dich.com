<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tabel`.
 */
class m170414_104308_create_tabel_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tabel', [
            'id' => $this->primaryKey(),
            'user_id' =>$this->integer(),
            'date_lesson' =>$this->date(),
            'visitation' => $this->boolean(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tabel');
    }
}
