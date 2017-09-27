<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 41;
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	

	<title>Заказать работу</title>

	<meta name="description" content="Заказать работу в <?php echo $site_name;?>">
	<meta name="keywords" content="Заказать работу в <?php echo $site_name;?>">

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

<h1>Заказать работу</h1>Сделайте запрос или узнайте об услуге <?php echo $site_name;?> подробнее, заполнив форму.&nbsp;<br>
            Не зaбудьте указать Ваши контактные данные, чтобы мы могли оперативно с Вами связаться.<br>

<style>
	form#request_form { width: 75%; }
	form#request_form table { width: 100%; }
        form#request_form table tr td:first-of-type { white-space: nowrap; width: 10%; }
	form#request_form table td { padding: 10px 20px 10px 0; font-size: 16px; white-space: nowrap; }
	form#request_form table td input, form#request_form table td textarea, , form#request_form table td select { width: 100%; font-size: 16px; padding: 0.3em; }
	form#request_form table td sup { font-size: 10px; color: #b00; }
	form#request_form table td button { font-size: 20px; padding: 5px 10px; }
	form#request_form table tr:last-of-type td input { visibility: hidden; width: 30px; }
</style>

<br>

<div id="request_div"><form id="request_form" method="post" enctype="multipart/form-data" action="order2.php">
  <div style="display:none"><input type="hidden" name="csrfmiddlewaretoken" value="oBlyEDpYaBC7PNlqaGEbTOT3xFrlrCTL"></div><table class="order">
    <tbody>


    <tr>
        <td class="field">
            <span style="color: skyblue;">Ваше имя</span>
            <span style="color: red;">*</span>
        </td>
        <td>
            <input style="width: 50%;" type="text" name="name" id="id_name">


        </td>
    </tr>



    <tr>
        <td class="field">
            <span style="color: skyblue;">E-mail</span>
            <span style="color: red;">*</span>
        </td>
        <td>
            <input style="width: 50%;" type="text" name="email_stud" id="id_email">


        </td>
    </tr>


    
        
        <tr>
          <td class="field">
            <span style="color: skyblue;">Тип работы</span>
            <span style="color: red;">*</span>
          </td>
          <td>
            <select name="work_kind" id="id_work_kind">
<option value="" selected="selected">---</option>
<option value="kontrolnaia">Контрольная работа</option>
<option value="referat">Реферат</option>
<option value="esse">Эссе</option>
<option value="kursovaia">Курсовая работа</option>
<option value="otchot">Отчет по практике</option>
<option value="diploma">Диплом</option>
<option value="magister_dissertation">Магистерская диссертация</option>
<option value="drawings">Чертежи</option>
<option value="other">Прочее</option>
<option value="complex">Комплексный заказ</option>
</select>

            
          </td>
        </tr>
        
    
        
        <tr>
          <td class="field">
            <span style="color: skyblue;">Тема работы</span>
              <span style="color: red;">*</span>
          </td>
          <td>
            <textarea id="id_subject" style="width: 80%;" rows="2" cols="10" name="tema"></textarea>

            
          </td>
        </tr>

        <tr>
            <td class="field">
                Сколько Вы готовы заплатить?<br>
                (<span style="color: green;">Мы учтем Ваши возможности</span>)
                <span style="color: red;">*</span>
            </td>
            <td>
                <input id="id_predmet" style="width: 50%;" type="text" name="kli_stoimost" maxlength="100">

            </td>
        </tr>

        <tr>
            <td class="field">
                С предоплатой или без?
                <span style="color: red;">*</span>
            </td>
            <td>
                <select name="predoplata" id="id_work_kind">
                    <option value="bez_predoplat">Без предоплаты (часть бесплатно)</option>
                    <option value="s_predoplatoi_50">Предоплата 50% (со скидкой 10%)</option>
                    <option value="s_predoplati_100" selected="selected">Полная предоплата (со скидкой 20%)</option>
                </select>


            </td>
        </tr>

    <tr>
        <td class="field">
            <span style="color: brown;">Предмет</span>

        </td>
        <td>
            <input id="id_predmet" style="width: 50%;" type="text" name="predmet" maxlength="100">


        </td>

    </tr>

    <tr>
        <td class="field">
            <span style="color: brown;">Срок выполнения</span>
        </td>
        <td>
            <input id="id_predmet" style="width: 50%;" type="text" name="srok_vip" maxlength="100">
        </td>
    </tr>

    <tr>
        <td class="field">
            <span style="color: brown;">Объем (страниц)</span>

        </td>
        <td>
            <input id="id_predmet" style="width: 50%;" type="text" name="objem" maxlength="100">


        </td>
    </tr>

    <tr>
        <td class="field">
           <span style="color: brown;">Уникальность (%)</span>

        </td>
        <td>
            <input id="id_predmet" style="width: 50%;" type="text" name="unik" maxlength="100">


        </td>
    </tr>

        
    
        
        <tr>
          <td class="field">
            Дополнительная информация
            
          </td>
          <td>
            <textarea id="id_add_info" style="width: 80%;" rows="2" cols="10" name="add_info"></textarea>

            
          </td>
        </tr>

    <tr>
        <td class="field">
            <?php
            $a = rand(1,10);
            $b = rand(1,100);
            $c = $a+$b;
            echo $a."+".$b."=";
            ?>
            <span style="color: red;">*</span>
        </td>
        <td>
            <input style="width: 50%;" type="text" name="count_1">
            <input style="width: 50%; display: none;" type="text" value=<?php echo $c?> name="count_2">
            <input style="width: 50%; display: none;" type="text" value="Не определено" name="university">


        </td>
    </tr>



    <tr>
      <td class="field">&nbsp;</td>
      <td><span style="color: red;">*</span> — обязательные поля</td>
    </tr>

    <tr>
      <td class="field">&nbsp;</td>
      <td>
        <button type="submit" name = "submit" class="blue" style="font-size: 18px;">
          Отправить заказ
        </button>
      </td>
    </tr>
    </tbody>
  </table>
</form>


</div>


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