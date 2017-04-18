<?php

use yii\db\Migration;

/**
 * Handles adding firstlesson to table `lesson`.
 */
class m170418_071858_add_firstlesson_column_to_lesson_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('lesson','first_lesson', $this->date());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
    }
}
