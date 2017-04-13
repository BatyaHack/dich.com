<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property integer $id
 * @property string $name
 * @property integer $phone
 * @property string $login
 * @property string $password
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone'], 'integer'],
            [['name', 'login', 'password'], 'string', 'max' => 255],
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
            'phone' => 'Phone',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }
}
