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
                <a href="<?=Url::toRoute(['site/index'])?>">Абакус</a>
                <a href="<?=Url::toRoute(['seminar/index'])?>">Семинары</a>
                <a href="<?=Url::toRoute(['training/index'])?>">Обучение</a>
                <a href="<?=Url::toRoute(['franchise/index'])?>">Франшиза</a>
                <a href="<?=Url::toRoute(['contacts/index'])?>">Контакты абакус</a>
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
                <h2>СЕМИНАРЫ</h2>
                <div class="row">
                    <h3>ЗАНЯТИЯ ПО МЕНТАЛЬНОЙ АРИФМЕТИКЕ</h3>
                    <h4>ДЛЯ ЗАПИСИ НА ЗАНЯТИЯ ЗАПОЛНИТЕ ФОРМУ ОБРАТНОЙ СВЯЗИ</h4>
                    <form class="enroll_form" action="#">
                        <div class="form-group">
                            <input class="btn btn-block" type="text" placeholder="Ваше имя">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-block" type="text" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-block" type="text" placeholder="Имя, фамилия ученика">
                        </div><div class="form-group">
                            <input class="btn btn-block" type="text" placeholder="Возраст ученика">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-block" type="text" placeholder="Номер телефона">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-block" type="text" placeholder="Ваш город">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-block" type="text" placeholder="Как вы о нас узнали?">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-block" type="text" placeholder="Укажите удобное для вас время">
                        </div>
                        <div class="form-group">
                            <select class="btn btn-block">
                                <option value="volvo">Ментальная арифметика</option>
                                <option value="saab">Брейнфитнес</option>
                                <option value="mercedes">Коррекция дислексии</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <h2>Меню сайта</h2>
                <div class="siteBarMenu">
                    <ul>
                        <li class="topList">АБАКУС
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
