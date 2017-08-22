<?php
namespace app\models;

use yii\base\Model;

class Signup extends Model
{
    public $name;
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required', 'message'=>'Укажите это поле'],
            ['email', 'email'],
            ['email', 'unique',
                'targetClass'=>'app\models\Users',
                'message'=>'Такая почта уже есть'],
            ['password',
                'string',
                'min'=>7,
                'max'=>16 ,
                'message'=>'Пароль от 7 до 16 символов'],
        ];
    }

    public function signup(){
        $user = new Users();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = sha1($this->password);
        return $user->save(false);
    }

    public function getUser(){
        return Users::findOne(['email'=>$this->email]);
    }
}