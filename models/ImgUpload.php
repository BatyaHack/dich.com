<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


class ImgUpload extends Model
{

    public $image;


    /*public function rules()
    {
        return[
            [['image'], 'required'],
            [['image'], 'file', 'extension'=>'jpg,png']
        ];
    }*/

    //Создаем метод, который будет сохранять картинку на сервер(не в БД)
    public function imageUpload(UploadedFile $file, $currentImg)
    {

        $this->image = $file;

        if ($this->validate()) {
            //Если картинка уже существует, то удаляем ее

            $this->DeleteImg($currentImg);

            $fileName = strtolower(md5(uniqid($file->baseName)) . "." . $file->extension);

            $file->saveAs(Yii::getAlias('@web') . "uploads/" . $fileName);

            return $fileName;
        }
    }

    public function DeleteImg($currentImg)
    {
        if (file_exists(Yii::getAlias('@web') . "uploads/". $currentImg && $currentImg!=null)) {
            unlink(Yii::getAlias('@web') . "uploads/". $currentImg);
        }
    }
}