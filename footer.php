<div id="footer">
			<?php
if(empty($_COOKIE['session_key'])){
	$count2 = file_get_contents('files/counter2.txt');
	$count2++;
	setcookie('session_key', $count2);
	file_put_contents('files/counter2.txt',$count2);
	}	
	echo "<p><b>Число посетителей: ".$_COOKIE['session_key']."<br>";
?>
<?php
		$handle = file_get_contents('files/counter.txt');
		$handle++;
		file_put_contents('files/counter2.txt',$handle);
		echo "<p><b> Число посещений: $handle";
	?>
          
<p><b>© 2016-2017 <a href="index.php" title="HockeyShop.Ru">HockeyShop.Ru</a> | Копирование материалов разрешено с указанием источника <a href="index.php" title="HockeyShop.Ru">HockeyShop.Ru</b></a></p>
</div>	
