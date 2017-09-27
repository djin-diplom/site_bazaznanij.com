<?php
session_start();

//������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
if (isset($_GET['client_email'])) { $client_email = $_GET['client_email']; if ($client_email == '') { unset($client_email);} }

//������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������
if (isset($_GET['client_pass'])) { $client_pass=$_GET['client_pass']; if ($client_pass =='') { unset($client_pass);} }
    	
if (empty($client_email) or empty($client_pass)) {
    session_destroy();
    header("Location:index.php");
}

$_SESSION['client_email']= $client_email;

    $fp = fopen("kabinet/clients/" . $client_email . ".txt", "r");
    if ($fp) {
        $i = 0;
        while (!feof($fp)) {
            $mytext = fgets($fp, 999);

            switch ($i) {
                case 0:
                    break;
                case 1:
                    $_SESSION['client_pass'] = $mytext;
                    break;
                case 2:
                    $_SESSION['client_name'] = $mytext;
                    break;
                case 3:
                    $_SESSION['client_last_name'] = $mytext;
                    break;
                case 4:
                    $_SESSION['client_otchestvo'] = $mytext;
                    break;
                case 5:
                    $_SESSION['client_city'] = $mytext;
                    break;
                case 6:
                    $_SESSION['client_vuz'] = $mytext;
                    break;
                case 7:
                    $_SESSION['client_fak'] = $mytext;
                    break;
                case 8:
                    $_SESSION['client_special'] = $mytext;
                    break;
                case 9:
                    $_SESSION['opisanie_rab'] = $mytext;
                    break;
                case 10:
                    $_SESSION['client_kurs'] = $mytext;
                    break;
                case 11:
                    $_SESSION['zakaz'] = $mytext;
                    break;
                case 12:
                    $_SESSION['srok_vipoln'] = $mytext;
                    break;
                case 13:
                    $_SESSION['zakaz_date'] = $mytext;
                    break;
                case 14:
                    $_SESSION['zakaz_akcia'] = $mytext;
                    break;
                case 15:
                    $_SESSION['zakaz_teme'] = $mytext;
                    break;
                case 16:
                    $_SESSION['zakaz_predmet'] = $mytext;
                    break;
                case 17:
                    $_SESSION['zakaz_type'] = $mytext;
                    break;
                case 18:
                    $_SESSION['zakaz_unik'] = $mytext;
                    break;
                case 19:
                    $_SESSION['zakaz_pages'] = $mytext;
                    break;
                case 20:
                    $_SESSION['zakaz_dopoln'] = $mytext;
                    break;
                case 21:
                    $_SESSION['zakaz_cherteg'] = $mytext;
                    break;
                case 22:
                    $_SESSION['zakaz_cena'] = $mytext;
                    break;
                case 23:
                    $_SESSION['balance'] = $mytext;
                    break;
                case 24:
                    $_SESSION['balance_date'] = $mytext;
                    break;
                case 25:
                    $_SESSION['predoplata'] = $mytext;
                    break;
            }
            $i++;
        }
        if ((int)$client_pass != (int)$_SESSION['client_pass']) {
            session_destroy();
            header("Location:index.php");
        }

    } else {
        session_destroy();
        header("Location:index.php");
    }

    fclose($fp);
if (empty($_GET['kabinet'])) header("Location:index.php");
else header("Location:kabinet/profile.php");