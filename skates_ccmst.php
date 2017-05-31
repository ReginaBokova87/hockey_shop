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
					<h2 class="post_ttl">КОНЬКИ CCM SUPER TACKS </h2>
					<div id="product">
						<img src="skates/2.jpg" title="КОНЬКИ CCM SUPER TACKS ">
						<br>
						<a href="skates_ccmst.php" align="middle"> КОНЬКИ CCM SUPER TACKS </a>
						<br>
						<p> 14 990 руб. </p>
					</div>
					<div id="description">
					<p><b>Профессиональные</b></p>
					<p>Коньки хоккейные CCM SUPER TACKS SR взрослая модель топ-уровня, новинка возрожденной линейки Tacks, созданная в сотрудничестве с университетом Калгари по самым инновационным технологиям. Ботинок, выполненный по технологии MonoFrame 360, имеет цельную, литую конструкцию Outsole-Less, в которой отсутствует отдельная подошва. </p>
					<p><b>Производитель:</b>	CCM</p>
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