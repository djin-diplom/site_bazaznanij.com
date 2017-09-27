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

$vibor_let_case = rand(1,12);

switch ($vibor_let_case) {
    case 1:
        $vibor_let = 'Отличная летняя скидка от 7 до 28%.';
        break;
    case 2:
        $vibor_let = 'Лучшая акция: падение цен вдвое.';
        break;
    case 3:
        $vibor_let = 'Срыв цены в летнее время на 9-29%.';
        break;
    case 4:
        $vibor_let = 'Скидка на заказ в летнюю пору 25%.';
        break;
    case 5:
        $vibor_let = 'Летние скидки на заказы от 25 %.';
        break;
    case 6:
        $vibor_let = 'В конце июня и в июле акции -20%.';
        break;
    case 7:
        $vibor_let = 'Суперскидки летом от 10 до 24%.';
        break;
    case 8:
        $vibor_let = 'Летняя суперакция цены ниже вдвое.';
        break;
    case 9:
        $vibor_let = 'Снижение цен в июле на 15-20 %.';
        break;
    case 10:
        $vibor_let = 'Суперакция в июле от 15 до 30%.';
        break;
    case 11:
        $vibor_let = 'Суперскидки: стоимость ниже в 2 раза.';
        break;
    case 12:
        $vibor_let = 'Падение стоимости летом на 13-27%.';
        break;
}


$vibor_let = rand_podstav_smv($vibor_let);


//Без предоплаты сделано

$vibor_akc_case = rand(1,12);

switch ($vibor_akc_case) {
    case 1:
        $vibor_akc = 'Отменили предварительные оплаты.';
        break;
    case 2:
        $vibor_akc = 'Возможно заказать без предоплат.';
        break;
    case 3:
        $vibor_akc = 'Отдадим заказ без задатка в работу.';
        break;
    case 4:
        $vibor_akc = 'Начнем выполнять диплом без предоплаты.';
        break;
    case 5:
        $vibor_akc = 'Летом работаем без начальной платы.';
        break;
    case 6:
        $vibor_akc = 'Без всякой предоплаты запустим заказ.';
        break;
    case 7:
        $vibor_akc = 'Выполняем без предварительной платы.';
        break;
    case 8:
        $vibor_akc = 'Для запуска заказа не нужна оплата.';
        break;
    case 9:
        $vibor_akc = 'Начнём работу над заказом бесплатно.';
        break;
    case 10:
        $vibor_akc = 'Никакой предварительной оплаты.';
        break;
    case 11:
        $vibor_akc = 'Нет необходимости в предоплате.';
        break;
    case 12:
        $vibor_akc = 'Запустим заказ в работу бесплатно.';
        break;
}

$vibor_akc = rand_podstav_smv($vibor_akc);

//Выбор сроков

$sut_kurs = rand(2,5);
$sut_dip = rand(6,11);
$sut_mag = rand(12,16);

//чек + договор сделано

$vibor_pris_case = rand(1,12);

switch ($vibor_pris_case) {
    case 1:
        $vibor_pris = ' оказывает посильную помощь учащимся и поступившим в университеты на базе договора. Официально 
        зарегистрирована как компания Российской Федерации. ';
        break;
    case 2:
        $vibor_pris = ' предоставляет сервис написания рефератов, курсовых и дипломных работ российским студентам и 
        студентам СНГ на официальной основе договора. ';
        break;
    case 3:
        $vibor_pris = ' находится в базе компаний Москвы, Санкт-Петербурга и Казани, а также других городов РФ. 
        Гарантирует по договору высокую оценку на экзамене. ';
        break;
    case 4:
        $vibor_pris = ' функционирует строго по договору оферты. Компания числится в реестре образовательных центров СПБ. 
        Дорабтки бесплатно. ';
        break;
    case 5:
        $vibor_pris = ' корректирует работы бесплатно в рамках договора. Компания высылает чек, работает официально по 
         законодательству РФ. ';
        break;
    case 6:
        $vibor_pris = ' обеспечивает Заказчикам бесплатные доработки в рамках оферты. Надежность и качество даёт регистрация 
         в каталоге компаний России. ';
        break;
    case 7:
        $vibor_pris = ' обслуживает Заказчиков на официальной основе, вступает в договорные отношения. Обязуется предоставить 
        качественную уникальную работу в оговоренные сроки. ';
        break;
    case 8:
        $vibor_pris = ' предоставляет документы оферты, несёт обязательства перед клиентами по качеству и уникальности текстов. 
         Работает только согласно законодательству России. ';
        break;
    case 9:
        $vibor_pris = ' высылает документацию по заказу, работает на официальной основе. Зарегистрирована в каталоге компаний 
          России. Исполняет сроки, даёт гарантии качества. ';
        break;
    case 10:
        $vibor_pris = ' помогает студенчеству официально на основании договора. Компания предоставит работу с должной 
         уникальностью и качеством. ';
        break;
    case 11:
        $vibor_pris = ' присылает документацию оферты-договора, имеет обязанность передавать Заказчикам только качественный 
        текст. Работает по АК России. ';
        break;
    case 12:
        $vibor_pris = ' ведёт свою деятельность официально. Имеется регистрация в реестре компаний СПБ, Казани и Москвы. 
        Всегда придерживается сроков. ';
        break;
}

$vibor_pris = rand_podstav_smv($vibor_pris);


//Текст курсовой

$text_kurs_case = rand(1,12);

switch ($text_kurs_case) {

    case 1:
        $text_kurs = 'В наших кабинетах выполнением курсовых руководят кандидаты. Для выполнения работ набраны спецы. 
        ';
        break;
    case 2:
        $text_kurs = 'Любой Заказчик хочет гарантии качества - в нашей фирме это научная степень автора и его опыт.
        ';
        break;
    case 3:
        $text_kurs = 'Лучшие профессионалы с большим опытом изготовления курсачей и научной степенью работают у нас.
        ';
        break;
    case 4:
        $text_kurs = 'Компания выполняет курсовые по методическим указаниям Заказчика. Руководят работой кандидаты наук.
        ';
        break;
    case 5:
        $text_kurs = 'Студия следует лучшим традициям создания курсовых проектов. Специалисты работают по методике клиента.
        ';
        break;
    case 6:
        $text_kurs = 'Авторский коллектив Центра имеет награды и опыт работы. Все досконально разбираются в своём предмете.
        ';
        break;
    case 7:
        $text_kurs = 'В нашей Компании написанием курсовой работы управляет кандидат наук. Выбираем только опытных авторов. 
        ';
        break;
    case 8:
        $text_kurs = 'В Вашем распоряжении услуги лучших преподавателей университетов, написавших уже сотни курсовых работ.
        ';
        break;
    case 9:
        $text_kurs = 'Лучшие специалисты с громадным опытом и научными степенями пишут для нашего Центра курсовые работы.
        ';
        break;
    case 10:
        $text_kurs = 'У нас в офисах созданием курсовых заведуют кандидаты. Для написания избираются лишь профи. 
        ';
        break;
    case 11:
        $text_kurs = 'Для нас хорошей гарантией качества является должность преподавателя у автора и его опыт.
        ';
        break;
    case 12:
        $text_kurs = 'Отличные спецы с большим стажем написания курсовых и званиями работают у нас в компании.
        ';
        break;
}


$text_kurs = rand_podstav_smv($text_kurs);

//Текст дипломной

$text_dip_case = rand(1,12);

switch ($text_dip_case) {
    case 1:
        $text_dip = 'Дипломные в наших кабинетах в России и СНГ производятся усилиями сотрудников вузов со стажем.
        ';
        break;
    case 2:
        $text_dip = 'Для любого человека лучше сохранить время - диплом напишут наши авторы, спецы в своих областях.
        ';
        break;
    case 3:
        $text_dip = 'В авторских базах нашей компании есть много преподавателей с большим преподавательским стажем.
        ';
        break;
    case 4:
        $text_dip = 'При работе над дипломными проектами Студия отбирает кандидатов и докторов с богатым опытом работы.
        ';
        break;
    case 5:
        $text_dip = 'Компания сотрудничает лишь с правильными исполнителями, теми, кто ежедневно успешно пишет дипломы.
        ';
        break;
    case 6:
        $text_dip = 'Авторский состав Студии и менеджеры занимают должности в вузах России и разбираются в своем деле.
        ';
        break;
    case 7:
        $text_dip = 'Дипломные проекты в нашей Студии ведутся усилиями людей с научным званием и опытом преподавания в вузе.
        ';
        break;
    case 8:
        $text_dip = 'Наш авторский коллектив создателей дипломных работ состоит из аспирантов, кандидатов и докторов наук.
        ';
        break;
    case 9:
        $text_dip = 'В нашем учебном Центре к выполнению заказов для дипломников допускаются только кандидаты или доктора.
        ';
        break;
    case 10:
        $text_dip = 'Дипломы у нас в офисах по всей стране создаются трудами преподавателей с научными степенями.
        ';
        break;
    case 11:
        $text_dip = 'Для каждого из нас важно сохранить наших авторов дипломных проектов, спецов в своей области.
        ';
        break;
    case 12:
        $text_dip = 'В нашей базе авторов выпускных работ состоят только люди с кандидатской и докторской степенью.
        ';
        break;



}

$text_dip = rand_podstav_smv($text_dip);

//Текст магистерской

$text_mag_case = rand(1,12);

switch ($text_mag_case) {
    case 1:
        $text_mag = 'Диссертации и докторские для нашей компании не беда - в базе лучшие авторы с научными степенями.
        ';
        break;
    case 2:
        $text_mag = 'Используйте отличных специалистов-авторов нашего центра с научной степенью для лучшей диссертации.
        ';
        break;
    case 3:
        $text_mag = 'Для всех тем магистерских работ в нашей фирме есть спецы-авторы с педагогическим стажем в вузе.
        ';
        break;
    case 4:
        $text_mag = 'Центр выдает диссертации под ключ по всем стандартам. Для контроля над автором выделяется доктор наук.
        ';
        break;
    case 5:
        $text_mag = 'В компании для изготовления магистерских используются лишь кандидаты и доктора с солидным опытом работы.
        ';
        break;
    case 6:
        $text_mag = 'Студия поручает контроль за написанием магистерских нескольким специалистам с научной степенью по предмету.
        ';
        break;
    case 7:
        $text_mag = 'Диссертации создаются в нашей Организации усилиями коллектива специалистов, среди которых доктора наук.
        ';
        break;
    case 8:
        $text_mag = 'Лишь профессионалы с научной степенью, которых мы привлекаем, способны создать качественную диссертацию.
        ';
        break;
    case 9:
        $text_mag = 'Практически по любой диссертационной теме у нас есть автор с научной степенью кандидата и даже доктора.
        ';
        break;
    case 10:
        $text_mag = 'Магистерские и даже диссертации для нас не проблема - у нас много авторов с докторской степенью.
        ';
        break;
    case 11:
        $text_mag = 'Лучше использовать наших профессионалов-авторов с докторскими степенями для лучшей магистерской.
        ';
        break;
    case 12:
        $text_mag = 'По каждой теме диссертации наша фирма имеет специалиста-автора с научными степенями и званиями.
        ';
        break;

}

$text_mag = rand_podstav_smv($text_mag);

//Выбор Скидки

$vibor_filial_case = rand(1,12);

switch ($vibor_filial_case) {
    case 1:
        $vibor_filial = 'Приходите к нам в филиалы по всей РФ.';
        break;
    case 2:
        $vibor_filial = 'Для всех открыты офисы в СПБ и Сочи.';
        break;
    case 3:
        $vibor_filial = 'В миллионниках РФ открыты наши центры.';
        break;
    case 4:
        $vibor_filial = 'Наши филиалы есть не только в СПБ, но и в Москве.';
        break;
    case 5:
        $vibor_filial = 'Офисы компании открыты в Питере, Уфе и Казани.';
        break;
    case 6:
        $vibor_filial = 'Отделения в каждом уголке России, даже в Крыму.';
        break;
    case 7:
        $vibor_filial = 'Наши двери открыты во многих городах России.';
        break;
    case 8:
        $vibor_filial = 'За нами СПБ, Москва и другие центры РФ.';
        break;
    case 9:
        $vibor_filial = 'Мы есть в Москве и других русских уголках.';
        break;
    case 10:
        $vibor_filial = 'Приходите к нам в офисы всюду в России.';
        break;
    case 11:
        $vibor_filial = 'Для Вас открыты филиалы в Москве и Крыму.';
        break;
    case 12:
        $vibor_filial = 'В каждом крупном городе есть наше отделение.';
        break;
}

$vibor_filial = rand_podstav_smv($vibor_filial);



//Выбор низа

$vibor_niz_case = rand(1, 12);

switch ($vibor_niz_case) {
    case 1:
        $vibor_niz = 'Наша задача – сделать так, чтобы у Вас было больше свободного времени, <br>
        поэтому мы предлагаем Вам услуги, необходимые каждому студенту!<br>
        На работу дается гарантия сроком 90 дней. В работе минимум 70% оригинальных фраз, <br>
        согласно системе антиплагиат.ру!<br> По запросу предоставляем подробный отчет, о проверке работы. <br>
        В стоимость работы включены все доработки и поправки, <br>
        которые могут возникнуть, не противореча первоначальным требованиям.<br>
';
        break;
    case 2:
        $vibor_niz = 'Дипломные работы на заказ <br>
        Курсовые работы на заказ <br>
        Рефераты на заказ <br>
        Изготовление чертежей (начертательная геометрия и инженерная графика) <br>
        Заказать контрольную работу <br>
        Решение задач (математике, физике, химии, экономике, праву, биологии и тд.) <br>
        Переплет дипломных работ и тд.<br>
';
        break;
    case 3:
        $vibor_niz = 'Мы гарантируем, что оформляя на заказ диплом в нашей компании,<br> 
        вы получите уникальную научно-исследовательскую работу, <br>
        которая будет отличаться авторским стилем написания при исследовании темы, <br>
        а также полную выкладку обоснований вывода. <br>
        Для написания дипломной работы используются только актуальные материалы <br>
        как отечественных, так и иностранных источников...<br>
';
        break;
    case 4:
        $vibor_niz = 'Вы в ступоре? Незнаете с чего начать писать дипломную? <br>
        Мы поможем собраться с мыслями! <br>
        Начните писать диплом с нашей помощью!<br>
        С нами вы защититесь<br>
        Следуя простым советам, вы добьетесь успеха в защите дипломной работы!<br>
';
        break;
    case 5:
        $vibor_niz = 'Тайны успеха защиты дипломных<br>
Мы расскажем все секреты которые вам обязательно помогут написать качественную дипломную.<br>
Правильный путь<br>
Рекомендации по написанию дипломной работы строго по требованиям вуза!<br>
Обращайтесь за помощью в написании диплома к профессионалам!<br>
';
        break;
    case 6:
        $vibor_niz = 'Наша команда по сопровождению дипломников состоит из опытных сотрудников,<br> 
        которые любят то, что они делают, и всегда готовы <br>
        предложить помощь в написании Вашей дипломной работы за скромное вознаграждение.<br> 
        Причем собранный нами опыт поможет Вам во всех тягостях от выбора темы до защиты дипломной!<br>
';
        break;
    case 7:
        $vibor_niz = 'Наша компания-команда более 10 лет специализируется в сфере предоставления <br>
        информационно-консультационных услуг на профессиональном уровне.<br>
         За это время группа специалистов и научных исполнителей <br>
        прошли отбор временем, 
        что позволило сформировать команду опытных и профессиональных авторов из различных областей. <br>
';
        break;
    case 8:
        $vibor_niz = 'За период деятельности Научный Центр сформировал собственную базу литературы и 
        научных материалов, <br>
        которые позволяют студентам успешно сдавать работы на максимально-высокие баллы.<br> 
        Это дало возможность нашей команде набраться огромного опыта в написании дипломных и курсовых проектов. <br>
        Благодаря этому клиенты нашей компании могут сохранить время и без особых проблем подготовиться к качественной сдаче.<br>
';
        break;
    case 9:
        $vibor_niz = 'При оформлении заказа на написание работы мы выберем для Вас лучших специалистов, <br>
        внимательно выслушаем все Ваши пожелания и требования к работе, выполним работу в необходимые для Вас сроки. <br>
        Также, хотим отметить, что любые доработки и корректировки после написания нами Вашей работы будут выполнятся <br>
        без дополнительной оплаты и в кратчайшие сроки (при оговоренных деталях выполнения до написания заказа).<br>
';
        break;
    case 10:
        $vibor_niz = 'Если вам понадобилась помощь, <br>
        свою надежную руку Вам протянет команда единомышленников - наше учебно-консультационное агентство.<br>
        Мы – одна Команда. <br>
        Наша команда состоит из грамотных специалистов, объединенные усилия которых позволяют <br>
        гарантировать качественное выполнение поставленной задачи.<br> 
        В каждой сданной заказчику работе материализуется труд всего коллектива – <br>
        от руководителя до менеджера, от юриста до курьера.<br>
';
        break;
    case 11:
        $vibor_niz = 'Перечень оказываемых нами услуг необычайно широк. <br>
        Несмотря на то, что основными услугами, которые предлагает клиентам наше агентство, <br>
        является выполнение заказов на дипломные и курсовые работы, а также продажа входящих в Каталог готовых работ,<br>
        мы профессионально и качественно занимаемся также:<br>
переводами с/на иностранные языки;<br>
организацией дистанционных подготовительных курсов к ЕГЭ и поступлению в ВУЗы.<br>
Перед вами – крупная компания, которая заняла нишу образовательных услуг всерьез и надолго.<br>
';
        break;
    case 12:
        $vibor_niz = 'Мы стремимся быть ближе к заказчику. <br>
        Интернет сделал проще нашу жизнь, открыв фантастические возможности, <br>
        но полностью исключать живое человеческое общение все же не стоит. <br>
        Быстрое решение возникших вопросов, помощь, поддержка – все это вы найдете в нашей компании.<br>
Во главу угла мы ставим интересы клиента. <br>
Заказчику нужны Гарантии - это знает каждый. <br>
Ознакомьтесь с основным принципами нашей деятельности, <br>
и вы поймете – с клиентами мы строим исключительно честные паритетные отношения.<br>
';
        break;

}

$vibor_niz = rand_podstav_smv($vibor_niz);



$style_1 = rand(3234, 2343).'adfdpt';


function kart_vibor_1 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499709244&h=D_bWMEbSQArLH84mmMNShw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk3MDkyMDImaD1sR2ttWU0yUF9NNTBpcURWaFRfQzVnJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QV1JtVTFWQmVESjRhMlZuTmxaWVRuTlRSR28wWkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQlhiRTlhTURnMFlrZFNiMDVVYUZWbFJtd3lZMWhPTWxwdFNUTmFhMFZ0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWVlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1QyVnNWalZVYkU1aFlqRkNWbVZJU2xOU1ZrWXdWRmR3VDJKc1RuTlNibFpXVWpCYWFGZEVTbk5UVjBsNllVWlNhMUl5VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmtNMnhYWWxoQ1VGcFhkRWRPUmxKVlUyeE9hVkp1UW5oWldIQlBWREpLVjJKRVRsaFdla1pRV1Zkek1WTkdWblJqUmtKVFVsUkZNbFpFUmxOVWF6QjNUa2hzVkdKWVVsQldha1p5WlVaU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499709274&h=sZZYK8jiPvfjcBQjBc-f5Q&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk3MDkyMDImaD1sR2ttWU0yUF9NNTBpcURWaFRfQzVnJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QV1JtVTFWQmVESjRhMlZuTmxaWVRuTlRSR28wWkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQlhiRTlhTURnMFlrZFNiMDVVYUZWbFJtd3lZMWhPTWxwdFNUTmFhMFZ0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWVlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1QyVnNWalZVYkU1aFlqRkNWbVZJU2xOU1ZrWXdWRmR3VDJKc1RuTlNibFpXVWpCYWFGZEVTbk5UVjBsNllVWlNhMUl5VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmtNMnhYWWxoQ1VGcFhkRWRPUmxKVlUyeE9hVkp1UW5oWldIQlBWREpLVjJKRVRsaFdla1pRV1Zkek1WTkdWblJqUmtKVFVsUkZNbFpFUmxOVWF6QjNUa2hzVkdKWVVsQldha1p5WlVaU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499709313&h=0KoLCFy4rIqd0Yo7FJ47nw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk3MDkyMDImaD1sR2ttWU0yUF9NNTBpcURWaFRfQzVnJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QV1JtVTFWQmVESjRhMlZuTmxaWVRuTlRSR28wWkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQlhiRTlhTURnMFlrZFNiMDVVYUZWbFJtd3lZMWhPTWxwdFNUTmFhMFZ0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWVlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1QyVnNWalZVYkU1aFlqRkNWbVZJU2xOU1ZrWXdWRmR3VDJKc1RuTlNibFpXVWpCYWFGZEVTbk5UVjBsNllVWlNhMUl5VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmtNMnhYWWxoQ1VGcFhkRWRPUmxKVlUyeE9hVkp1UW5oWldIQlBWREpLVjJKRVRsaFdla1pRV1Zkek1WTkdWblJqUmtKVFVsUkZNbFpFUmxOVWF6QjNUa2hzVkdKWVVsQldha1p5WlVaU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_4 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938287&h=qwaRW5dHOWqEAkf2c8RqZQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI0NzcmaD02MHdHUDlkMlVRQUVuLWxiYXBUT1NBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0zTWpVbWFEMDVOWEJQTVU5RWFHSTFkMWxCWlcxNFFWVnhNV3RSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFRucEJiV0ZFTVV0T1YyaFBVVzVuZW1SRVZuQlBSRlpUVFdwV1MyTnRVbkJhVnpsU1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZZeFNuUldWRVpYVVcxV1JWTnFVbWhOYkZwMVZHMTRZVmRXVW5WVWJGSlRVakk0ZDFkclZrWmlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXhWak5XUjNSUFdWZEplRkZzYUdsU1ZHeG9WRlZTYmsxR2JISmFSazVwVFVSV1ZsbFZXbGRpUmtwMFpETnNXazFYYUZCVVYzaDNaRVpPVlZSdFJtaE5SbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFac2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VVhsV2JrNVhZV3hhVmxsclZURmhSbXh4VW10T1YySldXa3BWTW5oUFZURmFjbGRZWkZkU2JWSXpWa1JLUzJNeFVuVlViRTVwWWtad1dGWlhjRU5aVjBaSFdrVldWR0pyTlZWV2FrSnpUbXhzVmxkc1RtaE5WV3cxVmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxMFRrMXVhRmxYVjNodlVURldSMk5HYUd0U1YxSlFWVzE0UzFac1ZYbGxSVGxvVm10d01WVlhOVzlYYkdSSlVXeENWMUpGY0V4V2FrcExVbFpTYzJGR1pHeGhNWEJTVmpGYWEyVnJNVmRVYTJSWFlteEtjVlZ0ZEV0V1JsWnpWV3RhVG1KR2NFWlZiWGhQVmxkR05sRnFUbFZoTW1oNlZtdGtTMWRXVm5OUmJHUm9ZVEZ3TlZkc1ZtRlZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_5 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938329&h=sVPTM84aD8Kx_Ly534wtWA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI0NzcmaD02MHdHUDlkMlVRQUVuLWxiYXBUT1NBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0zTWpVbWFEMDVOWEJQTVU5RWFHSTFkMWxCWlcxNFFWVnhNV3RSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFRucEJiV0ZFTVV0T1YyaFBVVzVuZW1SRVZuQlBSRlpUVFdwV1MyTnRVbkJhVnpsU1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZZeFNuUldWRVpYVVcxV1JWTnFVbWhOYkZwMVZHMTRZVmRXVW5WVWJGSlRVakk0ZDFkclZrWmlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXhWak5XUjNSUFdWZEplRkZzYUdsU1ZHeG9WRlZTYmsxR2JISmFSazVwVFVSV1ZsbFZXbGRpUmtwMFpETnNXazFYYUZCVVYzaDNaRVpPVlZSdFJtaE5SbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFac2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VVhsV2JrNVhZV3hhVmxsclZURmhSbXh4VW10T1YySldXa3BWTW5oUFZURmFjbGRZWkZkU2JWSXpWa1JLUzJNeFVuVlViRTVwWWtad1dGWlhjRU5aVjBaSFdrVldWR0pyTlZWV2FrSnpUbXhzVmxkc1RtaE5WV3cxVmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxMFRrMXVhRmxYVjNodlVURldSMk5HYUd0U1YxSlFWVzE0UzFac1ZYbGxSVGxvVm10d01WVlhOVzlYYkdSSlVXeENWMUpGY0V4V2FrcExVbFpTYzJGR1pHeGhNWEJTVmpGYWEyVnJNVmRVYTJSWFlteEtjVlZ0ZEV0V1JsWnpWV3RhVG1KR2NFWlZiWGhQVmxkR05sRnFUbFZoTW1oNlZtdGtTMWRXVm5OUmJHUm9ZVEZ3TlZkc1ZtRlZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_6 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938356&h=5DQuuG7JXtOt3jW_N8Nn4w&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI0NzcmaD02MHdHUDlkMlVRQUVuLWxiYXBUT1NBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0zTWpVbWFEMDVOWEJQTVU5RWFHSTFkMWxCWlcxNFFWVnhNV3RSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFRucEJiV0ZFTVV0T1YyaFBVVzVuZW1SRVZuQlBSRlpUVFdwV1MyTnRVbkJhVnpsU1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZZeFNuUldWRVpYVVcxV1JWTnFVbWhOYkZwMVZHMTRZVmRXVW5WVWJGSlRVakk0ZDFkclZrWmlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXhWak5XUjNSUFdWZEplRkZzYUdsU1ZHeG9WRlZTYmsxR2JISmFSazVwVFVSV1ZsbFZXbGRpUmtwMFpETnNXazFYYUZCVVYzaDNaRVpPVlZSdFJtaE5SbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFac2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VVhsV2JrNVhZV3hhVmxsclZURmhSbXh4VW10T1YySldXa3BWTW5oUFZURmFjbGRZWkZkU2JWSXpWa1JLUzJNeFVuVlViRTVwWWtad1dGWlhjRU5aVjBaSFdrVldWR0pyTlZWV2FrSnpUbXhzVmxkc1RtaE5WV3cxVmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxMFRrMXVhRmxYVjNodlVURldSMk5HYUd0U1YxSlFWVzE0UzFac1ZYbGxSVGxvVm10d01WVlhOVzlYYkdSSlVXeENWMUpGY0V4V2FrcExVbFpTYzJGR1pHeGhNWEJTVmpGYWEyVnJNVmRVYTJSWFlteEtjVlZ0ZEV0V1JsWnpWV3RhVG1KR2NFWlZiWGhQVmxkR05sRnFUbFZoTW1oNlZtdGtTMWRXVm5OUmJHUm9ZVEZ3TlZkc1ZtRlZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_7 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499180082&h=mdFpI4R80x9EzTw4gP1-yQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTg5MzgyODcmaD1xd2FSVzVkSE9XcUVBa2YyYzhScVpRJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UZ3pOakkwTnpjbWFEMDJNSGRIVURsa01sVlJRVVZ1TFd4aVlYQlVUMU5CSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZelZPYWswelRXcFZiV0ZFTURWT1dFSlFUVlU1UldGSFNURmtNV3hDV2xjeE5GRldWbmhOVjNSU1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFZia1pvVm5wU01GZHJaSE5rTWtwSVQxaFNTMVpHUmpOWmJHUkhZMGRLUkU1WWJHdFZNWEJ6VlVaU1JrMUZPVlZaZWtaUFVrWkZNRlJ1Y0VKaVYwWkZUVlYwVDFZeWFGQlZWelZ1WlcxU1JWWnVRbEJTUmxwVVZGZHdWMU15VG5SVmJrSmhWbnBzVTFOdE5WZGxWMHBGVWxST1RsWkVSbkZWTUZaM1RXeHdWbUZJU210V01GcFpWRlpqTVdGck1YRlNiVGxhVm0xUmVscEdaRTlrVmxwWlYyeEdUbUpHYjNkV01WcHJZekpOZUZGc2FGTmhhMXB5Vlc1d2MwNVdjRWhOUkZacVRXdHNOVlpYTlVOaFYwWnlZa2hPVldFeFNrUmFSVnB6VjBkS1NWUnJNV2xoTWprMFZUSXdlRlpyT1ZaTlZsWldWa1phVUZaclpHcGxWbEYzVld0S1QxSlVWVEZXTWpBMVZWWlplRk51VWxkV1JWcFlWVmN4VjFKV1RuRlZiV2hPWWtad01WWkhNVFJaVm1SWFZXNVdWV0pHU2xSVmFrazBaREZrY2xacldtbFdNVXBhVlRJMVQxUnNXa2hVYWxKV1VtMVNVRlV4V2s5a1ZtUjBaVVpTVTAweFJqUldNVnBoWVcxV1NGTnVVbFZYUjNoUFZtcEtiMkl4V25GVWJYUk9WbTEwTlZSc1dtRmhNa3BHVW1wV1YySlVWbFJXTW5oYVpWZFdTV05HV2xOaVZrcEpWa1phYTFVeFRrWlBWbXhwVWpOU2NGWnJaRFJPYkdSWVkwVjBWazFyTlVsVk1qVkhWMFpaZW1GR1FsWmhNVnBNVkZWYWExWXhjRWxVYlhCT1UwZG5lRlpVU25kU01VMTVVMnhrVjFaR1dsWldiWGhMVlRGU2MxWllhRTlpUlhCYVdXdFZOV0pIUlhoV2FrNVhVak5TVUZkV1pFcGxSa1p6WVVkc1UxWkhlRzlXUmxaVFltc3hSMkpJU21GU2F6VndWRlZTVjFac2JGWlhiR1JwVW10d01GcEVUbk5YYXpGWVlVWkNWVll6YUROYVJWcFBWbFpTZEZKdGFFNVNiRzkzVmpKMFlXSXhUWGxVV0dST1ZteGFZVlJVU205VmJGcHhVVlJHVkdKR1ZqVlViR1JIWVZaS2NrNVZiR0ZTVmtwSVZqSjRZV1JHVW5GVmJIQnBWa1ZhVUZkc1dsWmxSbVJJVW10b2FGSnRVazlVVjNoSFRrWlplRlZyY0U1V2JIQXdWbGMxVDFWc1pFaGxSbWhhWWxob1RGZFdXbUZqVms1eFZXMTRhVkpzY0VsV01uUlhZVEZTYzFkWWFGUmhNbmhXVkZaa2IyVnNiRlZUYTNSWFZqQndTbGt3V25kaFIwVjZVV3hXV0ZaRlNuSlZla3BQVmpGYWMyRkhlRk5XUjNoVlZsZDRWMlJ0VVhoWFdHaFlZbGhTY1ZSWGMzaE5NWEJXWVVaa1YxSXdXbmxXTW5RMFYyMUtSMk5HWkZWaVJuQlVWbXBHVjJNeFRuSlBWbVJYVWxad1dGWnRkR0ZWTVUxNFZWaHNWMkpyTlZoWlYzaGhWbXhzY2xaVVJtaFNiWGg0VlcxMFQxWXlTbGRYYTNCV1RXNW9VRlpVUm1GamJHUlpXa1prVTJKV1NYcFdhMUpMVXpKTmVGVnVWbFZpUlRWd1dXdGFkMWRHV2xoalJVNWFWakJhU0ZkclZsZFdSMHB5VGxaV1YyRnJTbnBVYlhoelZteGtjMVJ0YUU1V1YzY3hWbXRqTVZVeGJGZFRibEpvVWxob1lWcFhkRWRPUmxwelYyNUtiR0pWV2toVmJYaHJWR3hLUjFKcVZsZGhhM0F6VmtSR1dtVldTbkphUmxKb1lraENkMVpYZEdGa01rWkhWbTVPWVZKck5YTlphMmhEVTBaWmVVNVhSbWxTYkd3MFZUSjBjMWRzV2xoVmFrNWFWbTFTVEZWdE1VOVNWbEp6WVVaa2JHRXdiRFpXYTJRMFlURlJlVlJ1VWxkaE1uaFhXV3RhWVdOR2JISmhSVTVyVFZad2VsbFZhR3RoYlVwWFYydG9XbFpGTlhKWFZscExVakZPZFZOc2NHaE5iRVYzVm1wR1lWbFdaRVpPVm14aFVteGFXRlpyVmxwa01XUnpWbXhPVWsxWFVraFdNalZUVm0xS2NtTkhSbHBXUlhCVVZsVmFVMk14V2xWV2JGSlhUVWhDU0ZaSGVHRlVNVlY0VjI1T1dGWkZjRmhaVkVaaFpHeHdSVkpyWkd0U2JIQXhWVEl4TUZSck1YVmhSbXhZVmpOb2RsVlVSbGRTTWs1SFlVZDBVMVl4U2xGV1Z6RTBVekZhYzFaWWJHeFNWR3h2Vm0xMGQwMVdWbGhPVnpsWVlrZFNTbFZYZUVOV01VcEdZMFY0VjJGcmNFeFZiRnBUWXpKR1IxcEhlR2hOV0VKVFZtcEdZV0V5Vm5KTlZtUlZZVEpTV0ZsdGVFdGpWbFowWkVWMFYxSnNXbnBXVjNSaFZHMUtSMk5GV2xaaVdHaFFWbXhrUjA1c1JuRlViRlpvVFcxb05sWnRkR3RUTVdSWFZtNU9VbUpIVW05WlZFWjNUbFprYzFadFJsWk5WVFZIVkZaYWMxbFdTWHBWYXpsWFRVWmFTRlJ0ZUd0a1JURkZVV3MxVTAxSVFscFdWekUwWXpGYVdGTnNaR3BTZW14WFZGVmFkMU14Y0VWU2JrcHJUV3RhUjFSc1drTldNVnBHVjJ4U1dHSlVRWGRVVldSTFYwWktjMkpHVm1sV2JrSjJWbFJDWVZOdFVYaGhNMlJvVWxSV1VWWnNVa2RWTVhCMFRrUkNhVll3V2xwV1J6RmhZVVpPUjFOWVpGcE5SMmhQVkRGVmVGVnRXblZPUnpGb1YwVTFiVmxWYUZOTlIwNUpWRlJzVGxWWU5TMUtiV3g2V0RKb01HUklRbnBRVkVWLUptbHpYMmgwZEhCelBURX4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_8 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499179556&h=SAPgku429-NPOYbJvhviJw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTg5MzgzMjkmaD1zVlBUTTg0YUQ4S3hfTHk1MzR3dFdBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UZ3pOakkwTnpjbWFEMDJNSGRIVURsa01sVlJRVVZ1TFd4aVlYQlVUMU5CSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZelZPYWswelRXcFZiV0ZFTURWT1dFSlFUVlU1UldGSFNURmtNV3hDV2xjeE5GRldWbmhOVjNSU1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFZia1pvVm5wU01GZHJaSE5rTWtwSVQxaFNTMVpHUmpOWmJHUkhZMGRLUkU1WWJHdFZNWEJ6VlVaU1JrMUZPVlZaZWtaUFVrWkZNRlJ1Y0VKaVYwWkZUVlYwVDFZeWFGQlZWelZ1WlcxU1JWWnVRbEJTUmxwVVZGZHdWMU15VG5SVmJrSmhWbnBzVTFOdE5WZGxWMHBGVWxST1RsWkVSbkZWTUZaM1RXeHdWbUZJU210V01GcFpWRlpqTVdGck1YRlNiVGxhVm0xUmVscEdaRTlrVmxwWlYyeEdUbUpHYjNkV01WcHJZekpOZUZGc2FGTmhhMXB5Vlc1d2MwNVdjRWhOUkZacVRXdHNOVlpYTlVOaFYwWnlZa2hPVldFeFNrUmFSVnB6VjBkS1NWUnJNV2xoTWprMFZUSXdlRlpyT1ZaTlZsWldWa1phVUZaclpHcGxWbEYzVld0S1QxSlVWVEZXTWpBMVZWWlplRk51VWxkV1JWcFlWVmN4VjFKV1RuRlZiV2hPWWtad01WWkhNVFJaVm1SWFZXNVdWV0pHU2xSVmFrazBaREZrY2xacldtbFdNVXBhVlRJMVQxUnNXa2hVYWxKV1VtMVNVRlV4V2s5a1ZtUjBaVVpTVTAweFJqUldNVnBoWVcxV1NGTnVVbFZYUjNoUFZtcEtiMkl4V25GVWJYUk9WbTEwTlZSc1dtRmhNa3BHVW1wV1YySlVWbFJXTW5oYVpWZFdTV05HV2xOaVZrcEpWa1phYTFVeFRrWlBWbXhwVWpOU2NGWnJaRFJPYkdSWVkwVjBWazFyTlVsVk1qVkhWMFpaZW1GR1FsWmhNVnBNVkZWYWExWXhjRWxVYlhCT1UwZG5lRlpVU25kU01VMTVVMnhrVjFaR1dsWldiWGhMVlRGU2MxWllhRTlpUlhCYVdXdFZOV0pIUlhoV2FrNVhVak5TVUZkV1pFcGxSa1p6WVVkc1UxWkhlRzlXUmxaVFltc3hSMkpJU21GU2F6VndWRlZTVjFac2JGWlhiR1JwVW10d01GcEVUbk5YYXpGWVlVWkNWVll6YUROYVJWcFBWbFpTZEZKdGFFNVNiRzkzVmpKMFlXSXhUWGxVV0dST1ZteGFZVlJVU205VmJGcHhVVlJHVkdKR1ZqVlViR1JIWVZaS2NrNVZiR0ZTVmtwSVZqSjRZV1JHVW5GVmJIQnBWa1ZhVUZkc1dsWmxSbVJJVW10b2FGSnRVazlVVjNoSFRrWlplRlZyY0U1V2JIQXdWbGMxVDFWc1pFaGxSbWhhWWxob1RGZFdXbUZqVms1eFZXMTRhVkpzY0VsV01uUlhZVEZTYzFkWWFGUmhNbmhXVkZaa2IyVnNiRlZUYTNSWFZqQndTbGt3V25kaFIwVjZVV3hXV0ZaRlNuSlZla3BQVmpGYWMyRkhlRk5XUjNoVlZsZDRWMlJ0VVhoWFdHaFlZbGhTY1ZSWGMzaE5NWEJXWVVaa1YxSXdXbmxXTW5RMFYyMUtSMk5HWkZWaVJuQlVWbXBHVjJNeFRuSlBWbVJYVWxad1dGWnRkR0ZWTVUxNFZWaHNWMkpyTlZoWlYzaGhWbXhzY2xaVVJtaFNiWGg0VlcxMFQxWXlTbGRYYTNCV1RXNW9VRlpVUm1GamJHUlpXa1prVTJKV1NYcFdhMUpMVXpKTmVGVnVWbFZpUlRWd1dXdGFkMWRHV2xoalJVNWFWakJhU0ZkclZsZFdSMHB5VGxaV1YyRnJTbnBVYlhoelZteGtjMVJ0YUU1V1YzY3hWbXRqTVZVeGJGZFRibEpvVWxob1lWcFhkRWRPUmxwelYyNUtiR0pWV2toVmJYaHJWR3hLUjFKcVZsZGhhM0F6VmtSR1dtVldTbkphUmxKb1lraENkMVpYZEdGa01rWkhWbTVPWVZKck5YTlphMmhEVTBaWmVVNVhSbWxTYkd3MFZUSjBjMWRzV2xoVmFrNWFWbTFTVEZWdE1VOVNWbEp6WVVaa2JHRXdiRFpXYTJRMFlURlJlVlJ1VWxkaE1uaFhXV3RhWVdOR2JISmhSVTVyVFZad2VsbFZhR3RoYlVwWFYydG9XbFpGTlhKWFZscExVakZPZFZOc2NHaE5iRVYzVm1wR1lWbFdaRVpPVm14aFVteGFXRlpyVmxwa01XUnpWbXhPVWsxWFVraFdNalZUVm0xS2NtTkhSbHBXUlhCVVZsVmFVMk14V2xWV2JGSlhUVWhDU0ZaSGVHRlVNVlY0VjI1T1dGWkZjRmhaVkVaaFpHeHdSVkpyWkd0U2JIQXhWVEl4TUZSck1YVmhSbXhZVmpOb2RsVlVSbGRTTWs1SFlVZDBVMVl4U2xGV1Z6RTBVekZhYzFaWWJHeFNWR3h2Vm0xMGQwMVdWbGhPVnpsWVlrZFNTbFZYZUVOV01VcEdZMFY0VjJGcmNFeFZiRnBUWXpKR1IxcEhlR2hOV0VKVFZtcEdZV0V5Vm5KTlZtUlZZVEpTV0ZsdGVFdGpWbFowWkVWMFYxSnNXbnBXVjNSaFZHMUtSMk5GV2xaaVdHaFFWbXhrUjA1c1JuRlViRlpvVFcxb05sWnRkR3RUTVdSWFZtNU9VbUpIVW05WlZFWjNUbFprYzFadFJsWk5WVFZIVkZaYWMxbFdTWHBWYXpsWFRVWmFTRlJ0ZUd0a1JURkZVV3MxVTAxSVFscFdWekUwWXpGYVdGTnNaR3BTZW14WFZGVmFkMU14Y0VWU2JrcHJUV3RhUjFSc1drTldNVnBHVjJ4U1dHSlVRWGRVVldSTFYwWktjMkpHVm1sV2JrSjJWbFJDWVZOdFVYaGhNMlJvVWxSV1VWWnNVa2RWTVhCMFRrUkNhVll3V2xwV1J6RmhZVVpPUjFOWVpGcE5SMmhQVkRGVmVGVnRXblZPUnpGb1YwVTFiVmxWYUZOTlIwNUpWRlJzVGxWWU5TMUtiV3g2V0RKb01HUklRbnBRVkVWLUptbHpYMmgwZEhCelBURX4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_9 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499179630&h=iF6z63RnSosMzBRbdwZTiw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTg5MzgzNTYmaD01RFF1dUc3Slh0T3QzaldfTjhObjR3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UZ3pOakkwTnpjbWFEMDJNSGRIVURsa01sVlJRVVZ1TFd4aVlYQlVUMU5CSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZelZPYWswelRXcFZiV0ZFTURWT1dFSlFUVlU1UldGSFNURmtNV3hDV2xjeE5GRldWbmhOVjNSU1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFZia1pvVm5wU01GZHJaSE5rTWtwSVQxaFNTMVpHUmpOWmJHUkhZMGRLUkU1WWJHdFZNWEJ6VlVaU1JrMUZPVlZaZWtaUFVrWkZNRlJ1Y0VKaVYwWkZUVlYwVDFZeWFGQlZWelZ1WlcxU1JWWnVRbEJTUmxwVVZGZHdWMU15VG5SVmJrSmhWbnBzVTFOdE5WZGxWMHBGVWxST1RsWkVSbkZWTUZaM1RXeHdWbUZJU210V01GcFpWRlpqTVdGck1YRlNiVGxhVm0xUmVscEdaRTlrVmxwWlYyeEdUbUpHYjNkV01WcHJZekpOZUZGc2FGTmhhMXB5Vlc1d2MwNVdjRWhOUkZacVRXdHNOVlpYTlVOaFYwWnlZa2hPVldFeFNrUmFSVnB6VjBkS1NWUnJNV2xoTWprMFZUSXdlRlpyT1ZaTlZsWldWa1phVUZaclpHcGxWbEYzVld0S1QxSlVWVEZXTWpBMVZWWlplRk51VWxkV1JWcFlWVmN4VjFKV1RuRlZiV2hPWWtad01WWkhNVFJaVm1SWFZXNVdWV0pHU2xSVmFrazBaREZrY2xacldtbFdNVXBhVlRJMVQxUnNXa2hVYWxKV1VtMVNVRlV4V2s5a1ZtUjBaVVpTVTAweFJqUldNVnBoWVcxV1NGTnVVbFZYUjNoUFZtcEtiMkl4V25GVWJYUk9WbTEwTlZSc1dtRmhNa3BHVW1wV1YySlVWbFJXTW5oYVpWZFdTV05HV2xOaVZrcEpWa1phYTFVeFRrWlBWbXhwVWpOU2NGWnJaRFJPYkdSWVkwVjBWazFyTlVsVk1qVkhWMFpaZW1GR1FsWmhNVnBNVkZWYWExWXhjRWxVYlhCT1UwZG5lRlpVU25kU01VMTVVMnhrVjFaR1dsWldiWGhMVlRGU2MxWllhRTlpUlhCYVdXdFZOV0pIUlhoV2FrNVhVak5TVUZkV1pFcGxSa1p6WVVkc1UxWkhlRzlXUmxaVFltc3hSMkpJU21GU2F6VndWRlZTVjFac2JGWlhiR1JwVW10d01GcEVUbk5YYXpGWVlVWkNWVll6YUROYVJWcFBWbFpTZEZKdGFFNVNiRzkzVmpKMFlXSXhUWGxVV0dST1ZteGFZVlJVU205VmJGcHhVVlJHVkdKR1ZqVlViR1JIWVZaS2NrNVZiR0ZTVmtwSVZqSjRZV1JHVW5GVmJIQnBWa1ZhVUZkc1dsWmxSbVJJVW10b2FGSnRVazlVVjNoSFRrWlplRlZyY0U1V2JIQXdWbGMxVDFWc1pFaGxSbWhhWWxob1RGZFdXbUZqVms1eFZXMTRhVkpzY0VsV01uUlhZVEZTYzFkWWFGUmhNbmhXVkZaa2IyVnNiRlZUYTNSWFZqQndTbGt3V25kaFIwVjZVV3hXV0ZaRlNuSlZla3BQVmpGYWMyRkhlRk5XUjNoVlZsZDRWMlJ0VVhoWFdHaFlZbGhTY1ZSWGMzaE5NWEJXWVVaa1YxSXdXbmxXTW5RMFYyMUtSMk5HWkZWaVJuQlVWbXBHVjJNeFRuSlBWbVJYVWxad1dGWnRkR0ZWTVUxNFZWaHNWMkpyTlZoWlYzaGhWbXhzY2xaVVJtaFNiWGg0VlcxMFQxWXlTbGRYYTNCV1RXNW9VRlpVUm1GamJHUlpXa1prVTJKV1NYcFdhMUpMVXpKTmVGVnVWbFZpUlRWd1dXdGFkMWRHV2xoalJVNWFWakJhU0ZkclZsZFdSMHB5VGxaV1YyRnJTbnBVYlhoelZteGtjMVJ0YUU1V1YzY3hWbXRqTVZVeGJGZFRibEpvVWxob1lWcFhkRWRPUmxwelYyNUtiR0pWV2toVmJYaHJWR3hLUjFKcVZsZGhhM0F6VmtSR1dtVldTbkphUmxKb1lraENkMVpYZEdGa01rWkhWbTVPWVZKck5YTlphMmhEVTBaWmVVNVhSbWxTYkd3MFZUSjBjMWRzV2xoVmFrNWFWbTFTVEZWdE1VOVNWbEp6WVVaa2JHRXdiRFpXYTJRMFlURlJlVlJ1VWxkaE1uaFhXV3RhWVdOR2JISmhSVTVyVFZad2VsbFZhR3RoYlVwWFYydG9XbFpGTlhKWFZscExVakZPZFZOc2NHaE5iRVYzVm1wR1lWbFdaRVpPVm14aFVteGFXRlpyVmxwa01XUnpWbXhPVWsxWFVraFdNalZUVm0xS2NtTkhSbHBXUlhCVVZsVmFVMk14V2xWV2JGSlhUVWhDU0ZaSGVHRlVNVlY0VjI1T1dGWkZjRmhaVkVaaFpHeHdSVkpyWkd0U2JIQXhWVEl4TUZSck1YVmhSbXhZVmpOb2RsVlVSbGRTTWs1SFlVZDBVMVl4U2xGV1Z6RTBVekZhYzFaWWJHeFNWR3h2Vm0xMGQwMVdWbGhPVnpsWVlrZFNTbFZYZUVOV01VcEdZMFY0VjJGcmNFeFZiRnBUWXpKR1IxcEhlR2hOV0VKVFZtcEdZV0V5Vm5KTlZtUlZZVEpTV0ZsdGVFdGpWbFowWkVWMFYxSnNXbnBXVjNSaFZHMUtSMk5GV2xaaVdHaFFWbXhrUjA1c1JuRlViRlpvVFcxb05sWnRkR3RUTVdSWFZtNU9VbUpIVW05WlZFWjNUbFprYzFadFJsWk5WVFZIVkZaYWMxbFdTWHBWYXpsWFRVWmFTRlJ0ZUd0a1JURkZVV3MxVTAxSVFscFdWekUwWXpGYVdGTnNaR3BTZW14WFZGVmFkMU14Y0VWU2JrcHJUV3RhUjFSc1drTldNVnBHVjJ4U1dHSlVRWGRVVldSTFYwWktjMkpHVm1sV2JrSjJWbFJDWVZOdFVYaGhNMlJvVWxSV1VWWnNVa2RWTVhCMFRrUkNhVll3V2xwV1J6RmhZVVpPUjFOWVpGcE5SMmhQVkRGVmVGVnRXblZPUnpGb1YwVTFiVmxWYUZOTlIwNUpWRlJzVGxWWU5TMUtiV3g2V0RKb01HUklRbnBRVkVWLUptbHpYMmgwZEhCelBURX4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_10 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499448736&h=_bik44vise9A8LvYHXHy6A&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk0NDg2NzkmaD1ObzBlZVNmVWQ1RUZ5LTJFZ2NpeTdBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QV1JtVTFWQmVESjRhMlZuTmxaWVRuTlRSR28wWkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQlhiRTlhTURnMFlrZFNiMDVVYUZWbFJtd3lZMWhPTWxwdFNUTmFhMFZ0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWVlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1QyVnNWalZVYkU1aFlqRkNWbVZJU2xOU1ZrWXdWRmR3VDJKc1RuTlNibFpXVWpCYWFGZEVTbk5UVjBsNllVWlNhMUl5VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmtNMnhYWWxoQ1VGcFhkRWRPUmxKVlUyeE9hVkp1UW5oWldIQlBWREpLVjJKRVRsaFdla1pRV1Zkek1WTkdWblJqUmtKVFVsUkZNbFpFUmxOVWF6QjNUa2hzVkdKWVVsQldha1p5WlVaU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_11 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499448772&h=R46_SoIBHgZQlIbo2rWAuA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk0NDg3MzImaD1oSnFYZndhQjBZYjdnREdkOUNQQml3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QV1JtVTFWQmVESjRhMlZuTmxaWVRuTlRSR28wWkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQlhiRTlhTURnMFlrZFNiMDVVYUZWbFJtd3lZMWhPTWxwdFNUTmFhMFZ0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWVlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1QyVnNWalZVYkU1aFlqRkNWbVZJU2xOU1ZrWXdWRmR3VDJKc1RuTlNibFpXVWpCYWFGZEVTbk5UVjBsNllVWlNhMUl5VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmtNMnhYWWxoQ1VGcFhkRWRPUmxKVlUyeE9hVkp1UW5oWldIQlBWREpLVjJKRVRsaFdla1pRV1Zkek1WTkdWblJqUmtKVFVsUkZNbFpFUmxOVWF6QjNUa2hzVkdKWVVsQldha1p5WlVaU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_12 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499448800&h=YqBJ55YtPhc_rRksnPGjaA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk0NDg3NzcmaD1NUGF6SUpMOHp2aVdlcjlVQ2xPX09nJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVkJvTVRjeWJuTnpiWGd4Y1dsQ1JVTlRaWFZzVm5jbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1UxVG5sYWIxQlZjRU5XU0VFMVZVZG9XbUp0TlRSalZrRTBWRlphVjJGNlNteGxSa1Z0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWVlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1QyVnNWalZVYkU1aFlqRkNWbVZJU2xOU1ZrWXdWRmR3VDJKc1RuTlNibFpXVWpCYWFGZEVTbk5UVjBsNllVWlNhMUl5VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmtNMnhYWWxoQ1VGcFhkRWRPUmxKVlUyeE9hVkp1UW5oWldIQlBWREpLVjJKRVRsaFdla1pRV1Zkek1WTkdWblJqUmtKVFVsUkZNbFpFUmxOVWF6QjNUa2hzVkdKWVVsQldha1p5WlVaU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';


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

    }

return $var_2;
}

function kart_vibor_2 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499709244&h=A7tehDVtGX2zV04Ad3DgCw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk3MDkyMDImaD1ILUNpSzR3VzhRZXFWamJOOVdJeHBnJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVGg2V1RabVVITTJTRFptVG5VNE1tWndPR00zYkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQldiM3BqYlRoNlVrZFdSVmRJU2twaVZsSjFVakI0VkZKWVJtdGxWa1Z0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWVlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1VGSkZWVEJVVms1aFlqRkNWVlpVVWs5TlJXdDNWbFJHYTJJeFZsZFRiVVpUWVcxNGMxWkZhSGRrVm5CeFVXMWFUazF0VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmxSRnBWVjBkU1VWWnFSa1pOUmxKeVZXeHdUMUpVVlRKVk1qRnZWR3haZUZaVVFsVmlia0pEV2tSQmVFNXRSalpVYXpsVFRVaENkbFl4WTNoV2JWWkhZMGhTVkdKWWFFOVpiRnAzWWpGU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499709274&h=hOQC_qm_-E6a39Ow3oPRnQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk3MDkyMDImaD1ILUNpSzR3VzhRZXFWamJOOVdJeHBnJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVGg2V1RabVVITTJTRFptVG5VNE1tWndPR00zYkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQldiM3BqYlRoNlVrZFdSVmRJU2twaVZsSjFVakI0VkZKWVJtdGxWa1Z0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWVlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1VGSkZWVEJVVms1aFlqRkNWVlpVVWs5TlJXdDNWbFJHYTJJeFZsZFRiVVpUWVcxNGMxWkZhSGRrVm5CeFVXMWFUazF0VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmxSRnBWVjBkU1VWWnFSa1pOUmxKeVZXeHdUMUpVVlRKVk1qRnZWR3haZUZaVVFsVmlia0pEV2tSQmVFNXRSalpVYXpsVFRVaENkbFl4WTNoV2JWWkhZMGhTVkdKWWFFOVpiRnAzWWpGU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499709313&h=LeNqozU3PQsK4QIeCryPaQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk3MDkyMDImaD1ILUNpSzR3VzhRZXFWamJOOVdJeHBnJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVGg2V1RabVVITTJTRFptVG5VNE1tWndPR00zYkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQldiM3BqYlRoNlVrZFdSVmRJU2twaVZsSjFVakI0VkZKWVJtdGxWa1Z0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWVlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1VGSkZWVEJVVms1aFlqRkNWVlpVVWs5TlJXdDNWbFJHYTJJeFZsZFRiVVpUWVcxNGMxWkZhSGRrVm5CeFVXMWFUazF0VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmxSRnBWVjBkU1VWWnFSa1pOUmxKeVZXeHdUMUpVVlRKVk1qRnZWR3haZUZaVVFsVmlia0pEV2tSQmVFNXRSalpVYXpsVFRVaENkbFl4WTNoV2JWWkhZMGhTVkdKWWFFOVpiRnAzWWpGU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_4 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938287&h=ObDPlHIVK6vIrppW9D097A&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI2MzcmaD12MDZLeGNvNVlZSW1WSC1Oek80RktRJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0yT1RZbWFEMHhjR0Z3Y0hOVlRuWXlaVm8yY210TVMzTkRTMWxSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFQwUm5iV0ZFTVhsVVYwNVBVMnRvZVdWdVRtWlJXRlY1WVZkNFNVNTZWa2xOYkU1dVNtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZaSFp6SldNVkpoWWxaV1NWUlVTbFJTUm5CMFZrYzFWazVGTVhSWGJtUlFVakF3ZWxsclZrWmlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXhWak5XUjNSUFdWZEplRkZzWkdsTk0wSnhXV3hTYjA1c1ZuSmFSbVJUVm0xU1NsVXlkSGRoVmxwelUycEdWbUZyU1RCV2ExcExWMVpLZEdSSGVGZGhNVm93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFac2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VmtkVGExcFhWa1ZLVmxadGN6RmhSbXh4VW10T1YxWnNjRlpXVjNNMVZHeEtXR1JFVGxkaVJrcElXVlJLU21WR1duTmFSbEpwVmxad1ZWZFdZM2hPUjAxNFYydGFhRk5IVW5KV2JUVkRaVVpXV0UxWFJsVmhla1l3VmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxNFUxSnVRbGRXYWtKclZURldWMWR1UmxOaE1YQlBWVzE0UzJWV1dsaGxTR1JWVFZWd1ZsWnNVa3RXYXpGeFVtNWFWMUl6YUdGYVZWcGhWbFpHYzFadGJHbGhNSEJGVmpKMFUxRnRWa1pPV0ZKVFlXeHdWbGxZY0hOV1JsSldZVVZPYTJKR2JEUlhWRTV2VmpKS1YxZHJhRnBOUjJoVVZtdGtTMWRYUmtaUFZuQnBVbTVCZWxkWGNFZFZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_5 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938329&h=9ojR0i-Nrh8p8j2psoQ93g&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI2MjYmaD1qeHc2VDNacXZaaF9xUXY3VWxGOTd3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0zTWpVbWFEMDRPVXg1VXpaelNuTlBYMEYwUTJSTGVFWmtlakZCSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFQxUnJiV0ZFTVVOVVYyUklWa1ZzVEZsNmFGcGxXR1J6V1c1a2MxSnFWblJTYkZadVNtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZaclduWldNbk4zVFRBMVNWVnRPVTlXUjJob1dUQldlazFzVW5OWFZGSm9VbFJHVTFWWGVFWmlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXdWak5XUnpGeldWZEplRkZzYUZSaE1EVnZWbXhXZDFkV1VYaGFSbVJTVFZad1Yxa3dWVFZXVmxZMlVsaG9ZVkl6VW5KYVJFWkhWMFpXY1ZOc1pFNVNWbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFac2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VmtkVGExcFhWa1ZLVmxadGN6RmhSbXh4VW10T1YxWnNjRlpXVjNNMVZHeEtXR1JFVGxkaVJrcElXVlJLU21WR1duTmFSbEpwVmxad1ZWZFdZM2hPUjAxNFYydGFhRk5IVW5KV2JUVkRaVVpXV0UxWFJsVmhla1l3VmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxNFUxSnVRbGRXYWtKclZURldWMWR1UmxOaE1YQlBWVzE0UzJWV1dsaGxTR1JWVFZWd1ZsWnNVa3RXYXpGeFVtNWFWMUl6YUdGYVZWcGhWbFpHYzFadGJHbGhNSEJGVmpKMFUxRnRWa1pPV0ZKVFlXeHdWbGxZY0hOV1JsSldZVVZPYTJKR2JEUlhWRTV2VmpKS1YxZHJhRnBOUjJoVVZtdGtTMWRYUmtaUFZuQnBVbTVCZWxkWGNFZFZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_6 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938356&h=2N7Vq8WL0v3L3DP6mJ442A&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI2MzImaD1XRU1TWnZzTEYydF9XR0ZuWWZhS0FRJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0yTmpnbWFEMW1iMFl6YVhkdE5YWjBUSEpFY21SdGNHUkxhMk5SSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFQxUnJiV0ZFTVVOVVYyUklWa1ZzVEZsNmFGcGxXR1J6V1c1a2MxSnFWblJTYkZadVNtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZaclduWldNbk4zVFRBMVNWVnRPVTlXUjJob1dUQldlazFzVW5OWFZGSm9VbFJHVTFWWGVFWmlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXdWak5XUnpGeldWZEplRkZzYUZSaE1EVnZWbXhXZDFkV1VYaGFSbVJTVFZad1Yxa3dWVFZXVmxZMlVsaG9ZVkl6VW5KYVJFWkhWMFpXY1ZOc1pFNVNWbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFac2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VmtkVGExcFhWa1ZLVmxadGN6RmhSbXh4VW10T1YxWnNjRlpXVjNNMVZHeEtXR1JFVGxkaVJrcElXVlJLU21WR1duTmFSbEpwVmxad1ZWZFdZM2hPUjAxNFYydGFhRk5IVW5KV2JUVkRaVVpXV0UxWFJsVmhla1l3VmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxNFUxSnVRbGRXYWtKclZURldWMWR1UmxOaE1YQlBWVzE0UzJWV1dsaGxTR1JWVFZWd1ZsWnNVa3RXYXpGeFVtNWFWMUl6YUdGYVZWcGhWbFpHYzFadGJHbGhNSEJGVmpKMFUxRnRWa1pPV0ZKVFlXeHdWbGxZY0hOV1JsSldZVVZPYTJKR2JEUlhWRTV2VmpKS1YxZHJhRnBOUjJoVVZtdGtTMWRYUmtaUFZuQnBVbTVCZWxkWGNFZFZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_7 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499180082&h=9thOAtBiW7qnjTrorcWQDg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTg5MzgyODcmaD1PYkRQbEhJVks2dklycHBXOUQwOTdBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UZ3pOakkyTXpjbWFEMTJNRFpMZUdOdk5WbFpTVzFXU0MxT2VrODBSa3RSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZelZPYWsweVQxUlpiV0ZFTUhoalIwWjNZMGhPVmxSdVdYbGFWbTh5WTIxMFRWTXpUa1JUTVd4U1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFZia1pvVm5wU01GZHJaSE5rTWtwSVQxaFNTMVpHUmpOWmJHUkhZMGRLUkU1WWJHdFZNWEJ6VlVaU1JrMUZPVlZaZWtaUFVrWkZNRlF3VW01aVYwWkZUVmhzVlZZd05WQlZNblJ2WlZkV2RWUnRXbEpYUmxZMVdWWmtORk5WTlRaV2EyeE9Za1UxZFZOdE5WZGxWMHBGVWxST1RsWkVSbkZWTUZaM1RXeHdWbUZJU210V01GcFpWRlpqTVdGck1YRlNiVGxhVm0xUmVscEdaRTlrVmxwWlYyeEdUbUpHYjNkV01WcHJZekpOZUZGc2FGTmhhMXB5Vlc1d2MwNVdjRWhOUkZacVRXdHNOVlpYTlVOaFYwWnlZa2hPVldFeFNrUmFSVnB6VjBkS1NWUnJNV2xoTWprMFZUSXdlRlpyT1ZaTlZsWldWa1phVUZaclpHcGxWbEYzVld0S1QxSlVWVEZXTWpBMVZWWmFTRnA2U2xkTlZrcG9XV3hhVjFOV1VsVlRiRkpUVW01Q01GWnJZekZXYXpWR1RWaFNXR0p0VWxGVmFrRjNaV3hzY2xacldtbFdNVXBhVlRJMVQxUnNXa2hVYWxKV1VtMVNVRlV4V2s5a1ZtUjBaVVpTVTAweFJqUldNVnBoWVcxV1NGTnVVbFZYUjNoUFZtcEtiMkl4V25GVWJYUk9WbTEwTlZSc1dtRmhNa3BHVW1wV1YySlVWbFJXTW5oYVpWZFdTV05HV2xOaVZrcEpWa1phYTFVeFRrWlBWbXhwVWpOU2NGWnJaRFJPYkdSWVkwVjBWazFyTlVsVk1qVkhWMFpaZW1GR1FsWmhNVnBNVkZWYWExWXhjRWxVYlhCT1UwZG5lRlpVU25kU01VMTVVMnhrVjFaR1dsWldiWGhMVlRGU2MxWllhRTlpUlhCYVdXdFZOV0pIUlhoV2FrNVhVak5TVUZkV1pFcGxSa1p6V2tkc1RrMHdTbmhYVjNoVFlqQTFjMVp1U21GU2JWSlVWbTB4VTFOc1ZYbGtTR1JvVm14d2VsVXljRWRXYlVaeVUxUkNWMkV4Y0V4V01WcExaRWRTU0dWR1pHaE5WbTkzVmpKMFlXSXhUWGxVV0dST1ZteGFZVlJVU205VmJGcHhVVlJHVkdKR1ZqVlViR1JIWVZaS2NrNVZiR0ZTVmtwSVZqSjRZV1JHVW5GVmJIQnBWa1ZhVUZkc1dsWmxSbVJJVW10b2FGSnRVazlVVjNoSFRrWlplRlZyY0U1V2JIQXdWbGMxVDFWc1pFaGxSbWhhWWxob1RGZFdXbUZqVms1eFZXMTRhVkpzY0VsV01uUlhZVEZTYzFkWWFGUmhNbmhXVkZaa2IyVnNiRlZUYTNSWFZqQndTbGt3V25kaFIwVjZVV3hXV0ZaRlNuSlZla3BQVmpGYWMyRkhlRk5XUjNoVlZsZDRWMlJ0VVhoWFdHaFlZbGhTY1ZSWGMzaE5NWEJXWVVaa1YxSXdXbmxXTW5RMFYyMUtSMk5HWkZWaVJuQlVWbXBHVjJNeFRuSlBWbVJYVWxad1dGWnRkR0ZWTVUxNFZtdGtWR0V4Y0ZoV2ExWkxWbXhhZEdONlJtaFNiWGg0VlcxMFQxWXhXbk5qUmxwWFZqTk5NVlpIZUV0WFIxSkZWR3hrYVZKcmNFbFhWbEpMVTIxV1IxZHVUbUZTYkVwd1ZteGFkMVpXWkZkWk0yaFBVakF4TkZZeWRHRmhSazVJVlc1S1YySlVWa1JhVlZwWFYwVXhXRkpzVm1obGExbDNWbXRqTVZVeGJGZFRibEpvVWxob1lWcFhkRWRPUmxwelYyNUtiR0pWV2toVmJYaHJWR3hLUjFKcVZsZGhhM0F6VmtSR1dtVldTbkphUmxKb1lraENkMVpYZEdGa01rWkhWbTVPWVZKck5YTlphMmhEVTBaWmVVNVhSbWxTYkd3MFZUSjBjMWRzV2xoVmFrNWFWbTFTVEZWdE1VOVNWbEp6WVVaa2JHRXdiRFpXYTJRMFlURlJlVlJ1VWxkaE1uaFhXV3RhWVdOR2JISmhSVTVyVFZad2VsbFZhR3RoYlVwWFYydG9XbFpGTlhKWFZscExVakZPZFZOc2NHaE5iRVYzVm1wR1lWbFdaRVpPVm14aFVteGFXRlpyVmxwa01XUnpWbXhPVWsxWFVraFdNalZUVm0xS2NtTkhSbHBXUlhCVVZsVmFVMk14V2xWV2JGSlhUVWhDU0ZaSGVHRlVNVlY0VjI1T1dGWkZjRmhaVkVaaFpHeHdSVkpyWkd0U2JIQXhWVEl4TkZVeFNuVlJiR1JYWVd0S2NsWlVSbGRXTVdSMVVteE9hRTFZUWxCV1Z6RTBVekpXVjFkc2FHeFRSMUpXVkZaV2QxWnNXbk5WYTNSWFlYcEdlRlZ0TldGV01VbDZZVWRHWVZaV2NHaFdiRnBIWXpGYWRHSkhiR2hOU0VKR1ZtcEtNRlV4Um5SV2ExcFBWMFpLVkZsWGVIZFdiR3haWTBoT1YxSnNTbGRaVlZaUFlUSktSMkpFVWxoV1JUVjJWbXBLUzFZeFpISmhSbkJPVWpKb1ZWWnRkR3RUTVdSWVVtdGFVRlp1UW5CVmJUVkNaV3hrV0dORlpGWk5WVFZIVkZaYWMxbFdTWHBWYXpsWFRVWmFTRlJ0ZUd0a1JURkZVV3MxVTAxSVFscFdWekUwWXpGYVdGTnNaR3BTZW14WFZGVmFkMU14Y0VWU2JrcHJUV3RhUjFSc1drTldNVnBHVjJ4U1dHSlVRWGRVVldSTFYwWktjMkpHVm1sV2JrSjJWbFJDWVZOdFVYaGhNMlJvVWxSV1VWWnNVa2RWTVhCMFRrUkNhVll3V2xwV1J6RmhZVVpPUjFOWVpGcE5SMmhQVkRGVmVGVnRXblZPUnpGb1YwVTFiVmxWYUZOTlIwNUpWRlJzVGxWWU5TMUtiV3g2V0RKb01HUklRbnBRVkVWLUptbHpYMmgwZEhCelBURX4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_8 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499179556&h=7N-v8_d3HvCFyLnZJV5gig&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTg5MzgyODcmaD1PYkRQbEhJVks2dklycHBXOUQwOTdBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UZ3pOakkyTXpjbWFEMTJNRFpMZUdOdk5WbFpTVzFXU0MxT2VrODBSa3RSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZelZPYWsweVQxUlpiV0ZFTUhoalIwWjNZMGhPVmxSdVdYbGFWbTh5WTIxMFRWTXpUa1JUTVd4U1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFZia1pvVm5wU01GZHJaSE5rTWtwSVQxaFNTMVpHUmpOWmJHUkhZMGRLUkU1WWJHdFZNWEJ6VlVaU1JrMUZPVlZaZWtaUFVrWkZNRlF3VW01aVYwWkZUVmhzVlZZd05WQlZNblJ2WlZkV2RWUnRXbEpYUmxZMVdWWmtORk5WTlRaV2EyeE9Za1UxZFZOdE5WZGxWMHBGVWxST1RsWkVSbkZWTUZaM1RXeHdWbUZJU210V01GcFpWRlpqTVdGck1YRlNiVGxhVm0xUmVscEdaRTlrVmxwWlYyeEdUbUpHYjNkV01WcHJZekpOZUZGc2FGTmhhMXB5Vlc1d2MwNVdjRWhOUkZacVRXdHNOVlpYTlVOaFYwWnlZa2hPVldFeFNrUmFSVnB6VjBkS1NWUnJNV2xoTWprMFZUSXdlRlpyT1ZaTlZsWldWa1phVUZaclpHcGxWbEYzVld0S1QxSlVWVEZXTWpBMVZWWmFTRnA2U2xkTlZrcG9XV3hhVjFOV1VsVlRiRkpUVW01Q01GWnJZekZXYXpWR1RWaFNXR0p0VWxGVmFrRjNaV3hzY2xacldtbFdNVXBhVlRJMVQxUnNXa2hVYWxKV1VtMVNVRlV4V2s5a1ZtUjBaVVpTVTAweFJqUldNVnBoWVcxV1NGTnVVbFZYUjNoUFZtcEtiMkl4V25GVWJYUk9WbTEwTlZSc1dtRmhNa3BHVW1wV1YySlVWbFJXTW5oYVpWZFdTV05HV2xOaVZrcEpWa1phYTFVeFRrWlBWbXhwVWpOU2NGWnJaRFJPYkdSWVkwVjBWazFyTlVsVk1qVkhWMFpaZW1GR1FsWmhNVnBNVkZWYWExWXhjRWxVYlhCT1UwZG5lRlpVU25kU01VMTVVMnhrVjFaR1dsWldiWGhMVlRGU2MxWllhRTlpUlhCYVdXdFZOV0pIUlhoV2FrNVhVak5TVUZkV1pFcGxSa1p6V2tkc1RrMHdTbmhYVjNoVFlqQTFjMVp1U21GU2JWSlVWbTB4VTFOc1ZYbGtTR1JvVm14d2VsVXljRWRXYlVaeVUxUkNWMkV4Y0V4V01WcExaRWRTU0dWR1pHaE5WbTkzVmpKMFlXSXhUWGxVV0dST1ZteGFZVlJVU205VmJGcHhVVlJHVkdKR1ZqVlViR1JIWVZaS2NrNVZiR0ZTVmtwSVZqSjRZV1JHVW5GVmJIQnBWa1ZhVUZkc1dsWmxSbVJJVW10b2FGSnRVazlVVjNoSFRrWlplRlZyY0U1V2JIQXdWbGMxVDFWc1pFaGxSbWhhWWxob1RGZFdXbUZqVms1eFZXMTRhVkpzY0VsV01uUlhZVEZTYzFkWWFGUmhNbmhXVkZaa2IyVnNiRlZUYTNSWFZqQndTbGt3V25kaFIwVjZVV3hXV0ZaRlNuSlZla3BQVmpGYWMyRkhlRk5XUjNoVlZsZDRWMlJ0VVhoWFdHaFlZbGhTY1ZSWGMzaE5NWEJXWVVaa1YxSXdXbmxXTW5RMFYyMUtSMk5HWkZWaVJuQlVWbXBHVjJNeFRuSlBWbVJYVWxad1dGWnRkR0ZWTVUxNFZtdGtWR0V4Y0ZoV2ExWkxWbXhhZEdONlJtaFNiWGg0VlcxMFQxWXhXbk5qUmxwWFZqTk5NVlpIZUV0WFIxSkZWR3hrYVZKcmNFbFhWbEpMVTIxV1IxZHVUbUZTYkVwd1ZteGFkMVpXWkZkWk0yaFBVakF4TkZZeWRHRmhSazVJVlc1S1YySlVWa1JhVlZwWFYwVXhXRkpzVm1obGExbDNWbXRqTVZVeGJGZFRibEpvVWxob1lWcFhkRWRPUmxwelYyNUtiR0pWV2toVmJYaHJWR3hLUjFKcVZsZGhhM0F6VmtSR1dtVldTbkphUmxKb1lraENkMVpYZEdGa01rWkhWbTVPWVZKck5YTlphMmhEVTBaWmVVNVhSbWxTYkd3MFZUSjBjMWRzV2xoVmFrNWFWbTFTVEZWdE1VOVNWbEp6WVVaa2JHRXdiRFpXYTJRMFlURlJlVlJ1VWxkaE1uaFhXV3RhWVdOR2JISmhSVTVyVFZad2VsbFZhR3RoYlVwWFYydG9XbFpGTlhKWFZscExVakZPZFZOc2NHaE5iRVYzVm1wR1lWbFdaRVpPVm14aFVteGFXRlpyVmxwa01XUnpWbXhPVWsxWFVraFdNalZUVm0xS2NtTkhSbHBXUlhCVVZsVmFVMk14V2xWV2JGSlhUVWhDU0ZaSGVHRlVNVlY0VjI1T1dGWkZjRmhaVkVaaFpHeHdSVkpyWkd0U2JIQXhWVEl4TkZVeFNuVlJiR1JYWVd0S2NsWlVSbGRXTVdSMVVteE9hRTFZUWxCV1Z6RTBVekpXVjFkc2FHeFRSMUpXVkZaV2QxWnNXbk5WYTNSWFlYcEdlRlZ0TldGV01VbDZZVWRHWVZaV2NHaFdiRnBIWXpGYWRHSkhiR2hOU0VKR1ZtcEtNRlV4Um5SV2ExcFBWMFpLVkZsWGVIZFdiR3haWTBoT1YxSnNTbGRaVlZaUFlUSktSMkpFVWxoV1JUVjJWbXBLUzFZeFpISmhSbkJPVWpKb1ZWWnRkR3RUTVdSWVVtdGFVRlp1UW5CVmJUVkNaV3hrV0dORlpGWk5WVFZIVkZaYWMxbFdTWHBWYXpsWFRVWmFTRlJ0ZUd0a1JURkZVV3MxVTAxSVFscFdWekUwWXpGYVdGTnNaR3BTZW14WFZGVmFkMU14Y0VWU2JrcHJUV3RhUjFSc1drTldNVnBHVjJ4U1dHSlVRWGRVVldSTFYwWktjMkpHVm1sV2JrSjJWbFJDWVZOdFVYaGhNMlJvVWxSV1VWWnNVa2RWTVhCMFRrUkNhVll3V2xwV1J6RmhZVVpPUjFOWVpGcE5SMmhQVkRGVmVGVnRXblZPUnpGb1YwVTFiVmxWYUZOTlIwNUpWRlJzVGxWWU5TMUtiV3g2V0RKb01HUklRbnBRVkVWLUptbHpYMmgwZEhCelBURX4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_9 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499179630&h=h-qs1mZ6N0bGigcRk9VPAg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTg5MzgyODcmaD1PYkRQbEhJVks2dklycHBXOUQwOTdBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UZ3pOakkyTXpjbWFEMTJNRFpMZUdOdk5WbFpTVzFXU0MxT2VrODBSa3RSSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZelZPYWsweVQxUlpiV0ZFTUhoalIwWjNZMGhPVmxSdVdYbGFWbTh5WTIxMFRWTXpUa1JUTVd4U1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFZia1pvVm5wU01GZHJaSE5rTWtwSVQxaFNTMVpHUmpOWmJHUkhZMGRLUkU1WWJHdFZNWEJ6VlVaU1JrMUZPVlZaZWtaUFVrWkZNRlF3VW01aVYwWkZUVmhzVlZZd05WQlZNblJ2WlZkV2RWUnRXbEpYUmxZMVdWWmtORk5WTlRaV2EyeE9Za1UxZFZOdE5WZGxWMHBGVWxST1RsWkVSbkZWTUZaM1RXeHdWbUZJU210V01GcFpWRlpqTVdGck1YRlNiVGxhVm0xUmVscEdaRTlrVmxwWlYyeEdUbUpHYjNkV01WcHJZekpOZUZGc2FGTmhhMXB5Vlc1d2MwNVdjRWhOUkZacVRXdHNOVlpYTlVOaFYwWnlZa2hPVldFeFNrUmFSVnB6VjBkS1NWUnJNV2xoTWprMFZUSXdlRlpyT1ZaTlZsWldWa1phVUZaclpHcGxWbEYzVld0S1QxSlVWVEZXTWpBMVZWWmFTRnA2U2xkTlZrcG9XV3hhVjFOV1VsVlRiRkpUVW01Q01GWnJZekZXYXpWR1RWaFNXR0p0VWxGVmFrRjNaV3hzY2xacldtbFdNVXBhVlRJMVQxUnNXa2hVYWxKV1VtMVNVRlV4V2s5a1ZtUjBaVVpTVTAweFJqUldNVnBoWVcxV1NGTnVVbFZYUjNoUFZtcEtiMkl4V25GVWJYUk9WbTEwTlZSc1dtRmhNa3BHVW1wV1YySlVWbFJXTW5oYVpWZFdTV05HV2xOaVZrcEpWa1phYTFVeFRrWlBWbXhwVWpOU2NGWnJaRFJPYkdSWVkwVjBWazFyTlVsVk1qVkhWMFpaZW1GR1FsWmhNVnBNVkZWYWExWXhjRWxVYlhCT1UwZG5lRlpVU25kU01VMTVVMnhrVjFaR1dsWldiWGhMVlRGU2MxWllhRTlpUlhCYVdXdFZOV0pIUlhoV2FrNVhVak5TVUZkV1pFcGxSa1p6V2tkc1RrMHdTbmhYVjNoVFlqQTFjMVp1U21GU2JWSlVWbTB4VTFOc1ZYbGtTR1JvVm14d2VsVXljRWRXYlVaeVUxUkNWMkV4Y0V4V01WcExaRWRTU0dWR1pHaE5WbTkzVmpKMFlXSXhUWGxVV0dST1ZteGFZVlJVU205VmJGcHhVVlJHVkdKR1ZqVlViR1JIWVZaS2NrNVZiR0ZTVmtwSVZqSjRZV1JHVW5GVmJIQnBWa1ZhVUZkc1dsWmxSbVJJVW10b2FGSnRVazlVVjNoSFRrWlplRlZyY0U1V2JIQXdWbGMxVDFWc1pFaGxSbWhhWWxob1RGZFdXbUZqVms1eFZXMTRhVkpzY0VsV01uUlhZVEZTYzFkWWFGUmhNbmhXVkZaa2IyVnNiRlZUYTNSWFZqQndTbGt3V25kaFIwVjZVV3hXV0ZaRlNuSlZla3BQVmpGYWMyRkhlRk5XUjNoVlZsZDRWMlJ0VVhoWFdHaFlZbGhTY1ZSWGMzaE5NWEJXWVVaa1YxSXdXbmxXTW5RMFYyMUtSMk5HWkZWaVJuQlVWbXBHVjJNeFRuSlBWbVJYVWxad1dGWnRkR0ZWTVUxNFZtdGtWR0V4Y0ZoV2ExWkxWbXhhZEdONlJtaFNiWGg0VlcxMFQxWXhXbk5qUmxwWFZqTk5NVlpIZUV0WFIxSkZWR3hrYVZKcmNFbFhWbEpMVTIxV1IxZHVUbUZTYkVwd1ZteGFkMVpXWkZkWk0yaFBVakF4TkZZeWRHRmhSazVJVlc1S1YySlVWa1JhVlZwWFYwVXhXRkpzVm1obGExbDNWbXRqTVZVeGJGZFRibEpvVWxob1lWcFhkRWRPUmxwelYyNUtiR0pWV2toVmJYaHJWR3hLUjFKcVZsZGhhM0F6VmtSR1dtVldTbkphUmxKb1lraENkMVpYZEdGa01rWkhWbTVPWVZKck5YTlphMmhEVTBaWmVVNVhSbWxTYkd3MFZUSjBjMWRzV2xoVmFrNWFWbTFTVEZWdE1VOVNWbEp6WVVaa2JHRXdiRFpXYTJRMFlURlJlVlJ1VWxkaE1uaFhXV3RhWVdOR2JISmhSVTVyVFZad2VsbFZhR3RoYlVwWFYydG9XbFpGTlhKWFZscExVakZPZFZOc2NHaE5iRVYzVm1wR1lWbFdaRVpPVm14aFVteGFXRlpyVmxwa01XUnpWbXhPVWsxWFVraFdNalZUVm0xS2NtTkhSbHBXUlhCVVZsVmFVMk14V2xWV2JGSlhUVWhDU0ZaSGVHRlVNVlY0VjI1T1dGWkZjRmhaVkVaaFpHeHdSVkpyWkd0U2JIQXhWVEl4TkZVeFNuVlJiR1JYWVd0S2NsWlVSbGRXTVdSMVVteE9hRTFZUWxCV1Z6RTBVekpXVjFkc2FHeFRSMUpXVkZaV2QxWnNXbk5WYTNSWFlYcEdlRlZ0TldGV01VbDZZVWRHWVZaV2NHaFdiRnBIWXpGYWRHSkhiR2hOU0VKR1ZtcEtNRlV4Um5SV2ExcFBWMFpLVkZsWGVIZFdiR3haWTBoT1YxSnNTbGRaVlZaUFlUSktSMkpFVWxoV1JUVjJWbXBLUzFZeFpISmhSbkJPVWpKb1ZWWnRkR3RUTVdSWVVtdGFVRlp1UW5CVmJUVkNaV3hrV0dORlpGWk5WVFZIVkZaYWMxbFdTWHBWYXpsWFRVWmFTRlJ0ZUd0a1JURkZVV3MxVTAxSVFscFdWekUwWXpGYVdGTnNaR3BTZW14WFZGVmFkMU14Y0VWU2JrcHJUV3RhUjFSc1drTldNVnBHVjJ4U1dHSlVRWGRVVldSTFYwWktjMkpHVm1sV2JrSjJWbFJDWVZOdFVYaGhNMlJvVWxSV1VWWnNVa2RWTVhCMFRrUkNhVll3V2xwV1J6RmhZVVpPUjFOWVpGcE5SMmhQVkRGVmVGVnRXblZPUnpGb1YwVTFiVmxWYUZOTlIwNUpWRlJzVGxWWU5TMUtiV3g2V0RKb01HUklRbnBRVkVWLUptbHpYMmgwZEhCelBURX4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_10 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499448736&h=neqJ_hWgcY7EYVQFwEYU9Q&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk0NDg2NzkmaD1pX3hudW5lRkg2YnpwM2RtMHB6TXp3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVGg2V1RabVVITTJTRFptVG5VNE1tWndPR00zYkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQldiM3BqYlRoNlVrZFdSVmRJU2twaVZsSjFVakI0VkZKWVJtdGxWa1Z0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWVlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1VGSkZWVEJVVms1aFlqRkNWVlpVVWs5TlJXdDNWbFJHYTJJeFZsZFRiVVpUWVcxNGMxWkZhSGRrVm5CeFVXMWFUazF0VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmxSRnBWVjBkU1VWWnFSa1pOUmxKeVZXeHdUMUpVVlRKVk1qRnZWR3haZUZaVVFsVmlia0pEV2tSQmVFNXRSalpVYXpsVFRVaENkbFl4WTNoV2JWWkhZMGhTVkdKWWFFOVpiRnAzWWpGU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_11 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499448772&h=1yzqGzU0T9OwgeI87_hhKA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk0NDg3MzImaD1PWlYydE5VeUtvTUstUlNQc0JCN0F3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVGg2V1RabVVITTJTRFptVG5VNE1tWndPR00zYkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQldiM3BqYlRoNlVrZFdSVmRJU2twaVZsSjFVakI0VkZKWVJtdGxWa1Z0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWVlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1VGSkZWVEJVVms1aFlqRkNWVlpVVWs5TlJXdDNWbFJHYTJJeFZsZFRiVVpUWVcxNGMxWkZhSGRrVm5CeFVXMWFUazF0VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmxSRnBWVjBkU1VWWnFSa1pOUmxKeVZXeHdUMUpVVlRKVk1qRnZWR3haZUZaVVFsVmlia0pEV2tSQmVFNXRSalpVYXpsVFRVaENkbFl4WTNoV2JWWkhZMGhTVkdKWWFFOVpiRnAzWWpGU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_12 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499448800&h=sxJZFYeJ7RIBL75PWdsDDw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk0NDg3NzcmaD1Ob1NHNWtyVFEzbDBvV0Y5enpjaWJBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVkZvV2swM05IUm9OVGhhY0VzMlRsWTRhRTFSUWxFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la0V3VG1sYWIxQlhTa05oVlVwWVQxZFdRMVpWY0U5VVV6RXhaR3RrZDFGWFVqSldNRVZ0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWVlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1VGSkZWVEJVVms1aFlqRkNWVlpVVWs5TlJXdDNWbFJHYTJJeFZsZFRiVVpUWVcxNGMxWkZhSGRrVm5CeFVXMWFUazF0VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmxSRnBWVjBkU1VWWnFSa1pOUmxKeVZXeHdUMUpVVlRKVk1qRnZWR3haZUZaVVFsVmlia0pEV2tSQmVFNXRSalpVYXpsVFRVaENkbFl4WTNoV2JWWkhZMGhTVkdKWWFFOVpiRnAzWWpGU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';

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
    }

    return $var_2;
}

function kart_vibor_3 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499709244&h=Jvx_je-eqF6yP36Jw4L7vw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk3MDkyMDImaD04QVlIMjR6bHgxQjBKSEFPV0hhblR3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVk50UkZJNVJEVlNZMVF4YW5BemRVdG9aV1pHTkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQldWVEJTVXpGNVZrZG9jRm93VFhkTk1VSnpZakJvVG1GVE1WbE5TR050WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWUlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1VGSkZNSHBVVlU1aFlqRkNXR1ZJYkZWV1Z6aDNXa1JPVWs1V2NFZFVibkJTVFZaYVlWbHRjRVpsYkZaWlducE9UMDF0VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmxSRnBWVmtaYVlWUlhkSGRqYkdSWFdrWmthRTFFVWpWV01XaHpWRzFXYzJOSVFsVldiRXAyV1ZSQk1XUkdaRmxqUmtKWFVtMTNNbFpFUWxOUk1rcEdUbFZXVlZaR1NsQldha1p5VFVaU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499709274&h=51MtV56LHrt6wVDyaGVLVg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk3MDkyMDImaD04QVlIMjR6bHgxQjBKSEFPV0hhblR3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVk50UkZJNVJEVlNZMVF4YW5BemRVdG9aV1pHTkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQldWVEJTVXpGNVZrZG9jRm93VFhkTk1VSnpZakJvVG1GVE1WbE5TR050WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWUlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1VGSkZNSHBVVlU1aFlqRkNXR1ZJYkZWV1Z6aDNXa1JPVWs1V2NFZFVibkJTVFZaYVlWbHRjRVpsYkZaWlducE9UMDF0VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmxSRnBWVmtaYVlWUlhkSGRqYkdSWFdrWmthRTFFVWpWV01XaHpWRzFXYzJOSVFsVldiRXAyV1ZSQk1XUkdaRmxqUmtKWFVtMTNNbFpFUWxOUk1rcEdUbFZXVlZaR1NsQldha1p5VFVaU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499709313&h=ogXfx3aRLMtUI7R_PaSDcw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk3MDkyMDImaD04QVlIMjR6bHgxQjBKSEFPV0hhblR3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVk50UkZJNVJEVlNZMVF4YW5BemRVdG9aV1pHTkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQldWVEJTVXpGNVZrZG9jRm93VFhkTk1VSnpZakJvVG1GVE1WbE5TR050WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWUlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1VGSkZNSHBVVlU1aFlqRkNXR1ZJYkZWV1Z6aDNXa1JPVWs1V2NFZFVibkJTVFZaYVlWbHRjRVpsYkZaWlducE9UMDF0VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmxSRnBWVmtaYVlWUlhkSGRqYkdSWFdrWmthRTFFVWpWV01XaHpWRzFXYzJOSVFsVldiRXAyV1ZSQk1XUkdaRmxqUmtKWFVtMTNNbFpFUWxOUk1rcEdUbFZXVlZaR1NsQldha1p5VFVaU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_4 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938287&h=n1anuEECpctBDgPrADMrHg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI2MzcmaD1tMzd1UkJHb0JSTkRVOFRnTl95Zmd3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0yT1RZbWFEMWZNbVYzWTBOTU1tZDNWMTlMZG5sWE1GUmxjMmxuSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFQxUnJiV0ZFTVV0aU1EUjBUVVpHVlZWVE1XdFRSVlV3WTFWVk5HSnRNVmxpTW14U1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZaR1JqVlhhMUpDVFcxS2MxRnVjRkpXTVZwUlZGVmpOV0ZzVWtabFIzaGFZa1p3ZEZwVmFHcGlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXdWak5XUnpGeldWZEplRkZzWkZCV2ExcHlWRlZXY2sxV2JIUmtSM1JWVmxSV01GUnNWalJXUmtwWllVVXhWMUpYYUV4V1ZscGhZekE1V1ZSc1ZrNVdWbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFWc2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VmtkVGExcE9VMGhDVmxac1ZURmhSbXh4VW10T1dGSXhXa3BaYTFwWFZqRmFObUZFVGxoaE1VcFFWbGR6TVZZeVRrWmFSbFpwWW10S1ZGWkdXbUZaVm14WFlraFNhbEpXY0hOWmExcGhWMnhrZFdORk9WVk5SRVl3VmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxNFUxSnVRbGRXYlhSaFdWWnNWMVZzYUd0VFIxSnhXV3RrVTFkR1pISlhiWFJvVWxSR1JsWlhjRmRXTURGWVlVaHdWMUo2UmxoWmVrcFBVMVpHYzFac1pHbFNXRUY1VmpGYVUxRnJNVmhWYTJSaFVtMTRjVlZ0ZEV0WFJsWjBUVlJPVG1KR2NFWlZWM2hQVldzeGNtTkZaRlZpUmxwWVZteGFZVkl4VG5OUmJHUm9ZVEZ3TlZaR1ZtRlZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_5 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938329&h=PHMgrUrUte7KwKQf59A43w&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI2MjYmaD1xRFZ5X2h0eWlRYkVsMERzNWxXcjRBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0yTmpnbWFEMWhNMnhrWTFGTWRsVmxRMFJGWjNkVVJGOUlVR0puSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFQxUnJiV0ZFTVV0aU1EUjBUVVpHVlZWVE1XdFRSVlV3WTFWVk5HSnRNVmxpTW14U1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZaR1JqVlhhMUpDVFcxS2MxRnVjRkpXTVZwUlZGVmpOV0ZzVWtabFIzaGFZa1p3ZEZwVmFHcGlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXdWak5XUnpGeldWZEplRkZzWkZCV2ExcHlWRlZXY2sxV2JIUmtSM1JWVmxSV01GUnNWalJXUmtwWllVVXhWMUpYYUV4V1ZscGhZekE1V1ZSc1ZrNVdWbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFWc2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VmtkVGExcE9VMGhDVmxac1ZURmhSbXh4VW10T1dGSXhXa3BaYTFwWFZqRmFObUZFVGxoaE1VcFFWbGR6TVZZeVRrWmFSbFpwWW10S1ZGWkdXbUZaVm14WFlraFNhbEpXY0hOWmExcGhWMnhrZFdORk9WVk5SRVl3VmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxNFUxSnVRbGRXYlhSaFdWWnNWMVZzYUd0VFIxSnhXV3RrVTFkR1pISlhiWFJvVWxSR1JsWlhjRmRXTURGWVlVaHdWMUo2UmxoWmVrcFBVMVpHYzFac1pHbFNXRUY1VmpGYVUxRnJNVmhWYTJSaFVtMTRjVlZ0ZEV0WFJsWjBUVlJPVG1KR2NFWlZWM2hQVldzeGNtTkZaRlZpUmxwWVZteGFZVkl4VG5OUmJHUm9ZVEZ3TlZaR1ZtRlZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_6 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1498938356&h=jB9rHO33Rfg5TR2w8V3dBA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTgzNjI2MjYmaD1xRFZ5X2h0eWlRYkVsMERzNWxXcjRBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UYzVOak0yTmpnbWFEMWhNMnhrWTFGTWRsVmxRMFJGWjNkVVJGOUlVR0puSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZekZPUkZFMFQxUnJiV0ZFTVV0aU1EUjBUVVpHVlZWVE1XdFRSVlV3WTFWVk5HSnRNVmxpTW14U1NtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFNha1pyVW5wc05WcEhNRFZqTWtsNVZXNUNhV0ZyYkhOVWExSkRaRVpzV0dKSVRrMWlhMjk0VTIweFZrOVZNVlZWVkZaUFZrZGplVlF3VWtKT1JUVTFWMjA1VVZaR1JqVlhhMUpDVFcxS2MxRnVjRkpXTVZwUlZGVmpOV0ZzVWtabFIzaGFZa1p3ZEZwVmFHcGlWMUpaVTI1T1RsWkhUalJWUm1SUFUxWk9kVmR0ZUZSU00xRjRWMVphYW1WSFNuUlVXR3hPVmpKb2IxWnFUbXROVm10NVRsWmFhMkpGUmpWV2JUVlRWMnhaZVdWSWNGWlNiVkpJVkZaa1UxTkZPVmxpUjNScFZrZDRObGRYY0V0Vk1rNUlVMjVHV0ZZemFGQlZhMVpMVFVaa1YxcElUbXBOU0dneFZUSndSMU15U2xkV1ZGWlZWbXhLVTFSc1ZYaE9iRXBaWWtVNWJHRXdWak5XUnpGeldWZEplRkZzWkZCV2ExcHlWRlZXY2sxV2JIUmtSM1JWVmxSV01GUnNWalJXUmtwWllVVXhWMUpYYUV4V1ZscGhZekE1V1ZSc1ZrNVdWbG93VjJ0YWIxTXlUWGROVmxaYVRUSm9VbFpxUVRGVGJGVjVUbGRHYVZKck5VbGFSVkpIVjJ4YWRGUnFVbHBpVkVaUFdsWlZlRmRIUmtoaFJtUk9UV3hHTkZZeFVrcE5WbHAwVlc1T1VsZEhlRmhaYlhoTFdWWmFjVk5xVW14aVJscElWMnRXYTFSc1dYaFRhMnhWVFZkb2VsbFVTa3RXVjBwSlkwWndhR0V6UWxWWFZFSnJVekpPVjFWc2FHeFNWR3hVVld4V2RtUXhXWGhYYlhScVRXc3hNMXBWYUZkV1IwWnlWMnQ0V21KR2NGZFViRnBUVmpGV2MxTnJPVmRXUlZwWFZtdGFVMU14VmtkVGExcE9VMGhDVmxac1ZURmhSbXh4VW10T1dGSXhXa3BaYTFwWFZqRmFObUZFVGxoaE1VcFFWbGR6TVZZeVRrWmFSbFpwWW10S1ZGWkdXbUZaVm14WFlraFNhbEpXY0hOWmExcGhWMnhrZFdORk9WVk5SRVl3VmtjMVUxbFdTblJoUlhoYVpXdEdORlpzV25KbGJVWkhVbXhrVGxKR1JqVldha3AzVkRGWmVWSnJaRlJoYkhCd1ZXdGFkMkZHVm5OYVJrNXNZa2hDU0ZZeU5XRmlSbGw0VTJ0c1dsWlhVak5aVm1STFVtMU9SVlJzYUZkbGEwbDZWa2Q0YTFReVRuUldhMnhXWWtaYWNGbHJhRU5rTVZwellVaGthbUpXV2toWlZFNXJXVlpLUjFOdVNscGhNbEV3VmpGYVlWZEZOVmxhUmxaWFZrVlpkMWRzVmxOUk1XUkhWMjVTVm1KcmNHRlpWRXBUVlVaU2MxWlVWbFJXTUhCSFZHeGFUMVV4V25OWFZFcFhZVEZhZGxwRVJrZGtSbHAxVTIxNFUxSnVRbGRXYlhSaFdWWnNWMVZzYUd0VFIxSnhXV3RrVTFkR1pISlhiWFJvVWxSR1JsWlhjRmRXTURGWVlVaHdWMUo2UmxoWmVrcFBVMVpHYzFac1pHbFNXRUY1VmpGYVUxRnJNVmhWYTJSaFVtMTRjVlZ0ZEV0WFJsWjBUVlJPVG1KR2NFWlZWM2hQVldzeGNtTkZaRlZpUmxwWVZteGFZVkl4VG5OUmJHUm9ZVEZ3TlZaR1ZtRlZNVTVHVFZac1lWSXpVazlXTUZaSFRteGtkRTFFUWs1U01IQlpWVzE0YzFaWFNsZGpSemxXVFVad1MxcEVSbkprTWtaR1RsWkNWMVpGV2xSWGJUQXdUVWRLV0ZKc2JGVmlWbkJ2VlRCYVNtUXhhM2RoUlRWUVZsUkdVMXB0TkRCaVYwWlpWRzFhYUZOR1NYZFpNR2hPVDFVeFVtWnVORzFoV0U1bVlVaFNNR05JVFRsTlVYNS1KbWx6WDJoMGRIQnpQVEV-JmlzX2h0dHBzPTE~&is_https=1';
    $img_mail_7 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499180082&h=vVDaR0Q5wnXzL5U5Sz2kbw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTg5MzgzMjkmaD1QSE1nclVyVXRlN0t3S1FmNTlBNDN3JnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UZ3pOakkyTWpZbWFEMXhSRlo1WDJoMGVXbFJZa1ZzTUVSek5XeFhjalJCSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZelZPYWsweVRtcG5iV0ZFTVdoTk1uaHJXVEZHVFdSc1ZteFJNRkpHV2pOa1ZWSkdPVWxWUjBwdVNtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFZia1pvVm5wU01GZHJaSE5rTWtwSVQxaFNTMVpHUmpOWmJHUkhZMGRLUkU1WWJHdFZNWEJ6VlVaU1JrMUZPVlZaZWtaUFVrWkZNRlF4VW5KaVYwWkZUVlYwYVUxRVVqQlVWVnBIVmxaV1ZFMVhkRlJTVmxWM1dURldWazVIU25STlZteHBUVzE0VTFOdE5WZGxWMHBGVWxST1RsWkVSbkZWTUZaM1RXeHdWbUZJU210V01GcFpWRlpqTVdGck1YRlNiVGxhVm0xUmVscEdaRTlrVmxwWlYyeEdUbUpHYjNkV01WcHJZekpOZUZGc2FGTmhhMXB5Vlc1d2MwNVdjRWhOUkZacVRXdHNOVlpYTlVOaFYwWnlZa2hPVldFeFNrUmFSVnB6VjBkS1NWUnJNV2xoTWprMFZUSXdlRlpyT1ZaTlZsWldWa1phVUZaclpHcGxWbEYzVld0S1QxSlVWVEZXTWpBMVZWWmFSMUpxVmxoaE1VcERWRmN4UzJNeFJuVmpSa3BYVFZad1VsWkdWbXBPVjBaelZXdGFiRkl6YUdGWmExcDNaRVp3Vm1GSGNHbFdNVXBhVlRJMVQxUnNXa2hVYWxKV1VtMVNVRlV4V2s5a1ZtUjBaVVpTVTAweFJqUldNVnBoWVcxV1NGTnVVbFZYUjNoUFZtcEtiMkl4V25GVWJYUk9WbTEwTlZSc1dtRmhNa3BHVW1wV1YySlVWbFJXTW5oYVpWZFdTV05HV2xOaVZrcEpWa1phYTFVeFRrWlBWbXhwVWpOU2NGWnJaRFJPYkdSWVkwVjBWazFyTlVsVk1qVkhWMFpaZW1GR1FsWmhNVnBNVkZWYWExWXhjRWxVYlhCT1UwZG5lRlpVU25kU01VMTVVMnhrVjFaR1dsWldiWGhMVlRGU2MxWllhRTlpUlhCYVdXdFZOV0pIUlhkV2FrNVhVbnBHZWxkV1pFcGxSa1p6V2taQ1YyRXhjSGxXUmxaWFkyc3hWMkpJVW10U00xSldWbXhTVjAxR1VuTldhbEpYVW10d1dsbFZWWGhXTVVwWVlVVjRWMVpzY0doWmVrRTFWMVpTYzFack5WZFdiRzkzVmpKMFlXSXhUWGxVV0dST1ZteGFZVlJVU205VmJGcHhVVlJHVkdKR1ZqVlViR1JIWVZaS2NrNVZiR0ZTVmtwSVZqSjRZV1JHVW5GVmJIQnBWa1ZhVUZkc1dsWmxSbVJJVW10b2FGSnRVazlVVjNoSFRrWlplRlZyY0U1V2JIQXdWbGMxVDFWc1pFaGxSbWhhWWxob1RGZFdXbUZqVms1eFZXMTRhVkpzY0VsV01uUlhZVEZTYzFkWWFGUmhNbmhXVkZaa2IyVnNiRlZUYTNSWFZqQndTbGt3V25kaFIwVjZVV3hXV0ZaRlNuSlZla3BQVmpGV2MyRkhlRk5XUjNoVlZsZDRWMlJ0VVhoWFdHaFlZbGhTY1ZSWGMzaE5NWEJXWVVaa1YxSXdXbmxXTW5RMFYyMUtSMk5HWkZWaVJuQlVWbXBHVjJNeFRuSlBWbVJYVWxad1dGWnRkR0ZWTVUxNFZtdGtWR0V4Y0U5Vk1HaERWbXhhYzFaVVJtaFNiWGg0VlcxMFQxZEdTWGhYYTNCYVlURndXRlpxUm1GT2JVWkZWR3hvYUUxVmNGRldiR1I2VFZaWmVWUnJXbUZTYkZwd1dXMTBTMVpHV2tkWGJVWmFWbTE0V0ZscmFGTmhiRXBYWTBoT1dtRXhjR2hXTW5oclpGZE9SazlXVms1U1JWbDNWbXRqTVZVeGJGZFRibEpvVWxob1lWcFhkRWRPUmxwelYyNUtiR0pWV2toVmJYaHJWR3hLUjFKcVZsZGhhM0F6VmtSR1dtVldTbkphUmxKb1lraENkMVpYZEdGa01rWkhWbTVPWVZKck5YTlphMmhEVTBaWmVVNVhSbWxTYkd3MFZUSjBjMWRzV2xoVmFrNWFWbTFTVEZWdE1VOVNWbEp6WVVaa2JHRXdiRFpXYTJRMFlURlJlVlJ1VWxkaE1uaFhXV3RhWVdOR2JISmhSVTVyVFZad2VsbFZhR3RoYlVwWFYydG9XbFpGTlhKWFZscExVakZPZFZOc2NHaE5iRVYzVm1wR1lWbFdaRVpPVm14aFVteGFXRlpyVmxwa01XUnpWbXhPVWsxWFVraFdNalZUVm0xS2NtTkhSbHBXUlhCVVZsVmFVMk14V2xWV2JGSlhUVWhDU0ZaSGVHRlVNVlY0VjI1T1dGWkZjRmhaVkVaaFpHeHdSVkpyWkd0U2JIQXhWVEl4TkZVeFNuVlJiR1JYWWxoU2FGZFdXbk5XTVZaellVZDBWRkl4U25oWFYzUnJWVEZrUjFwSVNsaGlXRkp2Vld4U1IxSnNXbGhqUm1SWFRVUkdXVmxWYUhkV01VbzJVbXhvV21WcmNGQlZNVnBIWXpGYWMxcEhiRk5YUlVZMVZtcEdZVlV4Um5KTlZtaFdZVEpTYUZWdE1UUmpWbFowWkVWMFdGSnNXakJVVmxKUFZHMUtSMk5GV2xaV00yaFFWbGR6ZUdOdFRrWmFSbFpwVW14d1dWWnRlR0ZaVmtsNFZHNU9VbUpIVW05WlZFWjNUbFphUjFadFJsWk5WVFZIVkZaYWMxbFdTWHBWYXpsWFRVWmFTRlJ0ZUd0a1JURkZVV3MxVTAxSVFscFdWekUwWXpGYVdGTnNaR3BTZW14WFZGVmFkMU14Y0VWU2JrcHJUV3RhUjFSc1drTldNVnBHVjJ4U1dHSlVRWGRVVldSTFYwWktjMkpHVm1sV2JrSjJWbFJDWVZOdFVYaGhNMlJvVWxSV1VWWnNVa2RWTVhCMFRrUkNhVll3V2xwV1J6RmhZVVpPUjFOWVpGcE5SMmhQVkRGVmVGVnRXblZPUnpGb1YwVTFiVmxWYUZOTlIwNUpWRlJzVGxWWU5TMUtiV3g2V0RKb01HUklRbnBRVkVWLUptbHpYMmgwZEhCelBURX4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_8 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499179556&h=Atx2F4-5mopUtQ1NVwVflA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTg5MzgyODcmaD1uMWFudUVFQ3BjdEJEZ1ByQURNckhnJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UZ3pOakkyTXpjbWFEMXRNemQxVWtKSGIwSlNUa1JWT0ZSblRsOTVabWQzSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZelZPYWsweVQxUlpiV0ZFTVdaTmJWWXpXVEJPVFUxdFpETldNVGxNWkc1c1dFMUdVbXhqTW14dVNtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFZia1pvVm5wU01GZHJaSE5rTWtwSVQxaFNTMVpHUmpOWmJHUkhZMGRLUkU1WWJHdFZNWEJ6VlVaU1JrMUZPVlZaZWtaUFVrWkZNRlF4VW5KaVYwWkZUVlYwYVUxRVVqQlVWVnBIVmxaV1ZFMVhkRlJTVmxWM1dURldWazVIU25STlZteHBUVzE0VTFOdE5WZGxWMHBGVWxST1RsWkVSbkZWTUZaM1RXeHdWbUZJU210V01GcFpWRlpqTVdGck1YRlNiVGxhVm0xUmVscEdaRTlrVmxwWlYyeEdUbUpHYjNkV01WcHJZekpOZUZGc2FGTmhhMXB5Vlc1d2MwNVdjRWhOUkZacVRXdHNOVlpYTlVOaFYwWnlZa2hPVldFeFNrUmFSVnB6VjBkS1NWUnJNV2xoTWprMFZUSXdlRlpyT1ZaTlZsWldWa1phVUZaclpHcGxWbEYzVld0S1QxSlVWVEZXTWpBMVZWWmFSMUpxVmxoaE1VcERWRmN4UzJNeFJuVmpSa3BYVFZad1VsWkdWbXBPVjBaelZXdGFiRkl6YUdGWmExcDNaRVp3Vm1GSGNHbFdNVXBhVlRJMVQxUnNXa2hVYWxKV1VtMVNVRlV4V2s5a1ZtUjBaVVpTVTAweFJqUldNVnBoWVcxV1NGTnVVbFZYUjNoUFZtcEtiMkl4V25GVWJYUk9WbTEwTlZSc1dtRmhNa3BHVW1wV1YySlVWbFJXTW5oYVpWZFdTV05HV2xOaVZrcEpWa1phYTFVeFRrWlBWbXhwVWpOU2NGWnJaRFJPYkdSWVkwVjBWazFyTlVsVk1qVkhWMFpaZW1GR1FsWmhNVnBNVkZWYWExWXhjRWxVYlhCT1UwZG5lRlpVU25kU01VMTVVMnhrVjFaR1dsWldiWGhMVlRGU2MxWllhRTlpUlhCYVdXdFZOV0pIUlhkV2FrNVhVbnBHZWxkV1pFcGxSa1p6V2taQ1YyRXhjSGxXUmxaWFkyc3hWMkpJVW10U00xSldWbXhTVjAxR1VuTldhbEpYVW10d1dsbFZWWGhXTVVwWVlVVjRWMVpzY0doWmVrRTFWMVpTYzFack5WZFdiRzkzVmpKMFlXSXhUWGxVV0dST1ZteGFZVlJVU205VmJGcHhVVlJHVkdKR1ZqVlViR1JIWVZaS2NrNVZiR0ZTVmtwSVZqSjRZV1JHVW5GVmJIQnBWa1ZhVUZkc1dsWmxSbVJJVW10b2FGSnRVazlVVjNoSFRrWlplRlZyY0U1V2JIQXdWbGMxVDFWc1pFaGxSbWhhWWxob1RGZFdXbUZqVms1eFZXMTRhVkpzY0VsV01uUlhZVEZTYzFkWWFGUmhNbmhXVkZaa2IyVnNiRlZUYTNSWFZqQndTbGt3V25kaFIwVjZVV3hXV0ZaRlNuSlZla3BQVmpGV2MyRkhlRk5XUjNoVlZsZDRWMlJ0VVhoWFdHaFlZbGhTY1ZSWGMzaE5NWEJXWVVaa1YxSXdXbmxXTW5RMFYyMUtSMk5HWkZWaVJuQlVWbXBHVjJNeFRuSlBWbVJYVWxad1dGWnRkR0ZWTVUxNFZtdGtWR0V4Y0U5Vk1HaERWbXhhYzFaVVJtaFNiWGg0VlcxMFQxZEdTWGhYYTNCYVlURndXRlpxUm1GT2JVWkZWR3hvYUUxVmNGRldiR1I2VFZaWmVWUnJXbUZTYkZwd1dXMTBTMVpHV2tkWGJVWmFWbTE0V0ZscmFGTmhiRXBYWTBoT1dtRXhjR2hXTW5oclpGZE9SazlXVms1U1JWbDNWbXRqTVZVeGJGZFRibEpvVWxob1lWcFhkRWRPUmxwelYyNUtiR0pWV2toVmJYaHJWR3hLUjFKcVZsZGhhM0F6VmtSR1dtVldTbkphUmxKb1lraENkMVpYZEdGa01rWkhWbTVPWVZKck5YTlphMmhEVTBaWmVVNVhSbWxTYkd3MFZUSjBjMWRzV2xoVmFrNWFWbTFTVEZWdE1VOVNWbEp6WVVaa2JHRXdiRFpXYTJRMFlURlJlVlJ1VWxkaE1uaFhXV3RhWVdOR2JISmhSVTVyVFZad2VsbFZhR3RoYlVwWFYydG9XbFpGTlhKWFZscExVakZPZFZOc2NHaE5iRVYzVm1wR1lWbFdaRVpPVm14aFVteGFXRlpyVmxwa01XUnpWbXhPVWsxWFVraFdNalZUVm0xS2NtTkhSbHBXUlhCVVZsVmFVMk14V2xWV2JGSlhUVWhDU0ZaSGVHRlVNVlY0VjI1T1dGWkZjRmhaVkVaaFpHeHdSVkpyWkd0U2JIQXhWVEl4TkZVeFNuVlJiR1JYWWxoU2FGZFdXbk5XTVZaellVZDBWRkl4U25oWFYzUnJWVEZrUjFwSVNsaGlXRkp2Vld4U1IxSnNXbGhqUm1SWFRVUkdXVmxWYUhkV01VbzJVbXhvV21WcmNGQlZNVnBIWXpGYWMxcEhiRk5YUlVZMVZtcEdZVlV4Um5KTlZtaFdZVEpTYUZWdE1UUmpWbFowWkVWMFdGSnNXakJVVmxKUFZHMUtSMk5GV2xaV00yaFFWbGR6ZUdOdFRrWmFSbFpwVW14d1dWWnRlR0ZaVmtsNFZHNU9VbUpIVW05WlZFWjNUbFphUjFadFJsWk5WVFZIVkZaYWMxbFdTWHBWYXpsWFRVWmFTRlJ0ZUd0a1JURkZVV3MxVTAxSVFscFdWekUwWXpGYVdGTnNaR3BTZW14WFZGVmFkMU14Y0VWU2JrcHJUV3RhUjFSc1drTldNVnBHVjJ4U1dHSlVRWGRVVldSTFYwWktjMkpHVm1sV2JrSjJWbFJDWVZOdFVYaGhNMlJvVWxSV1VWWnNVa2RWTVhCMFRrUkNhVll3V2xwV1J6RmhZVVpPUjFOWVpGcE5SMmhQVkRGVmVGVnRXblZPUnpGb1YwVTFiVmxWYUZOTlIwNUpWRlJzVGxWWU5TMUtiV3g2V0RKb01HUklRbnBRVkVWLUptbHpYMmgwZEhCelBURX4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_9 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499179630&h=TeVopsgO0CG1lmpprKKZdQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTg5MzgyODcmaD1uMWFudUVFQ3BjdEJEZ1ByQURNckhnJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXUnFhVzR0Wkdsd2JHOXRKVFF3YldGcGJDNXlkU1psUFRFME9UZ3pOakkyTXpjbWFEMXRNemQxVWtKSGIwSlNUa1JWT0ZSblRsOTVabWQzSm5WeWJERTNNVDFqU0VwMlpVaHJkV0ZYTVc1ak1qRm9ZVmQzZFdOdVZYWlFNbFowV1Zkc2MxQlhVbkZoVnpSMFdrZHNkMkpIT1hSS1ZGRjNZbGRHY0dKRE5YbGtVMXBzVUZSRk1FOVVZelZPYWsweVQxUlpiV0ZFTVdaTmJWWXpXVEJPVFUxdFpETldNVGxNWkc1c1dFMUdVbXhqTW14dVNtNVdlV0pFUlROTlZERnFVMFZ3TWxwVmFISmtWMFpZVFZjMWFrMXFSbTlaVm1RelpGZE9kVlpZV2xGTmJGb3dWMVprYzJNeFFsaFZia1pvVm5wU01GZHJaSE5rTWtwSVQxaFNTMVpHUmpOWmJHUkhZMGRLUkU1WWJHdFZNWEJ6VlVaU1JrMUZPVlZaZWtaUFVrWkZNRlF4VW5KaVYwWkZUVlYwYVUxRVVqQlVWVnBIVmxaV1ZFMVhkRlJTVmxWM1dURldWazVIU25STlZteHBUVzE0VTFOdE5WZGxWMHBGVWxST1RsWkVSbkZWTUZaM1RXeHdWbUZJU210V01GcFpWRlpqTVdGck1YRlNiVGxhVm0xUmVscEdaRTlrVmxwWlYyeEdUbUpHYjNkV01WcHJZekpOZUZGc2FGTmhhMXB5Vlc1d2MwNVdjRWhOUkZacVRXdHNOVlpYTlVOaFYwWnlZa2hPVldFeFNrUmFSVnB6VjBkS1NWUnJNV2xoTWprMFZUSXdlRlpyT1ZaTlZsWldWa1phVUZaclpHcGxWbEYzVld0S1QxSlVWVEZXTWpBMVZWWmFSMUpxVmxoaE1VcERWRmN4UzJNeFJuVmpSa3BYVFZad1VsWkdWbXBPVjBaelZXdGFiRkl6YUdGWmExcDNaRVp3Vm1GSGNHbFdNVXBhVlRJMVQxUnNXa2hVYWxKV1VtMVNVRlV4V2s5a1ZtUjBaVVpTVTAweFJqUldNVnBoWVcxV1NGTnVVbFZYUjNoUFZtcEtiMkl4V25GVWJYUk9WbTEwTlZSc1dtRmhNa3BHVW1wV1YySlVWbFJXTW5oYVpWZFdTV05HV2xOaVZrcEpWa1phYTFVeFRrWlBWbXhwVWpOU2NGWnJaRFJPYkdSWVkwVjBWazFyTlVsVk1qVkhWMFpaZW1GR1FsWmhNVnBNVkZWYWExWXhjRWxVYlhCT1UwZG5lRlpVU25kU01VMTVVMnhrVjFaR1dsWldiWGhMVlRGU2MxWllhRTlpUlhCYVdXdFZOV0pIUlhkV2FrNVhVbnBHZWxkV1pFcGxSa1p6V2taQ1YyRXhjSGxXUmxaWFkyc3hWMkpJVW10U00xSldWbXhTVjAxR1VuTldhbEpYVW10d1dsbFZWWGhXTVVwWVlVVjRWMVpzY0doWmVrRTFWMVpTYzFack5WZFdiRzkzVmpKMFlXSXhUWGxVV0dST1ZteGFZVlJVU205VmJGcHhVVlJHVkdKR1ZqVlViR1JIWVZaS2NrNVZiR0ZTVmtwSVZqSjRZV1JHVW5GVmJIQnBWa1ZhVUZkc1dsWmxSbVJJVW10b2FGSnRVazlVVjNoSFRrWlplRlZyY0U1V2JIQXdWbGMxVDFWc1pFaGxSbWhhWWxob1RGZFdXbUZqVms1eFZXMTRhVkpzY0VsV01uUlhZVEZTYzFkWWFGUmhNbmhXVkZaa2IyVnNiRlZUYTNSWFZqQndTbGt3V25kaFIwVjZVV3hXV0ZaRlNuSlZla3BQVmpGV2MyRkhlRk5XUjNoVlZsZDRWMlJ0VVhoWFdHaFlZbGhTY1ZSWGMzaE5NWEJXWVVaa1YxSXdXbmxXTW5RMFYyMUtSMk5HWkZWaVJuQlVWbXBHVjJNeFRuSlBWbVJYVWxad1dGWnRkR0ZWTVUxNFZtdGtWR0V4Y0U5Vk1HaERWbXhhYzFaVVJtaFNiWGg0VlcxMFQxZEdTWGhYYTNCYVlURndXRlpxUm1GT2JVWkZWR3hvYUUxVmNGRldiR1I2VFZaWmVWUnJXbUZTYkZwd1dXMTBTMVpHV2tkWGJVWmFWbTE0V0ZscmFGTmhiRXBYWTBoT1dtRXhjR2hXTW5oclpGZE9SazlXVms1U1JWbDNWbXRqTVZVeGJGZFRibEpvVWxob1lWcFhkRWRPUmxwelYyNUtiR0pWV2toVmJYaHJWR3hLUjFKcVZsZGhhM0F6VmtSR1dtVldTbkphUmxKb1lraENkMVpYZEdGa01rWkhWbTVPWVZKck5YTlphMmhEVTBaWmVVNVhSbWxTYkd3MFZUSjBjMWRzV2xoVmFrNWFWbTFTVEZWdE1VOVNWbEp6WVVaa2JHRXdiRFpXYTJRMFlURlJlVlJ1VWxkaE1uaFhXV3RhWVdOR2JISmhSVTVyVFZad2VsbFZhR3RoYlVwWFYydG9XbFpGTlhKWFZscExVakZPZFZOc2NHaE5iRVYzVm1wR1lWbFdaRVpPVm14aFVteGFXRlpyVmxwa01XUnpWbXhPVWsxWFVraFdNalZUVm0xS2NtTkhSbHBXUlhCVVZsVmFVMk14V2xWV2JGSlhUVWhDU0ZaSGVHRlVNVlY0VjI1T1dGWkZjRmhaVkVaaFpHeHdSVkpyWkd0U2JIQXhWVEl4TkZVeFNuVlJiR1JYWWxoU2FGZFdXbk5XTVZaellVZDBWRkl4U25oWFYzUnJWVEZrUjFwSVNsaGlXRkp2Vld4U1IxSnNXbGhqUm1SWFRVUkdXVmxWYUhkV01VbzJVbXhvV21WcmNGQlZNVnBIWXpGYWMxcEhiRk5YUlVZMVZtcEdZVlV4Um5KTlZtaFdZVEpTYUZWdE1UUmpWbFowWkVWMFdGSnNXakJVVmxKUFZHMUtSMk5GV2xaV00yaFFWbGR6ZUdOdFRrWmFSbFpwVW14d1dWWnRlR0ZaVmtsNFZHNU9VbUpIVW05WlZFWjNUbFphUjFadFJsWk5WVFZIVkZaYWMxbFdTWHBWYXpsWFRVWmFTRlJ0ZUd0a1JURkZVV3MxVTAxSVFscFdWekUwWXpGYVdGTnNaR3BTZW14WFZGVmFkMU14Y0VWU2JrcHJUV3RhUjFSc1drTldNVnBHVjJ4U1dHSlVRWGRVVldSTFYwWktjMkpHVm1sV2JrSjJWbFJDWVZOdFVYaGhNMlJvVWxSV1VWWnNVa2RWTVhCMFRrUkNhVll3V2xwV1J6RmhZVVpPUjFOWVpGcE5SMmhQVkRGVmVGVnRXblZPUnpGb1YwVTFiVmxWYUZOTlIwNUpWRlJzVGxWWU5TMUtiV3g2V0RKb01HUklRbnBRVkVWLUptbHpYMmgwZEhCelBURX4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_10 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499448736&h=4-J7TZImV6Hz_eMZ6cxQmg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk0NDg2NzkmaD1ibzZTRnhtT1ZJN01aeFZuWUR5c2lBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVk50UkZJNVJEVlNZMVF4YW5BemRVdG9aV1pHTkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQldWVEJTVXpGNVZrZG9jRm93VFhkTk1VSnpZakJvVG1GVE1WbE5TR050WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWUlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1VGSkZNSHBVVlU1aFlqRkNXR1ZJYkZWV1Z6aDNXa1JPVWs1V2NFZFVibkJTVFZaYVlWbHRjRVpsYkZaWlducE9UMDF0VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmxSRnBWVmtaYVlWUlhkSGRqYkdSWFdrWmthRTFFVWpWV01XaHpWRzFXYzJOSVFsVldiRXAyV1ZSQk1XUkdaRmxqUmtKWFVtMTNNbFpFUWxOUk1rcEdUbFZXVlZaR1NsQldha1p5VFVaU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_11 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499448772&h=lHvKd_4p6Qj1e7CSQeCSTA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk0NDg3MzImaD16NUlhQ2Y4VWJHNkRNUUozWVF2M0JRJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVk50UkZJNVJEVlNZMVF4YW5BemRVdG9aV1pHTkVFbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la1V3VGtOYWIxQldWVEJTVXpGNVZrZG9jRm93VFhkTk1VSnpZakJvVG1GVE1WbE5TR050WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWUlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1VGSkZNSHBVVlU1aFlqRkNXR1ZJYkZWV1Z6aDNXa1JPVWs1V2NFZFVibkJTVFZaYVlWbHRjRVpsYkZaWlducE9UMDF0VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmxSRnBWVmtaYVlWUlhkSGRqYkdSWFdrWmthRTFFVWpWV01XaHpWRzFXYzJOSVFsVldiRXAyV1ZSQk1XUkdaRmxqUmtKWFVtMTNNbFpFUWxOUk1rcEdUbFZXVlZaR1NsQldha1p5VFVaU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_12 = 'https://proxy.imgsmail.ru/?email=djin-diplom%40mail.ru&e=1499448800&h=M4UHfVKpZJd_VCKnz-43wQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWRqaW4tZGlwbG9tJTQwbWFpbC5ydSZlPTE0OTk0NDg3NzcmaD1kNk8xcEJiT3JYSUZZMTluZkFsTDdBJnVybDE3MT1jSEp2ZUhrdWFXMW5jMjFoYVd3dWNuVXZQMlZ0WVdsc1BXRjFkRzl5ZG05c2IyUnBiaklsTkRCdFlXbHNMbkoxSm1VOU1UUTVOVGcyT0RBNE55Wm9QVFF5WkRBMmJsQnpRV1ZQTUc5alRFeGxZbFptZUhjbWRYSnNNVGN4UFdOSVNuWmxTR3QxWVZjeGJtTXlNV2hoVjNkMVkyNVZkbEF5Vm5SWlYyeHpVRmRHTVdSSE9YbGtiVGx6WWpKU2NHSnFXV3hPUkVKMFdWZHNjMHh1U2pGS2JWVTVUVlJSTlUxNlJYbE9la0V3VG1sYWIxQldPVkZrTUVrMVltdGtUVTV0TlV4VFJYaE1WRWhLVVZac09YTlVNVVZ0WkZoS2MwMVVZM2hRVjA1SlUyNWFiRk5IZERGWlZtTjRZbTFOZVUxWGFHaFdNMlF4V1RJMVZtUnNRWGxXYmxKYVZqSjRlbFZHWkVkTlYxSklUMWhzYTJKVWJIcFpha3BUWTBkS2NWUlhlRTlTUlVvd1YxWmtjMk13ZUhWVGFrWkxZbFpWTlZSV1VsSk9WVEZWVkZSS1VGSkZNSHBVVlU1aFlqRkNXR1ZJYkZWV1Z6aDNXa1JPVWs1V2NFZFVibkJTVFZaYVlWbHRjRVpsYkZaWlducE9UMDF0VG5SYVJtaExZekF4VlZremFGRldNRFF5VjJwT1YyRkdTalppUkZwaFVsZFNlbHBHV25abFYxSklZVWR3YVdKRmNETlhWekIzVGxkT2NtVklVbFZpYkhCd1ZsaHdjbVZHYTNkYVJGSnJZa2Q0V1ZaWE5YZFVWVEYwWlVSQ1dGWnRVbkpaYTJSUFRsVTVTV0pGTlZOU1ZsWTJWa1ZvZDFGdFZuSmxSRnBWVmtaYVlWUlhkSGRqYkdSWFdrWmthRTFFVWpWV01XaHpWRzFXYzJOSVFsVldiRXAyV1ZSQk1XUkdaRmxqUmtKWFVtMTNNbFpFUWxOUk1rcEdUbFZXVlZaR1NsQldha1p5VFVaU1NFMVlaR3ROV0VGNldtMDBNR0pYUmxsVWJWcG9VMFpKZDFrd2FFNVBWVEZTWm00MGJXRllUbVpoU0ZJd1kwaE5PVTFSZm40bWFYTmZhSFIwY0hNOU1Rfn4maXNfaHR0cHM9MQ~~&is_https=1';

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
    }

    return $var_2;
}

// Выбор картинок
$kart_1 = rand(1, 1000000)%12+1;
$kart_2 = rand(1, 1000000)%12+1;
$kart_3 = rand(1, 1000000)%12+1;


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