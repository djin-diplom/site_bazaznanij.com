<?php
$client_email = "sdfsdf@dfg.com".".txt";
$fp = fopen("clients/".$client_email, "a"); // Открываем файл в режиме чтения
if ($fp)
{
    while (!feof($fp))
    {
        $mytext = fgets($fp, 999);
        echo $mytext."<br />";
    }
}
else echo "Ошибка при открытии файла";
fclose($fp);
