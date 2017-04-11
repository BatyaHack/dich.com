<?php

use yii\db\Migration;

/**
 * Handles adding cursesid to table `users`.
 */
class m170411_110932_add_cursesid_column_to_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('users', 'cursesid', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('users', 'cursesid');
    }
}
