<?php 
$login = $_POST['login'];
$password = $_POST['password'];
$password=md5($password."asdfghjkrtyui98567gy");

$mysql=new mysqli ('127.0.0.1','root','','magazinelesson');
$result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");
$user=$result->fetch_assoc();
if($user==0){
    echo "<script type=\"text/javascript\">window.alert('Неверное имя или пароль, попробуйте еще раз.');
    window.location.href = '/';</script>";
    exit;
}

setcookie('user', $user['name'],time()+3600 * 24 * 30 * 12,"/");
$mysql->close();
header('Location:/');
?>