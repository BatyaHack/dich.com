<menu>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="#" alt="лого" width="200" height="100">
            </div>
            <div class="col-md-10 menu_button">
                <a href="/home/index.html">Абакус</a>
                <a href="#">Семинары</a>
                <a href="/home/training/training.html">Обучение</a>
                <a href="/home/franchise/franchise.html">Франшиза</a>
                <a href="/home/contacts/contacts.html">Контакты абакус</a>
                <a href="#">Личный кабинет</a>
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
                        <li class="topList">АБАКУС
                            <ul class="dropList">
                                <li>Ссылка 1</li>
                                <li>Ссылка 2</li>
                                <li>Ссылка 3</li>
                            </ul>
                        </li>
                        <li class="topList">СЕМИНАРЫ
                            <ul class="hiddenBlock">
                                <li>Ссылка 1</li>
                                <li>Ссылка 2</li>
                                <li>Ссылка 3</li>
                            </ul>
                        </li>
                        <li class="topList">ОБУЧЕНИЕ
                            <ul class="hiddenBlock">
                                <li>Ссылка 1</li>
                                <li>Ссылка 2</li>
                                <li>Ссылка 3</li>
                            </ul>
                        </li>
                        <li class="topList">ФРАНШИЗА
                            <ul class="hiddenBlock">
                                <li>Ссылка 1</li>
                                <li>Ссылка 2</li>
                                <li>Ссылка 3</li>
                            </ul>
                        </li>
                        <li class="topList">ЛИЧНЫЙ КАБИНЕТ
                            <ul class="hiddenBlock">
                                <li>Ссылка 1</li>
                                <li>Ссылка 2</li>
                                <li>Ссылка 3</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <h2>Мы на канале YouTube</h2>
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/zaCBW5JQ_Zo" frameborder="0" allowfullscreen></iframe>
                <h2>Последние новости</h2>
            </div>
        </div>
    </div>
</section>
