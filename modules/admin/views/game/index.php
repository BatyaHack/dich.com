<?php

use yii\helpers\Url;

?>


<style>
    .herf_container{
        display: flex;
        width: 1240px;
        flex-wrap: wrap;
        align-items: baseline;
        margin: 0 auto;
        justify-content: space-between;
    }

    .href_elem{
        margin-right: 100px;
        margin-bottom: 50px;
        text-align: center;
    }

    .link_elem{
        display: block;
        padding-top: 10px;

        color: black;
        font-size: 20px;
        text-decoration: none;
    }
</style>

<br>
<br>
<br>

<h1>Игры</h1>

<div class="herf_container">
    <div class="href_elem">
        <a href="<?=Url::toRoute('flash/index')?>"> <img src="<?=Url::to('@web/index_game/img/flashcart.png')?>" alt="game_icon" width="150"></a>
        <a class="link_elem" href="<?=Url::toRoute('flash/index')?>">Флеш карты</a>
    </div>

    <div class="href_elem">
        <a href="<?=Url::toRoute('multiplication/index')?>"> <img src="<?=Url::to('@web/index_game/img/multi_div.png')?>" alt="game_icon" width="150"></a>
        <a class="link_elem" href="<?=Url::toRoute('multiplication/index')?>">Умножение</a>
    </div>

    <div class="href_elem">
        <a href="<?=Url::toRoute('stolb/index')?>"><img src="<?=Url::to('@web/index_game/img/abakus.png')?>" alt="game_icon" width="150"></a>
        <a class="link_elem" href="<?=Url::toRoute('stolb/index')?>">Столбцы</a>
    </div>

    <div class="href_elem">
        <a href="<?=Url::toRoute('memory/index')?>"><img src="<?=Url::to('@web/index_game/img/numbers.png')?>" alt="game_icon" width="150"></a>
        <a class="link_elem" href="<?=Url::toRoute('memory/index')?>">Игра на память</a>
    </div>

    <div class="href_elem">
        <a href="<?=Url::toRoute('space/index')?>"><img src="<?=Url::to('@web/index_game/img/game1.png')?>" alt="game_icon" width="150"></a>
        <a class="link_elem" href="<?=Url::toRoute('space/index')?>">Космос</a>
    </div>

    <div class="href_elem">
        <a href="<?=Url::toRoute('abac/index')?>"><img src="<?=Url::to('@web/index_game/img/game2.png')?>" alt="game_icon" width="150"></a>
        <a class="link_elem" href="<?=Url::toRoute('abac/index')?>">Счеты</a>
    </div>

    <div class="href_elem">
        <a href="<?=Url::toRoute('speed/index')?>"><img src="<?=Url::to('@web/index_game/img/mental.png')?>" alt="game_icon" width="150"></a>
        <a class="link_elem" href="<?=Url::toRoute('speed/index')?>">Скорость</a>
    </div>

    <div class="href_elem">
        <a href="<?=Url::toRoute('slow/index')?>"><img src="<?=Url::to('@web/index_game/img/mental2.png')?>" alt="game_icon" width="150"></a>
        <a class="link_elem" href="<?=Url::toRoute('slow/index')?>">Скорость бета</a>
    </div>


    <!--<a href="<?=Url::toRoute('pen/index')?>">Кисти</a>-->
</div>