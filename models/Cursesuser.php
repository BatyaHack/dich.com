<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cursesuser".
 *
 * @property integer $id
 * @property integer $users_id
 * @property integer $curses_id
 *
 * @property Curses $curses
 * @property Users $users
 */
class Cursesuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cursesuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['users_id', 'curses_id'], 'integer'],
            [['curses_id'], 'exist', 'skipOnError' => true, 'targetClass' => Curses::className(), 'targetAttribute' => ['curses_id' => 'id']],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['users_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'users_id' => 'Users ID',
            'curses_id' => 'Curses ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurses()
    {
        return $this->hasOne(Curses::className(), ['id' => 'curses_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'users_id']);
    }
}
