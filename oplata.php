<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 40;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Оплата</title>

	<meta name="description" content="Оплата">
	<meta name="keywords" content="Оплата">

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

<h1>Оплата</h1><div><b><span style="font-size: 16px;">Оплата наличными в офисе</span></b><br></div><div>Самый удобный и надёжный способ оплаты - это оплата наличными в офисе нашей компании.</div><div><br></div><div><b><span style="font-size: 16px;">Оплата с помощью Яндекс.Деньги</span></b><br></div><div>Платёжная система Яндекс.Деньги -- это самая распространённая в России система электронных платежей. Оплату можно произвести через интернет с Вашего кошелька, либо через терминалы оплаты, которые располагаются повсеместно. Самое быстрое и удобное пополнение без комиссии в магазинах "Евросеть".<br></div><div><br></div><div><b><span style="font-size: 16px;">Оплата с помощью WebMoney</span></b><br></div><div>WebMoney — распространённая система электронных платежей, позволяющая легко и безопасно производить расчеты через интернет. Оплату можно произвести с Вашего кошелька, либо через терминалы оплаты.</div><div><br></div><div></div><div><b><span style="font-size: 16px;">Оплата с помощью системы QIWI кошелек</span></b><br></div><div>Мы предоставим реквизиты для оплаты счета по запросу.</div><script type="text/javascript">(function(window){ window.price_context={ab:2, partnerId: 393432}; })(Function("return this")());</script>		</div>
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