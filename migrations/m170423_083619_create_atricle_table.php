<?php

use yii\db\Migration;

/**
 * Handles the creation of table `atricle`.
 */
class m170423_083619_create_atricle_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('atricle', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'description'=>$this->string(),
            'content'=>$this->string(),
            'date'=>$this->date(),
            'img'=>$this->string(),
            'view_id'=>$this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('atricle');
    }
}
