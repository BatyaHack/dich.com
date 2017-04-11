<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m170411_075320_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'phone'=> $this->integer(),
            'name'=> $this->string(),
            'date_of_birth' => $this->date(),
            'email' => $this->string(),
            'login' => $this->string(),
            'password' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
