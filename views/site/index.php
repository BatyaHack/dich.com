<?php
    use yii\bootstrap\Carousel;
    use yii\helpers\Url;
    use yii\widgets\LinkPager;
?>




<menu>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="<?=Url::to("@web/logo_site/logo.png")?>" alt="лого" width="200" height="100">
            </div>
            <div class="col-md-10 menu_button">
                <a href="/web/site">Абакус</a>
                <a href="/web/seminar">Семинары</a>
                <a href="/web/training">Обучение</a>
                <a href="/web/franchise">Франшиза</a>
                <a href="/web/contacts">Контакты абакус</a>
                <a href="/web/admin">Личный кабинет</a>
            </div>
        </div>
    </div>
</menu>

<header>
    <?php

    echo Carousel::widget ( [
        'items' => [
            [
                'content' => '<img src="/web/public/img/SliderBackground.jpg"/>',
                'caption' => '<h2>ДОБРО ПОЖАЛОВАТЬ В АБАКУС-ЦЕНТР</h2><p>ОБУЧЕНИЕ В НАШИХ ЦЕНТРАХ ВЕДЕТСЯ ПО СТАНДАРТАМ МЕЖДУНАРОДНОЙ 
                  АССОЦИАЦИИ МЕНТАЛЬНОЙ АРИФМЕТИКИ</p>
                  <a href="/web/enroll">ЗАПИСАТЬСЯ НА ПРОБНОЕ ЗАНЯТИЕ</a>',
                'options' => []
            ],
            [
                'content' => '<img src="/web/public/img/SliderBackground.jpg"/>',
                'caption' => '<h2>О МЕТОДИКЕ МЕНТАЛЬНОЙ АРИФМЕТИКИ</h2><p>ВЫСОКОЭФФЕКТИВНАЯ ПРОГРАММА РАЗВИТИЯ УМСТВЕННЫХ СПОСОБНОСТЕЙ
ПРИ ПОМОЩИ АРИФМЕТИЧЕСКИХ ВЫЧИСЛЕНИЙ НА СЧЕТАХ (АБАКУС, СОРОБАН)</p><a href="#">ПОДРОБНЕЕ</a>',
                'options' => []
            ],
            [
                'content' => '<img src="/web/public/img/SliderBackground.jpg"/>',
                'caption' => '<h2>СЕМИНАРЫ ДЛЯ ПРЕПОДАВАТЕЛЕЙ</h2><p>У НАС ВЫ МОЖЕТЕ ОБУЧИТЬСЯ ПО УНИКАЛЬНОЙ ПРОГРАММЕ «МЕНТАЛЬНАЯ 
                  АРИФМЕТИКА», АДАПТИРОВАННУЮ ПОД РФ И СНГ</p>
                  <a href="/web/contacts">ПОДРОБНЕЕ</a>',
                'options' => []
            ],
            [
                'content' => '<img src="/web/public/img/SliderBackground.jpg"/>',
                'caption' => '<h2>ПАРТНЕРСТВО С АБАКУС-ЦЕНТРОМ</h2><p>МЫ ОТКРЫТЫ ДЛЯ ТЕХ, КТО ХОЧЕТ РАБОТАТЬ С НАМИ</p>
                          <a href="/web/franchise">ПОДРОБНЕЕ</a>',
                'options' => []
            ]
        ],
        'options' => [
            'style' => 'width: px; height: 600px;' // Задаем ширину контейнера
        ]
    ]);?>
</header>



<section id="move">
    <div class="container">
        <div class="row">
            <div class="col-md-4"><iframe width="100%" height="315" src="https://www.youtube.com/embed/C1YAzUKlX7E" frameborder="0" allowfullscreen></iframe></div>
            <div class="col-md-4"><iframe width="100%" height="315" src="https://www.youtube.com/embed/C1YAzUKlX7E" frameborder="0" allowfullscreen></iframe></div>
            <div class="col-md-4">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/C1YAzUKlX7E" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>



<section id="news">
    <div class="container">
        <div class="row">
            <?php foreach ($articles as $article) { ?>
                <div class="col-md-4">
                    <h2><?=$article->title?></h2>
                    <img src="<?=$article->getImage()?>" alt="Картинка статьи" width="100%" height="240px">
                    <p><?=$article->description?></p>
                    <a href="<?= Url::toRoute(['news/index', 'id'=>$article->id]);?>">Подробнее</a>
                </div>
            <?php  }?>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <?php
            echo LinkPager::widget([
                'pagination' => $pagination,
            ]);
            ?>
        </div>
    </div>

</div>


<section id="dichCon">
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <h1>МЕНТАЛЬНАЯ АРИФМЕТИКА</h1>

                <h2>СЕКРЕТ КОРОЛЯ МАТЕМАТИКИ</h2>

                <p>Вы слышали про Карла Фридриха Гаусса? Его называют королем математики. Уже в начальной школе он мгновенно мог сосчитать сумму чисел от 1 до 100. До самой старости он производил большую часть вычислений в уме. К чему привели эти интеллектуальные способности? Гаусс оставил после себя фундаментальные знания в математике, механике, физике, астрономии и геодезии. А еще он свободно владел несколькими иностранными языками. Любил латинский язык и значительную часть своих трудов написал на латыни; любил английскую, французскую и русскую литературу. В возрасте 62 лет Гаусс начал изучать русский язык, чтобы ознакомиться с трудами Лобачевского, и вполне преуспел в этом деле. Возможно ли стать гением сегодня? Выучить более 1 иностранного языка, иметь хорошую память и быть внимательным к деталям? Традиционная система образования в основном направлена на развитие левого полушария, пошагово логического мышления. Если Вас интересует возможность наиболее полного раскрытия потенциал Вашего ребенка, мы предлагаем метод, которым пользуются в 56 странах мира 5 миллионов вундеркиндов (от США до Японии, от Канады до Австралии). Речь идет о ментальной арифметике.</p>


                <h2>ЧТО ТАКОЕ МЕНТАЛЬНАЯ АРИФМЕТИКА?</h2>

                <p class="quote"><b>Ментальная арифметика (абакус) – это готовая оригинальная система развития интеллекта. Абакус формирует умственные и творческие способности вашего ребенка. Такие как:</b></p>

                <p>УМСТВЕННЫЕ СПОСОБНОСТИ РАЗВИТИЕ ДЕТЕЙ ДОШКОЛЬНОГО И ШКОЛЬНОГО ВОЗРАСТА:</p>
                <p>
                    Память. Внимание. Быстрый счет. Межполушарное взаимодействие. Скорость мыслительных процессов.
                </p>
                <h2>
                    ТВОРЧЕСКИЕ СПОСОБНОСТИ
                </h2>
                <p>
                    Смекалка. Интуиция (6-е чувство). Нестандартные способы решения проблем. Творческие, познавательные и интеллектуальные способности. Что еще дает абакус: Повышение успеваемости в школе. Уверенность и самостоятельность. Успешность!!!
                </p>

                <h2>
                    КАК ЭТО РАБОТАЕТ
                </h2>
                <p>
                    Основной инструмент, применяемый во время обучения – это счеты. В Китае их называют «абак», в Японии – «соробан». На первом этапе ребенок использует счеты, на втором – начинается визуализация, а далее происходит магия – ребенок считает в уме (ментально), представляя счеты перед собой. Только представьте силу воображения и скорость мышления такого ребенка! Благодаря такой системе счета у детей развиваются синхронная работа обоих полушарий мозга.
                </p>

                <h2>
                    СРОК ОБУЧЕНИЯ
                </h2>
                <p>
                    Полный курс программы ментальной арифметики составляет 2-2,5 года. Первые результаты видны уже через 2 месяца занятий.
                </p>

                <h2>
                    ФОРМАТ ЗАНЯТИЙ
                </h2>


                <p>
                    Занятия проходят 1 раз в неделю по 3 академических часа. Плюс ежедневно по 15 минут для выполнения домашних заданий. Занятия проходят в увлекательной форме – с играми и физической активностью.
                </p>


                <h2>
                    ВОЗРАСТ
                </h2>

                <p>
                    Для максимального эффекта начинать занятия следует в возрасте 4-7 лет. Можно начать и в 16 лет, тогда заниматься придется чуть больше. Кстати, по этой программе можно заниматься даже взрослым. В Америке она используется для профилактики старческого слабоумия. Запишитесь на открытое занятие и попробуйте эффективную систему «Абакус» на своем ребенке. Платить за открытое занятие не надо.
                </p>

                <a href="/web/training">записаться на открытое занятие</a>
            </div>
        </div>
    </div>
</section>

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

<section id="lessonMessage">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>ЗАПИШИТЕСЬ НА ЗАНЯТИЕ ПРЯМО СЕЙЧАС</h2>
                <p>Первое занятие по Ментальной арифметике проходит бесплатно, позвоните нам и запишитесь уже сегодня!</p>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <a href="/web/training" class="btn btn-block">Запись на занятие</a>
            </div>
        </div>
    </div>
    <hr>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="nav_linck">
                    <a href="/web/site">Главная</a>
                    <a href="/web/training">Обучение</a>
                    <a href="/web/seminar">Семинары</a>
                    <a href="/web/franchise">Франшиза</a>
                    <a href="/web/contacts">Наши центры</a>
                    <a href="/web/contacts">Контакты</a>
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