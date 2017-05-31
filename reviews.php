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
			<h2 class="post_ttl">Отзывы</h2>
			<div id="catalog">
				<div style="margin:40px; text-align:justify;"> 
				<form action="add_review.php" method="post">
				<p><b>Понравилась продукция нашего магазина? Хотите оставить свой отзыв?</b></p>
				<p><b>Введите свое имя и отзыв</b></p>
				<p>
				<input type="text" name="name" placeholder="Имя" required><br><br>
				<textarea rows="10" cols="45" placeholder="Отзыв" name="review" required></textarea>
				</p>
				<p><input type="submit" value="Отправить"></p>
				</form>		
</div>	
					<?	$names=file('files/review_name.txt', FILE_IGNORE_NEW_LINES);
						$reviews=file('files/review_text.txt', FILE_IGNORE_NEW_LINES);
						$reviews_dates=file('files/review_date.txt', FILE_IGNORE_NEW_LINES);
						$reviews_times=file('files/review_time.txt', FILE_IGNORE_NEW_LINES);
						for ($i=0; $i<count($names); $i++)
						{
							echo '<div id="basket">
						<p><b>',$names[$i],' (',$reviews_dates[$i],' ',$reviews_times[$i],')</b></p>
						<p>',$reviews[$i],'</p>
						</div>';
						}
				
				?>
			</div>
            </div>
        </div>
        <?include '/footer.php';?>
</div>		
</body>

</html>