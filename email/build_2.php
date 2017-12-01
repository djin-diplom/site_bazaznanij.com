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

$vid_rab = rand_podstav_smv($vid_rab);
$name = rand_podstav_smv($name);

$vibor_let_case = 1;//rand(1,3);

$unik_vibor_let_case = 70 + rand(1, 3)*5;
$skidka_vibor_let_case = 18+ rand(1, 4)*5;

switch ($vibor_let_case) {
    case 1:
        $vibor_let = 'Срочное написание любой сложности.
        ';
        break;
    case 2:
        $vibor_let = 'Новая акция: снижение цен вдвое.';
        break;
    case 3:
        $vibor_let = 'Падение цен в сентябре на 15-35%.';
        break;
}


$vibor_let = rand_podstav_smv($vibor_let);


//Без предоплаты сделано

$vibor_akc_case = 1;//rand(1,3);

switch ($vibor_akc_case) {

    case 1:
        $vibor_akc = 'Предлагаем декабрьские скидки до '.$skidka_vibor_let_case.'%.
        ';
        break;
    case 2:
        $vibor_akc = 'Можно заказать без предоплат.';
        break;
    case 3:
        $vibor_akc = 'Пустим заказ без предоплаты в работу.';
        break;

}

$vibor_akc = rand_podstav_smv($vibor_akc);

//Выбор сроков

$sut_kurs = rand(5,7);
$sut_dip = rand(8,11);
$sut_mag = rand(12,16);

//чек + договор сделано

$vibor_pris_case = 1;//rand(1,3);


if ($predmet != '') $predmet_2 = ' предлагает тебе примеры дипломов и магистерских от автора ДО внесения денег по предмету '.$predmet.'.';
else $predmet_2 = ' предлагает вам примеры дипломов и магистерских по вашей теме от автора ДО внесения денег.';


$avtors = rand(350, 550);
$kandidats = rand(33, 55);
$doctors = rand(14, 24);
$balls = rand(478,492)/100;

switch ($vibor_pris_case) {

    case 1:
        $vibor_pris = ' обязуется предоставить всем желающим отличную работу по стоимости существенно ниже рыночной. Официально работаем 
        на договорной основе (оферта расположена на сайте). Соблюдаем время сдачи работы, при задержке возвращаем всю оплату.
        ';
        break;
    case 2:
        $vibor_pris = ' Настоящий гарантируемый
         балл работ - '.$balls.'.
         Найдутся спецы для всех: у нас в авторском дивизионе '.$avtors.' ч., в том числе с кандидатской
          степенью - '.$kandidats.' ч., докторской - '.$doctors.' ч.
          а авторов у нас много - '.$avtors.' чел., в том числе с кандидатской - '.$kandidats.' ч., 
         докторской степенью - '.$doctors.' ч.
        
        - лучший рефератный сервис России. Мы обслуживаем Заказчиков на официальной базе, обязуемся предоставлять
        качественный текст в нужные сроки. О нас много отзывов в интернете. 
        образовательная организация предлагает заключить договор по оказанию рефератных услуг. '.$predmet_2.' 
         Для выполнения заказов в нашей команде: всего авторов '.$avtors.' ч., кандидатов - '.$kandidats.' ч., 
         докторов - '.$doctors.' ч. '.$balls.' - обычный балл дипломов и курсовых.
        ';
        break;

    case 3:
        $vibor_pris = ' - в октябре проводит акцию: при заказе работы можно получить скидку 20%. Считаем, что заказчик 
        должен знать, за что платит деньги, поэтому мы высылаем примеры работ и даже часть заказанной работы до внесения денег.
         ';
        break;

}

$vibor_pris = rand_podstav_smv($vibor_pris);


//Текст курсовой

$text_kurs_case = 1;//rand(1,3);

switch ($text_kurs_case) {

    case 1:
        $text_kurs = 'Пишем работы за половину цены рынка и качественно.
        ';
        break;
    case 2:
        $text_kurs = 'Любой клиент хочет гарантии качества - в нашей студии это научная степень авторов и их опыт.
        ';
        break;
    case 3:
        $text_kurs = 'У нас есть отличные профессионалы со значительным опытом изготовления текстов и научными степенями.
        ';
        break;

}


$text_kurs = rand_podstav_smv($text_kurs);

//Текст дипломной

$text_dip_case = 1;//rand(1,3);

switch ($text_dip_case) {

    case 1:
        $text_dip = 'Проводим выпускные работы вплоть до удачной защиты.
        ';
        break;
    case 2:
        $text_dip = '
        ';
        break;
    case 3:
        $text_dip = 'В авторских списках нашей студии есть много работников вузов с большим преподавательским опытом.
        ';
        break;




}

$text_dip = rand_podstav_smv($text_dip);

//Текст магистерской

$text_mag_case = 1;//rand(1,3);

$rand_mag_proc = rand(87, 95);

switch ($text_mag_case) {
    case 1: 
        $text_mag = 'Почти сотня опытных авторов для написания диссертаций.
        ';
        break;
    case 2:
        $text_mag = 'Все доработки по замечаниям преподавателя уже включены в стоимость.
        ';
        break;
    case 3:
        $text_mag = 'Для любых направлений диссертационных работ в нашей студии есть специалисты с педагогическим опытом.
        ';
        break;


}

$vibor_filial_case = 1;//rand(1,2);

require("town.php");

$town_mass = array_rand($town, 2);

switch ($vibor_filial_case) {
    case 1:
        $vibor_filial = 'Оплатить можно наличными и картой.
        ';
        break;
    case 2:
        $vibor_filial = 'Приходи сюда: '.$town[$town_mass[0]].', Москва и '.$town[$town_mass[1]];
        break;
    case 3:
        $vibor_filial = 'Мы есть в городах: '.$town[$town_mass[0]].', Санкт-Петербург и '.$town[$town_mass[1]];
        break;
}

$vibor_filial = rand_podstav_smv($vibor_filial);



//Выбор низа

$vibor_niz = $vibor_let.'<br >'.$vibor_akc.'<br >'.$main_name.$vibor_pris.'<br >'.$vibor_filial.'<br >';



$style_1 = rand(3234, 2343).'adfdpt';

function kart_vibor_1 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1512403390&h=YUrK8ZJygiwH0rgkbUYQvw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjYlNDBtYWlsLnJ1JmU9MTUxMjQwMzMwOSZoPXFjSU5QUGNqcmJFTWdhbDJ2d2Q3TEEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqVWxOREJ0WVdsc0xuSjFKbVU5TVRVeE1qSXhOVEUyTWlab1BWaDJPVnB6VkZGdE1GazBaV05qWVROeVZIQXlPSGNtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZFNjV0ZYTkhSYVIyeDNZa2M1ZEVwVVVYZGlWMFp3WWtNMWVXUlRXbXhRVkVVeFRVUm5OVTVVVFhkT1JFMXRZVVF4TlZVeFVsVlhSM2hIVVhwb1IyRnROVzFpTTA1SVRucFZkR042UWtKS2JsWjVZa1JGTTAxVU1XcFRSWEF5V2xWb2NtUlhSbGhOVnpWcVRXcEdiMWxXWkROa1YwNTFWbGhhVVUxc1dqQlhWbVJ6WXpGQ1dGSnFSbXRTZW13MVdrY3dOV015U1hsVmJrSnBZV3RzYzFSclVrTmtSbXhZWWtoT1RXSnJiM2hUYlRGV1QxVXhWVlZVVms5V1IyTjVWREJTUWs1Rk5UVlhiVGxSVm10S2RsUldVbXBsVjBwMVZHNXdhVmRIWkRSWk1XUnpVVEZLVmxSc1VtRlhSbHA2Vm0wMWFtSlhVbGxUYms1T1ZrZE9ORlZHWkU5VFZrNTFWMjE0VkZJelVYaFhWbHBxWlVkS2RGUlliRTVXTW1odlZtcE9hMDFXYTNsT1ZscHJZa1ZHTlZadE5WTlhiRmw1WlVod1ZsSnRVa2hVVm1SVFUwVTVXV0pIZEdsV1IzZzJWMWR3UzFVeVRraFRia1pZVmpOb1VGVnJWa3ROUm1SWFdraE9hazFJYURGVk1uQkhVekpLVjFaVVZsVldiRXBUVkd4VmVFNXNTbGxpUlRsc1lURlZlRlpITlhOWlYwbDRVV3hhYWxKVk5WaFZNRlpHVFZaYVZscEhPVmhpVlhBd1ZHeFNVMkZzV25KU1ZFSlhVbXh3YUZacVNrZE9iRTUwWlVkNFUyRXhXakJYYTFwdlV6Sk5kMDFXVmxwTk1taFNWbXBCTVZOc1ZYbE9WMFpwVW1zMVNWcEZVa2RYYkZwMFZHcFNXbUpVUms5YVZsVjRWMGRHU0dGR1pFNU5iRVkwVmpGU1NrMVdXblJWYms1U1YwZDRXRmx0ZUV0WlZscHhVMnBTYkdKR1draFhhMVpyVkd4WmVGTnJiRlZOVjJoNldWUktTMVpYU2tsalJuQm9ZVE5DVlZkVVFtdFRNazVYVm14b2JGSlViRlJWYkZaMlpERlplRmR0ZEdwTmF6RXpXbFZvVjFaSFJuSlhhM2hhWWtad1YxUnNXbE5XTVZaelUyczVWMVpGV2xkV2ExcFRVekZSZVZadVRsZGhiRnBXV1d0Vk1XRkdiSEZTYTA1WFlsWmFTbFV5ZUU5Vk1WcHlWMWhrVjFKdFVqTldSRXBMWXpGU2RWUnNUbWxpUm5CWVZsZHdRMWxYUmtkYVJWWlVZbXMxVlZacVFuTk9iR3hXVjJ4T2FFMVZiRFZXUnpWVFdWWktkR0ZGZUZwbGEwWTBWbXhhY21WdFJrZFNiR1JPVWtaR05WWnFTbmRVTVZsNVVtdGtWR0ZzY0hCVmExcDNZVVpXYzFwR1RteGlTRUpJVmpJMVlXSkdXWGhUYTJ4YVZsZFNNMWxXWkV0U2JVNUZWR3hvVjJWclNYcFdSM2hyVkRKT2RGWnJiRlppUmxwd1dXdG9RMlF4V25OaFNHUnFZbFphU0ZsVVRtdFpWa3BIVTI1S1dtRXlVVEJXTVZwaFYwVTFXVnBHVmxkV1JWbDNWMnhXVTFFeFpFZFhibEpXWW10d1lWbFVTbE5WUmxKelZsUldWRll3Y0VkVWJGcFBWVEZhYzFkVVNsZGhNVnAyV2tSR1IyUkdXblZUYlhST1RXNW9XVmRYZUc5Uk1WWkhZMFpvYTFKWFVsQlZiWGhMVm14VmVXVkZPV2hXYTNBeFZWYzFiMWRzWkVsUmJFSlhVa1Z3VEZacVNrdFNWbEp6WVVaa2JHRXhjRkpXTVZwclpXc3hWMVJyWkZkaWJFcHhWVzEwUzFaR1ZuTlZhMXBPWWtad1JsVnRlRTlXVjBZMlVXcE9WV0V5YUhwV2EyUkxWMVpXYzFGc1pHaGhNWEExVjJ4V1lWVXhUa1pOVm14aFVqTlNUMVl3VmtkT2JHUjBUVVJDVGxJd2NGbFZiWGh6VmxkS1YyTkhPVlpOUm5CTFdrUkdjbVF5UmtaT1ZrSlhWa1ZhVkZkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1512403459&h=qRJTe5Vfv2VYR4m0QBD1CA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjYlNDBtYWlsLnJ1JmU9MTUxMjQwMzMxOSZoPTR3VG5WRkFjYS10Rzc0eTVjUUY5ZVEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqVWxOREJ0WVdsc0xuSjFKbVU5TVRVeE1qSXhOVEUzTVNab1BVbzJVVVExZFMxdmJsbGhNVzFhWjA1allqQlhVM2NtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZFNjV0ZYTkhSYVIyeDNZa2M1ZEVwVVVYZGlWMFp3WWtNMWVXUlRXbXhRVkVVeFRVUm5OVTVVVFhkTmFtZHRZVVF3ZVZaRVduTmxSMFpZVFd0b1NXSnBNVmhSTWs1dVlqTmpNRlZ0VGxKS2JsWjVZa1JGTTAxVU1XcFRSWEF5V2xWb2NtUlhSbGhOVnpWcVRXcEdiMWxXWkROa1YwNTFWbGhhVVUxc1dqQlhWbVJ6WXpGQ1dGSnFSbXRTZW13MVdrY3dOV015U1hsVmJrSnBZV3RzYzFSclVrTmtSbXhZWWtoT1RXSnJiM2hUYlRGV1QxVXhWVlZVVms5V1IyTjVWREJTUWs1Rk5UVlhiVGxSVmpGS2RGWlVSbGRSYlZaRlUycFNhRTFzV25WVWJYaGhWMVpTZFZSc1VsTlNNamgzVjJ0V1JtSlhVbGxUYms1T1ZrZE9ORlZHWkU5VFZrNTFWMjE0VkZJelVYaFhWbHBxWlVkS2RGUlliRTVXTW1odlZtcE9hMDFXYTNsT1ZscHJZa1ZHTlZadE5WTlhiRmw1WlVod1ZsSnRVa2hVVm1SVFUwVTVXV0pIZEdsV1IzZzJWMWR3UzFVeVRraFRia1pZVmpOb1VGVnJWa3ROUm1SWFdraE9hazFJYURGVk1uQkhVekpLVjFaVVZsVldiRXBUVkd4VmVFNXNTbGxpUlRsc1lURldNMVpIZEU5WlYwbDRVV3hvYVZKVWJHaFVWVkp1VFVac2NscEdUbWxOUkZaV1dWVmFWMkpHU25Sa00yeGFUVmRvVUZSWGVIZGtSazVWVkcxR2FFMUdXakJYYTFwdlV6Sk5kMDFXVmxwTk1taFNWbXBCTVZOc1ZYbE9WMFpwVW1zMVNWcEZVa2RYYkZwMFZHcFNXbUpVUms5YVZsVjRWMGRHU0dGR1pFNU5iRVkwVmpGU1NrMVdXblJWYms1U1YwZDRXRmx0ZUV0WlZscHhVMnBTYkdKR1draFhhMVpyVkd4WmVGTnJiRlZOVjJoNldWUktTMVpYU2tsalJuQm9ZVE5DVlZkVVFtdFRNazVYVm14b2JGSlViRlJWYkZaMlpERlplRmR0ZEdwTmF6RXpXbFZvVjFaSFJuSlhhM2hhWWtad1YxUnNXbE5XTVZaelUyczVWMVpGV2xkV2ExcFRVekZSZVZadVRsZGhiRnBXV1d0Vk1XRkdiSEZTYTA1WFlsWmFTbFV5ZUU5Vk1WcHlWMWhrVjFKdFVqTldSRXBMWXpGU2RWUnNUbWxpUm5CWVZsZHdRMWxYUmtkYVJWWlVZbXMxVlZacVFuTk9iR3hXVjJ4T2FFMVZiRFZXUnpWVFdWWktkR0ZGZUZwbGEwWTBWbXhhY21WdFJrZFNiR1JPVWtaR05WWnFTbmRVTVZsNVVtdGtWR0ZzY0hCVmExcDNZVVpXYzFwR1RteGlTRUpJVmpJMVlXSkdXWGhUYTJ4YVZsZFNNMWxXWkV0U2JVNUZWR3hvVjJWclNYcFdSM2hyVkRKT2RGWnJiRlppUmxwd1dXdG9RMlF4V25OaFNHUnFZbFphU0ZsVVRtdFpWa3BIVTI1S1dtRXlVVEJXTVZwaFYwVTFXVnBHVmxkV1JWbDNWMnhXVTFFeFpFZFhibEpXWW10d1lWbFVTbE5WUmxKelZsUldWRll3Y0VkVWJGcFBWVEZhYzFkVVNsZGhNVnAyV2tSR1IyUkdXblZUYlhST1RXNW9XVmRYZUc5Uk1WWkhZMFpvYTFKWFVsQlZiWGhMVm14VmVXVkZPV2hXYTNBeFZWYzFiMWRzWkVsUmJFSlhVa1Z3VEZacVNrdFNWbEp6WVVaa2JHRXhjRkpXTVZwclpXc3hWMVJyWkZkaWJFcHhWVzEwUzFaR1ZuTlZhMXBPWWtad1JsVnRlRTlXVjBZMlVXcE9WV0V5YUhwV2EyUkxWMVpXYzFGc1pHaGhNWEExVjJ4V1lWVXhUa1pOVm14aFVqTlNUMVl3VmtkT2JHUjBUVVJDVGxJd2NGbFZiWGh6VmxkS1YyTkhPVlpOUm5CTFdrUkdjbVF5UmtaT1ZrSlhWa1ZhVkZkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1512403395&h=XKZnB0nVi1V02OpGIutZRg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjYlNDBtYWlsLnJ1JmU9MTUxMjQwMzMzMiZoPWNkQ1ZQMWRFRUVHQW5VYy1Ba2s0WkEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqVWxOREJ0WVdsc0xuSjFKbVU5TVRVeE1qSXhOVEU0TUNab1BVdGZZVlJPTFhaeWMwTkVVSEZYVVRWVVJHVnBRbmNtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZFNjV0ZYTkhSYVIyeDNZa2M1ZEVwVVVYZGlWMFp3WWtNMWVXUlRXbXhRVkVVeFRVUm5OVTVVVFhkTmVtZHRZVVF3ZDAxVVFqSmFTRlo1WTFaV1ExZ3dVa05SYTA0eFUwaE9iR1JzU2tKS2JsWjVZa1JGTTAxVU1XcFRSWEF5V2xWb2NtUlhSbGhOVnpWcVRXcEdiMWxXWkROa1YwNTFWbGhhVVUxc1dqQlhWbVJ6WXpGQ1dGSnFSbXRTZW13MVdrY3dOV015U1hsVmJrSnBZV3RzYzFSclVrTmtSbXhZWWtoT1RXSnJiM2hUYlRGV1QxVXhWVlZVVms5V1IyTjVWREJTUWs1Rk5UVlhiVGxSVmpGS2RGWlVSbGRSYlZaRlUycFNhRTFzV25WVWJYaGhWMVpTZFZSc1VsTlNNamgzVjJ0V1JtSlhVbGxUYms1T1ZrZE9ORlZHWkU5VFZrNTFWMjE0VkZJelVYaFhWbHBxWlVkS2RGUlliRTVXTW1odlZtcE9hMDFXYTNsT1ZscHJZa1ZHTlZadE5WTlhiRmw1WlVod1ZsSnRVa2hVVm1SVFUwVTVXV0pIZEdsV1IzZzJWMWR3UzFVeVRraFRia1pZVmpOb1VGVnJWa3ROUm1SWFdraE9hazFJYURGVk1uQkhVekpLVjFaVVZsVldiRXBUVkd4VmVFNXNTbGxpUlRsc1lURldNMVpIZEU5WlYwbDRVV3hvYVZKVWJHaFVWVkp1VFVac2NscEdUbWxOUkZaV1dWVmFWMkpHU25Sa00yeGFUVmRvVUZSWGVIZGtSazVWVkcxR2FFMUdXakJYYTFwdlV6Sk5kMDFXVmxwTk1taFNWbXBCTVZOc1ZYbE9WMFpwVW1zMVNWcEZVa2RYYkZwMFZHcFNXbUpVUms5YVZsVjRWMGRHU0dGR1pFNU5iRVkwVmpGU1NrMVdXblJWYms1U1YwZDRXRmx0ZUV0WlZscHhVMnBTYkdKR1draFhhMVpyVkd4WmVGTnJiRlZOVjJoNldWUktTMVpYU2tsalJuQm9ZVE5DVlZkVVFtdFRNazVYVm14b2JGSlViRlJWYkZaMlpERlplRmR0ZEdwTmF6RXpXbFZvVjFaSFJuSlhhM2hhWWtad1YxUnNXbE5XTVZaelUyczVWMVpGV2xkV2ExcFRVekZSZVZadVRsZGhiRnBXV1d0Vk1XRkdiSEZTYTA1WFlsWmFTbFV5ZUU5Vk1WcHlWMWhrVjFKdFVqTldSRXBMWXpGU2RWUnNUbWxpUm5CWVZsZHdRMWxYUmtkYVJWWlVZbXMxVlZacVFuTk9iR3hXVjJ4T2FFMVZiRFZXUnpWVFdWWktkR0ZGZUZwbGEwWTBWbXhhY21WdFJrZFNiR1JPVWtaR05WWnFTbmRVTVZsNVVtdGtWR0ZzY0hCVmExcDNZVVpXYzFwR1RteGlTRUpJVmpJMVlXSkdXWGhUYTJ4YVZsZFNNMWxXWkV0U2JVNUZWR3hvVjJWclNYcFdSM2hyVkRKT2RGWnJiRlppUmxwd1dXdG9RMlF4V25OaFNHUnFZbFphU0ZsVVRtdFpWa3BIVTI1S1dtRXlVVEJXTVZwaFYwVTFXVnBHVmxkV1JWbDNWMnhXVTFFeFpFZFhibEpXWW10d1lWbFVTbE5WUmxKelZsUldWRll3Y0VkVWJGcFBWVEZhYzFkVVNsZGhNVnAyV2tSR1IyUkdXblZUYlhST1RXNW9XVmRYZUc5Uk1WWkhZMFpvYTFKWFVsQlZiWGhMVm14VmVXVkZPV2hXYTNBeFZWYzFiMWRzWkVsUmJFSlhVa1Z3VEZacVNrdFNWbEp6WVVaa2JHRXhjRkpXTVZwclpXc3hWMVJyWkZkaWJFcHhWVzEwUzFaR1ZuTlZhMXBPWWtad1JsVnRlRTlXVjBZMlVXcE9WV0V5YUhwV2EyUkxWMVpXYzFGc1pHaGhNWEExVjJ4V1lWVXhUa1pOVm14aFVqTlNUMVl3VmtkT2JHUjBUVVJDVGxJd2NGbFZiWGh6VmxkS1YyTkhPVlpOUm5CTFdrUkdjbVF5UmtaT1ZrSlhWa1ZhVkZkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';

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
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1512403395&h=dNuk6IZBBM5pUALJP3jPtA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjYlNDBtYWlsLnJ1JmU9MTUxMjQwMzMzMiZoPWRhYzFIT1B4aTE0TzdCdDBwRTZuNkEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqVWxOREJ0WVdsc0xuSjFKbVU5TVRVeE1qSXhOVEU0TUNab1BVNUlRVVI0WkVoeGVIcENNRnAxZW01Q1JETnlabWNtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZFNjV0ZYTkhSYVIyeDNZa2M1ZEVwVVVYZGlWMFp3WWtNMWVXUlRXbXhRVkVVeFRVUm5OVTVVVFhkTmVtZHRZVVF3TWxKVVJsZFJiVGxVWVZoQmQyRkZTa1ZVYmtwSllsaHdkazlGZEVKS2JsWjVZa1JGTTAxVU1XcFRSWEF5V2xWb2NtUlhSbGhOVnpWcVRXcEdiMWxXWkROa1YwNTFWbGhhVVUxc1dqQlhWbVJ6WXpGQ1dGSnFSbXRTZW13MVdrY3dOV015U1hsVmJrSnBZV3RzYzFSclVrTmtSbXhZWWtoT1RXSnJiM2hUYlRGV1QxVXhWVlZVVms5V1IyTjVWREJTUWs1Rk5UVlhiVGxSVmtkbk1sWXhVbUZpVmxaSlZGUktWRkpHY0hSV1J6VldUa1V4ZEZkdVpGQlNNREI2V1d0V1JtSlhVbGxUYms1T1ZrZE9ORlZHWkU5VFZrNTFWMjE0VkZJelVYaFhWbHBxWlVkS2RGUlliRTVXTW1odlZtcE9hMDFXYTNsT1ZscHJZa1ZHTlZadE5WTlhiRmw1WlVod1ZsSnRVa2hVVm1SVFUwVTVXV0pIZEdsV1IzZzJWMWR3UzFVeVRraFRia1pZVmpOb1VGVnJWa3ROUm1SWFdraE9hazFJYURGVk1uQkhVekpLVjFaVVZsVldiRXBUVkd4VmVFNXNTbGxpUlRsc1lURldNMVpIZEU5WlYwbDRVV3hrYVUwelFuRlpiRkp2VG14V2NscEdaRk5XYlZKS1ZUSjBkMkZXV25OVGFrWldZV3RKTUZacldrdFhWa3AwWkVkNFYyRXhXakJYYTFwdlV6Sk5kMDFXVmxwTk1taFNWbXBCTVZOc1ZYbE9WMFpwVW1zMVNWcEZVa2RYYkZwMFZHcFNXbUpVUms5YVZsVjRWMGRHU0dGR1pFNU5iRVkwVmpGU1NrMVdXblJWYms1U1YwZDRXRmx0ZUV0WlZscHhVMnBTYkdKR1draFhhMVpyVkd4WmVGTnJiRlZOVjJoNldWUktTMVpYU2tsalJuQm9ZVE5DVlZkVVFtdFRNazVYVm14b2JGSlViRlJWYkZaMlpERlplRmR0ZEdwTmF6RXpXbFZvVjFaSFJuSlhhM2hhWWtad1YxUnNXbE5XTVZaelUyczVWMVpGV2xkV2ExcFRVekZXUjFOcldsZFdSVXBXVm0xek1XRkdiSEZTYTA1WFZteHdWbFpYY3pWVWJFcFlaRVJPVjJKR1NraFpWRXBLWlVaYWMxcEdVbWxXVm5CVlYxWmplRTVIVFhoWGExcG9VMGRTY2xadE5VTmxSbFpZVFZkR1ZXRjZSakJXUnpWVFdWWktkR0ZGZUZwbGEwWTBWbXhhY21WdFJrZFNiR1JPVWtaR05WWnFTbmRVTVZsNVVtdGtWR0ZzY0hCVmExcDNZVVpXYzFwR1RteGlTRUpJVmpJMVlXSkdXWGhUYTJ4YVZsZFNNMWxXWkV0U2JVNUZWR3hvVjJWclNYcFdSM2hyVkRKT2RGWnJiRlppUmxwd1dXdG9RMlF4V25OaFNHUnFZbFphU0ZsVVRtdFpWa3BIVTI1S1dtRXlVVEJXTVZwaFYwVTFXVnBHVmxkV1JWbDNWMnhXVTFFeFpFZFhibEpXWW10d1lWbFVTbE5WUmxKelZsUldWRll3Y0VkVWJGcFBWVEZhYzFkVVNsZGhNVnAyV2tSR1IyUkdXblZUYlhoVFVtNUNWMVpxUW10Vk1WWlhWMjVHVTJFeGNFOVZiWGhMWlZaYVdHVklaRlZOVlhCV1ZteFNTMVpyTVhGU2JscFhVak5vWVZwVldtRldWa1p6Vm0xc2FXRXdjRVZXTW5SVFVXMVdSazVZVWxOaGJIQldXVmh3YzFaR1VsWmhSVTVyWWtac05GZFVUbTlXTWtwWFYydG9XazFIYUZSV2EyUkxWMWRHUms5V2NHbFNia0Y2VjFkd1IxVXhUa1pOVm14aFVqTlNUMVl3VmtkT2JHUjBUVVJDVGxJd2NGbFZiWGh6VmxkS1YyTkhPVlpOUm5CTFdrUkdjbVF5UmtaT1ZrSlhWa1ZhVkZkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1512403459&h=r0ECQ_pz40BWv1iiPw0ElQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjYlNDBtYWlsLnJ1JmU9MTUxMjQwMzMxOSZoPTVhalRWTGlCMU1wWFdUUDZXdXhnd3cmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqVWxOREJ0WVdsc0xuSjFKbVU5TVRVeE1qSXhOVEUzTVNab1BUWTJkR1pPV1ZReVVDMXNkWFJKZUZscldEQmxUV2NtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZFNjV0ZYTkhSYVIyeDNZa2M1ZEVwVVVYZGlWMFp3WWtNMWVXUlRXbXhRVkVVeFRVUm5OVTVVVFhkTmFtZHRZVVF4VWxsdGJHcGpSMUp4VGxkbk0xUXdUa1JUYW14Q1UxaENSV1F5UmxKS2JsWjVZa1JGTTAxVU1XcFRSWEF5V2xWb2NtUlhSbGhOVnpWcVRXcEdiMWxXWkROa1YwNTFWbGhhVVUxc1dqQlhWbVJ6WXpGQ1dGSnFSbXRTZW13MVdrY3dOV015U1hsVmJrSnBZV3RzYzFSclVrTmtSbXhZWWtoT1RXSnJiM2hUYlRGV1QxVXhWVlZVVms5V1IyTjVWREJTUWs1Rk5UVlhiVGxSVmtkbk1sWXhVbUZpVmxaSlZGUktWRkpHY0hSV1J6VldUa1V4ZEZkdVpGQlNNREI2V1d0V1JtSlhVbGxUYms1T1ZrZE9ORlZHWkU5VFZrNTFWMjE0VkZJelVYaFhWbHBxWlVkS2RGUlliRTVXTW1odlZtcE9hMDFXYTNsT1ZscHJZa1ZHTlZadE5WTlhiRmw1WlVod1ZsSnRVa2hVVm1SVFUwVTVXV0pIZEdsV1IzZzJWMWR3UzFVeVRraFRia1pZVmpOb1VGVnJWa3ROUm1SWFdraE9hazFJYURGVk1uQkhVekpLVjFaVVZsVldiRXBUVkd4VmVFNXNTbGxpUlRsc1lURldNMVpIZEU5WlYwbDRVV3hrYVUwelFuRlpiRkp2VG14V2NscEdaRk5XYlZKS1ZUSjBkMkZXV25OVGFrWldZV3RKTUZacldrdFhWa3AwWkVkNFYyRXhXakJYYTFwdlV6Sk5kMDFXVmxwTk1taFNWbXBCTVZOc1ZYbE9WMFpwVW1zMVNWcEZVa2RYYkZwMFZHcFNXbUpVUms5YVZsVjRWMGRHU0dGR1pFNU5iRVkwVmpGU1NrMVdXblJWYms1U1YwZDRXRmx0ZUV0WlZscHhVMnBTYkdKR1draFhhMVpyVkd4WmVGTnJiRlZOVjJoNldWUktTMVpYU2tsalJuQm9ZVE5DVlZkVVFtdFRNazVYVm14b2JGSlViRlJWYkZaMlpERlplRmR0ZEdwTmF6RXpXbFZvVjFaSFJuSlhhM2hhWWtad1YxUnNXbE5XTVZaelUyczVWMVpGV2xkV2ExcFRVekZXUjFOcldsZFdSVXBXVm0xek1XRkdiSEZTYTA1WFZteHdWbFpYY3pWVWJFcFlaRVJPVjJKR1NraFpWRXBLWlVaYWMxcEdVbWxXVm5CVlYxWmplRTVIVFhoWGExcG9VMGRTY2xadE5VTmxSbFpZVFZkR1ZXRjZSakJXUnpWVFdWWktkR0ZGZUZwbGEwWTBWbXhhY21WdFJrZFNiR1JPVWtaR05WWnFTbmRVTVZsNVVtdGtWR0ZzY0hCVmExcDNZVVpXYzFwR1RteGlTRUpJVmpJMVlXSkdXWGhUYTJ4YVZsZFNNMWxXWkV0U2JVNUZWR3hvVjJWclNYcFdSM2hyVkRKT2RGWnJiRlppUmxwd1dXdG9RMlF4V25OaFNHUnFZbFphU0ZsVVRtdFpWa3BIVTI1S1dtRXlVVEJXTVZwaFYwVTFXVnBHVmxkV1JWbDNWMnhXVTFFeFpFZFhibEpXWW10d1lWbFVTbE5WUmxKelZsUldWRll3Y0VkVWJGcFBWVEZhYzFkVVNsZGhNVnAyV2tSR1IyUkdXblZUYlhoVFVtNUNWMVpxUW10Vk1WWlhWMjVHVTJFeGNFOVZiWGhMWlZaYVdHVklaRlZOVlhCV1ZteFNTMVpyTVhGU2JscFhVak5vWVZwVldtRldWa1p6Vm0xc2FXRXdjRVZXTW5SVFVXMVdSazVZVWxOaGJIQldXVmh3YzFaR1VsWmhSVTVyWWtac05GZFVUbTlXTWtwWFYydG9XazFIYUZSV2EyUkxWMWRHUms5V2NHbFNia0Y2VjFkd1IxVXhUa1pOVm14aFVqTlNUMVl3VmtkT2JHUjBUVVJDVGxJd2NGbFZiWGh6VmxkS1YyTkhPVlpOUm5CTFdrUkdjbVF5UmtaT1ZrSlhWa1ZhVkZkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1512403390&h=6U1puZ5ZU_YAEEaawG7sNA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjYlNDBtYWlsLnJ1JmU9MTUxMjQwMzMwOSZoPU1tbTlhbFlmZXlwVHBOQWw3S3VLb1EmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqVWxOREJ0WVdsc0xuSjFKbVU5TVRVeE1qSXhOVEUyTWlab1BWWkVkV3d0UVRZelVYQlRhRmQzY3kxZmRVMXBVa0VtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZFNjV0ZYTkhSYVIyeDNZa2M1ZEVwVVVYZGlWMFp3WWtNMWVXUlRXbXhRVkVVeFRVUm5OVTVVVFhkT1JFMXRZVVF4VWxvd1l6QlRWWEEyVlhwa2QxWklVbTVPUjJoMlRtcEtSMU5VV2pOS2JsWjVZa1JGTTAxVU1XcFRSWEF5V2xWb2NtUlhSbGhOVnpWcVRXcEdiMWxXWkROa1YwNTFWbGhhVVUxc1dqQlhWbVJ6WXpGQ1dGSnFSbXRTZW13MVdrY3dOV015U1hsVmJrSnBZV3RzYzFSclVrTmtSbXhZWWtoT1RXSnJiM2hUYlRGV1QxVXhWVlZVVms5V1IyTjVWREJTUWs1Rk5UVlhiVGxSVm10YWRsWXljM2ROTURWSlZXMDVUMVpIYUdoWk1GWjZUV3hTYzFkVVVtaFNWRVpUVlZkNFJtSlhVbGxUYms1T1ZrZE9ORlZHWkU5VFZrNTFWMjE0VkZJelVYaFhWbHBxWlVkS2RGUlliRTVXTW1odlZtcE9hMDFXYTNsT1ZscHJZa1ZHTlZadE5WTlhiRmw1WlVod1ZsSnRVa2hVVm1SVFUwVTVXV0pIZEdsV1IzZzJWMWR3UzFVeVRraFRia1pZVmpOb1VGVnJWa3ROUm1SWFdraE9hazFJYURGVk1uQkhVekpLVjFaVVZsVldiRXBUVkd4VmVFNXNTbGxpUlRsc1lUQldNMVpITVhOWlYwbDRVV3hvVkdFd05XOVdiRlozVjFaUmVGcEdaRkpOVm5CWFdUQlZOVlpXVmpaU1dHaGhVak5TY2xwRVJrZFhSbFp4VTJ4a1RsSldXakJYYTFwdlV6Sk5kMDFXVmxwTk1taFNWbXBCTVZOc1ZYbE9WMFpwVW1zMVNWcEZVa2RYYkZwMFZHcFNXbUpVUms5YVZsVjRWMGRHU0dGR1pFNU5iRVkwVmpGU1NrMVdXblJWYms1U1YwZDRXRmx0ZUV0WlZscHhVMnBTYkdKR1draFhhMVpyVkd4WmVGTnJiRlZOVjJoNldWUktTMVpYU2tsalJuQm9ZVE5DVlZkVVFtdFRNazVYVm14b2JGSlViRlJWYkZaMlpERlplRmR0ZEdwTmF6RXpXbFZvVjFaSFJuSlhhM2hhWWtad1YxUnNXbE5XTVZaelUyczVWMVpGV2xkV2ExcFRVekZXUjFOcldsZFdSVXBXVm0xek1XRkdiSEZTYTA1WFZteHdWbFpYY3pWVWJFcFlaRVJPVjJKR1NraFpWRXBLWlVaYWMxcEdVbWxXVm5CVlYxWmplRTVIVFhoWGExcG9VMGRTY2xadE5VTmxSbFpZVFZkR1ZXRjZSakJXUnpWVFdWWktkR0ZGZUZwbGEwWTBWbXhhY21WdFJrZFNiR1JPVWtaR05WWnFTbmRVTVZsNVVtdGtWR0ZzY0hCVmExcDNZVVpXYzFwR1RteGlTRUpJVmpJMVlXSkdXWGhUYTJ4YVZsZFNNMWxXWkV0U2JVNUZWR3hvVjJWclNYcFdSM2hyVkRKT2RGWnJiRlppUmxwd1dXdG9RMlF4V25OaFNHUnFZbFphU0ZsVVRtdFpWa3BIVTI1S1dtRXlVVEJXTVZwaFYwVTFXVnBHVmxkV1JWbDNWMnhXVTFFeFpFZFhibEpXWW10d1lWbFVTbE5WUmxKelZsUldWRll3Y0VkVWJGcFBWVEZhYzFkVVNsZGhNVnAyV2tSR1IyUkdXblZUYlhoVFVtNUNWMVpxUW10Vk1WWlhWMjVHVTJFeGNFOVZiWGhMWlZaYVdHVklaRlZOVlhCV1ZteFNTMVpyTVhGU2JscFhVak5vWVZwVldtRldWa1p6Vm0xc2FXRXdjRVZXTW5SVFVXMVdSazVZVWxOaGJIQldXVmh3YzFaR1VsWmhSVTVyWWtac05GZFVUbTlXTWtwWFYydG9XazFIYUZSV2EyUkxWMWRHUms5V2NHbFNia0Y2VjFkd1IxVXhUa1pOVm14aFVqTlNUMVl3VmtkT2JHUjBUVVJDVGxJd2NGbFZiWGh6VmxkS1YyTkhPVlpOUm5CTFdrUkdjbVF5UmtaT1ZrSlhWa1ZhVkZkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';

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
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1512403390&h=e6LQ3X-A3K8MlLqTf4YZLw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjYlNDBtYWlsLnJ1JmU9MTUxMjQwMzMwOSZoPUVDalZRY3VJTGR6V09nckRXY3ZyVFEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqVWxOREJ0WVdsc0xuSjFKbVU5TVRVeE1qSXhOVEUyTWlab1BYQjNZVGxsVjFSeloyeEVhVEJYUmxFM1lVbDNNWGNtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZFNjV0ZYTkhSYVIyeDNZa2M1ZEVwVVVYZGlWMFp3WWtNMWVXUlRXbXhRVkVVeFRVUm5OVTVVVFhkT1JFMXRZVVF4YmxkclJqWlNTRnBTVDBST05HTlhiM2hpVjFKcFRGWm9jRlZXVmtKS2JsWjVZa1JGTTAxVU1XcFRSWEF5V2xWb2NtUlhSbGhOVnpWcVRXcEdiMWxXWkROa1YwNTFWbGhhVVUxc1dqQlhWbVJ6WXpGQ1dGSnFSbXRTZW13MVdrY3dOV015U1hsVmJrSnBZV3RzYzFSclVrTmtSbXhZWWtoT1RXSnJiM2hUYlRGV1QxVXhWVlZVVms5V1IyTjVWREJTUWs1Rk5UVlhiVGxSVmtaR05WZHJVa0pOYlVwelVXNXdVbFl4V2xGVVZXTTFZV3hTUm1WSGVGcGlSbkIwV2xWb2FtSlhVbGxUYms1T1ZrZE9ORlZHWkU5VFZrNTFWMjE0VkZJelVYaFhWbHBxWlVkS2RGUlliRTVXTW1odlZtcE9hMDFXYTNsT1ZscHJZa1ZHTlZadE5WTlhiRmw1WlVod1ZsSnRVa2hVVm1SVFUwVTVXV0pIZEdsV1IzZzJWMWR3UzFVeVRraFRia1pZVmpOb1VGVnJWa3ROUm1SWFdraE9hazFJYURGVk1uQkhVekpLVjFaVVZsVldiRXBUVkd4VmVFNXNTbGxpUlRsc1lUQldNMVpITVhOWlYwbDRVV3hrVUZaclduSlVWVlp5VFZac2RHUkhkRlZXVkZZd1ZHeFdORlpHU2xsaFJURlhVbGRvVEZaV1dtRmpNRGxaVkd4V1RsWldXakJYYTFwdlV6Sk5kMDFXVmxwTk1taFNWbXBCTVZOc1ZYbE9WMFpwVW1zMVNWcEZVa2RYYkZwMFZHcFNXbUpVUms5YVZsVjRWMGRHU0dGR1pFNU5iRVkwVmpGU1NrMVdXblJWYms1U1YwZDRXRmx0ZUV0WlZscHhVMnBTYkdKR1draFhhMVpyVkd4WmVGTnJiRlZOVjJoNldWUktTMVpYU2tsalJuQm9ZVE5DVlZkVVFtdFRNazVYVld4b2JGSlViRlJWYkZaMlpERlplRmR0ZEdwTmF6RXpXbFZvVjFaSFJuSlhhM2hhWWtad1YxUnNXbE5XTVZaelUyczVWMVpGV2xkV2ExcFRVekZXUjFOcldrNVRTRUpXVm14Vk1XRkdiSEZTYTA1WVVqRmFTbGxyV2xkV01WbzJZVVJPV0dFeFNsQldWM014VmpKT1JscEdWbWxpYTBwVVZrWmFZVmxXYkZkaVNGSnFVbFp3YzFscldtRlhiR1IxWTBVNVZVMUVSakJXUnpWVFdWWktkR0ZGZUZwbGEwWTBWbXhhY21WdFJrZFNiR1JPVWtaR05WWnFTbmRVTVZsNVVtdGtWR0ZzY0hCVmExcDNZVVpXYzFwR1RteGlTRUpJVmpJMVlXSkdXWGhUYTJ4YVZsZFNNMWxXWkV0U2JVNUZWR3hvVjJWclNYcFdSM2hyVkRKT2RGWnJiRlppUmxwd1dXdG9RMlF4V25OaFNHUnFZbFphU0ZsVVRtdFpWa3BIVTI1S1dtRXlVVEJXTVZwaFYwVTFXVnBHVmxkV1JWbDNWMnhXVTFFeFpFZFhibEpXWW10d1lWbFVTbE5WUmxKelZsUldWRll3Y0VkVWJGcFBWVEZhYzFkVVNsZGhNVnAyV2tSR1IyUkdXblZUYlhoVFVtNUNWMVp0ZEdGWlZteFhWV3hvYTFOSFVuRlphMlJUVjBaa2NsZHRkR2hTVkVaR1ZsZHdWMVl3TVZoaFNIQlhVbnBHV0ZsNlNrOVRWa1p6Vm14a2FWSllRWGxXTVZwVFVXc3hXRlZyWkdGU2JYaHhWVzEwUzFkR1ZuUk5WRTVPWWtad1JsVlhlRTlWYXpGeVkwVmtWV0pHV2xoV2JGcGhVakZPYzFGc1pHaGhNWEExVmtaV1lWVXhUa1pOVm14aFVqTlNUMVl3VmtkT2JHUjBUVVJDVGxJd2NGbFZiWGh6VmxkS1YyTkhPVlpOUm5CTFdrUkdjbVF5UmtaT1ZrSlhWa1ZhVkZkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1512403459&h=VYN4fabeSq0YOTjNONV5IA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjYlNDBtYWlsLnJ1JmU9MTUxMjQwMzMxOSZoPU5ZbU1qMVRJQnB4d2ZaNmNldTJTWHcmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqVWxOREJ0WVdsc0xuSjFKbVU5TVRVeE1qSXhOVEUzTVNab1BVcHhZbDgzVUdaTFoySjJhbUpqVkZWTlQxWXlVbEVtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZFNjV0ZYTkhSYVIyeDNZa2M1ZEVwVVVYZGlWMFp3WWtNMWVXUlRXbXhRVkVVeFRVUm5OVTVVVFhkTmFtZHRZVVF3TkZKRlJsQlhSbWd6V2tSS1VVMVlXa05rYlZKWlZrYzVNMUpXU2xKS2JsWjVZa1JGTTAxVU1XcFRSWEF5V2xWb2NtUlhSbGhOVnpWcVRXcEdiMWxXWkROa1YwNTFWbGhhVVUxc1dqQlhWbVJ6WXpGQ1dGSnFSbXRTZW13MVdrY3dOV015U1hsVmJrSnBZV3RzYzFSclVrTmtSbXhZWWtoT1RXSnJiM2hUYlRGV1QxVXhWVlZVVms5V1IyTjVWREJTUWs1Rk5UVlhiVGxSVm1zMU1GVnJXa3BPVmtwRlZteE9XazFXUmpSWlZ6VkNaVzFTVm1SSE9XRldNWEJJVkd0V1JtSlhVbGxUYms1T1ZrZE9ORlZHWkU5VFZrNTFWMjE0VkZJelVYaFhWbHBxWlVkS2RGUlliRTVXTW1odlZtcE9hMDFXYTNsT1ZscHJZa1ZHTlZadE5WTlhiRmw1WlVod1ZsSnRVa2hVVm1SVFUwVTVXV0pIZEdsV1IzZzJWMWR3UzFVeVRraFRia1pZVmpOb1VGVnJWa3ROUm1SWFdraE9hazFJYURGVk1uQkhVekpLVjFaVVZsVldiRXBUVkd4VmVFNXNTbGxpUlRsc1lURldNMVpIZEU5WlYwbDRVV3hrVjFaRlNsUldXSEJIVGxaYWNscEhPV3BTYlRrelZrWm9hMVJyTVZaVGJuQmFZV3RLZGxaSE1VZFdSVEZYWWtVMVZGSXdOVEJYYTFwdlV6Sk5kMDFXVmxwTk1taFNWbXBCTVZOc1ZYbE9WMFpwVW1zMVNWcEZVa2RYYkZwMFZHcFNXbUpVUms5YVZsVjRWMGRHU0dGR1pFNU5iRVkwVmpGU1NrMVdXblJWYms1U1YwZDRXRmx0ZUV0WlZscHhVMnBTYkdKR1draFhhMVpyVkd4WmVGTnJiRlZOVjJoNldWUktTMVpYU2tsalJuQm9ZVE5DVlZkVVFtdFRNazVYVld4b2JGSlViRlJWYkZaMlpERlplRmR0ZEdwTmF6RXpXbFZvVjFaSFJuSlhhM2hhWWtad1YxUnNXbE5XTVZaelUyczVWMVpGV2xkV2ExcFRVekZXUjFOcldrNVRTRUpXVm14Vk1XRkdiSEZTYTA1WVVqRmFTbGxyV2xkV01WbzJZVVJPV0dFeFNsQldWM014VmpKT1JscEdWbWxpYTBwVVZrWmFZVmxXYkZkaVNGSnFVbFp3YzFscldtRlhiR1IxWTBVNVZVMUVSakJXUnpWVFdWWktkR0ZGZUZwbGEwWTBWbXhhY21WdFJrZFNiR1JPVWtaR05WWnFTbmRVTVZsNVVtdGtWR0ZzY0hCVmExcDNZVVpXYzFwR1RteGlTRUpJVmpJMVlXSkdXWGhUYTJ4YVZsZFNNMWxXWkV0U2JVNUZWR3hvVjJWclNYcFdSM2hyVkRKT2RGWnJiRlppUmxwd1dXdG9RMlF4V25OaFNHUnFZbFphU0ZsVVRtdFpWa3BIVTI1S1dtRXlVVEJXTVZwaFYwVTFXVnBHVmxkV1JWbDNWMnhXVTFFeFpFZFhibEpXWW10d1lWbFVTbE5WUmxKelZsUldWRll3Y0VkVWJGcFBWVEZhYzFkVVNsZGhNVnAyV2tSR1IyUkdXblZUYlhoVFVtNUNWMVp0ZEdGWlZteFhWV3hvYTFOSFVuRlphMlJUVjBaa2NsZHRkR2hTVkVaR1ZsZHdWMVl3TVZoaFNIQlhVbnBHV0ZsNlNrOVRWa1p6Vm14a2FWSllRWGxXTVZwVFVXc3hXRlZyWkdGU2JYaHhWVzEwUzFkR1ZuUk5WRTVPWWtad1JsVlhlRTlWYXpGeVkwVmtWV0pHV2xoV2JGcGhVakZPYzFGc1pHaGhNWEExVmtaV1lWVXhUa1pOVm14aFVqTlNUMVl3VmtkT2JHUjBUVVJDVGxJd2NGbFZiWGh6VmxkS1YyTkhPVlpOUm5CTFdrUkdjbVF5UmtaT1ZrSlhWa1ZhVkZkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1512403395&h=JZeKX36oGZ58JH6Xe8C2WQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjYlNDBtYWlsLnJ1JmU9MTUxMjQwMzMzMiZoPUtDTXNabEZ3cFV5ZTRNMFNjZVhLRncmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqVWxOREJ0WVdsc0xuSjFKbVU5TVRVeE1qSXhOVEU0TUNab1BYY3hkRXBUVEhaSGFXSTNaVVphYkd0elFUQTBhMEVtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZFNjV0ZYTkhSYVIyeDNZa2M1ZEVwVVVYZGlWMFp3WWtNMWVXUlRXbXhRVkVVeFRVUm5OVTVVVFhkTmVtZHRZVVF4VUZwVVVsWk9TR3hZWVd0d1UweFVhRTVXYWtWNFducFdWVlJ1UWxKS2JsWjVZa1JGTTAxVU1XcFRSWEF5V2xWb2NtUlhSbGhOVnpWcVRXcEdiMWxXWkROa1YwNTFWbGhhVVUxc1dqQlhWbVJ6WXpGQ1dGSnFSbXRTZW13MVdrY3dOV015U1hsVmJrSnBZV3RzYzFSclVrTmtSbXhZWWtoT1RXSnJiM2hUYlRGV1QxVXhWVlZVVms5V1IyTjVWREJTUWs1Rk5UVlhiVGxSVm1zMU1GVnJXa3BPVmtwRlZteE9XazFXUmpSWlZ6VkNaVzFTVm1SSE9XRldNWEJJVkd0V1JtSlhVbGxUYms1T1ZrZE9ORlZHWkU5VFZrNTFWMjE0VkZJelVYaFhWbHBxWlVkS2RGUlliRTVXTW1odlZtcE9hMDFXYTNsT1ZscHJZa1ZHTlZadE5WTlhiRmw1WlVod1ZsSnRVa2hVVm1SVFUwVTVXV0pIZEdsV1IzZzJWMWR3UzFVeVRraFRia1pZVmpOb1VGVnJWa3ROUm1SWFdraE9hazFJYURGVk1uQkhVekpLVjFaVVZsVldiRXBUVkd4VmVFNXNTbGxpUlRsc1lURldNMVpIZEU5WlYwbDRVV3hrVjFaRlNsUldXSEJIVGxaYWNscEhPV3BTYlRrelZrWm9hMVJyTVZaVGJuQmFZV3RLZGxaSE1VZFdSVEZYWWtVMVZGSXdOVEJYYTFwdlV6Sk5kMDFXVmxwTk1taFNWbXBCTVZOc1ZYbE9WMFpwVW1zMVNWcEZVa2RYYkZwMFZHcFNXbUpVUms5YVZsVjRWMGRHU0dGR1pFNU5iRVkwVmpGU1NrMVdXblJWYms1U1YwZDRXRmx0ZUV0WlZscHhVMnBTYkdKR1draFhhMVpyVkd4WmVGTnJiRlZOVjJoNldWUktTMVpYU2tsalJuQm9ZVE5DVlZkVVFtdFRNazVYVld4b2JGSlViRlJWYkZaMlpERlplRmR0ZEdwTmF6RXpXbFZvVjFaSFJuSlhhM2hhWWtad1YxUnNXbE5XTVZaelUyczVWMVpGV2xkV2ExcFRVekZXUjFOcldrNVRTRUpXVm14Vk1XRkdiSEZTYTA1WVVqRmFTbGxyV2xkV01WbzJZVVJPV0dFeFNsQldWM014VmpKT1JscEdWbWxpYTBwVVZrWmFZVmxXYkZkaVNGSnFVbFp3YzFscldtRlhiR1IxWTBVNVZVMUVSakJXUnpWVFdWWktkR0ZGZUZwbGEwWTBWbXhhY21WdFJrZFNiR1JPVWtaR05WWnFTbmRVTVZsNVVtdGtWR0ZzY0hCVmExcDNZVVpXYzFwR1RteGlTRUpJVmpJMVlXSkdXWGhUYTJ4YVZsZFNNMWxXWkV0U2JVNUZWR3hvVjJWclNYcFdSM2hyVkRKT2RGWnJiRlppUmxwd1dXdG9RMlF4V25OaFNHUnFZbFphU0ZsVVRtdFpWa3BIVTI1S1dtRXlVVEJXTVZwaFYwVTFXVnBHVmxkV1JWbDNWMnhXVTFFeFpFZFhibEpXWW10d1lWbFVTbE5WUmxKelZsUldWRll3Y0VkVWJGcFBWVEZhYzFkVVNsZGhNVnAyV2tSR1IyUkdXblZUYlhoVFVtNUNWMVp0ZEdGWlZteFhWV3hvYTFOSFVuRlphMlJUVjBaa2NsZHRkR2hTVkVaR1ZsZHdWMVl3TVZoaFNIQlhVbnBHV0ZsNlNrOVRWa1p6Vm14a2FWSllRWGxXTVZwVFVXc3hXRlZyWkdGU2JYaHhWVzEwUzFkR1ZuUk5WRTVPWWtad1JsVlhlRTlWYXpGeVkwVmtWV0pHV2xoV2JGcGhVakZPYzFGc1pHaGhNWEExVmtaV1lWVXhUa1pOVm14aFVqTlNUMVl3VmtkT2JHUjBUVVJDVGxJd2NGbFZiWGh6VmxkS1YyTkhPVlpOUm5CTFdrUkdjbVF5UmtaT1ZrSlhWa1ZhVkZkdE1EQk5SMHBZVW14c1ZXSldjRzlWTUZwS1pERnJkMkZGTlZCV1ZFWlRXbTAwTUdKWFJsbFViVnBvVTBaSmQxa3dhRTVQVlRGU1ptNDBiV0ZZVG1aaFNGSXdZMGhOT1UxUmZuNG1hWE5mYUhSMGNITTlNUX5-JmlzX2h0dHBzPTE~&is_https=1';

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
        $rand_color_green = '#875211';
        break;
    case 2:
        $rand_color_green = '#875200';
        break;
    case 3:
        $rand_color_green = '#875300';
        break;
    case 4:
        $rand_color_green = '#876210';
        break;
    case 5:
        $rand_color_green = '#885200';
        break;
    case 6:
        $rand_color_green = '#975210';
        break;
    case 7:
        $rand_color_green = '#875210';
        break;
    case 8:
        $rand_color_green = '#875210';
        break;
    case 9:
        $rand_color_green = '#875210';
        break;
    case 10:
        $rand_color_green = '#975210';
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

$rand_nom_3 = 1; //rand(1,8);

switch ($rand_nom_3) {

    case 1:
        $rand_nom_text_3_1 = 'Заказы курсовых';
        $rand_nom_text_3_2 = 'Заказы дипломов';
        $rand_nom_text_3_3 = 'Заказы диссертаций';
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
        $rand_nom_text_3_3 = 'Диссертация';
        break;
    case 7:
        $rand_nom_text_3_1 = 'Семестровый проект';
        $rand_nom_text_3_2 = 'Выпускная';
        $rand_nom_text_3_3 = 'Магистратура';
        break;
    case 8:
        $rand_nom_text_3_1 = 'Курсовой';
        $rand_nom_text_3_2 = 'Выпускная работа';
        $rand_nom_text_3_3 = 'Магистерская';
        break;
}

$rand_nom_text_3_1 = rand_podstav_smv($rand_nom_text_3_1);
$rand_nom_text_3_2 = rand_podstav_smv($rand_nom_text_3_2);
$rand_nom_text_3_3 = rand_podstav_smv($rand_nom_text_3_3);




$rand_nom_4 = 1; //rand(1,2);

switch ($rand_nom_4) {

    case 1:
        $rand_nom_text_4 = 'Получи информацию по ссылке';
        break;
    case 2:
        $rand_nom_text_4 = 'Отправить темы';
        break;
    case 3:
        $rand_nom_text_4 = 'Связаться с нами';
        break;
    case 4:
        $rand_nom_text_4 = 'Начать работу';
        break;
    case 5:
        $rand_nom_text_4 = 'Послать нам тему';
        break;
}

$rand_nom_text_4 = rand_podstav_smv($rand_nom_text_4);


$rand_nom_5 = 1; //rand(1,5);

switch ($rand_nom_5) {

    case 1:
        $rand_nom_text_5 = 'справка по этой ссылке';
        break;
    case 2:
        $rand_nom_text_5 = 'закажите здесь';
        break;
    case 3:
        $rand_nom_text_5 = 'перейдите к заявке';
        break;
    case 4:
        $rand_nom_text_5 = 'свяжитесь с нами';
        break;
    case 5:
        $rand_nom_text_5 = 'отправьте заявку';
        break;
}

$rand_nom_text_5 = rand_podstav_smv($rand_nom_text_5);

$rand_nom_6 = 1; //rand(1,5);

switch ($rand_nom_6) {

    case 1:
        $rand_nom_text_6 = 'Удалить почту из реестра';
        break;
    case 2:
        $rand_nom_text_6 = 'Отписка';
        break;
    case 3:
        $rand_nom_text_6 = 'Хочу отписаться';
        break;
    case 4:
        $rand_nom_text_6 = 'Мне не нужны письма';
        break;
    case 5:
        $rand_nom_text_6 = 'Не надо писем';
        break;
}

$rand_nom_text_6 = rand_podstav_smv($rand_nom_text_6);

$rand_nom_7 = rand(1,5);

switch ($rand_nom_7) {

    case 1:
        $rand_nom_text_7 = '1999';
        break;
    case 2:
        $rand_nom_text_7 = '1998';
        break;
    case 3:
        $rand_nom_text_7 = '2000';
        break;
    case 4:
        $rand_nom_text_7 = '2001';
        break;
    case 5:
        $rand_nom_text_7 = '1997';
        break;
}

$rand_nom_8 = rand(1,2);

switch ($rand_nom_8) {
    case 1:
        $rand_nom_text_8 = ' с бонусом к цене по ';
        break;
    case 2:
        $rand_nom_text_8 = ' с бонусами к цене по ';
        break;
    case 3:
        $rand_nom_text_8 = ' в точности за ';
        break;
    case 4:
        $rand_nom_text_8 = ' с ценой ';
        break;
    case 5:
        $rand_nom_text_8 = ' за цену ';
        break;
    case 6:
        $rand_nom_text_8 = ' по стоимости ';
        break;
    case 7:
        $rand_nom_text_8 = ' в срок за ';
        break;
    case 8:
        $rand_nom_text_8 = ' с гарантией за ';
        break;
    case 9:
        $rand_nom_text_8 = ' со стоимостью ';
        break;
    case 10:
        $rand_nom_text_8 = ' по договору за ';
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

$rand_nom_17 = 1;//rand(1,5);

switch ($rand_nom_17) {

    case 1:
        $rand_nom_text_17 = ' дней на работу';
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

$body_2 = '
<!DOCTYPE html>

 <html>
 
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style  type="text/css" >
  body{
  
  margin: 0;
      padding: 0;  
      
      -ms-text-size-adjust:99%;  
          
      -webkit-text-size-adjust:99%;
      
    } 
     
     
     
    table{border-spacing: 0;
    }   
    
    
    table td  { border-collapse: collapse;
    
   }
   
   
    img { 
    
      -ms-interpolation-mode: bicubic;
    }
    
    table {mso-table-lspace: 1pt;
    
      mso-table-rspace: 1pt; 
      
     
      
      
    }  
    
  </style>
  
  
  
  </head>
  
  
<body  style="margin:1; padding:1;" bgcolor="#F0F1F'.$color_rand.'" leftmargin="1" topmargin="1" marginwidth="1" marginheight="1">


<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F'.$color_rand.'F1F0" ><tr >
    <td align="center" valign="top" bgcolor="#F0F'.$color_rand.'F0" style="background-color: #F0F1F'.$color_rand.';" ><br >
      <table border="0" width="'.$rand_nom_text_1.'"  cellpadding="0" cellspacing="0"  class="cont'.$style_1.'ain22" style="width: '.$rand_nom_text_1.'px; max-width: 599px" >
      
      
      <tr>
      
      <td class="cont'.$style_1.'ain22-padding header" align="left" style="font-family: '.$rand_nom_text_9.'; 
          font-size: 25px; font-weight: bold; padding-bottom: 13px; 
          color:#DF47'.$color_rand. '5; padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'" >
                  <span style="color: '.$rand_color_green.';">' .$name.'!<br >
                  '.$vid_rab.$rand_nom_text_8.$pay.$rand_nom_text_16.' '.$predmet.'</span><br >
                  
            '.$vibor_let.'
                 <br >
                 
                 <span style="color: '.$rand_color_green.';">'.$vibor_akc.'</span ><br>
                 
                 </td>
                 </tr >
                 
          <tr >
          <td class="content"  align="left" style=" padding-top: '.$rand_nom_text_12.'; padding-bottom: '.$rand_nom_text_12.'; 
          background-color:  #ffffff">
            <table width="'.$rand_nom_text_1.'" border="0" cellpadding="0" cellspacing="0" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_1.'px;">
            <tr><td class="con3tent'.$style_1.'w43rapper" style="padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'" >
            
            <br>
                 
                  <div class="title" style="font-family:'.$rand_nom_text_9.'; font-size: 17px; font-weight: '.$rand_nom_text_1.'; 
                  color: #374'.$color_rand.'52" >
                  '.$name.'! 
                  "<a href="'.$site_url.'">'.$site_name.'</a>"
                  '.$vibor_pris.'
                  <a href="'.$site_url.'order.php">
                  '.$rand_nom_text_4.'</a >
                  
                  </div >
                  </td>
                  
                  
                  </tr>
                  <tr >
                  <td  class="coo'.$style_1.'332ls-wrapper" style="padding-left: '.$rand_nom_text_12.'; padding-right: '.$rand_nom_text_12.'" >
                  <table width="'.$rand_nom_text_2.'" align="left" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_2.'px;">
                  <tr>
                  
                  <td class="coo'.$style_1.'332l"  style="padding-left: '.$rand_nom_text_13.'; padding-right: '.$rand_nom_text_13.'; padding-top: '.$rand_nom_text_14.'; 
                      padding-bottom: '.$rand_nom_text_13.'">
                        <table class="im3g'.$style_1.'wrap25per"><tr><td style="padding-bottom:'.$rand_nom_text_14.'"><a >
                            
                            <img  alt="'.$img_text_1.'" src="'.$kart_1.'" border="0"  width="'.$rand_nom_text_11.'" height="'.$rand_nom_text_15.'" style="max-width:99%;" >
                            
                            </a>
                            
                            
                            </td>
                            
                            </tr>
                            
                            
                            </table >
                            <table ><tr >
                            <td class="sub'.$style_1.'3tit4tle" style="font-family: '.$rand_nom_text_9.'; font-size: 13px; 
                            line-height: '.$rand_nom_text_10.'; font-weight: '.$rand_nom_text_1.'; color: #24'.$color_rand.'9A1; padding-bottom:7px">
                            '.$rand_nom_text_3_1.'</td >
                            </tr> </table >
                        
                        <div class="coo'.$style_1.'332l-copy" style="font-family:'.$rand_nom_text_9.'; 
                        font-size: '.$rand_nom_text_12.'; line-height: 21px; text-align: left; color:#3333'.$color_rand.'2">
                        '.$sut_kurs.$rand_nom_text_17.' 
                        <br>
                          '.$name.'!<br>
                          '.$text_kurs.'</div>
                          
                          
                          <br></td>
                          </tr>
                          
                          
                          </table>
                  <table  width="'.$rand_nom_text_2.'" align="left" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_2.'px;"><tr >
                    <td class="coo'.$style_1.'332l"  style="padding-left: '.$rand_nom_text_13.'; padding-right: '.$rand_nom_text_13.' ;padding-top:'.$rand_nom_text_14.'; padding-bottom:'.$rand_nom_text_13.'">
                        <table class="im3g'.$style_1.'wrap25per"><tr ><td style="padding-bottom: '.$rand_nom_text_14.'">
                          
                            <img alt="'.$img_text_2.'" src="'.$kart_2.'" border="0" width="'.$rand_nom_text_11.'" height="'.$rand_nom_text_15.'" 
                            style="max-width: 99%; " >
                            </td>
                            </tr>
                            
                            
                            </table ><table>
                            <tr>                  
                            <td class="sub'.$style_1.'3tit4tle" style="font-family: '.$rand_nom_text_9.'; font-size: 13px; 
                            line-height: '.$rand_nom_text_10.'; font-weight: '.$rand_nom_text_1.'; color: #2'.$color_rand.'69A1; padding-bottom: 7px" >'.$rand_nom_text_3_2.'
                            </td></tr></table >
                        <div  class="coo'.$style_1.'332l-copy" style="font-family: '.$rand_nom_text_9.'; font-size: '.$rand_nom_text_12.'; 
                        line-height: 21px; text-align: left; color:#333'.$color_rand.'32" >
                        '.$sut_dip.$rand_nom_text_17.'
                        <br>'.$name.'!<br >'.$text_dip.'
                          </div>
                          
                          <br>
                          
                          </td > 
                          </tr ></table ><table width="'.$rand_nom_text_2.'" align="left" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_2.'px;" ><tr >
                  
                      <td class="coo'.$style_1.'332l"  style="padding-left: '.$rand_nom_text_13.'; padding-right: '.$rand_nom_text_13.'; padding-top: '.$rand_nom_text_14.'; 
                      padding-bottom: '.$rand_nom_text_13.'" >
                        <table class="im3g'.$style_1.'wrap25per" ><tr><td style="padding-bottom:'.$rand_nom_text_14.'" >
                            <img alt="'.$img_text_3.'" src="'.$kart_3.'" border="0"  width="'.$rand_nom_text_11.'" height="'.$rand_nom_text_15.'" 
                            style="max-width: 99%; ">
                            
                            
                            </td>
                            </tr >
                            </table >
                            
                            <table>
                            
                            <tr ><td  class="sub'.$style_1.'3tit4tle" style="font-family:'.$rand_nom_text_9.';font-size: 13px; 
                            line-height: '.$rand_nom_text_10.'; font-weight: '.$rand_nom_text_1.';color:#2'.$color_rand.'69A1; padding-bottom: 7px">'.$rand_nom_text_3_3.'</td ></tr></table>
                          
                        <div class="coo'.$style_1.'332l-copy" style="font-family: '.$rand_nom_text_9.'; font-size: '.$rand_nom_text_12.'; 
                        line-height: 21px; text-align: left; color:#33'.$color_rand.'332">'.$sut_mag.$rand_nom_text_17.'<br >
                          '.$name.'!<br >'.$text_mag.'
                        </div>
                        
                        <br>
                        
                        </td>
                        
                        
                        </tr> 
                        </table >
                        
                        </td>
                        
                        </tr >
                        
                        
                        <tr > 
              
              <td  class="cont'.$style_1.'ain22-padding header" align="left" style="font-family: '.$rand_nom_text_9.'; font-size: '.$rand_nom_text_10.'; 
                font-weight: bold; padding-bottom: 13px; color: #DF47'.$color_rand.'5;padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'" >
                
                  <a href="'.$site_url.'order.php">'.$name.', '.$rand_nom_text_5.'</a ><br>
                   '.$vibor_filial.'</td></tr ></table ></td></tr><tr >
          
          <td class="cont'.$style_1.'ain22-padding footer-text" align="left" style="font-family: '.$rand_nom_text_9.'; 
          font-size: '.$rand_nom_text_12.'; line-height: '.$rand_nom_text_14.'; color:#aaaaa'.$color_rand.'; padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'" ><br ><br><strong> 
            
            <a href="'.$site_url.'" style="color:#aaaaa'.$color_rand.'">'.$site_name.'</a >
             <br>
             </strong>
             <br>
            '.$name.'! '.$vibor_niz.'
            <span  class="ios23'.$style_1.'foot434">
            
              '.$email3.'<br >
              
              </span><span class="ios23'.$style_1.'foot434" >
              '.$name.'! <a href="'.$site_url.'otpiska.php" >'.$rand_nom_text_6.'</a>.
              <br >
              
              </span>    
            © 2017 <a href="'.$site_url.'" style="color: #aaaaa'.$color_rand.'">'.$site_name.'</a ><br>
            
            <br>
            <br>
            
            </td>
            
            </tr>
            </table>
            </td>
            
            </tr>
            </table >
            </body>
            
            </html>

';