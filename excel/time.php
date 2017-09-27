<html>
<head>
</head>
<body>
<?php
$filename = $_GET['filename'];
$i = $_GET['nomer'];
echo "Файл ".$filename."<br>";
echo "Номер ".$i;
?>
<p>Отсчет времени до следующей отправки письма.</p>
<p>Отправлено письмо № <?php echo $i;?>.</p>
<script>
    function func() {
        return location.href = "send_email.php?nomer=" + <?php echo $i; ?> + "&filename=" + "<?php echo $filename; ?>";
    }
    setTimeout(func, 1000);
</script>

</body>
</html>