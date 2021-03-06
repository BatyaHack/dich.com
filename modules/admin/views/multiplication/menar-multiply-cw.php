<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;

\app\assets\MultiAsset::register($this);
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
<style>
    #correct_answer_1,
    #correct_answer_2,
    #correct_answer_3,
    #correct_answer_4,
    #correct_answer_5,
    #correct_answer_6,
    #correct_answer_7,
    #correct_answer_8,
    #correct_answer_9,
    #correct_answer_10,
    #correct_answer_11,
    #correct_answer_12,
    #correct_answer_13,
    #correct_answer_14,
    #correct_answer_15,
    #correct_answer_16 {
        color: green; !important;
    }
</style>
<div class="wrap">

    <html style = "height: 100% ; width:100%; ">

    <head>
        <meta charset="utf-8">
        <!-- <link rel="stylesheet" type="text/css" href="menar.css">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <title>Умножение-деление</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <style>
            .black_style9{
                background-color: black;
                opacity: 0.9;
                border-width:0;
                color: white;
            }
            .black_style{
                background-color: black;
                opacity: 0.8;
                border-width:0;
                color: white;
            }
            .black_style2{
                background-color: black;
                opacity: 0.8;
                border-width:1px;
                color: white;
                height:100%;
                padding-top:0;
                padding-bottom:0;
                padding-left:6px;
                padding-right:6px;
            }
            .very-big-size{
                font-size: 53px;
            }
            .big-size{
                font-size: 40px;
            }
            .small-size{
                font-size: 25px;
            }
        </style>
    </head>
    <body style = "background-image: url(<?=Url::to("@web/flash/custom/fon_1.jpg")?>); background-position: center center; background-repeat: no-repeat  ; background-size: cover ;">

    <div id = "modal_settings" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick = "close_hyese()">&times;</button>
                    <button onclick = "restart(); return false;"  class="close" tabindex = "-1" type="button" style=" margin-right:25px"  >♻   </button>
                    <button onclick = "customChangeFon(); return false;"  class="close" tabindex = "-1" type="button" style=" margin-right:25px"  >☻   </button>
                    <h4 class="modal-title">Настройки </h4>
                </div>
                <div class="panel-body col-lg-7 col-md-7 col-sm-7">
                    <div class="panel-body" style=" text-align:center"> <h4>Правильность выполнения </h4>
                        <div id = "pravilno_text" style=" text-align:center">Правильно 0 из 0 (0%)   </div>
                        <div  class="progress progress-striped active">
                            <div  id = "pravilno_progress" class="progress-bar progress-bar-success" style="width: 0"></div>
                        </div>
                    </div>
                    <div  class="panel-body" style=" text-align:center"> <h4>Операции </h4>

                        <div class="btn-group btn-group-justified">
                            <a  class="btn btn-default active" id = "Button_operation_multi"  onclick = "operation_multi();return false;" > Умножение</a>
                            <a  class="btn btn-default" id = "Button_operation_divide"  onclick = "operation_divide();return false;"> Деление</a>
                        </div>
                    </div>
                    <div class="panel-body" style="text-align:center"id = "Kolprim_panel"> <h4>  Количество примеров </h4>
                        <div class="btn-group btn-group-justified">
                            <a href="#" class="btn btn-default " onclick = "Kolprim_minus();return false;">-</a>
                            <a href="#" class="btn btn-default active"  id = "Kolprim_tablo" onclick = "Kolprim_enter();return false;" >6</a>
                            <a href="#" class="btn btn-default" onclick = "Kolprim_plus();return false;">+</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body col-lg-5 col-md-5 col-sm-5 ">


                    <div class="panel-body" style="  text-align:center"> <h4> Кол-во цифр   <span id = "modal_multi_div_1"> в первом множителе </span> </h4>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn btn-default " onclick = "Kolcifr1_minus();return false;">-</a>
                            <a  class="btn btn-default active"  id = "Kolcifr1_tablo" onclick = "Kolcifr1_enter();return false;" >2</a>
                            <a  class="btn btn-default" onclick = "Kolcifr1_plus();return false;">+</a>
                        </div>
                    </div>
                    <div class="panel-body" style="  text-align:center"> <h4>  Кол-во цифр   <span id = "modal_multi_div_2">  во втором множителе  </span> </h4>
                        <div class="btn-group btn-group-justified">
                            <a  class="btn btn-default " onclick = "Kolcifr2_minus();return false;">-</a>
                            <a  class="btn btn-default active"  id = "Kolcifr2_tablo" onclick = "Kolcifr2_enter();return false;" >1</a>
                            <a  class="btn btn-default" onclick = "Kolcifr2_plus();return false;">+</a>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <div class="panel-body">
                        <div class="panel-body">
                            <button type="button" class="btn btn-success" data-dismiss="modal" onclick="close_hyese()">Применить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top black_style9" style = "z-index: 2; height: 52" >
        <div class="container-fluid">
            <div class="navbar-header">
                <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" onclick= "button_settings_f(); return false;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a tabindex = "-1" class="navbar-brand" href="/games" style = "width: 110px; background:url(/web/multi/static/custom/css/s5_logo.png) ; background-position: center center; background-repeat: no-repeat;  background-size: contain  "></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav" id = "navbar_ul">

                    <li tabindex = "-1" class="dropdown">
                        <a tabindex = "-1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Кол-во Примеров   (<span id = 'navbar_Kolprim' style = "font-size:12">6</span>)</a>
                        <ul class="dropdown-menu black_style9" role="menu">
                            <li><a href="#" onclick = "Kolprim_enter();return false;" > Ввод</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "document.getElementById('navbar_Kolprim').innerHTML = '2'; $('#Kolprim_tablo').html(2); create_table(2); return false;">2</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "document.getElementById('navbar_Kolprim').innerHTML = '4'; $('#Kolprim_tablo').html(4); create_table(4); return false;">4</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "document.getElementById('navbar_Kolprim').innerHTML = '6'; $('#Kolprim_tablo').html(6); create_table(6); return false;">6</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "document.getElementById('navbar_Kolprim').innerHTML = '8'; $('#Kolprim_tablo').html(8); create_table(8); return false;">8</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "document.getElementById('navbar_Kolprim').innerHTML = '10'; $('#Kolprim_tablo').html(10); create_table(10); return false;">10</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "document.getElementById('navbar_Kolprim').innerHTML = '12'; $('#Kolprim_tablo').html(12); create_table(12); return false;">12</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "document.getElementById('navbar_Kolprim').innerHTML = '14'; $('#Kolprim_tablo').html(14); create_table(14); return false;">14</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "document.getElementById('navbar_Kolprim').innerHTML = '16'; $('#Kolprim_tablo').html(16); create_table(16); return false;">16</a></li>

                        </ul>
                    </li>
                    <!-- <li><a tabindex = "-1" href="#" onclick="Kolprim_minus(); return false;">-</a></li>
                    <li><a tabindex = "-1" href="#" onclick="Kolprim_plus(); return false;">+</a></li> -->

                    <li tabindex = "-1" class="dropdown" style="margin-left:20px">
                        <a tabindex = "-1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" ><span id = "navbar_multi_div_1"> 1-й множитель  </span> (<span id = 'navbar_Kolcifr1' style = "font-size:12">2</span>)</a>
                        <ul class="dropdown-menu black_style9" role="menu">
                            <li><a href="#" onclick = " Kolcifr1_f(1); return false;">1</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = " Kolcifr1_f(2); return false;">2</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = " Kolcifr1_f(3); return false;">3</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = " Kolcifr1_f(4); return false;">4</a></li>

                            <li class="divider"></li>
                            <li><a  href="#" onclick = "Kolcifr1_f(5); return false;">5</a></li>
                            <li class="divider"></li>
                            <li><a  href="#" onclick = "Kolcifr1_f(6); return false;">6</a></li>
                            <li class="divider"></li>
                            <li><a  href="#" onclick = " Kolcifr1_f(7); return false;">7</a></li>
                            <li class="divider"></li>
                            <li><a   href="#" onclick = "Kolcifr1_f(8); return false;">8</a></li>

                        </ul>
                    </li>
                    <!-- <li><a tabindex = "-1" href="#" onclick="Kolcifr1_minus(); return false;">-</a></li>
                    <li><a tabindex = "-1" href="#" onclick="Kolcifr1_plus(); return false;">+</a></li> -->

                    <li tabindex = "-1" class="dropdown" style="margin-left:20px">
                        <a tabindex = "-1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span id = "navbar_multi_div_2"> 2-й множитель   </span> (<span id = 'navbar_Kolcifr2' style = "font-size:12">1</span>)</a>
                        <ul class="dropdown-menu black_style9" role="menu">
                            <li><a href="#" onclick = " Kolcifr2_f(1); return false;">1</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "Kolcifr2_f(2); return false;">2</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "Kolcifr2_f(3); return false;">3</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "Kolcifr2_f(4); return false;">4</a></li>
                        </ul>
                    </li>
                    <!-- <li><a tabindex = "-1" href="#" onclick="Kolcifr2_minus(); return false;">-</a></li>
                    <li><a tabindex = "-1" href="#" onclick="Kolcifr2_plus(); return false;">+</a></li> -->

                    <li tabindex = "-1" class="dropdown" style="margin-left:20px">
                        <a tabindex = "-1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Операция  </span> ( <span id = 'navbar_operation' style = "font-size:12"> * </span> )</a>
                        <ul class="dropdown-menu black_style9" role="menu">
                            <li><a href="#" onclick = " operation_multi(); return false;"> Умножение</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = " operation_divide(); return false;"> Деление</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav" >
                        <div id = "navbar_pravilno_text" style=" text-align:center"> Правильно 0 из 0 (0%)   </div>
                        <div  class="progress progress-striped active black_style" style="margin-bottom:0; ">
                            <div  id = "navbar_pravilno_progress" class="progress-bar progress-bar-success" style="width: 0%"></div>
                        </div>
                    </ul>
                    <ul class="nav navbar-nav" >
                        <div class="btn-group">
                            <a onclick = "customChangeFon(); return false;"  class="btn btn-default black_style" tabindex = "-1" style = "font-size: 25px; height: 50; width:50">☻   </a>
                            <a  tabindex = "-1" id = "button_restart" class="btn btn-default black_style" onclick = "restart(); return false;" style = "font-size: 25px; height: 50; width:50">♻</a>
                            <a  tabindex = "-1" id = "button_start" class="btn btn-default black_style"  onclick = "generate(); return false;" style = "font-size: 25px; height: 50; width:50">►</a>
                            <a  tabindex = "-1" id = "button_settings" class="btn btn-default black_style" onclick = "button_settings_f(); return false;"style = "font-size: 25px; height: 50; width:50; ">&#9776</a>
                        </div>
                    </ul>
            </div>
        </div>
    </nav>

    <div class="panel-body" style= "margin:0;">
        <div class="row">
            <div id="left_border" class="col-lg-1 col-md-2 col-sm-2 hidden-xs hidden"></div>
            <div id = "window_zadaniye_1" class="col-lg-6 col-md-8 col-sm-8 hidden">
                <div id = "window_otvet_1" class="panel panel-primary black_style">
                    <div class="panel-heading">
                        <h3  class="panel-title" style=" text-align:center" > </h3>
                    </div>
                    <div class="panel-body">
                        <table  class="table black_style  panel-primary"  >
                            <thead style= "font-size:12px" >

                            <th id="name" class = "col-lg-1  "  style= "text-align:center"> Имя </th>
                            <th id="points" class = "col-lg-1 "  style= "text-align:center"> Балл </th>
                            <th id="problem" class = "col-lg-3 col-xs-6" style= "text-align:center"> Задание </th>
                            <th id="user_answer" class = "col-lg-4 hidden-xs" style= "text-align:center">Ваш ответ </th>
                            <th id="correct_answer" class = "col-lg-3 hidden-xs" style= "text-align:center">Правильный ответ</th>



                            </thead>
                            <tbody id = "table_schot_1" class = "small-size" >

                            </tbody>
                        </table>
                    </div>
                    <div id = "keyboard" class=" hidden" style = "opacity:0.9" >
                        <div class="btn-group btn-group-justified">
                            <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') user_answer_1.value += 1; return false;" class="btn btn-default btn-lg" style = "background-color: black; border-color: DimGray; border-width: 1; color: white">1</a>
                            <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') user_answer_1.value += 2; return false;" class="btn btn-default btn-lg" style = "background-color: black; border-color: DimGray; border-width: 1; color: white">2</a>
                            <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') user_answer_1.value += 3; return false;" class="btn btn-default btn-lg" style = "background-color: black; border-color: DimGray; border-width: 1; color: white">3</a>
                        </div>
                        <div class="btn-group btn-group-justified">
                            <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') user_answer_1.value += 4; return false;" class="btn btn-default btn-lg" style = "background-color: black; border-color: DimGray; border-width: 1; color: white">4</a>
                            <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') user_answer_1.value += 5; return false;" class="btn btn-default btn-lg" style = "background-color: black; border-color: DimGray; border-width: 1; color: white">5</a>
                            <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') user_answer_1.value += 6; return false;" class="btn btn-default btn-lg" style = "background-color: black; border-color: DimGray; border-width: 1; color: white">6</a>
                        </div>
                        <div class="btn-group btn-group-justified">
                            <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') user_answer_1.value += 7; return false;" class="btn btn-default btn-lg" style = "background-color: black; border-color: DimGray; border-width: 1; color: white">7</a>
                            <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') user_answer_1.value += 8; return false;" class="btn btn-default btn-lg" style = "background-color: black; border-color: DimGray; border-width: 1; color: white">8</a>
                            <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') user_answer_1.value += 9; return false;" class="btn btn-default btn-lg" style = "background-color: black; border-color: DimGray; border-width: 1; color: white">9</a>
                        </div>
                        <div class="btn-group btn-group-justified">
                            <a id = "button_calc_start" onclick = "generate(); return false;" class="btn btn-default btn-lg" style = "background-color: black; border-color: DimGray; border-width: 1; color: white">►</a>
                            <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') user_answer_1.value += 0; return false;" class="btn btn-default btn-lg" style = "background-color: black; border-color: DimGray; border-width: 1; color: white">0</a>
                            <a  onclick = "if (document.getElementById('button_start').innerHTML == '✐') user_answer_1.value = ( user_answer_1.value < 10 ? '' : parseInt(user_answer_1.value/10)); return false;" class="btn btn-default" style = "background-color: black; border-color: DimGray; border-width: 1; color: white">←</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id = "window_zadaniye_2" class="col-lg-6 hidden">
                <div id = "window_otvet_2" class="panel panel-primary black_style ">
                    <div class="panel-heading">
                        <h3  class="panel-title" style=" text-align:center" > </h3>
                    </div>
                    <div class="panel-body">
                        <table class="table black_style  panel-primary "  >
                            <thead style= "font-size:12" >

                            <th id="name" class = "col-lg-1  "  style= "text-align:center"> Имя </th>
                            <th id="points" class = "col-lg-1 "  style= "text-align:center"> Балл </th>
                            <th id="problem" class = "col-lg-3 col-xs-6" style= "text-align:center"> Задание </th>
                            <th id="user_answer" class = "col-lg-4 hidden-xs" style= "text-align:center">Ваш ответ </th>
                            <th id="correct_answer" class = "col-lg-3 hidden-xs" style= "text-align:center">Правильный ответ</th>


                            </thead>
                            <tbody  id = "table_schot_2" class = "small-size">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        window.onload=function(){
            change_background();
            if (device.mobile() || device.tablet()) {
                create_table(1);
                $("#name").addClass("hidden")
                $("#points").addClass("hidden")
                $("#table_schot_2").addClass("hidden")
                $("#table_schot_1").addClass('small-size')
                $("#table_schot_1").removeClass('big-size')
                $("#table_schot_1").removeClass('very-big-size')
                $("#user_answer_1").addClass('small-size')
                $("#user_answer_1").removeClass('big-size')
                $("#user_answer_1").removeClass('very-big-size')
                document.getElementById('navbar_ul').classList.add("hidden");
                document.getElementById('Kolprim_panel').classList.add("hidden");
            }
            else{
                create_table(6);
                $("#user_answer_1").removeClass("disabled")
                document.getElementById('navbar_ul').classList.remove("hidden");
                document.getElementById('Kolprim_panel').classList.remove("hidden");
            }


        }
        // window.onresize=function(){
        //   if (document.body.clientWidth < 1000 ) {
        //     create_table(1);
        //     $("#table_schot_2").addClass("hidden")
        //     $("#table_schot_1").addClass('small-size')
        //     $("#table_schot_1").removeClass('big-size')
        //     $("#table_schot_1").removeClass('very-big-size')
        //     $("#user_answer_1").addClass('small-size')
        //     $("#user_answer_1").removeClass('big-size')
        //     $("#user_answer_1").removeClass('very-big-size')
        //     document.getElementById('navbar_ul').classList.add("hidden");
        //     document.getElementById('Kolprim_panel').classList.add("hidden");
        //   }
        //   else{
        //     create_table(6);
        //     $("#user_answer_1").removeClass("disabled")
        //     document.getElementById('navbar_ul').classList.remove("hidden");
        //     document.getElementById('Kolprim_panel').classList.remove("hidden");
        //   }
        // }
        function restart(){
            correct = 0
            allcorrect = 0
            done = 0
            show_progress()
        }
        function show_progress(){
            if (done == 0) x = 0;
            else x = parseInt(allcorrect/done*100);
            document.getElementById('pravilno_progress').style.width = x + "%";
            document.getElementById('navbar_pravilno_progress').style.width = x + "%";

            $("#navbar_pravilno_text").html("Правильно " + allcorrect.toString() + " из " + done.toString() + " (" + x + "%)")
            $("#pravilno_text").html("Правильно " + allcorrect.toString() + " из " + done.toString() + " (" + x + "%)")


        }
        var Kolcifr1 = 2
        var Kolcifr2 = 1
        var Operation = 0
        function generate(){
            document.getElementById("user_answer_1").focus();
            switch (document.getElementById('button_start').innerHTML){
                case "►":
                    if ((!device.mobile() && !device.tablet()) ){
                        user_answer_1.readOnly = false;
                        document.getElementById("user_answer_1").focus();
                    }
                    soundClick2(0,0);
                    soundClick(1);
                    $("#button_start").html("✐");
                    for (var i=1;i <= Kolprim; i++ ){
                        row_id = "#row_"+i;
                        $(row_id).removeClass("danger")
                        $(row_id).removeClass("success")
                        user_answer_id = "#user_answer_"+i;
                        $(user_answer_id).val("")
                        problem_id = "#problem_"+i;
                        correct_answer_id = "#correct_answer_" + i;
                        $(correct_answer_id).addClass("invisible");
                        switch (Operation){
                            case 0:
                                number1 = random_between(power10(Kolcifr1-1) + 1,power10(Kolcifr1));
                                number2 = random_between(power10(Kolcifr2-1) + 1,power10(Kolcifr2));
                                correct_answer = number1*number2;
                                problem = number1.toString() + "×" + number2.toString();
                                if (!device.tablet() && !device.mobile()) problem+="="
                                break;
                            case 1:
                                if (Kolcifr1 <= Kolcifr2){
                                    Kolcifr1 = Kolcifr2 + 1;
                                    $("#Kolcifr1_tablo").html(Kolcifr1)
                                    $("#navbar_Kolcifr1").html(Kolcifr1)
                                }
                                check = false;
                                while (check == false){
                                    number2 = random_between(power10(Kolcifr2-1)+1,power10(Kolcifr2));
                                    correct_answer =  random_between(power10(Kolcifr1-Kolcifr2-1),power10(Kolcifr1-Kolcifr2));
                                    number1 = number2*correct_answer
                                    if (number1.toString().length == Kolcifr1)
                                        check = true;
                                }
                                problem = number1.toString() + " : " + number2.toString();
                                if (!device.tablet() && !device.mobile()) problem+="="
                                break;
                        }

                        $(problem_id).html(problem);
                        $(correct_answer_id).html(correct_answer);
                    }
                    break;
                case "✐":

                    correct = 0;
                    $("#button_start").html("►")
                    for (var i=1; i<=Kolprim; i++){
                        row_id = "#row_"+i;
                        user_answer_id = "#user_answer_"+i;
                        correct_answer_id = "#correct_answer_" + i;
                        points_id = "#points_"+i;
                        if (!isNaN(parseInt($(points_id).html()))) points = parseInt($(points_id).html())
                        else points = 0;

                        $(correct_answer_id).removeClass("invisible");
                        if (parseInt($(correct_answer_id).html()) == parseInt($(user_answer_id).val())){
                            $(row_id).addClass("success")
                            points+=10;
                            correct++;
                            $(points_id).html(points)
                        }
                        else{
                            $(row_id).addClass("danger")
                        }
                    }

                    if (Kolprim == 1) half_Kolprim = 1
                    else half_Kolprim = parseInt(Kolprim*0.5)
                    if (correct >= half_Kolprim) soundClick2(1,1)
                    else soundClick2(0,1)
                    done += Kolprim;
                    allcorrect += correct;
                    show_progress();
                    break;
            }
        }

        var allcorrect = 0, correct = 0, done = 0;
        function Kolprim_enter(){

            var t = Math.abs(parseFloat(prompt("Введите количество примеров от 1 до 16  ")));
            if (isNaN(t) || t > 16 || t < 1) {
                document.getElementById('Kolprim_tablo').innerHTML = 6;
                document.getElementById('navbar_Kolprim').innerHTML = 6;
                create_table(6);
            }
            else{
                t = parseInt(t);
                document.getElementById('Kolprim_tablo').innerHTML = t;
                document.getElementById('navbar_Kolprim').innerHTML = t;
                create_table(parseInt(t));
            }

        }
        function button_settings_f(){
            $('#modal_settings').show();
        }

        function close_hyese() {
            $('#modal_settings').hide();
        }

        var Kolprim = 0
        function create_table(k){
            if (device.mobile() || device.tablet()) {
                Kolprim = 1;

                $("#left_border").removeClass('hidden')
                $("#keyboard").removeClass('hidden')
                $("#name").addClass('hidden')
                $("#points").addClass('hidden')
                $("#correct_answer").addClass('hidden')
                $("#user_answer").addClass('hidden')
                $("#table_schot_1").addClass('small-size')
                $("#table_schot_1").removeClass('big-size')
                $("#table_schot_1").removeClass('very-big-size')
                $("#window_zadaniye_2").addClass("hidden");
                $("#window_zadaniye_1").removeClass("hidden");
                var newrow= document.all.table_schot_1.insertRow();
                var id = "row_1"
                newrow.setAttribute('id',id);

                var points = newrow.insertCell();
                var id = "points_1"
                points.setAttribute('id',id);
                $(points).addClass( "hidden" )

                var problem = newrow.insertCell();
                var id = "problem_1"
                problem.setAttribute('id',id);
                problem.setAttribute('style','text-align:center;')
                $(problem).html("Задание")

                var newrow= document.all.table_schot_1.insertRow();
                var newcell_for_input=newrow.insertCell()
                var input = document.createElement("INPUT")
                id= "user_answer_1"
                input.setAttribute('id',id);
                input.setAttribute('readonly','readonly');
                input.setAttribute('style','text-align:center; background-color: #000000');
                newcell_for_input.appendChild(input)
                $(input).addClass( "black_style2 form-control small-size" )

                var newrow= document.all.table_schot_1.insertRow();
                var correct = newrow.insertCell()
                id = "correct_answer_1"
                correct.setAttribute('id',id);
                $(correct).addClass( "invisible" )
                correct.setAttribute('style','text-align:center;')
                $(correct).html("Правильный ответ")
            }
            else{
                if ( k <= 8 ){
                    if (k<=4){
                        $("#table_schot_1").removeClass('small-size')
                        $("#table_schot_1").removeClass('big-size')
                        $("#table_schot_1").addClass('very-big-size')
                        $("#left_border").removeClass("col-lg-3");
                        // $("#left_border").removeClass("col-lg-2");
                        $("#left_border").addClass("col-lg-1");
                        $("#window_zadaniye_1").removeClass("col-lg-6");
                        // $("#window_zadaniye_1").removeClass("col-lg-8");
                        $("#window_zadaniye_1").addClass("col-lg-10");
                    }
                    else if (k<=6 && k>=5){
                        $("#table_schot_1").removeClass('small-size')
                        $("#table_schot_1").addClass('big-size'); $("#table_schot_1").removeClass('very-big-size');
                        $("#left_border").removeClass("col-lg-3");
                        // $("#left_border").removeClass("col-lg-2");
                        $("#left_border").addClass("col-lg-1");
                        $("#window_zadaniye_1").removeClass("col-lg-6");
                        // $("#window_zadaniye_1").removeClass("col-lg-8");
                        $("#window_zadaniye_1").addClass("col-lg-10");
                    }
                    else{
                        $("#table_schot_1").removeClass('big-size')
                        $("#table_schot_1").addClass('small-size'); $("#table_schot_1").removeClass('very-big-size');
                        $("#left_border").removeClass("col-lg-1");
                        // $("#left_border").removeClass("col-lg-2");
                        $("#left_border").addClass("col-lg-3");
                        $("#window_zadaniye_1").removeClass("col-lg-10");
                        // $("#window_zadaniye_1").removeClass("col-lg-8");
                        $("#window_zadaniye_1").addClass("col-lg-6");
                    }
                    $("#window_zadaniye_1").removeClass("hidden");
                    $("#window_zadaniye_2").addClass("hidden");
                    $("#left_border").removeClass("hidden");
                    // $("#window_zadaniye_1").removeClass("col-lg-6");
                    // $("#window_zadaniye_1").addClass("col-lg-10");
                    if (k > Kolprim){
                        for (var i = Kolprim+1; i <= k; i++){
                            var newrow= document.all.table_schot_1.insertRow();
                            id= "row_" + i.toString();
                            newrow.setAttribute('id',id);

                            var name = newrow.insertCell()
                            name.innerText = i;
                            var id = "name_" + i.toString();
                            name.setAttribute('id',id);
                            name.setAttribute('onclick',"var tx = this.innerHTML; this.innerHTML = prompt(' Введите имя'); if (this.innerHTML == '') this.innerHTML = tx; return false;");

                            var points = newrow.insertCell();
                            var id = "points_" + i.toString();
                            points.setAttribute('id',id);
                            points.innerText = "-"


                            var problem = newrow.insertCell();
                            var id = "problem_" + i.toString();
                            problem.setAttribute('id',id);
                            problem.setAttribute('style','text-align:right;')

                            var newcell_for_input=newrow.insertCell()
                            var input = document.createElement("INPUT")
                            id= "user_answer_" + i.toString();
                            input.setAttribute('id',id);

                            if (i==1){
                                input.setAttribute('autofocus','autofocus');
                                input.setAttribute('readonly','readonly');
                                input.setAttribute('style','background-color: #000000');
                            }
                            newcell_for_input.appendChild(input)
                            $(input).addClass( "black_style2 form-control small-size" )

                            var correct = newrow.insertCell()
                            id = "correct_answer_" + i.toString();
                            correct.setAttribute('id',id); $(correct).addClass( "invisible" )
                        }
                    }
                    else{
                        if (Kolprim < 8){
                            for (var i = Kolprim; i > k; i--){
                                table_schot_1.deleteRow(i-1);
                            }
                        }
                        else{
                            for (var i = Kolprim; i > 8; i--){
                                table_schot_2.deleteRow(0);
                            }
                            for (var i = 8; i > k; i--){
                                table_schot_1.deleteRow(i-1);
                            }
                        }
                    }
                    Kolprim = k;
                    // if (Kolprim <= 6){

                }
                else{
                    $("#table_schot_1").removeClass('big-size')
                    $("#table_schot_1").addClass('small-size');
                    $("#table_schot_1").removeClass('very-big-size');
                    $("#window_zadaniye_1").removeClass("hidden");
                    $("#window_zadaniye_2").removeClass("hidden");
                    $("#left_border").addClass("hidden");
                    $("#window_zadaniye_1").removeClass("col-lg-10");
                    $("#window_zadaniye_1").addClass("col-lg-6");
                    if (k > Kolprim){
                        if (Kolprim > 8){
                            for (var i=Kolprim+1; i<=k; i++){
                                var newrow= document.all.table_schot_2.insertRow();
                                id= "row_" + i.toString();
                                newrow.setAttribute('id',id);

                                var name = newrow.insertCell()
                                name.innerText = i;
                                var id = "name_" + i.toString();
                                name.setAttribute('id',id);
                                name.setAttribute('onclick',"var tx = this.innerHTML; this.innerHTML = prompt(' Введите имя'); if (this.innerHTML == '') this.innerHTML = tx; return false;");

                                var points = newrow.insertCell();
                                var id = "points_" + i.toString();
                                points.setAttribute('id',id);
                                points.innerText = "-"

                                var problem = newrow.insertCell();
                                var id = "problem_" + i.toString();
                                problem.setAttribute('id',id); problem.setAttribute('style','text-align:right');


                                var newcell_for_input=newrow.insertCell()
                                var input = document.createElement("INPUT")
                                id= "user_answer_" + i.toString();
                                input.setAttribute('id',id);
                                if (i==1)
                                    input.setAttribute('autofocus','autofocus');
                                newcell_for_input.appendChild(input)
                                $(input).addClass( "black_style2 form-control" )

                                var correct = newrow.insertCell()
                                id = "correct_answer_" + i.toString();
                                correct.setAttribute('id',id); $("correct").addClass( "hidden" )
                            }
                        }
                        else{
                            for (var i=Kolprim +1; i<=8; i++){
                                var newrow= document.all.table_schot_1.insertRow();
                                id= "row_" + i.toString();
                                newrow.setAttribute('id',id);

                                var name = newrow.insertCell()
                                name.innerText = i;
                                var id = "name_" + i.toString();
                                name.setAttribute('id',id);
                                name.setAttribute('onclick',"var tx = this.innerHTML; this.innerHTML = prompt(' Введите имя'); if (this.innerHTML == '') this.innerHTML = tx; return false;");

                                var points = newrow.insertCell();
                                var id = "points_" + i.toString();
                                points.setAttribute('id',id);
                                points.innerText = "-"

                                var problem = newrow.insertCell();
                                var id = "problem_" + i.toString();
                                problem.setAttribute('id',id); problem.setAttribute('style','text-align:right');


                                var newcell_for_input=newrow.insertCell()
                                var input = document.createElement("INPUT")
                                id= "user_answer_" + i.toString();
                                input.setAttribute('id',id);
                                if (i==1)
                                    input.setAttribute('autofocus','autofocus');
                                newcell_for_input.appendChild(input)
                                $(input).addClass( "black_style2 form-control" )

                                var correct = newrow.insertCell()
                                id = "correct_answer_" + i.toString();
                                correct.setAttribute('id',id); $("correct").addClass( "hidden" )
                            }
                            for (var i=9; i<=k; i++){
                                var newrow= document.all.table_schot_2.insertRow();
                                id= "row_" + i.toString();
                                newrow.setAttribute('id',id);

                                var name = newrow.insertCell()
                                name.innerText = i;
                                var id = "name_" + i.toString();
                                name.setAttribute('id',id);
                                name.setAttribute('onclick',"var tx = this.innerHTML; this.innerHTML = prompt(' Введите имя'); if (this.innerHTML == '') this.innerHTML = tx; return false;");

                                var points = newrow.insertCell();
                                var id = "points_" + i.toString();
                                points.setAttribute('id',id);
                                points.innerText = "-"

                                var problem = newrow.insertCell();
                                var id = "problem_" + i.toString();
                                problem.setAttribute('id',id); problem.setAttribute('style','text-align:right');


                                var newcell_for_input=newrow.insertCell()
                                var input = document.createElement("INPUT")
                                id= "user_answer_" + i.toString();
                                input.setAttribute('id',id);
                                if (i==1)
                                    input.setAttribute('autofocus','autofocus');
                                newcell_for_input.appendChild(input)
                                $(input).addClass( "black_style2 form-control" )

                                var correct = newrow.insertCell()
                                id = "correct_answer_" + i.toString();
                                correct.setAttribute('id',id); $("correct").addClass( "hidden" )
                            }
                        }
                    }
                    else{
                        for (var i = Kolprim; i > k; i--){
                            table_schot_2.deleteRow( i - 9 );
                        }
                    }
                    Kolprim = k;
                }
                for (i=1;i<=Kolprim;i++){
                    user_answer_id= "#user_answer_" + i.toString();
                    if (Kolprim <=4 ){
                        $(user_answer_id).removeClass( "small-size" )
                        $(user_answer_id).removeClass( "big-size" )
                        $(user_answer_id).addClass( "very-big-size" )
                    }
                    else if (Kolprim<=6 && Kolprim>=5){
                        $(user_answer_id).removeClass( "small-size" )
                        $(user_answer_id).addClass( "big-size" )
                    }
                    else{
                        $(user_answer_id).removeClass( "big-size" )
                        $(user_answer_id).addClass( "small-size" )
                    }
                }
            }
        }

        function operation_multi(){
            Operation = 0;
            $('#navbar_operation').html("*")
            $("#divide_kolcifr").addClass("hidden")
            $('#navbar_multi_div_1').html("1-й множитель")
            $('#navbar_multi_div_2').html("2-й множитель")
            $('#modal_multi_div_1').html("в первом множителе")
            $('#modal_multi_div_2').html("во втором множителе")
            $('#Button_operation_multi').addClass('active')
            $('#Button_operation_divide').removeClass('active')
        }
        function operation_divide(){
            Operation = 1;
            $('#navbar_operation').html(":")
            $("#divide_kolcifr").removeClass("hidden")
            $('#navbar_multi_div_1').html("Делимое")
            $('#navbar_multi_div_2').html("Делитель")
            $('#modal_multi_div_1').html("в делимом")
            $('#modal_multi_div_2').html("в делителе")
            $('#Button_operation_multi').removeClass('active')
            $('#Button_operation_divide').addClass('active')
        }



        function Kolcifr1_f (k) {
            if ((Operation == 0) && (k>4)){
                $('#Kolcifr1_tablo').html(4);
                $('#navbar_Kolcifr1').html(4);
                Kolcifr1 = 4;
            }
            else{
                $('#Kolcifr1_tablo').html(k);
                $('#navbar_Kolcifr1').html(k);
                Kolcifr1 = k;
            }
        }
        function Kolcifr2_f (k) {
            $('#Kolcifr2_tablo').html(k);
            $('#navbar_Kolcifr2').html(k);
            Kolcifr2 = k;
        }
        function Kolcifr1_minus(){
            if ( Kolcifr1 > 1 ){
                Kolcifr1 -= 1
                $('#Kolcifr1_tablo').html(Kolcifr1)
                $('#navbar_Kolcifr1').html(Kolcifr1)
            }

        }

        function Kolcifr1_plus(){
            if (Operation == 0) max = 4
            else max = 8;
            if ( Kolcifr1 < max){
                Kolcifr1 += 1
                $('#Kolcifr1_tablo').html(Kolcifr1)
                $('#navbar_Kolcifr1').html(Kolcifr1)
            }

        }

        function Kolcifr2_minus(){
            if ( Kolcifr2 > 1 ){
                Kolcifr2 -= 1
                $('#Kolcifr2_tablo').html(Kolcifr2)
                $('#navbar_Kolcifr2').html(Kolcifr2)
            }

        }

        function Kolcifr2_plus(){
            if ( Kolcifr2 < 4 ){
                Kolcifr2 += 1
                $('#Kolcifr2_tablo').html(Kolcifr2)
                $('#navbar_Kolcifr2').html(Kolcifr2)
            }

        }

        // var Kolprim = 4;
        function Kolprim_minus(){
            if ( Kolprim > 1 ){
                k=Kolprim-1;
                create_table(k);
                $('#Kolprim_tablo').html(k);
                $('#navbar_Kolprim').html(k);
            }
        }

        function Kolprim_plus(){
            if ( Kolprim < 16 ){
                k=Kolprim+1;
                create_table(k);
                $('#Kolprim_tablo').html(k);
                $('#navbar_Kolprim').html(k);
            }
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


        document.onkeyup = function (e) {
            e = e || window.event;
            if (e.keyCode === 13|| e.keyCode === 32) {
                generate();
            }
            return false;

        }


        function soundClick2(u,r) {

            // var audio = new Audio();
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
        var audio = new Audio();
        var audio2 = new Audio();
        var chered = true;
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

    </script>

    </body>

    </html>


    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


















