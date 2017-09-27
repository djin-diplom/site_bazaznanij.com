<?php


//Выбор названия сайта
$per_site = rand(1, 6);

switch ($per_site){
    case 1: $site_name = $site_name;
        break;
    case 2: $site_name = $site_name_2;
        break;
    case 3: $site_name = $site_name_3;
        break;
    case 4: $site_name = $site_name_4;
        break;
    case 5: $site_name = $site_name_5;
        break;
    case 6: $site_name = $site_name_6;
        break;

}


//Выбор title

$title_let_case = rand(1,2);

switch ($title_let_case) {

    case 1:
        $title_let = $vid_rab." по цене ".$pay.", нет предоплат, центр ";
        break;
    case 2:
        $title_let = $vid_rab." без предоплаты ".$pay." от нашей студии ";
        break;
    

}


//Выбор Выполнение по низкой цене

$vibor_let_case = rand(1,2);

switch ($vibor_let_case) {
    case 1:
        $vibor_let = 'В марте 2017 снизили цены.';
        break;
    case 2:
        $vibor_let = 'Весенняя распродажа работ.';
        break;

}


//Выбор Скидки

$vibor_akc_case = rand(1,2);

switch ($vibor_akc_case) {
    case 1:
        $vibor_akc = 'Первая партия вообще без оплаты.';
        break;
    case 2:
        $vibor_akc = 'Тестовый пакет работ бесплатно.';
        break;

}

//Выбор стоимости

$sut_kurs = rand(10,30);
$sut_dip = rand(50,100);
$sut_mag = rand(80,300);

//чек + договор

$vibor_pris_case = rand(1,2);

switch ($vibor_pris_case) {
    case 1:
        $vibor_pris = ' предоставит Вам магистерские и дипломы по любым предметам. ';
        break;
    case 2:
        $vibor_pris = ' пришлет диссертациии и дипломные работы по всем предметам. ';
        break;

    
}


//Текст курсовой

$text_kurs_case = rand(1,2);

switch ($text_kurs_case) {
    case 1:
        $text_kurs = 'Опт, скидки. Уникальность.
        ';
        break;
    case 2:
        $text_kurs = 'Свежие работы оптом.
        ';
        break;

    

}

//Текст дипломной пока не исправил!

$text_dip_case = rand(1,2);

switch ($text_dip_case) {
    case 1:
        $text_dip = 'Более десятка тысяч дипломов, тысячи за 2017 год.
        ';
        break;
    case 2:
        $text_dip = 'Есть восемь тысяч дипломов, в том числе за этот год.
        ';
        break;


}

//Текст магистерской 19032017 не переделывал

$text_mag_case = rand(1,2);

switch ($text_mag_case) {
    case 1:
        $text_mag = 'Более тысячи магистерских диссертаций. Объем от 80 стр., уникальность от 70%.
        ';
        break;
    case 2:
        $text_mag = 'Уникальные магистерские объемом от 75 стр. новые без плагиата только с экзамена.
        ';
        break;

   
}

//Выбор Скидки

$vibor_filial_case = rand(1,2);

switch ($vibor_filial_case) {
    case 1:
        $vibor_filial = 'Мы хотим заслужить Ваше доверие. Вперед!';
        break;
    case 2:
        $vibor_filial = 'Сначала работы - потом деньги. Попробуйте!';
        break;

    
}


//Выбор низа


$vibor_niz_case = rand(1, 5);

switch ($vibor_niz_case) {
    case 1:
        $vibor_niz = '<br><a href="http://firmap.ru/sankt-peterburg/vivastudentru-6952101">Наша компания есть в каталоге СПБ, ссылка</a><br>
';
        break;
    case 2:
        $vibor_niz = '<br><a href="http://firmap.ru/sankt-peterburg/vivastudentru-6952101">Мы официально зарегистрированы в РФ, сайт</a><br>
';
        break;
    case 3:
        $vibor_niz = '<br><a href="http://firmap.ru/sankt-peterburg/vivastudentru-6952101">Наша студия в списке компаний Санкт-Петербурга, пройти</a><br>
';
        break;
    case 4:
        $vibor_niz = '<br><a href="http://firmap.ru/sankt-peterburg/vivastudentru-6952101">Мы работаем давно и находимся в каталоге Firmap,  посмотреть</a><br>
';
        break;
    case 5:
        $vibor_niz = '<br><a href="http://firmap.ru/sankt-peterburg/vivastudentru-6952101">Наш образовательный центр есть в перечне компаний России, проверить</a><br>
';
        break;


}



$style_1 = rand(3234, 2343).'adfdpt';


function kart_vibor ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=autorvolodin4%40mail.ru&e=1491367525&h=LkDD-23gJQnPaZ_iHoxStg&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzL2VjNzAxM2RlZjk3NmYwYmNjNGRjODMzOTM3N2JkNWY1LmpwZw~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=autorvolodin4%40mail.ru&e=1491367525&h=fHXOLNEqiy6qzfZdjFqIWA&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzL2I1NDQ4NGRkMGM1NDgxM2Y5MzlkYzlhMGZiNzgyOGZhLmpwZw~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=autorvolodin4%40mail.ru&e=1491368181&h=6kMnIaUu2KPDO9DZcN-edw&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzhjM2M3NzFkZTg0ZmU1ZWM4OWFhMzljNGMyNjRmOWNkLmpwZw~~&is_https=1';

    $img_mail_4 = 'https://proxy.imgsmail.ru/?email=autorvolodin4%40mail.ru&e=1491368181&h=vOPV-7Nh_ea2_GISGkY4BQ&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzM5Y2JkYWVkN2YyMzZiMThkNmYzOTYzODBlNDM4NWY4LmpwZw~~&is_https=1';
    $img_mail_5 = 'https://proxy.imgsmail.ru/?email=autorvolodin4%40mail.ru&e=1491368181&h=587B4SWhQRZF9eLznf0_3g&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzMwOWQ4NDY4NzJhMWU4NzAwMzk3NGJhYmUxZmJlMmZhLmpwZw~~&is_https=1';

    $img_mail_6 = 'https://proxy.imgsmail.ru/?email=autorvolodin3%40mail.ru&e=1491368370&h=mVvUftj7toIVYC08K4IaLA&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzhjM2M3NzFkZTg0ZmU1ZWM4OWFhMzljNGMyNjRmOWNkLmpwZw~~&is_https=1';
    $img_mail_7 = 'https://proxy.imgsmail.ru/?email=autorvolodin3%40mail.ru&e=1491368370&h=lrMJ4wt9dSsCUYn13Qx77g&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzM5Y2JkYWVkN2YyMzZiMThkNmYzOTYzODBlNDM4NWY4LmpwZw~~&is_https=1';
    $img_mail_8 = 'https://proxy.imgsmail.ru/?email=autorvolodin3%40mail.ru&e=1491368370&h=9c3q3ryU8_Eq4raf7bvaxA&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzMwOWQ4NDY4NzJhMWU4NzAwMzk3NGJhYmUxZmJlMmZhLmpwZw~~&is_https=1';
    $img_mail_9 = 'https://proxy.imgsmail.ru/?email=autorvolodin3%40mail.ru&e=1491368386&h=la3CS2BxfrudgRyTQ0SOJQ&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzL2VjNzAxM2RlZjk3NmYwYmNjNGRjODMzOTM3N2JkNWY1LmpwZw~~&is_https=1';
    $img_mail_10 = 'https://proxy.imgsmail.ru/?email=autorvolodin3%40mail.ru&e=1491368386&h=vWQ35tLg1JpfA5dnc_akgg&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzL2I1NDQ4NGRkMGM1NDgxM2Y5MzlkYzlhMGZiNzgyOGZhLmpwZw~~&is_https=1';

    $img_mail_11 = 'https://proxy.imgsmail.ru/?email=autorvolodin2%40mail.ru&e=1491368673&h=LoWoEYV1zOtxWMthn0xcRg&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzL2VjNzAxM2RlZjk3NmYwYmNjNGRjODMzOTM3N2JkNWY1LmpwZw~~&is_https=1';
    $img_mail_12 = 'https://proxy.imgsmail.ru/?email=autorvolodin2%40mail.ru&e=1491368673&h=xY0FgFfX81AJ9Y8mi8Mp1A&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzL2I1NDQ4NGRkMGM1NDgxM2Y5MzlkYzlhMGZiNzgyOGZhLmpwZw~~&is_https=1';
    $img_mail_13 = 'https://proxy.imgsmail.ru/?email=autorvolodin2%40mail.ru&e=1491368671&h=Cb7c7OFecpmbdZ2yfCrggg&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzhjM2M3NzFkZTg0ZmU1ZWM4OWFhMzljNGMyNjRmOWNkLmpwZw~~&is_https=1';
    $img_mail_14 = 'https://proxy.imgsmail.ru/?email=autorvolodin2%40mail.ru&e=1491368671&h=eOEonthXIfwp29A0wRPU5g&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzM5Y2JkYWVkN2YyMzZiMThkNmYzOTYzODBlNDM4NWY4LmpwZw~~&is_https=1';
    $img_mail_15 = 'https://proxy.imgsmail.ru/?email=autorvolodin2%40mail.ru&e=1491368671&h=z8hPYLm81W6mrsOEbiATrA&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzMwOWQ4NDY4NzJhMWU4NzAwMzk3NGJhYmUxZmJlMmZhLmpwZw~~&is_https=1';


    switch ($var) {
        case 1: $var_2 = $img_mail_1;
            break;
        case 2: $var_2 = $img_mail_2;
            break;
        case 3: $var_2 = $img_mail_3;
            break;
        case 4: $var_2 = $img_mail_4;
            break;
        case 5: $var_2 = $img_mail_5;
            break;
        case 6: $var_2 = $img_mail_6;
            break;
        case 7: $var_2 = $img_mail_7;
            break;
        case 8: $var_2 = $img_mail_8;
            break;
        case 9: $var_2 = $img_mail_9;
            break;
        case 10: $var_2 = $img_mail_10;
            break;
        case 11: $var_2 = $img_mail_11;
            break;
        case 12: $var_2 = $img_mail_12;
            break;
        case 13: $var_2 = $img_mail_13;
            break;
        case 14: $var_2 = $img_mail_14;
            break;
        case 15: $var_2 = $img_mail_15;
            break;

    }

return $var_2;
}

// Выбор картинок
$kart_1 = rand(1, 1000000)%15+1;
$kart_2 = rand(1, 1000000)%15+1;
if ( $kart_1 == $kart_2) $kart_2 = rand(1, 1000000)%15+1;
$kart_3 = rand(1, 1000000)%15+1;
if ( $kart_1 == $kart_3) $kart_3 = rand(1, 1000000)%15+1;
if ( $kart_2 == $kart_3) $kart_3 = rand(1, 1000000)%15+1;

$kart_1 = kart_vibor($kart_1);
$kart_2 = kart_vibor($kart_2);
$kart_3 = kart_vibor($kart_3);


$arr_img_text = Array("diploma", "sheepskin", "patent", "coursework", "essay", "outline", "study", "experience", " experiment",
    "etude", "study", "essay", "attempt", "try", "effort", "endeavor", "trial", "sketch", "outline", "draft", "drawing", "rough draft",
"try", "sample", "test", "trial", "probe", "article", "paper", "item", "clause", "entry", "contribution",
    "product", "article", "fabric", "brummagem", "job", "make",
"thing", "article", "object", "work", "entity", "shebang",
    "subject", "thing", "object", "matter", "article", "theme", "paragraph", "item", "point", "clause", "station",
"control", "certificate", "evidence", "testimony", "witness", "document", "expose", "subject", "put",
"process", "subordinate", "submit", "subject", "subdue", "subjugate", "conquer",
"topic", "theme", "subject", "text", "chapter", "burden" );

$count_2 = array_rand($arr_img_text, 2);
$temp_arr_img = '';
for($i_2 = 0; $i_2<2; $i_2++){
    $temp_arr_img .= $arr_img_text[$count_2[$i_2]].' ';
}
$img_text_1 = $temp_arr_img;

$count_2 = array_rand($arr_img_text, 2);
$temp_arr_img = '';
for($i_2 = 0; $i_2<2; $i_2++){
    $temp_arr_img .= $arr_img_text[$count_2[$i_2]].' ';
}
$img_text_2 = $temp_arr_img;

$count_2 = array_rand($arr_img_text, 2);
$temp_arr_img = '';
for($i_2 = 0; $i_2<2; $i_2++){
    $temp_arr_img .= $arr_img_text[$count_2[$i_2]].' ';
}
$img_text_3 = $temp_arr_img;


$rand_cg = rand(1,10);

switch ($rand_cg) {
    case 1:
        $rand_color_green = '#298007';
        break;
    case 2:
        $rand_color_green = '#298017';
        break;
    case 3:
        $rand_color_green = '#298107';
        break;
    case 4:
        $rand_color_green = '#299007';
        break;
    case 5:
        $rand_color_green = '#288007';
        break;
    case 6:
        $rand_color_green = '#398007';
        break;
    case 7:
        $rand_color_green = '#298008';
        break;
    case 8:
        $rand_color_green = '#298027';
        break;
    case 9:
        $rand_color_green = '#298207';
        break;
    case 10:
        $rand_color_green = '#198007';
        break;
}

$rand_nom_1 = rand(1,5);

switch ($rand_nom_1) {

    case 1:
        $rand_nom_text_1 = '608';
        break;
    case 2:
        $rand_nom_text_1 = '607';
        break;
    case 3:
        $rand_nom_text_1 = '606';
        break;
    case 4:
        $rand_nom_text_1 = '605';
        break;
    case 5:
        $rand_nom_text_1 = '609';
        break;
}


$rand_nom_2 = rand(1,5);

switch ($rand_nom_2) {

    case 1:
        $rand_nom_text_2 = '183';
        break;
    case 2:
        $rand_nom_text_2 = '182';
        break;
    case 3:
        $rand_nom_text_2 = '184';
        break;
    case 4:
        $rand_nom_text_2 = '185';
        break;
    case 5:
        $rand_nom_text_2 = '181';
        break;
}

$rand_nom_3 = rand(1,5);

switch ($rand_nom_3) {

    case 1:
        $rand_nom_text_3_1 = 'Курсовая';
        $rand_nom_text_3_2 = 'Дипломная';
        $rand_nom_text_3_3 = 'Магистерская';
        break;
    case 2:
        $rand_nom_text_3_1 = 'Курсовой';
        $rand_nom_text_3_2 = 'Диплом';
        $rand_nom_text_3_3 = 'Диссертация';
        break;
    case 3:
        $rand_nom_text_3_1 = 'Курсовая работа';
        $rand_nom_text_3_2 = 'Дипломная работа';
        $rand_nom_text_3_3 = 'Маг. диссертация';
        break;
    case 4:
        $rand_nom_text_3_1 = 'Курсовой проект';
        $rand_nom_text_3_2 = 'Дипломный проект';
        $rand_nom_text_3_3 = 'Диссертация';
        break;
    case 5:
        $rand_nom_text_3_1 = 'Курсовые';
        $rand_nom_text_3_2 = 'Дипломные';
        $rand_nom_text_3_3 = 'Магистерские';
        break;
}


$rand_nom_4 = rand(1,2);

switch ($rand_nom_4) {

    case 1:
        $rand_nom_text_4 = 'Перейти на сайт';
        break;
    case 2:
        $rand_nom_text_4 = 'Ссылка на портал';
        break;

}

$rand_nom_5 = rand(1,2);

switch ($rand_nom_5) {

    case 1:
        $rand_nom_text_5 = 'Наш сайт';
        break;
    case 2:
        $rand_nom_text_5 = 'Наш портал';
        break;

}

$rand_nom_6 = rand(1,5);

switch ($rand_nom_6) {

    case 1:
        $rand_nom_text_6 = 'Отписка';
        break;
    case 2:
        $rand_nom_text_6 = 'Отказаться от рассылки';
        break;
    case 3:
        $rand_nom_text_6 = 'Отписаться';
        break;
    case 4:
        $rand_nom_text_6 = 'Отписывание';
        break;
    case 5:
        $rand_nom_text_6 = 'Не получать письма';
        break;
}

$rand_nom_7 = rand(1,5);

switch ($rand_nom_7) {

    case 1:
        $rand_nom_text_7 = '2008';
        break;
    case 2:
        $rand_nom_text_7 = '2009';
        break;
    case 3:
        $rand_nom_text_7 = '2010';
        break;
    case 4:
        $rand_nom_text_7 = '2011';
        break;
    case 5:
        $rand_nom_text_7 = '2012';
        break;
}

$rand_nom_8 = rand(1,10);

switch ($rand_nom_8) {
    case 1:
            $rand_nom_text_8 = ' оплата ';
            break;
        case 2:
            $rand_nom_text_8 = ' за ';
            break;
        case 3:
            $rand_nom_text_8 = ' по ';
            break;
        case 4:
            $rand_nom_text_8 = ' от ';
            break;
        case 5:
            $rand_nom_text_8 = ' до ';
            break;
        case 6:
            $rand_nom_text_8 = ' цена ';
            break;
        case 7:
            $rand_nom_text_8 = ' по цене ';
            break;
        case 8:
            $rand_nom_text_8 = ' стоимость ';
            break;
        case 9:
            $rand_nom_text_8 = ' ценой ';
            break;
        case 10:
            $rand_nom_text_8 = ' стоимостью ';
            break;
    }


$rand_nom_9 = rand(1,5);

switch ($rand_nom_9) {

    case 1:
        $rand_nom_text_9 = 'Helvetica, Аrial, sans-serif';
        break;
    case 2:
        $rand_nom_text_9 = 'sans-serif, Helvetica, Аrial';
        break;
    case 3:
        $rand_nom_text_9 = 'Аrial, sans-serif, Helvetica';
        break;
    case 4:
        $rand_nom_text_9 = 'Аrial, Helvetica, sans-serif';
        break;
    case 5:
        $rand_nom_text_9 = 'Helvetica, sans-serif, Аrial';
        break;
}

$rand_nom_10 = rand(1,5);

switch ($rand_nom_10) {

    case 1:
        $rand_nom_text_10 = '22px';
        break;
    case 2:
        $rand_nom_text_10 = '21px';
        break;
    case 3:
        $rand_nom_text_10 = '20px';
        break;
    case 4:
        $rand_nom_text_10 = '23px';
        break;
    case 5:
        $rand_nom_text_10 = '24px';
        break;
}

$rand_nom_11 = rand(1,4);

switch ($rand_nom_11) {

    case 1:
        $rand_nom_text_11 = '163';
        break;
    case 2:
        $rand_nom_text_11 = '164';
        break;
    case 3:
        $rand_nom_text_11 = '162';
        break;
    case 4:
        $rand_nom_text_11 = '161';
        break;
}


$rand_nom_12 = rand(1,3);

switch ($rand_nom_12) {

    case 1:
        $rand_nom_text_12 = '11px';
        break;
    case 2:
        $rand_nom_text_12 = '12px';
        break;
    case 3:
        $rand_nom_text_12 = '10px';
        break;
}

$rand_nom_13 = rand(1,3);

switch ($rand_nom_13) {

    case 1:
        $rand_nom_text_13 = '10px';
        break;
    case 2:
        $rand_nom_text_13 = '11px';
        break;
    case 3:
        $rand_nom_text_13 = '9px';
        break;
}

$rand_nom_14 = rand(1,3);

switch ($rand_nom_14) {

    case 1:
        $rand_nom_text_14 = '15px';
        break;
    case 2:
        $rand_nom_text_14 = '16px';
        break;
    case 3:
        $rand_nom_text_14 = '14px';
        break;
}

$rand_nom_15 = rand(1,3);

switch ($rand_nom_15) {

    case 1:
        $rand_nom_text_15 = '111';
        break;
    case 2:
        $rand_nom_text_15 = '112';
        break;
    case 3:
        $rand_nom_text_15 = '110';
        break;
}


$rand_nom_16 = rand(1,4);

switch ($rand_nom_16) {

    case 1:
        $rand_nom_text_16 = ' р.';
        break;
    case 2:
        $rand_nom_text_16 = ' руб.';
        break;
    case 3:
        $rand_nom_text_16 = ' рубл.';
        break;
    case 4:
        $rand_nom_text_16 = '.';
        break;
}

$rand_nom_17 = rand(1,4);

switch ($rand_nom_17) {

    case 1:
        $rand_nom_text_17 = ' р.';
        break;
    case 2:
        $rand_nom_text_17 = ' руб.';
        break;
    case 3:
        $rand_nom_text_17 = ' рубл.';
        break;
    case 4:
        $rand_nom_text_17 = '.';
        break;
}


$color_rand = rand(0, 9);

$body_3 = '<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>'.$name.'! '.$title_let.$site_name.' </title>
  
  <meta name="format-detection" content="telephone=no"> 
  
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  



  <style  type="text/css" >
  
    body {
    
      margin: 0;
      padding: 0;
      
      -ms-text-size-adjust: 99%;
      -webkit-text-size-adjust: 99%;
    }

    table {
    
      border-spacing: 0;
    }

    table td {
    
      border-collapse: collapse;
    }

img {
    
      -ms-interpolation-mode: bicubic;
    }


    table {
    
      mso-table-lspace: 1pt;
      
      mso-table-rspace: 1pt;
    }

    
    
  </style>
 

</head>



<body style="margin:1; padding:1;" bgcolor="#F0F1F'.$color_rand.'" leftmargin="1" topmargin="1" marginwidth="1" marginheight="1">

<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F'.$color_rand.'F1F0">

  <tr>
  
    <td align="center" valign="top" bgcolor="#F0F'.$color_rand.'F0" style="background-color: #F0F1F'.$color_rand.';">

      <br>


   
      <table border="0" width="'.$rand_nom_text_1.'"  cellpadding="0" cellspacing="0"  class="cont'.$style_1.'ain22" style="width: '.$rand_nom_text_1.'px; max-width: 599px">
        <tr>
        
          <td class="cont'.$style_1.'ain22-padding header" align="left" style="font-family: '.$rand_nom_text_9.'; 
          font-size: 25px; font-weight: bold; padding-bottom: 13px; 
          color:#DF47'.$color_rand. '5; padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'">
          
                  <span style="color: '.$rand_color_green.';">' .$name.'! '.$vid_rab.$rand_nom_text_8.$pay.$rand_nom_text_16.'</span><br>
                  
            '.$vibor_let.'
                 <br><span style="color: '.$rand_color_green.';">'.$vibor_akc.'</span><br>
            

          </td>
          
        </tr>
        
        <tr>
        
          <td class="content"  align="left" style=" padding-top: '.$rand_nom_text_12.'; padding-bottom: '.$rand_nom_text_12.'; 
          background-color:  #ffffff">

            <table width="'.$rand_nom_text_1.'" border="0" cellpadding="0" cellspacing="0" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_1.'px;">
            
              <tr>
              
                <td class="con3tent'.$style_1.'w43rapper" style="padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'">
                
                  <br>
                  
                  
                  <div class="title" style="font-family:'.$rand_nom_text_9.'; font-size: 17px; font-weight: '.$rand_nom_text_1.'; 
                  color: #374'.$color_rand.'52">'.$name.'! 
                  "<a href="'.$site_url.'">'.$site_name.'</a>"
                  '.$vibor_pris.'
                  
                  <a href="'.$site_url.'order.php" >'.$rand_nom_text_4.'</a>
                  
                  </div>
                  
                </td>
                
              </tr>
              
              <tr>
              
                <td class="coo'.$style_1.'332ls-wrapper" style="padding-left: '.$rand_nom_text_12.'; padding-right: '.$rand_nom_text_12.'">

                 


                  <table width="'.$rand_nom_text_2.'" align="left" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_2.'px;">
                  
                    <tr>
                    
                      <td class="coo'.$style_1.'332l"  style="padding-left: '.$rand_nom_text_13.'; padding-right: '.$rand_nom_text_13.'; padding-top: '.$rand_nom_text_14.'; 
                      padding-bottom: '.$rand_nom_text_13.'">
                      
                        <table class="im3g'.$style_1.'wrap25per">
                        
                          <tr>
                          
                            <td style="padding-bottom:'.$rand_nom_text_14.'"><a>
                            
                            <img alt="'.$img_text_1.'" src="'.$kart_1.'" border="0"  width="'.$rand_nom_text_11.'" height="'.$rand_nom_text_15.'" style="max-width:99%;" >
                            
                            </a>
                            
                            </td>
                            
                          </tr>
                          
                        </table>
                        
                        <table >
                        
                          <tr>
                          
                            <td class="sub'.$style_1.'3tit4tle" style="font-family: '.$rand_nom_text_9.'; font-size: 13px; 
                            line-height: '.$rand_nom_text_10.'; font-weight: '.$rand_nom_text_1.'; color: #24'.$color_rand.'9A1; padding-bottom:7px">'.$rand_nom_text_3_1.'
                            </td>
                          </tr>
                          
                        </table>
                        
                        <div class="coo'.$style_1.'332l-copy" style="font-family:'.$rand_nom_text_9.'; 
                        font-size: '.$rand_nom_text_12.'; line-height: 21px; text-align: left; color:#3333'.$color_rand.'2">'.$sut_kurs.$rand_nom_text_17.' <br>
                          '.$name.'!<br>'.$text_kurs.'
                          
                          
                        </div>
                        
                        <br>
                        
                      </td>
                      
                    </tr>
                    
                  </table>

                  <table width="'.$rand_nom_text_2.'" align="left" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_2.'px;">
                    <tr>
                    
                      <td class="coo'.$style_1.'332l"  style="padding-left: '.$rand_nom_text_13.'; padding-right: '.$rand_nom_text_13.' ;padding-top:'.$rand_nom_text_14.'; padding-bottom:'.$rand_nom_text_13.'">
                      
                        <table class="im3g'.$style_1.'wrap25per">
                          <tr>
                          
                            <td style="padding-bottom: '.$rand_nom_text_14.'"><img alt="'.$img_text_2.'" src="'.$kart_2.'" border="0" width="'.$rand_nom_text_11.'" height="'.$rand_nom_text_15.'" 
                            style="max-width: 99%; " ></td>
                          </tr>
                          
                        </table>
                        
                        <table >
                        
                          <tr>
                          
                            <td class="sub'.$style_1.'3tit4tle" style="font-family: '.$rand_nom_text_9.'; font-size: 13px; 
                            line-height: '.$rand_nom_text_10.'; font-weight: '.$rand_nom_text_1.'; color: #2'.$color_rand.'69A1; padding-bottom: 7px">'.$rand_nom_text_3_2.'</td>
                          </tr>
                          
                        </table>
                        
                        <div class="coo'.$style_1.'332l-copy" style="font-family: '.$rand_nom_text_9.'; font-size: '.$rand_nom_text_12.'; 
                        line-height: 21px; text-align: left; color:#333'.$color_rand.'32">'.$sut_dip.$rand_nom_text_17.'<br>
                          '.$name.'!<br>'.$text_dip.'
                          
                                                 </div>
                                                 
                        <br>
                        
                      </td>
                      
                    </tr>
                    
                  </table>
                

                  <table width="'.$rand_nom_text_2.'" align="left" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_2.'px;">
                  
                    <tr>
                    
                      <td class="coo'.$style_1.'332l"  style="padding-left: '.$rand_nom_text_13.'; padding-right: '.$rand_nom_text_13.'; padding-top: '.$rand_nom_text_14.'; 
                      padding-bottom: '.$rand_nom_text_13.'">
                      
                        <table class="im3g'.$style_1.'wrap25per">
                        
                          <tr>
                          
                            <td style="padding-bottom:'.$rand_nom_text_14.'"><img alt="'.$img_text_3.'" src="'.$kart_3.'" border="0"  width="'.$rand_nom_text_11.'" height="'.$rand_nom_text_15.'" 
                            style="max-width: 99%; ">
                            </td>
                            
                          </tr>
                          
                        </table>
                        
                        <table >
                        
                          <tr>
                          
                            <td class="sub'.$style_1.'3tit4tle" style="font-family:'.$rand_nom_text_9.';font-size: 13px; 
                            line-height: '.$rand_nom_text_10.'; font-weight: '.$rand_nom_text_1.';color:#2'.$color_rand.'69A1; padding-bottom: 7px">'.$rand_nom_text_3_3.'</td>
                          </tr>
                          
                        </table>
                        <div class="coo'.$style_1.'332l-copy" style="font-family: '.$rand_nom_text_9.'; font-size: '.$rand_nom_text_12.'; 
                        line-height: 21px; text-align: left; color:#33'.$color_rand.'332">'.$sut_mag.$rand_nom_text_17.'<br>
                          '.$name.'!<br>'.$text_mag.'
                        </div>
                        
                        <br>
                        
                      </td>
                      
                    </tr>
                    
                  </table>

               

                </td>
                
              </tr>
              <tr>
                <td class="cont'.$style_1.'ain22-padding header" align="left" style="font-family: '.$rand_nom_text_9.'; font-size: '.$rand_nom_text_10.'; 
                font-weight: bold; padding-bottom: 13px; color: #DF47'.$color_rand.'5;padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'">
                
                  <a href="'.$site_url.'order.php">'.$name.', '.$rand_nom_text_5.'</a><br>
                   '.$vibor_filial.'
                </td>
                
              </tr>
              
            </table>

          </td>
        </tr>
        <tr>
        
          <td class="cont'.$style_1.'ain22-padding footer-text" align="left" style="font-family: '.$rand_nom_text_9.'; 
          font-size: '.$rand_nom_text_12.'; line-height: '.$rand_nom_text_14.'; color:#aaaaa'.$color_rand.'; padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'">
            <br>
            
            <br>


            <strong><a href="'.$site_url.'" style="color:#aaaaa'.$color_rand.'">'.$site_name.'</a><br></strong><br>

            '.$name.'! '.$vibor_niz.'
            
            <span class="ios23'.$style_1.'foot434">
              '.$email.'<br>

            </span>

              
            <span class="ios23'.$style_1.'foot434">
              '.$name.'! <a href="'.$site_url.'otpiska.php" >'.$rand_nom_text_6.'</a>.<br>
            </span>

            ©'.$rand_nom_text_7.'-2017 <a href="'.$site_url.'" style="color: #aaaaa'.$color_rand.'">'.$site_name.'</a><br>
            
            

            <br>
            
            <br>
            

          </td>
          
        </tr>
        
      </table>
      


    </td>
    
  </tr>
  
</table>


</body>

</html>
';

