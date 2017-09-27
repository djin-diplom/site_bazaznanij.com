<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 9;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>Акции и скидки</title>

	<meta name="description" content="Акции и скидки">
	<meta name="keywords" content="Акции и скидки">

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
		<div>
			<button class="calc2" onclick="self.location=&#39;/order/&#39;;">Рассчитать стоимость</button>

			<section class="blocks2" style="margin-top: 90px;">
				<?php
				require("blocks.php");
				?>
			</section>
			
		</div>
		<div>

<h1>Акции и скидки</h1><div class="dashedborder"><span style="font-size: 20px;">При заказе любой дипломной работы речь для защиты в подарок.</span><br><br>
<img src="./aktcii_i_skidki_files/s1.gif" width="605" height="150" alt=""></div>
<div class="dashedborder"><span style="font-size: 20px;">При заказе дипломной работы получите презентацию + речь для защиты в подарок при 100% оплате работы.</span><br><br>
<img src="./aktcii_i_skidki_files/s2.gif" width="635" height="188" alt=""></div>
<div class="backgrounded"><span style="font-size: 20px;">Подробности уточняйте у менеджеров по электронной почте.</span></div>		</div>
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