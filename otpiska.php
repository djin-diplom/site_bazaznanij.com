<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 44;
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Отписаться от рассылок</title>

    <meta name="description" content="Отписаться от рассылок">
    <meta name="keywords" content="Отписаться от рассылок">

    <?php
    require("head_1.php");
    ?>
<body>
<?php
require("header.php");
?>

<!-- section of script -->


<div style="background: url(/img/leather1.jpg) repeat-x left top; padding-top: 40px;">
    <section class="main">
        <?php
        require("calc2.php");
        ?>
        <div>

            <h1>Вы успешно отписались от рассылок!</h1>		</div>
    </section>
</div>


<section class="offers"><div><a href="aktcii_i_skidki.php"><img src="./index_files/offer1.gif" width="805" height="189" alt=""></a></div></section>
<?php
require("responses.php");
require("payment.php");
require("footer.php");
?>
</body>
</html>