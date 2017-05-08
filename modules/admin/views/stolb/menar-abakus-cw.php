<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\StolbAsset::register($this);
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
        <title>Столбцы</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <style>
            .white_style{
                background-color: white;
                opacity: 0.95;
                border-width:0;
                color: black;
                box-shadow: none;
            }
            .success-2{
                color: white;
                background-color: green
            }
            .danger-2{
                color: white;
                background-color: red
            }
            .black_style{
                opacity: 0.9;
                border-width:0;
                color: white;
                background-color: black;
                box-shadow: none;
            }
        </style>
    </head>
    <body style = "background-image: url(/web/stolb/static/custom/css/fon_1.jpg); background-position: center center; background-repeat: no-repeat  ; background-size: cover ;">

    <div id = "modal_settings" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
                            <a  id = "button_prosto" onclick = "button_prosto_f(); return false;" style = " text-transform:  none"  class="btn  btn-default active" title="Простой счет">Просто</a>
                            <a  id = "button_brat" onclick = "button_brat_f(); return false;" class="btn  btn-default" title="Помощь брата" style = " text-transform:  none">Брат</a>
                            <a  id = "button_drug" onclick = "button_drug_f(); return false;" class="btn  btn-default" title="Помощь друга" style = " text-transform:  none">Друг</a>
                            <a  id = "button_combo" onclick = "button_combo_f(); return false;" class="btn  btn-default" title="Комбинированный счет" style = " text-transform:  none">Комбо</a>
                            <a  id = "button_random" onclick = "button_random_f(); return false;" class="btn  btn-default" title="Произвольный счет" style = " text-transform:  none">Произв</a>
                        </div>


                        <div class="btn-group btn-group-justified">
                            <a  id = "button_1"  class="btn  btn-default active hidden" onclick = "this.className = (this.className == 'btn btn-default' ? 'btn btn-default active' : 'btn btn-default') ;return false;" >1</a>
                            <a  id = "button_2"  class="btn  btn-default active hidden" onclick = "this.className = (this.className == 'btn btn-default' ? 'btn btn-default active' : 'btn btn-default') ;return false;">2</a>
                            <a  id = "button_3"  class="btn  btn-default active hidden" onclick = "this.className = (this.className == 'btn btn-default' ? 'btn btn-default active' : 'btn btn-default') ;return false;">3</a>
                            <a  id = "button_4"  class="btn  btn-default active hidden" onclick = "this.className = (this.className == 'btn btn-default' ? 'btn btn-default active' : 'btn btn-default') ;return false;">4</a>
                            <a  id = "button_5"  class="btn  btn-default active" onclick = "check_5();return false;">5</a>
                            <a  id = "button_6"  class="btn  btn-default active" onclick = "check_6();return false;">6</a>
                            <a  id = "button_7"  class="btn  btn-default active" onclick = "check_7();return false;">7</a>
                            <a  id = "button_8"  class="btn  btn-default active" onclick = "check_8();return false;">8</a>
                            <a  id = "button_9"  class="btn  btn-default active" onclick = "check_9();return false;">9</a>
                        </div>
                        <div class="btn-group btn-group-justified">
                            <a  id = "button_check_all" class="btn  btn-default active hidden" onclick = "check_all(); return false;">Выбрать все</a>
                        </div>
                    </div>
                    <div  class="panel-body" style=" text-align:center"> <h5>Сложность </h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn  btn-default active" id = "Button_Kolcifr_1" onclick = "Kolcifr_1();return false;">1</a>
                            <a  class="btn  btn-default" id = "Button_Kolcifr_2" onclick = "Kolcifr_2();return false;">10</a>
                            <a  class="btn  btn-default" id = "Button_Kolcifr_3" onclick = "Kolcifr_3();return false;">100</a>
                            <a  class="btn  btn-default" id = "Button_Kolcifr_4" onclick = "Kolcifr_4();return false;">1000</a>
                            <a  class="btn  btn-default active" id = "Button_half" onclick = "button_half_f();return false;">1/2</a>
                        </div>
                    </div>



                </div>
                <div class="panel-body col-lg-5 col-md-5 col-sm-5 ">

                    <div  class="panel-body" style=" text-align:center"> <h5> Операции</h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn  btn-default" id = "Button_operation_plus" title=" Сложение" onclick = "operation_plus();return false;" >+</a>
                            <a  class="btn  btn-default" id = "Button_operation_minus" title=" Вычитание" onclick = "operation_minus();return false;">-</a>
                            <a  class="btn  btn-default active" id = "Button_operation_plus_minus" title=" Сложение+Вычитание" onclick = "operation_plus_minus();return false;">+/-</a>
                        </div>
                    </div>
                    <div class="panel-body" style="  text-align:center"> <h5> Количество слагаемых  </h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn  btn-default " onclick = "Kolslog_minus();return false;">-</a>
                            <a  class="btn  btn-default active"  id = "Kolslog_tablo" onclick = "Kolslog_10();return false;" >4</a>
                            <a  class="btn  btn-default" onclick = "Kolslog_plus();return false;">+</a>
                        </div>
                    </div>
                    <div id = "panel_kolstolb" class="panel-body" style=" text-align:center"> <h5>Количество столбцов </h5>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn  btn-default" onclick = "kolstolb_minus();return false;">-</a>
                            <a  class="btn  btn-default active" id="Kolstolb_tablo" onclick = "kolstolb_enter();return false;">6</a>
                            <a  class="btn  btn-default" onclick = "kolstolb_plus();return false;">+</a>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <div class="panel-body">
                        <div class="panel-body">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Применить </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default black_style" id = "black_style_1" style = "z-index: 2; margin-bottom:0" >
        <div class="container-fluid" style="margin:0">
            <div class="navbar-header">
                <button   type="button" class="navbar-toggle collapsed " data-toggle="collapse" onclick= "button_nastroyki_f(); return false;"> &#9776 </button>
                <button onclick = "change_background(); return false;"   class="navbar-toggle collapsed " data-toggle="collapse" tabindex = "-1" type="button">☻ </button>
                <button onclick = "change_style(); return false;"  class="navbar-toggle collapsed " data-toggle="collapse" type="button" ><b>S</b></button>
                <a id = "navbar_logo" tabindex = "-1" class="navbar-brand" href="/games" style = "width: 110px; background:url(/web/stolb/static/custom/css/s5_logo.png) ; background-position: center center; background-repeat: no-repeat;  background-size: contain  "></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown hidden-sm hidden-xs">
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

                    <li class="dropdown  hidden-sm hidden-xs">
                        <a tabindex = "-1" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Операции <span id = 'navbar_operation' style = "font-size:12">(+/-) </span></a>
                        <ul class="dropdown-menu black_style"  id = "black_style_3" role="menu">

                            <li><a href="" onclick = "operation_plus();  return false;" >Сложение</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "operation_minus();  return false;" >Вычитание</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "operation_plus_minus();  return false;">Сложение+вычитание</a></li>


                        </ul>
                    </li>

                    <li class="dropdown  hidden-sm hidden-xs">
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


                    <li tabindex = "-1" class="dropdown  hidden-sm hidden-xs">
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

                    <li class="dropdown hidden-sm hidden-xs">
                        <a id = "navbar_panel_kolstolb" tabindex = "-1" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Кол-во столбцов  <span id = 'navbar_kolstolb' style = "font-size:12">(6)</span></a>
                        <ul class="dropdown-menu black_style"  id = "black_style_6" role="menu">
                            <li><a href="" onclick = "create_columns(1); document.getElementById('navbar_kolstolb').innerHTML = '(1)'; document.getElementById('Kolstolb_tablo').innerHTML = 1; return false;">1</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "create_columns(2); document.getElementById('navbar_kolstolb').innerHTML = '(2)'; document.getElementById('Kolstolb_tablo').innerHTML = 2; return false;">2</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = " create_columns(3); document.getElementById('navbar_kolstolb').innerHTML = '(3)'; document.getElementById('Kolstolb_tablo').innerHTML = 3; return false;">3</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "create_columns(4); document.getElementById('navbar_kolstolb').innerHTML = '(4)'; document.getElementById('Kolstolb_tablo').innerHTML = 4; return false;">4</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "create_columns(5); document.getElementById('navbar_kolstolb').innerHTML = '(5)'; document.getElementById('Kolstolb_tablo').innerHTML = 5; return false;">5</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "create_columns(6); document.getElementById('navbar_kolstolb').innerHTML = '(6)'; document.getElementById('Kolstolb_tablo').innerHTML = 6; return false;">6</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "create_columns(7); document.getElementById('navbar_kolstolb').innerHTML = '(7)'; document.getElementById('Kolstolb_tablo').innerHTML = 7; return false;">7</a></li>
                            <li class="divider"></li>
                            <li><a href="" onclick = "create_columns(8); document.getElementById('navbar_kolstolb').innerHTML = '(8)'; document.getElementById('Kolstolb_tablo').innerHTML = 8; return false;">8</a></li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav hidden-md hidden-sm hidden-xs" >
                        <div id = "navbar_pravilno_text" style=" text-align:center">  Правильно 0 из 0 (0%)  </div>
                        <div  class="progress progress-striped active black_style"  id = "black_style_7"  style="margin-bottom:0; ">
                            <div  id = "navbar_pravilno_progress" class="progress-bar progress-bar-success" style="width: 0%"></div>
                        </div>
                    </ul>
                    <ul class="nav navbar-nav" >
                        <div class="btn-group">
                            <div class="btn-group-vertical" >
                                <a onclick = "change_style(); return false;"  class="btn  btn-default black_style"  id = "black_style_8"  tabindex = "-1" >S   </a>
                                <a onclick = "change_background(); return false;"  class="btn   btn-default black_style" id = "black_style_9"  tabindex = "-1" >☻   </a>
                            </div>
                            <div class="btn-group-vertical" >
                                <a  tabindex = "-1"  class="btn  btn-default black_style"  id = "black_style_10"  onclick = "restart(); return false;" >♻</a>
                            </div>
                            <div class="btn-group-vertical" >
                                <a  tabindex = "-1"  class="btn  btn-default black_style"  id = "black_style_11"  onclick = "button_nastroyki_f(); return false;">&#9776</a>
                                <a  tabindex = "-1" id = "button_start" class="btn  btn-default black_style"  onclick = "start(); return false;" >►</a>

                            </div>
                        </div>
                    </ul>
            </div>
        </div>
    </nav>

    <div  class="row" style="margin:auto">
        <div id = "window_empty_left" class="col-lg-4 col-md-4 col-sm-4">
        </div>
        <div id = "main_window_1" style="margin:0; padding:0">
        </div>
        <div id = "main_window_2" style="margin:0; padding:0" >
        </div>
    </div>
    <div id = "keyboard" class="row hidden" style = "opacity:0.9; margin:0; padding:0">
        <div id ="keyboard_empty" > </div>
        <div id="keyboard_in" class="col-xs-12 col-sm-12">
            <div class="btn-group btn-group-justified">
                <a  onclick = "if (status==1) answerbox_1.value += 1; return false;" id= "keyboard_1" class="black_style btn btn-default  " ><b>1</b></a>
                <a  onclick = "if (status==1) answerbox_1.value += 2; return false;" id= "keyboard_2" class="black_style btn btn-default  " ><b>2</b></a>
                <a  onclick = "if (status==1) answerbox_1.value += 3; return false;" id= "keyboard_3" class="black_style btn btn-default  " ><b>3</b></a>
            </div>
            <div class="btn-group btn-group-justified">
                <a  onclick = "if (status==1) answerbox_1.value += 4; return false;" id= "keyboard_4" class="black_style btn btn-default  " ><b>4</b></a>
                <a  onclick = "if (status==1) answerbox_1.value += 5; return false;"  id= "keyboard_5" class="black_style btn btn-default  " ><b>5</b></a>
                <a  onclick = "if (status==1) answerbox_1.value += 6; return false;"  id= "keyboard_6" class="black_style btn btn-default  " ><b>6</b></a>
            </div>
            <div class="btn-group btn-group-justified">
                <a  onclick = "if (status==1) answerbox_1.value += 7; return false;"  id= "keyboard_7" class="black_style btn btn-default  " ><b>7</b></a>
                <a  onclick = "if (status==1) answerbox_1.value += 8; return false;"  id= "keyboard_8" class="black_style btn btn-default  " ><b>8</b></a>
                <a  onclick = "if (status==1) answerbox_1.value += 9; return false;"  id= "keyboard_9" class="black_style btn btn-default  " ><b>9</b></a>
            </div>
            <div class="btn-group btn-group-justified">
                <a  onclick = "start(); return false;"  id= "keyboard_10" class="black_style btn btn-default  " ><b>►</b></a>
                <a  onclick = "if (status==1) answerbox_1.value += 0; return false;"  id= "keyboard_0" class="black_style btn btn-default  " ><b>0</b></a>
                <a  onclick = "if (status==1) answerbox_1.value = ( answerbox_1.value < 10 ? '' : parseInt(answerbox_1.value/10)); return false;"  id= "keyboard_11" class="black_style btn btn-default " ><b>←</b></a>
            </div>
        </div>
    </div>
    <script >
        var style = true;
        function change_style(){
            if (style==true){
                style = false
                // document.body.style.backgroundImage = ""
                for (var i=1;i<=11;i++){
                    element_id = "#black_style_" + i.toString()
                    $(element_id).removeClass('black_style');
                    $(element_id).addClass('white_style');
                }
                for (var i=0;i<=11;i++){
                    element_id = "#keyboard_" + i.toString()
                    $(element_id).removeClass('black_style');
                    $(element_id).addClass('white_style');
                }
                for (var i=1;i<=Kolstolb;i++){
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
                for (var i=1;i<=Kolstolb;i++){
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
                $("#button_start").addClass('black_style');
                $("#button_calc_start").addClass('black_style');
                $("#button_calc_start").removeClass('white_style');
                $("#button_start").removeClass('white_style');
                document.getElementById("navbar_logo").style.backgroundImage = "url(/static/custom/css/s5_logo.png)"

            }
        }
        function restart(){
            for (var i=1;i<=Kolstolb;i++){
                points_id="#points_"+i.toString()
                $(points_id).html("(0)")
            }
            prav = 0;
            vip = 0;
            show_pravilno();
        }

        var status = 0;
        function show_first_last(number){
            table_id = "#table_"+number.toString()
            cell = '<tr><td>'+ chislo.toString()+ '</td></tr>'
            $(table_id).append(cell)
        }
        var answers = []
        function ravno(number){
            if (number==1){
                if (!(device.mobile() || device.tablet())){
                    $("#answerbox_1").prop("readonly",false)
                    $("#answerbox_1").focus();
                }
            }
            else{
                answerbox_id = "#answerbox_"+number.toString()
                $(answerbox_id).prop("readonly",false)
            }
            answers[number] = chislo
            status=1
            $("#button_start").html("✐");
            $("#button_calc_start").html("✐");
        }

        function chislo_plus_f(number){
            chislo += chislo_plus_all;
            table_id = "#table_"+number.toString()
            cell = '<tr><td>'+ chislo_plus_all.toString()+ '</td></tr>'
            $(table_id).append(cell)
        }

        function chislo_minus_f(number){
            chislo -= chislo_plus_all;
            table_id = "#table_"+number.toString()
            cell = '<tr><td>- '+ chislo_plus_all.toString()+ '</td></tr>'
            $(table_id).append(cell)
        }
        function generate(){
            chislo = 0;
            cifr = [];
            chislo_plus = [];
            switch (parseInt(Level_Operation)) {
                case 10:
                    znak = 0;
                    chislo = 0;
                    for (var i = 0; i < Kolcifr-1; i++){
                        cifr[i] = randomInteger(4);
                        chislo += cifr[i]*power10(i);
                    }
                    var i = Kolcifr - 1;
                    cifr[i] = 1 + randomInteger(3);
                    chislo += cifr[i]*power10(i);
                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_simple_add();

                    break;

                case 11:
                    // znak = 1;
                    chislo = 0;
                    var t = Checked_cifr.slice();
                    exclude(0,t);
                    for (var i = 0; i < Kolcifr; i++){
                        cifr[i] = t[randomInteger(t.length)]
                        chislo += cifr[i]*power10(i);
                    }



                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_simple_sub();

                    break;

                case 12:
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
                    show_first_last(number); schotchik = 0;
                    for (var i = 1; i<= Kolslog; i++) calculate_simple_add_sub(i);

                    break;

                case 20:
                    znak = 0;
                    chislo = 0;
                    for (var i = 0; i < Kolcifr-1; i++){
                        cifr[i] = randomInteger(5);
                        chislo += cifr[i]*power10(i);
                    }
                    i = Kolcifr - 1;
                    cifr[i] = 2 + randomInteger(3);
                    chislo += cifr[i]*power10(i);
                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_brother_add();

                    break;

                case 21:
                    chislo = 0;
                    for (var i = 0; i < Kolcifr; i++){
                        cifr[i] = 5+randomInteger(5);
                        chislo += cifr[i]*power10(i);
                    }

                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_brother_sub();

                    break;

                case 22:
                    chislo = 0;
                    for (var i = 0; i < Kolcifr-1; i++){
                        cifr[i] = randomInteger(10);
                        chislo += cifr[i]*power10(i);
                    }
                    i = Kolcifr - 1;
                    cifr[i] = 2 + randomInteger(8);
                    chislo += cifr[i]*power10(i);
                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_brother_add_sub();

                    break;

                case 30:
                    znak = 0;
                    chislo = 0;
                    for (var i = 0; i < Kolcifr-1; i++){
                        cifr[i] = randomInteger(10);
                        chislo += cifr[i]*power10(i);
                    }
                    i = Kolcifr - 1;
                    cifr[i] = 2 + randomInteger(8);
                    chislo += cifr[i]*power10(i);
                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_friend_add();

                    break;

                case 31:
                    znak = 1;
                    chislo = 0;
                    for (var i = 0; i < Kolcifr; i++){
                        cifr[i] = randomInteger(10);
                        chislo += cifr[i]*power10(i);
                    }
                    i = Kolcifr;
                    cifr[i] = 2 + randomInteger(8);
                    chislo += cifr[i]*power10(i);
                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_friend_sub();

                    break;

                case 32:
                    znak = 0;
                    chislo = 0;
                    for (var i = 0; i < Kolcifr-1; i++){
                        cifr[i] = randomInteger(10);
                        chislo += cifr[i]*power10(i);
                    }
                    i = Kolcifr - 1;
                    cifr[i] = 2 + randomInteger(8);
                    chislo += cifr[i]*power10(i);

                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_friend_add_sub();

                    break;

                case 40:
                    znak = 0;
                    chislo = 0;
                    for (var i = 0; i < Kolcifr-1; i++){
                        cifr[i] = randomInteger(10);
                        chislo += cifr[i]*power10(i);
                    }
                    i = Kolcifr - 1;
                    cifr[i] = 2 + randomInteger(8);
                    chislo += cifr[i]*power10(i);



                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_combo_add();

                    break;

                case 41:
                    znak = 1;
                    chislo = 0;
                    for (var i = 0; i < Kolcifr; i++){
                        cifr[i] = randomInteger(10);
                        chislo += cifr[i]*power10(i);
                    }
                    i = Kolcifr;
                    cifr[i] = 2 + randomInteger(8);
                    chislo += cifr[i]*power10(i);



                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_combo_sub();

                    break;

                case 42:
                    znak = 0;
                    chislo = 0;
                    for (var i = 0; i < Kolcifr-1; i++){
                        cifr[i] = randomInteger(10);
                        chislo += cifr[i]*power10(i);
                    }
                    i = Kolcifr - 1;
                    cifr[i] = 2 + randomInteger(8);
                    chislo += cifr[i]*power10(i);



                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_combo_add_sub();

                    break;
                case 50:
                    znak = 0;
                    chislo = 0;
                    for (var i = 0; i < Kolcifr-1; i++){
                        cifr[i] = randomInteger(10);
                        chislo += cifr[i]*power10(i);
                    }
                    i = Kolcifr - 1;
                    cifr[i] = 2 + randomInteger(8);
                    chislo += cifr[i]*power10(i);



                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_random_add();

                    break;

                case 51:
                    znak = 1;
                    chislo = 0;
                    for (var i = 0; i < Kolcifr; i++){
                        cifr[i] = randomInteger(10);
                        chislo += cifr[i]*power10(i);
                    }
                    i = Kolcifr;
                    cifr[i] = 2 + randomInteger(8);
                    chislo += cifr[i]*power10(i);
                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_random_sub();

                    break;

                case 52:
                    znak = 0;
                    chislo = 0;
                    for (var i = 0; i < Kolcifr-1; i++){
                        cifr[i] = randomInteger(10);
                        chislo += cifr[i]*power10(i);
                    }
                    i = Kolcifr - 1;
                    cifr[i] = 2 + randomInteger(8);
                    chislo += cifr[i]*power10(i);



                    show_first_last(number); schotchik = 0;
                    for (var i=1; i<= Kolslog; i++) calculate_random_add_sub();

                    break;
            }
        }
        var
            chislo = 0,
            chislo_plus_all = 0,
            znak = 0,
            schotchik = 0,
            Kolslog = 4,
            Kolcifr = 1,
            Kolstolb = 1,
            cifr = [],
            Level_Operation = 12,
            Level = 1,
            Operation = 2,
            possible_checked_var = [],
            chislo_plus = [],
            vip = 0,
            half = true,
            Checked_cifr = [],
            prav = 0;
        var number =0;

        function start(){
            // soundClick(2)
            switch(parseInt(status)){
                case 0:
                    soundClick(2);
                    $("tr").remove()


                    Checked_cifr = whatchecked();
                    Level_Operation = Level*10 + Operation;
                    Kolslog = parseInt(document.getElementById('Kolslog_tablo').innerHTML);
                    // Kolcifr = parseInt(document.getElementById('Kolcifr_tablo').innerHTML);
                    schotchik = 0;
                    status=1
                    $("#button_start").html("✐");
                    $("#button_calc_start").html("✐");
                    for (var i = 0; i < Kolcifr ; i++) {
                        var t =  possible_checked(Level,Operation);
                        possible_checked_var[i] = t.slice();
                    }
                    if (device.mobile() || device.tablet()) font_size_table = 20;
                    else{
                        if (Kolslog <= 6){
                            font_size_table = parseInt(280/(Kolslog+1));
                        }
                        else{
                            font_size_table = parseInt(280/(Kolslog+1));
                        }
                    }
                    for (var i=1;i<=Kolstolb;i++){
                        table_id = "#table_"+i.toString()
                        $(table_id).css("font-size", font_size_table)
                        answerbox_id = "#answerbox_"+i.toString()
                        $(answerbox_id).val("")
                        $(answerbox_id).css("font-size", font_size_table)
                        $(answerbox_id).css("height", font_size_table+10)
                        if (style==true)
                            $(answerbox_id).css("background-color", "black")
                        else
                            $(answerbox_id).css("background-color", "white")
                    }
                    answers=[]
                    number = 1;
                    while (number <= Kolstolb) {
                        generate();
                        number++;
                    }
                    break;
                case 1:
                    status=0
                    schotchik = 0;
                    kol = 0;
                    $("#button_start").html("►");
                    $("#button_calc_start").html("►");
                    for (var i=1;i<=Kolstolb;i++){
                        answerbox_id = "#answerbox_"+i.toString()
                        panel_id=="#panel_"+i.toString()

                        if (parseInt($(answerbox_id).val()) == answers[i]){
                            points_id = "#points_" + i.toString()
                            points = parseInt($(points_id).html().slice(1))
                            points+=10
                            points="("+points.toString() +")";
                            $(points_id).html(points)
                            kol++;
                            $(panel_id).removeClass("panel-danger panel-default")
                            $(panel_id).addClass("panel-success")

                            if (device.mobile() || device.tablet()){
                                $(answerbox_id).val( $(answerbox_id).val() + " = " + answers[i].toString() + " ✔ ")
                                $(answerbox_id).css("background-color", "green")
                            }
                            else{
                                table_id = "#table_"+i.toString()
                                cell = "<tr class='success-2'><td>"+ parseInt($(answerbox_id).val()) + "</td></tr>"
                                $(table_id).append(cell)
                            }
                        }
                        else{
                            $(panel_id).removeClass("panel-success panel-default")
                            $(panel_id).addClass("panel-danger")
                            if (device.mobile() || device.tablet()){
                                $(answerbox_id).css("background-color", "red")
                                $(answerbox_id).val( $(answerbox_id).val() + " ≠ " + answers[i].toString() + " ✘ ")
                            }
                            else{
                                table_id = "#table_"+i.toString()
                                cell = "<tr class='danger-2'><td>"+ parseInt($(answerbox_id).val()) + "</td></tr>"
                                $(table_id).append(cell)
                            }
                        }
                        if (!device.mobile() && !device.tablet()){
                            if (style==true)
                                $(answerbox_id).css("background-color", "#3333ff")
                            else
                                $(answerbox_id).css("background-color", "#84cdfa")
                            $(answerbox_id).val("[" + answers[i].toString() + "]")
                        }
                    }
                    prav += kol;
                    vip += Kolstolb;
                    if (kol >= parseInt((Kolstolb+1)*0.5)) soundClick2(1,1); else soundClick2(0,1);
                    show_pravilno();
                    break;
            }
        }

        var style = true;
        var image_schotchik = 0;
        function change_background(){

            image_schotchik = random_between(1,27)
            var image_fon = "fon_" + image_schotchik + ".jpg";
            document.body.style.backgroundImage = 'url(/static/custom/css/'+image_fon +')';
            image_schotchik = parseInt(image_schotchik);
        }

        function create_columns(n){
            Kolstolb=n;
            for (var i=1;i<=8;i++){
                var column_id = "#column_"+i.toString()
                $(column_id).remove()
            }
            for (var i=1;i<=n; i++){
                column_id = "column_"+i.toString()
                switch (n){
                    case 1:
                        if (device.mobile()){
                            window_empty_left.className = "hidden"
                            column_class = "col-md-12 col-sm-12"
                        }
                        else if (device.tablet()){
                            window_empty_left.className = "col-md-2 col-sm-2"
                            column_class = "col-md-8 col-sm-8"
                        }
                        else{
                            window_empty_left.className = "col-lg-4 col-md-4 col-sm-4"
                            column_class = "col-lg-4 col-md-4 col-sm-4"
                        }

                        break;
                    case 2:
                        window_empty_left.className = "col-lg-3 col-md-3 col-sm-3"
                        column_class = "col-lg-3 col-md-3 col-sm-3"
                        break;
                    case 3:
                        window_empty_left.className = "hidden"
                        column_class = "col-lg-4 col-md-4 col-sm-4"
                        break;
                    case 4:
                        window_empty_left.className = "hidden"
                        column_class = "col-lg-3 col-md-3 col-sm-3"
                        break;
                    case 5:
                        window_empty_left.className = "col-lg-1 col-md-1 col-sm-1"
                        column_class = "col-lg-2 col-md-2 col-sm-2"
                        break;
                    case 6:
                        window_empty_left.className = "hidden"
                        column_class = "col-lg-2 col-md-2 col-sm-2"
                        break;
                    case 7:
                        window_empty_left.className = "hidden"
                        column_class_1 = "col-lg-3 col-md-3 col-sm-3"
                        column_class_2 = "col-lg-4 col-md-4 col-sm-4"
                        break;
                    case 8:
                        window_empty_left.className = "hidden"
                        column_class_2 = "col-lg-3 col-md-3 col-sm-3"
                        column_class_1 = "col-lg-3 col-md-3 col-sm-3"
                        break;
                }

                var column = document.createElement('div');

                if (n<=6){
                    $(column).attr({
                        id: column_id,
                        class: column_class,
                        style: "margin:0;"
                    })
                    main_window_1.className= ""
                    main_window_2.className= "hidden"
                    $("#main_window_1").append(column)
                }
                else{
                    if (n==7){
                        main_window_1.className= "col-lg-7 col-md-7 col-sm-7"
                        main_window_2.className= "col-lg-5 col-md-5 col-sm-5"
                    }
                    else if (n==8){
                        main_window_1.className= "col-lg-6 col-md-6 col-sm-6"
                        main_window_2.className= "col-lg-6 col-md-6 col-sm-6"
                    }

                    if (i<=4) {
                        $("#main_window_1").append(column)
                        $(column).attr({
                            id: column_id,
                            class: column_class_1
                        })
                    }
                    else   {
                        $("#main_window_2").append(column)
                        $(column).attr({
                            id: column_id,
                            class: column_class_2
                        })
                    }
                }
                panel_id = "panel_"+i.toString()
                var panel = document.createElement('div');
                $(panel).attr({
                    id: panel_id,
                    class: "panel panel-primary black_style",
                    style: "margin:0;"
                })
                $(column).append(panel)

                var panel_heading = document.createElement('div');
                $(panel_heading).attr({
                    style: "height: 5vh; padding-top:3; margin:0 ;text-align:center;",
                    class: "panel-heading"
                })
                $(panel).append(panel_heading)

                var panel_title = document.createElement('span');
                $(panel_title).attr({
                    style: "cursor:pointer; text-align:center",
                    class: "panel-title",
                    onclick: "var tx = this.innerHTML; this.innerHTML = prompt('Введите имя '); if (this.innerHTML == '') this.innerHTML = tx; return false;"
                })
                $(panel_title).html(i.toString())
                $(panel_heading).append(panel_title)

                points_id="points_"+i.toString()
                var points = document.createElement('span');
                $(points).attr({
                    id: points_id,
                })
                $(points).html( "(0)" )
                $(panel_heading).append(points)

                table_id="table_"+i.toString()
                var table = document.createElement('table');
                $(table).attr({
                    id: table_id,
                    class:"table black_style",
                    style: "text-align:center; font-size:30"
                })
                $(panel).append(table)

                answerbox_id="answerbox_"+i.toString()
                var answerbox = document.createElement('input');
                $(answerbox).attr({
                    id: answerbox_id,
                    class:"form-control black_style",
                    style: "background-color: #000000; font-size:30; border: 1px solid #808080; border-radius:3px; text-align: center; margin:0",
                    type:"text",
                    value:"",
                    readonly: ""
                })
                $(panel).append(answerbox)
            }
        }

        window.onload=function(){
            create_columns(6)
            for (var i=1;i<=47;i++ ){
                var audio = document.createElement('audio');
                src = "/static/custom/audio/new_incorrect-"+ i + ".mp3"
                audio.setAttribute('src',src);
                audio.setAttribute('preload','preload');
            }
            for (var i=1;i<=17;i++ ){
                var audio = document.createElement('audio');
                src = "/static/custom/audio/new_correct-"+ i + ".mp3"
                audio.setAttribute('src',src);
                audio.setAttribute('preload','preload');
            }
            for (var i=1;i<=57;i++ ){
                var audio = document.createElement('audio');
                src = "/static/custom/audio/new_present-"+ i + ".mp3"
                audio.setAttribute('src',src);
                audio.setAttribute('preload','preload');
            }
            for (var i=1;i<=4;i++ ){
                var audio = document.createElement('audio');
                src = "/static/custom/audio/new_snd_"+ i + ".mp3"
                audio.setAttribute('src',src);
                audio.setAttribute('preload','preload');
            }
            change_background();
            if (device.mobile() || device.tablet()) {
                create_columns(1);
                $("#keyboard").removeClass("hidden")
                if (device.tablet()){
                    $("#keyboard_in").removeClass("col-sm-12 col-md-12")
                    $("#keyboard_in").addClass("col-sm-8 col-md-8")
                    $("#keyboard_empty").addClass("col-sm-2 col-md-2")
                    for (var i=0;i<=11;i++){
                        keyboard_id = "#keyboard_"+i.toString()
                        $(keyboard_id).addClass("btn-lg")
                    }

                }
                document.getElementById('navbar_panel_kolstolb').classList.add("hidden");
                document.getElementById('panel_kolstolb').classList.add("hidden");
            }
            else{
                $("#keyboard").addClass("hidden")
                document.getElementById('navbar_panel_kolstolb').classList.remove("hidden");
                document.getElementById('panel_kolstolb').classList.remove("hidden");
            }
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
                // prav = prav_1 + prav_2 + prav_3 +prav_4 +prav_5 +prav_6 +prav_7 +prav_8 +prav_9 +prav_10 +prav_11 + prav_12;
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
            $('#modal_settings').modal('show');
        }

        function Kolslog_plus(){
            if (document.getElementById('Kolslog_tablo').innerHTML < 60) document.getElementById('navbar_Kolslog').innerHTML = '(' + ++document.getElementById('Kolslog_tablo').innerHTML + ')';
        }

        function Kolslog_minus(){
            if (document.getElementById('Kolslog_tablo').innerHTML > 2) document.getElementById('navbar_Kolslog').innerHTML =  '(' + --document.getElementById('Kolslog_tablo').innerHTML + ')';
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


        // Кнопки изменения скорости


        function kolstolb_enter(){

            var t = Math.abs(parseFloat(prompt(" Введите количество столбцов от 1 до 10 ")));
            if (isNaN(t) || t > 8 || t < 1) {
                document.getElementById('Kolstolb_tablo').innerHTML = 1;
                document.getElementById('navbar_kolstolb').innerHTML = '('+ 1+ ')';
                create_columns(1);
                Kolstolb = 1;
            }
            else{
                Kolstolb = parseInt(t);
                document.getElementById('Kolstolb_tablo').innerHTML = Kolstolb;
                document.getElementById('navbar_kolstolb').innerHTML = '('+ Kolstolb+ ')';
                Kolstolb = parseInt(Kolstolb);
                create_columns(Kolstolb);
            }

        }

        function kolstolb_plus(){
            if (Kolstolb < 8){
                Kolstolb++;
                create_columns(Kolstolb);
                document.getElementById('navbar_kolstolb').innerHTML = '('+ Kolstolb + ')';
                document.getElementById('Kolstolb_tablo').innerHTML = Kolstolb;
                Kolstolb = parseInt(Kolstolb);
            }
        }

        function kolstolb_minus(){
            if (Kolstolb > 1){
                Kolstolb--;
                create_columns(Kolstolb);
                document.getElementById('navbar_kolstolb').innerHTML = '('+ Kolstolb + ')';
                document.getElementById('Kolstolb_tablo').innerHTML = Kolstolb;
                Kolstolb = parseInt(Kolstolb);
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
            Level = 1;
            document.getElementById('navbar_modul').innerHTML = '(просто )';
            if (button_prosto.classList.contains('active')){
                check_all();
            }
            else{
                button_6.classList.remove('hidden');
                button_7.classList.remove('hidden');
                button_8.classList.remove('hidden');
                button_9.classList.remove('hidden');

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
            Level = 2;
            document.getElementById('navbar_modul').innerHTML = '(брат )';
            if (button_brat.classList.contains('active')){
                check_all();
            }
            else{
                button_1.classList.remove('hidden');
                button_2.classList.remove('hidden');
                button_3.classList.remove('hidden');
                button_4.classList.remove('hidden');

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
            Level = 3;
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
            Level = 4;
            document.getElementById('navbar_modul').innerHTML = '(комбо) ';
            if (button_combo.classList.contains('active')){
                check_all();
            }
            else{
                button_6.classList.remove('hidden');
                button_7.classList.remove('hidden');
                button_8.classList.remove('hidden');
                button_9.classList.remove('hidden');

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

        document.onkeyup = function (e) {
            e = e || window.event;
            if (e.keyCode === 13|| e.keyCode === 32) {
                start();
            }
            return false;

        }
        chered=false
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
                audio.src = "/static/custom/audio/" + music;
                audio.play()
            }
            else {audio.pause();
                audio.currentTime = 0.0;}
        }

        function soundClick(n) {
            if (chered == true) {
                audio.src = "/static/custom/audio/new_sound_"+n.toString() + '.mp3'
                audio.play()
            }
            else{
                audio2.src = "/static/custom/audio/new_sound_"+n.toString() + '.mp3'
                audio2.play()
            }
            chered = !chered
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



        correct = [ 'Well done!', 'Delicious!', 'Doing good', 'This is awesome!', 'Incredible!',
            'Excellent!', 'Excellent!', 'Great!', "It's amazing!", 'Effectively', 'You win!',
            'Terrific!', 'Witty!', 'Perfect job!' , "That's it!", 'Wonderful!',
            'Amazing!', 'It bothers the conscience!', "That's better! ",'Good answer!',
            'You deserved it! ',' Sublime! ',' What are you capable of! ',' Keep it up! '," Well, it's an event! ",
            'You can!', 'Good work!', 'You are better now!', "You're on the right!", 'Do you know how to count?!',
            'Well prepared', 'Do you think playing!', "You're on your way!", 'At the highest level!', 'Wow!',
            'What progress!', 'I like that!', 'Unusually!', 'Brilliant!', 'You can be proud of!',
            'Wonderful!', 'Beauty', 'There are no words!', 'Workshop!', "You're a wizard!",
            'This is brilliant!', 'Good work!', 'You have a good head!' ,"It's nice to look at!", 'Charming!',
            "You're smart!", 'Reasonable answer!', 'This paper!' ,'This is worthy of praise!', "You're right!",
            'Exciting', 'correct answer', 'Right!', 'Another level!'];







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






        function yes_no(a,arr){
            var c = false, i = 0;
            while (c == false && i<arr.length) {
                if (a == arr[i++]) c = true;
            }
            return c;
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
                ravno(number);
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
                chislo_plus_f(number);
            }
        }


        function calculate_simple_sub() {
            var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

            chislo_plus = []; chislo_plus_all = 0;
            schotchik++;

            if (chislo == 0 || schotchik == Kolslog) {
                ravno(number);
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
                chislo_minus_f(number);
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
                ravno(number);
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
                    chislo_plus_f(number);
                }
                else {
                    chislo_minus_f(number);
                }
            }
        }

        function calculate_brother_add() {
            var max_chislo = power10(Kolcifr)-1;
            var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

            chislo_plus = []; chislo_plus_all = 0;
            schotchik++;

            if (schotchik == Kolslog) {
                ravno(number);
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
                    chislo_plus_f(number);
                }
                else {
                    chislo_minus_f(number);
                }
            }
        }

        function calculate_brother_sub() {
            var max_chislo = power10(Kolcifr)-1;
            var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

            chislo_plus = []; chislo_plus_all = 0;
            schotchik++;

            if (schotchik == Kolslog) {
                ravno(number);
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

                if (znak == 0) chislo_plus_f(number);
                else chislo_minus_f(number);
            }
        }

        function calculate_brother_add_sub() {
            var max_chislo = power10(Kolcifr)-1;
            var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);

            chislo_plus = []; chislo_plus_all = 0;
            schotchik++;

            if (schotchik == Kolslog) {
                ravno(number);
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

                if (znak == 0) chislo_plus_f(number);
                else chislo_minus_f(number);
            }
        }

        function calculate_friend_add() {
            var POSSIBLE_CHECKED_CONST =  possible_checked(Level,Operation);
            chislo_plus = []; chislo_plus_all = 0;
            schotchik++;
            if (schotchik == Kolslog) {
                ravno(number);
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
                chislo_plus_f(number);
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
                ravno(number);
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

                chislo_minus_f(number);
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
                ravno(number);
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
                    chislo_plus_f(number);
                    cifr.length = 0;
                    for (var i = 0; i < Kolcifr; i++) {
                        cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                    }
                }
                else {
                    chislo_minus_f(number);
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
                ravno(number);
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
                chislo_plus_f(number);
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
                ravno(number);
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

                chislo_minus_f(number);
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
                ravno(number);
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
                    chislo_plus_f(number);
                    cifr.length = 0;
                    for (var i = 0; i < Kolcifr; i++) {
                        cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                    }
                }
                else {
                    chislo_minus_f(number);
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
                ravno(number);
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
                chislo_plus_f(number);
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
                ravno(number);
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
                chislo_minus_f(number);
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
                ravno(number);
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
                    chislo_plus_f(number);
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
                    chislo_minus_f(number);
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




