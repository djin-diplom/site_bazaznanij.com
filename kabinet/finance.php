<!DOCTYPE html>
<?php
include("../requisites.php");
?>

<html class=" dk_fouc"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<?php
	require ("kab_head.php");
	?>
	<title>Финансы <?php echo $zakaz;?></title>
</head>
<body class="">

<?php
require ("kab_header.php");
?>




<main class="b-site-row">
<div class="content">

<div class="v-finance-root">

	<table class="items js-scrolloader scrolloader" data-area="window" data-filter-selector=".v-finance-root form">
		<tbody>
		<tr>
			<th class="date">Дата</th>
			<th>Тип операции</th>
			<th class="amount">Сумма, <span class="rouble">p</span></th>
		</tr>
		<?php if ($balance != 0): ?>
		<tr>
			<th style="background-color: white; font: bold italic 110% serif; color: black;"><?php echo $balance_date;?></th>
			<th style="background-color: white; font: bold italic 110% serif; color: black;">Перевод на Яндекс-кошелек</th>
			<th style="background-color: white; font: bold normal 110% serif; color: black;"><?php echo $balance;?></th>
		</tr>
		<?php endif ?>
	</tbody>
	</table>

</div>
</div>
</main>




<?php
require ("kab_footer.php");
?>
</body>
</html>