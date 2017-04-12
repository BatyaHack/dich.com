<?php

use yii\db\Migration;

/**
 * Handles adding group_id to table `users`.
 */
class m170412_114419_add_group_id_column_to_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('users', 'group_id', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        
    }
}
