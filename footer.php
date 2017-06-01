<div id="footer">
			<span><?php
if(empty($_COOKIE['session_key'])){
	$count2 = file_get_contents("counter2.txt");
	$count2++;
	setcookie('session_key', $count2);
	
	$fp = @fopen("counter2.txt", "w");
	fwrite($fp, $count2);
	fclose($fp);
	}	
	echo '<p><b>Число посетителей: '.$_COOKIE['session_key'].'</b></p>';
?></span>
                        <span><?php
		$handle = file_get_contents("counter.txt");
		$handle++;
		$fp = @fopen("counter.txt","w");
		fwrite($fp,$handle);
		fclose($fp);
		echo "<p><b>Число посещений: $handle</b></p>";
	?></span>
	
	
          
<p><b>© 2016-2017 <a href="index.php" title="HockeyShop.Ru">HockeyShop.Ru</a> | Копирование материалов разрешено с указанием источника <a href="index.php" title="HockeyShop.Ru">HockeyShop.Ru</b></a></p>
</div>	
