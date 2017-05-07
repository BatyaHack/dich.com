




<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\SpaceAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="easeljs-0.8.2.min.js"></script>
        <script src="game4.js"></script>
        <style>
            #gameCanvas
            {
                position: absolute;
                left: 0;
                top: 0;
            }
        </style>
    </head>
    <body onload="init();">
    <canvas id="gameCanvas"></canvas>
    <style>
        .panel{
            position: absolute;
            top: 300px;
            left: 500px;
            z-index: 0;
        }
        *{
            overflow: hidden;
        }
    </style>

    <?php echo Html::img('@web/space/assets/background2.jpg', ['width'=>'100%', 'height'=>'100%']) ?>
    </body>
    </html>



    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
















