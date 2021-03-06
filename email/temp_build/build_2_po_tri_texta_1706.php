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
        $vibor_let = 'В июне скидки на дипломы до 50%.';
        break;
    case 2:
        $vibor_let = 'Летния акция минус 50 % цены.';
        break;
    case 3:
        $vibor_let = 'Летом цена работ снижена вдвое.';
        break;

}

$vibor_let = rand_podstav_smv($vibor_let);


//Без предоплаты сделано

$vibor_akc_case = rand(1,3);

switch ($vibor_akc_case) {
    case 1:
        $vibor_akc = 'Запустим Ваш заказ без предоплаты.';
        break;
    case 2:
        $vibor_akc = 'Никакой предоплаты в новом сезоне.';
        break;
    case 3:
        $vibor_akc = 'Начнем бесплатно выполнять диплом.';
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
        $vibor_pris = ' гарантирует бесплатные доработки. Заключает официальный договор, ИНН, оплата с чеком. 
        Возможна оплата в офисе. ';
        break;
    case 2:
        $vibor_pris = ' корректирует работы без дополнительных оплат. Гарантирует качество диплома по договору. Предоставляет 
        чек, регистрацию ФНС. ';
        break;
    case 3:
        $vibor_pris = ' ведет до успешной сдачи. Контролирует авторов, зарегистрирована в реестре учебных компаний России. 
         Заключает договор. ';
        break;

}

$vibor_pris = rand_podstav_smv($vibor_pris);


//Текст курсовой

$text_kurs_case = rand(1,3);

switch ($text_kurs_case) {

    case 1:
        $text_kurs = 'У нас курсовые работы пишутся по ГОСТу. За рулем только аспиранты, кандидаты наук, а также опытные авторы.
        ';
        break;
    case 2:
        $text_kurs = 'Мы соблюдаем все стандарты написания курсовых. Работаем по Вашим указаниям. Авторы - профессионалы-ботаники.
        ';
        break;
    case 3:
        $text_kurs = 'Наши авторы закончили университеты и получили научные степени. Разбираются в предмете и пишут по методичкам.
        ';
        break;


}


$text_kurs = rand_podstav_smv($text_kurs);

//Текст дипломной

$text_dip_case = rand(1,3);

switch ($text_dip_case) {
    case 1:
        $text_dip = 'Для дипломных работ мы отбираем только лучших авторов. Мало иметь степень - нужно иметь опыт написания диплома.
        ';
        break;
    case 2:
        $text_dip = 'Мы селекционируем самых успешных авторов, на счету которых многие десятки и сотни написанных дипломных работ.
        ';
        break;
    case 3:
        $text_dip = 'Наши авторы дипломных работ сидят в экзаменационных коммиссиях ВУЗов, поэтому знают толк в написании дипломов.
        ';
        break;


}

$text_dip = rand_podstav_smv($text_dip);

//Текст магистерской

$text_mag_case = rand(1,3);

switch ($text_mag_case) {
    case 1:
        $text_mag = 'Мы выполняем магистерские диссертации досконально, со знанием дела. Процесс удаленно контролируют доктора наук.
        ';
        break;
    case 2:
        $text_mag = 'Диссертации у нас пишут кандидаты и доктора наук, поэтому можно не беспокоиться о качестве и научной новизне.
        ';
        break;
    case 3:
        $text_mag = 'В нашей компании одну магистерскую диссертацию ведут сразу несколько специалистов, курирует все доктор наук.
        ';
        break;

}

$text_mag = rand_podstav_smv($text_mag);

//Выбор Скидки

$vibor_filial_case = rand(1,3);

switch ($vibor_filial_case) {
    case 1:
        $vibor_filial = 'Посетите наши офисы в крупных городах России.';
        break;
    case 2:
        $vibor_filial = 'Пять филиалов по всей Российской Федерации';
        break;
    case 3:
        $vibor_filial = 'Офисы во многих городах РФ, включая Севастополь.';
        break;
}

$vibor_filial = rand_podstav_smv($vibor_filial);



//Выбор низа

$vibor_niz_case = rand(1, 3);

switch ($vibor_niz_case) {
    case 1:
        $vibor_niz = 'Мы выполняем работы с душой уже долгие годы.<br>
Десятки тысяч студентов остались благодарным нам.<br>
Мы постоянно улучшаем квалификацию наших авторов.<br>
Только профессионалы и специалисты, только кандидаты и доктора наук, только доценты и профессоры!<br>
';
        break;
    case 2:
        $vibor_niz = 'Семь лет на службе у студентов - и лучшие оценки в этом секторе услуг.<br>
        Нас хвалят, нас благодарят.<br>
        И все потому, что мы выбираем только лучших авторов.<br>
        У нас только профессора и кандидаты, доценты и доктора наук!<br>
        
';
        break;
    case 3:
        $vibor_niz = 'Нам под силу сделать отлично Вашу работу.<br>
        Мы сделаем ее за умеренную плату.<br>
        В нашем распоряжении - профессорский состав университетов России.<br>
        Кандидаты и доктора выполнят Вашу курсовую, диплом или магистерскую на высший балл!<br>
';
        break;

}

$vibor_niz = rand_podstav_smv($vibor_niz);



$style_1 = rand(3234, 2343).'adfdpt';


function kart_vibor_1 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1497544870&h=J5hNBx3t5i85R25JrdieoQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjIlNDBtYWlsLnJ1JmU9MTQ5NTg2ODA4NyZoPWRmU1VBeDJ4a2VnNlZYTnNTRGo0ZEEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqWWxOREJ0WVdsc0xuSjFKbVU5TVRRNU16RXlOekUwTkNab1BXbE9aMDg0YkdSb05UaFVlRmwyY1hOMlptSTNaa0VtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZEdNV1JIT1hsa2JUbHpZakpTY0dKcVVXeE9SRUowV1Zkc2MweHVTakZLYlZVNVRWUlJOVTFVVFRKT2VsVjVUbE5hYjFCVmVISlNSVkYwVFdwT2JsTnNSblZWUjBaaFdESnNTV0l6YUZSa1IyTnRaRmhLYzAxVVkzaFFWMDQyV2pOV2FGSjZiRFphUldSelpGWnZlV1JIYUdwaWJFcDNXVzB3TldOcmVIUlVibHBwVlhwcmVGa3daRFJrYkd4WVZXNXdUVTF0ZURCWFZtUnJZa2RPTlU5SWJFNVNSVlY2VkVod1FtVnJkM2xXYlhCUFpXdEdORlJVU2xOaVJuQnhZWHBPVDJKV2JETlhWekZQWVdzMVNGVnRjRkJTUlRFMlZERlNUazB3TkhsVGJYUlBWakZyZUZSSE1YZGtNWEF6Wm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1497544888&h=sdQ4lAM82IQKMQorecXqAg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjIlNDBtYWlsLnJ1JmU9MTQ5NTg2ODA4NyZoPWRmU1VBeDJ4a2VnNlZYTnNTRGo0ZEEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqWWxOREJ0WVdsc0xuSjFKbVU5TVRRNU16RXlOekUwTkNab1BXbE9aMDg0YkdSb05UaFVlRmwyY1hOMlptSTNaa0VtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZEdNV1JIT1hsa2JUbHpZakpTY0dKcVVXeE9SRUowV1Zkc2MweHVTakZLYlZVNVRWUlJOVTFVVFRKT2VsVjVUbE5hYjFCVmVISlNSVkYwVFdwT2JsTnNSblZWUjBaaFdESnNTV0l6YUZSa1IyTnRaRmhLYzAxVVkzaFFWMDQyV2pOV2FGSjZiRFphUldSelpGWnZlV1JIYUdwaWJFcDNXVzB3TldOcmVIUlVibHBwVlhwcmVGa3daRFJrYkd4WVZXNXdUVTF0ZURCWFZtUnJZa2RPTlU5SWJFNVNSVlY2VkVod1FtVnJkM2xXYlhCUFpXdEdORlJVU2xOaVJuQnhZWHBPVDJKV2JETlhWekZQWVdzMVNGVnRjRkJTUlRFMlZERlNUazB3TkhsVGJYUlBWakZyZUZSSE1YZGtNWEF6Wm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1497544899&h=p_438_EyKBpb5sspUuw4BQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjIlNDBtYWlsLnJ1JmU9MTQ5NTg2ODA4NyZoPVBoMTcybnNzbXgxcWlCRUNTZXVsVncmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqWWxOREJ0WVdsc0xuSjFKbVU5TVRRNU16RXlOekU1Tnlab1BVcENWSEE1VUdoWmJtNTRjVkE0VFZaV2F6SmxlRkVtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZEdNV1JIT1hsa2JUbHpZakpTY0dKcVVXeE9SRUowV1Zkc2MweHVTakZLYlZVNVRWUlJOVTFVVFRKT2VsVjVUbE5hYjFCVmVISlNSVkYwVFdwT2JsTnNSblZWUjBaaFdESnNTV0l6YUZSa1IyTnRaRmhLYzAxVVkzaFFWMDQyV2pOV2FGSjZiRFphUldSelpGWnZlV1JIYUdwaWJFcDNXVzB3TldOcmVIUlVibHBwVlhwcmVGa3daRFJrYkd4WVZXNXdUVTF0ZURCWFZtUnJZa2RPTlU5SWJFNVNSVlY2VkVod1FtVnJkM2xXYlhCUFpXdEdORlJVU2xOaVJuQnhZWHBPVDJKV2JETlhWekZQWVdzMVNGVnRjRkJTUlRFMlZERlNUazB3TkhsVGJYUlBWakZyZUZSSE1YZGtNWEF6Wm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';

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
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1497544870&h=hGK99y_5iE-UZUAp32ArdA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjIlNDBtYWlsLnJ1JmU9MTQ5NTg2ODA4NyZoPTh6WTZmUHM2SDZmTnU4MmZwOGM3bEEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqWWxOREJ0WVdsc0xuSjFKbVU5TVRRNU16RXlOekUwTkNab1BWb3pjbTh6UkdWRVdISkpiVlJ1UjB4VFJYRmtlVkVtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZEdNV1JIT1hsa2JUbHpZakpTY0dKcVVXeE9SRUowV1Zkc2MweHVTakZLYlZVNVRWUlJOVTFVVFRKUFJFVTBUVk5hYjFCVVZUUk9NRWt3VlRGa2IxVldTbUZTYW14c1ZFaHdkVnBxUW1aTk1tTnRaRmhLYzAxVVkzaFFWMDQyV2pOV2FGSjZiRFphUldSelpGWnZlV1JIYUdwaWJFcDNXVzB3TldOcmVIUlVibHBwVlhwcmVGa3daRFJrYkd4WVZXNXdUVTF0ZURCWFZtUnJZa2RPTlU5SWJFNVNSVlY2VkVod1FtVnJlRFpVV0dSUVZqRkZNRlJyVWxwT1JUVTJVMjFvVGxZeFZUQlVibkJDWkRBeE5tRjZUazlTTUhCdlYxY3hWbVZHY0hSVGJYaE9ZbFp3YjFSSE1YZGtNWEF6Wm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1497544888&h=rMcNJHrzs_Au2ilH75H2Sg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjIlNDBtYWlsLnJ1JmU9MTQ5NTg2ODA4NyZoPTh6WTZmUHM2SDZmTnU4MmZwOGM3bEEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqWWxOREJ0WVdsc0xuSjFKbVU5TVRRNU16RXlOekUwTkNab1BWb3pjbTh6UkdWRVdISkpiVlJ1UjB4VFJYRmtlVkVtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZEdNV1JIT1hsa2JUbHpZakpTY0dKcVVXeE9SRUowV1Zkc2MweHVTakZLYlZVNVRWUlJOVTFVVFRKUFJFVTBUVk5hYjFCVVZUUk9NRWt3VlRGa2IxVldTbUZTYW14c1ZFaHdkVnBxUW1aTk1tTnRaRmhLYzAxVVkzaFFWMDQyV2pOV2FGSjZiRFphUldSelpGWnZlV1JIYUdwaWJFcDNXVzB3TldOcmVIUlVibHBwVlhwcmVGa3daRFJrYkd4WVZXNXdUVTF0ZURCWFZtUnJZa2RPTlU5SWJFNVNSVlY2VkVod1FtVnJlRFpVV0dSUVZqRkZNRlJyVWxwT1JUVTJVMjFvVGxZeFZUQlVibkJDWkRBeE5tRjZUazlTTUhCdlYxY3hWbVZHY0hSVGJYaE9ZbFp3YjFSSE1YZGtNWEF6Wm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1497544899&h=BMgGTIKc8YywlbwlF5mFUg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjIlNDBtYWlsLnJ1JmU9MTQ5NTg2ODA4NyZoPVFoWk03NHRoNThacEs2TlY4aE1RQlEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqWWxOREJ0WVdsc0xuSjFKbVU5TVRRNU16RXlOekEwTmlab1BXSkNhVUpYT1dWQ1ZVcE9UUzExZGtkd1FXUjJWMEVtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZEdNV1JIT1hsa2JUbHpZakpTY0dKcVVXeE9SRUowV1Zkc2MweHVTakZLYlZVNVRWUlJOVTFVVFRKUFJFVTBUVk5hYjFCVVZUUk9NRWt3VlRGa2IxVldTbUZTYW14c1ZFaHdkVnBxUW1aTk1tTnRaRmhLYzAxVVkzaFFWMDQyV2pOV2FGSjZiRFphUldSelpGWnZlV1JIYUdwaWJFcDNXVzB3TldOcmVIUlVibHBwVlhwcmVGa3daRFJrYkd4WVZXNXdUVTF0ZURCWFZtUnJZa2RPTlU5SWJFNVNSVlY2VkVod1FtVnJlRFpVV0dSUVZqRkZNRlJyVWxwT1JUVTJVMjFvVGxZeFZUQlVibkJDWkRBeE5tRjZUazlTTUhCdlYxY3hWbVZHY0hSVGJYaE9ZbFp3YjFSSE1YZGtNWEF6Wm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';

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
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1497544870&h=Ch0rrVyQ53ZjDXOhvIlenA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjIlNDBtYWlsLnJ1JmU9MTQ5NTg2ODA4NyZoPVNtRFI5RDVSY1QxanAzdUtoZWZGNEEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqWWxOREJ0WVdsc0xuSjFKbVU5TVRRNU16RXlOekUwTkNab1BWVTBSUzF5VkdocFowTXdNMUJzYjBoTmFTMVlNSGNtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZEdNV1JIT1hsa2JUbHpZakpTY0dKcVRXeE9SRUowV1Zkc2MweHVTakZLYlZVNVRWUlJOVTFVVFRKUFJFMHpUVU5hYjFCWGVIbFVWVzh3WkROUk5WcEdUbnBSTVZaYVltcEZlbFZZWnpOT01tTnRaRmhLYzAxVVkzaFFWMDQyV2pOV2FGSjZiRFphUldSelpGWnZlV1JIYUdwaWJFcDNXVzB3TldOcmVIUlVibHBwVlhwcmVGa3daRFJrYkd4WVZXNXdUVTF0ZURCWFZtUnJZa2RPTlU5SWJFNVNSVlY2VkVod1FtVnJlRFpVVkZaYVRXdHdjbGRXWkZkaE1EUjVWMWhzVG1Wc2NIQlVWbEp2WVRBMWRGZFljRkJXUm13MlZEQlNRMkpGTlVWVVZGSlBWakZyTUZSSE1YZGtNWEF6Wm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1497544888&h=1KuxeFMH7NlNKEeyr0u-mA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjIlNDBtYWlsLnJ1JmU9MTQ5NTg2ODA4NyZoPVNtRFI5RDVSY1QxanAzdUtoZWZGNEEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqWWxOREJ0WVdsc0xuSjFKbVU5TVRRNU16RXlOekUwTkNab1BWVTBSUzF5VkdocFowTXdNMUJzYjBoTmFTMVlNSGNtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZEdNV1JIT1hsa2JUbHpZakpTY0dKcVRXeE9SRUowV1Zkc2MweHVTakZLYlZVNVRWUlJOVTFVVFRKUFJFMHpUVU5hYjFCWGVIbFVWVzh3WkROUk5WcEdUbnBSTVZaYVltcEZlbFZZWnpOT01tTnRaRmhLYzAxVVkzaFFWMDQyV2pOV2FGSjZiRFphUldSelpGWnZlV1JIYUdwaWJFcDNXVzB3TldOcmVIUlVibHBwVlhwcmVGa3daRFJrYkd4WVZXNXdUVTF0ZURCWFZtUnJZa2RPTlU5SWJFNVNSVlY2VkVod1FtVnJlRFpVVkZaYVRXdHdjbGRXWkZkaE1EUjVWMWhzVG1Wc2NIQlVWbEp2WVRBMWRGZFljRkJXUm13MlZEQlNRMkpGTlVWVVZGSlBWakZyTUZSSE1YZGtNWEF6Wm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1497544899&h=JoN-0QTQ-dHE4qE8nmXoiQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjIlNDBtYWlsLnJ1JmU9MTQ5NTg2ODA4NyZoPTQyZDA2blBzQWVPMG9jTExlYlZmeHcmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdGMWRHOXlkbTlzYjJScGJqWWxOREJ0WVdsc0xuSjFKbVU5TVRRNU16RXlOekEwTmlab1BWOVFkMEk1YmtkTU5tNUxTRXhMVEhKUVZsOXNUMUVtZFhKc01UY3hQV05JU25abFNHdDFZVmN4Ym1NeU1XaGhWM2QxWTI1VmRsQXlWblJaVjJ4elVGZEdNV1JIT1hsa2JUbHpZakpTY0dKcVRXeE9SRUowV1Zkc2MweHVTakZLYlZVNVRWUlJOVTFVVFRKUFJFMHpUVU5hYjFCWGVIbFVWVzh3WkROUk5WcEdUbnBSTVZaYVltcEZlbFZZWnpOT01tTnRaRmhLYzAxVVkzaFFWMDQyV2pOV2FGSjZiRFphUldSelpGWnZlV1JIYUdwaWJFcDNXVzB3TldOcmVIUlVibHBwVlhwcmVGa3daRFJrYkd4WVZXNXdUVTF0ZURCWFZtUnJZa2RPTlU5SWJFNVNSVlY2VkVod1FtVnJlRFpVVkZaYVRXdHdjbGRXWkZkaE1EUjVWMWhzVG1Wc2NIQlVWbEp2WVRBMWRGZFljRkJXUm13MlZEQlNRMkpGTlVWVVZGSlBWakZyTUZSSE1YZGtNWEF6Wm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';

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