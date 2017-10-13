<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 32;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Авторы</title>

	<meta name="description" content="Для авторов <?php echo $site_name;?>">
	<meta name="keywords" content="Для авторов <?php echo $site_name;?>">

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
<h1>Авторы</h1>
<h2><?php echo $site_name;?> приглашает Вас к сотрудничеству!</h2>
			В любых видах работ и объемах, устраивающих Вас.<br>
			Во время сотрудничества все Ваши требования по соблюдению конфиденциальности,
			если таковые имеются, гарантированно строго выполняются.<br>
			Мы ценим Ваше время и квалификацию, отдаваемые нашим с Вами клиентам,
			и оплачиваем выполненные работы строго согласно договоренности по сумме и срокам.<br>
			Наши менеджеры умны, интеллигентны и обязательны. Мы сотрудничаем с талантливыми профессионалами,
			со многими работаем на протяжении долгих лет. Мы любим общаться с нашими авторами и стараемся,
			чтобы это общение не только приносило деловую пользу, но и доставляло взаимное человеческое удовольствие.<br>
			
<br>
Для начала Вам следует заполнить небольшую анкету.<br>
После получения анкеты мы свяжемся с Вами и обсудим все условия работы.<br><br>

<style>

	form[name=order] { width: 75%; }
	form[name=order] table { width: 100%; }
	form[name=order] table tr td:first-of-type { white-space: nowrap; width: 10%; }
	form[name=order] table td { padding: 10px 20px 10px 0; font-size: 16px; white-space: nowrap; }
	form[name=order] table td input, form table td textarea { width: 100%; font-size: 16px; }
	form[name=order] table td sup { font-size: 10px; color: #b00; }
	form[name=order] table td button { font-size: 20px; padding: 5px 10px; }
	form[name=order] table tr:last-of-type td input { visibility: hidden; width: 30px; }

</style>
<script>

	function checkOrderForm()
	{
		var form = document.forms.order;
		if(form.name.value.split(' ').join('') == '') { alert('Заполните поле «Ваше имя».'); return !!form.name.focus(); }
		if(form.city.value.split(' ').join('') == '') { alert('Заполните поле «Город».'); return !!form.city.focus(); }
		if(form.email.value.split(' ').join('') == '') { alert('Заполните поле «E-mail».'); return !!form.email.focus(); }
		if(form.specialization.value.split(' ').join('') == '') { alert('Выберите специализацию.'); return !!form.specialization.focus(); }
		return true;
	}

</script>
<form action="" name="order" method="post" onsubmit="/*return checkOrderForm();*/" enctype="multipart/form-data"><table>
	<tbody><tr><td>Ваше имя<sup>*</sup>:</td><td><input required="" type="text" name="name" maxlength="128"></td></tr>
	<tr><td>Город<sup>*</sup>:</td><td><input required="" type="text" name="city" maxlength="128"></td></tr>
	<tr><td>Телефон:</td><td><input type="text" name="phone" style="width: 200px;" placeholder="+7 123 456-78-90"></td></tr>
	<tr><td>E-mail<sup>*</sup>:</td><td><input required="" type="text" name="email" maxlength="128"></td></tr>
	<tr><td>Специализация<sup>*</sup>:</td><td><select required="" name="specialization">
		<option></option>
		<option>Гуманитарные работы</option>
		<option>Экономические работы</option>
		<option>Юридические работы</option>
		<option>Педагогика, психология, социология</option>
		<option>Естественно-научные работы</option>
		<option>Языки (русский, иностранные)</option>
		<option>Технические работы</option>
	</select></td></tr>
	<tr><td>Доп. информация:</td><td><textarea rows="3" cols="10" name="info"></textarea></td></tr>
	<tr><td></td><td><sup>*</sup> — обязательные поля<br><br><button>Отправить заявку</button><input type="hidden" name="input49942630ef1e2e51ea73f681d63adb0b" value="filled"><input type="text" name="input0af48efd8b4d4aef5273247519536c1c"><script>window.setTimeout("document.forms.order['input49942630ef1e2e51ea73f681d63adb0b'].value='filled';",2000);</script></td></tr>
</tbody></table></form>		</div>
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