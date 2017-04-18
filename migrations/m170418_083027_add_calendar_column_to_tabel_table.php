<?php

use yii\db\Migration;

/**
 * Handles adding calendar to table `tabel`.
 */
class m170418_083027_add_calendar_column_to_tabel_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('tabel','calendar', $this->date());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
    }
}
