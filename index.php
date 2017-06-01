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
         <? require 'header.php';?>
        <div id="page">
            <div id="content">
				<h2 class="post_ttl">Каталог товаров</h2>
				<div id="catalog">
					<div id="banner">
					<?php
					$bannernames=file('files/bannernames.txt', FILE_IGNORE_NEW_LINES);
					$bannerimgs=file('files/bannerimgs.txt', FILE_IGNORE_NEW_LINES);
					$bannersrcs=file('files/bannersrcs.txt', FILE_IGNORE_NEW_LINES);
						for ($i=0; $i<count($bannernames); $i++)
						{
							echo '<a href="',$bannersrcs[$i],'" > <img src="banner/',$bannerimgs[$i],'" alt="',$bannernames[$i],'"></a>';
						}
					?>
					</div>
					<?php
						$productarticles=file('files/top_productarticles.txt', FILE_IGNORE_NEW_LINES);
						$productnames=file('files/top_productnames.txt', FILE_IGNORE_NEW_LINES);
						$productimgs=file('files/top_productimgs.txt', FILE_IGNORE_NEW_LINES);
						$productprices=file('files/top_productprices.txt', FILE_IGNORE_NEW_LINES);
						$productsrcs=file('files/top_productsrcs.txt', FILE_IGNORE_NEW_LINES);
						for ($i=0; $i<count($productarticles); $i++)
						{
							echo '
								<div id="product">
						<a href="',$productsrcs[$i],'"> <img src="top/',$productimgs[$i],'" alt="',$productnames[$i],'"></a>
						<br>
						<a href="',$productsrcs[$i],'" target="_blank" align="middle">',$productnames[$i],'</a>
						<br>
						<p align="center">',$productprices[$i],'руб.</p>
						<p align="center">Артикул: ',$productarticles[$i],'</p>';
					
			
						if (isset($_SESSION['USER']['LOGIN']) && isset($_SESSION['adminmode']))
	{
		echo '<form action="delproduct.php" method="GET">
		<center><input type="submit" value="Удалить товар" name="product',$i,'"/></center>
		</form>';
	}
	else
	{
		
		echo '<form action="addtobasket.php">
		';
		
		
		for ($j=0; $j<$_SESSION['basketcounter']; $j++)
		{
			if ($_SESSION['item'.$j]==$productarticles[$i])
			{
				echo '
				<center><input type="submit" value="Добавлено в корзину" name="product', $i, '" disabled></center>
				';
				$is_item_added[$i]=1;
			}
		}
		
		if ($is_item_added[$i]!=1)
			{
				echo '
				<center><input type="submit" value="Добавить в корзину" name="product', $i, '"></center>
				';
			}
		
		echo '</form>';
					};echo'</div>';}	
					
					
					
		if (isset($_SESSION['USER']['LOGIN']) && isset($_SESSION['adminmode']))
{
	echo '<div id="addprod">
	<h2 class="post_ttl">Добавление товаров</h2>
	<form method="post" enctype="multipart/form-data" action=addproduct.php>
	
	<p>Артикул:<br>
	<input type="text" size="40" name="productarticle" required></p>
	<p>Название:<br>
	<input type="text" size="40" name="productname" required></p>
	<p>Цена:<br>
	<input type="text" name="productprice" required></p>
	<p>Картинка (рекоменд. размер - 200x200px):<br>
	<input type="file" name="productimg" required></p>
	<p>Ссылка на товар(если есть):<br>
	<input type="text" size="40" name="productsrc"></p>
	<input type="submit" value="Добавить товар">
	</form>
	</div>';
}			
				?>
				</div>
            </div>
        </div>
<? require 'footer.php';?>
</div>
</body>
</html>
