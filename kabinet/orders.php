<!DOCTYPE html>
<?php
include("../requisites.php");
?>

<html class=" dk_fouc"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<?php
	require ("kab_head.php");
	?>
	<title>Заказы <?php echo $zakaz;?></title>
</head>
<body class="">

<?php
require ("kab_header.php");
?>




<main class="b-site-row">
			<div class="content">

<div class="v-order-list-root">
	<div class="js-tabs tabs">
		<ul class="tabs-nav">
			<li class="selected">
				<a href="orders.php#all">
					<span class="label">Все</span>
					<span class="counter">(1)</span>
				</a>
			</li>
			<?php for ($i=2; $i<7;$i++) {
			switch ($i) {

				case 2:
					$param = "under-consideration";
					$param_2 = "На согласовании";
					break;
				case 3:
					$param = "waiting-for-payment";
					$param_2 = "Не оплачен";
					break;
				case 4:
					$param = "in-progress";
					$param_2 = "В работе";
					break;
				case 5:
					$param = "completed";
					$param_2 = "Завершён";
					break;
				case 6:
					$param = "in-adjustment";
					$param_2 = "Корректировка";
					break;
			}
			?>
				<li class="right">
					<a href="orders.php#<?php echo $param;?>">
						<span class="label"><?php echo $param_2;?></span>
						<span class="counter">
					<?php if ($i==1 or ( $i==3 and (int)$balance == 0) or ( $i==4 and (int)$balance != 0 )or ($i == 5 and $balance == "z" )):?>
						(1)
						<?php else:?>
						(0)
						<?php endif ?>

						</span>
					</a>
				</li>

<?php } ?>

				<li class="last right">
					<a href="orders.php#archive">
						<span class="label">Архив</span>
						<span class="counter">(0)</span>
					</a>
				</li>
		</ul>

		<?php
		for ($i=1; $i<8;$i++) {
		switch ($i) {
			case 1:
				$param = "all";
				break;

			case 3:
				$param = "waiting-for-payment";
				break;
			case 4:
				$param = "in-progress";
				break;
			case 5:
				$param = "completed";
				break;
			case 6:
				$param = "in-adjustment";
				break;
			case 7:
				$param = "archive";
				break;
		}
		?>
		<div id="<?php echo $param;?>" class="tab-panel tabs-panel">

			<?php if ($i==1 or ( $i==3 and (int)$balance == 0) or ( $i==4 and (int)$balance != 0) or ($i == 5 and $balance == "z")):?>

					<ul>
		<li class="order-list-item last">
			<div class="display-order-template">
	<div class="wrapper order-details">
		<div class="w-order-details ">
	<div class="top-line">
		<div class="number system-text">
			№ <?php echo $zakaz; ?>
		</div>
		<div class="status system-text">
			<div class="waiting-for-payment icon"></div>
			<?php if ($balance == 0):?>
				Не оплачен
			<?php else: ?>
				Поступили средства
			<?php endif ?>
		</div>
		<div class="w-quality-info">
			<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
	<symbol id="check-icon" viewBox="0 0 140 140">
		<path fill="#4C7AA2" d="M138.6,34.7L123,18.2c-1.8-1.9-4.8-1.9-6.7,0l-65,68.6L23.7,57.6c-1.8-1.9-4.8-1.9-6.7,0L1.4,74.1
			c-1.8,1.9-1.8,5.1,0,7.1L48,130.3c0.9,1,2.1,1.5,3.3,1.5s2.4-0.5,3.3-1.5l83.9-88.6c0.9-0.9,1.4-2.2,1.4-3.5
			C140,36.9,139.5,35.6,138.6,34.7L138.6,34.7z M138.6,34.7"></path>
		<path fill="#FFFFFF" d="M138.6,29.2L123,12.7c-1.8-1.9-4.8-1.9-6.7,0l-65,68.6L23.7,52.1c-1.8-1.9-4.8-1.9-6.7,0L1.4,68.6
			c-1.8,1.9-1.8,5.1,0,7.1L48,124.8c0.9,1,2.1,1.5,3.3,1.5s2.4-0.5,3.3-1.5l83.9-88.6c0.9-0.9,1.4-2.2,1.4-3.5
			C140,31.4,139.5,30.1,138.6,29.2L138.6,29.2z M138.6,29.2"></path>
	</symbol>
</svg>

<a href="../dogovor.php" class="" data-name="payment">
	<div class="quality-info">
		<div class="check">
			<svg role="img" class="icon"><use xlink:href="#check-icon"></use></svg>
		</div>
		<div class="text">ДОГОВОР</div>
	</div>
</a>
		</div>
	</div>

	<div>
			<?php echo $zakaz_teme; ?>
		<div class="details system-text">
			<?php echo $zakaz_predmet; ?>, <?php echo $zakaz_pages; ?> страниц(а), 14 pt, <?php echo $zakaz_type; ?>
		</div>
		<div class="details system-text">
			<?php if ($zakaz_unik == 0) echo "Стандартный "; else echo $zakaz_unik; ?>% уникальности (ETXT, antiplagiat.ru), <?php if ($zakaz_cherteg == 0) echo 0; else echo $zakaz_cherteg; ?> черт. (AutoCAD, Компас и т. д.)
		</div>
	</div>
</div>
		<div class="w-new-messages-count">
</div>
		
<div class="w-order-dates">
	<span class="date">
Размещен <?php echo $zakaz_date; ?>, срок выполнения <?php echo $srok_vipoln; ?> сут. с момента оплаты</span>
	<br><br><a href="javascript:void(0);" id="link<?php echo $i;?>">Дополнительные сведения</a>
	<div id="look<?php echo $i;?>" ><br><?php echo $zakaz_dopoln; ?></div>
</div>	</div>
	<div class="wrapper money">
		<div class="order-price-area"><svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
	<symbol id="icon-full-payment" viewBox="0 0 26.5 43.4">
		<path fill="currentColor" d="M13.3,1.5C7.6,1.5,1.8,2.9,1.8,5.6v5.1c0,2.7,5.8,4.1,11.5,4.1c5.7,0,11.5-1.4,11.5-4.1V5.6C24.7,2.9,19,1.5,13.3,1.5
			L13.3,1.5z M13.3,2.8c6.2,0,10.1,1.6,10.1,2.8c0,1.1-4,2.7-10.1,2.7C7.1,8.3,3.1,6.7,3.1,5.6C3.1,4.4,7.1,2.8,13.3,2.8L13.3,2.8z"></path>
		<path fill="currentColor" d="M13.3,13.4c-6.2,0-10.1-1.6-10.1-2.7V7.6c2,1.4,6.1,2.1,10.1,2.1c4,0,8.1-0.7,10.1-2.1v3.1C23.4,11.8,19.4,13.4,13.3,13.4
			L13.3,13.4z"></path>
		<path fill="currentColor" d="M13.3,13.4"></path>
		<path fill="currentColor" d="M13.3,17.2c-6.2,0-10.1-1.6-10.1-2.7H1.8v5.1c0,2.7,5.8,4.1,11.5,4.1c5.7,0,11.5-1.4,11.5-4.1v-5.1h-1.3
			C23.4,15.6,19.4,17.2,13.3,17.2L13.3,17.2z"></path>
		<path fill="currentColor" d="M23.4,19.6c0,1.1-4,2.7-10.1,2.7c-6.2,0-10.1-1.6-10.1-2.7v-3.1c4,2.7,16.2,2.7,20.2,0V19.6z"></path>
		<path fill="currentColor" d="M23.4,19.6"></path>
		<path fill="currentColor" d="M13.3,26.1c-6.2,0-10.1-1.6-10.1-2.7H1.8v5.1c0,2.7,5.8,4.1,11.5,4.1c5.7,0,11.5-1.4,11.5-4.1v-5.1h-1.3
			C23.4,24.5,19.4,26.1,13.3,26.1L13.3,26.1z"></path>
		<path fill="currentColor" d="M23.4,28.5c0,1.1-4,2.8-10.1,2.8c-6.2,0-10.1-1.6-10.1-2.8v-3.1c4,2.7,16.2,2.7,20.2,0V28.5z"></path>
		<path fill="currentColor" d="M23.4,28.5"></path>
		<path fill="currentColor" d="M13.3,35c-6.2,0-10.1-1.6-10.1-2.7H1.8v5.1c0,2.7,5.8,4.1,11.5,4.1c5.7,0,11.5-1.4,11.5-4.1v-5.1h-1.3
			C23.4,33.4,19.4,35,13.3,35L13.3,35z"></path>
		<path fill="currentColor" d="M23.4,37.4c0,1.1-4,2.8-10.1,2.8c-6.2,0-10.1-1.6-10.1-2.8v-3.1c4,2.7,16.2,2.7,20.2,0V37.4z"></path>
		<path fill="currentColor" d="M23.4,37.4"></path>
	</symbol>

	<symbol id="icon-partial-payment" viewBox="0 0 25.3 42.6">
		<path fill="currentColor" d="M12.8,1.2C7.1,1.2,1.3,2.7,1.3,5.3v5.1c0,2.7,5.8,4.1,11.5,4.1c5.7,0,11.5-1.4,11.5-4.1V5.3C24.2,2.7,18.5,1.2,12.8,1.2
			L12.8,1.2z M12.8,2.6c6.2,0,10.1,1.6,10.1,2.8c0,1.1-4,2.7-10.1,2.7C6.6,8.1,2.7,6.5,2.7,5.3C2.7,4.2,6.6,2.6,12.8,2.6L12.8,2.6z
			M12.8,13.2c-6.2,0-10.1-1.6-10.1-2.7V7.3c2,1.4,6.1,2.1,10.1,2.1c4,0,8.1-0.7,10.1-2.1v3.1C22.9,11.6,18.9,13.2,12.8,13.2
			L12.8,13.2z M12.8,13.2"></path>
		<path fill="currentColor" d="M12.8,17c-6.2,0-10.1-1.6-10.1-2.7H1.3v5.1c0,2.7,5.8,4.1,11.5,4.1c5.7,0,11.5-1.4,11.5-4.1v-5.1h-1.3
			C22.9,15.4,18.9,17,12.8,17L12.8,17z M22.9,19.3c0,1.1-4,2.7-10.1,2.7c-6.2,0-10.1-1.6-10.1-2.7v-3.1c4,2.7,16.2,2.7,20.2,0V19.3z
			M22.9,19.3"></path>
		<path fill="currentColor" d="M12.8,25.9c-6.2,0-10.1-1.6-10.1-2.7H1.3v5.1c0,2.7,5.8,4.1,11.5,4.1c5.7,0,11.5-1.4,11.5-4.1v-5.1h-1.3
			C22.9,24.3,18.9,25.9,12.8,25.9L12.8,25.9z"></path>
		<path fill="currentColor" d="M22.9,28.2c0,1.1-4,2.8-10.1,2.8c-6.2,0-10.1-1.6-10.1-2.8v-3.1c4,2.7,16.2,2.7,20.2,0V28.2z"></path>
		<path fill="currentColor" d="M22.9,28.2"></path>
		<path fill="currentColor" d="M12.8,34.8c-6.2,0-10.1-1.6-10.1-2.7H1.3v5.1c0,2.7,5.8,4.1,11.5,4.1c5.7,0,11.5-1.4,11.5-4.1v-5.1h-1.3
			C22.9,33.2,18.9,34.8,12.8,34.8L12.8,34.8z"></path>
		<path fill="currentColor" d="M22.9,37.2c0,1.1-4,2.8-10.1,2.8c-6.2,0-10.1-1.6-10.1-2.8v-3.1c4,2.7,16.2,2.7,20.2,0V37.2z"></path>
		<path fill="currentColor" d="M22.9,37.2"></path>
	</symbol>
	<symbol id="icon-next-arrow" viewBox="0 0 14.4 24">
		<path fill="currentColor" d="M13.2,13.2L2.9,23.5c-0.7,0.7-1.7,0.7-2.4,0c-0.7-0.7-0.7-1.7,0-2.4L9.6,12L0.5,2.9c-0.7-0.7-0.7-1.7,0-2.4
			c0.7-0.7,1.7-0.7,2.4,0l10.3,10.3c0.3,0.3,0.5,0.8,0.5,1.2C13.7,12.4,13.5,12.9,13.2,13.2L13.2,13.2z M13.2,13.2"></path>
	</symbol>
</svg>

<div class="w-order-price4 has-value" data-id="02d8677a-add2-44e6-b893-d2e8039bd9f3">

			<div class="<?php if ($client_predoplata == 0) echo 'amount-line price-amount'; else echo 'full-price'; ?>">
				<div class="amount-text">Цена без скидки</div>
				<div class="<?php if ($client_predoplata == 0) {
					$zakaz_cena_yand = $zakaz_cena;
					echo 'amount';
				} else echo 'amount column'; ?>">
					<?php
					echo (int)$zakaz_cena; ?>
					<span class="rouble">p</span>
</div>
				<div class="splitter"></div>
			</div>
	<div class="<?php if ($client_predoplata == 1) echo 'amount-line price-amount'; else echo 'full-price'; ?>">
		<div class="amount-text">Цена со скидкой 10%</div>
		<div class="<?php if ($client_predoplata == 1) {
			$zakaz_cena_yand = $zakaz_cena*0.9;
			echo 'amount';
		} else echo 'amount column'; ?>">
			<?php
			echo (int)($zakaz_cena*0.9); ?>
			<span class="rouble">p</span>
		</div>
		<div class="splitter"></div>
	</div>
	<div class="<?php if ($client_predoplata == 2) echo 'amount-line price-amount'; else echo 'full-price'; ?>">
		<div class="amount-text">Цена со скидкой 20%</div>
		<div class="<?php if ($client_predoplata == 2) {
			$zakaz_cena_yand = $zakaz_cena*0.8;
		echo 'amount';
		} else echo 'amount column'; ?>">
			<?php
			echo (int)($zakaz_cena*0.8); ?>
			<span class="rouble">p</span>
		</div>
		<div class="splitter"></div>
	</div>

				<div class="discount-date">
					Акция до <span title="17 октября 2016 г."><?php echo $zakaz_akcia; ?></span>
				</div>
			<div class="payment-wrapper">
				<a href="<?php echo $url_oplata."/".$zakaz_cena_yand; ?>" class="button" data-name="payment">
					<?php if ($balance == 0): ?>Оплатить заказ<?php elseif ($balance < $zakaz_cena): ?> В работе, доплатить<?php else: ?> В работе <?php endif ?><svg role="img" class="icon"><use xlink:href="#icon-next-arrow"></use></svg> </a>
			</div>
</div></div>
	</div>
</div>
		</li>
</ul>
		</div>
			<?php else:?>


				<ul>
				</ul>

			</div>
<?php endif ?>

<?php }?>

	</div>
	<script type="text/javascript">$(function(){ if( $.areas.root.orders.gALoader.gALoader != null ){ new $.areas.root.orders.gALoader.gALoader({"experimentId":"qf7-eBjZRY2UJU-8Ix-_cw","handlers":{"orderPriceWidget1":"/Customer/orders/1/order-price-widget","orderPriceWidget2":"/Customer/orders/1/order-price-widget2","orderPriceWidget3":"/Customer/orders/1/order-price-widget3","orderPriceWidget4":"/Customer/orders/1/order-price-widget4"}}) } else { new $.areas.root.orders.gALoader({"experimentId":"qf7-eBjZRY2UJU-8Ix-_cw","handlers":{"orderPriceWidget1":"/Customer/orders/1/order-price-widget","orderPriceWidget2":"/Customer/orders/1/order-price-widget2","orderPriceWidget3":"/Customer/orders/1/order-price-widget3","orderPriceWidget4":"/Customer/orders/1/order-price-widget4"}}) } });</script>

</div></div>
		</main>



			<?php
			require ("kab_footer.php");
			?>
			</body>
			</html>