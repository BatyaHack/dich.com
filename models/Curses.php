<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curses".
 *
 * @property integer $id
 * @property string $name
 * @property string $lesson
 * @property string $teacher
 * @property string $date_start
 * @property string $date_end
 * @property string $type_payment
 * @property integer $teach_salary
 * @property integer $student_payment
 */
class Curses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'curses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_start', 'date_end'], 'safe'],
            [['teach_salary', 'student_payment'], 'integer'],
            [['name', 'lesson', 'teacher', 'type_payment'], 'string', 'max' => 255],
            [['date_start', 'date_end', 'teach_salary', 'student_payment','name', 'lesson', 'teacher', 'type_payment'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'lesson' => 'Lesson',
            'teacher' => 'Teacher',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
            'type_payment' => 'Type Payment',
            'teach_salary' => 'Teach Salary',
            'student_payment' => 'Student Payment',
        ];
    }

    public  function getUsers()
    {
        //return $this->hasMany(Users::className(), ['cursesid'=>'id']);
        return $this->hasMany(Users::className(), ['id'=>'users_id'])
            ->viaTable('cursesuser', ['curses_id'=>'id']);
    }

    public function getClasses()
    {
        return $this->hasMany(Classes::className(), ['curses_id'=>'id']);
    }

    public function getTeacherName()
    {
       return [10, 20];
    }
}
