<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\SpeedAsset::register($this);
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




    <html style = "height: 100% ; width:100%; ">
    <head>
        <meta charset="utf-8">
        <title>Счет на скорость</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <style>
            .white_style{
                background-color: white;
                opacity: 0.9;
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
    <body style = "background-image: url(static/custom/fon_1.jpg); background-position: center center; background-repeat: no-repeat  ; background-size: cover; ">
    <div id = "modal_settings" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="close_huese()">&times;</button>
                    <button onclick = "restart(); return false;"  class="close" tabindex = "-1" type="button" style=" margin-right:20px"  >♻   </button>

                    <h5 class="modal-title">Настройки  </h5>
                </div>
                <div class="panel-body col-lg-7 col-md-7 col-sm-7">
                    <div class="panel-body" style=" text-align:center"> <h5>  Правильность выполнения</h5>
                        <div id = "pravilno_text" style=" text-align:center">  0 из 0 (0%)  </div>
                        <div  class="progress progress-striped active" style=" margin-bottom:0;">
                            <div  id = "pravilno_progress" class="progress-bar progress-bar-success" style="width: 0"></div>
                        </div>
                    </div>

                    <div class="panel-body " style=" text-align:center"> <h5>Модуль</h5>
                        <div class="btn-group btn-group-justified">
                            <a  id = "button_prosto" onclick = "button_prosto_f(); return false;" style = " text-transform:  none"  class="btn btn-sm btn-default active" title="Простой счет">Просто</a>
                            <a  id = "button_brat" onclick = "button_brat_f(); return false;" class="btn btn-sm btn-default" title="Помощь брата" style = " text-transform:  none">Брат</a>
                            <a  id = "button_drug" onclick = "button_drug_f(); return false;" class="btn btn-sm btn-default" title="Помощь друга" style = " text-transform:  none">Друг</a>
                            <a  id = "button_combo" onclick = "button_combo_f(); return false;" class="btn btn-sm btn-default" title="Комбинированный счет" style = " text-transform:  none">Комбо</a>
                            <a  id = "button_random" onclick = "button_random_f(); return false;" class="btn btn-sm btn-default" title="Произвольный счет" style = " text-transform:  none">Произв</a>
                        </div>


                        <div class="btn-group btn-group-justified">
                            <a  id = "button_1"  class="btn btn-sm btn-default active hidden" onclick="$(this).toggleClass('active')" >1</a>
                            <a  id = "button_2"  class="btn btn-sm btn-default active hidden" onclick="$(this).toggleClass('active')">2</a>
                            <a  id = "button_3"  class="btn btn-sm btn-default active hidden" onclick="$(this).toggleClass('active')">3</a>
                            <a  id = "button_4"  class="btn btn-sm btn-default active hidden" onclick="$(this).toggleClass('active')">4</a>
                            <a  id = "button_5"  class="btn btn-sm btn-default active" onclick = "check_5();return false;">5</a>
                            <a  id = "button_6"  class="btn btn-sm btn-default active" onclick = "check_6();return false;">6</a>
                            <a  id = "button_7"  class="btn btn-sm btn-default active" onclick = "check_7();return false;">7</a>
                            <a  id = "button_8"  class="btn btn-sm btn-default active" onclick = "check_8();return false;">8</a>
                            <a  id = "button_9"  class="btn btn-sm btn-default active" onclick = "check_9();return false;">9</a>
                        </div>
                        <div class="btn-group btn-group-justified">
                            <a  id = "button_check_all" class="btn btn-sm btn-default active hidden" onclick = "check_all(); return false;">Выбрать все</a>
                        </div>
                    </div>
                    <div  class="panel-body" style=" text-align:center"> <h5>Сложность </h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn btn-sm btn-default active" id = "Button_Kolcifr_1" onclick = "Kolcifr_1();return false;">1</a>
                            <a  class="btn btn-sm btn-default" id = "Button_Kolcifr_2" onclick = "Kolcifr_2();return false;">10</a>
                            <a  class="btn btn-sm btn-default" id = "Button_Kolcifr_3" onclick = "Kolcifr_3();return false;">100</a>
                            <a  class="btn btn-sm btn-default" id = "Button_Kolcifr_4" onclick = "Kolcifr_4();return false;">1000</a>
                            <a  class="btn btn-sm btn-default active" id = "Button_half" onclick = "button_half_f();return false;">1/2</a>
                        </div>
                    </div>

                    <div  class="panel-body" style=" text-align:center"> <h5> Операции</h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn btn-sm btn-default" id = "Button_operation_plus" title=" Сложение" onclick = "operation_plus();return false;" >+</a>
                            <a  class="btn btn-sm btn-default" id = "Button_operation_minus" title=" Вычитание" onclick = "operation_minus();return false;">-</a>
                            <a  class="btn btn-sm btn-default active" id = "Button_operation_plus_minus" title=" Сложение+Вычитание" onclick = "operation_plus_minus();return false;">+/-</a>
                        </div>
                    </div>

                </div>
                <div class="panel-body col-lg-5 col-md-5 col-sm-5 ">


                    <div class="panel-body" style="  text-align:center"> <h5> Количество слагаемых  </h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn btn-sm btn-default " onclick = "Kolslog_minus();return false;">-</a>
                            <a  class="btn btn-sm btn-default active"  id = "Kolslog_tablo" onclick = "Kolslog_10();return false;" >4</a>
                            <a  class="btn btn-sm btn-default" onclick = "Kolslog_plus();return false;">+</a>
                        </div>
                    </div>
                    <div class="panel-body" style=" text-align:center"> <h5>Интервал  </h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn btn-default btn-sm" onclick = "skorost_minus();return false;">-</a>
                            <a  class="btn btn-default btn-sm active" id="Skorost_tablo" onclick = "skorost_1();return false;">1</a>
                            <a  class="btn btn-default btn-sm" onclick = "skorost_plus();return false;">+</a>
                        </div>
                    </div>

                    <div class="panel-body" style=" text-align:center"> <h5>Размер Шрифта  </h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn btn-default btn-sm" onclick = "fontsize_minus();return false;">-</a>
                            <a  class="btn btn-default btn-sm active" id="fontsize_tablo" onclick = "fontsize_f();return false;">35</a>
                            <a  class="btn btn-default btn-sm" onclick = "fontsize_plus();return false;">+</a>
                        </div>
                    </div>
                    <!--
                      <div class="panel-body" style=" text-align:center"> <h5>Режим прогресса</h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn btn-default btn-sm" onclick = "
                            progress_up_n=[]
                            for (var i=1;i<ekran_number;i++){
                              progress_up_n[i]=0
                            }
                            if (progress== false) {
                            this.classList.add('active');
                            this.innerHTML='ВЫКЛ'; progress = true;} else{this.classList.remove('active'); this.innerHTML='ВКЛ'; progress = false};return false;">ВКЛ</a>

                        </div>
                      </div>
                      -->

                    <div class="panel-body " style=" text-align:center; ">  <h5> Шрифт </h5>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <select class="form-control" id="select" onchange = "changefont()">
                                    <option  >Arial</option>
                                    <option  >Arial Black</option>
                                    <option>Jokerman</option>
                                    <option>DFPOP1-W9</option>
                                    <option>Playbill</option>
                                    <option selected>Showcard Gothic</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="panel-body">
                        <div class="panel-body">
                            <button type="button" class="btn btn-success" data-dismiss="modal" onclick="close_huese()">Применить </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top black_style" id= "black_style_1" style = "z-index: 2; margin-bottom:0" >
        <div class="container-fluid ">
            <div class="navbar-header">
                <button   type="button" class="navbar-toggle collapsed " data-toggle="collapse" onclick= "button_nastroyki_f(); return false;">
                    &#9776
                </button>
                <button onclick = " show_example(); return false;"  class="navbar-toggle collapsed " data-toggle="collapse"  tabindex = "-1" ><b>EX</b> </button>
                <button id ="button_voice" onclick = " if (voice==false){voice=true; this.innerHTML = '♫'; $('#black_style_26').html('♫')} else{voice=false; this.innerHTML = '♪'; $('#black_style_26').html('♪')} return false;" class="navbar-toggle collapsed " data-toggle="collapse"  tabindex = "-1" ><b>♫</b> </button>
                <button onclick = "change_style(); return false;"  class="navbar-toggle collapsed " data-toggle="collapse"  tabindex = "-1" > <b>S</b>  </button>
                <button onclick = "customChangeFon(); return false;"  class="navbar-toggle collapsed " data-toggle="collapse" tabindex = "-1" >☻   </button>

                <a id = "navbar_logo" tabindex = "-1" class="navbar-brand" href="/games" style = "width: 100px; background:url(static/custom/s5_logo.png); background-position: center center; background-repeat: no-repeat; background-size: contain  "></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="navbar_parametrs">
                    <li class="dropdown  hidden-xs">
                        <a tabindex = "-1" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Модуль <span id = "navbar_modul" style = "font-size:12"> (просто)  </span></a>
                        <ul class="dropdown-menu black_style" id = "black_style_2" role="menu">

                            <li><a href="" onclick = "button_prosto_f(); return false;">Простое</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "button_brat_f();   return false;">Помощь брата</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "button_drug_f();  return false;">Помощь друга</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "button_combo_f();   return false;">Комбинированный счет</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "button_random_f();   return false;">Произвольный счет</a></li>


                        </ul>
                    </li>

                    <li class="dropdown   hidden-xs">
                        <a tabindex = "-1" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Операции  <span id = 'navbar_operation' style = "font-size:12">(+/-) </span></a>
                        <ul class="dropdown-menu black_style"  id = "black_style_3" role="menu">

                            <li><a href="" onclick = "operation_plus();  return false;" >Сложение</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "operation_minus();  return false;" >Вычитание</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "operation_plus_minus();  return false;">Сложение+вычитание</a></li>


                        </ul>
                    </li>

                    <li class="dropdown   hidden-xs">
                        <a tabindex = "-1" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Сложность <span id = 'navbar_slojnost'style = "font-size:12">(1)</span></a>
                        <ul class="dropdown-menu black_style" id = "black_style_4"  role="menu">
                            <li><a href="" onclick = "Kolcifr_1();  return false;" >1</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "Kolcifr_2();  return false;">10</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "Kolcifr_3();  return false;" >100</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "Kolcifr_4();  return false;">1000</a></li>
                        </ul>
                    </li>



                    <li tabindex = "-1" class="dropdown   hidden-xs">
                        <a tabindex = "-1" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Кол-во слагаемых  <span id = 'navbar_Kolslog' style = "font-size:12">(4)</span></a>
                        <ul class="dropdown-menu black_style" id = "black_style_5"  role="menu">
                            <li><a href="" onclick = "Kolslog_10();  return false;" > Ввод</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('navbar_Kolslog').innerHTML = '(2)'; document.getElementById('Kolslog_tablo').innerHTML = 2; return false;">2</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('navbar_Kolslog').innerHTML = '(3)'; document.getElementById('Kolslog_tablo').innerHTML = 3; return false;">3</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('navbar_Kolslog').innerHTML = '(4)'; document.getElementById('Kolslog_tablo').innerHTML = 4; return false;">4</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('navbar_Kolslog').innerHTML = '(5)'; document.getElementById('Kolslog_tablo').innerHTML = 5; return false;">5</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('navbar_Kolslog').innerHTML = '(6)'; document.getElementById('Kolslog_tablo').innerHTML = 6; return false;" >6</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('navbar_Kolslog').innerHTML = '(7)'; document.getElementById('Kolslog_tablo').innerHTML = 7; return false;">7</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('navbar_Kolslog').innerHTML = '(8)'; document.getElementById('Kolslog_tablo').innerHTML = 8; return false;">8</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('navbar_Kolslog').innerHTML = '(9)'; document.getElementById('Kolslog_tablo').innerHTML = 9; return false;">9</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('navbar_Kolslog').innerHTML = '(10)'; document.getElementById('Kolslog_tablo').innerHTML = 10; return false;">10</a></li>
                        </ul>
                    </li>

                    <li class="dropdown   hidden-xs">
                        <a href="" tabindex="-1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Интервал <span id = 'navbar_interval' style = "font-size:12">(1 сек)</span></a>
                        <ul class="dropdown-menu black_style" id= "black_style_6" role="menu">
                            <li><a href="" onclick = "skorost_1();  return false;" >Ввод</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('Skorost_tablo').innerHTML = 0.3; sychro_f(); document.getElementById('navbar_interval').innerHTML = '(0.3 сек)';  return false;" >0.3 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('Skorost_tablo').innerHTML = 0.5; sychro_f(); document.getElementById('navbar_interval').innerHTML = '(0.5 сек)';  return false;" >0.5 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('Skorost_tablo').innerHTML = 0.7; sychro_f(); document.getElementById('navbar_interval').innerHTML = '(0.7 сек)';  return false;" >0.7 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('Skorost_tablo').innerHTML = 1; sychro_f(); document.getElementById('navbar_interval').innerHTML = '(1 сек)';  return false;" >1 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('Skorost_tablo').innerHTML = 1.5; sychro_f(); document.getElementById('navbar_interval').innerHTML = '(1.5 сек)';  return false;" >1.5 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('Skorost_tablo').innerHTML = 2; sychro_f(); document.getElementById('navbar_interval').innerHTML = '(2 сек)';  return false;" >2 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('Skorost_tablo').innerHTML = 2.5; sychro_f(); document.getElementById('navbar_interval').innerHTML = '(2.5 сек)';  return false;" >2.5 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('Skorost_tablo').innerHTML = 3; sychro_f(); document.getElementById('navbar_interval').innerHTML = '(3 сек)';  return false;" >3 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('Skorost_tablo').innerHTML = 5; sychro_f(); document.getElementById('navbar_interval').innerHTML = '(5 сек)';  return false;" >5 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "document.getElementById('Skorost_tablo').innerHTML = 7; sychro_f(); document.getElementById('navbar_interval').innerHTML = '(7 сек)';  return false;" >7 сек</a></li>

                        </ul>
                    </li>


                    <li class="dropdown hidden-xs">
                        <a href="" tabindex="-1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Режим (<span id = 'navbar_ekran_number' style = "font-size:12">1 экран</span>)</a>
                        <ul class="dropdown-menu black_style" id= "black_style_27" role="menu">
                            <li><a href="" onclick = "$('#navbar_ekran_number').html('Разброс'); random_ekran_f(); return false;" >Разброс</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#navbar_ekran_number').html('1 экран'); unrandom_ekran_f(); show_window_task_f(1); return false;" >1 экран</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#navbar_ekran_number').html('2 экрана'); unrandom_ekran_f(); show_window_task_f(2); return false;" >2 экрана</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#navbar_ekran_number').html('3 экрана'); unrandom_ekran_f(); show_window_task_f(3); return false;" >3 экрана</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#navbar_ekran_number').html('4 экрана'); unrandom_ekran_f(); show_window_task_f(4); return false;" >4 экрана</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#navbar_ekran_number').html('6 экранов'); unrandom_ekran_f(); show_window_task_f(6); return false;" >6 экранов</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "$('#navbar_ekran_number').html('8 экранов'); unrandom_ekran_f(); show_window_task_f(8); return false;" >8 экранов</a></li>
                        </ul>
                    </li>




                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav hidden-md hidden-sm hidden-xs" >
                        <div id = "navbar_pravilno_text" style=" text-align:center">  Правильно 0 из 0 (0%)  </div>
                        <div  class="progress progress-striped active black_style"  id = "black_style_19"  style="margin-bottom:0; ">
                            <div  id = "navbar_pravilno_progress" class="progress-bar progress-bar-success" style="width: 0%"></div>
                        </div>
                    </ul>
                    <ul class="nav navbar-nav" >
                        <div class="btn-group">
                            <div class="btn-group-vertical" >
                                <a onclick = " show_example(); return false;"  class="btn btn-sm btn-default btn-sm black_style" id = "black_style_25"  tabindex = "-1" ><b>EX</b> </a>

                            </div>
                            <div class="btn-group-vertical" >
                                <a id = "black_style_20" onclick = " if (voice==false){voice=true; this.innerHTML = '♫'; $('#button_voice').html('♫')} else{voice=false; this.innerHTML = '♪'; $('#button_voice').html('♪')}; return false;"  class="btn btn-sm btn-default btn-sm black_style" id = "black_style_26"  tabindex = "-1" ><b>♫</b> </a>
                                <a  tabindex = "-1" class="btn btn-sm btn-default btn-sm black_style" id = "black_style_21" onclick = "restart(); return false;" >♻</a>

                            </div>
                            <div class="btn-group-vertical" >
                                <a onclick = "customChangeFon(); return false;"  class="btn btn-sm btn-default btn-sm black_style" id = "black_style_22" tabindex = "-1" >☻   </a>
                                <a onclick = "change_style(); return false;"  class="btn btn-sm btn-default btn-sm black_style" id = "black_style_23"  tabindex = "-1" >S   </a>

                            </div>
                            <div class="btn-group-vertical" >
                                <a  tabindex = "-1" class="btn btn-sm btn-default btn-sm black_style" id = "black_style_24"  onclick = "button_nastroyki_f(); return false;">&#9776</a>
                                <a  tabindex = "-1" id = "button_start" class="btn btn-sm btn-default btn-sm black_style"   onclick = "start_0(); return false;" >►</a>
                            </div>
                        </div>
                    </ul>
            </div>
        </div>
    </nav>


    <div  id = "window_task" class="row black_style8 " style="margin:auto; height:100vh" >
        <div style="margin-top:10vh"></div>
        <div id = "window_task_0" style="margin:0;padding:0">

            <input   onclick =  "if (device.mobile() || device.tablet() || $('#button_start').html() == '■' || $('#button_start').html() == '►' ) start_0(); return false;"  class="  form-control " id="Editbox_ekran_0" type="text" value="►" style="
            border-width:0; cursor: pointer; color:white;
            text-align: center;" readonly autofocus>
            <textarea onclick =  "start_0(); return false;" class=" form-control hidden" id="Editbox_otvet_0" type="number" value="" style="
            border-width:0; cursor: pointer;  color:white;
            text-align:  center; resize:none; overflow: hidden; padding-bottom:20% " readonly autofocus> </textarea>
        </div>
        <div id = "window_task_1" style="margin:0;padding:0" class = "hidden" >
            <div id = "window_heading_1" class="panel black_style" style="margin:0; visibility:hidden">
                <div class="panel-heading" style=" height: 5vh; padding-top:3; margin:0 ;text-align:center;  " >
                    <span  style = "cursor:pointer" onclick = "var tx = this.innerHTML; this.innerHTML=prompt('Введите имя '); if (this.innerHTML == '') this.innerHTML = tx; return false;" class="panel-title" >1</span>  (<span id = "points_1" >0</span>)  <span style = "cursor:pointer" onclick = "interval_f(1); return false;" > интервал: </span> (<span id="interval_1" >1</span>)
                </div>
            </div>
            <input   onclick =  "if (device.mobile() || device.tablet() || $('#button_start').html() == '■' || $('#button_start').html() == '►' ) start_0(); return false;"  class="  form-control " id="Editbox_ekran_1" type="text" value="►" style="
            border-width:0; cursor: pointer; color:white; font-size: 50px;
            text-align: center;" readonly autofocus>
            <textarea onclick =  "start_0(); return false;" class=" form-control hidden" id="Editbox_otvet_1" type="number" value="►" style="
            border-width:0; cursor: pointer;  color:white;
            text-align:  center; resize:none; overflow: hidden; padding-bottom:20% " readonly autofocus> </textarea>

        </div>

        <div id = "keyboard" class="hidden ">
            <div class="btn-group btn-group-justified">
                <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') Editbox_ekran_1.value += 1; return false;" id= "black_style_7" class="black_style btn btn-default btn-sm " ><b>1</b></a>
                <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') Editbox_ekran_1.value += 2; return false;" id= "black_style_8" class="black_style btn btn-default btn-sm " ><b>2</b></a>
                <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') Editbox_ekran_1.value += 3; return false;" id= "black_style_9" class="black_style btn btn-default btn-sm " ><b>3</b></a>
            </div>
            <div class="btn-group btn-group-justified">
                <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') Editbox_ekran_1.value += 4; return false;" id= "black_style_10" class="black_style btn btn-default btn-sm " ><b>4</b></a>
                <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') Editbox_ekran_1.value += 5; return false;"  id= "black_style_11"class="black_style btn btn-default btn-sm " ><b>5</b></a>
                <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') Editbox_ekran_1.value += 6; return false;"  id= "black_style_12"class="black_style btn btn-default btn-sm " ><b>6</b></a>
            </div>
            <div class="btn-group btn-group-justified">
                <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') Editbox_ekran_1.value += 7; return false;"  id= "black_style_13"class="black_style btn btn-default btn-sm " ><b>7</b></a>
                <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') Editbox_ekran_1.value += 8; return false;"  id= "black_style_14" class="black_style btn btn-default btn-sm " ><b>8</b></a>
                <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') Editbox_ekran_1.value += 9; return false;"  id= "black_style_15" class="black_style btn btn-default btn-sm " ><b>9</b></a>
            </div>
            <div class="btn-group btn-group-justified">
                <a  onclick = "start_0(); return false;"  id= "black_style_16" class="black_style btn btn-default btn-sm " ><b>►</b></a>
                <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') Editbox_ekran_1.value += 0; return false;"  id= "black_style_17" class="black_style btn btn-default btn-sm " ><b>0</b></a>
                <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') Editbox_ekran_1.value = ( Editbox_ekran_1.value < 10 ? '' : parseInt(Editbox_ekran_1.value/10)); return false;"  id= "black_style_18" class="black_style btn btn-default btn-sm" ><b>←</b></a>
            </div>
        </div>

        <div id = "window_task_2" class = "hidden" style="margin:0;padding:0">
            <div id = "window_heading_2" class="panel  black_style" style="margin:0">
                <div class="panel-heading" style=" height: 5vh; padding-top:3; margin:0 ;text-align:center;  " >
                    <span  style = "cursor:pointer" onclick = "var tx = this.innerHTML; this.innerHTML=prompt('Введите имя '); if (this.innerHTML == '') this.innerHTML = tx; return false;" class="panel-title" >2</span>  (<span id = "points_2" >0</span>) <span style = "cursor:pointer" onclick = "interval_f(2); return false;" > интервал: </span> (<span id="interval_2" >1</span>)
                </div>
            </div>
            <input   onclick =  "if (device.mobile() || device.tablet() || $('#button_start').html() == '■' || $('#button_start').html() == '►' ) start_0(); return false;"  class=" form-control " id="Editbox_ekran_2" type="text" value="►" style="
            border-width:0; cursor: pointer;  color:white;
            text-align: center;" readonly autofocus>
            <textarea onclick =  "start_0(); return false;" class=" form-control hidden" id="Editbox_otvet_2" type="number" value="" style="
            border-width:0; cursor: pointer;  color:white;
            text-align:  center; resize:none; overflow: hidden; padding-bottom:20% " readonly autofocus> </textarea>

        </div>
        <div id = "window_task_3" class = "hidden" style="margin:0;padding:0">
            <div id = "window_heading_3" class="panel  black_style" style="margin:0">
                <div class="panel-heading" style=" height: 5vh; padding-top:3; margin:0 ;text-align:center;  " >
                    <span  style = "cursor:pointer" onclick = "var tx = this.innerHTML; this.innerHTML=prompt('Введите имя '); if (this.innerHTML == '') this.innerHTML = tx; return false;" class="panel-title" >3</span>  (<span id = "points_3" >0</span>) <span style = "cursor:pointer" onclick = "interval_f(3); return false;" > интервал: </span> (<span id="interval_3" >1</span>)
                </div>
            </div>
            <input   onclick =  "if (device.mobile() || device.tablet() || $('#button_start').html() == '■' || $('#button_start').html() == '►' ) start_0(); return false;"  class=" form-control " id="Editbox_ekran_3" type="text" value="►" style="
            border-width:0; cursor: pointer;  color:white;
            text-align: center;" readonly autofocus>
            <textarea onclick =  "start_0(); return false;" class=" form-control hidden" id="Editbox_otvet_3" type="number" value="" style="
            border-width:0; cursor: pointer;  color:white;
            text-align:  center; resize:none; overflow: hidden; padding-bottom:20% " readonly autofocus> </textarea>

        </div>
        <div id = "window_task_4" class = "hidden" style="margin:0;padding:0">
            <div id = "window_heading_4" class="panel  black_style" style="margin:0">
                <div class="panel-heading" style=" height: 5vh; padding-top:3; margin:0 ;text-align:center;  " >
                    <span  style = "cursor:pointer" onclick = "var tx = this.innerHTML; this.innerHTML=prompt('Введите имя '); if (this.innerHTML == '') this.innerHTML = tx; return false;" class="panel-title" >4</span>  (<span id = "points_4" >0</span>) <span style = "cursor:pointer" onclick = "interval_f(4); return false;" > интервал: </span> (<span id="interval_4" >1</span>)
                </div>
            </div>
            <input   onclick =  "if (device.mobile() || device.tablet() || $('#button_start').html() == '■' || $('#button_start').html() == '►' ) start_0(); return false;"  class=" form-control " id="Editbox_ekran_4" type="text" value="►" style="
            border-width:0; cursor: pointer;  color:white;
            text-align: center;" readonly autofocus>
            <textarea onclick =  "start_0(); return false;" class=" form-control hidden" id="Editbox_otvet_4" type="number" value="" style="
            border-width:0; cursor: pointer;  color:white;
            text-align:  center; resize:none; overflow: hidden; padding-bottom:20% " readonly autofocus> </textarea>

        </div>
        <div id = "window_task_5" class = "hidden" style="margin:0;padding:0">
            <div id = "window_heading_5" class="panel  black_style" style="margin:0">
                <div class="panel-heading" style=" height: 5vh; padding-top:3; margin:0 ;text-align:center;  " >
                    <span  style = "cursor:pointer" onclick = "var tx = this.innerHTML; this.innerHTML=prompt('Введите имя '); if (this.innerHTML == '') this.innerHTML = tx; return false;" class="panel-title" >5</span>  (<span id = "points_5" >0</span>) <span style = "cursor:pointer" onclick = "interval_f(5); return false;" > интервал: </span> (<span id="interval_5" >1</span>)
                </div>
            </div>
            <input   onclick =  "if (device.mobile() || device.tablet() || $('#button_start').html() == '■' || $('#button_start').html() == '►' ) start_0(); return false;"  class=" form-control " id="Editbox_ekran_5" type="text" value="►" style="
            border-width:0; cursor: pointer;  color:white;
            text-align: center;" readonly autofocus>
            <textarea onclick =  "start_0(); return false;" class=" form-control hidden" id="Editbox_otvet_5" type="number" value="" style="
            border-width:0; cursor: pointer;  color:white;
            text-align:  center; resize:none; overflow: hidden; padding-bottom:20% " readonly autofocus> </textarea>

        </div>
        <div id = "window_task_6" class = "hidden" style="margin:0;padding:0">
            <div id = "window_heading_6" class="panel  black_style" style="margin:0">
                <div class="panel-heading" style=" height: 5vh; padding-top:3; margin:0 ;text-align:center;  " >
                    <span  style = "cursor:pointer" onclick = "var tx = this.innerHTML; this.innerHTML=prompt('Введите имя '); if (this.innerHTML == '') this.innerHTML = tx; return false;" class="panel-title" >6</span>  (<span id = "points_6" >0</span>) <span style = "cursor:pointer" onclick = "interval_f(6); return false;" > интервал: </span> (<span id="interval_6" >1</span>)
                </div>
            </div>
            <input   onclick =  "if (device.mobile() || device.tablet() || $('#button_start').html() == '■' || $('#button_start').html() == '►' ) start_0(); return false;"  class=" form-control " id="Editbox_ekran_6" type="text" value="►" style="
            border-width:0; cursor: pointer;  color:white;
            text-align: center;" readonly autofocus>
            <textarea onclick =  "start_0(); return false;" class=" form-control hidden" id="Editbox_otvet_6" type="number" value="" style="
            border-width:0; cursor: pointer;  color:white;
            text-align:  center; resize:none; overflow: hidden; padding-bottom:20% " readonly autofocus> </textarea>

        </div>
        <div id = "window_task_7" class = "hidden" style="margin:0;padding:0">
            <div id = "window_heading_7" class="panel  black_style" style="margin:0">
                <div class="panel-heading" style=" height: 5vh; padding-top:3; margin:0 ;text-align:center;  " >
                    <span  style = "cursor:pointer" onclick = "var tx = this.innerHTML; this.innerHTML=prompt('Введите имя '); if (this.innerHTML == '') this.innerHTML = tx; return false;" class="panel-title" >7</span>  (<span id = "points_7" >0</span>) <span style = "cursor:pointer" onclick = "interval_f(7); return false;" > интервал: </span> (<span id="interval_7" >1</span>)
                </div>
            </div>
            <input   onclick =  "if (device.mobile() || device.tablet() || $('#button_start').html() == '■' || $('#button_start').html() == '►' ) start_0(); return false;"  class=" form-control " id="Editbox_ekran_7" type="text" value="►" style="
            border-width:0; cursor: pointer;  color:white;
            text-align: center;" readonly autofocus>
            <textarea onclick =  "start_0(); return false;" class=" form-control hidden" id="Editbox_otvet_7" type="number" value="" style="
            border-width:0; cursor: pointer;  color:white;
            text-align:  center; resize:none; overflow: hidden; padding-bottom:20% " readonly autofocus> </textarea>

        </div>
        <div id = "window_task_8" class = "hidden" style="margin:0;padding:0">
            <div id = "window_heading_8" class="panel  black_style" style="margin:0">
                <div class="panel-heading" style=" height: 5vh; padding-top:3; margin:0 ;text-align:center;  " >
                    <span  style = "cursor:pointer" onclick = "var tx = this.innerHTML; this.innerHTML=prompt('Введите имя '); if (this.innerHTML == '') this.innerHTML = tx; return false;" class="panel-title" >8</span>  (<span id = "points_8" >0</span>) <span style = "cursor:pointer" onclick = "interval_f(8); return false;" > интервал: </span> (<span id="interval_8" >1</span>)
                </div>
            </div>
            <input   onclick =  "if (device.mobile() || device.tablet() || $('#button_start').html() == '■' || $('#button_start').html() == '►' ) start_0(); return false;"  class=" form-control " id="Editbox_ekran_8" type="text" value="►" style="
            border-width:0; cursor: pointer;  color:white;
            text-align: center;" readonly autofocus>
            <textarea onclick =  "start_0(); return false;" class=" form-control hidden" id="Editbox_otvet_8" type="number" value="" style="
            border-width:0; cursor: pointer;  color:white;
            text-align:  center; resize:none; overflow: hidden; padding-bottom:20% " readonly autofocus> </textarea>

        </div>

    </div>
</div>

<script>
    var fontsize=35; fontsize_vw="35vw"
    function change_fontsize(){
        for (var i=1; i<=8; i++){
            Editbox_ekran_id = "#Editbox_ekran_" + i.toString()
            fontsize_vw = fontsize.toString() +"vw"
            $(Editbox_ekran_id).css("font-size", fontsize_vw)
        }
    }
    function fontsize_plus(){
        fontsize++
        $("#fontsize_tablo").html(fontsize)
        change_fontsize();
    }

    function fontsize_minus(){
        fontsize--
        $("#fontsize_tablo").html(fontsize)
        change_fontsize();
    }
    function fontsize_f(){
        var t = Math.abs(parseFloat(prompt(" Введите размер шрифта в интервале 2 до 60")));
        if (isNaN(t) || t < 2 || t > 60) {
        }
        else{
            t = parseInt(t);
            fontsize = t
            $("#fontsize_tablo").html(fontsize)
            change_fontsize()
        }
    }

    function unrandom_ekran_f(){
        random_ekran = false
        for (var i=1;i<=8;i++){
            window_heading_id = "#window_heading_" + i.toString()
            $(window_heading_id).css("visibility", "visible")
        }
    }
    function random_ekran_f(){
        synchro = true
        show_window_task_f(1)
        random_ekran = true
        for (var i=1;i<=8;i++){
            window_heading_id = "#window_heading_" + i.toString()
            $(window_heading_id).css("visibility", "hidden")
        }
    }
    var random_ekran = false
    function interval_f(n){
        synchro = false
        interval_id = "#interval_" + n;
        var tt = parseFloat($(interval_id).html());
        var t = Math.abs(parseFloat(prompt(" Введите интервал времени задержки в пределах 0.1 до 10 сек  ")));

        if (isNaN(t) || t < 0.1 || t > 10) {
            $(interval_id).html(tt);
            interval[n] = tt*1000
        }
        else{
            $(interval_id).html(t);
            interval[n] = t*1000;
        }


    }
    var style = true, voice=true, interval = []
    var ekran_number = 1;
    var task = {};

    function show_window_task_f(n){

        if (!(device.mobile() || device.tablet())){
            if (n==1 ) $("#window_heading_1").css("visibility","hidden")
            else if (n!=1 && random_ekran==false)  $("#window_heading_1").css("visibility","visible")
            ekran_number = parseInt(n);
            for (var i=0; i<=8; i++){
                window_task_id = "#window_task_" + i.toString();
                $(window_task_id).removeClass("col-lg-12 col-md-12 col-sm-12 col-lg-6 col-md-6 col-sm-6 col-lg-4 col-md-4 col-sm-4 col-lg-3 col-md-3 col-sm-3");
                $(window_task_id).addClass("hidden");
            }
            if (n<=3){
                for (var i=1; i<=n; i++){

                    window_task_id = "#window_task_" + i.toString();
                    col = "col-lg-" + parseInt(12/n) + " col-md-" + parseInt(12/n) + " col-sm-" + parseInt(12/n);
                    $(window_task_id).addClass(col);
                    $(window_task_id).css("height", "90vh");
                    $(window_task_id).removeClass("hidden");
                    Editbox_ekran_id = "#Editbox_ekran_" + i.toString();

                    $(Editbox_ekran_id).css("height", "85vh");
                    Editbox_otvet_id = "#Editbox_otvet_" + i.toString();
                    fontsize_vw = parseInt(100/(3*n)) + "vw"
                    fontsize = parseInt(100/(3*n))
                    $("#fontsize_tablo").html(fontsize)

                    if (n==1) {
                        fontsize_vw = 35 + "vw";
                        fontsize = 35
                        $("#fontsize_tablo").html(fontsize)
                        $(Editbox_ekran_id).css("font-size", fontsize_vw);
                    }
                    if (n==3) { vh = "7vh";  $(Editbox_ekran_id).css("font-size", fontsize_vw);}
                    else {vh = "10vh"; $(Editbox_ekran_id).css("font-size", fontsize_vw); }
                    $(Editbox_otvet_id).css("font-size", vh);
                    $(Editbox_otvet_id).css("height", "85vh");
                }
            }
            else if(n==4){
                for (var i=1; i<=n; i++){
                    window_task_id = "#window_task_" + i.toString();
                    col = "col-lg-6 col-md-6 col-sm-6";
                    $(window_task_id).addClass(col);
                    $(window_task_id).removeClass("hidden");
                    $(window_task_id).css("height", "45vh");
                    Editbox_ekran_id = "#Editbox_ekran_" + i.toString();
                    $(Editbox_ekran_id).css("height", "40vh");
                    fontsize_vw = parseInt(100/(3*2)) + "vw"
                    fontsize = parseInt(100/(3*2))
                    $("#fontsize_tablo").html(fontsize)
                    $(Editbox_ekran_id).css("font-size", fontsize_vw);
                    Editbox_otvet_id = "#Editbox_otvet_" + i.toString();
                    $(Editbox_otvet_id).css("font-size", "5vh");
                    $(Editbox_otvet_id).css("height", "40vh");
                }
            }
            else if (n==5 || n==6){
                for (var i=1; i<=n; i++){
                    window_task_id = "#window_task_" + i.toString();
                    col = "col-lg-4 col-md-4 col-sm-4";
                    $(window_task_id).addClass(col);
                    $(window_task_id).removeClass("hidden");
                    $(window_task_id).css("height", "45vh");
                    Editbox_ekran_id = "#Editbox_ekran_" + i.toString();
                    $(Editbox_ekran_id).css("height", "40vh");
                    fontsize_vw = parseInt(100/(3*3)) + "vw"
                    fontsize = parseInt(100/(3*3))
                    $("#fontsize_tablo").html(fontsize)
                    $(Editbox_ekran_id).css("font-size", fontsize_vw);
                    Editbox_otvet_id = "#Editbox_otvet_" + i.toString();
                    $(Editbox_otvet_id).css("font-size", "5vh");
                    $(Editbox_otvet_id).css("height", "40vh");
                }
            }
            else{
                for (var i=1; i<=n; i++){
                    window_task_id = "#window_task_" + i.toString();
                    col = "col-lg-3 col-md-3 col-sm-3";
                    $(window_task_id).addClass(col);
                    $(window_task_id).removeClass("hidden");
                    $(window_task_id).css("height", "45vh");
                    Editbox_ekran_id = "#Editbox_ekran_" + i.toString();
                    $(Editbox_ekran_id).css("height", "40vh");
                    fontsize_vw = parseInt(100/(3*4)) + "vw"
                    fontsize = parseInt(100/(3*4))
                    $(Editbox_ekran_id).css("font-size", fontsize_vw);
                    Editbox_otvet_id = "#Editbox_otvet_" + i.toString();
                    $(Editbox_otvet_id).css("font-size", "5vh");
                    $(Editbox_otvet_id).css("height", "40vh");
                }
            }
        }
        else{
            if (device.landscape()) $("#Editbox_ekran_1").css("font-size", "30vh");
            else {
                $("#Editbox_ekran_1").css("font-size", "35vw");
            }
            $("#Editbox_otvet_1").css("font-size", "7vh");
            $("#Editbox_ekran_1").css("height", "50vh");
            $("#Editbox_otvet_1").css("height", "50vh");
            $("#window_heading_1").addClass("hidden");
        }
    }

    function change_style(){
        if (style==true){
            style = false
            $("#window_task").removeClass('black_style8');
            $("#window_task").addClass('white_style');

            for (var i=0;i<=8; i++){
                window_heading_id = "#window_heading_" + i.toString();
                $(window_heading_id).removeClass("black_style");
                $(window_heading_id).addClass("white_style");
                Editbox_ekran_id = "#Editbox_ekran_" + i.toString();
                $(Editbox_ekran_id).css("color", "green");
                Editbox_otvet_id = "#Editbox_otvet_" + i.toString();
                $(Editbox_otvet_id).css("color", "green");
            }
            document.getElementById("navbar_logo").style.backgroundImage = "url(/static/custom/css/logo_rus.png)"
            $("#button_start").removeClass('black_style');
            $("#button_start").addClass('white_style');
            for (var i=1;i<=27;i++){
                element_id = "#black_style_" + i.toString()
                $(element_id).removeClass('black_style');
                $(element_id).addClass('white_style');
            }
        }
        else{
            style = true
            document.getElementById("navbar_logo").style.backgroundImage = "url(/static/custom/css/s5_logo.png)"
            $("#window_task").addClass('black_style8');
            $("#window_task").removeClass('white_style');
            for (var i=0;i<=8; i++){
                window_heading_id = "#window_heading_" + i.toString();
                $(window_heading_id).addClass("black_style");
                $(window_heading_id).removeClass("white_style");
                Editbox_ekran_id = "#Editbox_ekran_" + i.toString();
                $(Editbox_ekran_id).css("color", "white");
                Editbox_otvet_id = "#Editbox_otvet_" + i.toString();
                $(Editbox_otvet_id).css("color", "white");
            }
            $("#button_start").addClass('black_style');
            $("#button_start").removeClass('white_style');
            for (var i=1;i<=27;i++){
                element_id = "#black_style_" + i.toString()
                $(element_id).addClass('black_style');
                $(element_id).removeClass('white_style');
            }
        }
    }

    function changefont(){
        for (var i=0; i<=8;i++){
            Editbox_ekran_id="#Editbox_ekran_"+i.toString()
            switch(document.getElementById('select').selectedIndex){
                case 0:
                    $(Editbox_ekran_id).css("fontFamily","Arial")
                    break;
                case 1:
                    $(Editbox_ekran_id).css("fontFamily","Arial")
                    break;
                case 2:
                    $(Editbox_ekran_id).css("fontFamily","Jokerman")
                    break;
                case 3:
                    $(Editbox_ekran_id).css("fontFamily","DFPOP1-W9")
                    break;
                case 4:
                    $(Editbox_ekran_id).css("fontFamily","Playbill")
                    break;
                case 5:
                    $(Editbox_ekran_id).css("fontFamily","Showcard Gothic")
                    break;

            }
        }
    }

    var audio = new Audio();
    var audio2 = new Audio();
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
            audio.src = "<?= Url::to("@web/music/") ?>" + music;
            audio.play()
        }
        else {audio.pause();
            audio.currentTime = 0.0;}
    }

    function soundClick(n) {
        if (chered == true) {
            audio.src = "<?= Url::to("@web/music")?>/new_sound_"+n.toString() + '.mp3'
            audio.play()
        }
        else{
            audio2.src = "<?= Url::to("@web/music")?>/new_sound_"+n.toString() + '.mp3'
            audio2.play()
        }
        chered = !chered
    }

    var start_ok = true;

    window.onload=function(){

        for (var i=1; i<=8; i++) interval[i] = 1000;
        for (var i=1;i<=47;i++ ){
            var audio = document.createElement('audio');
            src = "<?= Url::to("@web/music")?>/new_incorrect-"+ i + ".mp3"
            audio.setAttribute('src',src);
            audio.setAttribute('preload','preload');
        }
        for (var i=1;i<=17;i++ ){
            var audio = document.createElement('audio');
            src = "<?= Url::to("@web/music")?>/new_correct-"+ i + ".mp3"
            audio.setAttribute('src',src);
            audio.setAttribute('preload','preload');
        }
        for (var i=1;i<=57;i++ ){
            var audio = document.createElement('audio');
            src = "<?= Url::to("@web/music")?>/new_present-"+ i + ".mp3"
            audio.setAttribute('src',src);
            audio.setAttribute('preload','preload');
        }
        for (var i=1;i<=4;i++ ){
            var audio = document.createElement('audio');
            src = "<?= Url::to("@web/music")?>/new_snd_"+ i + ".mp3"
            audio.setAttribute('src',src);
            audio.setAttribute('preload','preload');
        }

        for (var i=1;i<=99;i++ ){
            var audio = document.createElement('audio');
            src = "<?= Url::to("@web/music")?>/gplus_"+ i + ".mp3"
            audio.setAttribute('src',src);
            audio.setAttribute('preload','preload');
        }
        for (var i=1;i<=99;i++ ){
            var audio = document.createElement('audio');
            src = "<?= Url::to("@web/music")?>/gminus_"+ i + ".mp3"
            audio.setAttribute('src',src);
            audio.setAttribute('preload','preload');
        }


        change_background();
        for (var i=0; i<=8; i++){
            Editbox_ekran_id = "#Editbox_ekran_" + i.toString();
            $(Editbox_ekran_id).css("fontFamily", 'Showcard Gothic');
        }

        if (device.mobile() || device.tablet() ){
            $("#navbar_logo").css("width","60")
            $("#navbar_parametrs").addClass("hidden")
            $("#keyboard").removeClass("hidden")
            Editbox_ekran_0.style.height = "50vh";
            Editbox_otvet_0.style.height = "50vh";
            Editbox_ekran_0.style.fontSize = "27vh";
            Editbox_otvet_0.style.fontSize = "6vh";
            for (var i=7;i<=18;i++){
                element_id = "black_style_"+i;
                document.getElementById(element_id).style.height = "8vh";
                document.getElementById(element_id).style.fontSize = "4vh";
            }
        }
        else{
            $("#navbar_parametrs").removeClass("hidden")
            $("#keyboard").addClass("hidden")

            Editbox_ekran_0.style.height = "90vh";
            Editbox_otvet_0.style.height = "90vh";
            Editbox_ekran_0.style.fontSize = "50vh";
            Editbox_otvet_0.style.fontSize = "10vh";
            // Editbox_ekran_1.style.height = "90vh";
            // Editbox_otvet_1.style.height = "90vh";

        }
        // Editbox_ekran_0.value = "►";
        show_window_task_f(1);
        // if (device.mobile() || device.tablet()) {
        //   $('#Editbox_ekran_0').val("Подождите немного... ");
        //   Editbox_ekran_0.style.fontSize = "5vw"
        // }
        // $('#Editbox_ekran_1').val("Подождите немного... ");
        // Editbox_ekran_1.style.fontSize = "10vh";
        // setTimeout("start_ok = true; soundClick(1); $('#Editbox_ekran_1').val('►'); if (device.mobile() || device.tablet()) Editbox_ekran_0.style.fontSize = '27vh';  $('#Editbox_ekran_0').val('►'); Editbox_ekran_1.style.fontSize = fontsize_vw;", 5000);

    }

    var image_schotchik = 0;
    function show_example(){
        for (var i=1; i<=ekran_number; i++){
            example = "\n";
            for (var j=0; j<primer1[i].length; j++){
                if (parseInt(primer1[i][j])>0 && j!=0) example += "+" + primer1[i][j]
                else example += primer1[i][j]
            }
            example += student_answer
            Editbox_otvet_id = "#Editbox_otvet_" + i.toString()
            $(Editbox_otvet_id).val(example)
        }
    }

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



    function button_half_f(){
        if ( Button_half.classList.contains('active') ){
            Button_half.classList.remove('active');
            half = false;
        }
        else{
            Button_half.classList.add('active');
            half = true;
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


    function button_nastroyki_f(){
        $('#modal_settings').show();
    }

    function close_huese() {
        $('#modal_settings').hide();
    }

    function Kolslog_plus(){
        if (document.getElementById('Kolslog_tablo').innerHTML < 60) document.getElementById('navbar_Kolslog').innerHTML = '(' + ++document.getElementById('Kolslog_tablo').innerHTML +')';
    }

    function Kolslog_minus(){
        if (document.getElementById('Kolslog_tablo').innerHTML > 2) document.getElementById('navbar_Kolslog').innerHTML =  '(' + --document.getElementById('Kolslog_tablo').innerHTML +')';
    }
    function Kolslog_10(){
        var t = Math.abs(parseFloat(prompt(" Введите количество чисел в интервале 2 до 10")));
        if (isNaN(t) || t < 2 || t > 60) {
            document.getElementById('Kolslog_tablo').innerHTML = 10;
            document.getElementById('navbar_Kolslog').innerHTML = '('+ 10+')';
        }
        else{
            t = parseInt(t);
            document.getElementById('Kolslog_tablo').innerHTML = t;
            document.getElementById('navbar_Kolslog').innerHTML = '('+ t+')';
        }
    }



    function restart(){
        number_10=1
        prav = 0;
        vip = 0;
        show_pravilno();
        for (var i=1;i<=ekran_number; i++){
            points_id =  "#points_" + i.toString();
            $(points_id).html("0")
        }
    }

    function Kolcifr_1() {
        Button_Kolcifr_1.classList.add('active');
        Button_Kolcifr_2.classList.remove('active');
        Button_Kolcifr_3.classList.remove('active');
        Button_Kolcifr_4.classList.remove('active');
        Kolcifr = 1;
        document.getElementById('navbar_slojnost').innerHTML = '(1)';
    }

    function Kolcifr_2() {
        Button_Kolcifr_1.classList.remove('active');
        Button_Kolcifr_2.classList.add('active');
        Button_Kolcifr_3.classList.remove('active');
        Button_Kolcifr_4.classList.remove('active');
        Kolcifr = 2;
        document.getElementById('navbar_slojnost').innerHTML = '(10)';
    }

    function Kolcifr_3() {
        Button_Kolcifr_1.classList.remove('active');
        Button_Kolcifr_2.classList.remove('active');
        Button_Kolcifr_3.classList.add('active');
        Button_Kolcifr_4.classList.remove('active');
        Kolcifr = 3;
        document.getElementById('navbar_slojnost').innerHTML = '(100)';

    }

    function Kolcifr_4() {
        Button_Kolcifr_1.classList.remove('active');
        Button_Kolcifr_2.classList.remove('active');
        Button_Kolcifr_3.classList.remove('active');
        Button_Kolcifr_4.classList.add('active');
        Kolcifr = 4;
        document.getElementById('navbar_slojnost').innerHTML = '(1000)';
    }



    function operation_plus() {
        Button_operation_plus.classList.add('active');
        Button_operation_minus.classList.remove('active');
        Button_operation_plus_minus.classList.remove('active');
        Operation = 0;
        document.getElementById('navbar_operation').innerHTML = '(+)';

    }

    function operation_minus() {
        Button_operation_plus.classList.remove('active');
        Button_operation_minus.classList.add('active');
        Button_operation_plus_minus.classList.remove('active');
        Operation = 1;
        document.getElementById('navbar_operation').innerHTML = '(-)';

    }

    function operation_plus_minus() {
        Button_operation_plus.classList.remove('active');
        Button_operation_minus.classList.remove('active');
        Button_operation_plus_minus.classList.add('active');
        Operation = 2;
        document.getElementById('navbar_operation').innerHTML = '(+/-)';

    }



    // Кнопка выбора всех видов слагаемых
    function check_5(){
        if (button_prosto.classList.contains('active')){
            if (button_5.classList.contains('active')){
                button_5.classList.remove('active');
                button_6.classList.remove('active');
                button_7.classList.remove('active');
                button_8.classList.remove('active');
                button_9.classList.remove('active');
            }
            else{
                button_5.classList.add('active');
            }
        }
        else{
            if (button_5.classList.contains('active')){
                button_5.classList.remove('active');
            }
            else{
                button_5.classList.add('active')
            }
        }

    }

    function check_6(){
        if (button_prosto.classList.contains('active')){
            if (button_6.classList.contains('active')){
                button_6.classList.remove('active');
                button_7.classList.remove('active');
                button_8.classList.remove('active');
                button_9.classList.remove('active');
            }
            else{
                button_5.classList.add('active');
                button_6.classList.add('active');
            }
        }
        else{
            if (button_6.classList.contains('active')){
                button_6.classList.remove('active');
            }
            else{
                button_6.classList.add('active')
            }
        }

    }

    function check_7(){
        if (button_prosto.classList.contains('active')){
            if (button_7.classList.contains('active')){
                button_7.classList.remove('active');
                button_8.classList.remove('active');
                button_9.classList.remove('active');
            }
            else{
                button_5.classList.add('active');
                button_6.classList.add('active');
                button_7.classList.add('active');
            }
        }
        else{
            if (button_7.classList.contains('active')){
                button_7.classList.remove('active');
            }
            else{
                button_7.classList.add('active')
            }
        }

    }

    function check_8(){
        if (button_prosto.classList.contains('active')){
            if (button_8.classList.contains('active')){
                button_8.classList.remove('active');
                button_9.classList.remove('active');
            }
            else{
                button_5.classList.add('active');
                button_6.classList.add('active');
                button_7.classList.add('active');
                button_8.classList.add('active');
            }
        }
        else{
            if (button_8.classList.contains('active')){
                button_8.classList.remove('active');
            }
            else{
                button_8.classList.add('active')
            }
        }

    }

    function check_9(){
        if (button_prosto.classList.contains('active')){
            if (button_9.classList.contains('active')){
                button_9.classList.remove('active');
            }
            else{
                button_5.classList.add('active');
                button_6.classList.add('active');
                button_7.classList.add('active');
                button_8.classList.add('active');
                button_9.classList.add('active');
            }
        }
        else{
            if (button_9.classList.contains('active')){
                button_9.classList.remove('active');
            }
            else{
                button_9.classList.add('active')
            }
        }
    }
    function check_all(){
        if (!button_check_all.classList.contains('active')){
            button_check_all.classList.add('active');
            if (!button_1.classList.contains('active')) button_1.classList.add('active');
            if (!button_2.classList.contains('active')) button_2.classList.add('active');
            if (!button_3.classList.contains('active')) button_3.classList.add('active');
            if (!button_4.classList.contains('active')) button_4.classList.add('active');
            if (!button_5.classList.contains('active')) button_5.classList.add('active');
            if (!button_6.classList.contains('active')) button_6.classList.add('active');
            if (!button_7.classList.contains('active')) button_7.classList.add('active');
            if (!button_8.classList.contains('active')) button_8.classList.add('active');
            if (!button_9.classList.contains('active')) button_9.classList.add('active');
        }
        else{
            button_check_all.classList.remove('active');
            if (button_1.classList.contains('active') && !button_1.classList.contains('hidden')) button_1.classList.remove('active');
            if (button_2.classList.contains('active') && !button_2.classList.contains('hidden')) button_2.classList.remove('active');
            if (button_3.classList.contains('active') && !button_3.classList.contains('hidden')) button_3.classList.remove('active');
            if (button_4.classList.contains('active') && !button_4.classList.contains('hidden')) button_4.classList.remove('active');
            if (button_5.classList.contains('active') && !button_5.classList.contains('hidden')) button_5.classList.remove('active');
            if (button_6.classList.contains('active') && !button_6.classList.contains('hidden')) button_6.classList.remove('active');
            if (button_7.classList.contains('active') && !button_7.classList.contains('hidden')) button_7.classList.remove('active');
            if (button_8.classList.contains('active') && !button_8.classList.contains('hidden')) button_8.classList.remove('active');
            if (button_9.classList.contains('active') && !button_9.classList.contains('hidden')) button_9.classList.remove('active');
        }
    }

    function button_prosto_f(){
        document.getElementById('navbar_modul').innerHTML = '(просто )';
        if (button_prosto.classList.contains('active')){
            check_all();
        }
        else{
            button_6.classList.remove('hidden');
            button_7.classList.remove('hidden');
            button_8.classList.remove('hidden');
            button_9.classList.remove('hidden');
            Level = 1;
            button_prosto.classList.add('active');
            button_brat.classList.remove('active');
            button_drug.classList.remove('active');
            button_combo.classList.remove('active');
            button_random.classList.remove('active');

            button_check_all.classList.add('active');
            button_1.classList.add('active', 'hidden');
            button_2.classList.add('active', 'hidden');
            button_3.classList.add('active', 'hidden');
            button_4.classList.add('active', 'hidden');
            button_5.classList.add('active');
            button_6.classList.add('active');
            button_7.classList.add('active');
            button_8.classList.add('active');
            button_9.classList.add('active');
        }

    }

    function button_brat_f(){
        document.getElementById('navbar_modul').innerHTML = '(брат )';
        if (button_brat.classList.contains('active')){
            check_all();
        }
        else{
            button_1.classList.remove('hidden');
            button_2.classList.remove('hidden');
            button_3.classList.remove('hidden');
            button_4.classList.remove('hidden');
            Level = 2;
            button_prosto.classList.remove('active');
            button_brat.classList.add('active');
            button_drug.classList.remove('active');
            button_combo.classList.remove('active');
            button_random.classList.remove('active');

            button_check_all.classList.add('active');
            button_1.classList.add('active');
            button_2.classList.add('active');
            button_3.classList.add('active');
            button_4.classList.add('active');
            button_5.classList.add('active', 'hidden');
            button_6.classList.add('active', 'hidden');
            button_7.classList.add('active', 'hidden');
            button_8.classList.add('active', 'hidden');
            button_9.classList.add('active', 'hidden');
        }

    }

    function button_drug_f(){
        document.getElementById('navbar_modul').innerHTML = '(друг)  ';
        if (button_drug.classList.contains('active')){
            check_all();
        }
        else{
            button_1.classList.remove('hidden');
            button_2.classList.remove('hidden');
            button_3.classList.remove('hidden');
            button_4.classList.remove('hidden');
            button_5.classList.remove('hidden');
            button_6.classList.remove('hidden');
            button_7.classList.remove('hidden');
            button_8.classList.remove('hidden');
            button_9.classList.remove('hidden');
            Level = 3;
            button_prosto.classList.remove('active');
            button_brat.classList.remove('active');
            button_drug.classList.add('active');
            button_combo.classList.remove('active');
            button_random.classList.remove('active');

            button_check_all.classList.add('active');
            button_1.classList.add('active');
            button_2.classList.add('active');
            button_3.classList.add('active');
            button_4.classList.add('active');
            button_5.classList.add('active');
            button_6.classList.add('active');
            button_7.classList.add('active');
            button_8.classList.add('active');
            button_9.classList.add('active');
        }

    }

    function button_combo_f(){
        document.getElementById('navbar_modul').innerHTML = '(комбо) ';
        if (button_combo.classList.contains('active')){
            check_all();
        }
        else{
            button_6.classList.remove('hidden');
            button_7.classList.remove('hidden');
            button_8.classList.remove('hidden');
            button_9.classList.remove('hidden');
            Level = 4;
            button_prosto.classList.remove('active');
            button_brat.classList.remove('active');
            button_drug.classList.remove('active');
            button_combo.classList.add('active');
            button_random.classList.remove('active');

            button_check_all.classList.add('active');
            button_1.classList.add('active', 'hidden');
            button_2.classList.add('active', 'hidden');
            button_3.classList.add('active', 'hidden');
            button_4.classList.add('active', 'hidden');
            button_5.classList.add('active', 'hidden');
            button_6.classList.add('active');
            button_7.classList.add('active');
            button_8.classList.add('active');
            button_9.classList.add('active');
        }

    }

    function button_random_f(){
        document.getElementById('navbar_modul').innerHTML = ' (произв)(произв)';
        Level = 5;
        button_prosto.classList.remove('active');
        button_brat.classList.remove('active');
        button_drug.classList.remove('active');
        button_combo.classList.remove('active');
        button_random.classList.add('active');

        button_check_all.classList.add('active');
        button_1.classList.add('active', 'hidden');
        button_2.classList.add('active', 'hidden');
        button_3.classList.add('active', 'hidden');
        button_4.classList.add('active', 'hidden');
        button_5.classList.add('active', 'hidden');
        button_6.classList.add('active', 'hidden');
        button_7.classList.add('active', 'hidden');
        button_8.classList.add('active', 'hidden');
        button_9.classList.add('active', 'hidden');
    }
    function sychro_f(){
        synchro = true
        for (var j=1; j<=8;j++){
            interval_id = "#interval_"+j.toString()
            $(interval_id).html($('#Skorost_tablo').html())
            interval[j] = parseInt($('#Skorost_tablo').html()*1000)
        }
    }
    function skorost_1(){
        var t = Math.abs(parseFloat(prompt(" Введите интервал времени задержки в пределах 0.1 до 10 сек ")));
        if (isNaN(t) || t < 0.1 || t > 10) {
            document.getElementById('Skorost_tablo').innerHTML = 1;
            document.getElementById('navbar_interval').innerHTML = '('+ 1+ ' сек)' ;
        }
        else{

            document.getElementById('Skorost_tablo').innerHTML = t;
            document.getElementById('navbar_interval').innerHTML = '('+ t+ ' сек)' ;
        }
        sychro_f()
    }

    function skorost_plus(){

        var i = document.getElementById('Skorost_tablo').innerHTML;
        i = parseInt(i*10)/10;
        if (i >= 0 && i < 1) {
            i += 0.1;
            document.getElementById('Skorost_tablo').innerHTML = i.toFixed(1);
            document.getElementById('navbar_interval').innerHTML = '('+ i.toFixed(1)+ ' сек)' ;
        }
        else if (i >= 1 && i < 2) {
            i+=0.2;
            document.getElementById('Skorost_tablo').innerHTML = i.toFixed(1);
            document.getElementById('navbar_interval').innerHTML = '('+ i.toFixed(1)+ ' сек)' ;
        }
        else if (i >= 2 && i < 5) {
            i+=0.5;
            document.getElementById('Skorost_tablo').innerHTML = i.toFixed(1);
            document.getElementById('navbar_interval').innerHTML = '('+ i.toFixed(1)+ ' сек)' ;
        }

        else {
            i+=1;
            document.getElementById('Skorost_tablo').innerHTML  = i;
            document.getElementById('navbar_interval').innerHTML = '('+ i+ ' сек)' ;
        }
        sychro_f()
    }

    function skorost_minus(){
        var i = document.getElementById('Skorost_tablo').innerHTML;
        // i = Math.ceil(i*10/10);
        if (i > 0 && i <= 1) {
            i -= 0.1;
            if (i < 0.2) {document.getElementById('Skorost_tablo').innerHTML = 0.1; document.getElementById('navbar_interval').innerHTML = 0.1;}
            else{ document.getElementById('Skorost_tablo').innerHTML = i.toFixed(1);
                document.getElementById('navbar_interval').innerHTML = '('+ i.toFixed(1)+ ' сек)' ;
            } }
        else if (i > 1 && i <= 2) {
            i -= 0.2;
            document.getElementById('Skorost_tablo').innerHTML = i.toFixed(1);
            document.getElementById('navbar_interval').innerHTML = '('+ i.toFixed(1)+ ' сек)' ;
        }
        else if (i > 2 && i <= 5) {
            i -= 0.5;
            document.getElementById('Skorost_tablo').innerHTML = i.toFixed(1);
            document.getElementById('navbar_interval').innerHTML = '('+ i.toFixed(1)+ ' сек)' ;
        }

        else {
            i -= 1;
            document.getElementById('Skorost_tablo').innerHTML  = i;
            document.getElementById('navbar_interval').innerHTML = '('+ i+ ' сек)' ;
        }
        sychro_f()
    }


    document.onkeyup = function (e) {
        e = e || window.event;
        if (e.keyCode === 13|| e.keyCode === 32) {
            start_0();
        }
        return false;
    }


    function random_between(n,m){
        var t = n + randomInteger(m - n);
        return t;
    }


    function randomInteger (n) {
        var d = Math.floor(Math.random()*(n-0.0001))
        return d;
    }
    function power10(n){
        var d = 1;
        for (var i = 1; i <= n; i++) {
            d *= 10;
        }
        return d;
    }

    function duplicat(b, c) {
        for (var d = [], e = {}, f = {}, a = 0; a < b.length; a++) e[b[a]] = !0;
        for (a = 0; a < c.length; a++) f[c[a]] = !0;
        for (var g in e) f[g] && d.push(g);
        return d;
    };
    function include(a,arr){
        var c = false, i = 0;
        while (c == false && i<arr.length) {
            if (a == arr[i++]) c = true;
        }
        if (c == false) arr.push(a);
        return arr;
    };

    function exclude(a,arr){
        var c = false, i = 0;
        while (c == false && i < arr.length) {
            if (a == arr[i++]) {
                c = true;
            }
        }
        if (c == true) {
            arr.splice(i-1,1);
        }
        return arr;
    }

    var
        chislo = 0,
        chislo_plus_all = 0,
        znak = 0,
        schotchik = 0,
        Kolslog = 0,
        Kolcifr = 1,
        cifr = [],
        Level_Operation = 0,
        Level =1,
        Operation = 2,
        Skorost = 0,
        possible_checked_var = [],
        chislo_plus = [],
        vip = 0,
        prav = 0,
        wb_Timer1,
        half = true,
        Checked_cifr = [],
        prav_percent = 0,
        progress_up = 0,
        progress_up_key = true,
        progress_down_key = true;


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
        'Ты сообразителен!','Разумный ответ!','Стоящая работа!','Это достойно похвалы!','Ты прав!',
        'Захватывающе!','Правильный ответ!','Правильно!','Другой уровень!'];



    const POSSIBLE_CONST_PROSTO =
        [[[[0,1,2,3,4,5,6,7,8,9],[0,1,2,3,5,6,7,8],[0,1,2,5,6,7],[0,1,5,6],[0,5],[0,1,2,3,4],[0,1,2,3],[0,1,2],[0,1],[0]],
            [[],[],[],[],[],[],[],[],[],[]]],

            [[[],[],[],[],[],[],[],[],[],[]],
                [[0],[0,1],[0,1,2],[0,1,2,3],[0,1,2,3,4],[0,5],[0,1,5,6],[0,1,2,5,6,7],[0,1,2,3,5,6,7,8],[0,1,2,3,4,5,6,7,8,9]]],

            [[[0,1,2,3,4,5,6,7,8,9],[0,1,2,3,5,6,7,8],[0,1,2,5,6,7],[0,1,5,6],[0,5],[0,1,2,3,4],[0,1,2,3],[0,1,2],[0,1],[0]],
                [[0],[0,1],[0,1,2],[0,1,2,3],[0,1,2,3,4],[0,5],[0,1,5,6],[0,1,2,5,6,7],[0,1,2,3,5,6,7,8],[0,1,2,3,4,5,6,7,8,9]]]];

    const POSSIBLE_CONST_BRAT =
        [[[[1,2,3,4],[4],[3,4],[2,3,4],[1,2,3,4],[0,1,2,3,4],[0,1,2,3],[0,1,2],[0,1],[0]],
            [[0],[0,1],[0,1,2],[0,1,2,3],[0,1,2,3,4],[0,5],[5],[5,6],[5,6,7],[5,6,7,8]]],

            [[[5,6,7,8],[5,6,7,8],[5,6,7],[5,6],[0,5],[0,1,2,3],[0,1,2],[0,1],[0,1],[0]],
                [[0],[0,1],[0,1,2],[0,1,2,3],[0,1,2,3,4],[1,2,3,4],[2,3,4],[3,4],[4],[1,2,3,4]]],

            [[[1,2,3,4],[4],[3,4],[2,3,4],[1,2,3,4],[0,1,2,3,4],[0,1,2,3],[0,1,2],[0,1],[0]],
                [[0],[0,1],[0,1,2],[0,1,2,3],[0,1,2,3,4],[1,2,3,4],[2,3,4],[3,4],[4],[0,1,2,3,4,5,6,7,8,9]]]];


    const POSSIBLE_CONST_DRUG =
        [[[[3,4,5,6,7],[4,9],[4,3,8,9],[4,3,2,7,8,9],[6,7,8,9],[5],[4,5,9],[3,4,5,8,9],[2,3,4,5,7,8,9],[1,2,3,4,5,6,7,8,9]],
            [[],[],[],[],[],[],[],[],[],[]]],

            [[[],[],[],[],[],[],[],[],[],[]],
                [[1,2,3,4,5,6,7,8,9],[2,3,4,5,7,8,9],[3,4,5,8,9],[4,5,9],[5],[6,7,8,9],[4,3,2,7,8,9],[4,3,8,9],[4,9],[3,4,5,6,7]]],

            [[[3,4,5,6,7],[4,9],[4,3,8,9],[4,3,2,7,8,9],[6,7,8,9],[5],[4,5,9],[3,4,5,8,9],[2,3,4,5,7,8,9],[1,2,3,4,5,6,7,8,9]],
                [[1,2,3,4,5,6,7,8,9],[2,3,4,5,7,8,9],[3,4,5,8,9],[4,5,9],[5],[6,7,8,9],[4,3,2,7,8,9],[4,3,8,9],[4,9],[3,4,5,6,7]]]];

    const POSSIBLE_CONST_COMBO =
        [[[[5,6,7,8],[5,6,7],[3,4,5,6],[2,3,4,5],[6,7,8,9],[6,7,8,9],[6,7,8],[6,7],[6,7,8],[6,7,8,9]],
            [[],[],[],[],[],[],[],[],[],[]]],

            [[[],[],[],[],[],[],[],[],[],[]],
                [[6,7,8,9],[6,7,8],[6,7,8,9],[6,7,8],[6,7,8,9],[1,2,3],[1,2,3,4],[1,2,3,4,5],[1,2,3,4,5,6],[5,6,7,8]]],

            [[[1,2,3,4,5,6,7,8],[5,6,7,9],[3,4,5,6],[2,3,4,5],[6,7,8,9],[6,7,8,9],[6,7,8],[6,7],[6,7,8],[6,7,8,9]],
                [[6,7,8,9],[6,7,8],[6,7,8,9],[6,7,8],[6,7,8,9],[1,2,3],[1,2,3,4],[1,2,3,4,5],[1,2,3,4,5,6],[1,2,3,4,5,6,7,8]]]];




    function whatchecked(){
        var arr=[];
        arr.push(0);
        if (button_1.classList.contains('active')) arr.push(1);
        if (button_2.classList.contains('active')) arr.push(2);
        if (button_3.classList.contains('active')) arr.push(3);
        if (button_4.classList.contains('active')) arr.push(4);
        if (button_5.classList.contains('active')) arr.push(5);
        if (button_6.classList.contains('active')) arr.push(6);
        if (button_7.classList.contains('active')) arr.push(7);
        if (button_8.classList.contains('active')) arr.push(8);
        if (button_9.classList.contains('active')) arr.push(9);
        if (arr.length == 1) arr.push(1);
        return arr;
    }

    function possible_checked (n,m){
        var arrchecked = Checked_cifr.slice();
        var initial =
            [[[0,1,2,3,4,5,6,7,8,9],[0,1,2,3,5,6,7,8],[0,1,2,5,6,7],[0,1,5,6],[0,5],[0,1,2,3,4],[0,1,2,3],[0,1,2],[0,1],[0]],
                [[0],[0,1],[0,1,2],[0,1,2,3],[0,1,2,3,4],[0,5],[0,1,5,6],[0,1,2,5,6,7],[0,1,2,3,5,6,7,8],[0,1,2,3,4,5,6,7,8,9]]];
        var arr_possible = [[[],[],[],[],[],[],[],[],[],[]],
            [[],[],[],[],[],[],[],[],[],[]]];
        if (n == 2){
            for (var j = 0; j <= 1; j++){
                for (var k = 0; k <= 9; k++){
                    arr_possible[j][k] = initial[j][k].slice();
                }
            }
        }
        switch (parseInt(n)) {
            case 1:
                for (var j = 0; j <= 1; j++){
                    for (var k = 0; k <= 9; k++){
                        arr_possible[j][k] = duplicat(arrchecked, POSSIBLE_CONST_PROSTO[m][j][k]);
                        if (arr_possible[j][k].length == 0){
                            arr_possible[j][k] = initial[j][k].slice();
                        }
                    }
                }
                break;
            case 2:
                for (var j = 0; j <= 1; j++){
                    for (var k = 0; k <= 9; k++){
                        arr_possible[j][k] = POSSIBLE_CONST_BRAT[m][j][k].slice();
                    }
                }
                switch (parseInt(m)){
                    case 0:
                        for (var k = 1; k <= 4; k++){
                            arr_possible[0][k] = duplicat(arrchecked, POSSIBLE_CONST_BRAT[m][0][k]);
                            if (arr_possible[0][k].length == 0 || arr_possible[0][k] == 0){
                                arr_possible[0][k] = initial[0][k].slice();
                            }
                        }
                        break;
                    case 1:
                        for (var k = 5; k <= 8; k++){
                            arr_possible[1][k] = duplicat(arrchecked, POSSIBLE_CONST_BRAT[m][1][k]);
                            if (arr_possible[1][k].length == 0 || arr_possible[1][k] == 0){
                                arr_possible[1][k] = initial[1][k].slice();
                            }
                        }
                        break;
                    case 2:
                        for (var k = 1; k <= 4; k++){
                            arr_possible[0][k] = duplicat(arrchecked, POSSIBLE_CONST_BRAT[m][0][k]);
                            if (arr_possible[0][k].length == 0 || arr_possible[0][k] == 0){
                                arr_possible[0][k] = initial[0][k].slice();
                            }
                        }
                        for (var k = 5; k <= 8; k++){
                            arr_possible[1][k] = duplicat(arrchecked, POSSIBLE_CONST_BRAT[m][1][k]);
                            if (arr_possible[1][k].length == 0 || arr_possible[1][k] == 0){
                                arr_possible[1][k] = initial[1][k].slice();
                            }
                        }
                        break;
                }
                break;
            case 3:
                var r = 1, p = 1;
                switch (parseInt(m)) {
                    case 0: r = 0; p = 0; break;
                    case 1: r = 1; p = 1; break;
                    case 2: r = 0; p = 1; break;
                }
                for (var j = r; j <= p; j++){
                    for (var k = 0; k <= 9; k++){
                        arr_possible[j][k] = duplicat(arrchecked, POSSIBLE_CONST_DRUG[m][j][k]);
                        if (arr_possible[j][k].length == 0){
                            arr_possible[j][k] = initial[j][k].slice();
                        }
                    }
                }
                break;
            case 4:
                // var r = 1, p = 1;
                switch (parseInt(m)) {
                    case 0:
                        for (var k = 0; k <= 4; k++){
                            arr_possible[0][k] = POSSIBLE_CONST_COMBO[0][0][k].slice();
                        }
                        for (var k = 5; k <= 9; k++){
                            arr_possible[0][k] = duplicat(arrchecked, POSSIBLE_CONST_COMBO[0][0][k]);
                            if (arr_possible[0][k].length == 0){
                                arr_possible[0][k] =  duplicat([6,7,8,9], POSSIBLE_CONST_DRUG[2][0][k]);
                            }
                            if (arr_possible[0][k].length == 0){
                                arr_possible[0][k] =  initial[0][k].slice();
                            }
                        }
                        break;
                    case 1:
                        for (var k = 6; k <= 9; k++){
                            arr_possible[1][k] = POSSIBLE_CONST_COMBO[1][1][k].slice();
                        }
                        for (var k = 0; k <= 5; k++){
                            arr_possible[1][k] = duplicat(arrchecked, POSSIBLE_CONST_COMBO[1][1][k]);
                            if (arr_possible[1][k].length == 0 /*|| arr_possible[j][k] == 0*/){
                                arr_possible[1][k] =  duplicat([6,7,8,9],POSSIBLE_CONST_DRUG[2][1][k]);
                            }
                            if (arr_possible[1][k].length == 0){
                                arr_possible[1][k] =  initial[1][k].slice();
                            }
                        }
                        break;
                    case 2:
                        for (var k = 0; k <= 4; k++){
                            arr_possible[0][k] = POSSIBLE_CONST_COMBO[0][0][k].slice();
                        }
                        for (var k = 5; k <= 9; k++){
                            arr_possible[0][k] = duplicat(arrchecked, POSSIBLE_CONST_COMBO[0][0][k]);
                            if (arr_possible[0][k].length == 0){
                                arr_possible[0][k] =  duplicat([6,7,8,9], POSSIBLE_CONST_DRUG[2][0][k]);
                            }
                            if (arr_possible[0][k].length == 0){
                                arr_possible[0][k] =  initial[0][k].slice();
                            }
                        }
                        for (var k = 6; k <= 9; k++){
                            arr_possible[1][k] = POSSIBLE_CONST_COMBO[1][1][k].slice();
                        }
                        for (var k = 0; k <= 5; k++){
                            arr_possible[1][k] = duplicat(arrchecked, POSSIBLE_CONST_COMBO[1][1][k]);
                            if (arr_possible[1][k].length == 0 /*|| arr_possible[j][k] == 0*/){
                                arr_possible[1][k] =  duplicat([6,7,8,9],POSSIBLE_CONST_DRUG[2][1][k]);
                            }
                            if (arr_possible[1][k].length == 0){
                                arr_possible[1][k] =  initial[1][k].slice();
                            }
                        }


                        break;
                }
                break;

            case 5:
                for (var i = 0; i <= 9; i++) {
                    for (var j = 0; j<=1; j++){
                        arr_possible[j][i] = [1,2,3,4,5,6,7,8,9];
                    }
                }
                break;
        }
        return arr_possible;
    }

    function TimerStop() {
        clearInterval(wb_Timer1);
    }
    var primer_num=0; primer_num_n = [0,0,0,0,0,0,0,0,0]
    colors = ["#ff9999", "#dbefff", "#ffdb99", "#d199ff", "#ffff99","#19ff19","#9999ff"]
    colors2 = ["red","purple","orange","DarkBlue","#ffd919","green","blue"]
    var color_num = 0, primer1=[];

    function show_ekran_n(n){
        if (primer_num_n[n] == primer1[n].length - 1){
            clearInterval(timer[n]);
            document.getElementById('button_start').innerHTML = "✐";
            document.getElementById('black_style_16').innerHTML = "✐";

            Editbox_ekran_id ="#Editbox_ekran_" + n.toString();
            $(Editbox_ekran_id).val("")

            if (!(device.mobile() || device.tablet())){
                Editbox_ekran_id ="#Editbox_ekran_" + n.toString();
                $(Editbox_ekran_id).removeAttr("readOnly")
                document.getElementById("Editbox_ekran_1").focus();
            }
        }
        else{
            if (color_num % 6 == 0) color_num = 0
            if (style == true){

                Editbox_ekran_id ="#Editbox_ekran_" + n.toString();
                $(Editbox_ekran_id).css("color",colors[(color_num + n)%6])

            }
            else {

                Editbox_ekran_id ="#Editbox_ekran_" + n.toString();
                $(Editbox_ekran_id).css("color",colors2[(color_num + n)%6])

            }
            color_num++
            primer_num_n[n]++

            Editbox_ekran_id ="#Editbox_ekran_" + n.toString();
            if (  isNaN(primer1[n][primer_num_n[n]]) ) {
                $(Editbox_ekran_id).val("")
            }
            else  {
                $(Editbox_ekran_id).val(primer1[n][primer_num_n[n]])
            }
        }
    }
    var ekrans = [1,2,3,4,5,6,7,8]
    function show_ekran(){

        if (primer_num == primer.length - 1){
            TimerStop()
            document.getElementById('button_start').innerHTML = "✐";
            document.getElementById('black_style_16').innerHTML = "✐";
            for (var i = 1; i<=ekran_number; i++){
                Editbox_ekran_id ="#Editbox_ekran_" + i.toString();
                $(Editbox_ekran_id).val("")
            }
            if (!(device.mobile() || device.tablet())){
                if (synchro==true && random_ekran==true ){
                    show_window_task_f(1)
                }
                for (var i = 1; i<=ekran_number; i++){
                    Editbox_ekran_id ="#Editbox_ekran_" + i.toString();
                    $(Editbox_ekran_id).removeAttr("readOnly")
                }

                document.getElementById("Editbox_ekran_1").focus();
            }
        }
        else{
            color_num++
            primer_num++
            if (synchro==true && random_ekran==true ){
                for (var i = 1; i<=8; i++){
                    Editbox_ekran_id ="#Editbox_ekran_" + i.toString();
                    $(Editbox_ekran_id).val("")
                }
                number_of_ekran =  ekrans[randomInteger(ekrans.length)]
                Editbox_ekran_id ="#Editbox_ekran_" + number_of_ekran;
                exclude(number_of_ekran,ekrans);
                if (ekrans.length == 0) ekrans = [1,2,3,4,5,6,7,8]
                if (style == true) $(Editbox_ekran_id).css("color",colors[(color_num)%6])
                else $(Editbox_ekran_id).css("color",colors2[(color_num)%6])
                $(Editbox_ekran_id).val(primer1[1][primer_num])
            }
            else{
                if (color_num % 6 == 0) color_num = 0
                if (style == true){
                    for (var i = 1; i<=ekran_number; i++){
                        Editbox_ekran_id ="#Editbox_ekran_" + i.toString();
                        $(Editbox_ekran_id).css("color",colors[(color_num + i)%6])
                    }
                }
                else {

                    for (var i = 1; i<=ekran_number; i++){
                        Editbox_ekran_id ="#Editbox_ekran_" + i.toString();
                        $(Editbox_ekran_id).css("color",colors2[(color_num + i)%6])
                    }
                }

                for (var i = 1; i<=ekran_number; i++){
                    Editbox_ekran_id ="#Editbox_ekran_" + i.toString();
                    if (  isNaN(primer1[i][primer_num]) ) {
                        $(Editbox_ekran_id).val("")
                    }
                    else  {
                        $(Editbox_ekran_id).val(primer1[i][primer_num])
                    }
                }
            }
            if ((ekran_number == 1) && (voice == true) && (Kolcifr <= 2) && (Skorost >= 700)) sound_number_f(primer[primer_num])
            else soundClick(2)
        }
    }
    var timer1, timer2, timer3, timer4, mus = false;
    chered = true;
    function sound_number_f(n){
        n = parseInt(n)

        if (n>0){
            sound_number = "gplus_" + n + ".mp3"
        }
        else{
            n = (-n)
            sound_number = "gminus_" + n + ".mp3"
        }


        if (chered == true) {
            audio.src = '<?= Url::to("@web/music")?>/' + sound_number;
            audio.play();
        }
        else{
            audio2.src = '<?= Url::to("@web/music")?>/' + sound_number;
            audio2.play();
        }
        chered = !chered;
    }

    function start_0(){
        if (start_ok==true){
            if (mus == true){
                mus = false;
                audio.pause();
            }
            else{

                if (document.getElementById('button_start').innerHTML == "►"){
                    for (var i=1; i <= ekran_number; i++){
                        window_task_id ="#window_task_" + i.toString();
                        $(window_task_id).addClass("hidden")
                    }
                    $("#window_task_0").removeClass("hidden")
                    for (var i=1; i<=8; i++){
                        Editbox_ekran_id = "#Editbox_ekran_" + i;
                        Editbox_otvet_id = "#Editbox_otvet_" + i;
                        window_heading_id = "#window_heading_" + i;
                        $(Editbox_ekran_id).removeClass("hidden")
                        $(Editbox_otvet_id).addClass("hidden")
                        $(window_heading_id).removeClass("panel-success panel-danger")
                    }

                    document.getElementById('button_start').innerHTML = "✖";
                    document.getElementById('black_style_16').innerHTML = "■";
                    soundClick(1);
                    if (style == true){
                        Editbox_ekran_1.style.color = "white"
                        Editbox_ekran_2.style.color = "white"
                    }
                    else{
                        Editbox_ekran_1.style.color = "#543ae8"
                        Editbox_ekran_2.style.color = "#543ae8"
                    }
                    primer = []
                    Editbox_ekran_0.value = 3;
                    timer1 = setTimeout("soundClick(1); Editbox_ekran_0.value = 2;", 500);
                    timer2 = setTimeout("soundClick(1); Editbox_ekran_0.value = 1;", 1000);
                    timer3 = setTimeout(function(){
                        soundClick(1);
                        Editbox_ekran_0.value = 'Start';
                    }, 1500);
                    timer4 = setTimeout("$('#button_start').html('►'); $('#window_task_0').addClass('hidden'); start();  ", 2500);
                }
                else if (document.getElementById('button_start').innerHTML == "✖") {
                    document.getElementById('button_start').innerHTML = "►";
                    document.getElementById('black_style_16').innerHTML = "►";
                    clearTimeout(timer1);
                    clearTimeout(timer2);
                    clearTimeout(timer3);
                    clearTimeout(timer4);
                    Editbox_ekran_0.value = "►";
                }

                else {
                    start();

                }
            }
        }
    }
    function generate(){
        stop_cycle = false
        schotchik = 0
        chislo = 0;
        cifr = [];
        chislo_plus = [];
        primer_num=0
        primer_num_n = [0,0,0,0,0,0,0,0,0]
        primer = []
        for (i = 0; i < Kolcifr ; i++) {
            var t =  possible_checked(Level,Operation);
            possible_checked_var[i] = t.slice();
        }
        switch (parseInt(Level_Operation)) {
            case 10: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < Kolcifr-1; i++){
                    cifr[i] = randomInteger(4);
                    chislo += cifr[i]*power10(i);
                }
                var i = Kolcifr - 1;
                cifr[i] = 1 + randomInteger(3);
                chislo += cifr[i]*power10(i);
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_simple_add()
                }

            }
                break;

            case 11: {
                chislo = 0;
                var t = Checked_cifr.slice();
                exclude(0,t);
                for (var i = 0; i < Kolcifr; i++){
                    cifr[i] = t[randomInteger(t.length)]
                    chislo += cifr[i]*power10(i);
                }
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_simple_sub()
                }

            }
                break;

            case 12: {
                chislo = 0;
                var t = Checked_cifr.slice();
                for (var i = 0; i < Kolcifr-1; i++){
                    cifr[i] = t[randomInteger(t.length)]
                    chislo += cifr[i]*power10(i);
                }
                exclude(0,t);
                i = Kolcifr - 1;
                cifr[i] = t[randomInteger(t.length)]
                chislo += cifr[i]*power10(i);

                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_simple_add_sub()
                }

            }
                break;

            case 20: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < Kolcifr-1; i++){
                    cifr[i] = randomInteger(5);
                    chislo += cifr[i]*power10(i);
                }
                i = Kolcifr - 1;
                cifr[i] = 2 + randomInteger(3);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_brother_add()
                }

            }
                break;

            case 21: {
                chislo = 0;
                for (var i = 0; i < Kolcifr; i++){
                    cifr[i] = 5+randomInteger(5);
                    chislo += cifr[i]*power10(i);
                }
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_brother_sub()
                }
            }
                break;

            case 22: {
                chislo = 0;
                for (var i = 0; i < Kolcifr-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = Kolcifr - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_brother_add_sub()
                }

            }
                break;

            case 30: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < Kolcifr-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = Kolcifr - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_friend_add()
                }

            }
                break;

            case 31: {
                znak = 1;
                chislo = 0;
                for (var i = 0; i < Kolcifr; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = Kolcifr;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_friend_sub()
                }

            }
                break;

            case 32: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < Kolcifr-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = Kolcifr - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_friend_add_sub()
                }

            }
                break;

            case 40: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < Kolcifr-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = Kolcifr - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_combo_add()
                }

            }
                break;

            case 41: {
                znak = 1;
                chislo = 0;
                for (var i = 0; i < Kolcifr; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = Kolcifr;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_combo_sub()
                }

            }
                break;

            case 42: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < Kolcifr-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = Kolcifr - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_combo_add_sub()
                }

            }
                break;
            case 50: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < Kolcifr-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = Kolcifr - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_random_add()
                }

            }
                break;

            case 51: {
                znak = 1;
                chislo = 0;
                for (var i = 0; i < Kolcifr; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = Kolcifr;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_random_sub()
                }

            }
                break;

            case 52: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < Kolcifr-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = Kolcifr - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_random_add_sub()
                }

            }
                break;
        }
    }
    number_10=1
    var timer = [], synchro=true;
    var student_answer = "";
    function start(){

        if (device.mobile() || device.tablet()) show_window_task_f(1);
        switch (document.getElementById('button_start').innerHTML){
            case "Отправить результаты":
                document.getElementById('button_start').innerHTML = "►";
                send_answer(prav_percent,prav);
                break;
            case "►":
                for (var i = 1; i<=8; i++){
                    Editbox_ekran_id ="#Editbox_ekran_" + i.toString();
                    $(Editbox_ekran_id).attr("readOnly","readOnly")
                    $(Editbox_ekran_id).removeClass("hidden")
                    Editbox_otvet_id ="#Editbox_otvet_" + i.toString();
                    $(Editbox_otvet_id).addClass("hidden")
                }
                $("#window_task_0").addClass("hidden")
                for (var i=1; i <= ekran_number; i++){
                    window_task_id ="#window_task_" + i.toString();
                    $(window_task_id).removeClass("hidden")
                }
                stop_cycle = false

                document.getElementById('button_start').innerHTML = "■";
                Skorost = parseInt(document.getElementById('Skorost_tablo').innerHTML*1000);
                Kolslog = parseInt(document.getElementById('Kolslog_tablo').innerHTML);
                Checked_cifr = whatchecked();
                Level_Operation = Level*10 + Operation;

                if (synchro==true && random_ekran==true && ekran_number==1){
                    for (var i = 1; i<=8; i++){
                        Editbox_ekran_id ="#Editbox_ekran_" + i.toString();
                        $(Editbox_ekran_id).val("")
                    }
                    generate();
                    primer1[1] = primer.slice()
                    number_of_ekran = ekrans[randomInteger(ekrans.length)]
                    Editbox_ekran_id ="#Editbox_ekran_" + number_of_ekran;
                    exclude(number_of_ekran,ekrans);
                    if (ekrans.length == 0) ekrans = [1,2,3,4,5,6,7,8]
                    $(Editbox_ekran_id).val(primer1[1][0])
                }
                else{
                    for (var i = 1; i<=ekran_number; i++){
                        generate();
                        primer1[i] = primer.slice()
                        Editbox_ekran_id ="#Editbox_ekran_" + i.toString();
                        $(Editbox_ekran_id).val(primer1[i][primer_num])
                    }
                }
                if ((voice ==true) && (ekran_number==1) && (Kolcifr <= 2) && random_ekran==false && (Skorost >= 700)) sound_number_f(primer1[1][0])
                else soundClick(2)
                primer = primer1[1].slice()
                for (var i=2; i<=ekran_number; i++){
                    if (primer1[i].length >= primer.length)
                        primer = primer1[i].slice()
                }
                if (synchro==true && random_ekran==false) wb_Timer1 = setInterval("show_ekran()", Skorost)
                else if (synchro==true && random_ekran==true && ekran_number==1){
                    show_window_task_f(8);

                    wb_Timer1 = setInterval("show_ekran()", Skorost)
                }
                else{
                    switch (ekran_number){
                        case 1:
                            timer[1] = setInterval(function(){ show_ekran_n(1)}, interval[1]);
                            break;
                        case 2:
                            timer[1] = setInterval(function(){ show_ekran_n(1)}, interval[1]);
                            timer[2] = setInterval(function(){ show_ekran_n(2)}, interval[2]);
                            break;
                        case 3:
                            timer[1] = setInterval(function(){ show_ekran_n(1)}, interval[1]);
                            timer[2] = setInterval(function(){ show_ekran_n(2)}, interval[2]);
                            timer[3] = setInterval(function(){ show_ekran_n(3)}, interval[3]);
                            break;
                        case 4:
                            timer[1] = setInterval(function(){ show_ekran_n(1)}, interval[1]);
                            timer[2] = setInterval(function(){ show_ekran_n(2)}, interval[2]);
                            timer[3] = setInterval(function(){ show_ekran_n(3)}, interval[3]);
                            timer[4] = setInterval(function(){ show_ekran_n(4)}, interval[4]);
                            break;
                        case 5:
                            timer[1] = setInterval(function(){ show_ekran_n(1)}, interval[1]);
                            timer[2] = setInterval(function(){ show_ekran_n(2)}, interval[2]);
                            timer[3] = setInterval(function(){ show_ekran_n(3)}, interval[3]);
                            timer[4] = setInterval(function(){ show_ekran_n(4)}, interval[4]);
                            timer[5] = setInterval(function(){ show_ekran_n(5)}, interval[5]);
                            break;
                        case 6:
                            timer[1] = setInterval(function(){ show_ekran_n(1)}, interval[1]);
                            timer[2] = setInterval(function(){ show_ekran_n(2)}, interval[2]);
                            timer[3] = setInterval(function(){ show_ekran_n(3)}, interval[3]);
                            timer[4] = setInterval(function(){ show_ekran_n(4)}, interval[4]);
                            timer[5] = setInterval(function(){ show_ekran_n(5)}, interval[5]);
                            timer[6] = setInterval(function(){ show_ekran_n(6)}, interval[6]);
                            break;
                        case 7:
                            timer[1] = setInterval(function(){ show_ekran_n(1)}, interval[1]);
                            timer[2] = setInterval(function(){ show_ekran_n(2)}, interval[2]);
                            timer[3] = setInterval(function(){ show_ekran_n(3)}, interval[3]);
                            timer[4] = setInterval(function(){ show_ekran_n(4)}, interval[4]);
                            timer[5] = setInterval(function(){ show_ekran_n(5)}, interval[5]);
                            timer[6] = setInterval(function(){ show_ekran_n(6)}, interval[6]);
                            timer[7] = setInterval(function(){ show_ekran_n(7)}, interval[7]);
                            break;
                        case 8:
                            timer[1] = setInterval(function(){ show_ekran_n(1)}, interval[1]);
                            timer[2] = setInterval(function(){ show_ekran_n(2)}, interval[2]);
                            timer[3] = setInterval(function(){ show_ekran_n(3)}, interval[3]);
                            timer[4] = setInterval(function(){ show_ekran_n(4)}, interval[4]);
                            timer[5] = setInterval(function(){ show_ekran_n(5)}, interval[5]);
                            timer[6] = setInterval(function(){ show_ekran_n(6)}, interval[6]);
                            timer[7] = setInterval(function(){ show_ekran_n(7)}, interval[7]);
                            timer[8] = setInterval(function(){ show_ekran_n(8)}, interval[8]);
                            break;
                    }
                }

                chislo = parseInt(chislo);
                break;
            case "■":
                $("#window_task_0").removeClass("hidden")
                for (var i=1; i <= ekran_number; i++){
                    window_task_id ="#window_task_" + i.toString();
                    $(window_task_id).addClass("hidden")
                }
                Editbox_ekran_0.value = "►"
                audio.pause();
                audio.currentTime = 0.0;
                document.getElementById('button_start').innerHTML = "►";
                document.getElementById('black_style_16').innerHTML = "►";
                TimerStop();
                for (var i=1;i<=ekran_number;i++) clearInterval(timer[i]);

                break;
            case "✐":
                document.getElementById('button_start').innerHTML = "►";
                document.getElementById('black_style_16').innerHTML = "►";
                vip+=ekran_number
                correct_answer = []
                for (var i=1; i<=ekran_number; i++){
                    correct_answer[i] = 0;
                    for (var j=0; j<primer1[i].length; j++){
                        correct_answer[i]+=parseInt(primer1[i][j])
                    }
                }
                prom_prav = 0
                for (var i=1; i<=ekran_number; i++){
                    Editbox_ekran_id = "#Editbox_ekran_" + i;
                    Editbox_otvet_id = "#Editbox_otvet_" + i;
                    window_heading_id = "#window_heading_" + i;
                    points_id = "#points_" + i;
                    $(Editbox_ekran_id).addClass("hidden")
                    $(Editbox_otvet_id).removeClass("hidden")

                    if (parseInt($(Editbox_ekran_id).val()) == correct_answer[i]){
                        student_answer = " = " + parseInt($(Editbox_ekran_id).val()) + " ✔ ("+ correct_answer[i]  + ")"
                        text = "\n"+ parseInt($(Editbox_ekran_id).val()) + " = " + correct_answer[i] + "\n"+ correct[randomInteger(59)];
                        prav++
                        prom_prav++
                        $(window_heading_id).addClass("panel-success")
                        $(points_id).html(parseInt($(points_id).html()) + 10)
                        progress_up_n[i]++
                    }
                    else{
                        student_answer = " ≠ " + parseInt($(Editbox_ekran_id).val()) + " ✘ ("+ correct_answer[i]  + ")"
                        text = "\n" + "Упс, Ошибочка "+ "\n" + parseInt($(Editbox_ekran_id).val()) + " ≠ " + correct_answer[i]
                        $(window_heading_id).addClass("panel-danger")
                        progress_up_n[i]--
                    }
                    $(Editbox_otvet_id).val(text)
                }

                if (prom_prav> parseInt(0.5*ekran_number)){
                    soundClick2(1,1);
                    if (synchro==true) progress_up++;
                }
                else{
                    soundClick2(0,1);
                    if (synchro==true) progress_up--;
                }

                if (progress ==true){
                    if (synchro==true){
                        switch (progress_up){
                            case 2:
                                progress_up = 0;
                                if (progress_up_key == false) Kolslog_plus();
                                else skorost_minus();
                                progress_up_key = !progress_up_key;
                                break;
                            case -2:
                                progress_up = 0;
                                if (progress_down_key == false) Kolslog_minus();
                                else skorost_plus();
                                progress_down_key = !progress_down_key;
                                break;
                        }
                    }
                    else{
                        for(var i=1;i<=ekran_number;i++){
                            if (progress_up_n[i] == 2) {

                                progress_up_n[i] = 0;
                                interval[i]-=100

                            }
                            else if (progress_up_n[i] == -2) {

                                progress_up_n[i] = 0;
                                interval[i]+=100

                            }
                            interval_id="#interval_"+i.toString()
                            $(interval_id).html(parseFloat(interval[i]/1000))
                        }
                    }
                }
                show_pravilno();
                primer_num = 0;
                primer_num_n = [0,0,0,0,0,0,0,0,0]

                break;
        }
    }
    var progress=false, progress_up_n = [0,0,0,0,0,0,0,0,0]
    function yes_no(a,arr){
        var c = false, i = 0;
        while (c == false && i<arr.length) {
            if (a == arr[i++]) c = true;
        }
        return c;
    }
    var primer = [], primer2 = [], stop_cycle = false;
    function ravno(){
        stop_cycle = true;
    }
    function chislo_plus_f(){
        chislo += chislo_plus_all;
        primer.push(chislo_plus_all)
        chislo = parseInt(chislo);
        chislo_plus_all = parseInt(chislo_plus_all);
    }

    function chislo_minus_f(){
        chislo -= chislo_plus_all;
        ch = "-" + chislo_plus_all.toString()
        primer.push(ch)
        chislo = parseInt(chislo);
        chislo_plus_all = parseInt(chislo_plus_all);
    }

    function calculate_simple_add() {
        var max_chislo = 0;
        if (yes_no(5,Checked_cifr)) {
            for (var i = 0; i < Kolcifr; i++){
                max_chislo += 9*power10(i);
            }
        }
        else{
            for (var i = 0; i < Kolcifr; i++){
                max_chislo += 4*power10(i);
            }
        }
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (chislo == max_chislo || schotchik == Kolslog) {
            ravno();
        }
        else {
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < Kolcifr; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < Kolcifr; i++) {
                cifr[i] += parseInt(chislo_plus[i]);
                for (var k = 0; k <= 9; k++){
                    exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                }
            }
            chislo_plus_f();
        }
    }


    function calculate_simple_sub() {
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (chislo == 0 || schotchik == Kolslog) {
            ravno();
        }
        else {
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < Kolcifr; i++) {
                    var p = possible_checked_var[i][1][cifr[i]];
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][1][cifr[i]] = POSSIBLE_CHECKED_CONST[1][cifr[i]].slice();
                        p = possible_checked_var[i][1][cifr[i]];
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < Kolcifr; i++) {
                cifr[i] -= parseInt(chislo_plus[i]);
                for (var k = 0; k <= 9; k++){
                    exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                }
            }
            chislo_minus_f();
        }
    }
    function calculate_simple_add_sub() {
        chislo = parseInt(chislo);
        var max_chislo_4 = 0, l = Checked_cifr.length-1;
        if (l == 4){
            for (var i = 0; i < Kolcifr; i++){
                max_chislo_4 += 4*power10(i);
            }
        }
        var max_chislo = power10(Kolcifr) - 1;
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);
        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;
        if (schotchik == Kolslog) {
            ravno();
        }
        else {
            var vspom_chislo = 0;
            for (var i = 0; i < Kolcifr; i++){
                vspom_chislo += 5*power10(i);
            }

            switch (chislo){
                case 0: znak = 0; break;
                case vspom_chislo: znak = 0; break;
                case max_chislo: znak = 1; break;
                case max_chislo_4:
                    if ( l == 4 ) znak = 1; else znak = randomInteger(2); break;
                default: znak = randomInteger(2); break;
            }
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && Kolcifr > 1 && schotchik % 2 == 1){
                per = 1;
                var uio = chislo%power10(Kolcifr-1);
                switch (chislo%power10(Kolcifr-1)){
                    case 0: znak = 0; break;
                    case parseInt(vspom_chislo/10): znak = 0; break;
                    case parseInt(max_chislo/10): znak = 1; break;
                    case parseInt(max_chislo_4/10):
                        if ( l == 4 ) znak = 1; else znak = randomInteger(2); break;
                    default: znak = randomInteger(2); break;
                }
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];

                for (var i = 0; i < Kolcifr - per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);
            for (var i = 0; i < Kolcifr-per; i++) {
                if (znak == 0)  cifr[i] += parseInt(chislo_plus[i]);
                else cifr[i] -= parseInt(chislo_plus[i]);
                for (var k = 0; k <= 9; k++){
                    exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                }
            }

            if (znak == 0) {
                chislo_plus_f();
            }
            else {
                chislo_minus_f();
            }
        }
    }

    function calculate_brother_add() {
        var max_chislo = power10(Kolcifr)-1;
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (schotchik == Kolslog) {
            ravno();
        }
        else {
            var vspom_chislo1 = 0, vspom_chislo2 = 0;
            for (var i = 0; i < Kolcifr; i++){
                vspom_chislo1 += 5*power10(i);
                vspom_chislo2 += 7*power10(i);
            }
            if (chislo >= vspom_chislo2) znak = 1;
            else if (chislo < vspom_chislo1) znak = 0;
            else znak = randomInteger(2);
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && Kolcifr > 1 && schotchik % 2 == 1){
                per = 1;
                switch (chislo%power10(Kolcifr-1)){
                    case 0: znak = 0; break;
                    case parseInt(max_chislo/10): znak = 1; break;
                    default: znak = randomInteger(2); break;
                }
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < Kolcifr-per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < Kolcifr-per; i++) {
                if (znak == 0)  cifr[i] += parseInt(chislo_plus[i]);
                else cifr[i] -= parseInt(chislo_plus[i]);
                for (var k = 0; k <= 9; k++){
                    exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                }
            }

            if (znak == 0) {
                chislo_plus_f();
            }
            else {
                chislo_minus_f();
            }
        }
    }

    function calculate_brother_sub() {
        var max_chislo = power10(Kolcifr)-1;
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (schotchik == Kolslog) {
            ravno();
        }
        else {
            var vspom_chislo1 = 0;
            for (var i = 0; i < Kolcifr; i++){
                vspom_chislo1 += 5*power10(i);
            }
            if (chislo < vspom_chislo1) znak = 0;
            else znak = 1;
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && Kolcifr > 1 &&  schotchik % 2 == 1){
                per = 1;
                switch (chislo%power10(Kolcifr-1)){
                    case 0: znak = 0; break;
                    case parseInt(max_chislo/10): znak = 1; break;
                    default: znak = randomInteger(2); break;
                }
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < Kolcifr-per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < Kolcifr-per; i++) {
                if (cifr[i]>=5 && cifr[i] <= 8) {
                    for (var k = 5; k <= 9; k++){
                        exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                        exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                    }
                }
                else {
                    for (var k = 0; k <= 4; k++){
                        exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                        exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                    }
                }
                if (znak == 0)  cifr[i] += parseInt(chislo_plus[i]);
                else cifr[i] -= parseInt(chislo_plus[i]);
            }

            if (znak == 0) chislo_plus_f();
            else chislo_minus_f();
        }
    }

    function calculate_brother_add_sub() {
        var max_chislo = power10(Kolcifr)-1;
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (schotchik == Kolslog) {
            ravno();
        }
        else {
            var vspom_chislo1 = 0, vspom_chislo2 = 0;
            for (var i = 0; i < Kolcifr; i++){
                vspom_chislo1 += 5*power10(i);
                vspom_chislo2 += 7*power10(i);
            }
            if (chislo >= vspom_chislo2) znak = 1;
            else if (chislo < vspom_chislo1) znak = 0;
            else znak = randomInteger(2);
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && Kolcifr > 1 && schotchik % 2 == 1){
                per = 1;
                switch (chislo%power10(Kolcifr-1)){
                    case 0: znak = 0; break;
                    case parseInt(max_chislo/10): znak = 1; break;
                    default: znak = randomInteger(2); break;
                }
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < Kolcifr-per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < Kolcifr-per; i++) {
                if (znak == 0)  cifr[i] += parseInt(chislo_plus[i]);
                else cifr[i] -= parseInt(chislo_plus[i]);
                for (var k = 0; k <= 9; k++){
                    exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                }
            }

            if (znak == 0) chislo_plus_f();
            else chislo_minus_f();
        }
    }

    function calculate_friend_add() {
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);
        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;
        if (schotchik == Kolslog) {
            ravno();
        }
        else {
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && Kolcifr > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < Kolcifr-per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < Kolcifr-per; i++) {
                for (var k = 0; k <= 9; k++){

                    exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);

                }
            }
            chislo_plus_f();
            cifr.length = 0;
            for (var i = 0; i < Kolcifr; i++) {
                cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
            }

        }
    }

    function calculate_friend_sub() {
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);


        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;
        var razmer = 0;
        razmer = parseInt((chislo.toString()).length);

        if (razmer == 1 || schotchik == Kolslog) {
            ravno();
        }
        else {
            var per = 0;
            if (half == true && razmer > 2  && Kolcifr > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = undefined;
                chislo_plus = [];
                for (var i = 0; i < razmer - 1 - per; i++) {
                    var p = possible_checked_var[i][1][cifr[i]];
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][1][cifr[i]] = POSSIBLE_CHECKED_CONST[1][cifr[i]].slice();
                        p = possible_checked_var[i][1][cifr[i]];
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < razmer - 1 - per; i++) {
                for (var k = 0; k <= 9; k++){

                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);

                }
            }

            chislo_minus_f();
            razmer = parseInt((chislo.toString()).length);
            cifr.length = 0;
            for (var i = 0; i < razmer; i++) {
                cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
            }
            cifr.length = razmer - 1;


        }
    }

    function calculate_friend_add_sub() {
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        var razmer = 0;
        razmer = parseInt((chislo.toString()).length);
        if (schotchik == Kolslog) {
            ravno();
        }
        else {
            if (razmer <= Kolcifr) znak = 0;
            else znak =  randomInteger(2);
            var per = 0;
            if (half == true && razmer > 1 && Kolcifr > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                if (znak == 0){
                    for (var i = 0; i < Kolcifr - per; i++) {
                        var p = possible_checked_var[i][znak][cifr[i]].slice();
                        if (p.length == 0 || p[0] == 0) {
                            possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                            p = possible_checked_var[i][znak][cifr[i]].slice();
                        }
                        chislo_plus[i] = p[randomInteger(p.length)];
                        chislo_plus_all += chislo_plus[i]*power10(i);
                    }
                }
                else{
                    if (razmer > Kolcifr){
                        for (var i = 0; i < Kolcifr - per; i++) {
                            var p = possible_checked_var[i][znak][cifr[i]].slice();
                            if (p.length == 0 || p[0] == 0) {
                                possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                                p = possible_checked_var[i][znak][cifr[i]].slice();
                            }
                            chislo_plus[i] = p[randomInteger(p.length)];
                            chislo_plus_all += chislo_plus[i]*power10(i);
                        }
                    }
                    else{
                        for (var i = 0; i < razmer - 1; i++) {
                            var p = possible_checked_var[i][znak][cifr[i]].slice();
                            if (p.length == 0 || p[0] == 0) {
                                possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                                p = possible_checked_var[i][znak][cifr[i]].slice();
                            }
                            chislo_plus[i] = p[randomInteger(p.length)];
                            chislo_plus_all += chislo_plus[i]*power10(i);
                        }
                    }
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < Kolcifr - per; i++) {

                for (var k = 0; k <= 9; k++){
                    exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                }

            }
            if (znak == 0) {
                chislo_plus_f();
                cifr.length = 0;
                for (var i = 0; i < Kolcifr; i++) {
                    cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                }
            }
            else {
                chislo_minus_f();
                cifr.length = 0;
                for (var i = 0; i < Kolcifr; i++) {
                    cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                }
            }
        }
    }

    function calculate_combo_add() {
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (schotchik == Kolslog) {
            ravno();
        }
        else {
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && Kolcifr > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < Kolcifr-per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);
            for (var i = 0; i < Kolcifr-per; i++) {
                for (var k = 0; k <= 9; k++){
                    exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                }
            }
            chislo_plus_f();
            cifr.length = 0;
            for (var i = 0; i < Kolcifr; i++) {
                cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
            }

        }
    }

    function calculate_combo_sub() {
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation).slice();


        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;
        var razmer = 0;
        razmer = parseInt((chislo.toString()).length);

        if (razmer == 1 || schotchik == Kolslog) {
            ravno();
        }
        else {
            var per = 0;
            if (half == true && razmer > 2 && Kolcifr > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = undefined;
                chislo_plus = [];


                for (var i = 0; i < razmer - 1 - per; i++) {
                    var p = possible_checked_var[i][1][cifr[i]];
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][1][cifr[i]] = POSSIBLE_CHECKED_CONST[1][cifr[i]].slice();
                        p = possible_checked_var[i][1][cifr[i]];
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < razmer - 1 - per; i++) {
                for (var k = 0; k <= 4; k++){
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                }
            }

            chislo_minus_f();
            razmer = parseInt((chislo.toString()).length);
            cifr.length = 0;
            for (var i = 0; i < razmer; i++) {
                cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
            }
            cifr.length = razmer - 1;
        }
    }

    function calculate_combo_add_sub() {
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        var razmer = 0;
        razmer = parseInt((chislo.toString()).length);
        if (schotchik == Kolslog) {
            ravno();
        }
        else {
            if (razmer <= Kolcifr) znak = 0;
            else znak =  randomInteger(2);
            var per = 0;
            if (half == true && razmer > 1 && Kolcifr > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                if (znak == 0){
                    for (var i = 0; i < Kolcifr - per; i++) {
                        var p = possible_checked_var[i][znak][cifr[i]].slice();
                        if (p.length == 0 || p[0] == 0) {
                            possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                            p = possible_checked_var[i][znak][cifr[i]].slice();
                        }
                        chislo_plus[i] = p[randomInteger(p.length)];
                        chislo_plus_all += chislo_plus[i]*power10(i);
                    }
                }
                else{
                    if (razmer > Kolcifr){
                        for (var i = 0; i < Kolcifr - per; i++) {
                            var p = possible_checked_var[i][znak][cifr[i]].slice();
                            if (p.length == 0 || p[0] == 0) {
                                possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                                p = possible_checked_var[i][znak][cifr[i]].slice();
                            }
                            chislo_plus[i] = p[randomInteger(p.length)];
                            chislo_plus_all += chislo_plus[i]*power10(i);
                        }
                    }
                    else{
                        for (var i = 0; i < razmer - 1; i++) {
                            var p = possible_checked_var[i][znak][cifr[i]].slice();
                            if (p.length == 0 || p[0] == 0) {
                                possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                                p = possible_checked_var[i][znak][cifr[i]].slice();
                            }
                            chislo_plus[i] = p[randomInteger(p.length)];
                            chislo_plus_all += chislo_plus[i]*power10(i);
                        }
                    }
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < Kolcifr - per; i++) {
                for (var k = 0; k <= 9; k++){
                    exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                }
            }
            if (znak == 0) {
                chislo_plus_f();
                cifr.length = 0;
                for (var i = 0; i < Kolcifr; i++) {
                    cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                }
            }
            else {
                chislo_minus_f();
                cifr.length = 0;
                for (var i = 0; i < Kolcifr; i++) {
                    cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                }
            }
        }
    }

    function calculate_random_add() {
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (schotchik == Kolslog) {
            ravno();
        }
        else {
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && Kolcifr > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < Kolcifr - per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < Kolcifr - per; i++) {
                for (var k = 0; k <= 9; k++){
                    exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                }
            }
            chislo_plus_f();
            cifr.length = 0;
            for (var i = 0; i < Kolcifr; i++) {
                cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
            }
        }
    }

    function calculate_random_sub() {
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);
        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;
        var razmer = 0;
        razmer = parseInt((chislo.toString()).length);

        if (razmer == 1 || schotchik == Kolslog) {
            ravno();
        }
        else {
            var per = 0;
            if (half == true && razmer > 2 && Kolcifr > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = undefined;
                chislo_plus = [];


                for (var i = 0; i < razmer - 1 - per; i++) {
                    var p = possible_checked_var[i][1][cifr[i]];
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][1][cifr[i]] = POSSIBLE_CHECKED_CONST[1][cifr[i]].slice();
                        p = possible_checked_var[i][1][cifr[i]];
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < razmer - 1 - per; i++) {
                for (var k = 0; k <= 9; k++){
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                }
            }
            chislo_minus_f();
            razmer = parseInt((chislo.toString()).length);
            cifr.length = 0;
            for (var i = 0; i < razmer; i++) {
                cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
            }
            cifr.length = razmer - 1;
        }
    }

    function calculate_random_add_sub() {
        var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);
        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;
        var razmer = 0;
        razmer = parseInt((chislo.toString()).length);
        if (schotchik == Kolslog) {
            ravno();
        }
        else {
            if (razmer <= Kolcifr) znak = 0;
            else znak =  randomInteger(2);
            var per = 0;
            if (half == true && razmer > 1 && Kolcifr > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                if (znak == 0){
                    for (var i = 0; i < Kolcifr - per; i++) {
                        var p = possible_checked_var[i][znak][cifr[i]].slice();
                        if (p.length == 0 || p[0] == 0) {
                            possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                            p = possible_checked_var[i][znak][cifr[i]].slice();
                        }
                        chislo_plus[i] = p[randomInteger(p.length)];
                        chislo_plus_all += chislo_plus[i]*power10(i);
                    }
                }
                else{
                    if (razmer > Kolcifr){
                        for (var i = 0; i < Kolcifr - per; i++) {
                            var p = possible_checked_var[i][znak][cifr[i]].slice();
                            if (p.length == 0 || p[0] == 0) {
                                possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                                p = possible_checked_var[i][znak][cifr[i]].slice();
                            }
                            chislo_plus[i] = p[randomInteger(p.length)];
                            chislo_plus_all += chislo_plus[i]*power10(i);
                        }
                    }
                    else{
                        for (var i = 0; i < razmer - 1; i++) {
                            var p = possible_checked_var[i][znak][cifr[i]].slice();
                            if (p.length == 0 || p[0] == 0) {
                                possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                                p = possible_checked_var[i][znak][cifr[i]].slice();
                            }
                            chislo_plus[i] = p[randomInteger(p.length)];
                            chislo_plus_all += chislo_plus[i]*power10(i);
                        }
                    }
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < Kolcifr - per; i++) {
                for (var k = 0; k <= 9; k++){
                    exclude(chislo_plus[i],possible_checked_var[i][0][k]);
                    exclude(chislo_plus[i],possible_checked_var[i][1][k]);
                }
            }

            if (znak == 0) {
                chislo_plus_f();
                cifr.length = 0;
                for (var i = 0; i < Kolcifr; i++) {
                    cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                }
            }
            else {
                cifr.length = 0;
                for (var i = 0; i < Kolcifr; i++) {
                    cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                }
                chislo_minus_f();
            }
        }
    }


</script>



</body>

</html>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>








