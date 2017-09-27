<?php

function rand_podstav_smv($text){
    $per_str_rep_smv = rand(1, 8);

switch ($per_str_rep_smv){
    case 1: $text = str_replace('х','x',$text);
        break;
    case 2: $text = str_replace('а','a',$text);
        break;
    case 3: $text = str_replace('р','p',$text);
        break;
    case 4: $text = str_replace('у','y',$text);
        break;
    case 5: $text = str_replace('о','o',$text);
        break;
    case 6: $text = str_replace('е','e',$text);
        break;
    case 7: $text = str_replace('с','c',$text);
        break;
    case 8:
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

$vibor_let_case = rand(1,2);


$date = date("Y-m-d");//date("Y-m-d H:i:s");
$skidka = rand(10, 30);

switch ($vibor_let_case) {
    case 1:
      $vibor_let = 'Скидка от '.$date.' более '.$skidka.'%.';
       break;
    case 2:
      $vibor_let = 'Снижение цен с '.$date.' не менее '.$skidka.' %.';
       break;
}

$vibor_let = rand_podstav_smv($vibor_let);


//Без предоплаты сделано

$vibor_akc_case = rand(1,2);

$day = date("m");
$day_2 = date("m-d");
$day_3 = date("d");

$predoplata = rand(0, 10);

switch ($vibor_akc_case) {
    case 1:
        $vibor_akc = 'С '.$day_2.' начальная плата отменяется.';
        break;
    case 2:
        $vibor_akc = 'В августе с '.$day_3.' предоплаты не будет.';
        break;
}

$vibor_akc = rand_podstav_smv($vibor_akc);

//Выбор сроков

$sut_kurs = rand(2,5);
$sut_dip = rand(6,11);
$sut_mag = rand(12,16);

//чек + договор сделано

$vibor_pris_case = rand(1,2);

$vibor_pris_case_2 = rand(1,2);

switch ($vibor_pris_case_2) {
    case 1:
        $vibor_pris_2 = 'Старейшая компания рунета. ';
        break;
    case 2:
        $vibor_pris_2 = ' Надежная компания с 1999 года.';
        break;
}

switch ($vibor_pris_case) {
    case 1:
        $vibor_pris = ' выполняет бесплатно правки по замечаниям преподавателя, ценит лояльность заказчиков. '.$vibor_pris_2;
        break;
    case 2:
        $vibor_pris = ' делает без доплат исправления по правкам руководителя, старается угодить клиентам. '.$vibor_pris_2;
        break;

}

$vibor_pris = rand_podstav_smv($vibor_pris);


//Текст курсовой

$text_kurs_case = rand(1,2);

$ocenka = rand(450,490)/100;

switch ($text_kurs_case) {

    case 1:
        $text_kurs = 'Средний балл работ '.$ocenka;
        break;
    case 2:
        $text_kurs = 'Авторы пишут в среднем на '.$ocenka;
        break;



}


$text_kurs = rand_podstav_smv($text_kurs);

//Текст дипломной

$kol_rabot = rand(8000,13400);

$text_dip_case = rand(1,2);

switch ($text_dip_case) {
    case 1:
        $text_dip = 'На '.$day_2.' выполнено '.$kol_rabot.' заказов';
        break;
    case 2:
        $text_dip = 'К '.$day_3.' числу сделано '.$kol_rabot.' заказов';
        break;


}

$text_dip = rand_podstav_smv($text_dip);

//Текст магистерской

$text_mag_case = rand(1,2);

$kol_kand = rand(25, 65);

switch ($text_mag_case) {
    case 1:
        $text_mag = 'У нас на '.$day.' месяц более '.$kol_kand.' канд. наук';
        break;
    case 2:
        $text_mag = 'На '.$day_3.'-е в компании не менее '.$kol_kand.' канд. наук';
        break;
}

$text_mag = rand_podstav_smv($text_mag);

//Выбор Скидки

$vibor_filial_case = rand(1,2);

require("town.php");

$town_mass = array_rand($town, 2);

switch ($vibor_filial_case) {
    case 1:
        $vibor_filial = 'Города с офисами: '.$town[$town_mass[0]].', Москва и '.$town[$town_mass[1]];
        break;
    case 2:
        $vibor_filial = 'Филиалы в городах : '.$town[$town_mass[0]].', СПБ и '.$town[$town_mass[1]];
        break;
}

$vibor_filial = rand_podstav_smv($vibor_filial);



//Выбор низа

//$vibor_niz_case = rand(1, 2);

//switch ($vibor_niz_case) {
//    case 1:
//        $vibor_niz = 'Заказав написание реферата, курсовой дипломной или кандидатской в нашей компании, Вы:<br>
//        Имеете на руках Wordовский файл с работой, оформленной согласно ГОСТу или требованиям вашего ВУЗа,<br>
//        Спокойны за Антиплагиат, т.к. в работе не менее 85% оригинального текста,<br>
//        Гарантировано избавлены от несдачи, поскольку все замечания вашего научного исправлены.<br>
//';
//        break;
//    case 2:
 //       $vibor_niz = 'Работы пишутся на самом деле, а не собираются методом копи-паста из Интернета.<br>
 //       Авторами работ являются практикующие специалисты в своей области – адвокаты, экономитсты, политологи, инженеры,<br>
  //      психологи, научные сотрудники, педагоги.<br>
  //      Не студенты и не копирайтеры на подработке.<br>
//';
 //       break;
//}

//$vibor_niz = rand_podstav_smv($vibor_niz);

$vibor_niz = $vibor_let.'<br>'.$vibor_akc.'<br>Компания '.$vibor_pris.'<br>'.$vibor_filial.'<br>';



$style_1 = rand(3234, 2343).'adfdpt';


function kart_vibor_1 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1502179933&h=3EEvjsQivZ6HnwDWaJLgMA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE1MDIxNzk4MTgmaD1FUFg3YnRHdDVHRmdxbjBRd1loTm5BJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T1RrbWFEMXdYelF6T0Y5RmVVdENjR0kxYzNOd1ZYVjNORUpSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZrSnZUVlJqZVdKdVRucGlXR2Q0WTFkc1ExSlZUbFJhV0ZaelZtNWpiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGExVXhWRzVzWVdJeFFsWmpSVTVYVTBWRk1WWlZaRzlYYlVwMFRsUlNhbFpyUlRCV1JscGhWakpHTmxOdGVHeFNhMVowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1ZsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxUXlWbk5XYWxaVllrVTFhRmxxUmtOV2JWWkpVMnhPVTFacldYZFdSbVIzVkRKS2MxUnVUbE5pYkZwWFZXcENZV0ZHWkVWVGJrNVVWakJzTmxsVldsTmhNVWw1Vkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U210Tk1uaFlXV3hvUTFWR2NGaGtSV1JQVW14S1ZsVXllRTloVmtwMVVXNW9XbGRJUWxCV1JFcExWakpLUlZSc2FGZGxhMXBSVjFaa2VrMVdUa2RXYmxKcVVtdEtWRlZzVWtaTmJGcEZVbXhPVldGNlFqTlVhMmh6VmtkS1dWVnNRbGRoYTFwNVdsVmFVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1502179960&h=xEzkjkGv65MwSjelsriQpQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE1MDIxNzk5MzUmaD1FczZ3S2xidEM3ckNGOXFZNnh1bE9BJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0TnpBbWFEMUtOV2hPUW5nemREVnBPRFZTTWpWS2NtUnBaVzlSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVYxSnRWVEZXUW1WRVNqUmhNbFp1VG14YVdWUnVUbFJTUjI4d1drVkZiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGExVjNWR3RPWVdJeFFsaGlSVGxoVFVSbk1GbHJaRk5pTURWVllVWldiRkp0ZDNsWk1XaFBUV3h3ZEZOVVRtRmhNRlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1ZsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxUXlWbk5XYWxaVllrVTFhRmxxUmtOV2JWWkpVMnhPVTFacldYZFdSbVIzVkRKS2MxUnVUbE5pYkZwWFZXcENZV0ZHWkVWVGJrNVVWakJzTmxsVldsTmhNVWw1Vkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U210Tk1uaFlXV3hvUTFWR2NGaGtSV1JQVW14S1ZsVXllRTloVmtwMVVXNW9XbGRJUWxCV1JFcExWakpLUlZSc2FGZGxhMXBSVjFaa2VrMVdUa2RXYmxKcVVtdEtWRlZzVWtaTmJGcEZVbXhPVldGNlFqTlVhMmh6VmtkS1dWVnNRbGRoYTFwNVdsVmFVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1502180008&h=ca3amsVikCuP0ENL0RTboA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE1MDIxNzk5NzAmaD1xNU1DXzFCdWNFcWxDM2dWNGl1UjFBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0TnpBbWFEMUtOV2hPUW5nemREVnBPRFZTTWpWS2NtUnBaVzlSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVYxSnRWVEZXUW1WRVNqUmhNbFp1VG14YVdWUnVUbFJTUjI4d1drVkZiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGExVjNWR3RPWVdJeFFsaGlSVGxoVFVSbk1GbHJaRk5pTURWVllVWldiRkp0ZDNsWk1XaFBUV3h3ZEZOVVRtRmhNRlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1ZsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxUXlWbk5XYWxaVllrVTFhRmxxUmtOV2JWWkpVMnhPVTFacldYZFdSbVIzVkRKS2MxUnVUbE5pYkZwWFZXcENZV0ZHWkVWVGJrNVVWakJzTmxsVldsTmhNVWw1Vkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U210Tk1uaFlXV3hvUTFWR2NGaGtSV1JQVW14S1ZsVXllRTloVmtwMVVXNW9XbGRJUWxCV1JFcExWakpLUlZSc2FGZGxhMXBSVjFaa2VrMVdUa2RXYmxKcVVtdEtWRlZzVWtaTmJGcEZVbXhPVldGNlFqTlVhMmh6VmtkS1dWVnNRbGRoYTFwNVdsVmFVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';

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
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1502179933&h=erX-kGfnio-ODR9y6nf6Fw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE1MDIxNzk4MTgmaD1MMjZDT2JlcFRVT1A3NGx3MnlGVmp3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T1RrbWFEMUNUV2RIVkVsTFl6aFplWGRzWW5kc1JqVnRSbFZuSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZrWnZWMnN3TTA1SVVtOU9WR2hoWTBWek1sUnNXVFJoUlRGU1VXeEZiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGEwVjNWRzFzWVdJeFFsaFRhMDVvVmxWd1dWUXhaRmRSTVZwV1kwVTVWVlY2UlhoYVIzUnJaREZHV0ZWcVNsZE5SVlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1ZsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxVkdTa1pXVkVKVlZtczFhRmxxUmtOV1ZscFZWV3M1VGxKWGRETldiRkpIWVRKSmVGWnNaRlJpVlZwVVdWY3hOR014V2taaFNHUnJWbTVDZUZWWE1XRlVhekYwVkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U214U1JuQldWakJrVTFWV1duRlNhMXBPVW14S2VWWlhlSGRVTVVwVlZsUktWazFxUm5aV1IzaGFaVVphVlZGc1ZtbGlhMHBFVjJ0U1FtVkZOWFJTYWxwVllYcHNWRlJWYUVOa2JGbDRXVE5vVjJKV1draFpNR2hUVmtkS1dXRkZPVnBpUm5BeldXcEdVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1502179960&h=PrV63GypWJhRuT3Q1hxinw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE1MDIxNzk5MzUmaD1SZGxfbUMxTi1XSk9FeWlQOXpiM2pBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T0RnbWFEMXlUV05PU2toeWVuTmZRWFV5YVd4SU56VklNbE5uSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZHZzJWMVJhYlZWSVRUSlRSRnB0Vkc1Vk5FMXRXbmRQUjAwellrVkZiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGExVjNWR3RPWVdJeFFsZGlNM0JxWWxSb05sVnJaRmRTVm1SSlUydHdhVlpzU2pGVmFrSTBWa1pLV1ZKdGRHeFdhMVowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1ZsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxVkdTa1pXVkVKVlZtczFhRmxxUmtOV1ZscFZWV3M1VGxKWGRETldiRkpIWVRKSmVGWnNaRlJpVlZwVVdWY3hOR014V2taaFNHUnJWbTVDZUZWWE1XRlVhekYwVkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U214U1JuQldWakJrVTFWV1duRlNhMXBPVW14S2VWWlhlSGRVTVVwVlZsUktWazFxUm5aV1IzaGFaVVphVlZGc1ZtbGlhMHBFVjJ0U1FtVkZOWFJTYWxwVllYcHNWRlJWYUVOa2JGbDRXVE5vVjJKV1draFpNR2hUVmtkS1dXRkZPVnBpUm5BeldXcEdVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1502180008&h=or6dMY6xHgcDheVR0PWcQw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE1MDIxNzk5NzAmaD13aWdQaXJnMVZGZUdJTVlGTlFoRjZ3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T1RrbWFEMUNUV2RIVkVsTFl6aFplWGRzWW5kc1JqVnRSbFZuSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZrWnZWMnN3TTA1SVVtOU9WR2hoWTBWek1sUnNXVFJoUlRGU1VXeEZiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGEwVjNWRzFzWVdJeFFsaFRhMDVvVmxWd1dWUXhaRmRSTVZwV1kwVTVWVlY2UlhoYVIzUnJaREZHV0ZWcVNsZE5SVlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1ZsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxVkdTa1pXVkVKVlZtczFhRmxxUmtOV1ZscFZWV3M1VGxKWGRETldiRkpIWVRKSmVGWnNaRlJpVlZwVVdWY3hOR014V2taaFNHUnJWbTVDZUZWWE1XRlVhekYwVkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U214U1JuQldWakJrVTFWV1duRlNhMXBPVW14S2VWWlhlSGRVTVVwVlZsUktWazFxUm5aV1IzaGFaVVphVlZGc1ZtbGlhMHBFVjJ0U1FtVkZOWFJTYWxwVllYcHNWRlJWYUVOa2JGbDRXVE5vVjJKV1draFpNR2hUVmtkS1dXRkZPVnBpUm5BeldXcEdVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';

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
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1502179933&h=no8yThIGZwgo9qe4VP7A1g&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE1MDIxNzk4MTgmaD1TRG1wWkx1RHRudm9haHdIaEtoRmhBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T1RrbWFEMUtiMDR0TUZGVVVTMWtTRVUwY1VVNGJtMVliMmxSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZGRjVXa1JCTW1Kc1FucFJWMVpRVFVjNWFsUkZlR3haYkZwdFpVaGpiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGEwVjNWRzFzWVdJeFFsZFBWa1pyVFVWck1WbHRkR3RVVlRWMFRsVjRWRkpZYUUxV1JXaExWVlphYzA5WVRsVk5WVlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1VsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxVkdTa1pOU0hCVlZsVTFhRmxxUmtOWFIxWkpZa1pXVjFaNmFETlhhMUpQVldzMVYyTkZaRlZpYmtKVFZGWmFZVmxXYkhSalJWcHNZa1phV2xkdWNFOVVNREYwVkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U214U1JuQldWbXRhWVZsV1VsaGtTR1JxWWtkU1dGZHJXbXRoUlRGRlZXcFdWMDFYYUhwV1J6RlhZekpPU1ZGc1ZsZGlSWEF5VjFaU1FrMVhVa2RhUm14cVVtdEtXRlZ0TVROTmJGcEZVV3hPVWsxcmNFZFViRlpYVmxaYVIxTnNRbGRoYTFwNVZGVmFVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1502179960&h=6foT4wRS3q7w4WCGLIulXQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE1MDIxNzk5MzUmaD1jOTVLNE4xWmtsN1V0MVRDclM4b2RBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T1RrbWFEMUtiMDR0TUZGVVVTMWtTRVUwY1VVNGJtMVliMmxSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZGRjVXa1JCTW1Kc1FucFJWMVpRVFVjNWFsUkZlR3haYkZwdFpVaGpiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGEwVjNWRzFzWVdJeFFsZFBWa1pyVFVWck1WbHRkR3RVVlRWMFRsVjRWRkpZYUUxV1JXaExWVlphYzA5WVRsVk5WVlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1VsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxVkdTa1pOU0hCVlZsVTFhRmxxUmtOWFIxWkpZa1pXVjFaNmFETlhhMUpQVldzMVYyTkZaRlZpYmtKVFZGWmFZVmxXYkhSalJWcHNZa1phV2xkdWNFOVVNREYwVkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U214U1JuQldWbXRhWVZsV1VsaGtTR1JxWWtkU1dGZHJXbXRoUlRGRlZXcFdWMDFYYUhwV1J6RlhZekpPU1ZGc1ZsZGlSWEF5VjFaU1FrMVhVa2RhUm14cVVtdEtXRlZ0TVROTmJGcEZVV3hPVWsxcmNFZFViRlpYVmxaYVIxTnNRbGRoYTFwNVZGVmFVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1502180008&h=iRwQOcYnXPYm8gr9H5anlQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE1MDIxNzk5NzAmaD04cER0NEQ0UjRmbnM0ZGNHc08wSk5nJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzFORFE0T1RrbWFEMUtiMDR0TUZGVVVTMWtTRVUwY1VVNGJtMVliMmxSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhSakZrUnpsNVpHMDVjMkl5VW5CaWFrbHNUa1JDZEZsWGJITk1ia294U20xVk9VMVVVVFZPVkdjeVQwUkJORTU1V205UVZGRjVXa1JCTW1Kc1FucFJWMVpRVFVjNWFsUkZlR3haYkZwdFpVaGpiV1JZU25OTlZHTjRVRmRPU1ZOdVdteFRSM1F4V1ZaamVHSnRUWGxOVjJob1ZqTmtNVmt5TlZaa2JFRjVWbTVTV2xZeWVIcFZSbVJIVFZkU1NFOVliR3RpVkd4NldXcEtVMk5IU25GWFYzaFBVa1ZLTUZkV1pITmpNSGgxVTJwR1MySldWVFZVVmxKU1RsVXhObEpZYkU5bGEwVjNWRzFzWVdJeFFsZFBWa1pyVFVWck1WbHRkR3RVVlRWMFRsVjRWRkpZYUUxV1JXaExWVlphYzA5WVRsVk5WVlowV2tab1MyTXdNVlZaTTJoUlZqQTFTbFV5TldGaVJrNUlaRVJHV2xadFRqUlpiVEZPWlZVeFdHRkhhRmROTWxGNFYxUkpNVlp0VW5OUldHeFhZbXhLWVZacVNqUmxiRlpIV2tWa1RsWXhTa2xVTVdoellUSktWV0pJY0ZwaGEzQlVXVEJrUzJOV1VsaGxSVGxUVWxWdmQxWXhXbXRqTWsxM1pVaFdWR0ZyV2t4WmJGcFdUbFpTVjFWc1NrOVdWRVpXVmtaU1MxVkdTa1pOU0hCVlZsVTFhRmxxUmtOWFIxWkpZa1pXVjFaNmFETlhhMUpQVldzMVYyTkZaRlZpYmtKVFZGWmFZVmxXYkhSalJWcHNZa1phV2xkdWNFOVVNREYwVkc1U1lWSnRhRXhaZWtGNFZsWnJlbUZHUmxkTlJGRjVWakp3VDFZeVJrZFRhbHBwVWtad2FGVnNaRk5sYkhCSFYyNWFiRll4U2tsWlZXUjNZVmRLUm1ORVRsaFdla0l6Vkd4a1QyTnRWa2xWYkZacFlraENkMVpzYUhkamJWWkhZVE5rWVZKR1NuSlphMlEwVjFaYVdFNVlaRlZXVkVZd1dsVlNRMWRHV25SVmJrcGFZVEpTVUZSc1ZUVlRWMHBHVGxaT1UxWnNXVEpXYTFadlpERkdkRlp1U214U1JuQldWbXRhWVZsV1VsaGtTR1JxWWtkU1dGZHJXbXRoUlRGRlZXcFdWMDFYYUhwV1J6RlhZekpPU1ZGc1ZsZGlSWEF5VjFaU1FrMVhVa2RhUm14cVVtdEtXRlZ0TVROTmJGcEZVV3hPVWsxcmNFZFViRlpYVmxaYVIxTnNRbGRoYTFwNVZGVmFVMU5GTVZsYVIzUk9WMFZHTmxkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';

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


$img_text_1 = time();


$img_text_2 = time()+1;


$img_text_3 = time()+2;


$rand_cg = rand(1,10);

switch ($rand_cg) {
    case 1:
        $rand_color_green = '#298007';
        break;
    case 2:
        $rand_color_green = '#298016';
        break;
    case 3:
        $rand_color_green = '#298106';
        break;
    case 4:
        $rand_color_green = '#299006';
        break;
    case 5:
        $rand_color_green = '#288006';
        break;
    case 6:
        $rand_color_green = '#398006';
        break;
    case 7:
        $rand_color_green = '#298007';
        break;
    case 8:
        $rand_color_green = '#298026';
        break;
    case 9:
        $rand_color_green = '#298206';
        break;
    case 10:
        $rand_color_green = '#198006';
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