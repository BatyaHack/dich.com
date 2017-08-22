<?php

use yii\helpers\Url;

?>


<style>
    body{
        height: 100vh !important;
    }
    .wrap{
        width: 100%;
        height: 100%;
    }
    .herf_container{
        display: flex;
        width: 100%;
        flex-wrap: wrap;
        align-items: baseline;
        margin: 0 auto;
        justify-content: space-between;
    }

    .href_elem{
        text-align: center;
        margin: 0 20px 20px;
    }

    .link_elem{
        display: block;
        padding-top: 10px;

        color: #69abe0;
        font-size: 20px;
        text-decoration: none;
    }

    .link-wrapper{
        width: 100%;
        margin-bottom: 50px;

        display: flex;
        flex-wrap: wrap;
        align-items: baseline;
        justify-content: space-between;
    }

    .geme__title{
        margin-top: -50px;
    }

    @media (max-width: 426px){
        .link-wrapper{
            justify-content: center;
        }
    }
</style>


<h1 class="geme__title">Игры</h1>

<div class="herf_container">

    <div class="link-wrapper">
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
    </div>
    <div class="link-wrapper">
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
    </div>

    <!--<a href="<?=Url::toRoute('pen/index')?>">Кисти</a>-->
</div>