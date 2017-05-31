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
			<h2 class="post_ttl">Кабинет администратора</h2>
					
				<div id="catalog">
					
					
					<? 
					
$db = mysql_connect ("localhost","root","") or die(mysql_error());
    mysql_select_db ("shop",$db);

if (isset($_SESSION['USER']['LOGIN']) && isset($_SESSION['adminmode'])) 
					{
					$id = $_SESSION['USER']['ID'];
				 $res = mysql_query("SELECT * FROM users WHERE `id` = '$id'");
    while($user = mysql_fetch_array($res)){
        if(isset($user['id'])){
				$login = $user['login'];
				$FIO = $user['FIO'];
				$email = $user['email'];
				$city = $user['city'];
        }
    }	
				echo '<div id="basket" style="font-size:18px;color:#464451;padding-left:20px" align="left">
				<p><b>Мой логин: ',$login,'</b></p>
				<p><b>ФИО: ',$FIO,'</b></p>
				<p><b>Мой E-mail: ',$email,'</b></p>
				<p><b>Город: ',$city,'</b></p>';
				$orderscount=file('files/ordersitems.txt', FILE_IGNORE_NEW_LINES);
		echo '<a href="new_orders.php" style="float:left;">  Новые заказы: ', count($orderscount), '</a><br>
				';
				echo '<p><b>Выбрать новость дня:</b>';
				
				$daynews=file('files/key_news.txt', FILE_IGNORE_NEW_LINES);
				
				echo '<form action="add_daynews.php" method="POST" >
				<select name="daynews">
				<option selected value="default">Выбрать</option>';
				for ($i=0; $i<count($daynews); $i++)
						{
							echo '<option VALUE="', $daynews[$i] ,'">', $daynews[$i] ,'</option>';
						}
				echo '</select>
				<input type="submit" value="Опубликовать">	
				</form></p>';	
				
				echo '<p><b>Выбрать рекламный баннер:</b><br>
				
				<form method="post" enctype="multipart/form-data" action="add_banner.php">
	
	
	<p>Рекламодатель:<br>
	<input type="text" size="40" name="bannername" required></p>
	<p>Изображение рекламного баннера (рекоменд. размер - 450x100px):<br>
	<input type="file" name="bannerimg" required></p>
	<p>Ссылка на сайт:<br>
	<input type="text" size="40" name="bannersrc" required></p>
	<input type="submit" value="Добавить баннер">
	</form>
				
				</p>';	
				
					}
					else 
					{
					echo '<p style="font-size:18px;color:#464451;padding-left:20px" align="center"><b>Эта страница доступна только для администраторов!</b></p>';
					}
					?>
				</div>
            </div>
        </div>
<?include '/footer.php';?>
</div>
</body>

</html>