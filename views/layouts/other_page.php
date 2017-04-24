<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\OtherAsset::register($this);
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

<div class="wrap">



    <?=$content?>


    <section id="sendMessage">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>ЕСТЬ ВОПРОСЫ? ПИШИТЕ, МЫ ВАМ ОТВЕТИМ</h3>
                    <form action="#">
                        <div class="form-group">
                            <input class="btn btn-block" type="text" placeholder="Имя">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-block" type="text" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-block" type="text" placeholder="Телефон">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-block" type="text" placeholder="Вопрос">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Отправить">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="nav_linck">
                        <a href="#">Главная</a>
                        <a href="#">Обучение</a>
                        <a href="#">Семинары</a>
                        <a href="#">Франшиза</a>
                        <a href="#">Наши центры</a>
                        <a href="#">Контакты</a>
                    </div>

                    <p>2017. Ментальная арифметика Абакус | Курсы ментальной арифметики.</p>
                    <div class="social_linck">
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>


                </div>
            </div>
        </div>
    </footer>








    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
