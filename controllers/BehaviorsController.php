<?php

namespace app\controllers;



use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;


class BehaviorsController extends Controller{

    /*
    public function behaviors()
    {
        return [
            'access'=>[
                'class'=>AccessControl::className(),
                'rules'=>[
                    [
                        'allow'=>true,
                        'controllers'=>['classes', 'curses', 'cursesuser', 'default', 'group', 'lecture', 'lesson',
                            'subjects', 'tabel', 'teacher', 'users'],
                        'actions' => ['*'],
                        'verbs'=>['GET', "POST"],
                        'roles'=>['@'],
                    ],
                ],
            ],
        ];
    */
}