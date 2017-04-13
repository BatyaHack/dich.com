<?php

use yii\db\Migration;

/**
 * Handles the creation of table `lecture`.
 */
class m170413_065121_create_lecture_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('lecture', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('lecture');
    }
}
