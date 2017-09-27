<?php
require("../requisites.php");
?>

<html>
<head>
    <title>Результат загрузки файла</title>
</head>
<body>
<?php
if($_FILES["filename"]["size"] > 1024*3*1024)
{
    echo ("Размер файла превышает три мегабайта");
    exit;
}
// Проверяем загружен ли файл
if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
{
    // Если файл загружен успешно, перемещаем его
    // из временной директории в конечную
    move_uploaded_file($_FILES["filename"]["tmp_name"], "../excel/files/".$_FILES["filename"]["name"]);
    Echo "Файл excel успешно загружен!<br>";
    $name_file = $_FILES["filename"]["name"];
    if($_FILES["filename"]["size"] > 1024*3*1024)
    {
        echo ("Размер файла превышает три мегабайта");
        exit;
    }
        ?>
        <form action="send_email_2.php" method="get">
            <input type="hidden" name="filename" value="<?php echo $name_file; ?>"><br>
            <input type="hidden" name="filename_html" value="<?php echo $name_file_html; ?>"><br>
            <input type="hidden" name="nomer" value="0"><br>
            <input type="submit" value="Перейти"><br>
        </form>
<?php
} else {
    ?>
    <form action="send_email_2.php" method="get">
        excel:
            <input type="text" name="filename" ><br>
            <input type="submit" value="Перейти"><br>
        </form>
    <?php
}
?>
</body>
</html>