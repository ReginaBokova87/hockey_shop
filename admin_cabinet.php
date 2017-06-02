<?
   session_start();
   if (isset($_SESSION['basketcounter']) == false) {
       $_SESSION['basketcounter'] = 0;
   }
   ?>
<?php
   ini_set("memory_limit", "32M");
   ?>
<?php
   header("Content-Type: text/html; charset=utf-8");
   ?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="shortcut icon" href="images/logo.png" type="image/png">
      <title>HockeyShop - Хоккейный интернет-магазин</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
      <script src="jquery.js" type="text/javascript"></script>
      <script src="popup.js" type="text/javascript"></script>
   </head>
   <body>
      <div id="page_wrap">
         <?
            require 'header.php';
            ?>
         <div id="page">
            <div id="content">
               <h2 class="post_ttl">Кабинет администратора</h2>
               <div id="catalog">
                  <?
                     $dbconfig = require('db_params.php');
                     $mysqli   = new mysqli($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['db']);
                     if ($mysqli->connect_errno) {
                         echo "Ошибка: Не удалсь создать соединение с базой MySQL и вот почему: \n";
                         echo "Номер_ошибки: " . $mysqli->connect_errno . "\n";
                         echo "Ошибка: " . $mysqli->connect_error . "\n";
                         exit;
                     }
                     if (isset($_SESSION['USER']['LOGIN']) && isset($_SESSION['adminmode'])) {
                         $id     = $_SESSION['USER']['ID'];
                         $query  = "SELECT * FROM users WHERE `id` = '$id' ";
                         $result = $mysqli->query($query);
                         while ($user = $result->fetch_assoc()) {
                             if (isset($user['id'])) {
                                 $login = $user['login'];
                                 $FIO   = $user['FIO'];
                                 $email = $user['email'];
                                 $city  = $user['city'];
                             }
                         }
                         echo '<div id="basket" style="font-size:18px;color:#464451;padding-left:20px" align="left">
                     				<p><b>Мой логин:</b> ', htmlspecialchars($login), '</p>';
                         $orderscount = file('files/ordersitems.txt', FILE_IGNORE_NEW_LINES);
                         echo '<a href="new_orders.php" style="float:left;">  Новые заказы: ', count($orderscount), '</a><br>
                     				';
                         echo '<p><b>Выбрать новость дня:</b>';
                         
                         $daynews = file('files/key_news.txt', FILE_IGNORE_NEW_LINES);
                         
                         echo '<form action="add_daynews.php" method="POST" >
                     				<select name="daynews">
                     				<option selected value="Мы всегда рады видеть вас в нашем магазине!">Выбрать</option>';
                         for ($i = 0; $i < count($daynews); $i++) {
                             echo '<option VALUE="', $daynews[$i], '">', $daynews[$i], '</option>';
                         }
                         echo '</select>
                     				<input type="submit" value="Опубликовать">	
                     				</form></p>';
                         
                         echo '<p><b>Выбрать рекламный баннер:</b><br>
                     				
                     				<form method="post" enctype="multipart/form-data" action="add_banner.php">
                     	
                     	
                     	<p>Рекламодатель:<br>
                     	<input type="text" size="40" name="bannername" required></p>
                     	<p>Изображение рекламного баннера (рекоменд. размер - 450x100px):<br>
                     	<input type="file" name="bannerimg" required></p>
                     	<p>Ссылка на сайт:<br>
                     	<input type="text" size="40" name="bannersrc" required></p>
                     	<input type="submit" value="Добавить баннер">
                     	</form>
                     				
                     				</p>';
                         
                     } else {
                         echo '<p style="font-size:18px;color:#464451;padding-left:20px" align="center"><b>Эта страница доступна только для администраторов!</b></p>';
                     }
                     ?>
               </div>
            </div>
         </div>
         <?
            require 'footer.php';
            ?>
      </div>
   </body>
</html>
