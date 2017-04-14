<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabel".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $date_lesson
 * @property integer $visitation
 * @property integer $curses_id
 */
class Tabel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tabel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'visitation'], 'integer'],
            [['date_lesson'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'date_lesson' => 'Date Lesson',
            'visitation' => 'Visitation',
            'curses_id'=>'Curses_id'
        ];
    }

    public function gatUsers()
    {
        return $this->hasOne(Users::className(), ['id'=>'user_id']);
    }

    public function getCurses()
    {
        return $this->hasOne(Curses::className(), ['id'=>'curses_id']);
    }
}
