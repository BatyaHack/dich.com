<?php

use yii\db\Migration;

/**
 * Handles adding curses to table `tabel`.
 */
class m170414_113834_add_curses_column_to_tabel_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('tabel','curses_id', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
    }
}
