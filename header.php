<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zalevskaya market</title>
        <link rel="stylesheet" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/css/font-awesome.css">
        <link rel="stylesheet" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/css/main.css">
        <link rel="stylesheet" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/css/bootstrap.css">
    </head>
    <body>
            <div class="header">
                <div class="navbar transparent navbar-inverse navbar-static-top hr">
                    <button class="navbar-brand logo" onclick="window.location.href='http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/index.php'"></button>
                    <div class="navbar-brand-left">
                    </div>
                        <div class="container">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                
                                <div class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav navbar-left">
                                        <li class="dropdown dp-style">
                                        <a class="dropdown-toggle" id="allgoods" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/category/allgoods.php">Все</a>
                                        </li>
                                        <li class="dropdown dp-style">
                                            <a class="dropdown-toggle" id="women" data-toggle="dropdown">Женщинам</a>
                                            <ul class="dropdown-menu">
                                                <a class="dropdown-item" id="text-goods" href="#">Куртки<br></a>
                                                <a class="dropdown-item" id="text-goods" href="#">Джинсы<br></a>
                                                <a class="dropdown-item" id="text-goods" href="#">Обувь<br></a>
                                                <a class="dropdown-item" id="text-goods" href="#">Акссесуары</a>
                                            </ul>
                                        </li>
                                        <li class="dropdown dp-style">
                                            <a class="dropdown-toggle" id="men" data-toggle="dropdown">Мужинам</a>
                                            <ul class="dropdown-menu">
                                            <a class="dropdown-item" id="text-goods" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/category/men/jacket/index.php">Куртки<br></a>
                                            <a class="dropdown-item" id="text-goods" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/category/men/jeans/index.php">Джинсы<br></a>
                                            <a class="dropdown-item" id="text-goods" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/category/men/cross/index.php">Обувь<br></a>
                                            </ul>
                                        </li>
                                        <li class="dropdown dp-style">
                                            <a class="dropdown-toggle" id="kids" data-toggle="dropdown">Детям</a>
                                            <ul class="dropdown-menu">
                                                <a class="dropdown-item" id="text-goods" href="#">Куртки<br></a>
                                                <a class="dropdown-item" id="text-goods" href="#">Джинсы<br></a>
                                                <a class="dropdown-item" id="text-goods" href="#">Обувь<br></a>
                                            </ul>
                                        </li>
                                                <li><a id="new" href="#">Новинки</a></li>
                                                <li><a id="aboutus" href="#">О нас</a></li>
                                        </ul>
                                        <ul class="nav navbar-nav navbar-right">
                                        <?php
                                        error_reporting(0);
                                        if ($_COOKIE['user'] == ''):
                                        ?>
                                        <li><a href class="btnlog"><i class="fa fa-user" id="log" aria-hidden="true">Войти</i></button></a></li>
                                        <?php else: ?>
                                        <li> <a href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/elements_page/formExit.php" id="log">Привет, <?=$_COOKIE['user']?>   <i class="fa fa-sign-out" aria-hidden="true"></i></a><div></li>
                                        <?php endif;?>
                                        <li><a class="btnshop" href="http://<?=$_SERVER["SERVER_NAME"]?>:<?=$_SERVER['SERVER_PORT']?>/cart/cart.php"><i class="fa fa-shopping-bag" id="reg" aria-hidden="true">Корзина</i></a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>