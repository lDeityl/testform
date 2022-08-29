<?php 
if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['message'])){
	
	$headers = 'From: Васильев Василий\r\n'.
		       'Reply-To: mihailov_221105@mail.ru\r\n'.
	           'X-Mailer: PHP/'. phpversion();
		
	$theme = 'Новое сообщение))';
	
	$letter = 'Данные сообщения:\r\n';
	$letter .='Имя: '.$_POST['name'].'\r\n';
	$letter .='Email: '.$_POST['email'].'\r\n';
	$letter .='Телефон: '.$_POST['phone'].'\r\n';
	$letter .='Сообщение: '.$_POST['message'].'\r\n';
  if (mail('mihailov_221105@mail.ru', $theme, $letter, $headers)) {
	  header('Location:/localhost/thankyou.php');
  } else{
	  header('Location:/localhost');
  }
} else {
	header('Location:/localhost');
}