<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 26;
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Авторам</title>

    <meta name="description" content="Авторам">
    <meta name="keywords" content="Авторам">

    <?php
    require("head_1.php");
    ?>
<body>
<?php
require("header.php");
?>
<div style="background: url(/img/leather1.jpg) repeat-x left top; padding-top: 40px;">
    <section class="main">
        <?php
        require("calc2.php");
        ?>
        <div>
            <!-- section of script -->
            <h1>Авторам</h1>
            <p>Обращаем Ваше внимание на то, что после Вашей регистрации нашим специалистам необходимо убедиться в качестве выполняемых Вами работ. Подготовьте, пожалуйста, свою работу, чтобы ускорить процесс регистрации.</p>
            <p>Приглашаем к сотрудничеству в области выполнения дипломных, курсовых, контрольных работ, чертежей, переводов</p>
            <p>В срочном порядке требуются специалисты по следующим дисциплинам:

                информатика<br>
                физика<br>
                химия<br>
                электротехника<br>
                финансовый менеджмент<br>
                логистика<br>
                механика<br>
                электроника<br>
                детали машин<br>
                гидравлика<br>
                сопротивление материалов<br>
                строительство<br>
                ЭММ<br>
                геодезия<br>
                архитектура<br>
                схемотехника<br>
                теплотехника<br>
                автомобильная промышленность<br>
                легкая промышленность<br>
                радиоэлектроника<br>
                судостроение<br>
                MathCAD, MathLab<br>
                Каждый автор, который будет качественно выполнять наши заказы, гарантированно получит достойную оплату труда!<br>
                Если нам удалось заинтересовать вас, то пополнить ряды наших авторов можно, оставив заявку на сайте или прислав письмо по адресу <?php echo $email; ?>.

                Если у вас есть предложения по совершенствованию системы работы с авторами, а также пожелания по оплате труда, мы с удовольствием рассмотрим их! Мы всегда рады взаимовыгодному сотрудничеству!</p>
    </section>
</div>
            <!-- end of script -->

            <section class="offers"><div><a href="aktcii_i_skidki.php"><img src="./index_files/offer1.gif" width="805" height="189" alt=""></a></div></section>
            <?php
            require("responses.php");
            require("payment.php");
            require("footer.php");
            ?>
</body>
</html>