<? session_start();
   if (isset($_SESSION['basketcounter'])==false)
   {
   	$_SESSION['basketcounter']=0;
   }
   ?>
<?php ini_set("memory_limit", "32M"); ?>
<?php header("Content-Type: text/html; charset=utf-8");?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="shortcut icon" href="images/images/logo.png" type="image/png">
      <title>HockeyShop - Хоккейный интернет-магазин</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
      <script src="jquery.js" type="text/javascript"></script>
      <script src="popup.js" type="text/javascript"></script>
   </head>
   <body>
      <div id="page_wrap">
         <? require 'header.php';?>
         <div id="page">
            <div id="content">
               <div id="catalog">
                  <h2 class="post_ttl">КЛЮШКА ХОККЕЙНАЯ BAUER NEXUS 1N GRIP T1 </h2>
                  <div id="product">
                     <img src="putter/0.jpg" title="КЛЮШКА ХОККЕЙНАЯ BAUER NEXUS 1N GRIP T1">
                     <br>
                     <a href="putter_nexus1n.php" align="middle"> КЛЮШКА ХОККЕЙНАЯ BAUER NEXUS 1N GRIP T1 </a>
                     <br>
                     <p> 15 990 руб. </p>
                  </div>
                  <div id="description">
                     <p><b>Профессиональная</b></p>
                     <p>Хоккейная клюшка полевого игрока BAUER NEXUS 1N GRIP T1 SR топовая модель нового модельного ряда Nexus. При изготовлении этой клюшки используются эксклюзивные технологии, что гарантирует отличные игровые качества данной модели. Клюшка имеет цельную, односоставную конструкцию True One-Piece, которая изготавливается по технологии Monocomp.</p>
                     <p><b>Производитель:</b>	Bauer</p>
                     <p><b>Страна:</b>	Канада</p>
                     <p><b>Наличие:</b>	Есть</p>
                  </div>
               </div>
            </div>
         </div>
         <? require 'footer.php';?>
      </div>
   </body>
</html>
