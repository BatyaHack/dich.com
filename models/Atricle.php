<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atricle".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $date
 * @property string $img
 * @property integer $view_id
 */
class Atricle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'atricle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['view_id'], 'integer'],
            [['title', 'description', 'content', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'date' => 'Date',
            'img' => 'Img',
            'view_id' => 'View ID',
        ];
    }

    public function saveNameImg($nameImg)
    {
        $this->img = $nameImg;
        return $this->save(false);
    }

    public function deleteImg()
    {
        $imgUpload = new ImgUpload();
        $imgUpload->DeleteImg($this->img);
    }

    //Событие которое срабатывает перед удалением модели

    public function beforeDelete()
    {
        $this->deleteImg();
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }


    //Вывод картинки
    public function getImage()
    {

       // return ($this->img) ? "/web/uploads/" . $this->img : "/uploads/" . 'no-img.jpg';



        return ($this->img) ? ("/web/" . "uploads/" . $this->img)
            : ("/web/" . "uploads/" . 'no-img.jpg');
    }
}
