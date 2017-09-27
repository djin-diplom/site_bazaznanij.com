<!DOCTYPE html>
<?php
include("../requisites.php");
?>

<html class=" dk_fouc"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<?php
	require ("kab_head.php");
	?>
	<title>Профиль <?php echo $zakaz;?></title>
</head>
<body class="">

<?php
require ("kab_header.php");
?>



<main class="b-site-row">
	<div class="content">


		<div class="v-profile-root">
			<script type="text/javascript">$(function(){ if( $.areas.root.profile.root.root != null ){ new $.areas.root.profile.root.root({}) } else { new $.areas.root.profile.root({}) } });</script>
			<div class="js-tabs b-profile-tabs tabs">


				<div id="personal" class="tabs-panel">
					<div class="v-edit-personal">
						<div class="content-area">

							<form action="prof_form.php" class="f-edit-personal" method="post">
									<section class="personal item editor-form">
									<div class="b-editors">
										<div class="editor-entry">
											<div class="editor-label">
												<label for="PersonLastName">Фамилия</label>
											</div>
											<div class="editor-field">
												<input class="text-box single-line"  id="PersonLastName" name="client_last_name" type="text" value="<?php echo $client_last_name; ?>">
											</div>
										</div>
										<div class="editor-entry">
											<div class="editor-label">
												<label for="PersonFirstName">Имя</label>
											</div>
											<div class="editor-field">
												<input class="text-box single-line" id="PersonFirstName" name="client_name" type="text" value="<?php echo $client_name; ?>">
											</div>
										</div>
									</div>
									<div class="b-editors">
										<div class="editor-entry">
											<div class="editor-label">
												<label for="PersonMiddleName">Отчество</label>
											</div>
											<div class="editor-field">
												<input class="text-box single-line"  id="PersonMiddleName" name="client_otchestvo" type="text" value="<?php echo $client_otchestvo; ?>">
											</div>
										</div>
										<div class="editor-entry">
											<div class="editor-label">
												<label for="PersonCityName">Город</label>
											</div>
											<div class="editor-field">
												<input  id="PersonCityName" name="client_city" placeholder="" type="text" value="<?php echo $client_city; ?>" autocomplete="off" class="ac-input" >
											</div>
										</div>
									</div>
								</section>
								<section class="education item editor-form">
									<div class="b-editors university">
										<div class="editor-entry">
											<div class="editor-label">
												<label for="UniversityName">ВУЗ</label>
											</div>
											<div class="editor-field">
												<input  id="UniversityName" name="client_vuz" placeholder="" type="text" value="<?php echo $client_vuz; ?>" class="ac-input" >
											</div>
										</div>

										<div class="editor-entry">
											<div class="editor-label">
												<label for="FacultyName">Факультет</label>
											</div>

											<div class="editor-field">
												<input  name="client_fak" placeholder="" type="text" value="<?php echo $client_fak; ?>" autocomplete="off" class="ac-input" >
											</div>
										</div>

										<div class="info system-text">
											Указывайте верные данные, это Вам очень поможет. И нам тоже.
										</div>
									</div>
									<div class="b-editors">
										<div class="editor-entry">
											<div class="editor-label">
												<label for="Specialty">Специальность</label>
											</div>
											<div class="editor-field">
												<input class="text-box single-line" id="Specialty" name="client_special" type="text" value="<?php echo $client_special; ?>">
											</div>
										</div>

										<div class="editor-entry">
											<div class="editor-label">
												<label for="CourseNumber">Курс</label>
											</div>
											<div class="editor-field">

													<select class="" data-columns="1"  id="CourseNumber" name="client_kurs" >
														<option <?php if($client_kurs == 1) echo "selected=selected "; ?>value="1">I</option>
													<option <?php if($client_kurs == 2) echo "selected=selected "; ?>value="2">II</option>
													<option <?php if($client_kurs == 3) echo "selected=selected "; ?>value="3">III</option>
													<option <?php if($client_kurs == 4) echo "selected=selected "; ?>value="4">IV</option>
													<option <?php if($client_kurs == 5) echo "selected=selected "; ?>value="5">V</option>
													<option <?php if($client_kurs == 6) echo "selected=selected "; ?>value="6">VI</option>
													<option <?php if($client_kurs == 7) echo "selected=selected "; ?> value="7">VII</option>
													<option <?php if($client_kurs == 8) echo "selected=selected "; ?>value="8">Аспирантура</option>
													<option  <?php if($client_kurs == 9) echo "selected=selected "; ?>value="9">Не выбрано</option>
												</select>
											</div>
										</div>
									</div>
								</section>

								<section class="editor-buttons item">
									<button class="button type2" type="submit">Сохранить</button>
									<a class="cancel" href="profile.php">Отменить</a>
								</section>
							</form>
						</div>

			</div>
		</div>
				<div id="contacts" class="tabs-panel" style="display: none;">
					<div class="v-edit-contacts content-area">
						<script type="text/javascript">$(function(){ if( $.areas.root.profile.contacts.contacts != null ){ new $.areas.root.profile.contacts.contacts({}) } else { new $.areas.root.profile.contacts({}) } });</script>
						<form action="profile.php" class="editor-form" method="post">		<section class="b-editors item">
							
								<div class="email-editor editor-entry">
									<div class="editor-label">
										<label for="UserEmail">Электронная почта</label>
									</div>
									<div class="editor-field">
										<input class="text-box single-line" data-val="true" data-val-email="Неверный адрес" data-val-length="Максимум 100 символов" data-val-length-max="100" data-val-required="Электронная почта не может быть пустой" id="UserEmail" name="UserEmail" type="text" value="<?php echo $client_email; ?>">
									</div>
								</div>
								<div class="info system-text">
									Указывайте верные данные, это Вам очень поможет. И нам тоже.
								</div>
							</section>

							<section class="editor-buttons item">
								<button class="button type2" type="submit">Сохранить</button>

								<a class="cancel" href="profile.php">Отменить</a>
							</section></form></div>
				</div>
				<div id="change-password" class="tabs-panel" style="display: none;">
					<div class="v-change-password content-area editor-form">
						<form action="profile.php" class="editor-form" method="post">		<section class="b-editors item">
								<div class="old-pass-editor editor-entry">
									<div class="editor-label">
										<label for="OldPassword">Старый пароль</label>
									</div>
									<div class="editor-field">
										<input class="text-box single-line password" data-val="true" data-val-required="Введите старый пароль" id="OldPassword" name="OldPassword" type="password" value="">
									</div>
								</div>
								<div class="new-pass-editor editor-entry">
									<div class="editor-label">
										<label for="Password">Новый пароль</label>
									</div>
									<div class="editor-field">
										<input class="text-box single-line password" data-val="true" data-val-required="Введите новый пароль" id="Password" name="Password" type="password" value="">
									</div>
								</div>
								<div class="confirm-pass-editor editor-entry">
									<div class="editor-label">
										<label for="PasswordConfirm">Подтверждение</label>
									</div>
									<div class="editor-field">
										<input class="text-box single-line password" data-val="true" data-val-equalto="Пароли не совпадают" data-val-equalto-other="*.Password" id="PasswordConfirm" name="PasswordConfirm" type="password" value="">
									</div>
								</div>
							</section>

							<section class="editor-buttons item">
								<button class="button type2" type="submit">Сохранить</button>

								<a class="cancel" href="profile.php#,tab-change-password">Отменить</a>
							</section></form></div>
				</div>
			</div>
		</div></div>
</main>


<?php
require ("kab_footer.php");
?>
</body>
</html>