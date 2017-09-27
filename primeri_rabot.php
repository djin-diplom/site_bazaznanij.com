<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 1;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<?php

	?>

	<title>Примеры</title>

	<meta name="description" content="Смотреть примеры магистерских, дипломных, курсовых <?php echo $site_name;?>">
	<meta name="keywords" content="Смотреть примеры магистерских, дипломных, курсовых <?php echo $site_name;?>">

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
			<h1>Примеры</h1>
			<?php

			for($i = 1; $i < 66; $i++) {
				$count = $i;
				$name_rab = $count % 11;
				switch ($name_rab) {
					case 0:
						$name_rab_text = "выпускной работы от ".$site_name." ";
						break;
					case 1:
						$name_rab_text = "дипломной работы";
						break;
					case 2:
						$name_rab_text = "магистерской диссертации";
						break;
					case 3:
						$name_rab_text = "курсовой работы";
						break;
					case 4:
						$name_rab_text = "курсовой";
						break;
					case 5:
						$name_rab_text = "дипломной";
						break;
					case 6:
						$name_rab_text = "магистерской";
						break;
					case 7:
						$name_rab_text = "эссе";
						break;
					case 8:
						$name_rab_text = "реферата";
						break;
					case 9:
						$name_rab_text = "контрольной";
						break;
					case 10:
						$name_rab_text = "статьи";
						break;

				}
				?>
				<h2>Смотреть пример <?php echo $name_rab_text . " № " . $count; ?></h2>
				<?php
				$f = fopen("texts/new_" . $count, "r");
				$col_simv = 0;
				while (!feof($f)) {
					$fgets = fgets($f);
					$col = iconv_strlen($fgets);
					$col_simv = $col_simv + $col;
					if ($col > 2) {
						echo $fgets;

					}
					if ($col_simv > 100) break;
				}
				fclose($f);


				?>
				<br><a href="z_primer_raboti_<?php echo $count; ?>.php">Смотреть
					пример <?php echo $name_rab_text . " № " . $count; ?> далее</a><br /><br />
				<?php
			}
			?>
		</div>


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