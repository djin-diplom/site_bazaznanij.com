<br>
<h4>Пример диплома </h4>
<?php
$f = fopen("texts2/new_" . $count_text, "r");
$col_simv = 0;
while (!feof($f)) {
    $fgets = fgets($f);
    $col = iconv_strlen($fgets);
    $col_simv = $col_simv + $col;
    if ($col > 2) {
        echo $fgets . "<br /><br />";

    }

}
fclose($f);
$count_text = $count_text + 1;
?>
</div>