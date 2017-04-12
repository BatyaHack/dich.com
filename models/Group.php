<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property integer $id
 * @property string $list_group
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['list_group'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'list_group' => 'List Group',
        ];
    }
}
