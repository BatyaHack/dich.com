<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Subjects".
 *
 * @property integer $id
 * @property string $name
 * @property integer $num_cou
 * @property integer $num_stu
 */
class Subjects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Subjects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_cou', 'num_stu'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'num_cou' => 'Num Cou',
            'num_stu' => 'Num Stu',
        ];
    }
}
