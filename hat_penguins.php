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
					<h2 class="post_ttl">ШАПКА PITTSBURGH PENGUINS </h2>
					<div id="product">
						<img src="clothing/0.jpg" title="ШАПКА PITTSBURGH PENGUINS">
						<br>
						<a href="hat_penguins.php" > ШАПКА PITTSBURGH PENGUINS </a>
						<br>
						<p> 2 500 руб. </p>
					</div>
					<div id="description">
					<p><b>Производитель:</b>	47BRAND ABOMINATION </p>
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