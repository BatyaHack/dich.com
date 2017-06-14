<?php
use yii\helpers\Url;
?>



<menu>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="<?=Url::to("@web/logo_site/logo.png")?>" alt="лого" width="200" height="100">
            </div>
            <div class="col-md-10 menu_button">
                <a href="<?=Url::toRoute(['site/index'])?>">Ментальная Арифметика</a>
                <a href="<?=Url::toRoute(['seminar/index'])?>">Семинары</a>
                <a href="<?=Url::toRoute(['training/index'])?>">Обучение</a>
                <a href="<?=Url::toRoute(['franchise/index'])?>">Франшиза</a>
                <a href="<?=Url::toRoute(['contacts/index'])?>">Контакты</a>
                <a href="<?=Url::toRoute(['/admin'])?>">Личный кабинет</a>
            </div>
        </div>
    </div>
</menu>
<!--Верхняя шпка-->




<section id="dichCon">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="news_title" style="margin-top: 45px"><?=$article->title?></h1>
                <h5 class="date"><?=$date?></h5>
                <img src="<?=$article->getImage()?>" alt="Картинка статьи" width="100%">
                <div class="content_article">
                    <p><?=$article->content?></p>
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
