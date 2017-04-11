<?php

use yii\db\Migration;

/**
 * Handles the creation of table `curses`.
 */
class m170411_091912_create_curses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('curses', [
            'id' => $this->primaryKey(),
            'name'=> $this->string(),
            'lesson'=> $this->string(),
            'teacher'=> $this->string(),
            'date_start'=> $this->date(),
            'date_end' => $this->date(),
            'type_payment' => $this->string(),
            'teach_salary' => $this->integer(),
            'student_payment' => $this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('curses');
    }
}
