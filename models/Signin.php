<?php
namespace app\models;

use yii\base\Model;

class Signin extends Model
{
    public $email;
    public $password;

    public function rules()
    {
        return [
            ['password', 'required', 'message'=>'Заполните пароль'],
            ['email', 'required', 'message'=>'Заполните почту'],
            ['email', 'email'],
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword($attribute, $params){

        if(!$this->hasErrors()){
            $user = $this->getUser();

            if(!$user || ($user->password != sha1($this->password))){
                $this->addError($attribute, 'Неверный логин или пароль');
            }
        }
    }

    public function getUser(){
        return Users::findOne(['email'=>$this->email]);
    }
}