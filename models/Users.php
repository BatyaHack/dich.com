<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

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
class Users extends \yii\db\ActiveRecord implements IdentityInterface
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


    public  function getCurses()
    {
        return $this->hasMany(Curses::className(), ['id'=>'curses_id'])
            ->viaTable('cursesuser', ['users_id'=>'id']);
    }

    public  function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }


    /*public function getCursesName()
    {
        $curs = $this->curses;
        return $curs ? $curs->name : '';
    }*/






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

    public function getCursesName($spliter)
    {

        $line = implode($spliter, $this->test('name'));
        return $line;
    }

    public function test($e)
    {

        $result_curses= [];
        for ($i=0; $i<count($this->curses); $i++)
        {
            $result_curses[$i] = $this->curses[$i]->$e;
        }
        return $result_curses;

    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }
}
