<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\FlashAsset::register($this);
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

    <style>
        #abakus_1number_0,
        #abakus_1number_1,
        #abakus_1number_2,
        #abakus_1number_3,
        #abakus_1number_4,
        #abakus_1number_5,
        #abakus_1number_6,
        #abakus_1number_7,
        #abakus_1number_8,
        #abakus_1number_9,
        #abakus_1number_10{
            font-size: 60px !important;
        }
    </style>

    <html style = "height: 100% ; width:100%; ">

    <head>
        <meta charset="utf-8">
        <title>Флэш карты</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <style>
            .white_style{
                background-color: white;
                opacity: 0.99;
                border-width:0;
                color: black;
                box-shadow: none;
            }
            .black_style8{
                background-color: black;
                opacity: 0.8;
                border-width:0;
                color: white;
            }
            .black_style{
                background-color: black;
                opacity: 0.9;
                border-width:0;
                color: white;
                box-shadow: none;
            }
        </style>
    </head>


    <html style = "height: 100% ; width:100%; ">

    <head>
        <meta charset="utf-8">
        <title>Флэш карты</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="/static/css/bootstrap4.css" media="screen">
        <style>
            .white_style{
                background-color: white;
                opacity: 0.99;
                border-width:0;
                color: black;
                box-shadow: none;
            }
            .black_style8{
                background-color: black;
                opacity: 0.8;
                border-width:0;
                color: white;
            }
            .black_style{
                background-color: black;
                opacity: 0.9;
                border-width:0;
                color: white;
                box-shadow: none;
            }
        </style>
    </head>
    <body style = "background-image: url(/static/custom/css/fon_1.jpg); background-position: center center; background-repeat: no-repeat  ; background-size: cover " >
    <div id = "modal_settings" class="modal ">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="close_huese()">&times;</button>
                    <button onclick = "restart(); return false;"  class="close" tabindex = "-1" type="button" style=" margin-right:20px;"   >♻   </button>
                    <h4 class="modal-title "> Настройки</h4>
                </div>

                <div class="panel-body col-lg-7 col-md-7 col-sm-7">
                    <div class="panel-body" style=" text-align:center"> <h5>Правильность выполнения </h5>
                        <div id = "pravilno_text" style=" text-align:center">  0 из 0 (0%) </div>
                        <div  class="progress progress-striped active">
                            <div  id = "pravilno_progress" class="progress-bar progress-bar-success" style="width: 0"></div>
                        </div>
                    </div>

                    <div  class="panel-body" style=" text-align:center"> <h5>Количество цифр </h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn btn-default btn-sm" onclick = "kolcifr_minus(); return false;">-</a>
                            <a  class="btn btn-default active btn-sm" id="kolcifr_tablo" onclick = "kolcifr_tablo_f();return false;">2</a>
                            <a  class="btn btn-default btn-sm" onclick = "kolcifr_plus() ;return false;">+</a>
                        </div>
                    </div>


                </div>

                <div class="panel-body col-lg-5 col-md-5 col-sm-5">
                    <div class="panel-body" style=" text-align:center"> <h5> Интервал (сек)</h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn btn-default btn-sm" onclick = "skorost_minus(); return false;">-</a>
                            <a  class="btn btn-default active btn-sm" id="Skorost_tablo" onclick = "skorost_1();return false;">1</a>
                            <a  class="btn btn-default btn-sm" onclick = "skorost_plus() ;return false;">+</a>
                        </div>
                    </div>
                    <div class="panel-body" style=" text-align:center"> <h5> Количество импульсов</h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn btn-default btn-sm" onclick = "kolimpuls_minus(); return false;">-</a>
                            <a  class="btn btn-default active btn-sm" id="kolimpuls_tablo" onclick = "kolimpuls_f();return false;">1</a>
                            <a  class="btn btn-default btn-sm" onclick = "kolimpuls_plus() ;return false;">+</a>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="panel-body">
                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="close_huese()">Применить </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default black_style" id = "black_style_1" style="margin-bottom:0; z-index:2">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" onclick = "button_nastroyki_f(); return false;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button onclick = "customChangeFon(); return false;"  class="navbar-toggle collapsed" data-toggle="collapse"  tabindex = "-1" type="button" style="margin:0; padding-top:4; padding-bottom:0; font-size:30"> ☻   </button>
                <a id = "navbar_logo"  tabindex = "-1" class="navbar-brand" href="/games" style = "width: 110px; background:url(/static/custom/css/logo_rus.png) ; background-position: center center; background-repeat: no-repeat; background-size: contain  "></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a tabindex = "-1" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Сложность   (<span id = 'navbar_kolcifr'style = "font-size:12">2</span>)</a>
                        <ul class="dropdown-menu black_style" role="menu" id = "black_style_2">
                            <li><a href="" onclick = "kolcifr_f(1); abakus_mode=false; create_abakus(Kolekran); $('#navbar_kolcifr').html('1'); return false;" >1</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "kolcifr_f(2); abakus_mode=false; create_abakus(Kolekran); $('#navbar_kolcifr').html('2'); return false;">2</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "kolcifr_f(3); abakus_mode=false; create_abakus(Kolekran); $('#navbar_kolcifr').html('3'); return false;" >3</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "kolcifr_f(4); abakus_mode=false; create_abakus(Kolekran); $('#navbar_kolcifr').html('4'); return false;">4</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "kolcifr_f(5); abakus_mode=false; create_abakus(Kolekran); $('#navbar_kolcifr').html('5'); return false;">5</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "kolcifr_f(6); abakus_mode=false; create_abakus(Kolekran); $('#navbar_kolcifr').html('6'); return false;">6</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "kolcifr_f(7); abakus_mode=false; create_abakus(Kolekran); $('#navbar_kolcifr').html('7'); return false;">7</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a tabindex = "-1" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Интервал <span id = 'navbar_interval' style = "font-size:12">(1сек)</span></a>
                        <ul class="dropdown-menu black_style" role="menu" id = "black_style_4">
                            <li><a href="" onclick = "$('#Skorost_tablo').html(0.1); $('#navbar_interval').html( '(0.1 сек)'); interval = 100; return false;" >0.1 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#Skorost_tablo').html(0.2); $('#navbar_interval').html( '(0.2 сек)'); interval = 200; return false;" >0.2 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#Skorost_tablo').html(0.4); $('#navbar_interval').html( '(0.4 сек)'); interval = 400; return false;" >0.4 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#Skorost_tablo').html(0.7); $('#navbar_interval').html( '(0.7 сек)'); interval = 700; return false;" >0.7 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#Skorost_tablo').html(1); $('#navbar_interval').html( '(1 сек)'); interval = 1000; return false;" >1 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#Skorost_tablo').html(1.5); $('#navbar_interval').html( '(1.5 сек)'); interval = 1500; return false;" >1.5 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#Skorost_tablo').html(2); $('#navbar_interval').html( '(2 сек)'); interval = 2000; return false;" >2 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#Skorost_tablo').html(3); $('#navbar_interval').html( '(3 сек)'); interval = 3000; return false;" >3 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#Skorost_tablo').html(5); $('#navbar_interval').html( '(5 сек)'); interval = 5000; return false;" >5 сек</a></li>
                        </ul>
                    </li>




                    <li class="dropdown">
                        <a tabindex = "-1" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Кол-во импульсов  (<span id = 'navbar_kolimpuls'style = "font-size:12">1</span>)</a>
                        <ul class="dropdown-menu black_style" role="menu" id = "black_style_5">
                            <li><a href="" onclick = "Kolimpuls=1; $('#navbar_kolimpuls').html('1'); return false;" >1</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "Kolimpuls=2; $('#navbar_kolimpuls').html('2');return false;" >2</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "Kolimpuls=3; $('#navbar_kolimpuls').html('3'); return false;" >3</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "Kolimpuls=4; $('#navbar_kolimpuls').html('4'); return false;" >4</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "Kolimpuls=5; $('#navbar_kolimpuls').html('5'); return false;" >5</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "Kolimpuls=6; $('#navbar_kolimpuls').html('6'); return false;" >6</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "Kolimpuls=7; $('#navbar_kolimpuls').html('7'); return false;" >7</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "Kolimpuls=8; $('#navbar_kolimpuls').html('8'); return false;" >8</a></li>
                        </ul>
                    </li>



                    <li class="dropdown" id="kol_abakus">
                        <a tabindex = "-1" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Кол-во абакусов  (<span id = 'navbar_kolekran' style = "font-size:12">1</span>)</a>
                        <ul class="dropdown-menu black_style" role="menu" id = "black_style_6">
                            <li><a href="" onclick = "abakus_mode=false; rejim=1; abakus_mode=false; kolcifr_f(2); $('#navbar_kolcifr').html('2'); $('#navbar_rejim').html(' Обычный'); create_abakus(1); $('#navbar_kolekran').html('1'); return false;" >1</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "abakus_mode=false; rejim=1; abakus_mode=false; kolcifr_f(2); $('#navbar_kolcifr').html('2'); $('#navbar_rejim').html(' Обычный'); create_abakus(2); $('#navbar_kolekran').html('2'); return false;" >2</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "abakus_mode=false; rejim=1; abakus_mode=false; kolcifr_f(2); $('#navbar_kolcifr').html('2'); $('#navbar_rejim').html(' Обычный'); create_abakus(3); $('#navbar_kolekran').html('3');return false;" >3</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "abakus_mode=false; rejim=1; abakus_mode=false; kolcifr_f(2); $('#navbar_kolcifr').html('2'); $('#navbar_rejim').html(' Обычный'); create_abakus(4); $('#navbar_kolekran').html('4'); return false;" >4</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "abakus_mode=false; rejim=1; abakus_mode=false; kolcifr_f(2); $('#navbar_kolcifr').html('2'); $('#navbar_rejim').html(' Обычный'); create_abakus(5); $('#navbar_kolekran').html('5'); return false;" >5</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "abakus_mode=false; rejim=1; abakus_mode=false; kolcifr_f(2); $('#navbar_kolcifr').html('2'); $('#navbar_rejim').html(' Обычный'); create_abakus(6); $('#navbar_kolekran').html('6'); return false;" >6</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "abakus_mode=false; rejim=1; abakus_mode=false; kolcifr_f(2); $('#navbar_kolcifr').html('2'); $('#navbar_rejim').html(' Обычный'); create_abakus(7); $('#navbar_kolekran').html('7'); return false;" >7</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "abakus_mode=false; rejim=1; abakus_mode=false; kolcifr_f(2); $('#navbar_kolcifr').html('2'); $('#navbar_rejim').html(' Обычный'); create_abakus(8); $('#navbar_kolekran').html('8'); return false;" >8</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a tabindex = "-1" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Режим  (<span id = 'navbar_rejim'style = "font-size:12"> Обычный</span>)</a>
                        <ul class="dropdown-menu black_style" role="menu" id = "black_style_7">
                            <li><a href="" onclick = "rejim=1; abakus_mode=false; kolcifr_f(2); $('#navbar_kolcifr').html('2'); create_abakus(1); $('#navbar_rejim').html(' Обычный'); return false"> Обычный</a></li>
                            <li class="divider"></li>
                            <!--             <li><a href="" onclick = "rejim=2; abakus_mode=false;  $('#navbar_rejim').html('Подряд'); return false" >Подряд</a></li>
                                        <li class="divider"></li>
                                        <li><a href="" onclick = "rejim=3; abakus_mode=false; $('#navbar_rejim').html('Разброс'); return false" >Разброс</a></li>
                                        <li class="divider"></li> -->

                            <!--             <li><a href="" onclick = "rejim=4;return false" >Одновременно</a></li>
                                        <li class="divider"></li> -->
                            <li><a href="" onclick = "abakus_mode=true; Kolcifr=13; create_abakus(1); $('#navbar_rejim').html(' Большой Абакус'); $('#navbar_kolcifr').html('13'); return false" > Большой Абакус</a></li>
                        </ul>
                    </li>
                </ul>


                <ul class="nav navbar-nav navbar-right">

                    <ul class="nav navbar-nav hidden-md hidden-sm hidden-xs" >
                        <div id = "navbar_pravilno_text" style=" text-align:center"> Правильно 0 из 0 (0%)   </div>
                        <div  class="progress progress-striped active black_style" id = "black_style_8" style="margin-bottom:0; ">
                            <div  id = "navbar_pravilno_progress" class="progress-bar progress-bar-success" style="width: 0%"></div>
                        </div>
                    </ul>
                    <div class="btn-group">
                        <a onclick = "change_style(); return false;"  class="btn btn-sm  btn-default black_style"  id = "black_style_9"  tabindex = "-1" style = "font-size: 25px;  border-width:0; box-shadow: none; ">S   </a>
                        <a onclick = "customChangeFon(); return false;"  class="btn btn-sm btn-default black_style" id = "black_style_10" tabindex = "-1" style = "font-size: 25px;  border-width:0; box-shadow: none; ">☻   </a>
                        <a  tabindex = "-1"  class="btn btn-sm btn-default black_style" id = "black_style_11" onclick = "restart(); return false;" style = "font-size: 25px;  border-width:0; box-shadow: none; ">♻</a>
                        <a  tabindex = "-1" id = "button_start" class="btn btn-sm btn-default black_style"   onclick = "start(); return false;" style = "font-size: 25px;  border-width:0; box-shadow: none; ">►</a>
                        <a  tabindex = "-1"  class="btn btn-sm btn-default black_style" id = "black_style_12" onclick = "button_nastroyki_f(); return false;"style = "font-size: 25px;  border-width:0; box-shadow: none; ">&#9776</a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>


    <div  class="row"  style="margin:auto;">
        <div id = "window_pusto_left" class="col-lg-4 col-md-4 col-sm-4 col-xs-1"> </div>
        <div id="main_window" style="margin:0; padding:0"> </div>
    </div>
    <div id = "keyboard" class="row hidden" style = "opacity:0.9; margin:0; padding:0">
        <div id ="keyboard_empty" > </div>
        <div id="keyboard_in" class="col-xs-12 col-sm-12">
            <div class="btn-group btn-group-justified">
                <a  onclick = "if (status==2) answerbox_1.value += 1; return false;" id= "keyboard_1" class="black_style btn btn-default  " ><b>1</b></a>
                <a  onclick = "if (status==2) answerbox_1.value += 2; return false;" id= "keyboard_2" class="black_style btn btn-default  " ><b>2</b></a>
                <a  onclick = "if (status==2) answerbox_1.value += 3; return false;" id= "keyboard_3" class="black_style btn btn-default  " ><b>3</b></a>
            </div>
            <div class="btn-group btn-group-justified">
                <a  onclick = "if (status==2) answerbox_1.value += 4; return false;" id= "keyboard_4" class="black_style btn btn-default  " ><b>4</b></a>
                <a  onclick = "if (status==2) answerbox_1.value += 5; return false;"  id= "keyboard_5" class="black_style btn btn-default  " ><b>5</b></a>
                <a  onclick = "if (status==2) answerbox_1.value += 6; return false;"  id= "keyboard_6" class="black_style btn btn-default  " ><b>6</b></a>
            </div>
            <div class="btn-group btn-group-justified">
                <a  onclick = "if (status==2) answerbox_1.value += 7; return false;"  id= "keyboard_7" class="black_style btn btn-default  " ><b>7</b></a>
                <a  onclick = "if (status==2) answerbox_1.value += 8; return false;"  id= "keyboard_8" class="black_style btn btn-default  " ><b>8</b></a>
                <a  onclick = "if (status==2) answerbox_1.value += 9; return false;"  id= "keyboard_9" class="black_style btn btn-default  " ><b>9</b></a>
            </div>
            <div class="btn-group btn-group-justified">
                <a  onclick = "start(); return false;"  id= "button_calc_start" class="black_style btn btn-default  " ><b>►</b></a>
                <a  onclick = "if (status==2) answerbox_1.value += 0; return false;"  id= "keyboard_0" class="black_style btn btn-default  " ><b>0</b></a>
                <a  onclick = "if (status==2) answerbox_1.value = ( answerbox_1.value < 10 ? '' : parseInt(answerbox_1.value/10)); return false;"  id= "keyboard_10" class="black_style btn btn-default " ><b>←</b></a>
            </div>
        </div>
    </div>


    <script >

        var style = true;
        function change_style(){
            if (style==true){
                style = false
                // document.body.style.backgroundImage = ""
                for (var i=1;i<=12;i++){
                    element_id = "#black_style_" + i.toString()
                    $(element_id).removeClass('black_style');
                    $(element_id).addClass('white_style');
                }
                for (var i=0;i<=10;i++){
                    element_id = "#keyboard_" + i.toString()
                    $(element_id).removeClass('black_style');
                    $(element_id).addClass('white_style');
                }
                for (var i=1;i<=Kolekran;i++){
                    element_id = "#answerbox_" + i.toString()
                    $(element_id).removeClass('black_style');
                    $(element_id).addClass('white_style');
                    $(element_id).css('background-color',"white");
                    element_id = "#panel_" + i.toString()
                    $(element_id).removeClass('black_style');
                    $(element_id).addClass('white_style');
                    element_id = "#table_" + i.toString()
                    $(element_id).removeClass('black_style');
                    $(element_id).addClass('white_style');
                }
                document.getElementById("navbar_logo").style.backgroundImage = "url(/static/custom/css/logo_rus.png)"
                $("#button_calc_start").removeClass('black_style');
                $("#button_calc_start").addClass('white_style');
                $("#button_start").addClass('white_style');
                $("#button_start").removeClass('black_style');
            }
            else{
                style = true
                // change_background()
                for (var i=1;i<=11;i++){
                    element_id = "#black_style_" + i.toString()
                    $(element_id).addClass('black_style');
                    $(element_id).removeClass('white_style');
                }
                for (var i=1;i<=Kolekran;i++){
                    element_id = "#answerbox_" + i.toString()
                    $(element_id).addClass('black_style');
                    $(element_id).removeClass('white_style');
                    $(element_id).css('background-color',"black");
                    element_id = "#panel_" + i.toString()
                    $(element_id).addClass('black_style');
                    $(element_id).removeClass('white_style');
                    element_id = "#table_" + i.toString()
                    $(element_id).addClass('black_style');
                    $(element_id).removeClass('white_style');
                }
                $("#button_calc_start").removeClass('white_style');
                $("#button_calc_start").addClass('black_style');
                $("#button_start").addClass('black_style');
                $("#button_start").removeClass('white_style');
                document.getElementById("navbar_logo").style.backgroundImage = "url(/static/custom/css/s5_logo.png)"

            }
        }

        function kolcifr_tablo_f(){

            var t = Math.abs(parseFloat(prompt(" Введите количество цифр в пределах от 1 до 7 ")));
            if (isNaN(t) || t <= 0 || t > 7) {
                $('#kolcifr_tablo').html(1);
                Kolcifr = 1;
            }
            else{
                Kolcifr = parseInt(t)
                $('#kolcifr_tablo').html(t);
                $('#navbar_kolcifr').html(t) ;

            }
            kolcifr_f(Kolcifr);
        }

        function kolcifr_plus(){
            var i = parseInt($('#kolcifr_tablo').html());
            if (i<=7){
                i++;
                Kolcifr++
                $('#kolcifr_tablo').html(i)
                $('#navbar_kolcifr').html(i);
                kolcifr_f(Kolcifr);
            }

        }

        function kolcifr_minus(){
            var i = parseInt($('#kolcifr_tablo').html());
            if (i > 1){
                i --;
                Kolcifr--;
                $('#kolcifr_tablo').html(i);
                $('#navbar_kolcifr').html(i) ;
                kolcifr_f(Kolcifr);
            }

        }

        function kolimpuls_f(){

            var t = Math.abs(parseFloat(prompt(" Введите количество импульсов в пределах от 1 до 8 ")));
            if (isNaN(t) || t <= 0 || t > 8) {
                $('#kolimpuls_tablo').html(1);
                Kolimpuls = 1;
            }
            else{
                Kolimpuls = parseInt(t)
                $('#kolimpuls_tablo').html(t);
                $('#navbar_kolimpuls').html(t) ;
            }

        }

        function kolimpuls_plus(){
            var i = parseInt($('#kolimpuls_tablo').html());
            if (i<=8){
                i++;
                Kolimpuls++
                $('#kolimpuls_tablo').html(i)
                $('#navbar_kolimpuls').html(i);
            }
        }

        function kolimpuls_minus(){
            var i = parseInt($('#kolimpuls_tablo').html());
            if (i > 1){
                i --;
                Kolimpuls--;
                $('#kolimpuls_tablo').html(i);
                $('#navbar_kolimpuls').html(i) ;
            }

        }

        function skorost_1(){

            var t = Math.abs(parseFloat(prompt(" Введите интервал времени задержки в пределах 0.1 сек до 5 сек")));
            if (isNaN(t) || t <= 0 || t>5) {
                $('#Skorost_tablo').html(1);
                $('#navbar_interval').html( "(1 сек)");
                interval = 1000;
            }
            else{
                $('#Skorost_tablo').html(t);
                interval=parseInt(t*1000)

                $('#navbar_interval').html( "(" + parseFloat(interval/1000) + "сек)");


            }

        }



        function skorost_minus(){
            if (interval > 100){
                interval -= 100;
                $('#Skorost_tablo').html(parseFloat(interval/1000));

                $('#navbar_interval').html( "(" + parseFloat(interval/1000) + "сек)");


            }

        }

        function skorost_plus(){
            interval += 100;
            $('#Skorost_tablo').html(parseFloat(interval/1000));

            $('#navbar_interval').html( "(" + parseFloat(interval/1000) + "сек)");

        }


        function restart(){
            prav=0;
            vip=0;
            show_pravilno();
            create_abakus(Kolekran);
        }
        function bead_f(i,j,k){
            bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+ k.toString();
            if ($(bead_id).attr("state") == "passive"){
                switch (parseInt(j)){
                    case 1:
                        $(bead_id).attr("state","none")
                        $(bead_id).css({
                            "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                            "background-size": "contain",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        bead_id = "#abakus_" + i.toString() + "beads_" + 2 + "bead_"+ k.toString();
                        $(bead_id).attr("state","active")
                        $(bead_id).css({
                            "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                            "background-size": "100% 100%",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        number_id = "#abakus_" + i.toString() + "number_"+k.toString();
                        if ($(number_id).html() == ".") x=0;
                        else x = parseInt($(number_id).html())
                        x+=5;
                        $(number_id).html(x)
                        break;

                    case 5:
                        $(bead_id).attr("state","none")
                        $(bead_id).css({
                            "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                            "background-size": "contain",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        bead_id = "#abakus_" + i.toString() + "beads_" + 4 + "bead_"+ k.toString();
                        $(bead_id).attr("state","active")
                        $(bead_id).css({
                            "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                            "background-size": "100% 100%",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        number_id = "#abakus_" + i.toString() + "number_"+k.toString();
                        if ($(number_id).html() == ".") x=0;
                        else x = parseInt($(number_id).html())
                        x+=1;
                        $(number_id).html(x)
                        break;
                    case 6:
                        $(bead_id).attr("state","none")
                        $(bead_id).css({
                            "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                            "background-size": "contain",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        for (var l=4; l<=5; l++){
                            bead_id = "#abakus_" + i.toString() + "beads_" + l.toString() + "bead_"+ k.toString();
                            $(bead_id).attr("state","active")
                            $(bead_id).css({
                                "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                                "background-size": "100% 100%",
                                "background-repeat": "no-repeat",
                                "background-position": "top center"
                            })
                        }

                        number_id = "#abakus_" + i.toString() + "number_"+k.toString();
                        if ($(number_id).html() == ".") x=0;
                        else x = parseInt($(number_id).html())
                        if (x>=5) $(number_id).html("7");
                        else $(number_id).html("2");
                        break;
                    case 7:
                        $(bead_id).attr("state","none")
                        $(bead_id).css({
                            "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                            "background-size": "contain",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        for (var l=4; l<=6; l++){
                            bead_id = "#abakus_" + i.toString() + "beads_" + l.toString() + "bead_"+ k.toString();
                            $(bead_id).attr("state","active")
                            $(bead_id).css({
                                "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                                "background-size": "100% 100%",
                                "background-repeat": "no-repeat",
                                "background-position": "top center"
                            })
                        }

                        number_id = "#abakus_" + i.toString() + "number_"+k.toString();
                        if ($(number_id).html() == ".") x=0;
                        else x = parseInt($(number_id).html())
                        if (x>=5) $(number_id).html("8");
                        else $(number_id).html("3");
                        break;
                    case 8:
                        $(bead_id).attr("state","none")
                        $(bead_id).css({
                            "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                            "background-size": "contain",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        for (var l=4; l<=7; l++){
                            bead_id = "#abakus_" + i.toString() + "beads_" + l.toString() + "bead_"+ k.toString();
                            $(bead_id).attr("state","active")
                            $(bead_id).css({
                                "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                                "background-size": "100% 100%",
                                "background-repeat": "no-repeat",
                                "background-position": "top center"
                            })
                        }

                        number_id = "#abakus_" + i.toString() + "number_"+k.toString();
                        if ($(number_id).html() == ".") x=0;
                        else x = parseInt($(number_id).html())
                        if (x>=5) $(number_id).html("9");
                        else $(number_id).html("4");
                        break;
                }
            }
            else if ($(bead_id).attr("state") == "active"){
                switch (parseInt(j)){
                    case 2:
                        $(bead_id).attr("state","none")
                        $(bead_id).css({
                            "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                            "background-size": "contain",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        bead_id = "#abakus_" + i.toString() + "beads_" + 1 + "bead_"+ k.toString();
                        $(bead_id).attr("state","passive");
                        $(bead_id).css({
                            "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                            "background-size": "100% 100%",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        number_id = "#abakus_" + i.toString() + "number_"+k.toString();
                        if ($(number_id).html() == ".") x=0;
                        else x = parseInt($(number_id).html())
                        x-=5;
                        $(number_id).html(x);
                        break;

                    case 4:
                        $(bead_id).attr("state","none")
                        $(bead_id).css({
                            "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                            "background-size": "contain",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        for (var l=5; l<=8; l++){
                            bead_id = "#abakus_" + i.toString() + "beads_" + l.toString() + "bead_"+ k.toString();
                            $(bead_id).attr("state","passive")
                            $(bead_id).css({
                                "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                "background-size": "100% 100%",
                                "background-repeat": "no-repeat",
                                "background-position": "top center"
                            })
                        }
                        number_id = "#abakus_" + i.toString() + "number_"+k.toString();
                        if ($(number_id).html() == ".") x=0;
                        else x = parseInt($(number_id).html())
                        if (x>=5) $(number_id).html("5");
                        else $(number_id).html("0");

                        break;
                    case 5:
                        $(bead_id).attr("state","none")
                        $(bead_id).css({
                            "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                            "background-size": "contain",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        for (var l=6; l<=8; l++){
                            bead_id = "#abakus_" + i.toString() + "beads_" + l.toString() + "bead_"+ k.toString();
                            $(bead_id).attr("state","passive");
                            $(bead_id).css({
                                "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                "background-size": "100% 100%",
                                "background-repeat": "no-repeat",
                                "background-position": "top center"
                            })
                        }
                        number_id = "#abakus_" + i.toString() + "number_"+k.toString();
                        if ($(number_id).html() == ".") x=0;
                        else x = parseInt($(number_id).html())
                        if (x>=5) $(number_id).html("6");
                        else $(number_id).html("1")
                        break;
                    case 6:
                        $(bead_id).attr("state","none")
                        $(bead_id).css({
                            "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                            "background-size": "contain",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        for (var l=7; l<=8; l++){
                            bead_id = "#abakus_" + i.toString() + "beads_" + l.toString() + "bead_"+ k.toString();
                            $(bead_id).attr("state","passive");
                            $(bead_id).css({
                                "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                "background-size": "100% 100%",
                                "background-repeat": "no-repeat",
                                "background-position": "top center"
                            })
                        }
                        number_id = "#abakus_" + i.toString() + "number_"+k.toString();
                        if ($(number_id).html() == ".") x=0;
                        else x = parseInt($(number_id).html())
                        if (x>=5) $(number_id).html("7");
                        else $(number_id).html("2")
                        break;
                    case 7:
                        $(bead_id).attr("state","none")
                        $(bead_id).css({
                            "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                            "background-size": "contain",
                            "background-repeat": "no-repeat",
                            "background-position": "top center"
                        })
                        for (var l=8; l<=8; l++){
                            bead_id = "#abakus_" + i.toString() + "beads_" + l.toString() + "bead_"+ k.toString();
                            $(bead_id).attr("state","passive");
                            $(bead_id).css({
                                "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                "background-size": "100% 100%",
                                "background-repeat": "no-repeat",
                                "background-position": "top center"
                            })
                        }
                        number_id = "#abakus_" + i.toString() + "number_"+k.toString();
                        if ($(number_id).html() == ".") x=0;
                        else x = parseInt($(number_id).html())
                        if (x>=5) $(number_id).html("8");
                        else $(number_id).html("3")
                        break;
                }
            }
        }
        var abakus_mode = false;
        document.onkeyup = function (e) {
            e = e || window.event;
            if ((e.keyCode === 13)) {
                start();
            }
            return false;
        }
        function power10(n){
            var d = 1;
            for (var i = 1; i <= n; i++) {
                d *= 10;
            }
            return d;
        }

        function hide_abakus_all(){
            for (var i=1; i<=Kolekran;i++){
                abakus_id = "#abakus_" + i.toString();
                $(abakus_id).addClass("hidden")
                abakus_empty_id = "#abakus_empty_" + i.toString();
                $(abakus_empty_id).removeClass("hidden")

            }
        }
        function visibe_abakus_all(){
            for (var i=1; i<=Kolekran;i++){
                abakus_id = "#abakus_" + i.toString();
                $(abakus_id).removeClass("hidden")
                abakus_empty_id = "#abakus_empty_" + i.toString();
                $(abakus_empty_id).addClass("hidden")

            }
        }
        var setTimeOutId;
        function hide_abakus(n){
            abakus_id = "#abakus_" + n.toString();
            $(abakus_id).addClass("invisible")
        }
        function visibe_abakus(n){
            abakus_id = "#abakus_" + n.toString();
            $(abakus_id).removeClass("invisible")
        }
        var status = 0, correct_answer=[], user_answer=[];
        var wb_Timer1;
        function start(){
            switch (parseInt(rejim)){
                case 1:
                    switch (parseInt(status)){
                        case 0:
                            for (var i=1; i<=Kolekran; i++){
                                answerbox_id = "#answerbox_" + i.toString()
                                $(answerbox_id).css({
                                    "background-color": "white",
                                    "color": "gray"
                                })
                                $(answerbox_id).val("")
                                abakus_empty_id = "#abakus_empty_" + i.toString()
                                $(abakus_empty_id).html("")
                                for (var k=1;k<=Kolcifr; k++){
                                    number_id = "#abakus_" + i.toString() + "number_"+k.toString();
                                    $(number_id).html(".")
                                }

                            }
                            status = 1;
                            $("#button_start").html("■");
                            $("#button_calc_start").html("■");

                            hide_abakus_all();
                            time=0;
                            for (var i=1;i<=Kolekran;i++){
                                correct_answer[i]=[];
                            }
                            setTimeout(function(){
                                for (var i=1;i<=Kolekran;i++){
                                    number = random_between(power10(Kolcifr-1), power10(Kolcifr))
                                    correct_answer[i][1]=number;
                                    make_number_on_abakus_f(i,number)
                                }
                                visibe_abakus_all(); soundClick(2);
                                setTimeout("hide_abakus_all();", interval);


                                if (Kolimpuls!=1){
                                    wb_Timer1 = setInterval(function(){
                                            for (var i=1;i<=Kolekran;i++){
                                                number = random_between(power10(Kolcifr-1), power10(Kolcifr));
                                                correct_answer[i][time+2]=number;
                                                make_number_on_abakus_f(i,number)
                                            }
                                            visibe_abakus_all(); soundClick(2);
                                            setTimeout("hide_abakus_all();", interval);
                                            time++;
                                            if (time==Kolimpuls-1) {
                                                clearInterval(wb_Timer1);
                                                status=2;
                                                $("#button_start").html("✐");
                                                $("#button_calc_start").html("✐");

                                                $("#answerbox_1").focus()
                                            }
                                        }
                                        ,interval+500)
                                }
                                else{
                                    setTimeOutId = setTimeout(function(){
                                        status=2;
                                        $("#button_start").html("✐");
                                        $("#button_calc_start").html("✐");
                                        $("#answerbox_1").focus()
                                    }, interval);

                                }
                            }, 300);
                            break;
                        case 1:
                            status=0;
                            clearTimeout(setTimeOutId)
                            $("#button_start").html("►");
                            $("#button_calc_start").html("►");
                            clearInterval(wb_Timer1);
                            hide_abakus_all();
                            break;
                        case 2:
                            status=0;
                            num_cor=0;
                            vip++;
                            $("#button_start").html("►");
                            $("#button_calc_start").html("►");
                            var correct_answer_all=[];
                            for (var i=1;i<=Kolekran; i++){
                                correct_answer_all[i] = ""
                            }
                            for (var i=1; i<=Kolekran; i++){
                                for (var j=1;j<=Kolimpuls; j++){
                                    correct_answer_all[i]+= " " + correct_answer[i][j].toString()
                                }
                                answerbox_id = "#answerbox_" + i.toString()
                                y = $(answerbox_id).val()
                                y = y.replace(/\s/g, '')
                                z = correct_answer_all[i]
                                z = z.replace(/\s/g, '')
                                if (parseInt(y) == parseInt(z)){
                                    prav++;
                                    num_cor++;
                                    $(answerbox_id).css({
                                        "background-color": "green",
                                        "color": "white"
                                    })
                                    span_points_id = "#span_points_" + i.toString();
                                    x = parseInt($(span_points_id).html().slice(1));
                                    x+=10;
                                    x="("+x.toString() +")";
                                    $(span_points_id).html(x)
                                }
                                else{
                                    $(answerbox_id).css({
                                        "background-color": "red",
                                        "color": "white"
                                    })
                                }
                            }
                            if (Kolimpuls==1) {
                                visibe_abakus_all();
                                for (var i=1; i<=Kolekran;i++){
                                    for (var k=1; k<=Kolcifr; k++){
                                        number_id = "#abakus_" + i.toString() + "number_"+k.toString();
                                        z = correct_answer_all[i]
                                        z = z.replace(/\s/g, '')
                                        z = reverseStr(z);
                                        $(number_id).html(z[k-1])
                                    }
                                }

                            }
                            else{
                                for (var i=1; i<=Kolekran;i++){
                                    abakus_empty_id = "#abakus_empty_" + i.toString()
                                    $(abakus_empty_id).html(correct_answer_all[i])
                                }
                            }
                            if (num_cor>=parseInt((Kolekran+1)*0.5)) soundClick(3);
                            else soundClick(4)
                            show_pravilno();
                            break;
                    }



                    break;
            }
        }
        function show_pravilno(){
            if (vip == 0) x = 0;
            else{
                x = parseInt(prav/vip*100);
            }
            document.getElementById('pravilno_progress').style.width = x + "%";
            document.getElementById('navbar_pravilno_progress').style.width = x + "%";

            document.getElementById('navbar_pravilno_text').innerHTML = "Правильно " + prav + " из " + vip + " (" + x + "%)";
            document.getElementById('pravilno_text').innerHTML = "Правильно " + prav + " из " + vip + " (" + x + "%)";


            vip = parseInt(vip);
            prav = parseInt(prav);
        }

        var interval =1000, Kolimpuls=1, abak_rej=false, Kolcifr = 2,Kolekran=1, rejim=1;
        function reverseStr(str) {
            return str.split("").reverse().join("");
        }

        function kolcifr_f(n){
            Kolcifr = n;
            if (abakus_mode==true) Kolcifr2 = 13;
            else Kolcifr2 = 7;

            for (var i=1;i<=Kolekran;i++){
                for (var k=0; k<=Kolcifr2;k++){
                    for (var j=0;j<=9;j++){

                        var number_id = "#abakus_" + i.toString() + "number_"+ k.toString();
                        var line_id = "#abakus_" + i.toString() + "lines_" + j.toString() + "line_"+ k.toString();
                        var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+ k.toString();

                        if (k==0){
                            $(number_id).addClass("hidden");
                            $(line_id).addClass("hidden");
                            $(bead_id).addClass("hidden");
                        }
                        else{
                            $(number_id).removeClass("hidden");
                            $(line_id).removeClass("hidden");
                            $(bead_id).removeClass("hidden");
                            $(number_id).css({
                                "visibility": "visible"
                            })
                            $(line_id).css({
                                "visibility": "visible"
                            })
                            $(bead_id).css({
                                "visibility": "visible"
                            })
                        }


                    }
                }
            }
            for (var i=1;i<=Kolekran;i++){
                for (var k=7; k>Kolcifr;k--){
                    for (var j=0;j<=9;j++){
                        var number_id = "#abakus_" + i.toString() + "number_"+ k.toString();
                        var line_id = "#abakus_" + i.toString() + "lines_" + j.toString() + "line_"+ k.toString();
                        var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+ k.toString();


                        if (n==2||n==1||n==3||n==4){
                            if (k==3||k==4||(k==5 && n==4)){
                                $(number_id).css({
                                    "visibility": "hidden"
                                })
                                $(line_id).css({
                                    "visibility": "hidden"
                                })
                                $(bead_id).css({
                                    "visibility": "hidden"
                                })
                            }
                            else{
                                $(number_id).addClass("hidden");
                                $(line_id).addClass("hidden");
                                $(bead_id).addClass("hidden");
                            }
                        }
                        else{
                            $(number_id).addClass("hidden");
                            $(line_id).addClass("hidden");
                            $(bead_id).addClass("hidden");
                        }
                    }
                }
                if (n==1||n==2||n==3||n==4){
                    var number_id = "#abakus_" + i.toString() + "number_0";
                    $(number_id).removeClass("hidden");
                    $(number_id).css({
                        "visibility": "hidden"
                    })
                    for (var j=0;j<=9;j++){
                        if (j==0||j==3||j==9){
                            var line_id = "#abakus_" + i.toString() + "lines_" + j.toString() + "line_0";
                            $(line_id).removeClass("hidden");
                            $(line_id).css({
                                "visibility": "hidden"
                            })
                        }
                        else{
                            var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_0";
                            $(bead_id).removeClass("hidden");
                            $(bead_id).css({
                                "visibility": "hidden"
                            })
                        }
                    }
                }
            }
        }

        function make_number_on_abakus_f(i,n){
            number_str = n.toString();
            number_str = reverseStr(number_str)
            number_length = number_str.length
            for (var k=0; k<number_length; k++){
                n = parseInt(number_str[k]);
                switch (n) {
                    case 0:
                        for (var j=1; j<=8; j++){
                            if (j!=3){
                                var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+(k+1).toString();
                                if (j==2||j==4){
                                    $(bead_id).css({
                                        "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                                        "background-size": "contain",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                }
                                else
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                            }
                        }
                        break;
                    case 1:
                        for (var j=1; j<=8; j++){
                            if (j!=3){
                                var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+(k+1).toString();
                                if (j==2||j==5){
                                    $(bead_id).css({
                                        "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                                        "background-size": "contain",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                }
                                else if (j==4)
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                else
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                            }
                        }
                        break;
                    case 2:
                        for (var j=1; j<=8; j++){
                            if (j!=3){
                                var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+(k+1).toString();
                                if (j==2||j==6){
                                    $(bead_id).css({
                                        "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                                        "background-size": "contain",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                }
                                else if (j==4 || j==5)
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                else
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                            }
                        }
                        break;
                    case 3:
                        for (var j=1; j<=8; j++){
                            if (j!=3){
                                var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+(k+1).toString();
                                if (j==2||j==7){
                                    $(bead_id).css({
                                        "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                                        "background-size": "contain",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                }
                                else if (j==4 || j==5 || j==6)
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                else
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                            }
                        }
                        break;
                    case 4:
                        for (var j=1; j<=8; j++){
                            if (j!=3){
                                var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+(k+1).toString();
                                if (j==2||j==8){
                                    $(bead_id).css({
                                        "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                                        "background-size": "contain",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                }
                                else if (j==4 || j==5 || j==6 || j==7)
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                else
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                            }
                        }
                        break;
                    case 5:
                        for (var j=1; j<=8; j++){
                            if (j!=3){
                                var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+(k+1).toString();
                                if (j==1||j==4){
                                    $(bead_id).css({
                                        "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                                        "background-size": "contain",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                }
                                else if (j==2)
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                else
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                            }
                        }
                        break;
                    case 6:
                        for (var j=1; j<=8; j++){
                            if (j!=3){
                                var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+(k+1).toString();
                                if (j==1||j==5){
                                    $(bead_id).css({
                                        "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                                        "background-size": "contain",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                }
                                else if (j==2|| j==4)
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                else
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                            }
                        }
                        break;
                    case 7:
                        for (var j=1; j<=8; j++){
                            if (j!=3){
                                var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+(k+1).toString();
                                if (j==1||j==6){
                                    $(bead_id).css({
                                        "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                                        "background-size": "contain",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                }
                                else if (j==2|| j==4 || j==5)
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                else
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                            }
                        }
                        break;
                    case 8:
                        for (var j=1; j<=8; j++){
                            if (j!=3){
                                var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+(k+1).toString();
                                if (j==1||j==7){
                                    $(bead_id).css({
                                        "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                                        "background-size": "contain",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                }
                                else if (j==2|| j==4 || j==5 || j==6)
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                else
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                            }
                        }
                        break;
                    case 9:
                        for (var j=1; j<=8; j++){
                            if (j!=3){
                                var bead_id = "#abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+(k+1).toString();
                                if (j==1||j==8){
                                    $(bead_id).css({
                                        "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                                        "background-size": "contain",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                }
                                else if (j==2|| j==4 || j==5 || j==6 || j==7)
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                                else
                                    $(bead_id).css({
                                        "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                        "background-size": "100% 100%",
                                        "background-repeat": "no-repeat",
                                        "background-position": "top center"
                                    })
                            }
                        }
                        break;
                }
            }
        }
        function create_abakus(n){
            Kolekran = n;
            for (var i=1;i<=8;i++){
                var window_otvet_up_id = "#window_otvet_up_"+i.toString();
                $(window_otvet_up_id).remove()

            }
            if (n==1) {
                $("#window_pusto_left").removeClass("hidden")
                $("#window_pusto_left").removeClass("col-lg-2 col-md-2 col-sm-2 col-xs-1")
                $("#window_pusto_left").addClass("col-lg-4 col-md-4 col-sm-4 col-xs-1")
            }
            else if (n==2){
                $("#window_pusto_left").removeClass("hidden")
                $("#window_pusto_left").addClass("col-lg-2 col-md-2 col-sm-2")
                $("#window_pusto_left").removeClass("col-lg-4 col-md-4 col-sm-4")
            }
            else
                $("#window_pusto_left").addClass("hidden")

            for (var i=1;i<=n;i++){
                var window_otvet_up_id = "window_otvet_up_"+i.toString();
                if (n>=4) class_col = "col-lg-3 col-md-3 col-sm-3"
                else if (abakus_mode == true) class_col = "col-lg-12 col-md-12 col-sm-12"
                else class_col = "col-lg-4 col-md-4 col-sm-4 col-xs-10"
                var window_otvet_up= document.createElement('div');
                $(window_otvet_up).attr({
                    id: window_otvet_up_id,
                    class: class_col,
                    style: "margin:0; opacity: 0.97;"
                });
                $('#main_window').append(window_otvet_up);
                window_otvet_up_id = "#" + window_otvet_up_id;

                var window_otvet_id = "window_otvet_" + i.toString();
                var window_otvet= document.createElement('div');
                $(window_otvet).attr({
                    id: window_otvet_id,
                    class: "panel panel-primary",
                    style: "margin:0; padding:0"
                });
                $(window_otvet_up_id).append(window_otvet);
                window_otvet_id = "#" + window_otvet_id;

                var panel_heading_id = "panel_heading_" + i.toString();
                var panel_heading= document.createElement('div');
                $(panel_heading).attr({
                    id: panel_heading_id,
                    class: "panel panel-primary",
                    style: "margin:0;"
                });
                if (device.mobile())
                    $(panel_heading).addClass("hidden")
                $(window_otvet_id).append(panel_heading);
                panel_heading_id = "#" + panel_heading_id;

                var heading_id = "heading_" + i.toString();
                var heading= document.createElement('h3');
                $(heading).attr({
                    id: heading_id,
                    class: "panel-heading",
                    style: "margin:0; padding:3; text-align:center"
                });
                $(panel_heading_id).append(heading);
                heading_id = "#" + heading_id;

                var span_name_id = "span_name_" + i.toString();
                var span_name= document.createElement('span');
                $(span_name).attr({
                    id: span_name_id,
                    style: "text-align:center; font-size:15; cursor:pointer",
                    onclick: "var tx = this.html(); this.html()=prompt('Введите имя'); if (this.html() == '') this.html(tx; return false;"
                });
                $(span_name).html(i);
                $(heading_id).append(span_name);
                span_name_id = "#" + span_name_id;

                var span_points_id = "span_points_" + i.toString();
                var span_points= document.createElement('span');
                $(span_points).attr({
                    id: span_points_id,
                    style: "text-align:center; font-size:15"
                });
                points = "(" + 0 + ")";
                $(span_points).html(points);
                $(heading_id).append(span_points);
                span_points_id = "#" + span_points_id;

                var abakus_id = "abakus_" + i.toString();
                var abakus=document.createElement('div');
                $(abakus).attr({
                    id: abakus_id,
                    style: "margin:0;"
                });
                $(window_otvet_id).append(abakus);
                abakus_id = "#" + abakus_id;




                var numbers_id = "numbers_" + i.toString();
                var numbers=document.createElement('div');
                $(numbers).attr({
                    id: numbers_id,
                    class: 'btn-group btn-group-justified'
                });
                $(abakus_id).append(numbers);
                numbers_id = "#" + numbers_id;
                Kolcifr2=Kolcifr
                if (Kolcifr==4) Kolcifr2++;
                else if (Kolcifr==3) Kolcifr2+=2;
                else if (Kolcifr==2) Kolcifr2+=3;
                else if (Kolcifr==1) Kolcifr2+=4;
                for (var k=Kolcifr2; k>=0; k--){
                    var number_id = "abakus_" + i.toString() + "number_"+k.toString();
                    var number=document.createElement('a');
                    if (k==0) class_btn = 'btn btn-lg btn-default disabled hidden'
                    else class_btn = 'btn btn-lg btn-default disabled'
                    $(number).attr({
                        id: number_id,
                        class: class_btn,
                        style: "border:0; padding:0; font-size:60; color: #000000; height: 50; background-color: #ffffff; box-shadow: none;",
                    });
                    if (n>=4 || device.mobile()){
                        $(number).css({
                            "font-size":"25",
                            "height":"30"
                        })
                    }
                    if (abakus_mode==true) $(number).html("0");
                    else $(number).html(".")
                    $(numbers_id).append(number);
                }

                for (var j=0; j<=9; j++){
                    if (j==0 || j==3 || j==9){
                        var lines_id = "abakus_" + i.toString() + "lines_" + j.toString();
                        var lines=document.createElement('div');
                        $(lines).attr({
                            id: lines_id,
                            class: 'btn-group btn-group-justified'
                        });
                        $(abakus_id).append(lines);
                        lines_id = "#" + lines_id;

                        for (var k=Kolcifr2; k>=0; k--){
                            var line_id = "abakus_" + i.toString() + "lines_" + j.toString() + "line_"+k.toString();
                            var line=document.createElement('a');
                            if (k==0) class_btn = 'btn btn-xs btn-default hidden'
                            else class_btn = 'btn btn-xs btn-default'
                            $(line).attr({
                                id: line_id,
                                class: class_btn,
                                style: "background-color: #000000; border-color: #000000; box-shadow: none; height:6px",
                            });
                            $(lines_id).append(line);
                        }
                    }
                    else{
                        beads_id = "abakus_" + i.toString() + "beads_" + j.toString();
                        var beads=document.createElement('div');
                        $(beads).attr({
                            id: beads_id,
                            class: 'btn-group btn-group-justified'
                        });
                        $(abakus_id).append(beads);
                        beads_id = "#" + beads_id
                        if (abakus_mode==true) style_bead = "border:0; padding-top: 3%; box-shadow: none;";
                        else style_bead ="border:0; padding-top: 7%; box-shadow: none;"
                        for (var k=Kolcifr2; k>=0; k--){
                            var bead_id = "abakus_" + i.toString() + "beads_" + j.toString() + "bead_"+k.toString();
                            var bead=document.createElement('a');
                            if (k==0) class_btn = 'btn btn-default hidden'
                            else class_btn = 'btn btn-default'
                            if (abakus_mode==true){
                                onclick_f = "bead_f("+ i +"," + j + "," + k + ")";
                                if (j==2||j==4) state_text = "none";
                                else state_text = "passive";
                                $(bead).attr({
                                    id: bead_id,
                                    class: class_btn,
                                    style: style_bead,
                                    state: state_text,
                                    onclick: onclick_f
                                });
                            }
                            else{
                                $(bead).attr({
                                    id: bead_id,
                                    class: class_btn,
                                    style: style_bead
                                });
                            }

                            if (j==2||j==4)
                                $(bead).css({
                                    "background": "url(<?= Url::to('@web/flash/custom/buspus-black.png') ?>)",
                                    "background-size": "contain",
                                    "background-repeat": "no-repeat",
                                    "background-position": "top center"
                                })
                            else
                                $(bead).css({
                                    "background": "url(<?=Url::to("@web/flash/custom/bus-schot-no-black.png")?>)",
                                    "background-size": "100% 100%",
                                    "background-repeat": "no-repeat",
                                    "background-position": "top center"
                                })
                            $(beads_id).append(bead);
                        }
                    }
                }
                var abakus_empty_id = "abakus_empty_" + i.toString();
                var abakus_empty=document.createElement('div');
                height = 7*parseInt($("#abakus_1beads_1bead_1").css("height")) + parseInt($("#abakus_1number_1").css("height")) + 18
                style_ab = "margin:0; height:" + height+ "; text-align:center; font-size:30px;"
                $(abakus_empty).attr({
                    id: abakus_empty_id,
                    style: style_ab,
                    class: "hidden",
                    onclick: "start(); return false;",
                    cursor: "pointer",

                });
                $(window_otvet_id).append(abakus_empty);
                answerbox_id = "answerbox_" + i.toString();
                var answerbox = document.createElement('input');
                $(answerbox).attr({
                    id: answerbox_id,
                    class: 'form-control ',
                    type: "text",
                    value: "",
                    style: "font-size:100px; text-align: center; height:130px;  border: 1px solid #808080; border-radius:3px; opacity: 0.97;",
                });
                if (n>=4 || device.tablet() || device.mobile() ) {
                    if (device.tablet() || device.mobile() ){
                        $(answerbox).attr("disabled","")
                        $("#keyboard").removeClass("hidden")
                    }
                    $(answerbox).css({
                        "font-size":"20px",
                        "height":"30",
                    })
                }
                $(window_otvet_id).append(answerbox);
                answerbox_id = "#" + answerbox_id
            }
            if (abakus_mode==true) kolcifr_f(13);
            else{
                kolcifr_f(Kolcifr);
                hide_abakus_all();
            }
        }

        window.onload=function(){
            change_style()
            change_background();
            kolcifr_f(7);
            create_abakus(Kolekran);
            kolcifr_f(2);
            soundClick(2);
            if (device.tablet()){
                $("#kol_abakus").addClass("hidden")
                $("#keyboard_in").removeClass("col-sm-12 col-md-12")
                $("#keyboard_in").addClass("col-sm-8 col-md-8")
                $("#keyboard_empty").addClass("col-sm-2 col-md-2")
                for (var i=0;i<=11;i++){
                    keyboard_id = "#keyboard_"+i.toString()
                    $(keyboard_id).addClass("btn-lg")
                }

            }
        }

        function button_nastroyki_f(){
            $('#modal_settings').modal('show');
        }

        var image_schotchik = 0;
        function change_background(){
            if (image_schotchik > 26) image_schotchik = 1;
            else{
                image_schotchik++;
            }
            image_schotchik = 1 + randomInteger(26);
            var image_fon = "fon_" + image_schotchik + ".jpg";
            document.body.style.backgroundImage = 'url(<?php
                    $number_fon = rand(1, 27);
                    echo Url::to("@web/flash/custom/fon_".$number_fon.".jpg")
                    ?>)';
            image_schotchik = parseInt(image_schotchik);
        }

        function customChangeFon() {
            var numberFon = Math.round(Math.random() * (27 - 1) + 1);
            var lincPict = "fon_" + numberFon + ".jpg";
            var test = "<?=Url::to("@web/flash/custom/")?>" + lincPict;
            document.body.style.backgroundImage = 'url('+test+')';
        }





        var prav = 0, vip = 0;

        var correct = ['Молодец!','Восхитительно!','Хорошо делаешь!','Это внушительно!','Невероятно!',
            'Отлично!','Превосходно!','Прекрасно!','Поразительно!','Эффектно!','Ты преуспеваешь!',
            'Потрясающе!','Остроумно!','Безупречная работа!','То, что надо!','Чудесно!',
            'Изумительно!','Потрудился на совесть!','Уже лучше!','Хороший ответ!',
            'Ты это заслужил!','Блистательнно!','Какой ты способный!','Так держать!','Ну, это событие!',
            'Ты смог!','Хорошо получается!','Сейчас лучше!','Ты справился!','Ты умеешь считать!',
            'Хорошо подготовился!','Ты считаешь играя!','Ты на правильном пути!','На высшем уровне!','Здорово!',
            'Какой прогресс!','Это мне нравится!','Необыкновенно!','Блестяще!','Можешь гордиться!',
            'Замечательно!','Красота!','Нет слов!','Мастерски!','Ты настоящий мастер!',
            'Это гениально!','Хорошо получается!','У тебя светлая голова!','Приятно смотреть!','Очаровательно!',
            'Ты ссобразителен!','Разумный ответ!','Стоящая работа!','Это достойно похвалы!','Ты прав!',
            'Захватывающе!','Правильный ответ!','Правильно!','Другой уровень!'];





        var audio = new Audio();
        var audio2 = new Audio();
        var chered = true;
        function soundClick(n) {
            if (chered == true) {
                audio.src = "<?= Url::to("@web/music/")?>"+n.toString() + '.mp3'
                audio.play()
            }
            else{
                audio2.src = "<?= Url::to("@web/music/")?>"+n.toString() + '.mp3'
                audio2.play()
            }
            chered = !chered
        }

        function soundClick2(u,r) {
            var t = 0;
            var music = "";
            if (r == 1){
                switch (u){
                    case 0:
                        t = random_between(1,48);
                        music = 'new_incorrect-'+ t   + '.mp3';
                        break;
                    case 1:
                        t = random_between(1,19);
                        music = 'new_correct-'+ t   + '.mp3';
                        break;
                    case 2:
                        t = random_between(1,58);
                        music = 'new_present-'+ t   + '.mp3';
                        break;

                }
                audio.src = "<?= Url::to("@web/music/")?>" + music;
                audio.autoplay = true;
            }
            else audio.autoplay = false;
        }



        // function soundClick(n) {
        //     switch (n){
        //         case 1:
        //             audio.src = '/static/custom/audio/snd_1.mp3'; // Указываем путь к звуку "клика"
        //             audio.autoplay = true;
        //         break;

        //         case 2:
        //             audio.src = '/static/custom/audio/snd_2.mp3'; // Указываем путь к звуку "клика"
        //             audio.autoplay = true;
        //         break;

        //         case 3:
        //             audio.src = '/static/custom/audio/snd_3.mp3'; // Указываем путь к звуку "клика"
        //             audio.autoplay = true;
        //         break;

        //         case 4:
        //             audio.src = '/static/custom/audio/snd_4.mp3'; // Указываем путь к звуку "клика"
        //             audio.autoplay = true;
        //         break;
        //     }
        // }

        function random_between(n,m){
            var t = n + randomInteger(m - n);
            return t;
        }


        function randomInteger (n) {
            var d = Math.floor(Math.random()*(n-0.0001))
            return d;
        }



        var enter_available = true, started = false;


        function button_nastroyki_f(){
            $('#modal_settings').show();
        }

        function close_huese() {
            $('#modal_settings').hide();
        }




    </script>

    </body>

    </html>


    </html>


    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
