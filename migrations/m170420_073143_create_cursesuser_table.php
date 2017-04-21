<?php

use yii\db\Migration;

/**
 * Handles the creation of table `cursesuser`.
 */
class m170420_073143_create_cursesuser_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('cursesuser', [
            'id' => $this->primaryKey(),
            'users_id' => $this->integer(),
            'curses_id'=>$this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('cursesuser');
    }
}
