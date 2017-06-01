<div id="footer">
			<?php
		$handle = file_get_contents("counter.txt");
		$handle++;
		$fp = @fopen("counter.txt","w");
		fwrite($fp,$handle);
		fclose($fp);
		echo "<p><b>Число посещений: $handle</b></p>";
	?>
	
	
          
<p><b>© 2016-2017 <a href="index.php" title="HockeyShop.Ru">HockeyShop.Ru</a> | Копирование материалов разрешено с указанием источника <a href="index.php" title="HockeyShop.Ru">HockeyShop.Ru</b></a></p>
</div>	
