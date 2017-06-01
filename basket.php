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
			<h2 class="post_ttl">Корзина товаров</h2>
				<div id="catalog">
					<div id="basket">
					<?php 
						$sum=0;
						for ($i=0; $i<$_SESSION['basketcounter']; $i++)
{
	
	echo '
	<table>
	<tr><th>Артикул</th><th>Наименование</th><th>Цена</th><th>Количество</th><th>Сумма</th><th rowspan="2"><form action="delfrombasket.php">
	<input type="submit" value="Удалить из корзины" name="item', $i, '">
	</form></th></tr>
	<tr>
	<td id="basket_article">
	<b>', $_SESSION['item'.$i], '</b>
	</td>
	<td id="basket_item_name">
	<b>', $_SESSION['item_name'.$i], '</b>
	</td>
	<td id="basket_price">', $_SESSION['price'.$i], ' руб.
	</td>
	<td id="basket_quantity">
	<form action="changequantity.php">
	<input type="submit" value="-" name="changequantity', $i, '">
	 ', $_SESSION['quantity'.$i], ' 
	<input type="submit" value="+" name="changequantity', $i, '">
	</form>
	</td>
	<td id="sum">
	<p align="right">', $_SESSION['price'.$i]*$_SESSION['quantity'.$i], ' руб.</b></p>
	</td>
	
	</tr>
	</table>
	';
	$sum=$sum+$_SESSION['price'.$i]*$_SESSION['quantity'.$i];
}
if ($_SESSION['basketcounter']==0)
{
	echo '
	<tr>
	<td colspan="3">
	<br>
	Корзина пуста.
	<br>
	<br>
	</td>
	</tr>
	';
}
else
{
	echo '
	</table>
	<table width="1207" align="center" border="4">
	<tr>
	<td align="right" colspan="3">
	<b>Итого к оплате: ', $sum, ' руб.</b>
	<form action="ordering.php">
	<br>
	<input type="submit" value="Оформить заказ">
	</form>
	</td>
	</tr>
	</table>
	';
}
?>
				</div>
            </div>
        </div>
		</div>
<? require 'footer.php';?>
</div>
</body>

</html>
