<?php
session_start();
if (empty($_SESSION['client_email']) or empty($_SESSION['client_pass'])) header("Location:../index.php");



$client_email = $_SESSION['client_email'];
$fp = fopen("clients/" . $client_email . ".txt", "r");
if ($fp) {
    $i = 0;
    while (!feof($fp)) {
        $mytext = fgets($fp, 999);
        if($i ==  23) $_SESSION['balance'] = $mytext;
        if($i ==  24) $_SESSION['balance_date'] = $mytext;
        $i++;
    }
} else {
    session_destroy();
    header("Location:../index.php");
}


fclose($fp);
$client_predoplata = $_SESSION['predoplata'];
$client_pass = $_SESSION['client_pass'];
$client_name = $_SESSION['client_name'];
$client_last_name = $_SESSION['client_last_name'];
$client_otchestvo = $_SESSION['client_otchestvo'];
$client_city = $_SESSION['client_city'];
$client_vuz = $_SESSION['client_vuz'];
$client_fak = $_SESSION['client_fak'];
$client_special = $_SESSION['client_special'];
$opisanie_rab = $_SESSION['opisanie_rab'];
$client_kurs = $_SESSION['client_kurs'];
$zakaz = $_SESSION['zakaz'];
$srok_vipoln = $_SESSION['srok_vipoln'];
$zakaz_date = $_SESSION['zakaz_date'];
$zakaz_akcia = $_SESSION['zakaz_akcia'];
$zakaz_teme = $_SESSION['zakaz_teme'];
$zakaz_predmet = $_SESSION['zakaz_predmet'];
$zakaz_type = $_SESSION['zakaz_type'];
$zakaz_pages = $_SESSION['zakaz_pages'];
$zakaz_unik = $_SESSION['zakaz_unik'];
$zakaz_dopoln= $_SESSION['zakaz_dopoln'];
$zakaz_cherteg= $_SESSION['zakaz_cherteg'];
$zakaz_cena = $_SESSION['zakaz_cena'];
$balance = $_SESSION['balance'];
$balance_date = $_SESSION['balance_date'];
?>



<link href="564395_files/css_kab.css" rel="stylesheet" type="text/css">
<!--[if IE]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="564395_files/css_kab_2.css" rel="stylesheet" type="text/css">
<script async="" src="564395_files/analytics.js"></script>
<script type="text/javascript" async="" src="564395_files/watch.js"></script>
<script async="" src="564395_files/fbevents.js"></script>
<script src="564395_files/js"></script>
<script type="text/javascript" src="564395_files/share.js" charset="windows-1251"></script>