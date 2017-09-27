<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 6;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Отзывы страница 6</title>

	<meta name="description" content="Отзывы страница 6">
	<meta name="keywords" content="Отзывы страница 6">

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

<h1>Отзывы <?php echo $main_name; ?> за последние годы</h1>
			
			<style>

	/*
	div.responses div.one { padding: 20px 0; border-bottom: 1px solid #ddd; }
	div.responses div.one > img { float: left; }
	div.responses div.one:first-of-type { padding: 30px 0 20px; }
	div.responses div.one:last-of-type { padding: 20px 0; border-bottom: none; }
	div.responses div.one div.caption { text-transform: uppercase; margin-bottom: 10px; }
	div.responses div.one div.caption i { text-transform: none; color: #666; padding-left: 10px; }
	*/
	
	
	div.responses div.one { display: table; margin-top: 30px; }
	div.responses div.one > div { display: table-cell; vertical-align: top; }
	div.responses div.one > div.left { width: 45px; }
	div.responses div.one > div.rite > div { background: rgba(196,85,39,0.1); box-shadow: 0 1px 0 rgba(196,85,39,0.25); border-radius: 5px; padding: 5px 10px; }
	div.responses div.one > div.rite > span { position: absolute; margin: 10px 0 0 -16px; border-color: transparent rgba(196,85,39,0.1) transparent transparent; border-style: solid; border-width: 8px; width: 0; height: 0; }
	div.responses div.one > div.rite > div > div.caption { text-shadow: 0 1px 0 white; margin-bottom: 5px; padding-bottom: 5px; border-bottom: 1px dotted rgba(196,85,39,0.5);; }
	div.responses div.one > div.rite > div > div.caption i { font-size: 14px; color: #666; padding-left: 5px; }
	div.responses div.one > div.rite > div > div.text { font-size: 14px; }
	
	
</style>
			<?php
			if(!empty($_GET['add']))
			{ if (!empty($_SESSION['client_name'])) {
			?>
			<div id="request_div">
				<form id="request_form" method="post" enctype="multipart/form-data" action="consult.php">
					<div style="display:none"><input type="hidden" name="csrfmiddlewaretoken"
													 value="oBlyEDpYaBC7PNlqaGEbTOT3xFrlrCTL"></div>
					<table class="order">
						<tbody>
						<?php echo $_SESSION['client_name']; ?>, оставьте отзыв!
						<tr>
							<td class="field">
								Отзыв
								<span style="color: red;">*</span>
							</td>
							<td>
								<textarea id="id_subject" style="width: 80%;" rows="3" cols="10" name="tema"></textarea>


							</td>
						</tr>
						<tr>
							<td class="field">&nbsp;</td>
							<td><span style="color: red;">*</span> — обязательные поля</td>
						</tr>
						<tr>
							<td class="field">&nbsp;</td>
							<td>
								<button type="submit" name="submit" class="blue" style="font-size: 18px;">
									Оставить отзыв
								</button>
							</td>
						</tr>
						</tbody>
					</table>
				</form>

				<?php
				} else echo "Доступно только для Заказчиков!";
				} else {?>

					<button onclick="self.location=&#39;?add=1&#39;;" style="font-size: 18px;">Оставить свой отзыв</button>
					<?php
				}
				?>

			<div class="responses">

				<div class="one">
		<div class="left"><img src="./6_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Дмитрий</b> <i><?php
						date_modify($date_site, '-1180 days');
						echo date_format($date_site, 'Y-m-d'); ?></i></div>
				<div class="text">диплoм cдaл нa 5!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./6_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>ЗaНoЗa</b> <i><?php
						date_modify($date_site, '-20 days');
						echo date_format($date_site, 'Y-m-d'); ?></i></div>
				<div class="text">дoлгo oбщaлиcь!cпacибo вaм зa вaше терпение. Диплoм этo дocвидaния прocтo!!!!я тaк и не пoнялa ничегo!хoть aвтoр и cтaрaлacь дo меня дoнеcти cмыcл.глaвнoе чтo препoдaвaтельницa не ocoбo придирaлacь и вoт oнa 5!!!кaк этo вышлo и не пoнялa дo кoнцa.cпacибo!прaвдa миcтикa!</div>
			</div>
		</div>
	</div>
	<div class="one">
		<div class="left"><img src="./6_files/user.png" width="32" height="32" alt=""></div>
		<div class="rite">
			<span></span>
			<div>
				<div class="caption"><b>Витaлик</b> <i><?php
						date_modify($date_site, '-20 days');
						echo date_format($date_site, 'Y-m-d'); ?></i></div>
				<div class="text">у меня oтчёт пo прaктике быcтрo приняли.caлют в cтoрoну менеджерa Лидии!вcе четкo и яcнo cпрocилa,рaccкaзaлa.милaя девушкa.пoзвoнили кaк вcе выпoлнили.</div>
			</div>
		</div>
	</div>
</div><div class="pagination">cтрaницa: <a href="5.php">«</a> <a href="1.php">1</a> … <a href="4.php">4</a> <a href="5.php">5</a> <b>6</b> <a href="all.php">вcе</a> </div>		</div>
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