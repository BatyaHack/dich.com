<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\SlowAsset::register($this);
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





<html style = "height: 100% ; width:100%; ">
<head>
    <meta charset="utf-8">
    <title>Счет на скорость</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <style>
        .white_style{
            background-color: white;
            /*opacity: 0.99;*/
            color: #1a1a1a;
            box-shadow: none;
            padding-bottom: 4px;
        }
        .white_style8{
            background-color: white;
            opacity: 0.95;
            color: #1a1a1a;
        }
        .black_style8{
            background-color: black;
            opacity: 0.8;
            color: white;
            box-shadow: 0 0 5px white
        }
        .black_style{
            background-color: black;
            opacity: 0.9;
            color: white;
            box-shadow: none;
            padding-bottom: 4px;
        }
        .black_style> li > a {
            color: #dcdcdc;
        }
        .navbar-inverse .navbar-nav > li > a {
            color: #dcdcdc;
        }
    </style>
</head>
<script src="https://use.fontawesome.com/7b599d6dc9.js"></script>
<body style = "background-image: url(/static/custom/css/fon_1.jpg); background-position: center center; background-repeat: no-repeat  ; background-size: cover; ">


<nav class="navbar navbar-inverse navbar-fixed-top white_style"  style = "z-index: 2; margin-bottom:0; padding: 0;" >
    <div class="container-fluid ">
        <div class="navbar-header">
            <btn   type="btn" class="navbar-toggle collapsed " data-toggle="collapse" onclick= "show_settings(); ">
                &#9776
            </btn>
            <btn class="navbar-toggle collapsed " data-toggle="collapse"  tabindex = "-1"  onclick = "voice=!voice; $('#voice').toggleClass('fa-volume-off fa-volume-up') " > <i class="fa fa-volume-up" aria-hidden="true" id="voice" ></i></btn>
            <btn onclick = "change_style(); "  class="navbar-toggle collapsed " data-toggle="collapse"  tabindex = "-1" > <i class="fa fa-eye" aria-hidden="true"></i>  </btn>
            <btn onclick = "change_background(); "  class="navbar-toggle collapsed " data-toggle="collapse" tabindex = "-1" ><i class="fa fa-smile-o" aria-hidden="true"></i>   </btn>

            <a id = "navbar_logo" tabindex = "-1" class="navbar-brand" href="/games" style = "width: 100px; background:url(/static/custom/css/logo_rus.png); background-position: center center; background-repeat: no-repeat; background-size: contain  "></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="navbar_parametrs">
                <table style="margin: 0">
                    <div class="btn-group" style="text-transform: none; border-left: 1px solid #dcdcdc; float: left;">
                        <a id = "wt0btn_module_1" class="btn btn-default white_style active" style="text-transform: none; width: 43px" onclick = "change_module(1);" >П</a>
                        <a id = "wt0btn_module_2" class="btn btn-default white_style" style="text-transform: none; width: 43px" onclick = "change_module(2);" >Б</a>
                        <a id = "wt0btn_module_3" class="btn btn-default white_style" style="text-transform: none; width: 43px"onclick = "change_module(3);" >Д</a>
                        <a id = "wt0btn_module_4" class="btn btn-default white_style" style="text-transform: none; width: 43px" onclick = "change_module(4);" >К</a>
                        <a id = "wt0btn_module_5" class="btn btn-default white_style" style="text-transform: none; width: 43px" onclick = "change_module(5);" >R</a>
                    </div>
                    <div class="btn-group" style="border-left:1px solid #dcdcdc; float: left;">
                        <a id = "wt0operation_0" class="btn btn-default white_style" style="text-transform: none; width: 56px" onclick = "change_operation(0);" ><b>+</b></a>
                        <a id = "wt0operation_1" class="btn btn-default white_style" style="text-transform: none; width: 56px" onclick = "change_operation(1);" ><b>-</b></a>
                        <a id = "wt0operation_2" class="btn btn-default white_style active" style="text-transform: none; width: 58px" onclick = "change_operation(2);" ><b>+/-</b></a>

                        <!-- <a style="width: 170; text-transform: none;" class="btn btn-default white_style dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id = "navbar_operation_tablo">Сложение+Вычитание</a>
              <ul class="dropdown-menu white_style"  role="menu">
                <li><a href="#" onclick = "change_operation(0);" >Сложение</a></li>
                <li class="divider"></li>
                <li><a href="#" onclick = "change_operation(1);" >Вычитание</a></li>
                <li class="divider"></li>
                <li><a href="#" onclick = "change_operation(2);" >Сложение/Вычитание</a></li>
              </ul> -->
                    </div>
                    <div class="btn-group" style="border-left:1px solid #dcdcdc; float: left;">
                        <a class="btn btn-default  white_style" onclick = "change_digits_num(false);"><</a>
                        <a style="width: 80; text-transform: none;" class="btn btn-default white_style dropdown-toggle" data-toggle="dropdown" >цифр: <span id="navbar_digits_num_tablo"> 1 </span></a>
                        <ul class="dropdown-menu white_style">
                            <li><a href="#" onclick = "change_digits_num(1);" >1 цифра</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_digits_num(2);" >2 цифры</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_digits_num(3);" >3 цифры</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_digits_num(4);" >4 цифры</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_digits_num(5);" >5 цифр</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_digits_num(6);" >6 цифр</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_digits_num(7);" >7 цифр</a></li>
                        </ul>
                        <a class="btn btn-default  white_style" onclick = "change_digits_num(true);">></a>
                    </div>
                    <div class="btn-group" style="border-left:1px solid #dcdcdc; float: left;">
                        <a class="btn btn-default  white_style" onclick = "change_summands_num(false);"><</a>
                        <a style="width: 80px; text-transform: none;" class="btn btn-default white_style dropdown-toggle" data-toggle="dropdown" >слаг: <span id="navbar_summands_num_tablo"> 4 </span></a>
                        <ul class="dropdown-menu white_style">
                            <li><a href="#" onclick = "change_summands_num(0);" >Ввод</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_summands_num(3);" >3 слагаемых</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_summands_num(4);" >4 слагаемых</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_summands_num(3);" >5 слагаемых</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_summands_num(6);" >6 слагаемых</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_summands_num(7);" >7 слагаемых</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_summands_num(8);" >8 слагаемых</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_summands_num(9);" >9 слагаемых</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_summands_num(10);" >10 слагаемых</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_summands_num(15);" >15 слагаемых</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_summands_num(20);" >20 слагаемых</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_summands_num(30);" >30 слагаемых</a></li>
                        </ul>
                        <a class="btn btn-default  white_style" onclick = "change_summands_num(true);">></a>
                    </div>
                    <div class="btn-group" style="border-left:1px solid #dcdcdc; float: left;">
                        <a class="btn btn-default  white_style" onclick = "change_interval(false);"><</a>
                        <a style="width: 80px; text-transform: none;" class="btn btn-default white_style dropdown-toggle" data-toggle="dropdown" >сек: <span id="navbar_interval_tablo"> 1 </span></a>
                        <ul class="dropdown-menu white_style">
                            <li><a href="#" onclick = "change_interval(0);" >Ввод</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_interval(0.2);" >0.2 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_interval(0.3);" >0.3 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_interval(0.5);" >0.5 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_interval(0.7);" >0.7 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_interval(1);" >1 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_interval(1.5);" >1.5 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_interval(2);" >2 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_interval(2.5);" >2.5 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_interval(3);" >3 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_interval(4);" >4 сек</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_interval(5);" >5 сек</a></li>
                        </ul>
                        <a class="btn btn-default  white_style" onclick = "change_interval(true);">></a>
                    </div>


                </table>

                <table style="margin: 0">
                    <div class="btn-group btn-group-justified" style="border-left:1px solid #dcdcdc; float: left; width: 216px">
                        <a class="btn btn-default hidden white_style" id = "wt0btn_1" onclick = "check_digit(1)">1</a>
                        <a class="btn btn-default hidden white_style" id = "wt0btn_2" onclick = "check_digit(2)">2</a>
                        <a class="btn btn-default hidden white_style" id = "wt0btn_3" onclick = "check_digit(3)">3</a>
                        <a class="btn btn-default hidden white_style" id = "wt0btn_4" onclick = "check_digit(4)">4</a>
                        <a class="btn btn-default active white_style" id = "wt0btn_5" onclick = "check_digit(5)">5</a>
                        <a class="btn btn-default active white_style" id = "wt0btn_6" onclick = "check_digit(6)">6</a>
                        <a class="btn btn-default active white_style" id = "wt0btn_7" onclick = "check_digit(7)">7</a>
                        <a class="btn btn-default active white_style" id = "wt0btn_8" onclick = "check_digit(8)">8</a>
                        <a class="btn btn-default active white_style" id = "wt0btn_9" onclick = "check_digit(9)">9</a>
                        <a class="btn btn-default white_style" onclick = "check_all_digits();" >&#10004;</a>
                    </div>
                    <div class="btn-group btn-group-justified" style="border-left:1px solid #dcdcdc; float: left; width: 171px">
                        <a class="btn btn-default  white_style" style="width: 70%; text-transform: none;" id = "navbar_progress_mode" onclick = "change_progress_mode();">Прогресс</a>
                        <a class="btn btn-default  white_style active" style="width: 30%" id = "nabvar_btn_half" onclick = "change_half()">1/2</a>
                    </div>
                    <div class="btn-group" style="border-left:1px solid #dcdcdc; float: left;">
                        <a style="width: 126; text-transform: none;" class="btn btn-default white_style dropdown-toggle" data-toggle="dropdown" >Режим: <span id = "navbar_screens_num_tablo"> 1  </span> экран</a>
                        <ul class="dropdown-menu white_style">
                            <li><a href="#" onclick = "change_screens_num(0);" >Turbo</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_screens_num(1);" >1 экран</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_screens_num(2);" >2 экрана</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_screens_num(3);" >3 экрана</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_screens_num(4);" >4 экрана</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_screens_num(5);" >5 экранов</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_screens_num(6);" >6 экранов</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_screens_num(7);" >7 экранов</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_screens_num(8);" >8 экранов</a></li>
                        </ul>
                    </div>

                    <div class="btn-group" style="border-left:1px solid #dcdcdc; float: left;">
                        <a style="width: 125; text-transform: none;" class="btn btn-default white_style dropdown-toggle" data-toggle="dropdown" >Шрифт: <span id = "navbar_font_tablo"> R  </span></a>
                        <ul class="dropdown-menu white_style">
                            <li><a href="#" onclick = "change_font(0);"  style="font-family: 'Roboto' ">Roboto</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_font(1);" style="font-family: 'Jokerman' ">Jokerman</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_font(2);" style="font-family: 'DFPOP1-W9' ">DFPOP1-W9</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_font(3);" style="font-family: 'Playbill' ">Playbill</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick = "change_font(4);" style="font-family: 'Showcard Gothic' ">Showcard Gothic</a></li>
                        </ul>
                    </div>

                    <div class="btn-group" style="border-left:1px solid #dcdcdc; float: left;">
                        <a class="btn btn-default  white_style" onclick = "change_fontsize_f(false);"><</a>
                        <a class="btn btn-default  white_style" style="width: 80px; text-transform: none;"  onclick = "change_fontsize_f(0); ">Размер:<span id="navbar_fontsize_tablo"> 50 </span> </a>
                        <a class="btn btn-default  white_style" onclick = "change_fontsize_f(true);">></a>
                    </div>
                </table>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <a href="#" class="navbar-brand hidden"  tabindex = "-1" id="btn_global_example" onclick = "show_example();"><b>=</b></a>
                <a href="#" class="navbar-brand hidden"  tabindex = "-1" id="btn_global_repeat" onclick = "Global_repeat();"><i class='fa fa-repeat' aria-hidden='true'></i></a>
                <a href="#" class="navbar-brand "  tabindex = "-1" id="btn_global_stop" onclick = "Global_stop();"><i class="fa fa-square" aria-hidden="true"></i></a>
                <a href="#" class="navbar-brand"  tabindex = "-1" id="btn_global_start" onclick = "Global_start();"><i class='fa fa-play' aria-hidden='true'></i></a>

                <table >
                    <div class="btn-group btn-group-justified" style="float: left; width: 80px;">
                        <a onclick = "change_background(); "  class="btn btn-default  white_style " tabindex = "-1" ><i class="fa fa-smile-o" aria-hidden="true"></i></a>
                        <a class="btn btn-default  white_style "  onclick = "show_settings(); "><i class="fa fa-gear" aria-hidden="true"></i></a>
                    </div>
                </table>
                <table >
                    <div class="btn-group btn-group-justified" style="float: left;  width: 80px">

                        <a onclick = "change_style(); "  class="btn btn-default white_style"  tabindex = "-1" ><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a class="btn btn-default white_style" aria-hidden="true" onclick="full_screen_f()"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a>
                    </div>
                </table>
                <table >
                    <div class="btn-group btn-group-justified" style="float: left; width: 80px;">
                        <a onclick = "restart(); "  class="btn btn-default  white_style " tabindex = "-1" ><i class="fa fa-refresh" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-default btn-sm white_style fa fa-volume-up" tabindex = "-1" onclick = "voice=!voice; $(this).toggleClass('fa-volume-off fa-volume-up') " ></a>

                    </div>
                </table>
            </ul>
        </div>
    </div>
</nav>



<div  id = "window_task" class="row white_style8 " style="margin:auto; height:100vh; border-right: 1px dotted #999999; border-bottom: 1px dotted #999999" >
    <div style="margin-top:10vh"  class="">
    </div>
    <div style="margin-top:10vh"  class="hidden-lg hidden-md hidden-sm">
    </div>
</div>

<script>


    window.onload=function(){
        if (document.body.clientWidth <= '1024')
            $("#navbar_logo").css("width" ,"30px")
        create_screen(1)
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

        for (var i=1;i<=99;i++ ){
            var audio = document.createElement('audio');
            src = "/static/custom/audio/numbers/gplus_"+ i + ".mp3"
            audio.setAttribute('src',src);
            audio.setAttribute('preload','preload');
        }
        for (var i=1;i<=99;i++ ){
            var audio = document.createElement('audio');
            src = "/static/custom/audio/numbers/gminus_"+ i + ".mp3"
            audio.setAttribute('src',src);
            audio.setAttribute('preload','preload');
        }


        change_background();
    }



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
            audio.src = '/static/custom/audio/numbers/' + sound_number;
            audio.play();
        }
        else{
            audio2.src = '/static/custom/audio/numbers/' + sound_number;
            audio2.play();
        }
        chered = !chered;
    }
    var full_screen= false
    function full_screen_f() {
        var element = document.body;
        if (full_screen==false){
            full_screen=true
            var req = element.requestFullScreen || element.webkitRequestFullScreen || element.mozRequestFullScreen;
            if(req)
                req.call(element);
        }
        else{
            full_screen=false
            var req = document.cancelFullScreen || document.webkitCancelFullScreen || document.mozCancelFullScreen;
            if(req)
                req.call(document);
        }

    }

    var white_style = true
    correct_ans_num=0
    screen_num = 1
    mode = "synchro"
    var Screen=[]
    var screen_set={
        name: 'Экран ',
        points: 0,
        module: 1,
        checked_digits:[1,2,3,4,5,6,7,8,9],
        operation: 2,
        digits_num: 1,
        half: true,
        summands_num: 4,
        interval: 1000,
        all_checked: true,
        example: "",
        example_numbers: [],
        progress_mode: false,
        progress_key: 0,
        progress_key_up: true,
        progress_key_down: true,
        fontsize: "40vh",
        timer: "",
        status: "countdown_stopped",
        num_summand: 0,
        correct_answer: 0,
        box_type: "settingbox",
        countdown_timer: "",
    }
    Global_status={
        countdown_stopped: [1],
        countdown_in_proccess: [],
        count_start: [],
        count_paused: [],
        count_in_proccess: [],
        get_answer: [],
        status: "countdown_stopped"
    }
    function countdown_f(repeat,num_screen) {
        This_screen=Screen[num_screen]
        if (num_screen==1 && mode =="synchro" && This_screen.num_summand >0) soundClick(1)
        if (This_screen.num_summand==0){
            $("#wt" + num_screen + "taskbox").val("");
        }
        else if(This_screen.num_summand == -1){
            clearInterval(This_screen.timer)
            if (mode== "random"){
                Screen[1].status='count_start';
                Random_start(repeat)
            }
            else{
                This_screen.status = 'count_start';
                change_status_arrays(num_screen,"count_start")
                start(repeat,num_screen)
            }
        }
        else{
            $("#wt" + num_screen + "taskbox").val(This_screen.num_summand)
            fontsize=0
            clearInterval(Screen[num_screen].countdown_timer)
            if (white_style==true)
                $("#wt" + num_screen + "taskbox").css("color",colors[(This_screen.num_summand+num_screen)%9])
            else
                $("#wt" + num_screen + "taskbox").css("color",colors2[(This_screen.num_summand+num_screen)%9])
            Screen[num_screen].countdown_timer=setInterval(function () {
                if (screen_num>=4)
                    fontsize+=1
                else
                    fontsize+=3
                $("#wt" + num_screen + "taskbox").css("font-size",fontsize)
            }, 15)

        }
        Screen[num_screen].num_summand--;
    }

    function Random_start(repeat) {

        This_screen=Screen[1]
        if (This_screen.status=="countdown_stopped")
            This_screen.status="count_start"
        switch (This_screen.status){
            case "count_start":
                create_screen(8)
                clear_screens(8)
                change_windows("taskbox",8)
                clearInterval(Screen[1].countdown_timer)
                change_fontsize(This_screen.fontsize,1)
                This_screen.example=""
                if (repeat==false){
                    stop_cycle = false
                    generate(This_screen.module, This_screen.operation, This_screen.digits_num, This_screen.summands_num, This_screen.half, This_screen.checked_digits, 1)
                }
                else{
                    Screen[1].num_summand++
                }
                soundClick(2)
                if (screens.length==0)
                    screens=[1,2,3,4,5,6,7,8]
                clear_screens(8)
                n = screens[randomInteger(screens.length)]
                screens.splice( $.inArray(n, screens), 1 );
                taskbox_id = "#wt" + n + "taskbox"
                $(taskbox_id).val(Screen[1].example_numbers[0])
                Screen[1].num_summand++
                Screen[1].timer = setInterval(function(){ show_screen_random()}, Screen[1].interval);
                Screen[1].status = "count_in_proccess"
                break;
            case "count_in_proccess":
                clearInterval(Screen[1].timer)
                Screen[1].status = "count_paused"
                break;
            case "count_paused":
                Screen[1].timer = setInterval(function(){ show_screen_random()}, Screen[1].interval);
                Screen[1].status = "count_in_proccess"
                break;
            case "get_answer":
                student_answer = parseInt($("#wt" + 1 + "taskbox").val())
                change_window("answerbox", 1)
                answerbox_id = "#wt1answerbox"
                if (student_answer == This_screen.correct_answer){
                    if (This_screen.progress_mode==true){
                        This_screen.progress_key+=1
                        if (This_screen.progress_key==1){
                            This_screen.progress_key=0
                            switch(This_screen.progress_key_up){
                                case true:
                                    This_screen.progress_key_up = false
                                    change_interval(false)
                                    break;
                                case false:
                                    This_screen.progress_key_up = true
                                    change_summands_num(true)
                                    break;
                            }
                        }
                    }
                    correct_ans_num+=1
                    answerbox_text = student_answer +  " = " +  This_screen.correct_answer + "\n"+ correct[randomInteger(59)]
                    This_screen.example+= " = " + student_answer + " ✔ (" + This_screen.correct_answer + ")"
                    This_screen.points+=10
                    $("#wt" + 1 + "points").html(This_screen.points)
                    if (white_style==true)
                        $(answerbox_id).css("background-color", "#b3ffb3")
                    else
                        $(answerbox_id).css("background-color", "#001a00")
                    soundClick2(1,1);
                }
                else{
                    soundClick2(0,1);
                    if (This_screen.progress_mode==true){
                        This_screen.progress_key-=1
                        if (This_screen.progress_key==-1){
                            This_screen.progress_key=0
                            switch(This_screen.progress_key_down){
                                case true:
                                    This_screen.progress_key_down = false
                                    change_interval(true)
                                    break;
                                case false:
                                    This_screen.progress_key_down = true
                                    change_summands_num(false)
                                    break;
                            }
                        }
                    }

                    answerbox_text = student_answer +  " ≠ " +  This_screen.correct_answer + "\n"+ "Упс, Ошибочка "
                    This_screen.example+= " ≠ " + student_answer + " ✘ (" + This_screen.correct_answer + ")"
                    if (white_style==true)
                        $(answerbox_id).css("background-color", "#ffcccc")
                    else
                        $(answerbox_id).css("background-color", "#660000")
                }
                $(answerbox_id).val(answerbox_text)
                This_screen.status = "countdown_stopped"
                break;
        }
    }

    function Global_start() {
        if (mode=="random"){
            switch(Screen[1].status){
                case "countdown_in_proccess":
                    clearInterval(Screen[1].timer)
                    clear_screens(1)
                    Screen[1].status = "countdown_stopped"
                    break;
                case "countdown_stopped":
                    create_screen(1)
                    clear_screens(1)
                    start(false,1)
                    break;
                default:
                    Random_start(false)
                    break;
            }

        }
        else{
            synchro = true
            for (var i=2; i<=screen_num; i++){
                if (Screen[i].interval!=Screen[1].interval){
                    synchro=false
                }
            }
            if (synchro==true)
                mode="synchro"
            else
                mode="asynchro"
            for (var i=1; i<=screen_num; i++){
                clearInterval(Screen[i].countdown_timer)
                start(false,i)
            }
        }

    }

    function change_status_arrays(num_screen,status) {
        Global_status.status==""
        Global_status.countdown_stopped.splice( $.inArray(num_screen, Global_status.countdown_stopped), 1 )
        Global_status.countdown_in_proccess.splice( $.inArray(num_screen, Global_status.countdown_in_proccess), 1 )
        Global_status.count_start.splice( $.inArray(num_screen, Global_status.count_start), 1 )
        Global_status.count_in_proccess.splice( $.inArray(num_screen, Global_status.count_in_proccess), 1 )
        Global_status.count_paused.splice( $.inArray(num_screen, Global_status.count_paused), 1 )
        Global_status.get_answer.splice( $.inArray(num_screen, Global_status.get_answer), 1 )
        $("#btn_global_repeat").addClass("hidden")
        switch (status){
            case "countdown_stopped":
                include(num_screen,Global_status.countdown_stopped)
                if (Global_status.countdown_stopped.length==screen_num){
                    $("#btn_global_start").html("<i class='fa fa-play' aria-hidden='true'></i>")
                    Global_status.status = "countdown_stopped"
                    if (Screen[num_screen].example.length!=0)
                        $("#btn_global_example").removeClass("hidden")
                }

                break;
            case "countdown_in_proccess":
                include(num_screen,Global_status.countdown_in_proccess)
                if (Global_status.countdown_in_proccess.length==screen_num){
                    $("#btn_global_start").html("")
                    $("#btn_global_example").addClass("hidden")
                    Global_status.status = "countdown_in_proccess"
                }

                break;
            case "count_start":
                include(num_screen,Global_status.count_start)
                if (Global_status.count_start.length==screen_num){
                    $("#btn_global_start").html("<i class='fa fa-pause' aria-hidden='true'></i>")
                    $("#btn_global_example").addClass("hidden")
                    Global_status.status = "count_start"
                }
                break;
            case "count_in_proccess":
                include(num_screen,Global_status.count_in_proccess)
                if (Global_status.count_in_proccess.length==screen_num){
                    $("#btn_global_start").html("<i class='fa fa-pause' aria-hidden='true'></i>")
                    $("#btn_global_example").addClass("hidden")
                    Global_status.status = "count_in_proccess"
                    $("#btn_global_repeat").addClass("hidden")
                }
                break;
            case "count_paused":
                include(num_screen,Global_status.count_paused)
                if (Global_status.count_paused.length==screen_num){
                    $("#btn_global_start").html("<i class='fa fa-play' aria-hidden='true'></i>")
                    $("#btn_global_example").addClass("hidden")
                    Global_status.status = "count_paused"
                    $("#btn_global_repeat").removeClass("hidden")
                }
                break;
            case "get_answer":
                include(num_screen,Global_status.get_answer)
                if (Global_status.get_answer.length==screen_num){
                    $("#btn_global_start").html("<i class='fa fa-pencil' aria-hidden='true'></i>")
                    Global_status.status = "get_answer"
                    $("#btn_global_repeat").removeClass("hidden")

                }
                break;
        }

    }

    function Global_stop() {
        change_windows("taskbox",screen_num)
        for (var i=1; i<=screen_num; i++){
            clearInterval(Screen[i].countdown_timer)
            clearInterval(Screen[i].timer)
            Screen[i].status = "countdown_stopped"
            change_status_arrays(i,"countdown_stopped")
            com="#wt" + i + "taskbox"
            $(com).val("")
        }
        $("#btn_global_example").addClass("hidden")
    }

    function Global_repeat() {
        Global_stop()
        setTimeout(function () {
            for (var i=1; i<=screen_num; i++){
                start_repeat(i)
            }
        }, 500)

    }
    var timeout_empty
    function start_repeat(num_screen) {
        Screen[num_screen].status = "countdown_stopped"
        start(true, num_screen)
        change_status_arrays(num_screen,"countdown_stopped")
    }

    function start(repeat, num_screen) {
        This_screen = Screen[num_screen]
        switch (This_screen.status){
            case "countdown_stopped":
                change_window("taskbox",num_screen)
                $("#wt"+num_screen+"answerbox_btn").addClass("invisible")
                clearInterval(Screen[num_screen].countdown_timer)
                fontsize=0
                $("#wt" + num_screen + "taskbox").css("font-size",fontsize)
                if (white_style==true)
                    $("#wt" + num_screen + "taskbox").css("color",colors[(This_screen.num_summand+num_screen)%9])
                else
                    $("#wt" + num_screen + "taskbox").css("color",colors2[(This_screen.num_summand+num_screen)%9])
                Screen[num_screen].countdown_timer=setInterval(function () {
                    if (screen_num>=4)
                        fontsize+=1
                    else
                        fontsize+=4
                    $("#wt" + num_screen + "taskbox").css("font-size",fontsize)

                }, 15)
                $("#wt" + num_screen + "taskbox").val(3)
                soundClick(1)
                This_screen.num_summand = 2
                This_screen.status = 'countdown_in_proccess'
                change_status_arrays(num_screen,"countdown_in_proccess")
                This_screen.timer = setInterval(function(){ countdown_f(repeat,num_screen)}, 700);
                break;
            case "countdown_in_proccess":
                clearInterval(Screen[num_screen].countdown_timer)
                $("#wt" + num_screen + "taskbox").val("")
                This_screen.status = "countdown_stopped"
                change_status_arrays(num_screen,"countdown_stopped")
                clearInterval(This_screen.timer)
                break;
            case "count_start":
                clearInterval(Screen[num_screen].countdown_timer)
                change_fontsize(This_screen.fontsize,num_screen)
                if (mode=="asynchro" && screen_num>1){
                    synchro = true
                    for (var i=2; i<= screen_num; i++){
                        if (Screen[1].interval != Screen[i].interval)
                            synchro = false
                    }
                    if (synchro==true)
                        mode="synchro"
                }

                This_screen.example=""
                change_window("taskbox", num_screen)
                if (repeat==false){
                    stop_cycle = false
                    generate(This_screen.module, This_screen.operation, This_screen.digits_num, This_screen.summands_num, This_screen.half, This_screen.checked_digits, num_screen)
                }
                else{
                    This_screen.num_summand++
                }
                if (voice==true && screen_num == 1 && This_screen.digits_num<=2 && This_screen.interval>=700){
                    sound_number_f(This_screen.example_numbers[0])
                }
                else if(mode=="synchro" && num_screen==1) soundClick(2)
                taskbox_id = "#wt" + num_screen + "taskbox"
                $(taskbox_id).val(This_screen.example_numbers[0])

                This_screen.num_summand++
                This_screen.status = "count_in_proccess"
                change_status_arrays(num_screen,"count_in_proccess")
                if (screen_num == 1){
                    interval = This_screen.interval
                    if (interval > 1000)
                        interval_empty = interval - 100
                    else
                        interval_empty= parseInt(0.85*interval)
                    if (interval > 100)
                        timeout_empty = setTimeout(function(){ $(taskbox_id).val("") }, interval_empty);
                }
                This_screen.timer = setInterval(function(){ show_screen(num_screen)}, This_screen.interval);
                break;
            case "count_in_proccess":
                clearInterval(This_screen.timer)
                clearTimeout(timeout_empty)
                This_screen.status = "count_paused"

                change_status_arrays(num_screen,"count_paused")
                $("#wt" + num_screen + "answerbox_btn").removeClass("invisible")
                // $("#wt" + num_screen + "taskbox").val("<i class='fa fa-pause' aria-hidden='true'></i>")
                break;
            case "count_paused":
                $("#wt" + num_screen + "answerbox_btn").addClass("invisible")
                This_screen.timer = setInterval(function(){ show_screen(num_screen)}, This_screen.interval);
                This_screen.status = "count_in_proccess"
                change_status_arrays(num_screen,"count_in_proccess")
                break;
            case "get_answer":
                if (repeat!= 3){
                    student_answer = parseInt($("#wt" + num_screen + "taskbox").val())
                    change_window("answerbox", num_screen)
                    answerbox_id = "#wt" + num_screen + "answerbox"
                    if (student_answer == This_screen.correct_answer){
                        if (This_screen.progress_mode==true){
                            This_screen.progress_key+=1
                            if (This_screen.progress_key==1){
                                This_screen.progress_key=0
                                switch(This_screen.progress_key_up){
                                    case true:
                                        This_screen.progress_key_up = false
                                        change_interval(false,num_screen)
                                        break;
                                    case false:
                                        This_screen.progress_key_up = true
                                        change_summands_num(true,num_screen)
                                        break;
                                }
                            }
                        }
                        correct_ans_num+=1
                        answerbox_text = student_answer +  " = " +  This_screen.correct_answer + "\n"+ correct[randomInteger(59)]
                        This_screen.example+= " = " + student_answer + " ✔ (" + This_screen.correct_answer + ")"
                        This_screen.points+=10
                        $("#wt" + num_screen + "points").html(This_screen.points)
                        if (white_style==true)
                            $(answerbox_id).css("background-color", "#b3ffb3")
                        else
                            $(answerbox_id).css("background-color", "#001a00")

                    }
                    else{
                        if (This_screen.progress_mode==true){
                            This_screen.progress_key-=1
                            if (This_screen.progress_key==-1){
                                This_screen.progress_key=0
                                switch(This_screen.progress_key_down){
                                    case true:
                                        This_screen.progress_key_down = false
                                        change_interval(true,num_screen)
                                        break;
                                    case false:
                                        This_screen.progress_key_down = true
                                        change_summands_num(false,num_screen)
                                        break;
                                }
                            }
                        }
                        answerbox_text = student_answer +  " ≠ " +  This_screen.correct_answer + "\n"+ "Упс, Ошибочка "
                        This_screen.example+= " ≠ " + student_answer + " ✘ (" + This_screen.correct_answer + ")"
                        if (white_style==true)
                            $(answerbox_id).css("background-color", "#ffcccc")
                        else
                            $(answerbox_id).css("background-color", "#660000")
                    }
                    if (num_screen==screen_num){
                        if (correct_ans_num>parseInt(0.5*screen_num)){
                            soundClick2(1,1);
                        }
                        else{
                            soundClick2(0,1);
                        }
                        correct_ans_num=0
                    }


                    $(answerbox_id).val(answerbox_text)
                    This_screen.status = "countdown_stopped"
                    change_status_arrays(num_screen,"countdown_stopped")
                }

                break;
        }
    }



    screens=[1,2,3,4,5,6,7,8]

    function show_screen_random(argument) {
        This_screen = Screen[1]
        This_screen.num_summand++
        taskbox_id =  "#wt" + 1 + "taskbox"
        if (This_screen.num_summand == This_screen.example_numbers.length){
            clearInterval(This_screen.timer)
            create_screen(1)
            change_window("taskbox",1)
            Screen[1].status = "get_answer"
            $(taskbox_id).val("")
            $(taskbox_id).prop("readonly",false)
            $("#wt" + 1 + "answerbox_btn").removeClass("invisible")
            $(taskbox_id).focus()
        }
        else{
            if (screens.length==0)
                screens=[1,2,3,4,5,6,7,8]
            clear_screens(8)
            n = screens[randomInteger(screens.length)]
            screens.splice( $.inArray(n, screens), 1 );
            taskbox_id = "#wt" + n + "taskbox"
            color_num++
            if (color_num % 9 == 0) color_num = 0
            if (white_style == true)
                $(taskbox_id).css("color",colors[(color_num)%9])
            else
                $(taskbox_id).css("color",colors2[(color_num)%9])
            $(taskbox_id).prop("readonly",true)
            number = This_screen.example_numbers[This_screen.num_summand]
            $(taskbox_id).val(number)
            soundClick(2)
        }
    }

    function show_screen(num_screen) {
        This_screen = Screen[num_screen]
        This_screen.num_summand++
        taskbox_id =  "#wt" + num_screen + "taskbox"
        if (This_screen.num_summand == This_screen.example_numbers.length){
            clearInterval(This_screen.timer)
            This_screen.status = "get_answer"
            change_status_arrays(num_screen,"get_answer")
            $(taskbox_id).val("")
            $(taskbox_id).prop("readonly",false)
            $("#wt" + num_screen + "answerbox_btn").removeClass("invisible")
            if (screen_num==1) $(taskbox_id).focus()
        }
        else{
            color_num++
            if (color_num %9 == 0) color_num = 0
            if (white_style == true)
                $(taskbox_id).css("color",colors[(color_num)%9])
            else
                $(taskbox_id).css("color",colors2[(color_num)%9])
            $(taskbox_id).prop("readonly",true)
            number = This_screen.example_numbers[This_screen.num_summand]
            $(taskbox_id).val(number)

            if (voice==true && screen_num == 1 && This_screen.digits_num <= 2 && This_screen.interval >= 700){
                sound_number_f(This_screen.example_numbers[This_screen.num_summand])
            }
            else if(mode=="synchro" && num_screen==1) soundClick(2)
            if (screen_num == 1){
                interval = This_screen.interval
                if (interval > 1000)
                    interval_empty = interval - 100
                else
                    interval_empty= parseInt(0.85*interval)
                if (interval > 100)
                    timeout_empty = setTimeout(function(){ $(taskbox_id).val("") }, interval_empty);
            }

        }
    }

    function generate(module, operation, digits_num, summands_num, half, checked_digits, num_screen){
        stop_cycle = false
        schotchik = 0
        chislo = 0;
        cifr = [];
        chislo_plus = [];
        Screen[num_screen].num_summand = 0
        primer = []
        possible_digits = possible_checked(module, operation, checked_digits);
        for (i = 0; i < digits_num ; i++) {
            var t =  possible_checked(module, operation, checked_digits);
            possible_checked_var[i] = t.slice();
        }
        Module_Operation = module*10 + operation;
        switch (parseInt(Module_Operation)) {
            case 10: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < digits_num-1; i++){
                    cifr[i] = randomInteger(4);
                    chislo += cifr[i]*power10(i);
                }
                var i = digits_num - 1;
                cifr[i] = 1 + randomInteger(3);
                chislo += cifr[i]*power10(i);
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_simple_add(summands_num, digits_num, half, possible_digits)
                }
            }
                break;

            case 11: {
                chislo = 0;
                var t = checked_digits.slice();
                t.splice( $.inArray(0, t), 1 );
                for (var i = 0; i < digits_num; i++){
                    cifr[i] = t[randomInteger(t.length)]
                    chislo += cifr[i]*power10(i);
                }
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_simple_sub(summands_num, digits_num, half, possible_digits)
                }

            }
                break;

            case 12: {
                chislo = 0;
                var t = checked_digits.slice();
                for (var i = 0; i < digits_num-1; i++){
                    cifr[i] = t[randomInteger(t.length)]
                    chislo += cifr[i]*power10(i);
                }
                t.splice( $.inArray(0, t), 1 );
                i = digits_num - 1;
                cifr[i] = t[randomInteger(t.length)]
                chislo += cifr[i]*power10(i);

                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_simple_add_sub(summands_num, digits_num, half, possible_digits)
                }

            }
                break;

            case 20: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < digits_num-1; i++){
                    cifr[i] = randomInteger(5);
                    chislo += cifr[i]*power10(i);
                }
                i = digits_num - 1;
                cifr[i] = 2 + randomInteger(3);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_brother_add(summands_num, digits_num, half, possible_digits)
                }

            }
                break;

            case 21: {
                chislo = 0;
                for (var i = 0; i < digits_num; i++){
                    cifr[i] = 5+randomInteger(5);
                    chislo += cifr[i]*power10(i);
                }
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_brother_sub(summands_num, digits_num, half, possible_digits)
                }
            }
                break;

            case 22: {
                chislo = 0;
                for (var i = 0; i < digits_num-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = digits_num - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_brother_add_sub(summands_num, digits_num, half, possible_digits)
                }

            }
                break;

            case 30: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < digits_num-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = digits_num - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_friend_add(summands_num, digits_num, half, possible_digits)
                }

            }
                break;

            case 31: {
                znak = 1;
                chislo = 0;
                for (var i = 0; i < digits_num; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = digits_num;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_friend_sub(summands_num, digits_num, half, possible_digits)
                }

            }
                break;

            case 32: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < digits_num-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = digits_num - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_friend_add_sub(summands_num, digits_num, half, possible_digits)
                }

            }
                break;

            case 40: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < digits_num-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = digits_num - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_combo_add(summands_num, digits_num, half, possible_digits)
                }

            }
                break;

            case 41: {
                znak = 1;
                chislo = 0;
                for (var i = 0; i < digits_num; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = digits_num;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_combo_sub(summands_num, digits_num, half, possible_digits)
                }

            }
                break;

            case 42: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < digits_num-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = digits_num - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_combo_add_sub(summands_num, digits_num, half, possible_digits)
                }

            }
                break;
            case 50: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < digits_num-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = digits_num - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_random_add(summands_num, digits_num, half, possible_digits)
                }

            }
                break;

            case 51: {
                znak = 1;
                chislo = 0;
                for (var i = 0; i < digits_num; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = digits_num;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_random_sub(summands_num, digits_num, half, possible_digits)
                }

            }
                break;

            case 52: {
                znak = 0;
                chislo = 0;
                for (var i = 0; i < digits_num-1; i++){
                    cifr[i] = randomInteger(10);
                    chislo += cifr[i]*power10(i);
                }
                i = digits_num - 1;
                cifr[i] = 2 + randomInteger(8);
                chislo += cifr[i]*power10(i);
                ;
                primer.push(chislo)
                while (stop_cycle == false){
                    calculate_random_add_sub(summands_num, digits_num, half, possible_digits)
                }

            }
                break;
        }
        correct_answer = 0
        task=""
        example = ""
        for (var j=0; j<primer.length; j++){
            correct_answer+=parseInt(primer[j])
            if (j==0){
                example+=primer[j]
            }
            else{
                if (parseInt(primer[j]) > 0){
                    example += " + " + primer[j]
                }
                else{
                    example +=  " - " + -primer[j]
                }
            }
        }
        Screen[num_screen].example = example
        Screen[num_screen].example_numbers = primer
        Screen[num_screen].correct_answer = correct_answer
    }

    var primer=[]
    settings_showed = false

    function show_settings(){
        Global_stop()
        if (settings_showed == true){
            settings_showed = false
            if (Global_status.status=="get_answer")
                change_windows("answerbox", screen_num)
            else
                change_windows("taskbox", screen_num)
        }
        else{
            settings_showed = true
            change_windows("settingbox", screen_num)
        }
    }



    function stop_screen(num_screen) {
        clearInterval(Screen[num_screen].timer)
        Screen[num_screen].status =  "countdown_stopped"
        change_status_arrays(num_screen,"countdown_stopped")
        change_window("taskbox", num_screen)
    }

    function create_screen(n) {

        if (mode!="random" ) {
            $('#navbar_screens_num_tablo').html(n);
            $('#screens_num_tablo').html("экран:"+n.toString());
        }
        if (Screen.length!=0) screen_set = Screen[0]
        for (var i=0; i<=n; i++){
            if (Screen.length < i+1){
                x = new Object()
                x.name = screen_set.name + i.toString()
                x.points = screen_set.points
                x.module = screen_set.module
                x.checked_digits = screen_set.checked_digits.slice()
                x.operation = screen_set.operation
                x.digits_num = screen_set.digits_num
                x.half = screen_set.half
                x.summands_num = screen_set.summands_num
                x.interval = screen_set.interval
                x.all_checked = screen_set.all_checked
                x.example = screen_set.example
                x.example_numbers = screen_set.example_numbers
                x.progress_mode = screen_set.progress_mode
                x.progress_key = screen_set.progress_key
                x.progress_key_up = screen_set.progress_key_up
                x.progress_key_down = screen_set.progress_key_down
                x.timer = screen_set.timer
                x.status = screen_set.status
                x.num_summand = screen_set.num_summand
                x.correct_answer = screen_set.correct_answer
                x.box_type = screen_set.box_type
                x.fontsize = screen_set.fontsize
                x.countdown_timer= screen_set.countdown_timer
                Screen.push(x)
            }
        }
        if (mode!="random") Global_stop()
        for (var i=1; i<=screen_num; i++){
            window_task_id="#window_task_"+i;
            $(window_task_id).remove()
            stop_screen(i)
        }
        screen_num=n;

        if (n<=3){
            wtheight = "90vh"
            // taskbox_font_size = "75vh"
            taskbox_height = "78vh"
            // answerbox_font_size = "15vh"
            answerbox_height = "78vh"
        }
        else{
            wtheight = "45vh"
            // taskbox_font_size = "40vh"
            taskbox_height = "35vh"
            empty_class= ""
            settings_class = ""
            // answerbox_font_size = "7vh"
            answerbox_height = "35vh"
        }
        switch(n){
            case 1:
                wtcol_class="col-lg-12 col-md-12 col-sm-12"
                empty_class= "col-lg-3 "
                settings_class = "col-lg-6"
                answerbox_font_size = "6vw"
                break;
            case 2:
                wtcol_class="col-lg-6 col-md-6 col-sm-6"
                empty_class= "col-lg-2 col-md-2 col-sm-2"
                settings_class = "col-lg-8 col-md-8 col-sm-8"
                answerbox_font_size = "5vw"
                break;
            case 3:
                wtcol_class="col-lg-4 col-md-4 col-sm-4"
                empty_class= ""
                settings_class = ""
                answerbox_font_size = "4vw"
                break;
            case 4:
                wtcol_class="col-lg-6 col-md-6 col-sm-6"
                empty_class= "col-lg-2 col-md-2 col-sm-2"
                settings_class = "col-lg-8 col-md-8 col-sm-8"
                answerbox_font_size = "3vw"
                break;
            case 5:
                wtcol_class1="col-lg-4 col-md-4 col-sm-4"
                wtcol_class2 = "col-lg-6 col-md-6 col-sm-6"
                empty_class2= "col-lg-2 col-md-2 col-sm-2"
                settings_class2 = "col-lg-8"
                answerbox_font_size = "3vw"
                break;
            case 6:
                wtcol_class="col-lg-4 col-md-4 col-sm-4"
                answerbox_font_size = "3vw"
                break;
            case 7:
                answerbox_font_size = "2vw"
                wtcol_class1="col-lg-3 col-md-3 col-sm-3"
                wtcol_class2 = "col-lg-4 col-md-4 col-sm-4"
                empty_class2= "col-lg-1 col-md-1 col-sm-1"
                settings_class2 = "col-lg-10 col-md-10 col-sm-10"
                break;
            case 8:
                answerbox_font_size = "2vw"
                wtcol_class="col-lg-3 col-md-3 col-sm-3"

                break;
        }
        for (var i=0; i<=n; i++){
            taskbox_font_size = change_fontsize("",i)
            Screen[i].fontsize =   taskbox_font_size
            taskbox_font_size_txt = "шрифт: " + parseInt(taskbox_font_size)
            if (i==0){
                $("#navbar_fontsize_tablo").html(parseInt(taskbox_font_size))
            }
            else{
                if (n==5){
                    if (i<=3){
                        wtcol_class = wtcol_class1
                    }
                    else{
                        wtcol_class = wtcol_class2
                        empty_class= empty_class2
                        settings_class = settings_class2
                    }
                }
                else if (n==7){
                    if (i<=4){
                        wtcol_class = wtcol_class1
                    }
                    else{
                        wtcol_class = wtcol_class2
                        empty_class= empty_class2
                        settings_class = settings_class2
                    }
                }

                screen =
                    "<div id = 'window_task_" + i + "' style='margin:0;padding:0; border-left: 1px dotted #999999; border-top: 1px dotted #999999; height:" + wtheight + "' class = '" + wtcol_class + "' >\
          <div class='panel-heading' id='wt" + i + "heading_panel' style=' height: 5vh; padding-top:3; margin:0 ;text-align:center; font-size:3vh; cursor:pointer ' >\
            <span id='wt" + i + "heading' onclick='change_name(" + i + ")'></span> ( <span id='wt" + i + "points' class=''></span> )\
          </div>\
        <div id='window_settings_" + i + "' class='hidden' style = 'height:"+ taskbox_height +";'>\
          <div class='" + empty_class + "' ></div>\
          <div class='panel-body " + settings_class + "' style='text-align:center; padding:5;'>\
            <div class='btn-group btn-group-justified'>\
                <a id = 'wt"+i+"btn_module_1' class='btn btn-sm white_style8 btn-default active' style='text-transform: none' onclick = 'change_module(1,"+i+");' >Просто</a>\
                <a id = 'wt"+i+"btn_module_2' class='btn btn-sm white_style8 btn-default' style='text-transform: none' onclick = 'change_module(2,"+i+");' >Брат</a>\
                <a  id = 'wt"+i+"btn_module_3' class='btn btn-sm white_style8 btn-default' style='text-transform: none' onclick = 'change_module(3,"+i+");' >Друг</a>\
                <a id = 'wt"+i+"btn_module_4' class='btn btn-sm white_style8 btn-default' style='text-transform: none' onclick = 'change_module(4,"+i+");' >Комбо</a>\
                <a id = 'wt"+i+"btn_module_5' class='btn btn-sm white_style8 btn-default' style='text-transform: none' onclick = 'change_module(5,"+i+");' >Произв</a>\
              \
          </div>\
            <div class='btn-group btn-group-justified'>\
              <a  id = 'wt" + i + "btn_1'  class='btn btn-sm white_style8 btn-default active hidden' onclick = 'check_digit(1, " + i + ");' >1</a>\
              <a  id = 'wt" + i + "btn_2'  class='btn btn-sm white_style8 btn-default active hidden' onclick = 'check_digit(2," + i + ");'>2</a>\
              <a  id = 'wt" + i + "btn_3'  class='btn btn-sm white_style8 btn-default active hidden' onclick = 'check_digit(3," + i + ");'>3</a>\
              <a  id = 'wt" + i + "btn_4'  class='btn btn-sm white_style8 btn-default active hidden' onclick = 'check_digit(4," + i + ");'>4</a>\
              <a  id = 'wt" + i + "btn_5'  class='btn btn-sm white_style8 btn-default active' onclick = 'check_digit(5," + i + ");'>5</a>\
              <a  id = 'wt" + i + "btn_6'  class='btn btn-sm white_style8 btn-default active' onclick = 'check_digit(6," + i + ");'>6</a>\
              <a  id = 'wt" + i + "btn_7'  class='btn btn-sm white_style8 btn-default active' onclick = 'check_digit(7," + i + ");'>7</a>\
              <a  id = 'wt" + i + "btn_8'  class='btn btn-sm white_style8 btn-default active' onclick = 'check_digit(8," + i + ");'>8</a>\
              <a  id = 'wt" + i + "btn_9'  class='btn btn-sm white_style8 btn-default active' onclick = 'check_digit(9," + i + ");'>9</a>\
              <a class='btn btn-default  btn-sm  white_style8' onclick = 'check_all_digits("+i+")'>&#10004;</a>\
            </div> </br>\
            <div class='btn-group btn-group-justified'>\
              <a id = 'wt"+ i +"operation_0' class='btn btn-default white_style8' style='text-transform: none;' onclick = 'change_operation(0,"+ i +");' ><b>+</b></a>\
              <a id = 'wt"+ i +"operation_1' class='btn btn-default white_style8' style='text-transform: none;' onclick = 'change_operation(1,"+ i +");' ><b>-</b></a>\
              <a id = 'wt"+ i +"operation_2' class='btn btn-default white_style8 active' style='text-transform: none;' onclick = 'change_operation(2,"+ i +");' ><b>+/-</b></a>\
              <a  class='btn btn-sm white_style8 btn-default' id = 'wt" + i + "btn_progress_mode' style=' text-transform: none' onclick = 'change_progress_mode(" + i + ");'>Прогресс</a>\
              <a  class='btn btn-sm white_style8 btn-default active' id = 'wt" + i + "btn_half'  onclick = 'change_half(" + i + ");'>1/2</a>\
            </div> \
            <div class='btn-group btn-group-justified'> \
                <a  class='btn btn-sm white_style8 btn-default ' onclick = 'change_digits_num(false," + i + ");'><</a>\
                <a  class='btn btn-sm white_style8 btn-default active'  id = 'wt" + i + "digits_num_tablo' onclick = 'change_digits_num(0," + i + ");' style = ' text-transform:  none' >цифр: 1</a>\
                <a  class='btn btn-sm white_style8 btn-default' onclick = 'change_digits_num(true," + i + ");'>></a>\
            </div> \
            <div class='btn-group btn-group-justified'> \
                <a  class='btn btn-sm white_style8 btn-default ' onclick = 'change_summands_num(false," + i + ");'><</a>\
                <a  class='btn btn-sm white_style8 btn-default active'  id = 'wt" + i + "summands_num_tablo' onclick = 'change_summands_num(0," + i + ");' style = ' text-transform:  none' >4 слаг</a>\
                <a  class='btn btn-sm white_style8 btn-default' onclick = 'change_summands_num(true," + i + ");'>></a>\
            </div> \
            <div class='btn-group btn-group-justified'> \
                <a  class='btn white_style8 btn-default btn-sm' onclick = 'change_interval(false," + i + ");'><</a>\
                <a  class='btn white_style8 btn-default btn-sm active' id='wt" + i + "interval_tablo' onclick = 'change_interval(0," + i + ");' style = ' text-transform:  none'>1 сек</a>\
                <a  class='btn white_style8 btn-default btn-sm' onclick = 'change_interval(true," + i + ");'>></a>\
            </div> \
            <div class='btn-group btn-group-justified'> \
                <a  class='btn white_style8 btn-default btn-sm' onclick = 'change_fontsize_f(false," + i + ");'><</a>\
                <a  class='btn white_style8 btn-default btn-sm active' id='wt" + i + "fontsize_tablo' onclick = 'change_fontsize_f(0," + i + ");' style = ' text-transform:  none'>"+ taskbox_font_size_txt +"</a>\
                <a  class='btn white_style8 btn-default btn-sm' onclick = 'change_fontsize_f(true," + i + ");'>></a>\
            </div> \
          </div> \
        </div>\
      <input  class='form-control white_style' id='wt" + i + "taskbox' type='number' value='' style='border-width:0; cursor: pointer;   text-align: center;   font-size: "+ taskbox_font_size +"; height:"+ taskbox_height +";' onclick='start(3," + i + ")' ; readonly autofocus> \
        <textarea  id='wt" + i + "answerbox' onclick='start(3," + i + ")' ; class='form-control white_style hidden'  type='text' value='>' style=' border-width:0; cursor: pointer;   text-align:  center; padding-top: 40; resize:none; overflow: hidden; padding-bottom:20%; font-size: "+ answerbox_font_size +"; height:"+ answerbox_height +";  ' readonly autofocus> </textarea>\
        <div class='btn-group btn-group-justified ' id='wt" + i + "answerbox_btn'>\
          <a class='btn btn-default btn-sm white_style8'  title='Показать настройки' onclick='change_window(0," + i + ")' id='wt" + i + "answerbox_btn_settings'><i class='fa fa-gear'></i></a>\
          <a class='btn btn-default btn-sm white_style8 hidden'  title='Повторить пример' onclick='start_repeat(" + i + ")' id='wt" + i + "answerbox_btn_repeat'><i class='fa fa-repeat' aria-hidden='true'></i></a>\
          <a class='btn btn-default btn-sm white_style8 hidden' title='Показать пример'  id='wt" + i + "answerbox_btn_show_example' onclick='show_example(" + i + ")'><b>=</b></a>\
          <a class='btn btn-default btn-sm white_style8' title='Следующий пример' onclick='start(false," + i + ")' id='wt" + i + "answerbox_btn_settings_next' ><i class='fa fa-play' aria-hidden='true'></i></a>\
        </div>\
    </div>"
                $("#window_task").append(screen)
            }
            if (white_style==true)
                $("#wt" + i + "taskbox").css("color",colors[5])
            if(screen_num<=3)
                $(".btn-sm.white_style8").toggleClass("btn-sm btn-lg")
            else
                $(".btn-lg").toggleClass("btn-sm btn-lg")
            heading = "#wt" + i + "heading"
            $(heading).html(Screen[i].name)

            points = "#wt" + i + "points"
            $(points).html(Screen[i].points)

            change_module(Screen[i].module,i);

            for (var j=1; j<=9; j++){
                btn_id = '#wt' + i + 'btn_'+ j;
                $(btn_id).removeClass('active')
            }
            checked_digits = Screen[i].checked_digits.slice()
            for (var j=0; j< checked_digits.length; j++){
                btn_id = '#wt' + i + 'btn_'+ checked_digits[j];
                $(btn_id).addClass('active')
            }
            change_operation(Screen[i].operation,i)

            btn_id = '#wt' + i + 'btn_half';
            if (Screen[i].half == true)
                $(btn_id).addClass('active')
            else
                $(btn_id).removeClass('active')

            com = '#wt' + i + 'btn_progress_mode';
            if (Screen[i].progress_mode == true)
                $(com).addClass('active')
            else
                $(com).removeClass('active')

            digits_num = Screen[i].digits_num
            com = '#wt' + i + 'digits_num_tablo'
            if (digits_num == 1)
                str = digits_num.toString() + ' цифра'
            else if (digits_num>=2 && digits_num<=4)
                str = digits_num.toString() + ' цифры'
            else
                str = digits_num.toString() + ' цифр'
            $(com).html(str)

            summands_num = Screen[i].summands_num
            com = '#wt' + i + 'summands_num_tablo'
            str = summands_num.toString() + ' слаг'
            $(com).html(str)

            interval = Screen[i].interval
            com = '#wt' + i + 'interval_tablo'
            str =(interval*0.001).toFixed(1).toString() + ' сек'
            $(com).html(str)
        }

        change_style()
        change_style()

    }
    function check_all_digits(num_screen) {
        if (isNaN(num_screen)){
            if (Screen[0].all_checked==true){
                for (var i=0; i<=screen_num; i++){
                    if (i!=-1) Screen[i].all_checked=true
                    check_all_digits(i)
                }
            }
            else{
                for (var i=0; i<=screen_num; i++){
                    if (i!=-1) Screen[i].all_checked=false
                    check_all_digits(i)
                }
            }
        }
        else{
            if (num_screen==-1)
                This_screen = Screen[0]
            else
                This_screen = Screen[num_screen]
            if (This_screen.all_checked==true){
                if (num_screen!=-1) This_screen.all_checked = false
                switch(This_screen.module){
                    case 1:
                        This_screen.checked_digits=[1,2,3,4]
                        break;
                    case 2:
                        This_screen.checked_digits=[5,6,7,8]
                        break;
                    case 3:
                        This_screen.checked_digits=[]
                        break;
                    case 4:
                        This_screen.checked_digits=[1,2,3,4,5]
                        break;
                    case 5:
                        This_screen.checked_digits=[1,2,3,4,5,6,7,8,9]
                        break;
                }
                for (var i=1; i<=9;i++){
                    btn_id = "#wt" + num_screen + "btn_" + i;
                    $(btn_id).removeClass("active")
                }
            }
            else{
                if (num_screen!=-1) This_screen.all_checked=true
                This_screen.checked_digits=[1,2,3,4,5,6,7,8,9]
                for (var i=1; i<=9;i++){
                    btn_id = "#wt" + num_screen + "btn_" + i;
                    $(btn_id).addClass("active")
                }
            }
        }
    }
    function change_module(module,num_screen) {
        if (isNaN(num_screen)){
            for (var i=1; i<=screen_num; i++){
                Screen[i].checked_digits = Screen[0].checked_digits.slice()
                Screen[i].module = Screen[0].module
            }
            for (var i=0; i<=screen_num; i++){
                change_module(module,i)
            }
        }
        else{
            if (num_screen==-1)
                This_screen = Screen[0]
            else
                This_screen = Screen[num_screen]
            This_screen.checked_digits = [1,2,3,4,5,6,7,8,9].slice()
            if (num_screen!=-1) This_screen.all_checked = true
            for (var i=1;i<=5; i++){
                btn_module_id = "#wt" + num_screen + "btn_module_" + i;
                $(btn_module_id).removeClass("active")
            }
            btn_module_id = "#wt" + num_screen + "btn_module_" + module;
            $(btn_module_id).addClass("active")
            // module_tablo_id="#wt" + num_screen + "module_tablo"
            // switch(module){
            //   case 1:
            //     $(module_tablo_id).html("Простой счет")
            //   break;
            //   case 2:
            //     $(module_tablo_id).html("Помошь брата")
            //   break;
            //   case 3:
            //     $(module_tablo_id).html("Помощь друга")
            //   break;
            //   case 4:
            //     $(module_tablo_id).html("Комбинированный")
            //   break;
            //   case 5:
            //     $(module_tablo_id).html("Произвольный")
            //   break;
            // }

            for (var i=1; i<=9; i++){
                btn_id = '#wt' + num_screen + 'btn_'+ i;
                $(btn_id).addClass('active')
            }
            if (num_screen!=-1) This_screen.module=module;
            for (var i=1; i<=9; i++){
                btn_id = '#wt' + num_screen + 'btn_'+ i;
                $(btn_id).removeClass('invisible')
            }
            switch(module){
                case 1:
                    for (var i=1; i<=4; i++){
                        btn_id = '#wt' + num_screen + 'btn_'+ i;
                        $(btn_id).addClass('hidden')
                    }
                    for (var i=5; i<=9; i++){
                        btn_id = '#wt' + num_screen + 'btn_'+ i;
                        $(btn_id).removeClass('hidden')
                    }
                    break;
                case 2:
                    for (var i=1; i<=4; i++){
                        btn_id = '#wt' + num_screen + 'btn_'+ i;
                        $(btn_id).removeClass('hidden')
                    }
                    for (var i=5; i<=9; i++){
                        btn_id = '#wt' + num_screen + 'btn_'+ i;
                        $(btn_id).addClass('hidden')
                    }
                    break;
                case 3:
                    for (var i=1; i<=9; i++){
                        btn_id = '#wt' + num_screen + 'btn_'+ i;
                        $(btn_id).removeClass('hidden')
                    }
                    break;
                case 4:
                    for (var i=1; i<=5; i++){
                        btn_id = '#wt' + num_screen + 'btn_'+ i;
                        $(btn_id).addClass('hidden')
                    }
                    for (var i=6; i<=9; i++){
                        btn_id = '#wt' + num_screen + 'btn_'+ i;
                        $(btn_id).removeClass('hidden')
                    }
                    break;
                case 5:
                    for (var i=1; i<=9; i++){
                        btn_id = '#wt' + num_screen + 'btn_'+ i;
                        $(btn_id).addClass('invisible')
                    }
                    break;
            }
        }

    }

    function check_digit(digit, num_screen) {
        if (isNaN(num_screen)){
            for (var i=1; i<=screen_num; i++){
                Screen[i].checked_digits = Screen[0].checked_digits.slice()
            }
            for (var i=0; i<=screen_num; i++){
                check_digit(digit, i)
            }
        }
        else{
            // if (num_screen==-1)
            //   This_screen = Screen[0]
            // else
            //   This_screen = Screen[num_screen]
            if (Screen[num_screen].module==1){
                if (digit<=4){
                    btn_id = '#wt' + num_screen + 'btn_'+ digit;
                    $(btn_id).toggleClass('active')
                    if (num_screen!=-1)
                        toggle_array(digit,Screen[num_screen].checked_digits)
                }
                else{
                    btn_id = '#wt' + num_screen + 'btn_'+ digit;
                    if ($(btn_id).hasClass('active')){
                        for (var i=digit; i<=9; i++){
                            btn_id = '#wt' + num_screen + 'btn_'+ i;
                            $(btn_id).removeClass('active')
                            if (num_screen!=-1)
                                Screen[num_screen].checked_digits.splice( $.inArray(i, Screen[num_screen].checked_digits), 1 )
                        }
                    }
                    else{
                        for (var i=5; i<=digit; i++){
                            btn_id = '#wt' + num_screen + 'btn_'+ i;
                            $(btn_id).addClass('active')
                            if (num_screen!=-1)
                                include(i,Screen[num_screen].checked_digits)
                        }
                    }
                }
            }
            else{
                btn_id = '#wt' + num_screen + 'btn_'+ digit;
                $(btn_id).toggleClass('active')
                toggle_array(digit,Screen[num_screen].checked_digits)
            }
        }

    }

    function change_operation(operation, num_screen) {
        if (isNaN(num_screen)){
            // switch (operation){
            //   case 0:
            //     $("#navbar_operation_tablo").html("Сложение")
            //   break;
            //   case 1:
            //     $("#navbar_operation_tablo").html("Вычитание")
            //   break;
            //   case 2:
            //     $("#navbar_operation_tablo").html("Сложение/Вычитание")
            //   break;
            // }
            for (var i=1; i<=screen_num; i++){
                Screen[i].operation = Screen[0].operation
            }
            for (var i=0; i<=screen_num; i++){
                change_operation(operation, i)
            }
        }
        else{
            for (var i=0;i<=2;i++){
                btn_operation_id = "#wt" + num_screen + "operation_" +i;
                $(btn_operation_id).removeClass("active")
            }
            btn_operation_id = "#wt" + num_screen + "operation_" +operation;
            $(btn_operation_id).addClass("active")
            // operation_tablo_id="#wt"+num_screen+ "operation_tablo"
            // switch (operation){
            //   case 0:
            //     $(operation_tablo_id).html("Сложение")
            //   break;
            //   case 1:
            //     $(operation_tablo_id).html("Вычитание")
            //   break;
            //   case 2:
            //     $(operation_tablo_id).html("Сложение/Вычитание")
            //   break;
            // }
            Screen[num_screen].operation = operation;
        }
    }
    function change_half(num_screen) {
        if (isNaN(num_screen)){
            $("#nabvar_btn_half").toggleClass("active")
            if (Screen[0].half==true){
                for (var i=0; i<=screen_num; i++){
                    if (i!=-1) Screen[i].half=true
                    change_half(i)
                }
            }
            else{
                for (var i=0; i<=screen_num; i++){
                    if (i!=-1)Screen[i].half=false
                    change_half(i)
                }
            }
        }
        else{
            btn_id = '#wt' + num_screen + 'btn_half';
            if (num_screen!=-1){
                if (Screen[num_screen].half == true){
                    $(btn_id).removeClass('active')
                    Screen[num_screen].half = false
                }
                else{
                    $(btn_id).addClass('active')
                    Screen[num_screen].half = true
                }
            }
        }
    }

    function change_progress_mode(num_screen) {
        if (isNaN(num_screen)){
            $("#navbar_progress_mode").toggleClass("active")
            for (var i=1; i<=screen_num; i++){
                Screen[i].progress_mode = Screen[0].progress_mode
            }
            for (var i=0; i<=screen_num; i++){
                change_progress_mode(i)
            }
        }
        else{
            com = "#wt" + num_screen + "btn_progress_mode"
            if (Screen[num_screen].progress_mode==true){
                $(com).removeClass("active")
                Screen[num_screen].progress_mode = false
            }
            else{
                $(com).addClass("active")
                Screen[num_screen].progress_mode = true
            }

        }
    }

    function change_digits_num(operation, num_screen) {
        if (isNaN(num_screen)){
            for (var i=1; i<=screen_num; i++){
                Screen[i].digits_num = Screen[0].digits_num
            }
            switch (operation){
                case false:
                    n=Screen[0].digits_num
                    if (n>1)
                        n--
                    change_digits_num(n)
                    break;

                case true:
                    n=Screen[0].digits_num
                    if (n<8)
                        n++
                    change_digits_num(n)
                    break;

                case 0:
                    var t = Math.abs(parseInt(prompt(" Введите количестов цифр в пределах от 1 до 8  ")));
                    if (!(isNaN(t) || t < 1 || t > 8)) {
                        digits_num = t
                    }
                    for (var i=0; i<=screen_num; i++){
                        Screen[i].digits_num = digits_num
                        com = '#wt' + i + 'digits_num_tablo'
                        if (digits_num == 1) digits_num_str = digits_num.toString() + ' цифра'
                        else if (digits_num>=2 && digits_num<=4)  digits_num_str = digits_num.toString() + ' цифры'
                        else digits_num_str = digits_num.toString() + ' цифр'
                        $(com).html(digits_num_str)
                        change_fontsize("",i)

                    }
                    break;
            }
            if (operation!==0){
                for (var i=0; i<=screen_num; i++){
                    change_digits_num(operation, i)
                }
            }
            $("#navbar_digits_num_tablo").html(digits_num)
            taskbox_font_size = change_fontsize("",1)
            $("#navbar_fontsize_tablo").html(parseInt(taskbox_font_size))
        }
        else{
            This_screen=Screen[num_screen]
            digits_num = This_screen.digits_num
            switch(operation){
                case false: //minus
                    if (digits_num > 1){
                        digits_num--
                    }
                    break;
                case true: //plus
                    if (digits_num < 8){
                        digits_num++
                    }
                    break;
                case 0: //enter
                    var t = Math.abs(parseInt(prompt(" Введите количестов цифр в пределах от 1 до 8  ")));
                    if (!(isNaN(t) || t < 1 || t > 8)) {
                        digits_num = t
                    }
                    break;
                default:
                    digits_num=operation
                    break;
            }
            This_screen.digits_num = digits_num
            com = '#wt' + num_screen + 'digits_num_tablo'
            if (digits_num == 1) digits_num_str = digits_num.toString() + ' цифра'
            else if (digits_num>=2 && digits_num<=4)  digits_num_str = digits_num.toString() + ' цифры'
            else digits_num_str = digits_num.toString() + ' цифр'
            $(com).html(digits_num_str)
            change_fontsize("",num_screen)
        }

    }

    function change_summands_num(operation, num_screen) {
        if (isNaN(num_screen)){
            for (var i=1; i<=screen_num; i++){
                Screen[i].summands_num = Screen[0].summands_num
            }
            summands_num = Screen[0].summands_num
            switch(operation){
                case true:
                    if (summands_num<70){
                        summands_num++
                        for (var i=0; i<=screen_num; i++){
                            change_summands_num(operation, i)
                        }
                    }
                    break;
                case false:
                    if (summands_num>1){
                        summands_num--
                        for (var i=0; i<=screen_num; i++){
                            change_summands_num(operation, i)
                        }
                    }
                    break;
                case 0:
                    var t = Math.abs(parseInt(prompt(" Введите количестов цифр в пределах от 1 до 70  ")));
                    if (!(isNaN(t) || t < 1 || t > 70)) {
                        summands_num = t
                    }
                    else{
                        summands_num=Screen[0].summands_num
                    }
                    for (var i=0; i<=screen_num; i++){
                        Screen[i].summands_num = summands_num

                        com = '#wt' + i + 'summands_num_tablo'
                        str = summands_num.toString() + ' слаг'
                        $(com).html(str)
                    }

                    break;
                default:
                    summands_num = operation
                    break;

            }
            if (operation!==true && operation!==false && operation!==0){
                $("#navbar_summands_num").html(summands_num)
                for (var i=0; i<=screen_num; i++){
                    change_summands_num(operation,i)
                    com = '#wt' + i + 'summands_num_tablo'
                    str = summands_num + ' слаг'
                    $(com).html(str)
                }
            }
            $("#navbar_summands_num_tablo").html(summands_num)
        }
        else{
            var x = Screen[num_screen].summands_num
            switch(operation){
                case false: //minus
                    if (x > 1){
                        x--
                    }
                    break;

                case 0: //enter
                    var t = Math.abs(parseInt(prompt(" Введите количестов цифр в пределах от 1 до 70  ")));
                    if (!(isNaN(t) || t < 1 || t > 70)) {
                        x = t
                    }
                    break;
                case true: //plus
                    if (x < 70){
                        x++
                    }
                    break;
                default:
                    x = operation
                    break;
            }
            Screen[num_screen].summands_num = x
            com = '#wt' + num_screen + 'summands_num_tablo'
            str = x.toString() + ' слаг'
            $(com).html(str)
        }
    }

    function change_interval(operation, num_screen) {
        if (isNaN(num_screen)){
            for (var i=1; i<=screen_num; i++){
                Screen[i].interval = Screen[0].interval
            }
            interval = Screen[0].interval
            switch(operation){
                case true:
                    if (interval<7000){
                        interval+=100
                        for (var i=0; i<=screen_num; i++){
                            change_interval(operation, i)
                        }
                    }
                    break;
                case false:
                    if (interval>100){
                        interval-=100
                        for (var i=0; i<=screen_num; i++){
                            change_interval(operation, i)
                        }
                    }
                    break;
                case 0:
                    var t = Math.abs(parseFloat(prompt(" Введите количестов цифр в пределах от 0.1 до 7 сек  ")));
                    if (!(isNaN(t) || t < 0.1 || t > 7)) {
                        interval = parseInt(t*1000)
                    }
                    for (var i=0; i<=screen_num; i++){
                        Screen[i].interval = interval
                        com = '#wt' + i + 'interval_tablo'
                        str =(interval*0.001).toFixed(1).toString() + ' сек'
                        $(com).html(str)
                    }
                    break;
                default:
                    interval = 1000*operation
                    break;
            }
            if (operation!==true && operation!==false && operation!==0){
                for (var i=0; i<=screen_num; i++){
                    com = '#wt' + i + 'interval_tablo'
                    str = (interval*0.001).toFixed(1) + ' сек'
                    change_interval(operation,i)
                    $(com).html(str)
                }
            }
            interval = parseFloat(0.001*interval).toFixed(1)
            $("#navbar_interval_tablo").html(interval)
        }
        else{
            if (screen_num > 1)
                mode = "asynchro"
            var x = Screen[num_screen].interval
            switch(operation){
                case false: //minus
                    if (x > 100){
                        x-=100
                    }
                    break;

                case 0: //enter
                    var t = Math.abs(parseFloat(prompt(" Введите количестов цифр в пределах от 0.1 до 7 сек  ")));
                    if (!(isNaN(t) || t < 0.1 || t > 7)) {
                        x = parseInt(t*1000)
                    }
                    break;
                case true: //plus
                    if (x < 7000){
                        x+=100
                    }
                    break;
                default:
                    x =operation*1000
                    break;
            }
            Screen[num_screen].interval = x
            com = '#wt' + num_screen + 'interval_tablo'
            str =(x*0.001).toFixed(1).toString() + ' сек'
            $(com).html(str)
        }

    }

    fontsize_vw="35vw"

    function change_fontsize(fontsize, num_screen){

        if (fontsize ==""){
            digits_num = Screen[num_screen].digits_num
            if (digits_num==4) k = 1
            else if (digits_num>=5) k = 2
            else k=0
            digits_num = Screen[num_screen].digits_num
            fontsize2 = parseInt(100/(screen_num + digits_num +k)) + "vw"
        }
        else{
            fontsize2 = fontsize

        }
        Screen[num_screen].fontsize = fontsize2
        com = "#wt" + num_screen.toString() + "taskbox"
        $(com).css("font-size", fontsize2)

        return  fontsize2;
    }

    function change_fontsize_f(operation, num_screen) {
        if (isNaN(num_screen)){

            switch(operation){
                case true:

                    for (var i=0; i<=screen_num; i++){
                        change_fontsize_f(operation, i)

                    }
                    break;
                case false:

                    for (var i=0; i<=screen_num; i++){
                        change_fontsize_f(operation, i)
                    }

                    break;
                case 0:
                    fontsize = parseInt(Screen[0].fontsize)
                    var t = Math.abs(parseInt(prompt(" Введите шрифт в пределах от 5 до 100   ")));
                    if (!(isNaN(t) || t < 5 || t > 100)) {
                        fontsizex = t
                        fontsize = t
                        for (var i=0; i<=screen_num; i++){
                            fontsizevw = fontsizex + "vw"
                            change_fontsize(fontsizevw,i)
                            if (i==0)
                                $("#wt"+i+"fontsize_tablo").html(fontsizex)
                            else
                                $("#wt"+i+"fontsize_tablo").html("шрифт: " + fontsizex)
                        }

                    }
                    break;
            }
            $("#navbar_fontsize_tablo").html(fontsize)
        }
        else{
            fontsize = parseInt(Screen[num_screen].fontsize);
            switch (operation){
                case false: //minus
                    if (fontsize>5){
                        fontsize--

                    }
                    break;
                case 0: //enter
                    var t = Math.abs(parseInt(prompt(" Введите шрифт в пределах от 5 до 100 сек  ")));
                    if (!(isNaN(t) || t < 5 || t > 100)) {
                        fontsize = t
                    }
                    break;
                case true: //plus
                    if (fontsize<100){
                        fontsize++
                    }
                    break;
            }
            fontsizevw = fontsize + "vw"
            change_fontsize(fontsizevw,num_screen)
            if (num_screen==0)
                $("#wt"+num_screen+"fontsize_tablo").html(fontsize)
            else
                $("#wt"+num_screen+"fontsize_tablo").html("шрифт: " + fontsize)
        }

    }

    function change_screens_num(operation) {
        if (operation==0){
            mode="random"
            create_screen(1)
            $("#navbar_screens_num_tablo").html("Turbo")
            $("#screens_num_tablo").html("Turbo")
        }
        else{
            if (mode=="random")
                mode="synchro"
            create_screen(operation)
        }

    }

    function unrandom_mode_f(){
        if (mode=="random")
            mode = "synchro"
    }
    function random_mode_f(){
        create_screen(8)
        mode = "random"
        $('#navbar_screen_num').html('Р');
        create_screen(1)
    }

    var  voice=true


    function change_style(){
        if (white_style==true) {
            document.getElementById("navbar_logo").style.backgroundImage = "url(/static/custom/css/s5_logo.png)"
            $(".white_style8").toggleClass("white_style8 black_style8")
            $(".white_style").toggleClass("white_style black_style")
            $(".navbar-default").toggleClass("navbar-inverse navbar-default")
            white_style=false
            for (var i=1; i<=screen_num; i++){
                $("#wt" + i + "taskbox").css("color",colors2[5])
            }
        }
        else {
            document.getElementById("navbar_logo").style.backgroundImage = "url(/static/custom/css/logo_rus.png)"

            $(".black_style").toggleClass("white_style black_style")
            $(".black_style8").toggleClass("white_style8 black_style8")
            $(".navbar-inverse").toggleClass("navbar-inverse navbar-default")
            white_style=true
            for (var i=1; i<=screen_num; i++){
                $("#wt" + i + "taskbox").css("color",colors[5])
            }
        }
    }
    font = 0
    function change_font(operation){
        if (isNaN(operation)) operation = parseInt($('#select').val())
        switch(operation){
            case 0:
                $("#navbar_font_tablo").html("R")
                break;
            case 1:
                $("#navbar_font_tablo").html("J")
                break;
            case 2:
                $("#navbar_font_tablo").html("D")
                break;
            case 3:
                $("#navbar_font_tablo").html("P")
                break;
            case 4:
                $("#navbar_font_tablo").html("S")
                break;
        }
        font = operation
        for (var i=1; i<=8;i++){
            taskbox_id="#wt" +i + "taskbox"
            switch(font){
                case 0:
                    $(taskbox_id).css("fontFamily","Roboto")
                    break;
                case 1:
                    $(taskbox_id).css("fontFamily","Jokerman")
                    break;
                case 2:
                    $(taskbox_id).css("fontFamily","DFPOP1-W9")
                    break;
                case 3:
                    $(taskbox_id).css("fontFamily","Playbill")
                    break;
                case 4:
                    $(taskbox_id).css("fontFamily","Showcard Gothic")
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

    var image_schotchik = 0;
    function show_example(num_screen){
        if (isNaN(num_screen)){
            for (var i=1; i<=screen_num; i++){
                show_example(i)
            }
        }
        else{
            $("#wt" + num_screen + "answerbox").val(Screen[num_screen].example)
        }

    }

    function change_background(){
        image_schotchik = random_between(1,27)
        var image_fon = "fon_" + image_schotchik + ".jpg";
        document.body.style.backgroundImage = 'url(<?=Url::to("@web/flash/custom/fon_1.jpg")?>)';
        image_schotchik = parseInt(image_schotchik);
    }



    function open_global_settings(){
        proccess = false
        for (var i=1; i<=screen_num; i++){
            status = Screen[i].status
            if (status == "count_in_proccess" || status == "countdown_in_proccess" || status =="count_paused")
                proccess = true
        }
        if (proccess == false)
            $('#modal_settings').modal('show');
    }

    function restart(){
        for (var i=1;i<=screen_num; i++){
            points_id =  "#wt" + i.toString() + "points"
            $(points_id).html("0")
            Screen[i].points=0
        }
    }


    function sychro_f(){
        mode = "synchro"
        for (var j=1; j<=8;j++){
            interval_id = "#interval_"+j.toString()
            $(interval_id).html($('#interval_tablo').html())
            interval[j] = parseInt($('#interval_tablo').html()*1000)
        }
    }



    document.onkeyup = function (e) {
        e = e || window.event;
        if (e.keyCode === 13) {
            Global_start();
        }
        else if(e.keyCode === 32){
            Global_stop();
        }

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

    function toggle_array(a,arr){
        var c = false, i = 0;
        while (c == false && i < arr.length) {
            if (a == arr[i++]) {
                c = true;
            }
        }
        if (c == true) {
            arr.splice(i-1,1);
        }
        else
            arr.push(a)
        return arr;
    }
    var
        chislo = 0,
        chislo_plus_all = 0,
        znak = 0,
        schotchik = 0,
        cifr = [],
        possible_checked_var = [],
        chislo_plus = [],
        vip = 0,
        prav = 0,
        wb_Timer1,
        prav_percent = 0;


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
        [[[[3,4,5,6,7],[9],[8,9],[7,8,9],[6,7,8,9],[5],[4,5,9],[3,4,5,8,9],[2,3,4,5,7,8,9],[1,2,3,4,5,6,7,8,9]],
            [[],[],[],[],[],[],[],[],[],[]]],

            [[[],[],[],[],[],[],[],[],[],[]],
                [[1,2,3,4,5,6,7,8,9],[2,3,4,5,7,8,9],[3,4,5,8,9],[4,5,9],[5],[6,7,8,9],[7,8,9],[8,9],[9],[3,4,5,6,7]]],

            [[[3,4,5,6,7],[9],[8,9],[7,8,9],[6,7,8,9],[5],[4,5,9],[3,4,5,8,9],[2,3,4,5,7,8,9],[1,2,3,4,5,6,7,8,9]],
                [[1,2,3,4,5,6,7,8,9],[2,3,4,5,7,8,9],[3,4,5,8,9],[4,5,9],[5],[6,7,8,9],[7,8,9],[8,9],[9],[3,4,5,6,7]]]];

    const POSSIBLE_CONST_COMBO =
        [[[[5,6,7,8],[5,6,7],[3,4,5,6],[2,3,4,5],[6,7,8,9],[6,7,8,9],[6,7,8],[6,7],[6,7,8],[6,7,8,9]],
            [[],[],[],[],[],[],[],[],[],[]]],

            [[[],[],[],[],[],[],[],[],[],[]],
                [[6,7,8,9],[6,7,8],[6,7,8,9],[6,7,8],[6,7,8,9],[1,2,3],[1,2,3,4],[1,2,3,4,5],[1,2,3,4,5,6],[5,6,7,8]]],

            [[[1,2,3,4,5,6,7,8],[5,6,7,9],[3,4,5,6],[2,3,4,5],[6,7,8,9],[6,7,8,9],[6,7,8],[6,7],[6,7,8],[6,7,8,9]],
                [[6,7,8,9],[6,7,8],[6,7,8,9],[6,7,8],[6,7,8,9],[1,2,3],[1,2,3,4],[1,2,3,4,5],[1,2,3,4,5,6],[1,2,3,4,5,6,7,8]]]];

    function possible_checked(module, operation, checked_digits){
        if (checked_digits.length==0) checked_digits=[1]
        if (module==3){
            var initial =
                [[[0,1,2,3,4,5,6,7,8,9],[0,1,2,3,4,5,6,7,8],[0,1,2,3,4,5,6,7],[0,1,2,3,4,5,6],[0,1,2,3,4,5],[0,1,2,3,4],[0,1,2,3],[0,1,2],[0,1],[0]],
                    [[0],[0,1],[0,1,2],[0,1,2,3],[0,1,2,3,4],[0,1,2,3,4,5],[0,1,2,3,4,5,6],[0,1,2,3,4,5,6,7],[0,1,2,3,4,5,6,7,8],[0,1,2,3,4,5,6,7,8,9]]];
        }
        else{
            var initial =
                [[[0,1,2,3,4,5,6,7,8,9],[0,1,2,3,5,6,7,8],[0,1,2,5,6,7],[0,1,5,6],[0,5],[0,1,2,3,4],[0,1,2,3],[0,1,2],[0,1],[0]],
                    [[0],[0,1],[0,1,2],[0,1,2,3],[0,1,2,3,4],[0,5],[0,1,5,6],[0,1,2,5,6,7],[0,1,2,3,5,6,7,8],[0,1,2,3,4,5,6,7,8,9]]];
        }

        var arr_possible = [[[],[],[],[],[],[],[],[],[],[]],
            [[],[],[],[],[],[],[],[],[],[]]];
        if (module == 2){
            for (var j = 0; j <= 1; j++){
                for (var k = 0; k <= 9; k++){
                    arr_possible[j][k] = initial[j][k].slice();
                }
            }
        }
        switch (parseInt(module)) {
            case 1:
                for (var j = 0; j <= 1; j++){
                    for (var k = 0; k <= 9; k++){
                        arr_possible[j][k] = duplicat(checked_digits, POSSIBLE_CONST_PROSTO[operation][j][k]);
                        if (arr_possible[j][k].length == 0){
                            arr_possible[j][k] = initial[j][k].slice();
                        }
                    }
                }
                break;
            case 2:
                for (var j = 0; j <= 1; j++){
                    for (var k = 0; k <= 9; k++){
                        arr_possible[j][k] = POSSIBLE_CONST_BRAT[operation][j][k].slice();
                    }
                }
                switch (parseInt(operation)){
                    case 0:
                        for (var k = 1; k <= 4; k++){
                            arr_possible[0][k] = duplicat(checked_digits, POSSIBLE_CONST_BRAT[operation][0][k]);
                            if (arr_possible[0][k].length == 0 || arr_possible[0][k] == 0){
                                arr_possible[0][k] = initial[0][k].slice();
                            }
                        }
                        break;
                    case 1:
                        for (var k = 5; k <= 8; k++){
                            arr_possible[1][k] = duplicat(checked_digits, POSSIBLE_CONST_BRAT[operation][1][k]);
                            if (arr_possible[1][k].length == 0 || arr_possible[1][k] == 0){
                                arr_possible[1][k] = initial[1][k].slice();
                            }
                        }
                        break;
                    case 2:
                        for (var k = 1; k <= 4; k++){
                            arr_possible[0][k] = duplicat(checked_digits, POSSIBLE_CONST_BRAT[operation][0][k]);
                            if (arr_possible[0][k].length == 0 || arr_possible[0][k] == 0){
                                arr_possible[0][k] = initial[0][k].slice();
                            }
                        }
                        for (var k = 5; k <= 8; k++){
                            arr_possible[1][k] = duplicat(checked_digits, POSSIBLE_CONST_BRAT[operation][1][k]);
                            if (arr_possible[1][k].length == 0 || arr_possible[1][k] == 0){
                                arr_possible[1][k] = initial[1][k].slice();
                            }
                        }
                        break;
                }
                break;
            case 3:
                var r = 1, p = 1;
                switch (parseInt(operation)) {
                    case 0: r = 0; p = 0; break;
                    case 1: r = 1; p = 1; break;
                    case 2: r = 0; p = 1; break;
                }
                for (var j = r; j <= p; j++){
                    for (var k = 0; k <= 9; k++){
                        arr_possible[j][k] = duplicat(checked_digits, POSSIBLE_CONST_DRUG[operation][j][k]);
                        if (arr_possible[j][k].length == 0){
                            arr_possible[j][k] = initial[j][k].slice();
                        }
                    }
                }
                break;
            case 4:
                // var r = 1, p = 1;
                switch (parseInt(operation)) {
                    case 0:
                        for (var k = 0; k <= 4; k++){
                            arr_possible[0][k] = POSSIBLE_CONST_COMBO[0][0][k].slice();
                        }
                        for (var k = 5; k <= 9; k++){
                            arr_possible[0][k] = duplicat(checked_digits, POSSIBLE_CONST_COMBO[0][0][k]);
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
                            arr_possible[1][k] = duplicat(checked_digits, POSSIBLE_CONST_COMBO[1][1][k]);
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
                            arr_possible[0][k] = duplicat(checked_digits, POSSIBLE_CONST_COMBO[0][0][k]);
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
                            arr_possible[1][k] = duplicat(checked_digits, POSSIBLE_CONST_COMBO[1][1][k]);
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
        for (var i=0; i<= screen_num; i++){
            clearInterval(Screen[i].timer);
        }

    }
    colors2 = ["#ff9999", "#a3ff66", "#dbefff",  "#a2add0",  "#ffdb99","#d199ff", "#ffff99", "#ff9baa", "#19ff19","#9999ff"]
    colors = ["red","purple", "#00a550", "#660099", "orange",  "DarkBlue","#ffd919", "#fc2847", "green","blue"]
    var color_num = 0, primer1=[];


    function clear_screens(screen_num) {
        for (var i = 1; i<=screen_num; i++){
            taskbox_id ="#wt" + i.toString() + "taskbox";
            $(taskbox_id).val("")
        }
    }
    var  mus = false;
    chered = true;



    function change_window(variant, num_screen){
        switch(variant){
            case 0:
                box_type = Screen[num_screen].box_type
                switch (box_type){
                    case "taskbox":
                        change_window("settingbox", num_screen)
                        break;
                    case "answerbox":
                        change_window("settingbox", num_screen)
                        break;
                    case "settingbox":
                        if (Screen[num_screen].status == "get_answer"){
                            change_window("answerbox", num_screen)
                        }
                        else{
                            change_window("taskbox", num_screen)
                        }
                        break;
                }
                break;
            case "taskbox":
                Screen[num_screen].box_type = 'taskbox'
                $("#wt" + num_screen + "answerbox").addClass("hidden")
                $("#wt" + num_screen + "answerbox_btn").addClass("invisible")
                $("#wt" + num_screen + "taskbox").removeClass("hidden")
                $("#window_settings_" + num_screen).addClass("hidden")
                if (Screen[num_screen].example.length!=0) $("#wt" + num_screen + "answerbox_btn_repeat").removeClass("hidden")
                $("#wt" + num_screen + "answerbox_btn_show_example").addClass("hidden")
                break;
            case "answerbox":

                Screen[num_screen].box_type = 'answerbox'
                $("#wt" + num_screen + "answerbox").removeClass("hidden")
                $("#wt" + num_screen + "answerbox_btn").removeClass("invisible")
                $("#wt" + num_screen + "taskbox").addClass("hidden")
                $("#window_settings_" + num_screen).addClass("hidden")
                $("#wt" + num_screen + "answerbox_btn_repeat").removeClass("hidden")
                $("#wt" + num_screen + "answerbox_btn_show_example").removeClass("hidden")
                break;
            case "settingbox":
                clearInterval(Screen[num_screen].timer)
                Screen[num_screen].box_type = 'settingbox'
                $("#wt" + num_screen + "answerbox").addClass("hidden")
                $("#wt" + num_screen + "answerbox_btn").removeClass("invisible")
                $("#wt" + num_screen + "taskbox").addClass("hidden")
                $("#window_settings_" + num_screen).removeClass("hidden")
                break;
        }
    }

    function change_name(num_screen) {
        name = Screen[num_screen].name
        new_name = prompt('Введите имя ');
        if (new_name != '')
            name = new_name
        Screen[num_screen].name = name
        $("#wt" + num_screen + "heading").html(name)
    }

    function change_windows(variant, screen_num){
        if (mode=="random"){
            for (var i=1; i<=8; i++){
                $("#wt" + i + "heading_panel").addClass("invisible")
                $("#window_task_" + i).css("border","0")
            }
        }
        else{
            for (var i=1; i<=8; i++){
                $("#wt" + i + "heading_panel").removeClass("invisible")
                $("#window_task_" + i).css("border-left","1px dotted #999999")
                $("#window_task_" + i).css("border-top","1px dotted #999999")
            }
        }
        if (variant == "main_window"){
            $("#window_task_0").removeClass("hidden")
            for (var i=1; i <= screen_num; i++){
                com ="#window_task_" + i.toString();
                $(com).addClass("hidden")
            }
        }
        else{
            $("#window_task_0").addClass("hidden")
            for (var i=1; i <= screen_num; i++){
                com ="#window_task_" + i.toString();
                $(com).removeClass("hidden")
            }
            for (var i=1; i<=screen_num; i++){
                change_window(variant, i)
            }
        }
    }


    function yes_no(a,arr){
        var c = false, i = 0;
        while (c == false && i<arr.length) {
            if (a == arr[i++]) c = true;
        }
        return c;
    }
    var stop_cycle = false;
    function ravno(){
        stop_cycle = true;

        // status = 'answer_enter'
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

    function calculate_simple_add(summands_num, digits_num, half, possible_digits) {
        var max_chislo = 0;
        if (yes_no(5,checked_digits)) {
            for (var i = 0; i < digits_num; i++){
                max_chislo += 9*power10(i);
            }
        }
        else{
            for (var i = 0; i < digits_num; i++){
                max_chislo += 4*power10(i);
            }
        }
        var POSSIBLE_CHECKED_CONST = possible_digits.slice()

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (chislo == max_chislo || schotchik == summands_num) {
            ravno();
        }
        else {
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < digits_num; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < digits_num; i++) {
                cifr[i] += parseInt(chislo_plus[i]);
                for (var k = 0; k <= 9; k++){
                    possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
                }
            }
            chislo_plus_f();
        }
    }


    function calculate_simple_sub(summands_num, digits_num, half, possible_digits) {
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (chislo == 0 || schotchik == summands_num) {
            ravno();
        }
        else {
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < digits_num; i++) {
                    var p = possible_checked_var[i][1][cifr[i]];
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][1][cifr[i]] = POSSIBLE_CHECKED_CONST[1][cifr[i]].slice();
                        p = possible_checked_var[i][1][cifr[i]];
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < digits_num; i++) {
                cifr[i] -= parseInt(chislo_plus[i]);
                for (var k = 0; k <= 9; k++){
                    possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
                }
            }
            chislo_minus_f();
        }
    }
    function calculate_simple_add_sub(summands_num, digits_num, half, possible_digits) {
        chislo = parseInt(chislo);
        var max_chislo_4 = 0, l = checked_digits.length-1;
        if (l == 4){
            for (var i = 0; i < digits_num; i++){
                max_chislo_4 += 4*power10(i);
            }
        }
        var max_chislo = power10(digits_num) - 1;
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()
        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;
        if (schotchik == summands_num) {
            ravno();
        }
        else {
            var vspom_chislo = 0;
            for (var i = 0; i < digits_num; i++){
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
            if (half == true && razmer > 1 && digits_num > 1 && schotchik % 2 == 1){
                per = 1;
                var uio = chislo%power10(digits_num-1);
                switch (chislo%power10(digits_num-1)){
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

                for (var i = 0; i < digits_num - per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);
            for (var i = 0; i < digits_num-per; i++) {
                if (znak == 0)  cifr[i] += parseInt(chislo_plus[i]);
                else cifr[i] -= parseInt(chislo_plus[i]);
                for (var k = 0; k <= 9; k++){
                    possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
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

    function calculate_brother_add(summands_num, digits_num, half, possible_digits) {
        var max_chislo = power10(digits_num)-1;
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (schotchik == summands_num) {
            ravno();
        }
        else {
            var vspom_chislo1 = 0, vspom_chislo2 = 0;
            for (var i = 0; i < digits_num; i++){
                vspom_chislo1 += 5*power10(i);
                vspom_chislo2 += 7*power10(i);
            }
            if (chislo >= vspom_chislo2) znak = 1;
            else if (chislo < vspom_chislo1) znak = 0;
            else znak = randomInteger(2);
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && digits_num > 1 && schotchik % 2 == 1){
                per = 1;
                switch (chislo%power10(digits_num-1)){
                    case 0: znak = 0; break;
                    case parseInt(max_chislo/10): znak = 1; break;
                    default: znak = randomInteger(2); break;
                }
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < digits_num-per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < digits_num-per; i++) {
                if (znak == 0)  cifr[i] += parseInt(chislo_plus[i]);
                else cifr[i] -= parseInt(chislo_plus[i]);
                for (var k = 0; k <= 9; k++){
                    possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
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

    function calculate_brother_sub(summands_num, digits_num, half, possible_digits) {
        var max_chislo = power10(digits_num)-1;
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (schotchik == summands_num) {
            ravno();
        }
        else {
            var vspom_chislo1 = 0;
            for (var i = 0; i < digits_num; i++){
                vspom_chislo1 += 5*power10(i);
            }
            if (chislo < vspom_chislo1) znak = 0;
            else znak = 1;
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && digits_num > 1 &&  schotchik % 2 == 1){
                per = 1;
                switch (chislo%power10(digits_num-1)){
                    case 0: znak = 0; break;
                    case parseInt(max_chislo/10): znak = 1; break;
                    default: znak = randomInteger(2); break;
                }
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < digits_num-per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < digits_num-per; i++) {
                if (cifr[i]>=5 && cifr[i] <= 8) {
                    for (var k = 5; k <= 9; k++){
                        possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                        possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
                    }
                }
                else {
                    for (var k = 0; k <= 4; k++){
                        possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                        possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
                    }
                }
                if (znak == 0)  cifr[i] += parseInt(chislo_plus[i]);
                else cifr[i] -= parseInt(chislo_plus[i]);
            }

            if (znak == 0) chislo_plus_f();
            else chislo_minus_f();
        }
    }

    function calculate_brother_add_sub(summands_num, digits_num, half, possible_digits) {
        var max_chislo = power10(digits_num)-1;
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (schotchik == summands_num) {
            ravno();
        }
        else {
            var vspom_chislo1 = 0, vspom_chislo2 = 0;
            for (var i = 0; i < digits_num; i++){
                vspom_chislo1 += 5*power10(i);
                vspom_chislo2 += 7*power10(i);
            }
            if (chislo >= vspom_chislo2) znak = 1;
            else if (chislo < vspom_chislo1) znak = 0;
            else znak = randomInteger(2);
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && digits_num > 1 && schotchik % 2 == 1){
                per = 1;
                switch (chislo%power10(digits_num-1)){
                    case 0: znak = 0; break;
                    case parseInt(max_chislo/10): znak = 1; break;
                    default: znak = randomInteger(2); break;
                }
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < digits_num-per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < digits_num-per; i++) {
                if (znak == 0)  cifr[i] += parseInt(chislo_plus[i]);
                else cifr[i] -= parseInt(chislo_plus[i]);
                for (var k = 0; k <= 9; k++){
                    possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
                }
            }

            if (znak == 0) chislo_plus_f();
            else chislo_minus_f();
        }
    }

    function calculate_friend_add(summands_num, digits_num, half, possible_digits) {
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()
        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;
        if (schotchik == summands_num) {
            ravno();
        }
        else {
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && digits_num > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < digits_num-per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < digits_num-per; i++) {
                for (var k = 0; k <= 9; k++){

                    possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );

                }
            }
            chislo_plus_f();
            cifr.length = 0;
            for (var i = 0; i < digits_num; i++) {
                cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
            }

        }
    }

    function calculate_friend_sub(summands_num, digits_num, half, possible_digits) {
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()


        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;
        var razmer = 0;
        razmer = parseInt((chislo.toString()).length);

        if (razmer == 1 || schotchik == summands_num) {
            ravno();
        }
        else {
            var per = 0;
            if (half == true && razmer > 2  && digits_num > 1 && schotchik % 2 == 1){
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

                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );

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

    function calculate_friend_add_sub(summands_num, digits_num, half, possible_digits) {
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        var razmer = 0;
        razmer = parseInt((chislo.toString()).length);
        if (schotchik == summands_num) {
            ravno();
        }
        else {
            if (razmer <= digits_num) znak = 0;
            else znak =  randomInteger(2);
            var per = 0;
            if (half == true && razmer > 1 && digits_num > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                if (znak == 0){
                    for (var i = 0; i < digits_num - per; i++) {
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
                    if (razmer > digits_num){
                        for (var i = 0; i < digits_num - per; i++) {
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

            for (var i = 0; i < digits_num - per; i++) {

                for (var k = 0; k <= 9; k++){
                    possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
                }

            }
            if (znak == 0) {
                chislo_plus_f();
                cifr.length = 0;
                for (var i = 0; i < digits_num; i++) {
                    cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                }
            }
            else {
                chislo_minus_f();
                cifr.length = 0;
                for (var i = 0; i < digits_num; i++) {
                    cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                }
            }
        }
    }

    function calculate_combo_add(summands_num, digits_num, half, possible_digits) {
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (schotchik == summands_num) {
            ravno();
        }
        else {
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && digits_num > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < digits_num-per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);
            for (var i = 0; i < digits_num-per; i++) {
                for (var k = 0; k <= 9; k++){
                    possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
                }
            }
            chislo_plus_f();
            cifr.length = 0;
            for (var i = 0; i < digits_num; i++) {
                cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
            }

        }
    }

    function calculate_combo_sub(summands_num, digits_num, half, possible_digits) {
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()


        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;
        var razmer = 0;
        razmer = parseInt((chislo.toString()).length);

        if (razmer == 1 || schotchik == summands_num) {
            ravno();
        }
        else {
            var per = 0;
            if (half == true && razmer > 2 && digits_num > 1 && schotchik % 2 == 1){
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
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
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

    function calculate_combo_add_sub(summands_num, digits_num, half, possible_digits) {
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        var razmer = 0;
        razmer = parseInt((chislo.toString()).length);
        if (schotchik == summands_num) {
            ravno();
        }
        else {
            if (razmer <= digits_num) znak = 0;
            else znak =  randomInteger(2);
            var per = 0;
            if (half == true && razmer > 1 && digits_num > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                if (znak == 0){
                    for (var i = 0; i < digits_num - per; i++) {
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
                    if (razmer > digits_num){
                        for (var i = 0; i < digits_num - per; i++) {
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

            for (var i = 0; i < digits_num - per; i++) {
                for (var k = 0; k <= 9; k++){
                    possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
                }
            }
            if (znak == 0) {
                chislo_plus_f();
                cifr.length = 0;
                for (var i = 0; i < digits_num; i++) {
                    cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                }
            }
            else {
                chislo_minus_f();
                cifr.length = 0;
                for (var i = 0; i < digits_num; i++) {
                    cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                }
            }
        }
    }

    function calculate_random_add(summands_num, digits_num, half, possible_digits) {
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()

        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;

        if (schotchik == summands_num) {
            ravno();
        }
        else {
            var razmer = parseInt((chislo.toString()).length);
            var per = 0;
            if (half == true && razmer > 1 && digits_num > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                for (var i = 0; i < digits_num - per; i++) {
                    var p = possible_checked_var[i][znak][cifr[i]].slice();
                    if (p.length == 0 || p[0] == 0) {
                        possible_checked_var[i][znak][cifr[i]] = POSSIBLE_CHECKED_CONST[znak][cifr[i]].slice();
                        p = possible_checked_var[i][znak][cifr[i]].slice();
                    }
                    chislo_plus[i] = p[randomInteger(p.length)];
                    chislo_plus_all += chislo_plus[i]*power10(i);
                }
            } while (chislo_plus_all == 0);

            for (var i = 0; i < digits_num - per; i++) {
                for (var k = 0; k <= 9; k++){
                    possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
                }
            }
            chislo_plus_f();
            cifr.length = 0;
            for (var i = 0; i < digits_num; i++) {
                cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
            }
        }
    }

    function calculate_random_sub(summands_num, digits_num, half, possible_digits) {
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()
        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;
        var razmer = 0;
        razmer = parseInt((chislo.toString()).length);

        if (razmer == 1 || schotchik == summands_num) {
            ravno();
        }
        else {
            var per = 0;
            if (half == true && razmer > 2 && digits_num > 1 && schotchik % 2 == 1){
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
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
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

    function calculate_random_add_sub(summands_num, digits_num, half, possible_digits) {
        var POSSIBLE_CHECKED_CONST =  possible_digits.slice()
        chislo_plus = []; chislo_plus_all = 0;
        schotchik++;
        var razmer = 0;
        razmer = parseInt((chislo.toString()).length);
        if (schotchik == summands_num) {
            ravno();
        }
        else {
            if (razmer <= digits_num) znak = 0;
            else znak =  randomInteger(2);
            var per = 0;
            if (half == true && razmer > 1 && digits_num > 1 && schotchik % 2 == 1){
                per = 1;
            }
            else per = 0;
            do {
                chislo_plus_all = 0;
                chislo_plus = [];
                if (znak == 0){
                    for (var i = 0; i < digits_num - per; i++) {
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
                    if (razmer > digits_num){
                        for (var i = 0; i < digits_num - per; i++) {
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

            for (var i = 0; i < digits_num - per; i++) {
                for (var k = 0; k <= 9; k++){
                    possible_checked_var[i][0][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][0][k]), 1 );
                    possible_checked_var[i][1][k].splice( $.inArray(chislo_plus[i], possible_checked_var[i][1][k]), 1 );
                }
            }

            if (znak == 0) {
                chislo_plus_f();
                cifr.length = 0;
                for (var i = 0; i < digits_num; i++) {
                    cifr[i] = parseInt((chislo % power10(i + 1))/power10(i));
                }
            }
            else {
                cifr.length = 0;
                for (var i = 0; i < digits_num; i++) {
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





