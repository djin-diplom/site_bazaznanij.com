<?php

$main_name =  "Bazazachet.ru";
$email2 =  "bazazachet@gmail.com";

$url_town_piter = 'http://'.$main_name.'/';
$url_town_moscow = 'http://moscow.'.$main_name.'/';
$url_town_kazan = 'http://kazan.'.$main_name.'/';
$url_town_novosibirsk = 'http://novosibirsk.'.$main_name.'/';
$url_town_ufa = 'http://ufa.'.$main_name.'/';
$vremia_raboti = "С 9:00 до 19:00, выходной воскресенье";
$site_phone = '8 (800) 411-32-26';


//$img_path_1 = "./index_files/1_logo_55 (2).png";
//$img_path_2 = "1_logo_55 (2).png";
$img_path_1 = "./index_files/1_logo.jpg";
$img_path_2 = "1_logo.jpg";

$date_site = date_create('2017-11-01');


$site_otzv_name_1 = "Студенческие работы";
$site_otzv_url_1 = "http://vivamagister.ru/1001-bazazachet_ru.html";
$site_otzv_name_2 = "Студенческие отзывы";
$site_otzv_url_2 = "http://studotzyv.16mb.com/raiting/74/bazazachet/";


$site_name = "Bazazachet.ru";//'Vivastudent.ru';
$site_name_2 = "Bazazachet";//'www.vivastudent.ru';
$site_name_3 = "Bazazachet_ru";//'vivastudent.ru';
$site_name_4 = "Bazazachet.Ru";//'vivastudent.ru';
$site_name_5 = "BazaZachet";//'www.vivastudent.ru';
$site_name_6 = "BazaZachet_Ru";//'vivastudent.ru';
    $password = '111qwaszx';
    $site_url = "http://".$main_name."/";
    $email = "zakaz@".$main_name;
    $email_1 = "advertisement@".$main_name;// +
    $email_2 = "advertising@".$main_name;// +
    $email_3 = "promotion@".$main_name;// +
    $email_4 = "advt@".$main_name;// +
    $email_5 = "public@".$main_name;// +
    $email_6 = "zakaz@".$main_name;// +
    $email_7 = "info@".$main_name;// +
    $email_8 = "inform@".$main_name;// +
    $email_9 = "information@".$main_name;// +
    $email_10 = "order@".$main_name;// +
    $email_11 = "promo@".$main_name;// +
    $email_12 = "publicity@".$main_name;// +
    $email3 = "info@".$main_name;
$adres = "г. Санкт-Петербург, Каменноостровский пр-кт, <br>дом № 27, oф. 144-145";
$url_adres_yandex = "https://yandex.ru/maps/-/C6dUMUL2";
$url_adres_yandex_frame = "<iframe src=\"https://api-maps.yandex.ru/frame/v1/-/C6dUMUL2\" width=\"560\" height=\"400\" frameborder=\"0\"></iframe>";
$url_oplata = "https://money.yandex.ru/to/410015026519581";

$main_name_temp = $main_name;

if (@$town == 'kazan') {
    $main_name = "Kazan.".$main_name;
    $password = '111qwaszx';
    $site_url = "http://".$main_name."/";
    $email = "zakaz@".$main_name;
    $email_1 = "advertisement@".$main_name;
    $email_2 = "advertising@".$main_name;
    $email_3 = "promotion@".$main_name;
    $email_4 = "advt@".$main_name;
    $email_5 = "adt@".$main_name;
    $email_6 = "zakaz@".$main_name;
    $email_7 = "info@".$main_name;
    $email_8 = "inform@".$main_name;
    $email_9 = "information@".$main_name;
    $email_10 = "order@".$main_name;
    $email_11 = "ad@".$main_name;
    $email_12 = "publicity@".$main_name;
    //$email2 = $main_name_temp."@gmail.com";
    $email3 = "info@".$main_name;
    $adres = "г. Казань, 9 Мая ул, <br>дом № 1, oф. 55";
    $url_adres_yandex = "https://yandex.ru/maps/-/CZXOeXIJ";
    $url_adres_yandex_frame = "<iframe src=\"https://api-maps.yandex.ru/frame/v1/-/CZXOeXIJ\" width=\"560\" height=\"400\" frameborder=\"0\"></iframe>";

}

if (@$town == 'moscow') {
    $main_name = "Moscow.".$main_name;
    //$site_name = 'Вива-Студентс.ру';
    $password = '111qwaszx';
    $site_url = "http://".$main_name."/";
    $email = "zakaz@".$main_name;
    $email_1 = "advertisement@".$main_name;
    $email_2 = "advertising@".$main_name;
    $email_3 = "promotion@".$main_name;
    $email_4 = "advt@".$main_name;
    $email_5 = "adt@".$main_name;
    $email_6 = "zakaz@".$main_name;
    $email_7 = "info@".$main_name;
    $email_8 = "inform@".$main_name;
    $email_9 = "information@".$main_name;
    $email_10 = "order@".$main_name;
    $email_11 = "ad@".$main_name;
    $email_12 = "publicity@".$main_name;
    //$email2 = $main_name_temp."@gmail.com";
    $email3 = "info@".$main_name;
    $adres = "г. Москва, Таганская площадь, <br>д. 12, оф. 204-205";
    //$adres = "г. Москва, ул. Пушкина, <br>д. 15, оф. 144-145";
    $url_adres_yandex = "https://yandex.ru/maps/-/CZXOiUMW";
    $url_adres_yandex_frame = "<iframe src=\"https://api-maps.yandex.ru/frame/v1/-/CZXOiUMW\" width=\"560\" height=\"400\" frameborder=\"0\"></iframe>";

}

if (@$town == 'novosibirsk') {
    $main_name = "Novosibirsk.".$main_name;
    //$site_name = 'Вива-Студентс.ру';
    $password = '111qwaszx';
    $site_url = "http://".$main_name."/";
    $email = "zakaz@".$main_name;
    $email_1 = "advertisement@".$main_name;
    $email_2 = "advertising@".$main_name;
    $email_3 = "promotion@".$main_name;
    $email_4 = "advt@".$main_name;
    $email_5 = "adt@".$main_name;
    $email_6 = "zakaz@".$main_name;
    $email_7 = "info@".$main_name;
    $email_8 = "inform@".$main_name;
    $email_9 = "information@".$main_name;
    $email_10 = "order@".$main_name;
    $email_11 = "ad@".$main_name;
    $email_12 = "publicity@".$main_name;
    //$email2 = $main_name_temp."@gmail.com";
    $email3 = "info@".$main_name;
    $adres = "г. Новосибирск, проспект Димитрова, <br>дом № 2, oф. 153";
    $url_adres_yandex = "https://yandex.ru/maps/-/CZXOiN2V";
    $url_adres_yandex_frame = "<iframe src=\"https://api-maps.yandex.ru/frame/v1/-/CZXOiN2V\" width=\"560\" height=\"400\" frameborder=\"0\"></iframe>";

}

if (@$town == 'ufa') {
    $main_name = "Ufa.".$main_name;
    //$site_name = 'Вива-Студентс.ру';
    $password = '111qwaszx';
    $site_url = "http://".$main_name."/";
    $email = "zakaz@".$main_name;
    $email_1 = "advertisement@".$main_name;
    $email_2 = "advertising@".$main_name;
    $email_3 = "promotion@".$main_name;
    $email_4 = "advt@".$main_name;
    $email_5 = "adt@".$main_name;
    $email_6 = "zakaz@".$main_name;
    $email_7 = "info@".$main_name;
    $email_8 = "inform@".$main_name;
    $email_9 = "information@".$main_name;
    $email_10 = "order@".$main_name;
    $email_11 = "ad@".$main_name;
    $email_12 = "publicity@".$main_name;

    $email3 = "info@".$main_name;
    $adres = "г. Уфа, Пархоменко ул, <br>дом № 151, oф. 204";
    $url_adres_yandex = "https://yandex.ru/maps/-/CBUR6US-TA";
    $url_adres_yandex_frame = "<iframe src=\"https://yandex.ru/map-widget/v1/-/CBUR6US-TA\" width=\"560\" height=\"400\" frameborder=\"0\"></iframe>";

}