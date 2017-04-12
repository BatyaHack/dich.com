<?php

use yii\db\Migration;

/**
 * Handles the creation of table `group`.
 */
class m170412_113457_create_group_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('group', [
            'id' => $this->primaryKey(),
            'list_group' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('group');
    }
}
