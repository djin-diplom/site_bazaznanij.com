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
        $vibor_let = 'Скидка на заказ в летнюю пору 25%.';
        break;
    case 2:
        $vibor_let = 'Летние скидки на заказы от 25 %.';
        break;
    case 3:
        $vibor_let = 'В конце июня и в июле акции -20%.';
        break;

}

$vibor_let = rand_podstav_smv($vibor_let);


//Без предоплаты сделано

$vibor_akc_case = rand(1,3);

switch ($vibor_akc_case) {
    case 1:
        $vibor_akc = 'Начнем выполнять диплом без предоплаты.';
        break;
    case 2:
        $vibor_akc = 'Летом работаем без начальной платы.';
        break;
    case 3:
        $vibor_akc = 'Без всякой предоплаты запустим заказ.';
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
        $vibor_pris = ' функционирует строго по договору оферты. Компания числится в реестре образовательных центров СПБ. 
        Дорабтки бесплатно. ';
        break;
    case 2:
        $vibor_pris = ' корректирует работы бесплатно в рамках договора. Компания высылает чек, работает официально по 
         законодательству РФ. ';
        break;
    case 3:
        $vibor_pris = ' обеспечивает Заказчикам бесплатные доработки в рамках оферты. Надежность и качество даёт регистрация 
         в каталоге компаний России. ';
        break;

}

$vibor_pris = rand_podstav_smv($vibor_pris);


//Текст курсовой

$text_kurs_case = rand(1,3);

switch ($text_kurs_case) {

    case 1:
        $text_kurs = 'Компания выполняет курсовые по методическим указаниям Заказчика. Руководят работой кандидаты наук.
        ';
        break;
    case 2:
        $text_kurs = 'Студия следует лучшим традициям создания курсовых проектов. Специалисты работают по методике клиента.
        ';
        break;
    case 3:
        $text_kurs = 'Авторский коллектив Центра имеет награды и опыт работы. Все досконально разбираются в своём предмете.
        ';
        break;


}


$text_kurs = rand_podstav_smv($text_kurs);

//Текст дипломной

$text_dip_case = rand(1,3);

switch ($text_dip_case) {
    case 1:
        $text_dip = 'При работе над дипломными проектами Студия отбирает кандидатов и докторов с богатым опытом работы.
        ';
        break;
    case 2:
        $text_dip = 'Компания сотрудничает лишь с правильными исполнителями, теми, кто ежедневно успешно пишет дипломы.
        ';
        break;
    case 3:
        $text_dip = 'Авторский состав Студии и менеджеры занимают должности в вузах России и разбираются в своем деле.
        ';
        break;


}

$text_dip = rand_podstav_smv($text_dip);

//Текст магистерской

$text_mag_case = rand(1,3);

switch ($text_mag_case) {
    case 1:
        $text_mag = 'Центр выдает диссертации под ключ по всем стандартам. Для контроля над автором выделяется доктор наук.
        ';
        break;
    case 2:
        $text_mag = 'В компании для изготовления магистерских используются лишь кандидаты и доктора с солидным опытом работы.
        ';
        break;
    case 3:
        $text_mag = 'Студия поручает контроль за написанием магистерских нескольким специалистам с научной степенью по предмету.
        ';
        break;

}

$text_mag = rand_podstav_smv($text_mag);

//Выбор Скидки

$vibor_filial_case = rand(1,3);

switch ($vibor_filial_case) {
    case 1:
        $vibor_filial = 'Наши филиалы есть не только в СПБ, но и в Москве.';
        break;
    case 2:
        $vibor_filial = 'Офисы компании открыты в Питере, Уфе и Казани.';
        break;
    case 3:
        $vibor_filial = 'Отделения в каждом уголке России, даже в Крыму.';
        break;
}

$vibor_filial = rand_podstav_smv($vibor_filial);



//Выбор низа

$vibor_niz_case = rand(1, 3);

switch ($vibor_niz_case) {
    case 1:
        $vibor_niz = 'Заказав написание реферата, курсовой дипломной или кандидатской в нашей компании, Вы:<br>
        Имеете на руках Wordовский файл с работой, оформленной согласно ГОСТу или требованиям вашего ВУЗа,<br>
        Спокойны за Антиплагиат, т.к. в работе не менее 85% оригинального текста,<br>
        Гарантировано избавлены от несдачи, поскольку все замечания вашего научного исправлены.<br>
';
        break;
    case 2:
        $vibor_niz = 'Работы пишутся на самом деле, а не собираются методом копи-паста из Интернета.<br>
        Авторами работ являются практикующие специалисты в своей области – адвокаты, экономитсты, политологи, инженеры,<br> 
        психологи, научные сотрудники, педагоги.<br>
        Не студенты и не копирайтеры на подработке.<br>   
';
        break;
    case 3:
        $vibor_niz = 'Дается пожизненная гарантия на работы.<br>
        Вы не переживаете за то, что еще не показали работу научному, <br>
        а гарантийный срок уже истек.<br>
        Мы исправим замечания, даже если они поступят через год.<br>
        Вы будете готовы к сдаче точно в срок и даже заранее – <br>
        работы и исправления замечаний высылаются без задержек и проволочек.<br>
';
        break;

}

$vibor_niz = rand_podstav_smv($vibor_niz);



$style_1 = rand(3234, 2343).'adfdpt';


function kart_vibor_1 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938287&h=qwaRW5dHOWqEAkf2c8RqZQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI0NzcmaD02MHdHUDlkMlVRQUVuLWxiYXBUT1NBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0zTWpVbWFEMDVOWEJQTVU5RWFHSTFkMWxCWlcxNFFWVnhNV3RSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFRucEJiV0ZFTVV0T1YyaFBVVzVuZW1SRVZuQlBSRlpUVFdwV1MyTnRVbkJhVnpsU1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZZeFNuUldWRVpYVVcxV1JWTnFVbWhOYkZwMVZHMTRZVmRXVW5WVWJGSlRVakk0ZDFkclZrWmlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXhWak5XUjNSUFdWZEplRkZzYUdsU1ZHeG9WRlZTYmsxR2JISmFSazVwVFVSV1ZsbFZXbGRpUmtwMFpETnNXazFYYUZCVVYzaDNaRVpPVlZSdFJtaE5SbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFac2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VVhsV2JrNVhZV3hhVmxsclZURmhSbXh4VW10T1YySldXa3BWTW5oUFZURmFjbGRZWkZkU2JWSXpWa1JLUzJNeFVuVlViRTVwWWtad1dGWlhjRU5aVjBaSFdrVldWR0pyTlZWV2FrSnpUbXhzVmxkc1RtaE5WV3cxVmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxMFRrMXVhRmxYVjNodlVURldSMk5HYUd0U1YxSlFWVzE0UzFac1ZYbGxSVGxvVm10d01WVlhOVzlYYkdSSlVXeENWMUpGY0V4V2FrcExVbFpTYzJGR1pHeGhNWEJTVmpGYWEyVnJNVmRVYTJSWFlteEtjVlZ0ZEV0V1JsWnpWV3RhVG1KR2NFWlZiWGhQVmxkR05sRnFUbFZoTW1oNlZtdGtTMWRXVm5OUmJHUm9ZVEZ3TlZkc1ZtRlZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938329&h=sVPTM84aD8Kx_Ly534wtWA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI0NzcmaD02MHdHUDlkMlVRQUVuLWxiYXBUT1NBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0zTWpVbWFEMDVOWEJQTVU5RWFHSTFkMWxCWlcxNFFWVnhNV3RSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFRucEJiV0ZFTVV0T1YyaFBVVzVuZW1SRVZuQlBSRlpUVFdwV1MyTnRVbkJhVnpsU1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZZeFNuUldWRVpYVVcxV1JWTnFVbWhOYkZwMVZHMTRZVmRXVW5WVWJGSlRVakk0ZDFkclZrWmlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXhWak5XUjNSUFdWZEplRkZzYUdsU1ZHeG9WRlZTYmsxR2JISmFSazVwVFVSV1ZsbFZXbGRpUmtwMFpETnNXazFYYUZCVVYzaDNaRVpPVlZSdFJtaE5SbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFac2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VVhsV2JrNVhZV3hhVmxsclZURmhSbXh4VW10T1YySldXa3BWTW5oUFZURmFjbGRZWkZkU2JWSXpWa1JLUzJNeFVuVlViRTVwWWtad1dGWlhjRU5aVjBaSFdrVldWR0pyTlZWV2FrSnpUbXhzVmxkc1RtaE5WV3cxVmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxMFRrMXVhRmxYVjNodlVURldSMk5HYUd0U1YxSlFWVzE0UzFac1ZYbGxSVGxvVm10d01WVlhOVzlYYkdSSlVXeENWMUpGY0V4V2FrcExVbFpTYzJGR1pHeGhNWEJTVmpGYWEyVnJNVmRVYTJSWFlteEtjVlZ0ZEV0V1JsWnpWV3RhVG1KR2NFWlZiWGhQVmxkR05sRnFUbFZoTW1oNlZtdGtTMWRXVm5OUmJHUm9ZVEZ3TlZkc1ZtRlZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938356&h=5DQuuG7JXtOt3jW_N8Nn4w&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI0NzcmaD02MHdHUDlkMlVRQUVuLWxiYXBUT1NBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0zTWpVbWFEMDVOWEJQTVU5RWFHSTFkMWxCWlcxNFFWVnhNV3RSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFRucEJiV0ZFTVV0T1YyaFBVVzVuZW1SRVZuQlBSRlpUVFdwV1MyTnRVbkJhVnpsU1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZZeFNuUldWRVpYVVcxV1JWTnFVbWhOYkZwMVZHMTRZVmRXVW5WVWJGSlRVakk0ZDFkclZrWmlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXhWak5XUjNSUFdWZEplRkZzYUdsU1ZHeG9WRlZTYmsxR2JISmFSazVwVFVSV1ZsbFZXbGRpUmtwMFpETnNXazFYYUZCVVYzaDNaRVpPVlZSdFJtaE5SbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFac2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VVhsV2JrNVhZV3hhVmxsclZURmhSbXh4VW10T1YySldXa3BWTW5oUFZURmFjbGRZWkZkU2JWSXpWa1JLUzJNeFVuVlViRTVwWWtad1dGWlhjRU5aVjBaSFdrVldWR0pyTlZWV2FrSnpUbXhzVmxkc1RtaE5WV3cxVmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxMFRrMXVhRmxYVjNodlVURldSMk5HYUd0U1YxSlFWVzE0UzFac1ZYbGxSVGxvVm10d01WVlhOVzlYYkdSSlVXeENWMUpGY0V4V2FrcExVbFpTYzJGR1pHeGhNWEJTVmpGYWEyVnJNVmRVYTJSWFlteEtjVlZ0ZEV0V1JsWnpWV3RhVG1KR2NFWlZiWGhQVmxkR05sRnFUbFZoTW1oNlZtdGtTMWRXVm5OUmJHUm9ZVEZ3TlZkc1ZtRlZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';

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
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938287&h=ObDPlHIVK6vIrppW9D097A&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI2MzcmaD12MDZLeGNvNVlZSW1WSC1Oek80RktRJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0yT1RZbWFEMHhjR0Z3Y0hOVlRuWXlaVm8yY210TVMzTkRTMWxSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFQwUm5iV0ZFTVhsVVYwNVBVMnRvZVdWdVRtWlJXRlY1WVZkNFNVNTZWa2xOYkU1dVNtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZaSFp6SldNVkpoWWxaV1NWUlVTbFJTUm5CMFZrYzFWazVGTVhSWGJtUlFVakF3ZWxsclZrWmlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXhWak5XUjNSUFdWZEplRkZzWkdsTk0wSnhXV3hTYjA1c1ZuSmFSbVJUVm0xU1NsVXlkSGRoVmxwelUycEdWbUZyU1RCV2ExcExWMVpLZEdSSGVGZGhNVm93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFac2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VmtkVGExcFhWa1ZLVmxadGN6RmhSbXh4VW10T1YxWnNjRlpXVjNNMVZHeEtXR1JFVGxkaVJrcElXVlJLU21WR1duTmFSbEpwVmxad1ZWZFdZM2hPUjAxNFYydGFhRk5IVW5KV2JUVkRaVVpXV0UxWFJsVmhla1l3VmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxNFUxSnVRbGRXYWtKclZURldWMWR1UmxOaE1YQlBWVzE0UzJWV1dsaGxTR1JWVFZWd1ZsWnNVa3RXYXpGeFVtNWFWMUl6YUdGYVZWcGhWbFpHYzFadGJHbGhNSEJGVmpKMFUxRnRWa1pPV0ZKVFlXeHdWbGxZY0hOV1JsSldZVVZPYTJKR2JEUlhWRTV2VmpKS1YxZHJhRnBOUjJoVVZtdGtTMWRYUmtaUFZuQnBVbTVCZWxkWGNFZFZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938329&h=9ojR0i-Nrh8p8j2psoQ93g&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI2MjYmaD1qeHc2VDNacXZaaF9xUXY3VWxGOTd3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0zTWpVbWFEMDRPVXg1VXpaelNuTlBYMEYwUTJSTGVFWmtlakZCSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFQxUnJiV0ZFTVVOVVYyUklWa1ZzVEZsNmFGcGxXR1J6V1c1a2MxSnFWblJTYkZadVNtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZaclduWldNbk4zVFRBMVNWVnRPVTlXUjJob1dUQldlazFzVW5OWFZGSm9VbFJHVTFWWGVFWmlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXdWak5XUnpGeldWZEplRkZzYUZSaE1EVnZWbXhXZDFkV1VYaGFSbVJTVFZad1Yxa3dWVFZXVmxZMlVsaG9ZVkl6VW5KYVJFWkhWMFpXY1ZOc1pFNVNWbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFac2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VmtkVGExcFhWa1ZLVmxadGN6RmhSbXh4VW10T1YxWnNjRlpXVjNNMVZHeEtXR1JFVGxkaVJrcElXVlJLU21WR1duTmFSbEpwVmxad1ZWZFdZM2hPUjAxNFYydGFhRk5IVW5KV2JUVkRaVVpXV0UxWFJsVmhla1l3VmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxNFUxSnVRbGRXYWtKclZURldWMWR1UmxOaE1YQlBWVzE0UzJWV1dsaGxTR1JWVFZWd1ZsWnNVa3RXYXpGeFVtNWFWMUl6YUdGYVZWcGhWbFpHYzFadGJHbGhNSEJGVmpKMFUxRnRWa1pPV0ZKVFlXeHdWbGxZY0hOV1JsSldZVVZPYTJKR2JEUlhWRTV2VmpKS1YxZHJhRnBOUjJoVVZtdGtTMWRYUmtaUFZuQnBVbTVCZWxkWGNFZFZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938356&h=2N7Vq8WL0v3L3DP6mJ442A&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI2MzImaD1XRU1TWnZzTEYydF9XR0ZuWWZhS0FRJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0yTmpnbWFEMW1iMFl6YVhkdE5YWjBUSEpFY21SdGNHUkxhMk5SSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFQxUnJiV0ZFTVVOVVYyUklWa1ZzVEZsNmFGcGxXR1J6V1c1a2MxSnFWblJTYkZadVNtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZaclduWldNbk4zVFRBMVNWVnRPVTlXUjJob1dUQldlazFzVW5OWFZGSm9VbFJHVTFWWGVFWmlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXdWak5XUnpGeldWZEplRkZzYUZSaE1EVnZWbXhXZDFkV1VYaGFSbVJTVFZad1Yxa3dWVFZXVmxZMlVsaG9ZVkl6VW5KYVJFWkhWMFpXY1ZOc1pFNVNWbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFac2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VmtkVGExcFhWa1ZLVmxadGN6RmhSbXh4VW10T1YxWnNjRlpXVjNNMVZHeEtXR1JFVGxkaVJrcElXVlJLU21WR1duTmFSbEpwVmxad1ZWZFdZM2hPUjAxNFYydGFhRk5IVW5KV2JUVkRaVVpXV0UxWFJsVmhla1l3VmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxNFUxSnVRbGRXYWtKclZURldWMWR1UmxOaE1YQlBWVzE0UzJWV1dsaGxTR1JWVFZWd1ZsWnNVa3RXYXpGeFVtNWFWMUl6YUdGYVZWcGhWbFpHYzFadGJHbGhNSEJGVmpKMFUxRnRWa1pPV0ZKVFlXeHdWbGxZY0hOV1JsSldZVVZPYTJKR2JEUlhWRTV2VmpKS1YxZHJhRnBOUjJoVVZtdGtTMWRYUmtaUFZuQnBVbTVCZWxkWGNFZFZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';

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
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938287&h=n1anuEECpctBDgPrADMrHg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI2MzcmaD1tMzd1UkJHb0JSTkRVOFRnTl95Zmd3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0yT1RZbWFEMWZNbVYzWTBOTU1tZDNWMTlMZG5sWE1GUmxjMmxuSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFQxUnJiV0ZFTVV0aU1EUjBUVVpHVlZWVE1XdFRSVlV3WTFWVk5HSnRNVmxpTW14U1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZaR1JqVlhhMUpDVFcxS2MxRnVjRkpXTVZwUlZGVmpOV0ZzVWtabFIzaGFZa1p3ZEZwVmFHcGlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXdWak5XUnpGeldWZEplRkZzWkZCV2ExcHlWRlZXY2sxV2JIUmtSM1JWVmxSV01GUnNWalJXUmtwWllVVXhWMUpYYUV4V1ZscGhZekE1V1ZSc1ZrNVdWbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFWc2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VmtkVGExcE9VMGhDVmxac1ZURmhSbXh4VW10T1dGSXhXa3BaYTFwWFZqRmFObUZFVGxoaE1VcFFWbGR6TVZZeVRrWmFSbFpwWW10S1ZGWkdXbUZaVm14WFlraFNhbEpXY0hOWmExcGhWMnhrZFdORk9WVk5SRVl3VmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxNFUxSnVRbGRXYlhSaFdWWnNWMVZzYUd0VFIxSnhXV3RrVTFkR1pISlhiWFJvVWxSR1JsWlhjRmRXTURGWVlVaHdWMUo2UmxoWmVrcFBVMVpHYzFac1pHbFNXRUY1VmpGYVUxRnJNVmhWYTJSaFVtMTRjVlZ0ZEV0WFJsWjBUVlJPVG1KR2NFWlZWM2hQVldzeGNtTkZaRlZpUmxwWVZteGFZVkl4VG5OUmJHUm9ZVEZ3TlZaR1ZtRlZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938329&h=PHMgrUrUte7KwKQf59A43w&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI2MjYmaD1xRFZ5X2h0eWlRYkVsMERzNWxXcjRBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0yTmpnbWFEMWhNMnhrWTFGTWRsVmxRMFJGWjNkVVJGOUlVR0puSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFQxUnJiV0ZFTVV0aU1EUjBUVVpHVlZWVE1XdFRSVlV3WTFWVk5HSnRNVmxpTW14U1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZaR1JqVlhhMUpDVFcxS2MxRnVjRkpXTVZwUlZGVmpOV0ZzVWtabFIzaGFZa1p3ZEZwVmFHcGlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXdWak5XUnpGeldWZEplRkZzWkZCV2ExcHlWRlZXY2sxV2JIUmtSM1JWVmxSV01GUnNWalJXUmtwWllVVXhWMUpYYUV4V1ZscGhZekE1V1ZSc1ZrNVdWbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFWc2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VmtkVGExcE9VMGhDVmxac1ZURmhSbXh4VW10T1dGSXhXa3BaYTFwWFZqRmFObUZFVGxoaE1VcFFWbGR6TVZZeVRrWmFSbFpwWW10S1ZGWkdXbUZaVm14WFlraFNhbEpXY0hOWmExcGhWMnhrZFdORk9WVk5SRVl3VmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxNFUxSnVRbGRXYlhSaFdWWnNWMVZzYUd0VFIxSnhXV3RrVTFkR1pISlhiWFJvVWxSR1JsWlhjRmRXTURGWVlVaHdWMUo2UmxoWmVrcFBVMVpHYzFac1pHbFNXRUY1VmpGYVUxRnJNVmhWYTJSaFVtMTRjVlZ0ZEV0WFJsWjBUVlJPVG1KR2NFWlZWM2hQVldzeGNtTkZaRlZpUmxwWVZteGFZVkl4VG5OUmJHUm9ZVEZ3TlZaR1ZtRlZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938356&h=jB9rHO33Rfg5TR2w8V3dBA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI2MjYmaD1xRFZ5X2h0eWlRYkVsMERzNWxXcjRBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0yTmpnbWFEMWhNMnhrWTFGTWRsVmxRMFJGWjNkVVJGOUlVR0puSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFQxUnJiV0ZFTVV0aU1EUjBUVVpHVlZWVE1XdFRSVlV3WTFWVk5HSnRNVmxpTW14U1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZaR1JqVlhhMUpDVFcxS2MxRnVjRkpXTVZwUlZGVmpOV0ZzVWtabFIzaGFZa1p3ZEZwVmFHcGlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXdWak5XUnpGeldWZEplRkZzWkZCV2ExcHlWRlZXY2sxV2JIUmtSM1JWVmxSV01GUnNWalJXUmtwWllVVXhWMUpYYUV4V1ZscGhZekE1V1ZSc1ZrNVdWbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFWc2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VmtkVGExcE9VMGhDVmxac1ZURmhSbXh4VW10T1dGSXhXa3BaYTFwWFZqRmFObUZFVGxoaE1VcFFWbGR6TVZZeVRrWmFSbFpwWW10S1ZGWkdXbUZaVm14WFlraFNhbEpXY0hOWmExcGhWMnhrZFdORk9WVk5SRVl3VmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxNFUxSnVRbGRXYlhSaFdWWnNWMVZzYUd0VFIxSnhXV3RrVTFkR1pISlhiWFJvVWxSR1JsWlhjRmRXTURGWVlVaHdWMUo2UmxoWmVrcFBVMVpHYzFac1pHbFNXRUY1VmpGYVUxRnJNVmhWYTJSaFVtMTRjVlZ0ZEV0WFJsWjBUVlJPVG1KR2NFWlZWM2hQVldzeGNtTkZaRlZpUmxwWVZteGFZVkl4VG5OUmJHUm9ZVEZ3TlZaR1ZtRlZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';

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