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

$title_let_case = rand(1,3);

switch ($title_let_case) {

    case 1:
        $title_let = $vid_rab." по цене ".$pay.", нет предоплат, центр ";
        break;
    case 2:
        $title_let = $vid_rab." безвозмездно ".$pay." от нашей студии ";
        break;
    case 3:
        $title_let = $vid_rab." по акционной стоимости ".$pay.", от ООО ";
        break;

}


//Выбор Выполнение по низкой цене

$vibor_let_case = rand(1,3);

switch ($vibor_let_case) {
    case 1:
        $vibor_let = 'В марте 2017 снизили цены.';
        break;
    case 2:
        $vibor_let = 'Весенняя распродажа работ.';
        break;
    case 3:
        $vibor_let = 'Март порадует низкой стоимостью.';
        break;
}


//Выбор Скидки

$vibor_akc_case = rand(1,3);

switch ($vibor_akc_case) {
    case 1:
        $vibor_akc = 'Начинаем работать вообще без оплаты.';
        break;
    case 2:
        $vibor_akc = 'Автор приступит к работе без денег.';
        break;
    case 3:
        $vibor_akc = 'Вы можете выбрать вариант предоплаты.';
        break;
}

//Выбор сроков

$sut_kurs = rand(2,5);
$sut_dip = rand(6,11);
$sut_mag = rand(12,16);

//чек + договор

$vibor_pris_case = rand(1,3);

switch ($vibor_pris_case) {
    case 1:
        $vibor_pris = ' выполняет заказы на официальной основе. Заказику по договору гарантированы 
		качество,
 уникальность текста, бесплатные доработки и многое другое. После внесения средств выдаём чек. ';
        break;
    case 2:
        $vibor_pris = ' делает дипломы и магистерские официально. Клиентам гарантируются по оферте 
		отсутствие плагиата,
		высокий профессионализм авторов, корректировки по замечаниям научного руководителя. Печатаем чек.';
        break;
    case 3:
        $vibor_pris = ' оказывает услуги написания работ на основании договора. Студентам и всем остальным даются гарантии качества,
		отсутствия заимствований из других источников, исправления по требованию заказчика. При зачислении средств высылается чек. 
		';
        break;
    
}


//Текст курсовой

$text_kurs_case = rand(1,3);

switch ($text_kurs_case) {
    case 1:
        $text_kurs = 'Предлагаем Вашему вниманию курсовые от специалистов. Можем написать работу в самые короткие сроки. Выполняем 
		доработки без доплат.
        ';
        break;
    case 2:
        $text_kurs = 'Наши курсовые работы примет любой университет России и СНГ. Потому что наши работники и авторы - преподаватели, 
		имеют научные степени.
        ';
        break;
    case 3:
        $text_kurs = 'Написать курсовую за несколько дней для наших авторов - обычная работа. Однако для экономии лучше придерживаться 
		стандартных сроков.
        ';
        break;
    

}

//Текст дипломной пока не исправил!

$text_dip_case = rand(1,3);

switch ($text_dip_case) {
    case 1:
        $text_dip = ' Соблюдаем сроки, выполняем дипломы, в подарок презентация и речь при полной оплате. Наши авторы - кандидаты и доктора.
		Высокая уникальность.
        ';
        break;
    case 2:
        $text_dip = 'Дипломные проекты и работы выполняются нашими авторами регулярно. Все заказчики остаются довольны. При полной оплате 
		полагается скидка 10-15%.
        ';
        break;
    case 3:
        $text_dip = 'Чтобы написать дипломную работу, нужен хороший специалист, желательно преподаватель с кандидатской степенью. Наши авторы 
		- кандидаты наук.
        ';
        break;

}

//Текст магистерской 19032017 не переделывал

$text_mag_case = rand(1,3);

switch ($text_mag_case) {
    case 1:
        $text_mag = 'Магистерский диссертационный проект сложно написать даже отличникам. Лучше не испытывать судьбу и обратиться к профессионалам, 
		докторам наук.
        ';
        break;
    case 2:
        $text_mag = 'Чтобы хорошо написать диссертацию, лучше нанять хорошего автора. Наши писатели и исследователи выполнят отличное исследование 
		по любой специальности.
        ';
        break;
    case 3:
        $text_mag = 'Обучение в магистратуре требует недюжих знаний, а написание диссертации - времени. Но если Вас достаточно средств, можно заказать 
		написание работы у нас.
        ';
        break;
   
}

//Выбор Скидки

$vibor_filial_case = rand(1,3);

switch ($vibor_filial_case) {
    case 1:
        $vibor_filial = 'Скидки 10-20 процентов при полной оплате.';
        break;
    case 2:
        $vibor_filial = 'Наш автор напишет часть безвозмездно.';
        break;
    case 3:
        $vibor_filial = 'Специальный отдел пресекает плагиат.';
        break;
    
}


//Выбор низа

$vibor_niz_case = rand(1, 3);

switch ($vibor_niz_case) {
    case 1:
        $vibor_niz = '
Нашим клиентам<br>
От эссе до настоящей диссертации<br>
Уникальные авторские работы<br>
Сложные и срочные<br>
Технические и креативные<br>
На иностранных языках<br>
';
        break;
    case 2:
        $vibor_niz = 'Оптимальное соотношение цены и качества. <br>
Мы никогда не завышаем цены на свои услуги. <br>
Вы можете, например, заказать контрольную со сложными расчетами 
и чертежами по вполне доступной цене. <br>
При этом, работа будет полностью отвечать самым высоким критериям по качеству. <br>
Таким образом, решив заказать реферат, 
курсовую или дипломную на заказ у нас, вы экономите не только свое время, но и деньги! <br>
';
        break;
	case 3:
        $vibor_niz = 'Сжатые сроки, возможность заказать диплом срочно.<br>
Если необходимо заказать курсовую срочно, реферат, контрольную или диплом - мы с радостью вам поможем! <br>
Наши работы всегда выполняются качественно и в максимально сжатые сроки. <br>
Каким бы срочным не был ваш заказ, 
наши специалисты выполнят все строго в срок. <br>
Все, что потребуется от вас, - указать срок. <br>
Уточните, когда должен быть сдан отчет по практике, курсовая или диплом. <br>
И положитесь на нас.<br>
';
        break;
    
}



$style_1 = rand(3234, 2343).'adfdpt';


function kart_vibor ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1491069729&h=Itd8HgBGnaph9yAIual4NA&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzc1NmZhMjkzYWMxZDY4ZGFlNzY4ZjI0YTkzODIwOWM1LmpwZw~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1491069729&h=qQ-RL1GniJYD9uk9t1rh_A&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzdhNjdhN2Q0MWE1MTYxNjhlMDVkMzRmNDBiNmEyNjE2LmpwZw~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1491069729&h=kUQLFos9jAMumcNuOL95qw&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzk5Mjg3NDA5Y2VmOTlkYWRiMjM5NGM2MjkwYzg2NTE2LmpwZw~~&is_https=1';

    $img_mail_4 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1491069904&h=GSOVAVyeGMhNOOCDVcR7lg&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzL2VjNzAxM2RlZjk3NmYwYmNjNGRjODMzOTM3N2JkNWY1LmpwZw~~&is_https=1';
    $img_mail_5 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1491069904&h=0fAh6v5sB9w0k4b9YY6D9w&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzM5Y2JkYWVkN2YyMzZiMThkNmYzOTYzODBlNDM4NWY4LmpwZw~~&is_https=1';
    $img_mail_6 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1491069951&h=pKv_k3tx1v1_0zZXbxlqqg&url171=czguaG9zdGluZ2thcnRpbm9rLmNvbS91cGxvYWRzL2ltYWdlcy8yMDE3LzAzLzMwOWQ4NDY4NzJhMWU4NzAwMzk3NGJhYmUxZmJlMmZhLmpwZw~~&is_https=1';

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

    }
    
return $var_2;
}

// Выбор картинок
$kart_1 = rand(1, 1000000)%6+1;
$kart_2 = rand(1, 1000000)%6+1;
if ( $kart_1 == $kart_2) $kart_2 = rand(1, 1000000)%6+1;
$kart_3 = rand(1, 1000000)%6+1;
if ( $kart_1 == $kart_3) $kart_3 = rand(1, 1000000)%6+1;
if ( $kart_2 == $kart_3) $kart_3 = rand(1, 1000000)%6+1;

$kart_1 = kart_vibor($kart_1);
$kart_2 = kart_vibor($kart_2);
$kart_3 = kart_vibor($kart_3);



$color_rand = rand(0, 9);

$body_2 = '<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>'.$name.'! '.$title_let.$site_name.' </title>
  
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  
  

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="format-detection" content="telephone=no"> 

  <style type="text/css">
  
    body {
      margin: 0;
      padding: 0;
      
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }

    table {
      border-spacing: 0;
    }

    table td {
      border-collapse: collapse;
    }

    table {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      -ms-interpolation-mode: bicubic;
    }

    

    @media screen and (max-width: 598px) {
      .force2_row2'.$style_1.',
      .cont'.$style_1.'ain22 {
        width: 99% !important;
        max-width: 99% !important;
      }
    }
    
    @media screen and (max-width: 399px) {
      .cont'.$style_1.'ain22-padding {
        padding-left: 12px !important;
        padding-right: 12px !important;
      }
      
    }
    
    .ios23'.$style_1.'foot434 a {
      color: #aaaa'.$color_rand.'a !important;
      text-decoration: underline;
    }

    @media screen and (max-width: 598px) {
      .coo'.$style_1.'332l {
        width: 100% !important;
        border-top: 2px solid #eee;
        
        padding-bottom: 0 !important;
      }

      .coo'.$style_1.'332ls-wrapper {
        padding-top: 16px;
      }

      .im3g'.$style_1.'wrap25per {
        float: right;
        
        max-width: 41% !important;
        height: auto !important;
        margin-left: 12px;
      }

      .sub'.$style_1.'3tit4tle {
        margin-top: 0 !important;
      }
    }
    
    @media screen and (max-width: 399px) {
      .coo'.$style_1.'332ls-wrapper {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }

      .con3tent'.$style_1.'w43rapper {
        padding-left: 12px !important;
        padding-right: 12px !important;
      }
    }
  </style>
 

</head>



<body style="margin:1; padding:1;" bgcolor="#F0F1F'.$color_rand.'" leftmargin="1" topmargin="1" marginwidth="1" marginheight="1">

<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F'.$color_rand.'F1F0">
  <tr>
    <td align="center" valign="top" bgcolor="#F0F'.$color_rand.'F0" style="background-color: #F0F1F'.$color_rand.';">

      <br>


   
      <table border="0" width="609" cellpadding="0" cellspacing="0" class="cont'.$style_1.'ain22" style="width:609px;max-width:598px">
        <tr>
          <td class="cont'.$style_1.'ain22-padding header" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:25px;font-weight:bold;padding-bottom:13px;color:#DF47'.$color_rand.'5;padding-left:23px;padding-right:23px">
                  <span style="color: green;">'.$name.'! '.$vid_rab.' оплата '.$pay.' р.</span><br>
            '.$vibor_let.'
                 <br><span style="color: green;">'.$vibor_akc.'</span><br>
            

          </td>
        </tr>
        <tr>
          <td class="content" align="left" style="padding-top:12px;padding-bottom:12px;background-color:#ffffff">

            <table width="609" border="0" cellpadding="0" cellspacing="0" class="force2_row2'.$style_1.'" style="width: 609px;">
              <tr>
                <td class="con3tent'.$style_1.'w43rapper" style="padding-left:23px;padding-right:23px">
                  <br>
                  
                  
                  <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:17px;font-weight:609;color:#374'.$color_rand.'52">'.$name.'! 
                  "<a href="'.$site_url.'">'.$site_name.'</a>"
                  '.$vibor_pris.'
                  
                  <a href="'.$site_url.'order.php" >Перейти к заказу</a></div>
                </td>
                
              </tr>
              <tr>
                <td class="coo'.$style_1.'332ls-wrapper" style="padding-left:12px;padding-right:12px">

                 


                  <table width="185" align="left" class="force2_row2'.$style_1.'" style="width: 185px;">
                    <tr>
                      <td class="coo'.$style_1.'332l"  style="padding-left:10px;padding-right:10px;padding-top:16px;padding-bottom:10px">
                      
                        <table class="im3g'.$style_1.'wrap25per">
                        
                          <tr>
                            <td style="padding-bottom:16px"><a>
                            <img alt="" src="'.$kart_1.'" border="0"  width="164" height="112" style="max-width:99%;" >
                            </a>
                            </td>
                          </tr>
                        </table>
                        
                        <table >
                          <tr>
                          
                            <td class="sub'.$style_1.'3tit4tle" style="font-family:Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;font-weight:609;color:#24'.$color_rand.'9A1;padding-bottom:7px">Курсовой проект</td>
                          </tr>
                        </table>
                        
                        <div class="coo'.$style_1.'332l-copy" style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:21px;text-align:left;color:#3333'.$color_rand.'2">'.$sut_kurs.' дн.<br>
                          '.$name.'!<br>'.$text_kurs.'
                          
                          
                        </div>
                        <br>
                        
                      </td>
                    </tr>
                    
                  </table>

                  <table width="185" align="left" class="force2_row2'.$style_1.'" style="width: 185px;">
                    <tr>
                    
                      <td class="coo'.$style_1.'332l"  style="padding-left:10px;padding-right:10px;padding-top:16px;padding-bottom:10px">
                      
                        <table class="im3g'.$style_1.'wrap25per">
                          <tr>
                          
                            <td style="padding-bottom:16px"><img alt="" src="'.$kart_2.'" border="0" width="164" height="112" style="max-width:99%; " ></td>
                          </tr>
                          
                        </table>
                        
                        <table >
                        
                          <tr>
                            <td class="sub'.$style_1.'3tit4tle" style="font-family:Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;font-weight:609;color:#2'.$color_rand.'69A1;padding-bottom:7px">Дипломный проект</td>
                          </tr>
                        </table>
                        <div class="coo'.$style_1.'332l-copy" style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:21px;text-align:left;color:#333'.$color_rand.'32">'.$sut_dip.' дн.<br>
                          '.$name.'!<br>'.$text_dip.'
                          
                                                 </div>
                                                 
                        <br>
                      </td>
                      
                    </tr>
                    
                  </table>
                

                  <table width="185" align="left" class="force2_row2'.$style_1.'" style="width: 185px;">
                    <tr>
                    
                      <td class="coo'.$style_1.'332l"  style="padding-left:10px;padding-right:10px;padding-top:16px;padding-bottom:10px">
                        <table class="im3g'.$style_1.'wrap25per">
                        
                          <tr>
                            <td style="padding-bottom:16px"><img alt="" src="'.$kart_3.'" border="0"  width="164" height="112" style="max-width:99%; "></td>
                          </tr>
                          
                        </table>
                        
                        <table >
                          <tr>
                          
                            <td class="sub'.$style_1.'3tit4tle" style="font-family:Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;font-weight:609;color:#2'.$color_rand.'69A1;padding-bottom:7px">Диссертация</td>
                          </tr>
                          
                        </table>
                        <div class="coo'.$style_1.'332l-copy" style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:21px;text-align:left;color:#33'.$color_rand.'332">'.$sut_mag.' дн.<br>
                          '.$name.'!<br>'.$text_mag.'
                        </div>
                        <br>
                        
                      </td>
                      
                    </tr>
                  </table>

               

                </td>
                
              </tr>
              <tr>
                <td class="cont'.$style_1.'ain22-padding header" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:23px;font-weight:bold;padding-bottom:13px;color:#DF47'.$color_rand.'5;padding-left:23px;padding-right:23px">
                  <a href="'.$site_url.'order.php">'.$name.', переход на сайт</a><br>
                   '.$vibor_filial.'
                </td>
              </tr>
            </table>

          </td>
        </tr>
        <tr>
        
          <td class="cont'.$style_1.'ain22-padding footer-text" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:11px;line-height:16px;color:#aaaaa'.$color_rand.';padding-left:23px;padding-right:23px">
            <br>
            <br>


            <strong><a href="'.$site_url.'" style="color:#aaaaa'.$color_rand.'">'.$site_name.'</a><br></strong><br>

            '.$name.'! '.$vibor_niz.'
            
            <span class="ios23'.$style_1.'foot434">
              '.$email.'<br>

            </span>

              
            <span class="ios23'.$style_1.'foot434">
              '.$name.'! <a href="'.$site_url.'otpiska.php" >Отписывание</a>.<br>
            </span>

            © 2017 <a href="'.$site_url.'" style="color:#aaaaa'.$color_rand.'">'.$site_name.'</a><br>
            
            

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

