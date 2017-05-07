<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\AbacusAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
< lang="<?= Yii::$app->language ?>">
<head>

	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>



        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="easeljs-0.8.2.min.js"></script>
        <script src="game5.js"></script>
        <style type="text/css">
            #gameCanvas
            {
                position: absolute;
                left: 0;
                top: 0;
            }
        </style>

    <style>

    </style>
    <body onload="init();">
    <canvas id="gameCanvas"></canvas>
    <div id="testBlock"></div>
    <img src="<?=\yii\helpers\Url::to('@web/abac/assets/blue_bead.png')?>" alt="" hidden>
    <img src="<?=\yii\helpers\Url::to('@web/abac/assets/candy_cane.png')?>" alt="" hidden>
    <img src="<?=\yii\helpers\Url::to('@web/abac/assets/pink_bead.png')?>" alt="" hidden>
    <img src="<?=\yii\helpers\Url::to('@web/abac/assets/play.png')?>" alt="" hidden>
    <img src="<?=\yii\helpers\Url::to('@web/abac/assets/quest3.png')?>" alt="" hidden>
    <img src="<?=\yii\helpers\Url::to('@web/abac/assets/reload.png')?>" alt="" hidden>

    </body>



    <?php $this->endBody() ?>
</body>

<?php $this->endPage() ?>

