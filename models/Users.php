<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property integer $phone
 * @property string $name
 * @property string $date_of_birth
 * @property string $email
 * @property string $login
 * @property string $password
 * @property string $cursesid
 * @property string $capital
 * @property string $group_id
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone'], 'integer'],
            [['date_of_birth'], 'safe'],
            [['name', 'email', 'login', 'password'], 'string', 'max' => 255],
            ['email', 'email'],
            [['phone', 'date_of_birth', 'name', 'email', 'login', 'password'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
            'name' => 'Name',
            'date_of_birth' => 'Date Of Birth',
            'email' => 'Email',
            'login' => 'Login',
            'password' => 'Password',
            'cursesid' => 'Cursesid',
            'capital' => 'Capital',
            'group_id' => 'Group_id'
        ];
    }

    public function getCurses()
    {
        return $this->hasOne(Curses::className(), ['id' => 'cursesid']);
    }

    public  function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    public function saveCurses($curses_id)
    {
        $curses = Curses::findOne($curses_id);

        if($curses != null)
        {
            //снимаем средства со счета
            $this->capital = $this->capital - $curses->student_payment;
            $this->save();

            $this->link('curses', $curses);
            return true;
        }
    }

    public function saveGroup($group_id)
    {
        $this->group_id = $group_id;
        $this->save();
        return true;
    }
}
