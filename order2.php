<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 42;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


	<title>Расчет стоимости</title>

	<meta name="description" content="Расчет стоимости">
	<meta name="keywords" content="Расчет стоимости">

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

<?php
		//Если форма отправлена
if(isset($_POST['submit'])) {


	//Проверка суммы
	//if(trim($_POST['count_1']) != $_POST['count_2']) {
	//	$hasError = true;
	//}
	//Проверка стоимости от Заказчика
	if(trim($_POST['kli_stoimost']) == '') {
		$kli_stoimost = 0;
	} else {
		$kli_stoimost = trim($_POST['kli_stoimost']);
	}
	//Проверка предоплаты
	if(trim($_POST['predoplata']) == '') {
		$predoplata = 2;
	} else {
		$predoplata = trim($_POST['predoplata']);
	}
	//Срок выполнения
	if(trim($_POST['srok_vip']) == '') {
		$srok_vip= "Произвольный";
	} else {
		$srok_vip= $_POST['srok_vip'];
	}
	//Объем
	if(trim($_POST['objem']) == '') {
		$objem= "Произвольный";
	} else {
		$objem= $_POST['objem'];
	}
	//Уникальность
	if(trim($_POST['unik']) == '') {
		$unik= "Стандартная";
	} else {
		$unik= $_POST['unik'];
	}
	//Проверка тип работы
	if(trim($_POST['work_kind']) == '') {
		$hasError = true;
	} else {
		$work_kind = trim($_POST['work_kind']);
	}
	//Проверка поля email
	if(trim($_POST['email_stud']) == '') {
		$hasError = true;
	} else {
		$email_stud= $_POST['email_stud'];
	}
	if(trim($_POST['name']) == '') {
		$name= $_POST['email_stud'];
	} else {
		$name= $_POST['name'];
	}
	if(trim($_POST['tema']) == '') {
		$hasError = true;
	} else {
		$tema= $_POST['tema'];
		$tema = str_replace('"','', $tema);
		$tema = str_replace('\n',' ', $tema);
	}
	if(trim($_POST['predmet']) == '') {
		$predmet= "Нет";
	} else {
		$predmet= $_POST['predmet'];
	}
	if(trim($_POST['university']) == '') {
		$university= "Нет";
	} else {
		$university= $_POST['university'];
	}
	if(trim($_POST['add_info']) == '') {
		$add_info= "Нет";
	} else {
		$add_info= $_POST['add_info'];
		$add_info = str_replace('"','', $add_info);
		$add_info = str_replace('\n',' ', $add_info);
	}


	//Если ошибок нет, отправить email
	if (!isset($hasError)) {
		//$body = "
		//name: $name \n\n
		//email_stud: $email_stud \n\n
		//work_kind: $work_kind \n\n
		//tema: $tema \n\n
		//predmet : $predmet \n\n
		//university: $university \n\n
		//add_info: $add_info \n\n
		//";
		$body = "
		<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
		Имя заказчика: $name <br>
		Почта заказчика: $email_stud <br>
		Вид работы: $work_kind <br>
		Тема работы: $tema <br>
		Стоимость: $kli_stoimost <br>
		Предоплата: $predoplata <br>
		Предмет : $predmet <br>
		Объем: $objem <br>
		Уникальность: $unik <br>
		Срок выполнения: $srok_vip <br>
		Дополнительная информация: $add_info <br>
		
		<a href=\"http://$main_name/basa_clients.php?name=$name&email_stud=$email_stud&work_kind=$work_kind&tema=$tema&kli_stoimost=$kli_stoimost&predoplata=$predoplata&predmet=$predmet&objem=$objem&unik=$unik&srok_vip=$srok_vip&add_info=$add_info\">Ссылка</a>
		</body>
</html>
		";

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$email. "\r\n" . 'Reply-To: ' . $email_stud;
		$subject = "Письмо от клиента ".$name;

		mail($email2, $subject, $body, $headers);
		$emailSent = true;

	}
	include("win.php");
}

?>
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
