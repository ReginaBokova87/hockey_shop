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
					<div id="basket" style="font-size:18px;">
						<?if (isset($_SESSION['USER']['LOGIN']) && isset($_SESSION['adminmode'])) 
					{
					 header('Location:index.php');
					}
					else
					{
						echo' <p><b>Спасибо за заказ!</b>
</p>
Мы свяжемся с вами в ближайшее время для окончательного подтверждения заказа.
<br>
<p align="center"><a href="index.php">На главную</a></p>';}?>
					</div>
            </div>
        </div>
		</div>
<? require 'footer.php';?>
</div>
</body>

</html>
