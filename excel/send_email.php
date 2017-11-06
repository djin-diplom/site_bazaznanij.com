<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
require("../requisites_2.php");
set_time_limit(0);
ob_implicit_flush();
error_reporting(E_ALL);
require_once ("sender.php");

$filename = $_GET['filename'];
function readExelFile($filepath){
    require_once ("Classes/PHPExcel.php");
    $ar=array();
    $inputFileType = PHPExcel_IOFactory::identify($filepath);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($filepath);
    $ar = $objPHPExcel->getActiveSheet()->toArray();
    return $ar;
}


$file_path_excel = "files/".$filename;

$ar=readExelFile($file_path_excel);
$i = (int)$_GET['nomer'];

$count = count($ar);


if ( (int)$i >= (int)$count) {
    header("Location: log.txt");
} else {
    $ar_colls = $ar[$i];
    $j = $i % 12;
    switch ($j) {
        case 0:
            $email = $email_1;
            break;
        case 1:
            $email = $email_2;
            break;
        case 2:
            $email = $email_3;
            break;
        case 3:
            $email = $email_4;
            break;
        case 4:
            $email = $email_5;
            break;
        case 5:
            $email = $email_6;
            break;
        case 6:
            $email = $email_7;
            break;
        case 7:
            $email = $email_8;
            break;
        case 8:
            $email = $email_9;
            break;
        case 9:
            $email = $email_10;
            break;
        case 10:
            $email = $email_11;
            break;
        case 11:
            $email = $email_12;
            break;
    }
    $email_client = $ar_colls[0];
    if (strlen($email_client) > 5) {
        $name = $ar_colls[1];
        $vid_rab = $ar_colls[2];
        $pay = $ar_colls[3];
        $predmet = $ar_colls[4];
        echo "Посылаем " . $email_client . "<br>";

        if ($vid_rab == "no") {

            if ($pay == "kur") {

                $sub_vid_rab = rand(1, 11);

                switch ($sub_vid_rab) {

                    case 1:
                        $vid_rab = ' Курсовой ';
                        break;
                    case 2:
                        $vid_rab = ' Семестровые-курсовые ';
                        break;
                    case 3:
                        $vid_rab = ' Курсовой-семестровая ';
                        break;
                    case 4:
                        $vid_rab = ' Семестровая-курсовые ';
                        break;
                    case 5:
                        $vid_rab = ' Семестровая-курсовая ';
                        break;
                    case 6:
                        $vid_rab = ' Семестровая, курсовая работа ';
                        break;
                    case 7:
                        $vid_rab = ' Курсовая и семестровая ';
                        break;
                    case 8:
                        $vid_rab = ' Семестровая ';
                        break;
                    case 9:
                        $vid_rab = ' Семестровая работа ';
                        break;
                    case 10:
                        $vid_rab = ' Курсовая ';
                        break;
                    case 11:
                        $vid_rab = ' Курсовая работа ';
                        break;
                }
                $rand_nach_mla_mla = rand(20, 35) * 100;

                $pay = $rand_nach_mla_mla;


            } else {

                $sub_vid_rab = rand(1, 11);

                switch ($sub_vid_rab) {

                    case 1:
                        $vid_rab = ' Дипломная работа ';
                        break;
                    case 2:
                        $vid_rab = ' Дипломные ';
                        break;
                    case 3:
                        $vid_rab = ' Диплом-магистерская ';
                        break;
                    case 4:
                        $vid_rab = ' Диссертации-Дипломы ';
                        break;
                    case 5:
                        $vid_rab = ' Магистерская-дипломная ';
                        break;
                    case 6:
                        $vid_rab = ' Выпускная работа ';
                        break;
                    case 7:
                        $vid_rab = ' Диссертации и ВКР ';
                        break;
                    case 8:
                        $vid_rab = ' ВКР ';
                        break;
                    case 9:
                        $vid_rab = ' Выпускная работа ';
                        break;
                    case 10:
                        $vid_rab = ' Дипломная ';
                        break;
                    case 11:
                        $vid_rab = ' Дипломная работа ';
                        break;
                }
                $rand_nach_mla_mla = rand(30, 45) * 100;

                $pay = $rand_nach_mla_mla;
            }
        }



        require("../email/build_2.php");

        $vid_rab = rand_podstav_smv($vid_rab);
        $name = rand_podstav_smv($name);


        $body = $body_2;

        $sub_1 = rand(1,2);

    switch ($sub_1) {

        case 1:
            $sub_1_text = ' по себестоимости ';
            break;
        case 2:
            $sub_1_text = ' без накруток за ';
            break;
        case 3:
            $sub_1_text = ' в точности за ';
            break;
        case 4:
            $sub_1_text = ' с ценой ';
            break;
        case 5:
            $sub_1_text = ' за цену ';
            break;
        case 6:
            $sub_1_text = ' по стоимости ';
            break;
        case 7:
            $sub_1_text = ' в срок за ';
            break;
        case 8:
            $sub_1_text = ' с гарантией за ';
            break;
        case 9:
            $sub_1_text = ' со стоимостью ';
            break;
        case 10:
            $sub_1_text = ' по договору за ';
            break;
    }
        $sub_1_text = rand_podstav_smv($sub_1_text);

        $sub_2 = rand(1,2);

    switch ($sub_2) {
        case 1:
            $sub_2_text = ' Мы убрали предоплату после праздников!';//' Нет аванса';
            break;
        case 2:
            $sub_2_text = ' Мы удалили предоплаты - праздники продолжаются!';//' Без аванса';
            break;
        case 3:
            $sub_2_text = ' Можно заказать без предварительной оплаты';//' Без предоплаты';
            break;
        case 4:
            $sub_2_text = ' Предоплата отменена!';//' Нет предоплаты';
            break;
        case 5:
            $sub_2_text = ' План-введение до оплаты!';//' Никаких предоплат';
            break;
        case 6:
            $sub_2_text = ' План бесплатно!';
            break;
        case 7:
            $sub_2_text = ' Введение даром!';
            break;
        case 8:
            $sub_2_text = ' Подарим часть работы!';
            break;
        case 9:
            $sub_2_text = ' Введение бесплатно!';
            break;
        case 10:
            $sub_2_text = ' План даром!';
            break;
    }

        $sub_2_text = rand_podstav_smv($sub_2_text);

        if ($predmet != '') $predmet = $predmet.'.';

        $dobroe_text = rand_podstav_smv('С добрым утром, ');

        //$subject =  $dobroe_text. $name . ". " . $vid_rab . $sub_1_text . $pay . ". ".$predmet. $sub_2_text;
        $subject =    $name.". ".$vid_rab . $sub_1_text . $pay . ". ".$predmet. $sub_2_text;

        $sender = new sender($email, $site_name, $subject, '', $password);

        $message_text = $body;

        $message_data = array(
            'to' => $email_client,//Адрес студента
            'to_name' => $name,//Имя студента
            'title' => $sender->mail_content['title'],
            'text' => $message_text,
            'alt_text' => strip_tags($message_text)
        );

        $mailSend = $sender->sendMail($sender->smtp_data, $message_data);

        if ($mailSend == 0) {
            echo "Отправка удалась!<br><br><br><br><br>";
        } else {
            echo "Ошибка при отправке :(";
        }

        unset($sender);
        $i++;
        $f = fopen('log.txt', "w");
        fwrite($f, $i . "\n");
        fclose($f);
        //sleep(9);
        //header("Location: time.php?nomer=" . $i . "&filename=" . $filename);
        ?>
        <script type="text/javascript">
            function func() {
                return location.href = "time.php?nomer=" + <?php echo $i; ?> + "&filename=" + "<?php echo $filename; ?>";
            }
            setTimeout(func, 19000);
        </script>
        <?php
} else {
        $i++;
        $f = fopen('log.txt', "w");
        fwrite($f, $i . "\n");
        fclose($f);
        //header("Location: time.php?nomer=" . $i . "&filename=" . $filename);
        ?>
        <script type="text/javascript">
            function func() {
                return location.href = "time.php?nomer=" + <?php echo $i; ?> + "&filename=" + "<?php echo $filename; ?>";
            }
            setTimeout(func, 1000);
        </script>
        <?php
    }
}

?>
</body>
</html>
