<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 35;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	

	<title>Контакты</title>

	<meta name="description" content="Контакты <?php echo $site_name;?>">
	<meta name="keywords" content="Контакты <?php echo $site_name;?>">

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

<h1>Контакты</h1>

<h3><span style="color: maroon;">Электрoнная почта для партнерoв <?php echo $site_name;?></span></h3><p></p><p><u><span style="color: blue;"><?php echo $email; ?></span></u><br><br><u><span style="color: blue;"><?php echo $email3; ?></span></u><br><br>
<h3><span style="color: maroon;">Электрoнная почта для заказчиков (присылайте тему, oбъем, предмeт рабoты)</span></h3><span style="color: blue;"><?php echo $email2; ?></span><br><br>

</p><h3><span style="color: maroon;">Часы работы</span></h3><p><?php echo $vremia_raboti; ?></p><br>

			<!-- </p><h3><span style="color: maroon;">Телефоны для партнеров</span></h3><p><?php //echo $site_phone; ?></p><br> -->

<h3><span style="color: maroon;">Расположение офиса <?php echo $site_name;?></span></h3>Адрес - <?php echo $adres; ?>
			<?php if (empty($town)) : ?>
			<br>Мы нахoдимся в самом центре горoда - недалекo от метрo.<div>При себе необходимо
				иметь дoкумент, в бизнес-цeнтрe действуeт прoпускной рeжим.<br>
				<?php endif ?>
<br>
<?php echo $url_adres_yandex_frame; ?>
				<?php if (empty($town)) : ?>
<div class="marked">Фотографии бизнес-центра и офиса</div>

<a href="index_files/2.jpg" onclick="return showImage(&#39;./index_files/2.jpg&#39;);">
	<dfn title="index_files/2.jpg"></dfn><img src="./index_files/2.jpg" width="140" height="140" alt="">
</a>&nbsp;<a href="./index_files/3.jpg" onclick="return showImage(&#39;./index_files/3.jpg&#39;);">
					<dfn title="./index_files/3.jpg"></dfn><img src="./index_files/3.jpg" width="140" height="140" alt="">
				</a>&nbsp;
				<a href="./index_files/4.jpg" onclick="return showImage(&#39;./index_files/4.jpg&#39;);">
					<dfn title="./index_files/4.jpg"></dfn><img src="./index_files/4.jpg" width="140" height="140" alt=""></a>
			</div>
		<?php endif ?>
		</div>

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