<?php
if (!empty($_POST['name']) AND !empty($_POST['email'])AND !empty($_POST['comment'])){

    $theme ='новое сообщение';

	$letter='данные сообщения:\r\n';
	$letter .='Имя: '.$_POST['name'].'\r\n';
	$letter .='email: '.$_POST['email'].'\r\n';
	$letter .='сообщение: '.$_POST['content'].'\r\n';

	if (mail('GranitKoros@gmail.com', $theme, $letter)){
      header ('location:/thankyou.php');
	} else {
  header('location:/error.php');
}