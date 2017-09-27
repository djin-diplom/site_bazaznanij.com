<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 13;
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <title>Ввести данные заказчика</title>

    <meta name="description" content="Расчет стоимости">
    <meta name="keywords" content="Расчет стоимости">

    <?php
    require("head_1.php");
    ?>
<body>

<div style="background: url(/img/leather1.jpg) repeat-x left top; padding-top: 40px;">
    <section class="main">

        <div>

            <h1>Редактировать данные Заказчика</h1>

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

<div id="request_div">
    <form id="request_form" method="post" enctype="multipart/form-data" action="vivadiplomfirstallemail\email.php">
        <div style="display:none"><input type="hidden" name="csrfmiddlewaretoken" value="oBlyEDpYaBC7PNlqaGEbTOT3xFrlrCTL"></div><table class="order">
            <tbody>

            <tr>
                <td class="field">
                    Имя
                    <span style="color: red;">*</span>
                </td>
                <td>
                    <?php
                    if(trim($_GET['name']) == '') {
                        echo  '<input style="width: 50%;" type="text" name="client_name" id="id_name">';
                    } else {
                        echo  '<input style="width: 50%;" type="text" name="client_name" id="id_name" value='.$_GET['name'].' >';
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td class="field">
                    E-mail
                    <span style="color: red;">*</span>
                </td>
                <td>
                    <?php
                    if(trim($_GET['email_stud']) == '') {
                        echo  '<input style="width: 50%;" type="text" name="client_email" id="id_email">';
                    } else {
                        echo  '<input style="width: 50%;" type="text" name="client_email" id="id_email" value='.$_GET['email_stud'].' >';
                    }
                    ?>


                </td>
            </tr>
            <tr>
                <td class="field">
                    Стоимость заказа
                    <span style="color: red;">*</span>
                </td>
                <td>
                    <?php
                    if(trim($_GET['kli_stoimost']) == '') {
                        echo  '<input style="width: 50%;" type="text" name="zakaz_cena" id="id_name">';
                    } else {
                        echo  '<input style="width: 50%;" type="text" name="zakaz_cena" id="id_name" value='.$_GET['kli_stoimost'].' >';
                    }
                    ?>


                </td>
            </tr>
            <tr>
                <td class="field">
                    Срок выполнения
                    <span style="color: red;">*</span>
                </td>
                <td>

                    <?php
                    if(trim($_GET['srok_vip']) == '') {
                        echo  '<input style="width: 50%;" type="text" name="srok_vipoln" id="id_name">';
                    } else {
                        echo  '<input style="width: 50%;" type="text" name="srok_vipoln" id="id_name" value='.$_GET['srok_vip'].' >';
                    }
                    ?>


                </td>
            </tr>

            <tr>
                <td class="field">
                    Тема работы

                </td>
                <td>

                    <?php
                    if(trim($_GET['tema']) == '') {
                        echo  '<textarea id="id_subject" style="width: 80%;" rows="2" cols="10" name="zakaz_teme"></textarea>';
                    } else {
                        echo  '<textarea id="id_subject" style="width: 80%;" rows="2" cols="10" name="zakaz_teme" >'.$_GET['tema'].'</textarea>';
                    }
                    ?>

                </td>
            </tr>

            <tr>
                <td class="field">
                    Предоплата

                </td>
                <td>

                    <?php
                    if(trim($_GET['predoplata']) == '') {
                        echo  '<input id="id_predmet" style="width: 50%;" type="text" name="predoplata" maxlength="100" value="2">';
                    } else {
                        echo  '<input id="id_predmet" style="width: 50%;" type="text" name="predoplata" maxlength="100" value='.$_GET['predoplata'].' >';
                    }
                    ?>



                </td>
            </tr>

            <tr>
                <td class="field">
                    Предмет

                </td>
                <td>

                    <?php
                    //if(trim($_GET['predmet']) == '') {
                    //    echo   '<input id="id_predmet" style="width: 50%;" type="text" name="zakaz_predmet" maxlength="100" value="Не указан">';
                    //} else {
                    //    echo   '<input id="id_predmet" style="width: 50%;" type="text" name="zakaz_predmet" maxlength="100" value='.$_GET['predmet'].' >';
                    //}
                    if(trim($_GET['predmet']) == '') {
                        echo  '<textarea id="id_predmet" style="width: 50%;" rows="2" cols="10" name="zakaz_predmet"></textarea>';
                    } else {
                        echo  '<textarea id="id_predmet" style="width: 50%;" rows="2" cols="10" name="zakaz_predmet" >'.$_GET['predmet'].'</textarea>';
                    }
                    ?>

                </td>
            </tr>
            <tr>
                <td class="field">
                    Вид

                </td>
                <td>

                    <?php
                    if(trim($_GET['work_kind']) == '') {
                        echo   '<input id="id_predmet" style="width: 50%;" type="text" name="zakaz_type" maxlength="100">';
                    } else {
                        echo   '<input id="id_predmet" style="width: 50%;" type="text" name="zakaz_type" maxlength="100" value='.$_GET['work_kind'].'  >';
                    }
                    ?>
                </td>
            </tr>



            <tr>
                <td class="field">
                    Учебное заведение

                </td>
                <td>

                    <input id="id_university" style="width: 50%;" type="text" name="client_vuz" maxlength="100" value="Не указано">
                </td>
            </tr>
            <tr>
                <td class="field">
                    Уникальность

                </td>
                <td>

                    <?php
                    if(trim($_GET['unik']) == '') {
                        echo   '<input id="id_university" style="width: 50%;" type="text" name="zakaz_unik" maxlength="100">';
                    } else {
                        echo   '<input id="id_university" style="width: 50%;" type="text" name="zakaz_unik" maxlength="100" value='.$_GET['unik'].' >';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="field">
                    Объем

                </td>
                <td>

                    <?php
                    if(trim($_GET['objem']) == '') {
                        echo   '<input id="id_university" style="width: 50%;" type="text" name="zakaz_pages" maxlength="100">';
                    } else {
                        echo   '<input id="id_university" style="width: 50%;" type="text" name="zakaz_pages" maxlength="100" value='.$_GET['objem'].' >';
                    }
                    ?>


                </td>
            </tr>
            <tr>
                <td class="field">
                    Чертежи
                </td>
                <td>
                    <input id="id_university" style="width: 50%;" type="text" name="zakaz_cherteg" maxlength="100" value="0">


                </td>
            </tr>

            <tr>
                <td class="field">
                    Доп. информация

                </td>
                <td>

                    <?php
                    if(trim($_GET['add_info']) == '') {
                        echo    '<textarea id="id_add_info" style="width: 80%;" rows="2" cols="10" name="zakaz_dopoln" >По методическим указаниям Заказчика</textarea>';
                    } else {
                        echo    '<textarea id="id_add_info" style="width: 80%;" rows="2" cols="10" name="zakaz_dopoln" >'.$_GET['add_info'].'</textarea>';
                    }
                    ?>



                </td>
            </tr>


            <tr>
                <td class="field">&nbsp;</td>
                <td>
                    <button type="submit" name = "submit" class="blue" style="font-size: 18px;">
                        Сохранить, создать запись в базе и личный кабинет.
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