<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lesson".
 *
 * @property integer $id
 * @property integer $classes_id
 * @property string $data_lesson
 */
class Lesson extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lesson';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['classes_id'], 'integer'],
            [['data_lesson'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'classes_id' => 'Classes ID',
            'data_lesson' => 'Data Lesson',
        ];
    }

    public function getCurses()
    {
        return $this->hasOne(Classes::className(), ['id' => 'classes_id']);
    }
}
