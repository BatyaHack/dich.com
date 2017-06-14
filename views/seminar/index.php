<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="ru">


<body>

<menu>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="<?=Url::to("@web/logo_site/logo.png")?>" alt="лого" width="200" height="100">
            </div>
            <div class="col-md-10 menu_button">
                <a href="<?=Url::toRoute(['site/index'])?>">Ментальная Арифметика</a>
                <a href="<?=Url::toRoute(['seminar/index'])?>"  class="current_page">Семинары</a>
                <a href="<?=Url::toRoute(['training/index'])?>">Обучение</a>
                <a href="<?=Url::toRoute(['franchise/index'])?>">Франшиза</a>
                <a href="<?=Url::toRoute(['contacts/index'])?>">Контакты</a>
                <a href="<?=Url::toRoute(['/admin'])?>">Личный кабинет</a>
            </div>
        </div>
    </div>
</menu>



<section id="dichCon">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>СЕМИНАРЫ</h2>
                <div class="row">
                    <div class="col-md-6">
                        <a class="btn btn-block" href="#">
                            Брейн-Фитнес
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-block" href="#">
                            Основы коррекции дислексии
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <h2>Меню сайта</h2>
                <div class="siteBarMenu">
                    <ul>
                        <li class="topList">Ментальная Арифметика
                            <ul class="dropList">
                                <li><a class="menu_link" href="/site/index">Главная</a></li>
                            </ul>
                        </li>
                        <li class="topList">СЕМИНАРЫ
                            <ul class="hiddenBlock">
                                <li><a class="menu_link" href="/web/seminar">Семинары</a></li>
                            </ul>
                        </li>
                        <li class="topList">ОБУЧЕНИЕ
                            <ul class="hiddenBlock">
                                <li><a class="menu_link" href="/web/training">Обучение</a></li>
                            </ul>
                        </li>
                        <li class="topList">ФРАНШИЗА
                            <ul class="hiddenBlock">
                                <li><a class="menu_link" href="/web/franchise">Франшиза</a></li>
                            </ul>
                        </li>
                        <li class="topList">ЛИЧНЫЙ КАБИНЕТ
                            <ul class="hiddenBlock">
                                <li><a class="menu_link" href="/web/admin">Личный кабинет</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <style>
                    .menu_link{
                        margin-top: 5px;
                        padding: 5px!important;
                        background: none !important;
                        color: #1a1a1a !important;
                    }

                    .menu_link:hover{
                        color: #953b39 !important;
                    }
                </style>

                <h2>Мы на канале YouTube</h2>
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/zaCBW5JQ_Zo" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>



<script>
    new WOW().init();

</script>
<script>
    $(document).ready(
        function() {
            $("html").niceScroll({
                cursorcolor: "#000"
            });
        }
    );

</script>
</body>

</html>
