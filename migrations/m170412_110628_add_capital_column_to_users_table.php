<?php

use yii\db\Migration;

/**
 * Handles adding capital to table `users`.
 */
class m170412_110628_add_capital_column_to_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('users', 'capital', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {

    }
}