<?php

use yii\db\Migration;

/**
 * Handles the creation of table `teacher`.
 */
class m170413_065333_create_teacher_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('teacher', [
            'id' => $this->primaryKey(),
            'name'=> $this->string(),
            'phone'=> $this->integer(),
            'login'=> $this->string(),
            'password'=> $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('teacher');
    }
}
