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
               <h2 class="post_ttl">Новые заказы</h2>
               <div id="catalog">
                  <?if (isset($_SESSION['USER']['LOGIN']) && isset($_SESSION['adminmode'])) 
                     {?>
                  <div id="basket" style="background:none;font-size:18px;">
                     <form action="cleanorders.php" align="right" style="margin:5px;">
                        <input type="submit" value="Очистить заказы" >
                     </form>
                     <?php $logins=file('files/orderslogins.txt', FILE_IGNORE_NEW_LINES);
                        $orderingdates=file('files/orderingdates.txt', FILE_IGNORE_NEW_LINES);					
                        $fullnames=file('files/ordersfullnames.txt', FILE_IGNORE_NEW_LINES);
                        $phonenumbers=file('files/ordersphonenumbers.txt', FILE_IGNORE_NEW_LINES);
                        $emails=file('files/ordersemails.txt', FILE_IGNORE_NEW_LINES);
                        $addresses=file('files/ordersaddresses.txt', FILE_IGNORE_NEW_LINES);
                        $dates=file('files/ordersdates.txt', FILE_IGNORE_NEW_LINES);
                        $items=file('files/ordersitems.txt', FILE_IGNORE_NEW_LINES);
                        for ($i=0; $i<count($items); $i++)
                        {
                        echo ' <table style="margin-top:50px;"  id="gradient"><tr><th><h2 class="gradient">Заказ №',$i+1,'</h2></th></tr>
                        <tr><th><h2 class="post_ttl" style="margin-bottom:0px;border-radius:0px;">Данные о заказчике</h2></th></tr>
                        <tr><td><table><tr><th>Наименование</th><th>Значение</th></tr>
                        <tr><td>Логин</td><td>', htmlspecialchars($logins[$i]), '</td></tr>
                        <tr><td>Дата оформления заказа</td><td>', $orderingdates[$i], '</td></tr>
                        <tr><td>Ф.И.О.</td><td>', $fullnames[$i], '</td></tr>
                        <tr><td>Тел. номер</td><td>', $phonenumbers[$i], '</td></tr>
                        <tr><td>E-mail</td><td>', $emails[$i], ' </td></tr>
                        <tr><td>Адрес доставки</td><td>', $addresses[$i], '</td></tr>
                        <tr><td>Желаемае дата получения заказа</td><td>', $dates[$i], '</td></tr>
                        </table></td></tr>
                        <tr><th><h2 class="post_ttl" style="margin-bottom:0px;border-radius:0px;">Данные о заказе</h2></th></tr>
                        <tr><td><table><tr style="matgin-bottom:0px;"><th>Артикул</th><th>Наименование</th><th>Количество</th><th>Сумма к оплате</th></tr>
                        ',$items[$i],'
                        </table></td></tr></table>';
                        }
                        ;?>
                  </div>
                  <?	
                     }
                     else 
                     {
                     echo '<p style="font-size:24px;padding-left:20px;margin-top:150px;" align="center"><b>Эта страница доступна только для администраторов!</b></p>';
                     }
                     ?>
               </div>
            </div>
         </div>
         <? require 'footer.php';?>
      </div>
   </body>
</html>
