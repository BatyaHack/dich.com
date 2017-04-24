<!DOCTYPE html>
<html lang="ru">


<body>

<menu>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="#" alt="лого" width="200" height="100">
            </div>
            <div class="col-md-10 menu_button">
                <a href="/site">Абакус</a>
                <a href="#"  class="current_page">Семинары</a>
                <a href="/training">Обучение</a>
                <a href="/franchise">Франшиза</a>
                <a href="/contacts">Контакты абакус</a>
                <a href="/admin">Личный кабинет</a>
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
