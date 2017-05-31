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
					<h2 class="post_ttl">ПЕРЧАТКИ WARRIOR DYNASTY AX1 PM </h2>
					<div id="product">
						<img src="leathers/0.jpg" title="ПЕРЧАТКИ WARRIOR DYNASTY AX1 PM">
						<br>
						<a href="leathers_dinasty.php" align="middle"> ПЕРЧАТКИ WARRIOR DYNASTY AX1 PM </a>
						<br>
						<p> 42 500 руб. </p>
					</div>
					<div id="description">
					<p><b>Профессиональные</b></p>
					<p>Хоккейные перчатки WARRIOR Dynasty AX1 – это профессиональная модель Warrior 2014 года. Традиционный баланс защиты, мобильности и классического внешнего вида;Мягкие сетчатые вставки, анатомическая форма тыльной стороны ладони улучшают чувство клюшки;Защитные элементы WarLite обеспечивают надежную защиту кисти;Ладошка из материала Clarino для идеального чувства клюшки;Подкладка с технологией WarTech и Polygiene® сохраняет комфортную температуру в перчатках, сухие руки и препятствует возникновению неприятного запаха.</p>
					<p><b>Производитель:</b>	Warrior</p>
					<p><b>Страна:</b>	США</p>
					<p><b>Наличие:</b>	Есть</p>
					</div>
				</div>
            </div>
        </div>
        <?require '/footer.php';?>
</div>
</body>

</html>