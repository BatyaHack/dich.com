<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classes".
 *
 * @property integer $id
 * @property integer $curses_id
 * @property integer $lecture_id
 * @property string $data_day
 * @property string $data_start_time
 * @property string $data_end_time
 *
 * @property Lecture $lecture
 * @property Curses $curses
 */
class Classes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'classes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['curses_id', 'lecture_id'], 'integer'],
            [['data_day', 'data_start_time', 'data_end_time'], 'safe'],
            [['lecture_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lecture::className(), 'targetAttribute' => ['lecture_id' => 'id']],
            [['curses_id'], 'exist', 'skipOnError' => true, 'targetClass' => Curses::className(), 'targetAttribute' => ['curses_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'curses_id' => 'Curses ID',
            'lecture_id' => 'Lecture ID',
            'data_day' => 'Data Day',
            'data_start_time' => 'Data Start Time',
            'data_end_time' => 'Data End Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLecture()
    {
        return $this->hasOne(Lecture::className(), ['id' => 'lecture_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurses()
    {
        return $this->hasOne(Curses::className(), ['id' => 'curses_id']);
    }


    public  function  getLectureName()
    {
        $lecture = $this->lecture;

        return $lecture ? $lecture->name : 'Неназначенно';
    }


    public  function getCursesName()
    {
        $curses = $this->curses;

        return $curses ? $curses->name : '';
    }

    public function  getDataDay($day)
    {
        $CurrentDay = [
            'Воскресенье',
            'Понедельник',
            'Вторник',
            'Среда',
            'Четверг',
            'Пятница',
            'Суббота',
        ];

        return $CurrentDay[$day];
    }
}
