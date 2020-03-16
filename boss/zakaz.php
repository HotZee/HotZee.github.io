<?php
$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars($_POST['phone']));
$product = stripslashes(htmlspecialchars($_POST['product']));
$size = stripslashes(htmlspecialchars($_POST['size']));
$form = stripslashes(htmlspecialchars($_POST['form']));

if ($_GET['product_id']) {
	$product_id = $_GET['product_id'];
} else {
	$product_id = $_POST['product_id'];
}
if (empty($name) || empty($phone)) {
	echo '<div class="wrapper">
	<div class="unit unit_thanks">
		<div class="wr wr_thanks"><h1 class="title" >Пожалуйста заполните все поля</h1></div></div></div>
<style>
.wrapper {
    overflow: hidden;
    margin-left: auto;
    margin-right: auto;
    background: linear-gradient(246.17deg, #3d3d3d 0.5%, #0b0b0b 100%);
}
.wr_thanks {
    height: 100vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
}
h1.title {
    margin-bottom: 25px;
    font-style: normal;
    font-weight: 900;
    font-size: 60px;
    line-height: 1.3;
    color: #fff;
}
</style>
';
	echo '<meta http-equiv="refresh" content="2; url=http://' . $_SERVER['SERVER_NAME'] . '">';
} else {
	$subject = 'Заявка с сайта marvol.shop'; // заголовок письмя
	$addressat = "ludakorshac@gmail.com"; // Ваш Электронный адрес
	$success_url = './thanks.php?name=' . $_POST['name'] . '&phone=' . $_POST['phone'] . '&product=' . $_POST['product'] . '&size=' . $_POST['size'] . '&form=' . $_POST['form'] . '';
	$message = "ФИО: {$name}\nКонтактный телефон: {$phone}\nТовар: {$product}\nРазмер: {$size}\nФорма: {$form}";
	$verify = mail($addressat, $subject, $message, "Content-type:text/plain;charset=utf-8\r\n");
	if ($verify == 'true') {
		header('Location: ' . $success_url);
		exit;
	} else {
		echo '<h1 style="color:red;">Произошла ошибка!</h1>';
	}
}
?>