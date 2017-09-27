<?php

function rand_podstav_smv($text){
    $per_str_rep_smv = rand(1, 9);

switch ($per_str_rep_smv){
    case 1: $text = str_replace('х','x',$text);
        break;
    case 2: $text = str_replace('а','a',$text);
        break;
    case 3: $text = str_replace('р','p',$text);
        break;
    case 4: $text = str_replace('у','y',$text);
        break;
	case 5: $text = str_replace('к','k',$text);
        break;
    case 6: $text = str_replace('о','o',$text);
        break;
    case 7: $text = str_replace('е','e',$text);
        break;
    case 8: $text = str_replace('с','c',$text);
        break;
    case 9:
        break;
}

 return $text;
}




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

//Выбор Выполнение по низкой цене готово

$vibor_let_case = rand(1,3);

switch ($vibor_let_case) {
    case 1:
        $vibor_let = 'Прямо сейчас скидка на работу от 20%.';
        break;
    case 2:
        $vibor_let = 'Летняя акция удаляет 30% цены работы.';
        break;
    case 3:
        $vibor_let = 'Летний сезон понижает цену дипломных.';
        break;

}

$vibor_let = rand_podstav_smv($vibor_let);


//Без предоплаты сделано

$vibor_akc_case = rand(1,3);

switch ($vibor_akc_case) {
    case 1:
        $vibor_akc = 'Отправим на выполнение без предоплаты.';
        break;
    case 2:
        $vibor_akc = 'Бесплатное начало работы в июне и июле.';
        break;
    case 3:
        $vibor_akc = 'Без предоплаты начнем писать Ваш диплом.';
        break;
}

$vibor_akc = rand_podstav_smv($vibor_akc);

//Выбор сроков

$sut_kurs = rand(2,5);
$sut_dip = rand(6,11);
$sut_mag = rand(12,16);

//чек + договор сделано

$vibor_pris_case = rand(1,3);

switch ($vibor_pris_case) {
    case 1:
        $vibor_pris = ' предоставляет услуги написания дипломов и курсовых по договору с бесплатными доработками. Официально 
         зарегистрирована как российская образовательная компания. ';
        break;
    case 2:
        $vibor_pris = ' исправит тексты магистерских и дипломных работ без доплат по договору. Есть официальная регистрация 
         в перечне образовательных центров Российской Федерации. ';
        break;
    case 3:
        $vibor_pris = ' сделает заказ по лучшей цене, доработки - бесплатные. Авторов контролируют специалисты кандидаты наук 
         и доктора. Компания имеет юридическую регистрацию в России. ';
        break;

}

$vibor_pris = rand_podstav_smv($vibor_pris);


//Текст курсовой

$text_kurs_case = rand(1,3);

switch ($text_kurs_case) {

    case 1:
        $text_kurs = 'В нашем Центре курсовые пишутся по ГОСТ. Ведут процесс кандидаты и доктора соответствующей дисциплины.
        ';
        break;
    case 2:
        $text_kurs = 'Центр придерживается лучших традиций написания курсовой работы. Авторы пишут по методике Заказчика.
        ';
        break;
    case 3:
        $text_kurs = 'Все авторы Центра закончили ВУЗ и защитили научные степени. Они разбираются в предмете досконально.
        ';
        break;


}


$text_kurs = rand_podstav_smv($text_kurs);

//Текст дипломной

$text_dip_case = rand(1,3);

switch ($text_dip_case) {
    case 1:
        $text_dip = 'Для написания дипломных работ Компания выбирает лучших авторов. Требует не только степень, но и опыт.
        ';
        break;
    case 2:
        $text_dip = 'Центр осуществляет отбор правильных исполнителей, тех, кто написал не меньше сотни дипломов и курсовых.
        ';
        break;
    case 3:
        $text_dip = 'Менеджеры центра и авторы дипломных работ преподают в ВУЗах и отлично разбираются в написании диплома.
        ';
        break;


}

$text_dip = rand_podstav_smv($text_dip);

//Текст магистерской

$text_mag_case = rand(1,3);

switch ($text_mag_case) {
    case 1:
        $text_mag = 'Компания пишет диссертации по ГОСТ и методичке Заказчика. Весь путь написания контролирует доктор наук.
        ';
        break;
    case 2:
        $text_mag = 'Образовательная Компания нанимает только кандидатов и докторов, что гарантирует уникальность и качество.
        ';
        break;
    case 3:
        $text_mag = 'Центр отдает контроль за диссертациями нескольким менеджерам, за процессом следит кандидат или доктор.
        ';
        break;

}

$text_mag = rand_podstav_smv($text_mag);

//Выбор Скидки

$vibor_filial_case = rand(1,3);

switch ($vibor_filial_case) {
    case 1:
        $vibor_filial = 'Милости просим в наши офисы в Казани и Москве.';
        break;
    case 2:
        $vibor_filial = 'Филиалы для Вас открыты в Санкт-Петербурге и Уфе.';
        break;
    case 3:
        $vibor_filial = 'Есть пункты в регионах РФ, в том числе Крыму.';
        break;
}

$vibor_filial = rand_podstav_smv($vibor_filial);



//Выбор низа

$vibor_niz_case = rand(1, 3);

switch ($vibor_niz_case) {
    case 1:
        $vibor_niz = 'Уважаемые студенты, мы рады приветствовать Вас.<br>
        Наш центр был создан более 10 лет назад для того, <br>
        чтобы своевременно и профессионально оказывать студентам помощь в учебе. <br>
        Наша фирма – это зарегистрированное юридическое лицо, имеющее расчетный счет и офисы в удобных местах.<br>
';
        break;
    case 2:
        $vibor_niz = 'Мы выполняем курсовые работы не только для тех, кто учится в Москве, <br>
        но и для студентов из любых учебных заведений России, Белоруссии, Казахстана и пр. <br>
        Многие иногородние заказчики, обратившись к нам за помощью впервые, <br>
        впоследствии становились нашими постоянными клиентами и заказывали выпускные работы у нас, <br>
        потому что были довольны качеством предыдущих работ и уверены в нашей надежности и профессионализме.<br>
        
';
        break;
    case 3:
        $vibor_niz = 'Все работы в нашем центре выполняются на базе самой свежей и актуальной информации.<br> 
        Мы не используем работы из бесплатных интернет-коллекций и готовые работы других образовательных центров, <br>
        потому что дорожим клиентами и бережем свою репутацию. <br>
        Каждая работа проходит тщательную предварительную проверку на соответствие теме и требованиям студента <br>
        и только потом отдается либо пересылается заказчику.<br>
        Все доработки выполняются бесплатно и настолько быстро, насколько это возможно. <br>
';
        break;

}

$vibor_niz = rand_podstav_smv($vibor_niz);



$style_1 = rand(3234, 2343).'adfdpt';


function kart_vibor_1 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498362423&h=0PO-f6Vohj9HkW2UOUJKzg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTc5NjM2OTYmaD0ydkZRYzVLMERVQ3VuWEV2eW5YMk5nJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0TnpBbWFEMUtOV2hPUW5nemREVnBPRFZTTWpWS2NtUnBaVzlSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVYxSnRWVEZXUW1WRVNqUmhNbFp1VG14YVdWUnVUbFJTUjI4d1drVkZiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGExVjNWR3RPWVdJeFFsaGlSVGxoVFVSbk1GbHJaRk5pTURWVllVWldiRkp0ZDNsWk1XaFBUV3h3ZEZOVVRtRmhNRlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1ZsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxUXlWbk5XYWxaVllrVTFhRmxxUmtOV2JWWkpVMnhPVTFacldYZFdSbVIzVkRKS2MxUnVUbE5pYkZwWFZXcENZV0ZHWkVWVGJrNVVWakJzTmxsVldsTmhNVWw1Vkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U210Tk1uaFlXV3hvUTFWR2NGaGtSV1JQVW14S1ZsVXllRTloVmtwMVVXNW9XbGRJUWxCV1JFcExWakpLUlZSc2FGZGxhMXBSVjFaa2VrMVdUa2RXYmxKcVVtdEtWRlZzVWtaTmJGcEZVbXhPVldGNlFqTlVhMmh6VmtkS1dWVnNRbGRoYTFwNVdsVmFVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498362447&h=HQLlkiRMeFV37JFs1dpsqg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTc5NjM2OTYmaD0ydkZRYzVLMERVQ3VuWEV2eW5YMk5nJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0TnpBbWFEMUtOV2hPUW5nemREVnBPRFZTTWpWS2NtUnBaVzlSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVYxSnRWVEZXUW1WRVNqUmhNbFp1VG14YVdWUnVUbFJTUjI4d1drVkZiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGExVjNWR3RPWVdJeFFsaGlSVGxoVFVSbk1GbHJaRk5pTURWVllVWldiRkp0ZDNsWk1XaFBUV3h3ZEZOVVRtRmhNRlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1ZsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxUXlWbk5XYWxaVllrVTFhRmxxUmtOV2JWWkpVMnhPVTFacldYZFdSbVIzVkRKS2MxUnVUbE5pYkZwWFZXcENZV0ZHWkVWVGJrNVVWakJzTmxsVldsTmhNVWw1Vkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U210Tk1uaFlXV3hvUTFWR2NGaGtSV1JQVW14S1ZsVXllRTloVmtwMVVXNW9XbGRJUWxCV1JFcExWakpLUlZSc2FGZGxhMXBSVjFaa2VrMVdUa2RXYmxKcVVtdEtWRlZzVWtaTmJGcEZVbXhPVldGNlFqTlVhMmh6VmtkS1dWVnNRbGRoYTFwNVdsVmFVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498362477&h=60wGP9d2UQAEn-lbapTOSA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTc5NjM3MjUmaD05NXBPMU9EaGI1d1lBZW14QVVxMWtRJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0TnpBbWFEMUtOV2hPUW5nemREVnBPRFZTTWpWS2NtUnBaVzlSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVYxSnRWVEZXUW1WRVNqUmhNbFp1VG14YVdWUnVUbFJTUjI4d1drVkZiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGExVjNWR3RPWVdJeFFsaGlSVGxoVFVSbk1GbHJaRk5pTURWVllVWldiRkp0ZDNsWk1XaFBUV3h3ZEZOVVRtRmhNRlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1ZsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxUXlWbk5XYWxaVllrVTFhRmxxUmtOV2JWWkpVMnhPVTFacldYZFdSbVIzVkRKS2MxUnVUbE5pYkZwWFZXcENZV0ZHWkVWVGJrNVVWakJzTmxsVldsTmhNVWw1Vkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U210Tk1uaFlXV3hvUTFWR2NGaGtSV1JQVW14S1ZsVXllRTloVmtwMVVXNW9XbGRJUWxCV1JFcExWakpLUlZSc2FGZGxhMXBSVjFaa2VrMVdUa2RXYmxKcVVtdEtWRlZzVWtaTmJGcEZVbXhPVldGNlFqTlVhMmh6VmtkS1dWVnNRbGRoYTFwNVdsVmFVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';

    switch ($var) {
        case 1: $var_2 = $img_mail_1;
            break;
        case 2: $var_2 = $img_mail_2;
            break;
        case 3: $var_2 = $img_mail_3;
            break;

    }

return $var_2;
}

function kart_vibor_2 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498362626&h=jxw6T3ZqvZh_qQv7UlF97w&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTc5NjM3MjUmaD04OUx5UzZzSnNPX0F0Q2RLeEZkejFBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T1RrbWFEMUNUV2RIVkVsTFl6aFplWGRzWW5kc1JqVnRSbFZuSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZrWnZWMnN3TTA1SVVtOU9WR2hoWTBWek1sUnNXVFJoUlRGU1VXeEZiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGEwVjNWRzFzWVdJeFFsaFRhMDVvVmxWd1dWUXhaRmRSTVZwV1kwVTVWVlY2UlhoYVIzUnJaREZHV0ZWcVNsZE5SVlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1ZsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxVkdTa1pXVkVKVlZtczFhRmxxUmtOV1ZscFZWV3M1VGxKWGRETldiRkpIWVRKSmVGWnNaRlJpVlZwVVdWY3hOR014V2taaFNHUnJWbTVDZUZWWE1XRlVhekYwVkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U214U1JuQldWakJrVTFWV1duRlNhMXBPVW14S2VWWlhlSGRVTVVwVlZsUktWazFxUm5aV1IzaGFaVVphVlZGc1ZtbGlhMHBFVjJ0U1FtVkZOWFJTYWxwVllYcHNWRlJWYUVOa2JGbDRXVE5vVjJKV1draFpNR2hUVmtkS1dXRkZPVnBpUm5BeldXcEdVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498362632&h=WEMSZvsLF2t_WGFnYfaKAQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTc5NjM2NjgmaD1mb0YzaXdtNXZ0THJEcmRtcGRLa2NRJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T1RrbWFEMUNUV2RIVkVsTFl6aFplWGRzWW5kc1JqVnRSbFZuSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZrWnZWMnN3TTA1SVVtOU9WR2hoWTBWek1sUnNXVFJoUlRGU1VXeEZiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGEwVjNWRzFzWVdJeFFsaFRhMDVvVmxWd1dWUXhaRmRSTVZwV1kwVTVWVlY2UlhoYVIzUnJaREZHV0ZWcVNsZE5SVlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1ZsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxVkdTa1pXVkVKVlZtczFhRmxxUmtOV1ZscFZWV3M1VGxKWGRETldiRkpIWVRKSmVGWnNaRlJpVlZwVVdWY3hOR014V2taaFNHUnJWbTVDZUZWWE1XRlVhekYwVkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U214U1JuQldWakJrVTFWV1duRlNhMXBPVW14S2VWWlhlSGRVTVVwVlZsUktWazFxUm5aV1IzaGFaVVphVlZGc1ZtbGlhMHBFVjJ0U1FtVkZOWFJTYWxwVllYcHNWRlJWYUVOa2JGbDRXVE5vVjJKV1draFpNR2hUVmtkS1dXRkZPVnBpUm5BeldXcEdVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498362637&h=v06Kxco5YYImVH-NzO4FKQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTc5NjM2OTYmaD0xcGFwcHNVTnYyZVo2cmtMS3NDS1lRJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T0RnbWFEMXlUV05PU2toeWVuTmZRWFV5YVd4SU56VklNbE5uSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZHZzJWMVJhYlZWSVRUSlRSRnB0Vkc1Vk5FMXRXbmRQUjAwellrVkZiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGExVjNWR3RPWVdJeFFsZGlNM0JxWWxSb05sVnJaRmRTVm1SSlUydHdhVlpzU2pGVmFrSTBWa1pLV1ZKdGRHeFdhMVowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1ZsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxVkdTa1pXVkVKVlZtczFhRmxxUmtOV1ZscFZWV3M1VGxKWGRETldiRkpIWVRKSmVGWnNaRlJpVlZwVVdWY3hOR014V2taaFNHUnJWbTVDZUZWWE1XRlVhekYwVkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U214U1JuQldWakJrVTFWV1duRlNhMXBPVW14S2VWWlhlSGRVTVVwVlZsUktWazFxUm5aV1IzaGFaVVphVlZGc1ZtbGlhMHBFVjJ0U1FtVkZOWFJTYWxwVllYcHNWRlJWYUVOa2JGbDRXVE5vVjJKV1draFpNR2hUVmtkS1dXRkZPVnBpUm5BeldXcEdVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';

    switch ($var) {
        case 1: $var_2 = $img_mail_1;
            break;
        case 2: $var_2 = $img_mail_2;
            break;
        case 3: $var_2 = $img_mail_3;
            break;
    }

    return $var_2;
}

function kart_vibor_3 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498362626&h=qDVy_htyiQbEl0Ds5lWr4A&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTc5NjM2NjgmaD1hM2xkY1FMdlVlQ0RFZ3dURF9IUGJnJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T1RrbWFEMUtiMDR0TUZGVVVTMWtTRVUwY1VVNGJtMVliMmxSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZGRjVXa1JCTW1Kc1FucFJWMVpRVFVjNWFsUkZlR3haYkZwdFpVaGpiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGEwVjNWRzFzWVdJeFFsZFBWa1pyVFVWck1WbHRkR3RVVlRWMFRsVjRWRkpZYUUxV1JXaExWVlphYzA5WVRsVk5WVlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1VsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxVkdTa1pOU0hCVlZsVTFhRmxxUmtOWFIxWkpZa1pXVjFaNmFETlhhMUpQVldzMVYyTkZaRlZpYmtKVFZGWmFZVmxXYkhSalJWcHNZa1phV2xkdWNFOVVNREYwVkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U214U1JuQldWbXRhWVZsV1VsaGtTR1JxWWtkU1dGZHJXbXRoUlRGRlZXcFdWMDFYYUhwV1J6RlhZekpPU1ZGc1ZsZGlSWEF5VjFaU1FrMVhVa2RhUm14cVVtdEtXRlZ0TVROTmJGcEZVV3hPVWsxcmNFZFViRlpYVmxaYVIxTnNRbGRoYTFwNVZGVmFVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498362632&h=mvwzOqNlrO-WNowBmoiuAg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTc5NjM3MjUmaD1lZkp4cEFCZHpsaW8zYmZidFM1RmN3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T1RrbWFEMUtiMDR0TUZGVVVTMWtTRVUwY1VVNGJtMVliMmxSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZGRjVXa1JCTW1Kc1FucFJWMVpRVFVjNWFsUkZlR3haYkZwdFpVaGpiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGEwVjNWRzFzWVdJeFFsZFBWa1pyVFVWck1WbHRkR3RVVlRWMFRsVjRWRkpZYUUxV1JXaExWVlphYzA5WVRsVk5WVlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1VsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxVkdTa1pOU0hCVlZsVTFhRmxxUmtOWFIxWkpZa1pXVjFaNmFETlhhMUpQVldzMVYyTkZaRlZpYmtKVFZGWmFZVmxXYkhSalJWcHNZa1phV2xkdWNFOVVNREYwVkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U214U1JuQldWbXRhWVZsV1VsaGtTR1JxWWtkU1dGZHJXbXRoUlRGRlZXcFdWMDFYYUhwV1J6RlhZekpPU1ZGc1ZsZGlSWEF5VjFaU1FrMVhVa2RhUm14cVVtdEtXRlZ0TVROTmJGcEZVV3hPVWsxcmNFZFViRlpYVmxaYVIxTnNRbGRoYTFwNVZGVmFVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498362637&h=m37uRBGoBRNDU8TgN_yfgw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTc5NjM2OTYmaD1fMmV3Y0NMMmd3V19LdnlXMFRlc2lnJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T1RrbWFEMUtiMDR0TUZGVVVTMWtTRVUwY1VVNGJtMVliMmxSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZGRjVXa1JCTW1Kc1FucFJWMVpRVFVjNWFsUkZlR3haYkZwdFpVaGpiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGEwVjNWRzFzWVdJeFFsZFBWa1pyVFVWck1WbHRkR3RVVlRWMFRsVjRWRkpZYUUxV1JXaExWVlphYzA5WVRsVk5WVlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1VsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxVkdTa1pOU0hCVlZsVTFhRmxxUmtOWFIxWkpZa1pXVjFaNmFETlhhMUpQVldzMVYyTkZaRlZpYmtKVFZGWmFZVmxXYkhSalJWcHNZa1phV2xkdWNFOVVNREYwVkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U214U1JuQldWbXRhWVZsV1VsaGtTR1JxWWtkU1dGZHJXbXRoUlRGRlZXcFdWMDFYYUhwV1J6RlhZekpPU1ZGc1ZsZGlSWEF5VjFaU1FrMVhVa2RhUm14cVVtdEtXRlZ0TVROTmJGcEZVV3hPVWsxcmNFZFViRlpYVmxaYVIxTnNRbGRoYTFwNVZGVmFVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';

    switch ($var) {
        case 1: $var_2 = $img_mail_1;
            break;
        case 2: $var_2 = $img_mail_2;
            break;
        case 3: $var_2 = $img_mail_3;
            break;
    }

    return $var_2;
}

// Выбор картинок
$kart_1 = rand(1, 1000000)%3+1;
$kart_2 = rand(1, 1000000)%3+1;
$kart_3 = rand(1, 1000000)%3+1;


$kart_1 = kart_vibor_1($kart_1);
$kart_2 = kart_vibor_2($kart_2);
$kart_3 = kart_vibor_3($kart_3);


$arr_img_text = Array("diploma", "sheepskin", "patent", "coursework", "essay", "outline", "study", "experience", " experiment",
    "etude", "study", "essay", "attempt", "try", "effort", "endeavor", "trial", "sketch", "outline", "draft", "drawing", "rough draft",
"try", "sample", "test", "trial", "probe", "article", "paper", "item", "clause", "entry", "contribution",
    "product", "article", "fabric", "brummagem", "job", "make",
"thing", "article", "object", "work", "entity", "shebang",
    "subject", "thing", "object", "matter", "article", "theme", "paragraph", "item", "point", "clause", "station",
"control", "certificate", "evidence", "testimony", "witness", "document", "expose", "subject", "put",
"process", "subordinate", "submit", "subject", "subdue", "subjugate", "conquer",
"topic", "theme", "subject", "text", "chapter", "burden", '100',
'101', '100',
'101',
'102',
'103',
'104',
'105',
'106',
'107',
'108',
'109',
'110',
'111',
'112',
'113',
'114',
'115',
'116',
'117',
'118',
'119',
'120',
'121',
'122',
'123',
'124',
'125',
'126',
'127',
'128',
'129',
'130',
'131',
'132',
'133',
'134',
'135',
'136',
'137',
'138',
'139',
'140',
'141',
'142',
'143',
'144',
'145',
'146',
'147',
'148',
'149',
'150',
'151',
'152',
'153',
'154',
'155',
'156',
'157',
'158',
'159',
'160',
'161',
'162',
'163',
'164',
'165',
'166',
'167',
'168',
'169',
'170',
'171',
'172',
'173',
'174',
'175',
'176',
'177',
'178',
'179',
'180',
'181',
'182',
'183',
'184',
'185',
'186',
'187',
'188',
'189',
'190',
'191',
'192',
'193',
'194',
'195',
'196',
'197',
'198',
'199',
'200',
'201',
'202',
'203',
'204',
'205',
'206',
'207',
'208',
'209',
'210',
'211',
'212',
'213',
'214',
'215',
'216',
'217',
'218',
'219',
'220',
'221',
'222',
'223',
'224',
'225',
'226',
'227',
'228',
'229',
'230',
'231',
'232',
'233',
'234',
'235',
'236',
'237',
'238',
'239',
'240',
'241',
'242',
'243',
'244',
'245',
'246',
'247',
'248',
'249',
'250',
'251',
'252',
'253',
'254',
'255',
'256',
'257',
'258',
'259',
'260',
'261',
'262',
'263',
'264',
'265',
'266',
'267',
'268',
'269',
'270',
'271',
'272',
'273',
'274',
'275',
'276',
'277',
'278',
'279',
'280',
'281',
'282',
'283',
'284',
'285',
'286',
'287',
'288',
'289',
'290',
'291',
'292',
'293',
'294',
'295',
'296',
'297',
'298',
'299',
'300',
'301',
'302',
'303',
'304',
'305',
'306',
'307',
'308',
'309',
'310',
'311',
'312',
'313',
'314',
'315',
'316',
'317',
'318',
'319',
'320',
'321',
'322',
'323',
'324',
'325',
'326',
'327',
'328',
'329',
'330',
'331',
'332',
'333',
'334',
'335',
'336',
'337',
'338',
'339',
'340',
'341',
'342',
'343',
'344',
'345',
'346',
'347',
'348',
'349',
'350',
'351',
'352',
'353',
'354',
'355',
'356',
'357',
'358',
'359',
'360',
'361',
'362',
'363',
'364',
'365',
'366',
'367',
'368',
'369',
'370',
'371',
'372',
'373',
'374',
'375',
'376',
'377',
'378',
'379',
'380',
'381',
'382',
'383',
'384',
'385',
'386',
'387',
'388',
'389',
'390',
'391',
'392',
'393',
'394',
'395',
'396',
'397',
'398',
'399',
'400',
'401',
'402',
'403',
'404',
'405',
'406',
'407',
'408',
'409',
'410',
'411',
'412',
'413',
'414',
'415',
'416',
'417',
'418',
'419',
'420',
'421',
'422',
'423',
'424',
'425',
'426',
'427',
'428',
'429',
'430',
'431',
'432',
'433',
'434',
'435',
'436',
'437',
'438',
'439',
'440',
'441',
'442',
'443',
'444',
'445',
'446',
'447',
'448',
'449',
'450',
'451',
'452',
'453',
'454',
'455',
'456',
'457',
'458',
'459',
'460',
'461',
'462',
'463',
);

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

$rand_nom_3 = rand(1,8);

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
    case 6:
        $rand_nom_text_3_1 = 'Семестровая';
        $rand_nom_text_3_2 = 'ВКР';
        $rand_nom_text_3_3 = 'Диссер';
        break;
    case 7:
        $rand_nom_text_3_1 = 'Семестр-проект';
        $rand_nom_text_3_2 = 'Выпускная';
        $rand_nom_text_3_3 = 'Магистратура';
        break;
    case 8:
        $rand_nom_text_3_1 = 'Курс';
        $rand_nom_text_3_2 = 'Выпускная работа';
        $rand_nom_text_3_3 = 'Магистер';
        break;
}

$rand_nom_text_3_1 = rand_podstav_smv($rand_nom_text_3_1);
$rand_nom_text_3_2 = rand_podstav_smv($rand_nom_text_3_2);
$rand_nom_text_3_3 = rand_podstav_smv($rand_nom_text_3_3);




$rand_nom_4 = rand(1,5);

switch ($rand_nom_4) {

    case 1:
        $rand_nom_text_4 = 'Сделать заказ';
        break;
    case 2:
        $rand_nom_text_4 = 'Заказать';
        break;
    case 3:
        $rand_nom_text_4 = 'Перейти к заказу';
        break;
    case 4:
        $rand_nom_text_4 = 'Форма заказа';
        break;
    case 5:
        $rand_nom_text_4 = 'Оформить заказы';
        break;
}

$rand_nom_text_4 = rand_podstav_smv($rand_nom_text_4);


$rand_nom_5 = rand(1,5);

switch ($rand_nom_5) {

    case 1:
        $rand_nom_text_5 = 'сделать заказ';
        break;
    case 2:
        $rand_nom_text_5 = 'заказать';
        break;
    case 3:
        $rand_nom_text_5 = 'перейти на сайт';
        break;
    case 4:
        $rand_nom_text_5 = 'форма заказа';
        break;
    case 5:
        $rand_nom_text_5 = 'оформить через портал';
        break;
}

$rand_nom_text_5 = rand_podstav_smv($rand_nom_text_5);

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

$rand_nom_text_6 = rand_podstav_smv($rand_nom_text_6);

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


$rand_nom_text_8 = rand_podstav_smv($rand_nom_text_8);


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
        $rand_nom_text_16 = ' рублей.';
        break;
    case 4:
        $rand_nom_text_16 = '.';
        break;
}

$rand_nom_text_16 = rand_podstav_smv($rand_nom_text_16);

$rand_nom_17 = rand(1,5);

switch ($rand_nom_17) {

    case 1:
        $rand_nom_text_17 = ' д.';
        break;
    case 2:
        $rand_nom_text_17 = ' дн.';
        break;
    case 3:
        $rand_nom_text_17 = ' с.';
        break;
    case 4:
        $rand_nom_text_17 = ' сут.';
        break;
    case 5:
        $rand_nom_text_17 = ' суток';
        break;
}

$rand_nom_text_17 = rand_podstav_smv($rand_nom_text_17);


$color_rand = rand(0, 9);

$body_2 = '<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
          
                  <span style="color: '.$rand_color_green.';">' .$name.'!<br>'.$vid_rab.$rand_nom_text_8.$pay.$rand_nom_text_16.'</span><br>
                  
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