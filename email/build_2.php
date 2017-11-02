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
$skidka_vibor_let_case = 15+ rand(1, 4)*5;

switch ($vibor_let_case) {
    case 1:
        $vibor_let = 'Бонусные условия для новых клиентов.
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
        $vibor_akc = 'Беспредоплатные условия уже сейчас.
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


if ($predmet != '') $predmet_2 = ' предлагает вам примеры дипломов и магистерских от автора ДО внесения денег по предмету '.$predmet.'.';
else $predmet_2 = ' предлагает вам примеры дипломов и магистерских по вашей теме от автора ДО внесения денег.';


$avtors = rand(350, 550);
$kandidats = rand(33, 55);
$doctors = rand(14, 24);
$balls = rand(478,492)/100;

switch ($vibor_pris_case) {

    case 1:
        $vibor_pris = ' не сулит небывалых условий. Обещает прислать примеры от авторов, начать выполнять без начального взноса, 
        двойную проверку работ.
        
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
        $text_kurs = 'Понимаем, что соблюдение сроков - главное.
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
        $text_dip = 'Наши авторы - гарантия, что плагиата не будет.
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
        $text_mag = 'Лучшие профессионалы с научными степенями.
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
        $vibor_filial = 'Заказывайте круглые сутки везде в России.
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

$vibor_niz = $vibor_let.'<br>'.$vibor_akc.'<br>'.$main_name.$vibor_pris.'<br>'.$vibor_filial.'<br>';



$style_1 = rand(3234, 2343).'adfdpt';

function kart_vibor_1 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=autorvolodin5%40mail.ru&e=1509906040&h=E62yhhg2kMM75N3ueCzSDw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjUlNDBtYWlsLnJ1JmU9MTUwOTkwNTk0MSZoPTNSTEpUVXg5Mmx2UVNsT202cVdEeWcmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdScWFXNHRaR2x3Ykc5dEpUUXdiV0ZwYkM1eWRTWmxQVEUxTURnNU5UTXdORE1tYUQxNVUxUlVXR3hHUXpoR2FtNW1iM05ITnpVdGN6QkJKblZ5YkRFM01UMWpTRXAyWlVocmRXRlhNVzVqTWpGb1lWZDNkV051VlhaUU1sWjBXVmRzYzFCWFJqRmtSemw1WkcwNWMySXlVbkJpYWtsc1RrUkNkRmxYYkhOTWJrb3hTbTFWT1UxVVVUVk9WR2N5VDBSQk5FNTVXbTlRVmtKdlRWUmplV0p1VG5waVdHZDRZMWRzUTFKVlRsUmFXRlp6Vm01amJXUllTbk5OVkdONFVGZE9TVk51V214VFIzUXhXVlpqZUdKdFRYbE5WMmhvVmpOa01Wa3lOVlprYkVGNVZtNVNXbFl5ZUhwVlJtUkhUVmRTU0U5WWJHdGlWR3g2V1dwS1UyTkhTbkZYVjNoUFVrVktNRmRXWkhOak1IaDFVMnBHUzJKV1ZUVlVWbEpTVGxVeE5sSlliRTlsYTFVeFZHNXNZV0l4UWxaalJVNVhVMFZGTVZaVlpHOVhiVXAwVGxSU2FsWnJSVEJXUmxwaFZqSkdObE50ZUd4U2ExWjBXa1pvUzJNd01WVlpNMmhSVmpBMVNsVXlOV0ZpUms1SVpFUkdXbFp0VGpSWmJURk9aVlV4V0dGSGFGZE5NbEY0VjFSSk1WWnRVbk5SV0d4WFlteEtZVlpxU2pSbGJGWkhXa1ZrVGxZeFNrbFVNV2h6WVRKS1ZXSkljRnBoYTNCVVdUQmtTMk5XVmxobFJUbFRVbFZ2ZDFZeFdtdGpNazEzWlVoV1ZHRnJXa3haYkZwV1RsWlNWMVZzU2s5V1ZFWldWa1pTUzFReVZuTldhbFpWWWtVMWFGbHFSa05XYlZaSlUyeE9VMVpyV1hkV1JtUjNWREpLYzFSdVRsTmliRnBYVldwQ1lXRkdaRVZUYms1VVZqQnNObGxWV2xOaE1VbDVWRzVTWVZKdGFFeFpla0Y0VmxacmVtRkdSbGROUkZGNVZqSndUMVl5UmtkVGFscHBVa1p3YUZWc1pGTmxiSEJIVjI1YWJGWXhTa2xaVldSM1lWZEtSbU5FVGxoV2VrSXpWR3hrVDJOdFZrbFZiRlpwWWtoQ2QxWnNhSGRqYlZaSFlUTmtZVkpHU25KWmEyUTBWMVphV0U1WVpGVldWRVl3V2xWU1ExZEdXblJWYmtwYVlUSlNVRlJzVlRWVFYwcEdUbFpPVTFac1dUSldhMVp2WkRGR2RGWnVTbXROTW5oWVdXeG9RMVZHY0Zoa1JXUlBVbXhLVmxVeWVFOWhWa3AxVVc1b1dsZElRbEJXUkVwTFZqSktSVlJzYUZkbGExcFJWMVprZWsxV1RrZFdibEpxVW10S1ZGVnNVa1pOYkZwRlVteE9WV0Y2UWpOVWEyaHpWa2RLV1ZWc1FsZGhhMXA1V2xWYVUxTkZNVmxhUjNST1YwVkdObGR0TURCTlIwcFlVbXhzVldKV2NHOVZNRnBLWkRGcmQyRkZOVkJXVkVaVFdtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=autorvolodin5%40mail.ru&e=1509906044&h=QQEKGVISBBnU8w0jxAjMCw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjUlNDBtYWlsLnJ1JmU9MTUwOTkwNTk1MiZoPURHTWt1djlsOUFOZFJBOU9wa2F0dkEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdScWFXNHRaR2x3Ykc5dEpUUXdiV0ZwYkM1eWRTWmxQVEUxTURnNU5UTXdNamdtYUQweVZEWnNlR0ZYTWtoSWJpMVhRMk5uYjNjMFVtTlJKblZ5YkRFM01UMWpTRXAyWlVocmRXRlhNVzVqTWpGb1lWZDNkV051VlhaUU1sWjBXVmRzYzFCWFJqRmtSemw1WkcwNWMySXlVbkJpYWtsc1RrUkNkRmxYYkhOTWJrb3hTbTFWT1UxVVVUVk9WR2N5VDBSQk5FNTVXbTlRVjFKdFZURldRbVZFU2pSaE1sWnVUbXhhV1ZSdVRsUlNSMjh3V2tWRmJXUllTbk5OVkdONFVGZE9TVk51V214VFIzUXhXVlpqZUdKdFRYbE5WMmhvVmpOa01Wa3lOVlprYkVGNVZtNVNXbFl5ZUhwVlJtUkhUVmRTU0U5WWJHdGlWR3g2V1dwS1UyTkhTbkZYVjNoUFVrVktNRmRXWkhOak1IaDFVMnBHUzJKV1ZUVlVWbEpTVGxVeE5sSlliRTlsYTFWM1ZHdE9ZV0l4UWxoaVJUbGhUVVJuTUZsclpGTmlNRFZWWVVaV2JGSnRkM2xaTVdoUFRXeHdkRk5VVG1GaE1GWjBXa1pvUzJNd01WVlpNMmhSVmpBMVNsVXlOV0ZpUms1SVpFUkdXbFp0VGpSWmJURk9aVlV4V0dGSGFGZE5NbEY0VjFSSk1WWnRVbk5SV0d4WFlteEtZVlpxU2pSbGJGWkhXa1ZrVGxZeFNrbFVNV2h6WVRKS1ZXSkljRnBoYTNCVVdUQmtTMk5XVmxobFJUbFRVbFZ2ZDFZeFdtdGpNazEzWlVoV1ZHRnJXa3haYkZwV1RsWlNWMVZzU2s5V1ZFWldWa1pTUzFReVZuTldhbFpWWWtVMWFGbHFSa05XYlZaSlUyeE9VMVpyV1hkV1JtUjNWREpLYzFSdVRsTmliRnBYVldwQ1lXRkdaRVZUYms1VVZqQnNObGxWV2xOaE1VbDVWRzVTWVZKdGFFeFpla0Y0VmxacmVtRkdSbGROUkZGNVZqSndUMVl5UmtkVGFscHBVa1p3YUZWc1pGTmxiSEJIVjI1YWJGWXhTa2xaVldSM1lWZEtSbU5FVGxoV2VrSXpWR3hrVDJOdFZrbFZiRlpwWWtoQ2QxWnNhSGRqYlZaSFlUTmtZVkpHU25KWmEyUTBWMVphV0U1WVpGVldWRVl3V2xWU1ExZEdXblJWYmtwYVlUSlNVRlJzVlRWVFYwcEdUbFpPVTFac1dUSldhMVp2WkRGR2RGWnVTbXROTW5oWVdXeG9RMVZHY0Zoa1JXUlBVbXhLVmxVeWVFOWhWa3AxVVc1b1dsZElRbEJXUkVwTFZqSktSVlJzYUZkbGExcFJWMVprZWsxV1RrZFdibEpxVW10S1ZGVnNVa1pOYkZwRlVteE9WV0Y2UWpOVWEyaHpWa2RLV1ZWc1FsZGhhMXA1V2xWYVUxTkZNVmxhUjNST1YwVkdObGR0TURCTlIwcFlVbXhzVldKV2NHOVZNRnBLWkRGcmQyRkZOVkJXVkVaVFdtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=autorvolodin5%40mail.ru&e=1509906050&h=wmKvtJ2NwYsiSZ37a03_dQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjUlNDBtYWlsLnJ1JmU9MTUwOTkwNTk3MyZoPTBrSGEyYnhiNWliUXduMWlJOWVrWlEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdScWFXNHRaR2x3Ykc5dEpUUXdiV0ZwYkM1eWRTWmxQVEUxTURnNU5UTXdNemdtYUQwd01UQjJaSFZ5Y1ZWQ1gwUkNRa04xU0hObGRsSkJKblZ5YkRFM01UMWpTRXAyWlVocmRXRlhNVzVqTWpGb1lWZDNkV051VlhaUU1sWjBXVmRzYzFCWFJqRmtSemw1WkcwNWMySXlVbkJpYWtsc1RrUkNkRmxYYkhOTWJrb3hTbTFWT1UxVVVUVk9WR2N5VDBSQk5FNTVXbTlRVjFKdFZURldRbVZFU2pSaE1sWnVUbXhhV1ZSdVRsUlNSMjh3V2tWRmJXUllTbk5OVkdONFVGZE9TVk51V214VFIzUXhXVlpqZUdKdFRYbE5WMmhvVmpOa01Wa3lOVlprYkVGNVZtNVNXbFl5ZUhwVlJtUkhUVmRTU0U5WWJHdGlWR3g2V1dwS1UyTkhTbkZYVjNoUFVrVktNRmRXWkhOak1IaDFVMnBHUzJKV1ZUVlVWbEpTVGxVeE5sSlliRTlsYTFWM1ZHdE9ZV0l4UWxoaVJUbGhUVVJuTUZsclpGTmlNRFZWWVVaV2JGSnRkM2xaTVdoUFRXeHdkRk5VVG1GaE1GWjBXa1pvUzJNd01WVlpNMmhSVmpBMVNsVXlOV0ZpUms1SVpFUkdXbFp0VGpSWmJURk9aVlV4V0dGSGFGZE5NbEY0VjFSSk1WWnRVbk5SV0d4WFlteEtZVlpxU2pSbGJGWkhXa1ZrVGxZeFNrbFVNV2h6WVRKS1ZXSkljRnBoYTNCVVdUQmtTMk5XVmxobFJUbFRVbFZ2ZDFZeFdtdGpNazEzWlVoV1ZHRnJXa3haYkZwV1RsWlNWMVZzU2s5V1ZFWldWa1pTUzFReVZuTldhbFpWWWtVMWFGbHFSa05XYlZaSlUyeE9VMVpyV1hkV1JtUjNWREpLYzFSdVRsTmliRnBYVldwQ1lXRkdaRVZUYms1VVZqQnNObGxWV2xOaE1VbDVWRzVTWVZKdGFFeFpla0Y0VmxacmVtRkdSbGROUkZGNVZqSndUMVl5UmtkVGFscHBVa1p3YUZWc1pGTmxiSEJIVjI1YWJGWXhTa2xaVldSM1lWZEtSbU5FVGxoV2VrSXpWR3hrVDJOdFZrbFZiRlpwWWtoQ2QxWnNhSGRqYlZaSFlUTmtZVkpHU25KWmEyUTBWMVphV0U1WVpGVldWRVl3V2xWU1ExZEdXblJWYmtwYVlUSlNVRlJzVlRWVFYwcEdUbFpPVTFac1dUSldhMVp2WkRGR2RGWnVTbXROTW5oWVdXeG9RMVZHY0Zoa1JXUlBVbXhLVmxVeWVFOWhWa3AxVVc1b1dsZElRbEJXUkVwTFZqSktSVlJzYUZkbGExcFJWMVprZWsxV1RrZFdibEpxVW10S1ZGVnNVa1pOYkZwRlVteE9WV0Y2UWpOVWEyaHpWa2RLV1ZWc1FsZGhhMXA1V2xWYVUxTkZNVmxhUjNST1YwVkdObGR0TURCTlIwcFlVbXhzVldKV2NHOVZNRnBLWkRGcmQyRkZOVkJXVkVaVFdtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';

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
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=autorvolodin5%40mail.ru&e=1509906050&h=gXGnSf4aJS45hGpPYD_saA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjUlNDBtYWlsLnJ1JmU9MTUwOTkwNTk3MyZoPXBfd2VINVdVUDZHVXNfY1d1LVdLd1EmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdScWFXNHRaR2x3Ykc5dEpUUXdiV0ZwYkM1eWRTWmxQVEUxTURnNU5UTXdNemdtYUQwMlJURldRbTlUYVhBd2FFSkVUbkpJYlhwdk9FdEJKblZ5YkRFM01UMWpTRXAyWlVocmRXRlhNVzVqTWpGb1lWZDNkV051VlhaUU1sWjBXVmRzYzFCWFJqRmtSemw1WkcwNWMySXlVbkJpYWtsc1RrUkNkRmxYYkhOTWJrb3hTbTFWT1UxVVVUVk9WR2N5VDBSQk5FNTVXbTlRVkdnMlYxUmFiVlZJVFRKVFJGcHRWRzVWTkUxdFduZFBSMDB6WWtWRmJXUllTbk5OVkdONFVGZE9TVk51V214VFIzUXhXVlpqZUdKdFRYbE5WMmhvVmpOa01Wa3lOVlprYkVGNVZtNVNXbFl5ZUhwVlJtUkhUVmRTU0U5WWJHdGlWR3g2V1dwS1UyTkhTbkZYVjNoUFVrVktNRmRXWkhOak1IaDFVMnBHUzJKV1ZUVlVWbEpTVGxVeE5sSlliRTlsYTFWM1ZHdE9ZV0l4UWxkaU0zQnFZbFJvTmxWclpGZFNWbVJKVTJ0d2FWWnNTakZWYWtJMFZrWktXVkp0ZEd4V2ExWjBXa1pvUzJNd01WVlpNMmhSVmpBMVNsVXlOV0ZpUms1SVpFUkdXbFp0VGpSWmJURk9aVlV4V0dGSGFGZE5NbEY0VjFSSk1WWnRVbk5SV0d4WFlteEtZVlpxU2pSbGJGWkhXa1ZrVGxZeFNrbFVNV2h6WVRKS1ZXSkljRnBoYTNCVVdUQmtTMk5XVmxobFJUbFRVbFZ2ZDFZeFdtdGpNazEzWlVoV1ZHRnJXa3haYkZwV1RsWlNWMVZzU2s5V1ZFWldWa1pTUzFWR1NrWldWRUpWVm1zMWFGbHFSa05XVmxwVlZXczVUbEpYZEROV2JGSkhZVEpKZUZac1pGUmlWVnBVV1ZjeE5HTXhXa1poU0dSclZtNUNlRlZYTVdGVWF6RjBWRzVTWVZKdGFFeFpla0Y0VmxacmVtRkdSbGROUkZGNVZqSndUMVl5UmtkVGFscHBVa1p3YUZWc1pGTmxiSEJIVjI1YWJGWXhTa2xaVldSM1lWZEtSbU5FVGxoV2VrSXpWR3hrVDJOdFZrbFZiRlpwWWtoQ2QxWnNhSGRqYlZaSFlUTmtZVkpHU25KWmEyUTBWMVphV0U1WVpGVldWRVl3V2xWU1ExZEdXblJWYmtwYVlUSlNVRlJzVlRWVFYwcEdUbFpPVTFac1dUSldhMVp2WkRGR2RGWnVTbXhTUm5CV1ZqQmtVMVZXV25GU2ExcE9VbXhLZVZaWGVIZFVNVXBWVmxSS1ZrMXFSblpXUjNoYVpVWmFWVkZzVm1saWEwcEVWMnRTUW1WRk5YUlNhbHBWWVhwc1ZGUlZhRU5rYkZsNFdUTm9WMkpXV2toWk1HaFRWa2RLV1dGRk9WcGlSbkF6V1dwR1UxTkZNVmxhUjNST1YwVkdObGR0TURCTlIwcFlVbXhzVldKV2NHOVZNRnBLWkRGcmQyRkZOVkJXVkVaVFdtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=autorvolodin5%40mail.ru&e=1509906044&h=pSVI41tc_9GXsmuv16kSKg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjUlNDBtYWlsLnJ1JmU9MTUwOTkwNTk1MiZoPXFBS01LRFA5VXV2THdHYTBvOGNaWncmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdScWFXNHRaR2x3Ykc5dEpUUXdiV0ZwYkM1eWRTWmxQVEUxTURnNU5UTXdNamdtYUQxUlltbGpjR1JxTldnM1QwTkRTamxCU1hCRWQyRlJKblZ5YkRFM01UMWpTRXAyWlVocmRXRlhNVzVqTWpGb1lWZDNkV051VlhaUU1sWjBXVmRzYzFCWFJqRmtSemw1WkcwNWMySXlVbkJpYWtsc1RrUkNkRmxYYkhOTWJrb3hTbTFWT1UxVVVUVk9WR2N5VDBSQk5FNTVXbTlRVkdnMlYxUmFiVlZJVFRKVFJGcHRWRzVWTkUxdFduZFBSMDB6WWtWRmJXUllTbk5OVkdONFVGZE9TVk51V214VFIzUXhXVlpqZUdKdFRYbE5WMmhvVmpOa01Wa3lOVlprYkVGNVZtNVNXbFl5ZUhwVlJtUkhUVmRTU0U5WWJHdGlWR3g2V1dwS1UyTkhTbkZYVjNoUFVrVktNRmRXWkhOak1IaDFVMnBHUzJKV1ZUVlVWbEpTVGxVeE5sSlliRTlsYTFWM1ZHdE9ZV0l4UWxkaU0zQnFZbFJvTmxWclpGZFNWbVJKVTJ0d2FWWnNTakZWYWtJMFZrWktXVkp0ZEd4V2ExWjBXa1pvUzJNd01WVlpNMmhSVmpBMVNsVXlOV0ZpUms1SVpFUkdXbFp0VGpSWmJURk9aVlV4V0dGSGFGZE5NbEY0VjFSSk1WWnRVbk5SV0d4WFlteEtZVlpxU2pSbGJGWkhXa1ZrVGxZeFNrbFVNV2h6WVRKS1ZXSkljRnBoYTNCVVdUQmtTMk5XVmxobFJUbFRVbFZ2ZDFZeFdtdGpNazEzWlVoV1ZHRnJXa3haYkZwV1RsWlNWMVZzU2s5V1ZFWldWa1pTUzFWR1NrWldWRUpWVm1zMWFGbHFSa05XVmxwVlZXczVUbEpYZEROV2JGSkhZVEpKZUZac1pGUmlWVnBVV1ZjeE5HTXhXa1poU0dSclZtNUNlRlZYTVdGVWF6RjBWRzVTWVZKdGFFeFpla0Y0VmxacmVtRkdSbGROUkZGNVZqSndUMVl5UmtkVGFscHBVa1p3YUZWc1pGTmxiSEJIVjI1YWJGWXhTa2xaVldSM1lWZEtSbU5FVGxoV2VrSXpWR3hrVDJOdFZrbFZiRlpwWWtoQ2QxWnNhSGRqYlZaSFlUTmtZVkpHU25KWmEyUTBWMVphV0U1WVpGVldWRVl3V2xWU1ExZEdXblJWYmtwYVlUSlNVRlJzVlRWVFYwcEdUbFpPVTFac1dUSldhMVp2WkRGR2RGWnVTbXhTUm5CV1ZqQmtVMVZXV25GU2ExcE9VbXhLZVZaWGVIZFVNVXBWVmxSS1ZrMXFSblpXUjNoYVpVWmFWVkZzVm1saWEwcEVWMnRTUW1WRk5YUlNhbHBWWVhwc1ZGUlZhRU5rYkZsNFdUTm9WMkpXV2toWk1HaFRWa2RLV1dGRk9WcGlSbkF6V1dwR1UxTkZNVmxhUjNST1YwVkdObGR0TURCTlIwcFlVbXhzVldKV2NHOVZNRnBLWkRGcmQyRkZOVkJXVkVaVFdtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=autorvolodin5%40mail.ru&e=1509906040&h=KLAS0jUsdqSKUgmwne6PXA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjUlNDBtYWlsLnJ1JmU9MTUwOTkwNTk0MSZoPWFENGlmQl96NUFlUEgzdkplNWc3ZlEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdScWFXNHRaR2x3Ykc5dEpUUXdiV0ZwYkM1eWRTWmxQVEUxTURnNU5UTXdORE1tYUQxUlowYzBTVXA2VXpkd1ZIUm5OR2h2TmpKR1NUWjNKblZ5YkRFM01UMWpTRXAyWlVocmRXRlhNVzVqTWpGb1lWZDNkV051VlhaUU1sWjBXVmRzYzFCWFJqRmtSemw1WkcwNWMySXlVbkJpYWtsc1RrUkNkRmxYYkhOTWJrb3hTbTFWT1UxVVVUVk9WR2N5VDBSQk5FNTVXbTlRVmtadlYyc3dNMDVJVW05T1ZHaGhZMFZ6TWxSc1dUUmhSVEZTVVd4RmJXUllTbk5OVkdONFVGZE9TVk51V214VFIzUXhXVlpqZUdKdFRYbE5WMmhvVmpOa01Wa3lOVlprYkVGNVZtNVNXbFl5ZUhwVlJtUkhUVmRTU0U5WWJHdGlWR3g2V1dwS1UyTkhTbkZYVjNoUFVrVktNRmRXWkhOak1IaDFVMnBHUzJKV1ZUVlVWbEpTVGxVeE5sSlliRTlsYTBWM1ZHMXNZV0l4UWxoVGEwNW9WbFZ3V1ZReFpGZFJNVnBXWTBVNVZWVjZSWGhhUjNSclpERkdXRlZxU2xkTlJWWjBXa1pvUzJNd01WVlpNMmhSVmpBMVNsVXlOV0ZpUms1SVpFUkdXbFp0VGpSWmJURk9aVlV4V0dGSGFGZE5NbEY0VjFSSk1WWnRVbk5SV0d4WFlteEtZVlpxU2pSbGJGWkhXa1ZrVGxZeFNrbFVNV2h6WVRKS1ZXSkljRnBoYTNCVVdUQmtTMk5XVmxobFJUbFRVbFZ2ZDFZeFdtdGpNazEzWlVoV1ZHRnJXa3haYkZwV1RsWlNWMVZzU2s5V1ZFWldWa1pTUzFWR1NrWldWRUpWVm1zMWFGbHFSa05XVmxwVlZXczVUbEpYZEROV2JGSkhZVEpKZUZac1pGUmlWVnBVV1ZjeE5HTXhXa1poU0dSclZtNUNlRlZYTVdGVWF6RjBWRzVTWVZKdGFFeFpla0Y0VmxacmVtRkdSbGROUkZGNVZqSndUMVl5UmtkVGFscHBVa1p3YUZWc1pGTmxiSEJIVjI1YWJGWXhTa2xaVldSM1lWZEtSbU5FVGxoV2VrSXpWR3hrVDJOdFZrbFZiRlpwWWtoQ2QxWnNhSGRqYlZaSFlUTmtZVkpHU25KWmEyUTBWMVphV0U1WVpGVldWRVl3V2xWU1ExZEdXblJWYmtwYVlUSlNVRlJzVlRWVFYwcEdUbFpPVTFac1dUSldhMVp2WkRGR2RGWnVTbXhTUm5CV1ZqQmtVMVZXV25GU2ExcE9VbXhLZVZaWGVIZFVNVXBWVmxSS1ZrMXFSblpXUjNoYVpVWmFWVkZzVm1saWEwcEVWMnRTUW1WRk5YUlNhbHBWWVhwc1ZGUlZhRU5rYkZsNFdUTm9WMkpXV2toWk1HaFRWa2RLV1dGRk9WcGlSbkF6V1dwR1UxTkZNVmxhUjNST1YwVkdObGR0TURCTlIwcFlVbXhzVldKV2NHOVZNRnBLWkRGcmQyRkZOVkJXVkVaVFdtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';

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
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=autorvolodin5%40mail.ru&e=1509906040&h=VM9SYkvuhEFwptvDFGCO_Q&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjUlNDBtYWlsLnJ1JmU9MTUwOTkwNTk0MSZoPXFzZWVSZS10UkM0bTduUm9ZUVFpb0EmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdScWFXNHRaR2x3Ykc5dEpUUXdiV0ZwYkM1eWRTWmxQVEUxTURnNU5UTXdORE1tYUQxbldrRjZSSFpST0RONGNXb3hiV1JpTFZocFVWVkJKblZ5YkRFM01UMWpTRXAyWlVocmRXRlhNVzVqTWpGb1lWZDNkV051VlhaUU1sWjBXVmRzYzFCWFJqRmtSemw1WkcwNWMySXlVbkJpYWtsc1RrUkNkRmxYYkhOTWJrb3hTbTFWT1UxVVVUVk9WR2N5VDBSQk5FNTVXbTlRVkZGNVdrUkJNbUpzUW5wUlYxWlFUVWM1YWxSRmVHeFpiRnB0WlVoamJXUllTbk5OVkdONFVGZE9TVk51V214VFIzUXhXVlpqZUdKdFRYbE5WMmhvVmpOa01Wa3lOVlprYkVGNVZtNVNXbFl5ZUhwVlJtUkhUVmRTU0U5WWJHdGlWR3g2V1dwS1UyTkhTbkZYVjNoUFVrVktNRmRXWkhOak1IaDFVMnBHUzJKV1ZUVlVWbEpTVGxVeE5sSlliRTlsYTBWM1ZHMXNZV0l4UWxkUFZrWnJUVVZyTVZsdGRHdFVWVFYwVGxWNFZGSllhRTFXUldoTFZWWmFjMDlZVGxWTlZWWjBXa1pvUzJNd01WVlpNMmhSVmpBMVNsVXlOV0ZpUms1SVpFUkdXbFp0VGpSWmJURk9aVlV4V0dGSGFGZE5NbEY0VjFSSk1WWnRVbk5SV0d4WFlteEtZVlpxU2pSbGJGWkhXa1ZrVGxZeFNrbFVNV2h6WVRKS1ZXSkljRnBoYTNCVVdUQmtTMk5XVWxobFJUbFRVbFZ2ZDFZeFdtdGpNazEzWlVoV1ZHRnJXa3haYkZwV1RsWlNWMVZzU2s5V1ZFWldWa1pTUzFWR1NrWk5TSEJWVmxVMWFGbHFSa05YUjFaSllrWldWMVo2YUROWGExSlBWV3MxVjJORlpGVmlia0pUVkZaYVlWbFdiSFJqUlZwc1lrWmFXbGR1Y0U5VU1ERjBWRzVTWVZKdGFFeFpla0Y0VmxacmVtRkdSbGROUkZGNVZqSndUMVl5UmtkVGFscHBVa1p3YUZWc1pGTmxiSEJIVjI1YWJGWXhTa2xaVldSM1lWZEtSbU5FVGxoV2VrSXpWR3hrVDJOdFZrbFZiRlpwWWtoQ2QxWnNhSGRqYlZaSFlUTmtZVkpHU25KWmEyUTBWMVphV0U1WVpGVldWRVl3V2xWU1ExZEdXblJWYmtwYVlUSlNVRlJzVlRWVFYwcEdUbFpPVTFac1dUSldhMVp2WkRGR2RGWnVTbXhTUm5CV1ZtdGFZVmxXVWxoa1NHUnFZa2RTV0ZkcldtdGhSVEZGVldwV1YwMVhhSHBXUnpGWFl6Sk9TVkZzVmxkaVJYQXlWMVpTUWsxWFVrZGFSbXhxVW10S1dGVnRNVE5OYkZwRlVXeE9VazFyY0VkVWJGWlhWbFphUjFOc1FsZGhhMXA1VkZWYVUxTkZNVmxhUjNST1YwVkdObGR0TURCTlIwcFlVbXhzVldKV2NHOVZNRnBLWkRGcmQyRkZOVkJXVkVaVFdtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=autorvolodin5%40mail.ru&e=1509906044&h=OxG5Sa3P7X-fhdgaAE7NRA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjUlNDBtYWlsLnJ1JmU9MTUwOTkwNTk1MiZoPWVTYzNFYnNxVzkyVUtQemRMUmVfTEEmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdScWFXNHRaR2x3Ykc5dEpUUXdiV0ZwYkM1eWRTWmxQVEUxTURnNU5UTXdNamdtYUQwNFJFRlBXRmgzWkRKUU1YWkNkbVJZVkc5M1JWSlJKblZ5YkRFM01UMWpTRXAyWlVocmRXRlhNVzVqTWpGb1lWZDNkV051VlhaUU1sWjBXVmRzYzFCWFJqRmtSemw1WkcwNWMySXlVbkJpYWtsc1RrUkNkRmxYYkhOTWJrb3hTbTFWT1UxVVVUVk9WR2N5VDBSQk5FNTVXbTlRVms1MFVrWkpOVkpFVmxOWk1WRjRZVzVCZW1SVmRHOWFWMXBIVGtWRmJXUllTbk5OVkdONFVGZE9TVk51V214VFIzUXhXVlpqZUdKdFRYbE5WMmhvVmpOa01Wa3lOVlprYkVGNVZtNVNXbFl5ZUhwVlJtUkhUVmRTU0U5WWJHdGlWR3g2V1dwS1UyTkhTbkZYVjNoUFVrVktNRmRXWkhOak1IaDFVMnBHUzJKV1ZUVlVWbEpTVGxVeE5sSlliRTlsYTFWM1ZHdE9ZV0l4UWxkV1ZFSlRWWHBHTlZaclpHOWpSbTkzVkZoa1RrMVZTbnBaYWtKdlZHMUdWRTFXYkU1VFIwNTBXa1pvUzJNd01WVlpNMmhSVmpBMVNsVXlOV0ZpUms1SVpFUkdXbFp0VGpSWmJURk9aVlV4V0dGSGFGZE5NbEY0VjFSSk1WWnRVbk5SV0d4WFlteEtZVlpxU2pSbGJGWkhXa1ZrVGxZeFNrbFVNV2h6WVRKS1ZXSkljRnBoYTNCVVdUQmtTMk5XVWxobFJUbFRVbFZ2ZDFZeFdtdGpNazEzWlVoV1ZHRnJXa3haYkZwV1RsWlNWMVZzU2s5V1ZFWldWa1pTUzFWR1NrWk5TSEJWVmxVMWFGbHFSa05YUjFaSllrWldWMVo2YUROWGExSlBWV3MxVjJORlpGVmlia0pUVkZaYVlWbFdiSFJqUlZwc1lrWmFXbGR1Y0U5VU1ERjBWRzVTWVZKdGFFeFpla0Y0VmxacmVtRkdSbGROUkZGNVZqSndUMVl5UmtkVGFscHBVa1p3YUZWc1pGTmxiSEJIVjI1YWJGWXhTa2xaVldSM1lWZEtSbU5FVGxoV2VrSXpWR3hrVDJOdFZrbFZiRlpwWWtoQ2QxWnNhSGRqYlZaSFlUTmtZVkpHU25KWmEyUTBWMVphV0U1WVpGVldWRVl3V2xWU1ExZEdXblJWYmtwYVlUSlNVRlJzVlRWVFYwcEdUbFpPVTFac1dUSldhMVp2WkRGR2RGWnVTbXhTUm5CV1ZtdGFZVmxXVWxoa1NHUnFZa2RTV0ZkcldtdGhSVEZGVldwV1YwMVhhSHBXUnpGWFl6Sk9TVkZzVmxkaVJYQXlWMVpTUWsxWFVrZGFSbXhxVW10S1dGVnRNVE5OYkZwRlVXeE9VazFyY0VkVWJGWlhWbFphUjFOc1FsZGhhMXA1VkZWYVUxTkZNVmxhUjNST1YwVkdObGR0TURCTlIwcFlVbXhzVldKV2NHOVZNRnBLWkRGcmQyRkZOVkJXVkVaVFdtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=autorvolodin5%40mail.ru&e=1509906050&h=TU4aSqWWDWOby-aIHSVSZg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjUlNDBtYWlsLnJ1JmU9MTUwOTkwNTk3MyZoPXd4ZkwySUZFa0J2bEhDZm1lY2hFNXcmdXJsMTcxPWNISnZlSGt1YVcxbmMyMWhhV3d1Y25VdlAyVnRZV2xzUFdScWFXNHRaR2x3Ykc5dEpUUXdiV0ZwYkM1eWRTWmxQVEUxTURnNU5UTXdNemdtYUQxUFpUUlZOSGxYYWtwU0xUaE5WakV4WnpWVVRuQlJKblZ5YkRFM01UMWpTRXAyWlVocmRXRlhNVzVqTWpGb1lWZDNkV051VlhaUU1sWjBXVmRzYzFCWFJqRmtSemw1WkcwNWMySXlVbkJpYWtsc1RrUkNkRmxYYkhOTWJrb3hTbTFWT1UxVVVUVk9WR2N5VDBSQk5FNTVXbTlRVms1MFVrWkpOVkpFVmxOWk1WRjRZVzVCZW1SVmRHOWFWMXBIVGtWRmJXUllTbk5OVkdONFVGZE9TVk51V214VFIzUXhXVlpqZUdKdFRYbE5WMmhvVmpOa01Wa3lOVlprYkVGNVZtNVNXbFl5ZUhwVlJtUkhUVmRTU0U5WWJHdGlWR3g2V1dwS1UyTkhTbkZYVjNoUFVrVktNRmRXWkhOak1IaDFVMnBHUzJKV1ZUVlVWbEpTVGxVeE5sSlliRTlsYTFWM1ZHdE9ZV0l4UWxkV1ZFSlRWWHBHTlZaclpHOWpSbTkzVkZoa1RrMVZTbnBaYWtKdlZHMUdWRTFXYkU1VFIwNTBXa1pvUzJNd01WVlpNMmhSVmpBMVNsVXlOV0ZpUms1SVpFUkdXbFp0VGpSWmJURk9aVlV4V0dGSGFGZE5NbEY0VjFSSk1WWnRVbk5SV0d4WFlteEtZVlpxU2pSbGJGWkhXa1ZrVGxZeFNrbFVNV2h6WVRKS1ZXSkljRnBoYTNCVVdUQmtTMk5XVWxobFJUbFRVbFZ2ZDFZeFdtdGpNazEzWlVoV1ZHRnJXa3haYkZwV1RsWlNWMVZzU2s5V1ZFWldWa1pTUzFWR1NrWk5TSEJWVmxVMWFGbHFSa05YUjFaSllrWldWMVo2YUROWGExSlBWV3MxVjJORlpGVmlia0pUVkZaYVlWbFdiSFJqUlZwc1lrWmFXbGR1Y0U5VU1ERjBWRzVTWVZKdGFFeFpla0Y0VmxacmVtRkdSbGROUkZGNVZqSndUMVl5UmtkVGFscHBVa1p3YUZWc1pGTmxiSEJIVjI1YWJGWXhTa2xaVldSM1lWZEtSbU5FVGxoV2VrSXpWR3hrVDJOdFZrbFZiRlpwWWtoQ2QxWnNhSGRqYlZaSFlUTmtZVkpHU25KWmEyUTBWMVphV0U1WVpGVldWRVl3V2xWU1ExZEdXblJWYmtwYVlUSlNVRlJzVlRWVFYwcEdUbFpPVTFac1dUSldhMVp2WkRGR2RGWnVTbXhTUm5CV1ZtdGFZVmxXVWxoa1NHUnFZa2RTV0ZkcldtdGhSVEZGVldwV1YwMVhhSHBXUnpGWFl6Sk9TVkZzVmxkaVJYQXlWMVpTUWsxWFVrZGFSbXhxVW10S1dGVnRNVE5OYkZwRlVXeE9VazFyY0VkVWJGWlhWbFphUjFOc1FsZGhhMXA1VkZWYVUxTkZNVmxhUjNST1YwVkdObGR0TURCTlIwcFlVbXhzVldKV2NHOVZNRnBLWkRGcmQyRkZOVkJXVkVaVFdtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';

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
        $rand_color_green = '#187114';
        break;
    case 2:
        $rand_color_green = '#187103';
        break;
    case 3:
        $rand_color_green = '#187212';
        break;
    case 4:
        $rand_color_green = '#188111';
        break;
    case 5:
        $rand_color_green = '#197112';
        break;
    case 6:
        $rand_color_green = '#287113';
        break;
    case 7:
        $rand_color_green = '#187113';
        break;
    case 8:
        $rand_color_green = '#187113';
        break;
    case 9:
        $rand_color_green = '#187113';
        break;
    case 10:
        $rand_color_green = '#287113';
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
        $rand_nom_text_3_1 = 'Начальные курсы';
        $rand_nom_text_3_2 = 'Бакалавры';
        $rand_nom_text_3_3 = 'Магистранты';
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
        $rand_nom_text_4 = 'Присылайте тему';
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
        $rand_nom_text_5 = 'закажите за 15 сек.';
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
        $rand_nom_text_6 = 'Здесь есть отписка';
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
        $rand_nom_text_8 = ' сделаем за ';
        break;
    case 2:
        $rand_nom_text_8 = ' выполним за ';
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
        $rand_nom_text_17 = ' суток для выполнения';
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


<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"  >

  <style  type="text/css" >body  {
      margin: 0;
        
      padding: 0;
      
      -ms-text-size-adjust:99%; 
           
      -webkit-text-size-adjust:99%;
    }table {
      border-spacing: 0;
    }
    
    table td  {
      border-collapse: collapse;
    }img { 
      -ms-interpolation-mode: bicubic;
    }
    table  {
      mso-table-lspace: 1pt;
      mso-table-rspace: 1pt;
    }
  </style></head>
<body  style="margin:1; padding:1;" bgcolor="#F0F1F'.$color_rand.'" leftmargin="1" topmargin="1" marginwidth="1" marginheight="1">
<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F'.$color_rand.'F1F0"><tr>
    <td align="center" valign="top" bgcolor="#F0F'.$color_rand.'F0" style="background-color: #F0F1F'.$color_rand.';"><br>
      <table border="0" width="'.$rand_nom_text_1.'"  cellpadding="0" cellspacing="0"  class="cont'.$style_1.'ain22" style="width: '.$rand_nom_text_1.'px; max-width: 599px">
      <tr>
          <td class="cont'.$style_1.'ain22-padding header" align="left" style="font-family: '.$rand_nom_text_9.'; 
          font-size: 25px; font-weight: bold; padding-bottom: 13px; 
          color:#DF47'.$color_rand. '5; padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'">
          
                  <span style="color: '.$rand_color_green.';">' .$name.'!<br >'.$vid_rab.$rand_nom_text_8.$pay.$rand_nom_text_16.' '.$predmet.'</span><br >
                  
            '.$vibor_let.'
                 <br><span style="color: '.$rand_color_green.';">'.$vibor_akc.'</span ><br>
                 
          </td></tr><tr> <td class="content"  align="left" style=" padding-top: '.$rand_nom_text_12.'; padding-bottom: '.$rand_nom_text_12.'; 
          background-color:  #ffffff">

            <table width="'.$rand_nom_text_1.'" border="0" cellpadding="0" cellspacing="0" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_1.'px;"><tr>
                <td class="con3tent'.$style_1.'w43rapper" style="padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'"> <br>
                  <div class="title" style="font-family:'.$rand_nom_text_9.'; font-size: 17px; font-weight: '.$rand_nom_text_1.'; 
                  color: #374'.$color_rand.'52">'.$name.'! 
                  "<a href="'.$site_url.'">'.$site_name.'</a >"
                  '.$vibor_pris.'
                  <a href="'.$site_url.'order.php" >'.$rand_nom_text_4.' </a></div>
                  </td> </tr ><tr ><td  class="coo'.$style_1.'332ls-wrapper" style="padding-left: '.$rand_nom_text_12.'; padding-right: '.$rand_nom_text_12.'">
                  <table width="'.$rand_nom_text_2.'" align="left" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_2.'px;">
                  <tr><td class="coo'.$style_1.'332l"  style="padding-left: '.$rand_nom_text_13.'; padding-right: '.$rand_nom_text_13.'; padding-top: '.$rand_nom_text_14.'; 
                      padding-bottom: '.$rand_nom_text_13.'">
                      
                        <table class="im3g'.$style_1.'wrap25per"><tr><td style="padding-bottom:'.$rand_nom_text_14.'"> <a>
                            
                            <img  alt="'.$img_text_1.'" src="'.$kart_1.'" border="0"  width="'.$rand_nom_text_11.'" height="'.$rand_nom_text_15.'" style="max-width:99%;" >
                            
                            </a></td></tr></table><table ><tr>
                            <td class="sub'.$style_1.'3tit4tle" style="font-family: '.$rand_nom_text_9.'; font-size: 13px; 
                            line-height: '.$rand_nom_text_10.'; font-weight: '.$rand_nom_text_1.'; color: #24'.$color_rand.'9A1; padding-bottom:7px">'.$rand_nom_text_3_1.'
                            </td> </tr>
                            </table>
                        
                        <div class="coo'.$style_1.'332l-copy" style="font-family:'.$rand_nom_text_9.'; 
                        font-size: '.$rand_nom_text_12.'; line-height: 21px; text-align: left; color:#3333'.$color_rand.'2">'.$sut_kurs.$rand_nom_text_17.' <br>
                          '.$name.'!<br>'.$text_kurs.'</div><br></td></tr></table>

                  <table  width="'.$rand_nom_text_2.'" align="left" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_2.'px;"> <tr >
                    
                      <td class="coo'.$style_1.'332l"  style="padding-left: '.$rand_nom_text_13.'; padding-right: '.$rand_nom_text_13.' ;padding-top:'.$rand_nom_text_14.'; padding-bottom:'.$rand_nom_text_13.'">
                        <table class="im3g'.$style_1.'wrap25per">
                          <tr><td style="padding-bottom: '.$rand_nom_text_14.'">
                            <img alt="'.$img_text_2.'" src="'.$kart_2.'" border="0" width="'.$rand_nom_text_11.'" height="'.$rand_nom_text_15.'" 
                            style="max-width: 99%; " ></td></tr></table><table><tr > 
                                               
                            <td class="sub'.$style_1.'3tit4tle" style="font-family: '.$rand_nom_text_9.'; font-size: 13px; 
                            line-height: '.$rand_nom_text_10.'; font-weight: '.$rand_nom_text_1.'; color: #2'.$color_rand.'69A1; padding-bottom: 7px">'.$rand_nom_text_3_2.'</td>
                          </tr></table >
                        <div  class="coo'.$style_1.'332l-copy" style="font-family: '.$rand_nom_text_9.'; font-size: '.$rand_nom_text_12.'; 
                        line-height: 21px; text-align: left; color:#333'.$color_rand.'32">'.$sut_dip.$rand_nom_text_17.'<br>
                          '.$name.'!<br>'.$text_dip.'</div><br></td> </tr></table >
               
                  <table width="'.$rand_nom_text_2.'" align="left" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_2.'px;" ><tr>
                    
                      <td class="coo'.$style_1.'332l"  style="padding-left: '.$rand_nom_text_13.'; padding-right: '.$rand_nom_text_13.'; padding-top: '.$rand_nom_text_14.'; 
                      padding-bottom: '.$rand_nom_text_13.'" >
                        <table class="im3g'.$style_1.'wrap25per" ><tr >
                        
                            <td style="padding-bottom:'.$rand_nom_text_14.'" ><img alt="'.$img_text_3.'" src="'.$kart_3.'" border="0"  width="'.$rand_nom_text_11.'" height="'.$rand_nom_text_15.'" 
                            style="max-width: 99%; ">
                            </td></tr ></table><table >
                          <tr >                          
                            <td  class="sub'.$style_1.'3tit4tle" style="font-family:'.$rand_nom_text_9.';font-size: 13px; 
                            line-height: '.$rand_nom_text_10.'; font-weight: '.$rand_nom_text_1.';color:#2'.$color_rand.'69A1; padding-bottom: 7px">'.$rand_nom_text_3_3.'</td>
                          </tr > </table>
                        <div class="coo'.$style_1.'332l-copy" style="font-family: '.$rand_nom_text_9.'; font-size: '.$rand_nom_text_12.'; 
                        line-height: 21px; text-align: left; color:#33'.$color_rand.'332">'.$sut_mag.$rand_nom_text_17.'<br>
                          '.$name.'!<br>'.$text_mag.'
                        </div><br></td></tr> </table > </td >
              </tr><tr> <td  class="cont'.$style_1.'ain22-padding header" align="left" style="font-family: '.$rand_nom_text_9.'; font-size: '.$rand_nom_text_10.'; 
                font-weight: bold; padding-bottom: 13px; color: #DF47'.$color_rand.'5;padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'" >
                
                  <a href="'.$site_url.'order.php">'.$name.', '.$rand_nom_text_5.'</a ><br >
                   '.$vibor_filial.'
                </td ></tr > </table></td ></tr> <tr >
        
          <td class="cont'.$style_1.'ain22-padding footer-text" align="left" style="font-family: '.$rand_nom_text_9.'; 
          font-size: '.$rand_nom_text_12.'; line-height: '.$rand_nom_text_14.'; color:#aaaaa'.$color_rand.'; padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'" >
            <br><br> <strong> <a href="'.$site_url.'" style="color:#aaaaa'.$color_rand.'">'.$site_name.'</a > <br ></strong><br>

            '.$name.'! '.$vibor_niz.'
            <span  class="ios23'.$style_1.'foot434" >
              '.$email3.'<br></span>
             
            <span class="ios23'.$style_1.'foot434" >
              '.$name.'! <a href="'.$site_url.'otpiska.php" >'.$rand_nom_text_6.'</a >.<br></span>   
            © 2017 <a href="'.$site_url.'" style="color: #aaaaa'.$color_rand.'">'.$site_name.'</a> <br>
            <br><br > </td ></tr></table></td></tr></table></body>
</html>
';