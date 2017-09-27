<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<article>
    <?php
    //echo $_POST['panel_email'];
    if (empty($_POST['panel_email'])) {
        $dir = opendir('clients');
        $count_money =0;
        $count_money_potential =0;
        echo "<table>";
        while (false !== ($file = readdir($dir))) {
            ?>
            <tr>
            <form action="adm_panel.php" method="post">
                <?php
                if ($file == '.' || $file == '..') {
                    continue;
                }
                $f = fopen("clients/" . $file, "r");
                $fgets_email = fgets($f);
                echo "<td>".$fgets_email."</td>";
                $i=1;
            while(!feof($f)) {
                $fgets = fgets($f);
                if($i == 12 or $i == 23 or $i == 24 or $i == 2){
                    echo "<td>".$fgets."</td>";
                }
                if($i == 23){
                    $count_money = $count_money + $fgets;
                    $fgets_money = $fgets;
                }
                if($i == 22){
                    $count_money_potential = $count_money_potential + $fgets;
                    $fgets_money_potential = (int)$fgets*0.8;
                    echo "<td>".$fgets_money_potential."</td>";
                }
                $i++;
            }
                fclose($f);
                ?>
                <input name="panel_email" value="<?php echo $fgets_email; ?>" style="display: none;">
                <td><button type="submit" name="submit" style="font-size: 18px; margin: 15px 0 0; background:
                <?php if ($fgets_money == 0): ?> red; <?php elseif ((int)$fgets_money < (int)$fgets_money_potential): ?> #590;
            <?php else :?> yellow; <?php endif ?>">Открыть
                    личное дело
                </button></td>

            </form>
            </tr>
            <?php
        }
        echo "</table>";
        echo "<br>Выплаты Заказчиков всего: ".$count_money;
        echo "<br>Потенциальные выплаты Заказчиков всего: ".$count_money_potential;
    } elseif (empty($_POST['panel_0'])) {
        ?>
        <form action="adm_panel.php" method="post">
            <input name="panel_email" value="temp" style="display: none;">
        <?php
        $f = fopen("clients/" . $_POST['panel_email'].".txt", "r");
        $i=0;
        while(!feof($f)) {
            $fgets = fgets($f);
        ?>
            <input type="text" name="panel_<?php echo $i; ?>" value="<?php echo $fgets; ?>" style="width: 500px;"><br>
         <?php
            $i++;
        }
        fclose($f);
        ?>
            <button type="submit" name="submit" style="font-size: 18px; margin: 15px 0 0; background: #590;">
                Сохранить данные
            </button>
        </form>
</article>
    <?php
    } else {
        $f_2 = fopen("clients/" . $_POST['panel_0'].".txt", "w");
        for($i=0;isset($_POST['panel_'.$i]);$i++){
            if ($i == 0)  fwrite($f_2, $_POST['panel_'.$i]);
            else fwrite($f_2, "\n".$_POST['panel_'.$i]);
        }
        fclose($f_2);
        header("Location:adm_panel.php");
    }
    ?>
</body>
</html>