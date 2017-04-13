<?php

use yii\db\Migration;

/**
 * Handles the creation of table `classes`.
 */
class m170413_113327_create_classes_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('classes', [
            'id' => $this->primaryKey(),
            'curses_id'=> $this->integer(),
            'lecture_id'=> $this->integer(),
            'data_day'=> $this->date(),
            'data_start_time'=> $this->dateTime(),
            'data_end_time'=>$this->dateTime(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('classes');
    }
}
