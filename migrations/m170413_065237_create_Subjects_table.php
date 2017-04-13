<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Subjects`.
 */
class m170413_065237_create_Subjects_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('Subjects', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'num_cou'=> $this->integer(),
            'num_stu'=> $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('Subjects');
    }
}
