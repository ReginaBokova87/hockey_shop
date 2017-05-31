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
        <?include '/header.php';?>
        <div id="page">
            <div id="content">
			<h2 class="post_ttl">Контакты</h2>
				<div id="catalog">
				<div style="margin:40px; text-align:justify;">
				<p><b> Адрес офиса: </b> г.Новосибирск, ул.Фрунзе 128, офис 35
				<p><b> Телефон: </b>8(383)332-42-02 </p>

<iframe name="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2286.1955632798363!2d82.95470377361035!3d55.03978923557202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe5f2324803ab%3A0x4f0ef80de5c6bfff!2z0YPQuy4g0KTRgNGD0L3Qt9C1LCAxMjgsINCd0L7QstC-0YHQuNCx0LjRgNGB0LosINCd0L7QstC-0YHQuNCx0LjRgNGB0LrQsNGPINC-0LHQuy4sIDYzMDExMg!5e0!3m2!1sru!2sru!4v1430888186018" width="60%" height="60%" scrolling="auto" align="right"></iframe>
</iframe>
<OL>
<LI><A href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2286.1955632798363!2d82.95470377361035!3d55.03978923557202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe5f2324803ab%3A0x4f0ef80de5c6bfff!2z0YPQuy4g0KTRgNGD0L3Qt9C1LCAxMjgsINCd0L7QstC-0YHQuNCx0LjRgNGB0LosINCd0L7QstC-0YHQuNCx0LjRgNGB0LrQsNGPINC-0LHQuy4sIDYzMDExMg!5e0!3m2!1sru!2sru!4v1430888186018" width="60%" height="60%" border="1" target="frame">Как нас найти в городе?</A></LI> 
<LI><a href="images/Zdanie.png" target="frame">Как нас найти в здании?</A></LI> 
</OL> 
</div>
            </div>
			</div>
        </div>
        <?include '/footer.php';?>
</div>
</body>

</html>