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
      <link rel="shortcut icon" href="images/logo.png" type="image/png">
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
                  <h2 class="post_ttl">КОНЬКИ BAUER SUPREME TOTAL ONE MX3 </h2>
                  <div id="product">
                     <img src="skates/3.jpg" title="КОНЬКИ BAUER SUPREME TOTAL ONE MX3">
                     <br>
                     <a href="skates_mx3.php" align="middle"> КОНЬКИ BAUER SUPREME TOTAL ONE MX3 </a>
                     <br>
                     <p> 42 520 руб. </p>
                  </div>
                  <div id="description">
                     <p><b>Профессиональные</b></p>
                     <p>Флагманская модель в линейке Bauer Supreme хоккейные коньки полевого игрока BAUER SUPREME TOTAL ONE MX3 SR – является одной из легких и функциональных моделей коньков на рынке, за счет использования при производстве инновационных материалов и фирменных технологий.</p>
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
