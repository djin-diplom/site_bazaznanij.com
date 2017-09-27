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

$title_let_case = rand(1,35);

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
    case 4:
        $title_let = 'Новинка для Студентов от учебной компании ';
        break;
    case 5:
        $title_let = 'Самое лучшее для Студенчества от учебного сервиса ';
        break;
    case 6:
        $title_let = 'Приятнее не бывает для студента (и его преподавателей): компания ';
        break;
    case 7:
        $title_let = 'Это информация от учебной организации ';
        break;
    case 8:
        $title_let = 'Рады сообщить Вам следующую информацию, компания ';
        break;
    case 9:
        $title_let = 'Мы делаем дипломные и любые другие тексты, организация ';
        break;
    case 10:
        $title_let = 'Это уникальная работа от учебной организации ';
        break;
    case 11:
        $title_let = 'Сегодня мы представляем скидку от центра ';
        break;
    case 12:
        $title_let = 'Наше учебное учреждение приветствует Вас! ';
        break;

    case 13:
        $title_let = $vid_rab." без предоплат за ".$pay.", со скидками от ";
        break;
    case 14:
        $title_let = $vid_rab." по акции за ".$pay.", часть даром от ";
        break;
    case 15:
        $title_let = $vid_rab." часть бесплатно за ".$pay." со скидкой, ";
        break;
    case 16:
        $title_let = $vid_rab." (по акции) за ".$pay.", никакой предоплаты, ";
        break;
    case 17:
        $title_let = $vid_rab." за ".$pay.", пришлем первую главу бесплатно, образовательный центр ";
        break;
    case 18:
        $title_let = $vid_rab." за ".$pay.", доставим часть без предоплаты, ООО ";
        break;
    case 19:
        $title_let = $vid_rab." всего за ".$pay.", часть материалов по работе бесплатно от ";
        break;
    case 20:
        $title_let = 'Новое только для Вас от нашей компании ';
        break;
    case 21:
        $title_let = 'Качество для учащихся и их родителей от учебного центра ';
        break;
    case 22:
        $title_let = 'Лучше не бывает для людей (и их преподавателей): фирма ';
        break;
    case 23:
        $title_let = 'Это информационное письмо от образовательной организации ';
        break;
    case 24:
        $title_let = 'Спешим предложить Вам данную информацию, компания ';
        break;
    case 25:
        $title_let = 'Мы выполняем магистерские и любые другие работы, учреждение ';
        break;
    case 26:
        $title_let = 'Это новое предложение от нашей организации ';
        break;
    case 27:
        $title_let = 'В настоящий момент мы представляем скидки от студии ';
        break;
    case 28:
        $title_let = 'Наша студия рада познакомиться с Вами! ';
        break;

    case 29:
        $title_let = $vid_rab." даром за ".$pay.", со скидками от ";
        break;
    case 30:
        $title_let = $vid_rab." по акции за ".$pay.", часть без предоплаты от ";
        break;
    case 31:
        $title_let = $vid_rab." часть бесплатно за ".$pay." со скидками, ";
        break;
    case 32:
        $title_let = $vid_rab." (акция) за ".$pay.", нет предоплаты, ";
        break;
    case 33:
        $title_let = $vid_rab." за ".$pay.", пришлем одну главу бесплатно, учебный центр ";
        break;
    case 34:
        $title_let = $vid_rab." за ".$pay.", доставим главу бесплатно, ООО ";
        break;
    case 35:
        $title_let = $vid_rab." всего за ".$pay.", часть работы бесплатно от ";
        break;

}


//Выбор Выполнение по низкой цене

$vibor_let_case = rand(1,31);

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
    case 4:
        $vibor_let = 'Все легко с нашей компанией!';
        break;
    case 5:
        $vibor_let = 'Мы помогаем Студенчеству в учёбе.';
        break;
    case 6:
        $vibor_let = 'Добрые цены. Высокое качество текстов.';
        break;
    case 7:
        $vibor_let = 'Выполним срочный заказ, хорошие цены!';
        break;
    case 8:
        $vibor_let = 'Сделаем быстро работу по низкой цене!';
        break;
    case 9:
        $vibor_let = 'Срочная работа по обычной стоимости!';
        break;
    case 10:
        $vibor_let = 'Скорое выполнение по малой цене!';
        break;
    case 11:
        $vibor_let = 'Гарантия, маленький срок, низкая цена!';
        break;

    case 12:
        $chislo = rand(12345,23456);
        $vibor_let = 'Используйте скидочный промо-код IT'.$chislo.'R';
        break;
    case 13:
        $chislo = rand(12345,23456);
        $vibor_let = 'Назовите код IT'.$chislo.'R и получите скидку';
        break;
    case 14:

        $vibor_let = 'Найдём автора под Ваши возможности.';
        break;
    case 15:

        $vibor_let = 'Отыщем исполнителя по Вашим средствам.';
        break;
    case 16:

        $vibor_let = 'Вы можете назначить цену - мы выполним.';
        break;
    case 17:

        $vibor_let = 'Найдём автора по выбранной Вами цене.';
        break;
    case 18:
        $vibor_let = 'Все просто с нашей студией.';
        break;
    case 19:
        $vibor_let = 'Мы оказываем помощь Студенчеству.';
        break;
    case 20:
        $vibor_let = 'Легкие цены. Высокое качество работ.';
        break;
    case 21:
        $vibor_let = 'Срочно выполним заказ, приятные цены.';
        break;
    case 22:
        $vibor_let = 'Напишем без промедлений по лучшей цене.';
        break;
    case 23:
        $vibor_let = 'Срочный заказ по нормальной стоимости.';
        break;
    case 24:
        $vibor_let = 'Быстрое исполнение и низкие цены.';
        break;
    case 25:
        $vibor_let = 'Гарантии, небольшие сроки и цены.';
        break;

    case 26:
        $chislo = rand(12345,23456);
        $vibor_let = 'Для Вас промокод-скидка IT'.$chislo.'R';
        break;
    case 27:
        $chislo = rand(12345,23456);
        $vibor_let = 'Запомните промо-код IT'.$chislo.'R для скидки.';
        break;
    case 28:

        $vibor_let = 'Подыщем автора под Ваши требования.';
        break;
    case 29:

        $vibor_let = 'Найдём исполнителя для Ваших целей.';
        break;
    case 30:

        $vibor_let = 'Вы назначаете цену - мы выполняем.';
        break;
    case 31:

        $vibor_let = 'Найдем автора по указанной Вами цене.';
        break;
}


//Выбор Скидки

$vibor_akc_case = rand(1,33);

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
    case 4:
        $vibor_akc = 'Скидки, снижение цен в этом сезоне.';
        break;
    case 5:
        $vibor_akc = 'Открываем скидочный месяц сегодня.';
        break;
    case 6:
        $vibor_akc = 'Время скидок в 2017 году открыто.';
        break;
    case 7:
        $vibor_akc = 'Пришёл новый сезон акций и скидок.';
        break;
    case 8:
        $vibor_akc = 'Не пропустите 20 % снижение цен.';
        break;
    case 9:
        $vibor_akc = 'Весна 2017: Вaс ожидает 20 % скидка.';
        break;
    case 10:
        $vibor_akc = 'Этот месяц предлагает 20 % скидку.';
        break;
    case 11:
        $vibor_akc = 'Предложим Вам 10-20 % снижение цен.';
        break;
    case 12:
        $vibor_akc = 'Сделаем текст по заказу: 20 % скидка.';
        break;
    case 13:
        $vibor_akc = 'Напишем курсовую и диплом: цены -20%.';
        break;
    case 14:
        $vibor_akc = 'Хотите сделать работу без предоплаты?';
        break;
    case 15:
        $vibor_akc = 'Выполним часть Вашей работы бесплатно.';
        break;
    case 16:
        $vibor_akc = 'Работаем без предоплаты, скидки до 20%.';
        break;
    case 17:
        $vibor_akc = 'Получите часть текста совсем без оплаты.';
        break;
    case 18:
        $vibor_akc = 'Бесплатно пришлем Вам часть материалов.';
        break;
    case 19:
        $vibor_akc = 'Скидки, падение цен в новом сезоне.';
        break;
    case 20:
        $vibor_akc = 'Открываем скидочный сезон сейчас.';
        break;
    case 21:
        $vibor_akc = 'Время скидок в новом году началось.';
        break;
    case 22:
        $vibor_akc = 'Пришел час акций и снижения цен.';
        break;
    case 23:
        $vibor_akc = 'Не упустите 20% весенний ценопад.';
        break;
    case 24:
        $vibor_akc = 'Пришла весна: Вaс ждёт 20% скидка.';
        break;
    case 25:
        $vibor_akc = 'Новый месяц принёс Вам скидку 20%.';
        break;
    case 26:
        $vibor_akc = 'Предлагаем новое снижение цен 20%.';
        break;
    case 27:
        $vibor_akc = 'Сделаем работу на заказ: 20% скидки.';
        break;
    case 28:
        $vibor_akc = 'Напишем диплом - цены ниже на 20%.';
        break;
    case 29:
        $vibor_akc = 'Желаете получить текст без предоплаты?';
        break;
    case 30:
        $vibor_akc = 'Пришлём часть Вашей работы бесплатно.';
        break;
    case 31:
        $vibor_akc = 'Работаем без аванса, скидки от 20%.';
        break;
    case 32:
        $vibor_akc = 'Получите часть работы без аванса.';
        break;
    case 33:
        $vibor_akc = 'Бесплатно выполним часть работы.';
        break;
}

//Выбор сроков

$sut_kurs = rand(2,5);
$sut_dip = rand(6,11);
$sut_mag = rand(12,16);

//чек + договор

$vibor_pris_case = rand(1,27);

switch ($vibor_pris_case) {
    case 1:
        $vibor_pris = ' БЕСПЛАТНО (не потребуется предоплата) пришлёт Вам примеры и 
		материалы от наших авторов и специалистов. Чек и договор. ';
        break;
    case 2:
        $vibor_pris = ' уже больше восьми лет выполняет дипломы и курсовые
		по самым разным предметам. Вас ждет чек и публичная оферта. ';
        break;
    case 3:
        $vibor_pris = ' предоставит Вам примеры курсовых и дипломов от автора.
Гарантии качества прописаны в договоре, после оплаты выдаем чек. ';
        break;
    case 4:
        $vibor_pris = ' выполнит срочную работу, вышлет БЕЗ предоплаты введение, 
		первую часть курсовой или диплома. Составим договор. ';
        break;
    case 5:
        $vibor_pris = ' выполнит курсовой или дипломный проект  без промедлений, 
		пришлет образцы работ. Чеки и оферта гарантируют качество. ';
        break;
    case 6:
        $vibor_pris = ' срочно напишет работу, бесплатно пришлет начало магистерской или диплома. 
		Наши специалисты гарантируют качество, мы работаем официально по договору. ';
        break;
    case 7:
        $vibor_pris = ' сделает работу в точности по Вашим требованиям, с учётом всех 
		запросов ВУЗа. Составит индивидуальный договор, пришлет pdf-чек. ';
        break;
    case 8:
        $vibor_pris = ' позволит без предоплат получить примеры рефератов и дипломов наших 
		авторов. Выполняем работы официально по договору оферты с чеком. ';
        break;

    case 9:
        $vibor_pris = ' работает официально по договору оферты. Мы делаем только качественные 
		работы. Возможен индвидуальный договор, чек об оплате. ';
        break;
    case 10:
        $vibor_pris = ' выполняет работы точно в срок. Оформляем заказы 
        официально по договору публичной оферты, подтверждаем оплату чеком. ';
        break;
    case 11:
        $vibor_pris = ' зарегирирована в реестре компаний Российской Федерации. Мы заключаем с 
        Заказчиками договор. Выдаем чек оплаты. Работу выполняют специалисты. ';
        break;
    case 12:
        $vibor_pris = ' официально работает с 2009 года.  Возможно заключение договора. В компании
         есть экспертный отдел, который проверяет работы перед отправкой Заказчику. ';
        break;
    case 13:
        $vibor_pris = ' выполняет заказы на официальной основе. Заказчику по договору гарантированы 
		качество,
 уникальность текста, бесплатные доработки и многое другое. После внесения средств выдаём чек. ';
        break;
    case 14:
        $vibor_pris = ' делает дипломы и магистерские официально. Клиентам гарантируются по оферте 
		отсутствие плагиата,
		высокий профессионализм авторов, корректировки по замечаниям научного руководителя. Печатаем чек.';
        break;
    case 15:
        $vibor_pris = ' оказывает услуги написания работ на основании договора. Студентам и всем остальным даются гарантии качества,
		отсутствия заимствований из других источников, исправления по требованию заказчика. При зачислении средств высылается чек. 
		';
        break;
    case 16:
        $vibor_pris = ' БЕСПЛАТНО (без всякой предоплаты) пришлет для Вас примерные варианты 
		работ авторов и преподавателей. Предоставит чек и оферту. ';
        break;
    case 17:
        $vibor_pris = ' более семи лет пишет дипломные работы и диссертации
		по разным дисциплинам. Вас снабдят чеком, есть публичная оферта. ';
        break;
    case 18:
        $vibor_pris = ' предоставит всем желающим примеры курсовых и магистерских от преподавателей.
Гарантируется качество, все прописано в договоре, после оплаты присылаем чек. ';
        break;
    case 19:
        $vibor_pris = ' сделает срочно диссертацию или диплом, вышлет бесплатно введение, 
		первую часть курсовой. Подписываем договор. ';
        break;
    case 20:
        $vibor_pris = ' выполнит диссертацию или дипломную работу без проволочек, 
		пришлет образцы курсовых и рефератов. Снимок чека и договор дают гарантии выполнения. ';
        break;
    case 21:
        $vibor_pris = ' срочно выполнит дипломный или курсовой проект, бесплатно пришлёт начало диссертации. 
		Наши работники-преподаватели гарантируют качество, компания работает официально по договору. ';
        break;
    case 22:
        $vibor_pris = ' сделает диплом точно по Вашим пожеланиям, с учетом всех 
		запросов Вашего Университета. Составит договор, вышлет pdf-копию чека. ';
        break;
    case 23:
        $vibor_pris = ' без предоплаты пришлёт примерные варианты курсовых и диссертаций наших 
		авторов. Компания выполнит работы официально по договору оферты с чеком. ';
        break;

    case 24:
        $vibor_pris = ' функционирует официально и работает по договору публичной офёрты. Компания выполняет только качественные 
		работы. Возможны индвидуальные договоренности, чек оплаты. ';
        break;
    case 25:
        $vibor_pris = ' выполняет дипломы и диссертации точно в срок. Специалисты компании оформляют заказы 
        официально в рамках публичной офёрты и подтверждают оплату чеком. ';
        break;
    case 26:
        $vibor_pris = ' зарегирирована в каталоге компаний России. Мы заключаем с 
        нашими заказчиками договор. Присылаем чек по факту оплаты. Дипломы, курсовые и магистерские выполняются преподавателями. ';
        break;
    case 27:
        $vibor_pris = ' официально работает с 2010. Если требуется, можем заключить договор. В компании
         работает штат экспертов, который контролирует качество и уникальность работ перед отправкой заказчикам. ';
        break;
    
}


//Текст курсовой

$text_kurs_case = rand(1,17);

switch ($text_kurs_case) {
    case 1:
        $text_kurs = 'С каждым годом все большее число студентов склоняется к мысли, что лучше заказать написание курсовой работы
        у специалистов.
        ';
        break;
    case 2:
        $text_kurs = 'К каждому из наших Заказчиков мы стараемся найти свой подход и учесть все требования, предъявляемые 
        его университетом.
        ';
        break;
    case 3:
        $text_kurs = 'Выполнение курсового проекта - это квалификационная работа студентов всех ВУЗов, и поэтому весь процесс 
        надо спланировать заранее.
        ';
        break;
    case 4:
        $text_kurs = 'Заказ курсовой - это частая причина для обращения Заказчиков в нашу компанию. Курсовой подготавливается
         на основе хорошо обработанного материала.
         ';
        break;
    case 5:
        $text_kurs = 'Обратившись к нам, Заказчик получает по-настоящему качественный сервис не только в Москве, но и в 
        других городах СНГ.
        ';
        break;
    case 6:
        $text_kurs = 'Наша поддержка рассчитана на тех студентов, кому сложно самостоятельно освоить все требования трудной 
        учебной программы, кто вынужден совмещать работу с учебой.
        ';
        break;
    case 7:
        $text_kurs = 'Если Вы желаете заказать курсовую работу с высокой уникальностью – Вы попали по верному адресу.
        ';
        break;
    case 8:
        $text_kurs = 'Когда Вы не можете по каким-нибудь причинам выполнить курсовую самостоятельно, мы предлагаем заказать
        работу у специалистов.
        ';
        break;
    case 9:
        $text_kurs = 'Мы знаем, как серьезно оценивается курсовой проект в университете. Именно поэтому мы очень ответственно
        подходим к написанию работы.
       ';
        break;
    case 10:
        $text_kurs = 'Заказ у нас курсовой работы - самое лучшее решение, поскольку наши преподаватели и специалисты сделают 
        курсовую лучше, чем любой студент.
        ';
        break;
    case 11:
        $text_kurs = 'Мы будем выполнять работу по Вашим указаниям. Гарантия на работу два месяца. У нас в штате авторов 
        состоят преподаватели, специалисты.
        ';
        break;
    case 12:
        $text_kurs = 'Предоставляем гарантию целых два месяца на все работы. Выполняем курсовые по указаниям Заказчика. 
        Учтем Ваши финансовые возможности.
        ';
        break;
    case 13:
        $text_kurs = 'Мы выполняем курсовые и дипломные работы по методическим материалам Заказчика, договор дает гарантии 
        качества и уникальности.
        ';
        break;
    case 14:
        $text_kurs = 'Курсовые, дипломные и диссертации выполняются аспирантами, преподавателями, проверяются в нашем экспертном 
        отделении.
        ';
        break;
    case 15:
        $text_kurs = 'Предлагаем Вашему вниманию курсовые от специалистов. Можем написать работу в самые короткие сроки. Выполняем 
		доработки без доплат.
        ';
        break;
    case 16:
        $text_kurs = 'Наши курсовые работы примет любой университет России и СНГ. Потому что наши работники и авторы - преподаватели, 
		имеют научные степени.
        ';
        break;
    case 17:
        $text_kurs = 'Написать курсовую за несколько дней для наших авторов - обычная работа. Однако для экономии лучше придерживаться 
		стандартных сроков.
        ';
        break;
}

//Текст дипломной пока не исправил!

$text_dip_case = rand(1,17);

switch ($text_dip_case) {
    case 1:
        $text_dip = 'Далеко не каждому удается написать курсовой или диплом самостоятельно, ведь такая работа требует огромных 
        затрат сил и, что важнее, времени.
        ';
        break;
    case 2:
        $text_dip = 'Наши авторы - специалисты, преподаватели ведущих университетов России, профессионалы высокого уровня. 
        Отдел экспертизы проверяет все работы.
        ';
        break;
    case 3:
        $text_dip = 'Написать курсовую или магистерскую очень легко, если есть много времени, много знаний и отличный руководитель 
        проекта.
        ';
        break;
    case 4:
        $text_dip = 'Курсовой или диплом показывают уровень освоения студентами методов научного анализа, всего учебного 
        материала по учебным дисциплинам.
        ';
        break;
    case 5:
        $text_dip = 'Мы сопровождаем "под ключ" курсовые, дипломные работы, диссертации с предоставлением гарантий под договору. 
        Проверяем уникальность и качество.
        ';
        break;
    case 6:
        $text_dip = 'Наша компания всегда будет готова помочь Вам в сложном учебном процессе! Быстро и качественно выполняем 
        курсовые и дипломы.
        ';
        break;
    case 7:
        $text_dip = 'Написание на заказ курсовых и дипломных работ с высокой уникальностью – это наша специализация. Присылаем 
        отчет о проверке уникальности.
        ';
        break;
    case 8:
        $text_dip = 'Выполнение курсовой или дипломной работы – достаточное большая проблема, требующая определенных усилий и 
        времени.
        ';
        break;
    case 9:
        $text_dip = 'Для каждого Заказчика мы разработаем индивидуальный план, напишем курсовую или дипломную работу по частям, 
        скорректируем план.
        ';
        break;
    case 10:
        $text_dip = 'В двадцать первом веке, когда люди должны успевать работать, учиться, отдыхать и многое другое, чем-то 
        приходится жертвовать.
       ';
        break;
    case 11:
        $text_dip = 'Мы пришлем без предоплаты примеры работ автора. Доработки по Вашим замечаниям бесплатны и гарантированы 
        договором.
        ';
        break;
    case 12:
        $text_dip = 'Исправим работу бесплатно по Вашим замечаниям. Ознакомим с примерами дипломных работ без предоплаты. 
        В Вашем распоряжении лучшие авторы.
       ';
        break;
    case 13:
        $text_dip = 'Мы ведём дипломные работы вплоть до успешной защиты. Предоставляем примеры дипломов авторов без предоплаты. 
        Предоставляем договор.
        ';
        break;
    case 14:
        $text_dip = 'Ваш диплом будет выполняться только опытными авторами. Независимый контроль уровня уникальности и качества. 
        Составим бесплатно план диплома.
        ';
        break;
    case 15:
        $text_dip = ' Соблюдаем сроки, выполняем дипломы, в подарок презентация и речь при полной оплате. Наши авторы - кандидаты и доктора.
		Высокая уникальность.
        ';
        break;
    case 16:
        $text_dip = 'Дипломные проекты и работы выполняются нашими авторами регулярно. Все заказчики остаются довольны. При полной оплате 
		полагается скидка 10-15%.
        ';
        break;
    case 17:
        $text_dip = 'Чтобы написать дипломную работу, нужен хороший специалист, желательно преподаватель с кандидатской степенью. Наши авторы 
		- кандидаты наук.
        ';
        break;

}

//Текст магистерской 19032017 не переделывал

$text_mag_case = rand(1,17);

switch ($text_mag_case) {
    case 1:
        $text_mag = 'Вопрос качества и уникальности должен стоять превыше вопроса о том, сколько стоит магистерская работа, 
        но мы поможем сэкономить.
        ';
        break;
    case 2:
        $text_mag = 'Мы дорожим нашими заказчиками и стараемся обеспечить каждому всестороннюю поддержку и индивидуальный 
        подход.
        ';
        break;
    case 3:
        $text_mag = 'Просто закажите у нас написание магистерской. Особенно если времени нет, а сдавать работу нужно 
        уже через неделю.
        ';
        break;
    case 4:
        $text_mag = 'В штате компании в должности научных консультантов работают двадцать кандидатов и восемь докторов наук.
        ';
        break;
    case 5:
        $text_mag = 'Сделаем презентацию, напишем отзыв к дипломной, магистерской работе, которую Вы написали. У наших 
        специалистов есть все нужное.
        ';
        break;
    case 6:
        $text_mag = 'Опытные авторы с удовольствием возьмут на себя Ваши заботы по написанию диссертаций, курсовых, рефератов, 
        контрольных, дипломных работ.
        ';
        break;
    case 7:
        $text_mag = 'У нас коллектив опытнейших авторов. Все наши авторы имеют большой опыт в выполнении диссертаций на 
        заказ.
        ';
        break;
    case 8:
        $text_mag = 'Выполняя магистерские, мы обязуемся постоянно учитывать Ваши замечания и пожелания. Мы оформлены официально 
        и гарантируем качество.
        ';
        break;
    case 9:
        $text_mag = 'Написание работ у нас происходит силами рук квалифицированных преподавателей. Наши профессионалы имеют 
        огромный опыт.
        ';
        break;
    case 10:
        $text_mag = 'Оформить работу на заказ у нас - значит доверить себя в надежные руки, так как каждая заказанная работа 
        в нашей компании оригинальна.
        ';
        break;
    case 11:
        $text_mag = 'Пришлем Вам данные наших центров "База знаний". Удобный линый кабинет. Можем заключить индивидуальный 
        договор.
        ';
        break;
    case 12:
        $text_mag = 'Этапы выполнения в личном кабинете. Предоставим реквизиты центра "База знаний". Пришлем бесплатно примеры 
        работ наших авторов.
         ';
        break;
    case 13:
        $text_mag = 'Мы открываем удобный личный кабинет, чтобы Вы могли следить за этапами выполнения Вашей магистерской. 
        Ведём все работы до успеха.
        ';
        break;
    case 14:
        $text_mag = 'Следить за выполнением магистерской диссертации можно через Ваш личный кабинет. Мы оперативно уведомляем 
        Заказчика.
        ';
        break;
    case 15:
        $text_mag = 'Магистерский диссертационный проект сложно написать даже отличникам. Лучше не испытывать судьбу и обратиться к профессионалам, 
		докторам наук.
        ';
        break;
    case 16:
        $text_mag = 'Чтобы хорошо написать диссертацию, лучше нанять хорошего автора. Наши писатели и исследователи выполнят отличное исследование 
		по любой специальности.
        ';
        break;
    case 17:
        $text_mag = 'Обучение в магистратуре требует недюжих знаний, а написание диссертации - времени. Но если у Вас достаточно средств, можно заказать 
		написание работы у нас.
        ';
        break;
   
}

//Выбор Скидки

$vibor_filial_case = rand(1,31);

switch ($vibor_filial_case) {
    case 1:
        $vibor_filial = 'Мы знаем семь способов сэкономить на написании работы.';
        break;
    case 2:
        $vibor_filial = 'Гибкий подход к клиенту - наше главное правило.';
        break;
    case 3:
        $vibor_filial = 'Поэтапное выполнение материала. Проверка уникальности.';
        break;
    case 4:
        $vibor_filial = 'Срочное написание работы, два месяца гарантии.';
        break;
    case 5:
        $vibor_filial = 'Пять офисов по всей территории России!';
        break;
    case 6:
        $vibor_filial = 'Сделаем точно в срок, 2 месяца гарантии.';
        break;
    case 7:
        $vibor_filial = 'Сеть офисов в Москве и Санкт-Петербурге.';
        break;
    case 8:
        $vibor_filial = 'Филиалы по всей России, офис в Москве.';
        break;
    case 9:
        $vibor_filial = 'Выполняем диссертации по всем предметам!';
        break;
    case 10:
        $vibor_filial = 'За нами Уфа, Новосибирск, Москва, Казань.';
        break;
    case 11:
        $vibor_filial = 'Наши филиалы есть в крупнейших городах РФ.';
        break;
    case 12:
        $vibor_filial = 'Легко сделать заказ в пяти городах России.';
        break;
    case 13:
        $vibor_filial = 'Офисы в Москве и других городах России.';
        break;
    case 14:
        $vibor_filial = 'Приглашаем в наши филиалы в Москве и Уфе.';
        break;
    case 15:
        $vibor_filial = 'Скидки 10-20 процентов при полной оплате.';
        break;
    case 16:
        $vibor_filial = 'Наш автор напишет часть безвозмездно.';
        break;
    case 17:
        $vibor_filial = 'Специальный отдел пресекает плагиат.';
        break;
    case 18:
        $vibor_filial = 'Мы предлагаем пять способов сэкономить.';
        break;
    case 19:
        $vibor_filial = 'Добрый подход к заказчику - наш выбор.';
        break;
    case 20:
        $vibor_filial = 'Выполнение работ по частям. Никакого плагиата.';
        break;
    case 21:
        $vibor_filial = 'Быстрое написание диплома, магистерской.';
        break;
    case 22:
        $vibor_filial = 'Четыре офиса на территории РФ.';
        break;
    case 23:
        $vibor_filial = 'Пришлём точно в установленную дату.';
        break;
    case 24:
        $vibor_filial = 'Офисы в Уфе, Казани и Столице.';
        break;
    case 25:
        $vibor_filial = 'Отделения по всей стране, офис в Столице.';
        break;
    case 26:
        $vibor_filial = 'Делаем диссертации по любым дисциплинам.';
        break;
    case 27:
        $vibor_filial = 'За нами Новосибирск, Уфа, Казань, Москва.';
        break;
    case 28:
        $vibor_filial = 'Наши отделения есть во многих городах РФ.';
        break;
    case 29:
        $vibor_filial = 'Нет проблем сделать заказ в наших офисах.';
        break;
    case 30:
        $vibor_filial = 'Офисы в Столице и других городах России.';
        break;
    case 31:
        $vibor_filial = 'Добро пожаловать в наши российские офисы.';
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
        $rand_nom_text_16 = ' рублей.';
        break;
    case 4:
        $rand_nom_text_16 = '.';
        break;
}

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


$color_rand = rand(0, 9);

$body_2 = '<!DOCTYPE html>
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

$per_str_rep = rand(1, 3);

switch ($per_str_rep){
    case 1: $body_2 = str_replace('х','x',$body_2);
	$body_2 = str_replace('е','e',$body_2);
        break;
    case 2: $body_2 = str_replace('у','y',$body_2);
	$body_2 = str_replace('е','e',$body_2);
        break;
		case 3: $body_2 = str_replace('р','p',$body_2);
	$body_2 = str_replace('е','e',$body_2);
        break;
}
