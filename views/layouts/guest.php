<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => 'Ментальная арифметика'
            /*'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ]*/
        ]);
        if(!Yii::$app->user->isGuest){
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
//                ['label' => 'Игры', 'url' => ['/admin/game/index']],
                  Html :: a ( 'Logout' , [ '/site/logout' ], [ 'class' => 'btn btn-success add-margin' , 'data-method' => 'post' ])
                ],
            ]);
        } else {
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
//                ['label' => 'Игры', 'url' => ['/admin/game/index']],
//                ['label' => 'Выход', 'url' => [Url::to('/web/site/logout')]],
                ],
            ]);
        }
        NavBar::end();
        ?>
        <style>
            .add-margin{
                margin-top: 7px;
            }
        </style>
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <br>
            <br>
            <br>
            <?= $content ?>
        </div>
    </div>



    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
<?php
/**
 * Created by PhpStorm.
 * User: IlyaPC
 * Date: 11.04.2017
 * Time: 11:50
 */