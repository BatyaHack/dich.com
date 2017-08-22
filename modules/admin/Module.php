<?php

namespace app\modules\admin;
use Yii;
use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */

    public $layout = "/admin";
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init() //данная функция выполняется когда создается данный класс
    {

        parent::init();

    }


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => [],
                'rules' => [
                    [
                        'allow' => true,
                        'controllers' =>['admin/game', 'admin/abac','admin/flash', 'admin/memory', 'admin/multiplication',
                                         'admin/pen', 'admin/slow', 'admin/space', 'admin/speed', 'admin/stolb', 'admin/default'],
                        'actions' => [],
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'controllers'=>[],
                        'actions' => [],
                        'roles' => [''],
                    ],
                ],
            ],
        ];
    }
}
