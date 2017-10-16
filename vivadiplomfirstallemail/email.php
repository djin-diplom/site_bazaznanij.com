<!DOCTYPE html>
<?php
require("../requisites.php");
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');


if(empty($_POST['client_email'])) {
	$client_email = "";
} else {
	$client_email = $_POST['client_email'];
	$fp = fopen("../kabinet/clients/".$client_email.".txt", "w+");
	fwrite($fp, $client_email."\n");
}

	$client_pass = rand(1000000000,9000000000);
fwrite($fp, $client_pass."\n");

if(empty($_POST['client_name'])) {
	$client_name = "Имя";
} else {
	$client_name = $_POST['client_name'];
}
fwrite($fp, $client_name."\n");
	$client_last_name= "Фамилия";
fwrite($fp, $client_last_name."\n");
	$client_otchestvo = "Отчество";
fwrite($fp, $client_otchestvo."\n");
	$client_city = "Город";
fwrite($fp, $client_city ."\n");

if(empty($_POST['client_vuz'])) {
	$client_vuz = "ВУЗ";
} else {
	$client_vuz = $_POST['client_vuz'];
}
fwrite($fp, $client_vuz."\n");

	$client_fak = "Факультет";
fwrite($fp, $client_fak."\n");
	$client_special = "Специальность";
fwrite($fp, $client_special."\n");
	$opisanie_rab = "Описание";
fwrite($fp, $opisanie_rab."\n");
	$client_kurs = 9;
fwrite($fp, $client_kurs."\n");

fclose($fp);

$fp = fopen("index_files/nomer.txt", "r");
if ($fp)
{
	while (!feof($fp))
	{
		$mytext = fgets($fp, 999);
	}
	$zakaz = $mytext + rand(1,5);
}
else {
	$zakaz = 140079;
}

fclose($fp);
$fp = fopen("index_files/nomer.txt", "w+");
$test = fwrite($fp, $zakaz);
fclose($fp);

$client_email = $_POST['client_email'];
$fp = fopen("../kabinet/clients/".$client_email.".txt", "a");
fwrite($fp, $zakaz."\n");

if(empty($_POST['srok_vipoln'])) {
	$srok_vipoln = "";
} else {
	$srok_vipoln = $_POST['srok_vipoln'];
}
fwrite($fp, $srok_vipoln."\n");
	$zakaz_date = date("d.m.y");
fwrite($fp, $zakaz_date."\n");
	$zakaz_akcia = date("j.m.y",strtotime("+15 DAY"));
fwrite($fp, $zakaz_akcia."\n");
if(empty($_POST['zakaz_teme'])) {
	$zakaz_teme = "";
} else {
	$zakaz_teme= $_POST['zakaz_teme'];
}
fwrite($fp, $zakaz_teme."\n");

if(empty($_POST['zakaz_predmet'])) {
	$zakaz_predmet = "";
} else {
	$zakaz_predmet= $_POST['zakaz_predmet'];
}
fwrite($fp, $zakaz_predmet."\n");

if(empty($_POST['zakaz_type'])) {
	$zakaz_type = "";
} else {
	$zakaz_type= $_POST['zakaz_type'];
}
fwrite($fp, $zakaz_type."\n");

if(empty($_POST['zakaz_unik'])) {
	$zakaz_unik = "";
} else {
	$zakaz_unik= $_POST['zakaz_unik'];
}
fwrite($fp, $zakaz_unik."\n");

if(empty($_POST['zakaz_pages'])) {
	$zakaz_pages = "30-40";
} else {
	$zakaz_pages= $_POST['zakaz_pages'];
}
fwrite($fp, $zakaz_pages."\n");

if(empty($_POST['zakaz_dopoln'])) {
	$zakaz_dopoln = "";
} else {
	$zakaz_dopoln= $_POST['zakaz_dopoln'];
}
fwrite($fp, $zakaz_dopoln."\n");
	$zakaz_cherteg = $_POST['zakaz_cherteg'];
fwrite($fp, $zakaz_cherteg."\n");

if(empty($_POST['zakaz_cena'])) {
	$zakaz_cena = "";
} else {
	$zakaz_cena= $_POST['zakaz_cena'];
}
fwrite($fp, $zakaz_cena."\n");

	$balance = 0;
fwrite($fp, $balance."\n");
	$balance_date = date("d.m.y");
fwrite($fp, $balance_date."\n");
$predoplata = $_POST['predoplata'];
fwrite($fp, $predoplata."\n");

fclose($fp);
$url_cabinet = $site_url."check_login.php";
$path_img = $site_url."vivadiplomfirstallemail/";

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
.desaturated { cursor: pointer; filter: grayscale(100%); -webkit-filter: grayscale(100%); filter: gray; filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); }
</style>
</head>

<body>
	

<div style="background-color:#ebeef2;font-family:&#39;Open Sans&#39;,sans-serif;font-size:14px;color:#3b4046;padding-top:20px">
	<table style="width:630px;border:1px solid #e2e5e6;border-spacing:0;font-size:14px;margin:auto;background-color:white" cellpadding="0" cellspacing="0">
		<tbody><tr>
			<td style="border-bottom:1px solid #e2e5e6">
				<table style="width:100%">
					<tbody><tr>
						<td style="padding:15px 25px">
							<a href="<?php echo $site_url; ?>" style="text-decoration:none" target="_blank" data-saferedirecturl="<?php echo $site_url; ?>">
								<img style="margin-bottom:22px" src="<?php echo $path_img; ?>index_files/<?php echo $img_path_2; ?>" alt="<?php echo $site_name; ?>" class="CToWUd">
							</a>
						</td>
						<td style="padding-right:30px">
						</td>
					</tr>
				</tbody>
				</table>
			</td>
		</tr>
		



	<tr>
		<td style="color: green; font-size:21px;text-align:center;padding-top:40px">
			<b>Здравствуйте, <?php echo $client_name; ?>!</b>
		</td>
	</tr>
<tr>
	<td>
		



<table style="text-align:center;word-wrap:break-word;line-height:1.786;font-size:14px;width:630px;border-spacing:0px">
	<tbody><tr style="display:none"><td><img src="<?php echo $path_img; ?>Gmail_files/s_SsbFACralq0JH6SMOgbsd7X2VteuLXDYjkCXmGqBhe3NqAvfdKDaq_r5b8yNqWMVgQfFXlxzFmhh4n5ZVf4Fd854pwbu-eo_cMRmVUFPKXPD3T9lkCAs7tauhkH84Mg1tDYy_59l25MYhyxXYBawSrP4olw8OvZYDpUg=s0-d-e1-ft" width="1" height="1" style="opacity:0" class="CToWUd"></td></tr>
	<tr>
		<td style="padding:20px 15px 30px">
			Мы оценили стоимость выполнения Вашей работы:<br>
			<a style="text-decoration:none;color:#5298ef" href="<?php echo $url_cabinet."?client_email=".$client_email."&"."client_pass=".$client_pass."&kabinet=1"; ?>" target="_blank" data-saferedirecturl="<?php echo $url_cabinet; ?>"><?php echo $zakaz_teme; ?></a><br>
			Номер заказа <?php echo $zakaz; ?><br>
			Логин для входа в Личный кабинет (нажмите на ссылку): <a style="text-decoration:none;color:#5298ef" href="<?php echo $url_cabinet."?client_email=".$client_email."&"."client_pass=".$client_pass."&kabinet=1"; ?>" target="_blank" data-saferedirecturl="<?php echo $url_cabinet; ?>"><?php echo $client_email; ?></a><br>
			Запомните Ваш пароль: <?php echo $client_pass; ?><br>
			<?php switch ($predoplata) {
				case 0: echo "<span style='color: forestgreen;'>Ждем методичку, чтобы начать выполнение работы без предоплаты!</span><br>
Акция: стоимость можно снизить на 20%!<br>";
					break;
				case 1: echo "<span style='color: forestgreen;'>Ждем методичку и предоплату 50% (".((int)($zakaz_cena*0.9*0.5))." руб.), чтобы начать работу!</span><br>
				Акция: стоимость можно снизить на 10%!<br>";
					break;
				case 2: echo "<span style='color: forestgreen;'>Ждем методичку и оплату (".((int)($zakaz_cena*0.8))." руб.), чтобы начать работу!</span><br>";
					break;
			}?>
			Пришлём бесплатно примеры работ вашего автора.<br>
		</td>
	</tr>
	<tr>
		<td style="padding:0px">
			<table style="width:100%;height:100px;text-align:center;border-collapse:separate;background-color: #F0F0F0;line-height:normal">
				<tbody>
				<tr>
					<img alt="Стоимость и срок" src="<?php echo $path_img; ?>index_files/unnamed_2.png">
				</tr>
				<tr>
					<td style="width:50%">
						<div style="color:#3b4046;font-size:14px;font-weight:bold;padding-top:0px">
							СТОИМОСТЬ РАБОТЫ
						</div>
					</td>
					<td style="width:50%">
						<div style="color:#3b4046;font-size:14px;font-weight:bold;padding-top:0px">СРОК ВЫПОЛНЕНИЯ</div>
					</td>
				</tr>
				<tr>
					<td style="width:50%">
							<div <?php if( $predoplata == 0) echo "style=\"color:green;font-size:30px;font-weight:bold\"";
							else echo "style=\"color:#98a4ab;text-decoration:line-through;font-size:22px\"";?>
							><?php echo (int)$zakaz_cena; ?> руб.</div>
						<div style="font-size:10px; padding:0px 0px 3px">(без скидки и предоплаты)</div>
							<div <?php if( $predoplata == 1) echo "style=\"color:green;font-size:30px;font-weight:bold\"";
								else echo "style=\"color:#98a4ab;text-decoration:line-through;font-size:22px\"";?>
							><?php echo (int)($zakaz_cena*0.9); ?> руб.</div>
						<div style="font-size:10px; padding:0px 0px 3px">(скидка 10% при предоплате 50%)</div>
						<div <?php if( $predoplata == 2) echo "style=\"color:green;font-size:30px;font-weight:bold\"";
						else echo "style=\"color:#98a4ab;text-decoration:line-through;font-size:22px\"";?>
						><?php echo (int)($zakaz_cena*0.8); ?> руб.</div>
							<div style="font-size:10px; padding:0px 0px 3px">(скидка 20% при полной предоплате)</div>
					</td>
					<td style="width:50%">
							<div style="font-size:70px;font-weight:bold;color:black;line-height:1"><?php echo $srok_vipoln; ?></div>
							<div style="font-size:24px">сут.</div>

						<div style="font-size:14px;padding:5px 0px 22px">с момента оплаты</div>
					</td>
				</tr>
			</tbody>
			</table>
		</td>
	</tr>
	<tr>
		<td style="padding:40px">
				<a href="<?php echo $site_url; ?>dogovor.php" style="text-decoration:none;color:white;background-color:green;font-weight:bold;border-radius:4px;padding:13px 21px;letter-spacing:1px;font-size:15px" target="_blank" >
					Условия работы
				</a>
		</td>
	</tr>
		<tr>
			<td>
					Мы работаем официально по договору публичной оферты.<br>
					Корректировки по замечаниям руководителя бесплатны.<br>
					Мы будем выполнять работу по Вашим указаниям.<br>
					Гарантия на работу три месяца.<br>

<a href="<?php echo $site_url; ?>oplata.php"><img class="desaturated" src="<?php echo $path_img; ?>index_files/pay3.gif" width="85" height="37" alt="">
<img class="desaturated" src="<?php echo $path_img; ?>index_files/pay6.gif" width="135" height="37" alt="">
<img class="desaturated" src="<?php echo $path_img; ?>index_files/pay5.gif" width="76" height="37" alt=""></a><br>
				В личном кабинете Вы можете посмотреть актуальную информацию по
				своему заказу.
			</td>
		</tr>
</tbody>
</table>



	</td>
</tr>



<tr>
	<td>
		<table style="width:100%;margin:10px 0">
			<tbody><tr>
				<td style="padding:11px 26px;border-right:1px solid #e2e5e6">
					<img style="vertical-align:middle;margin-right:3px" src="<?php echo $path_img; ?>Gmail_files/555" alt="Вопрос" class="CToWUd">
					<a style="font-size:13px;vertical-align:middle;color:#5298ef;text-decoration:none" href="mailto:<?php echo $email2; ?>" target="_blank" >Задать вопрос менеджеру</a>
				</td>
				<td style="padding:11px 26px;border-right:1px solid #e2e5e6">
					<img style="vertical-align:middle;margin-right:3px" src="<?php echo $path_img; ?>Gmail_files/444" alt="К заказу" class="CToWUd">
					<a style="font-size:13px;vertical-align:middle;color:#5298ef;text-decoration:none" href="<?php echo $url_cabinet."?client_email=".$client_email."&"."client_pass=".$client_pass."&kabinet=1"; ?>" target="_blank" >Перейти к заказу</a>
				</td>
				<td style="padding:11px 26px">
					<img style="vertical-align:middle;margin-right:3px" src="<?php echo $path_img; ?>Gmail_files/111" alt="Заказать еще" class="CToWUd">
					<a style="font-size:13px;vertical-align:middle;color:#5298ef;text-decoration:none" href="<?php echo $site_url; ?>order.php" target="_blank" >Заказать еще</a>
				</td>
			</tr>
		</tbody></table>
	</td>
</tr>
	<tr>
		<td>
			
	

<table style="padding:0 30px;width:100%;text-align:center;line-height:1.8">
	<tbody><tr height="40px;"></tr>
	<tr>
		<td>
			<img src="<?php echo $path_img; ?>Gmail_files/888" alt="Отзывы" class="CToWUd">
			<div>
				<b>Отзывы</b>
			</div>
			<div style="font-size:14px">
				Что пишут клиенты о нашей работе <br>
				<a style="color:#5298ef;text-decoration:none" href="<?php echo $site_url; ?>consult.php" target="_blank" >Читать отзывы</a>
			</div>t
		</td>
		<td>
			<img src="<?php echo $path_img; ?>Gmail_files/999" alt="Вопросы" class="CToWUd">
			<div>
				<b>Есть вопросы?</b>
			</div>
			<div style="font-size:14px">
				Поможем решить любую проблему <br>
				<a style="color:#5298ef;text-decoration:none" href="mailto:<?php echo $email2; ?>" target="_blank" >Задать вопрос</a>
			</div>
		</td>
	</tr>
	<tr style="height:40px"></tr>
</tbody>
</table>

		</td>
	</tr>


	<tr>
		<td style="font-size:18px;text-align:center;padding:30px;background-color:#f6f7f8">
			Этапы вашего заказа
		</td>
	</tr>
	<tr>
		<td style="text-align:center;padding-bottom:35px;background-color:#f6f7f8">
			<img src="<?php echo $path_img; ?>Gmail_files/777" alt="Прогрес" class="CToWUd">
		</td>
	</tr>

	<tr>
		<td>
			
	

<table style="text-align:center;font-size:14px;padding:0 30px;width:100%">
	<tbody><tr style="height:30px"></tr>
	<tr>
		<td>
			<img src="<?php echo $path_img; ?>Gmail_files/222" alt="Профиль" class="CToWUd">
			<div style="margin:20px 0 10px 0">
				<b>Ваш профиль</b>
			</div>
			<div style="font-size:12px;line-height:1.3">
				Чем больше у нас <br> информации, тем легче <br> подобрать для Вас наиболее <br> подходящего автора
			</div>
			<a href="<?php echo $url_cabinet."?client_email=".$client_email."&"."client_pass=".$client_pass."&kabinet=1"; ?>" style="text-decoration:none;line-height:2.5" target="_blank" >
				Заполнить профиль
			</a>
		</td>
		<td>
			<img src="<?php echo $path_img; ?>Gmail_files/333" alt="Напоминание" class="CToWUd">
			<div style="margin:20px 0 10px 0">
				<b>Напоминание</b>
			</div>
			<div style="font-size:12px;line-height:1.3">
				Укажите дату Вашей <br> следующей учебной работы <br> и мы подарим на нее <br> персональную скидку
			</div>
			<a href="mailto:<?php echo $email2; ?>" style="text-decoration:none;line-height:2.5" target="_blank" >
				Заказать напоминание
			</a>
		</td>
		<td>
			<img src="<?php echo $path_img; ?>Gmail_files/666" alt="Инструкция" class="CToWUd">
			<div style="margin:20px 0 10px 0">
				<b>Инструкция</b>
			</div>
			<div style="font-size:12px;line-height:1.3">
				Ознакомьтесь с инструкцией, <br> чтобы Ваша работа в личном <br> кабинете проходила быстрее <br> и эффективнее
			</div>
			<a href="<?php echo $site_url; ?>poriadok_zakaza.php" style="text-decoration:none;line-height:2.5" target="_blank" >
				Посмотреть инструкцию
			</a>
		</td>
	</tr>
	<tr style="height:30px"></tr>
</tbody>
</table>

		</td>
	</tr>




			<tr>
				<td>
					<table style="width:630px;height:129px;background-color:#5c9ff3">
						<tbody><tr>
							<td style="width:209px;height:129px;padding:0;overflow:visible">
								<a href="<?php echo $site_url; ?>aktcii_i_skidki.php" class="m_3689207491995373867gp-button" target="_blank" ">
									<img alt="android phones" src="<?php echo $path_img; ?>index_files/offer1.jpg" class="CToWUd" width: 400;>
								</a>
							</td>
							
						</tr>
					</tbody></table>
				</td>
			</tr>
	</tbody>
	</table>
	<table style="width:630px;border-spacing:0;font-size:14px;margin:auto" cellpadding="0" cellspacing="0">
		<tbody><tr>
			<td style="color:#98a4ab;text-align:center;padding-bottom:5px;padding-top:13px">
				С Уважением, команда Учебного центра "<?php echo $site_name; ?>"
			</td>
		<tr>
		</tr>
			<td style="color:#98a4ab;text-align:center;padding-bottom:5px;padding-top:5px;font-size:8px">
				Если вы хотите отписать от рассылки, перейдите сюда <a href="<?php echo $site_url; ?>otpiska.php" target="_blank">Отписаться</a>
			</td>
		<tr>
		</tr>
			<td style="color:#98a4ab;text-align:center;padding:5px 100px;font-size:13px">
				Все интересующие Вас вопросы можно задать в ответе на это письмо!<br>
				Далее почтовая система (возможно) приводит текстовый вид нашего сайта <?php echo $site_url; ?>
			</td>
		</tr>
	</tbody>
	</table>
</div>
</body>
</html>