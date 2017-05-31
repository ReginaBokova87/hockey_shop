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
        <?require '/header.php';?>
        <div id="page">
            <div id="content">
				<div id="catalog">
					<h2 class="post_ttl">ШАЙБА СУВЕНИРНАЯ GUFEX ЦВЕТНАЯ</h2>
					<div id="product">
						<img src="accessories/4.jpg" title="ШАЙБА СУВЕНИРНАЯ GUFEX ЦВЕТНАЯ">
						<br>
						<a href="hockey_puck.php" align="middle"> ШАЙБА СУВЕНИРНАЯ </a>
						<br>
						<p> 180 руб. </p>
					</div>
					<div id="description">
					<p><b>Производитель:</b>	GUFEX</p>
					<p><b>Страна:</b>	Канада</p>
					<p><b>Наличие:</b>	Есть</p>
					</div>
				</div>
            </div>
        </div>
        <?require '/footer.php';?>
</div>	
</body>

</html>