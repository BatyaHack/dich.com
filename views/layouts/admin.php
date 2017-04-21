<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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
            'brandLabel' => 'My Company',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Home', 'url' => ['/admin/default/index']],
                ['label' => 'Ученики', 'url' => ['/admin/users/index']],
                ['label' => 'Курсы', 'url' => ['/admin/curses/index']],
                ['label' => 'Расписание', 'url' => ['/admin/classes/index']],
                ['label' => 'Предметы', 'url' => ['/admin/subjects/index']],
                ['label' => 'Группы', 'url' => ['/admin/group/index']],
                ['label' => 'Аудитории', 'url' => ['/admin/lecture/index']],
                ['label' => 'Учителя', 'url' => ['/admin/teacher/index']],
                ['label' => 'Логин', 'url' => ['/admin/admin/index']]
            ],
        ]);
        NavBar::end();
        ?>

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

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

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