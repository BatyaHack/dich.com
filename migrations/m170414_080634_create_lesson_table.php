<?php

use yii\db\Migration;

/**
 * Handles the creation of table `lesson`.
 */
class m170414_080634_create_lesson_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('lesson', [
            'id' => $this->primaryKey(),
            'classes_id' => $this->integer(),
            'data_lesson' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('lesson');
    }
}
