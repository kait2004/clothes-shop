<?php 
$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];
$mail = $_POST['mail'];

if (mb_strlen($login)<5 || mb_strlen($login)>50){
  echo "<script type=\"text/javascript\">window.alert('Недопустима длина логина.');
  window.location.href = '/';</script>";
  exit;
}else if (mb_strlen($password)<10 || mb_strlen($password)>30){
  echo "<script type=\"text/javascript\">window.alert('Недопустима длина пароля(от 10 до 30 символов)');
  window.location.href = '/';</script>";
  exit;
}
$password=md5($password."asdfghjkrtyui98567gy");

$mysql=new mysqli ('127.0.0.1','root','','magazinelesson');
$mysql->query("INSERT INTO `users`(`login`, `password`, `name`, `mail`) VALUES('$login','$password','$name','$mail')");
$mysql->close();
header('Location:/');
?>
