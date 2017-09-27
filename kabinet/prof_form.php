<?php
require ("kab_head.php");
?>
<?php

$fp = file("clients/".$client_email.".txt");
$fp[2] = $_POST['client_name']."\n";
$_SESSION['client_name'] = $_POST['client_name'];
$fp[3] = $_POST['client_last_name']."\n";
$_SESSION['client_last_name'] = $_POST['client_last_name'];
$fp[4] = $_POST['client_otchestvo']."\n";
$_SESSION['client_otchestvo'] = $_POST['client_otchestvo'];
$fp[5] = $_POST['client_city']."\n";
$_SESSION['client_city'] = $_POST['client_city'];
$fp[6] = $_POST['client_vuz']."\n";
$_SESSION['client_vuz'] = $_POST['client_vuz'];
$fp[7] = $_POST['client_fak']."\n";
$_SESSION['client_fak'] = $_POST['client_fak'];
$fp[8] = $_POST['client_special']."\n";
$_SESSION['client_special'] = $_POST['client_special'];
$fp[10] = $_POST['client_kurs']."\n";
$_SESSION['client_kurs'] = $_POST['client_kurs'];

$fp_2 = fopen("clients/".$client_email.".txt", "w");
if ($fp_2) {
    for ($i = 0; $i < sizeof($fp); $i++) {
        fwrite($fp_2, $fp[$i]);
    }
} else header("Location:profile.php");

fclose($fp_2);

echo header("Location:profile.php");