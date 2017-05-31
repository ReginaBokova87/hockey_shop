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
			<h2 class="post_ttl">Оформление заказа</h2>
				<div id="catalog">
					<div id="basket">
					<?if (isset($_SESSION['USER']['LOGIN']) && isset($_SESSION['adminmode'])) 
					{
					echo '<p style="font-size:24px;padding-left:20px;margin-top:150px;" align="center"><b>Эта страница не доступна для просмотра администраторами!</b></p>';
					}
					else
					{
					echo'<h2 class="post_ttl" style="margin-bottom:-25px;">Товары</h2><table>
	<tr><th>Артикул</th><th>Наименование</th><th>Цена</th><th>Количество</th><th>Сумма к оплате</th></tr>';
for ($i=0; $i<$_SESSION['basketcounter']; $i++)
{
	$sum=$sum+$_SESSION['price'.$i]*$_SESSION['quantity'.$i];
	echo '
	<tr><td>', $_SESSION['item'.$i], '</td><td>', $_SESSION['item_name'.$i], '</td><td>', $_SESSION['price'.$i], '</td><td>', $_SESSION['quantity'.$i], ' шт. </td>
	<td> ', $_SESSION['price'.$i]*$_SESSION['quantity'.$i], ' руб.</td>
	<br>
	';
}
echo '
<tr><td style="background:#e6e6fa;"><b>Итого к оплате: </b></td><td style="background:#e6e6fa; text-align: right; padding-right:40px;" colspan="4"><b>',$sum, ' руб.</b></td></table>
<h2 class="post_ttl" style="margin-top:15px;">Заполнение формы заказа</h2>
<form action="confirmordering.php" method="get">
<input type="text" size="30" name="fullname" required placeholder="Ф.И.О."><br><br>
<input type="text" size="30" name="phonenumber" required placeholder="Номер телефона"><br><br>
<input type="text" size="30" name="email" required placeholder="E-mail"><br><br>
<input type="text" size="85" name="adress" placeholder="Адрес доставки (оставьте поле пустым, если желаете забрать товар самостоятельно):"><br><br>
<input type="text" size="50" name="date" required placeholder="Желаемая дата доставки (самовывоза) товара:"><br>
</td>
</tr>
<tr>
<td align="right" colspan="3">
<br>
<input type="submit" value="Подтвердить заказ" style="margin-top:20px;">
<br>
<br>
</form>
</td>
</tr>
';}
?>
				</div>
            </div>
        </div>
		 </div>
<? require 'footer.php';?>
</div>
</body>

</html>