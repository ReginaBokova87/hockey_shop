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
	
		
		

        <div id="reg">
<?php
$dbconfig = require('db_params.php');
$mysqli = new mysqli($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['db']);
if ($mysqli->connect_errno) {
    echo "Ошибка: Не удалсь создать соединение с базой MySQL и вот почему: \n";
    echo "Номер_ошибки: " . $mysqli->connect_errno . "\n";
    echo "Ошибка: " . $mysqli->connect_error . "\n";
    exit;
}
?>

<?
 if(isset($_POST['submit'])){
     $login = $_POST['login'];
     $password = md5($_POST['password']);
     $FIO = $_POST['FIO'];
     $email = $_POST['email'];
     $city = $_POST['city'];
     $registration = true;
     $query = "SELECT * FROM users WHERE `login` = '$login'";
	 $result = $mysqli->query($query);
    while($user=$result->fetch_assoc()){
        if(isset($user['id'])){
            $registration = false;
        }
    }
    if($registration !== false){
		
        $query  = "INSERT INTO users (`login`, `password`, `FIO`, `email`, `city`) VALUES ('$login', '$password', '$FIO', '$email', '$city')";
		$result = $mysqli->query($query);
        if($result) {
            echo "Вы зарегистрированны как $login";
            echo '<a href="index.php"> | Авторизация</a>';
        }
    } else {
        echo "Такой пользователь уже существует";
    }

}
?>
           
		</div>
		
		
		
	

		<div>
        <a href="index.html"><img src="shapka.jpg" width="100%"></a>
        </div>
       <div id="daynews">
		<?		
				$daynews=file('daynews.txt', FILE_IGNORE_NEW_LINES);
				for ($i=0; $i<count($daynews); $i++)
						{
							echo $daynews[$i];
						}
				
						
				?>
		</div>
       <div>
            <ul id="menu">
                <li><a href="index.php">Главная</a>
                </li>
                <li>
                    <a href="shipping.php">Доставка</a>
                </li>
				<li>
                    <a href="about.php">О магазине</a>
				</li>
                <li>
                    <a href="contacts.php">Контакты</a>
                </li>
                <li>
                    <a href="reviews.php">Отзывы</a>
                </li>
            </ul>
        </div>
        <div id="page">
            <div id="content">
				<div id="catalog">
					<h2 class="post_ttl">Каталог товаров</h2>
					<?php
						$productnames=file('top_productnames.txt', FILE_IGNORE_NEW_LINES);
						$productimgs=file('top_productimgs.txt', FILE_IGNORE_NEW_LINES);
						$productprices=file('top_productprices.txt', FILE_IGNORE_NEW_LINES);
						$productsrcs=file('top_productsrcs.txt', FILE_IGNORE_NEW_LINES);
						for ($i=0; $i<count($productnames); $i++)
						{
							echo '
								<div id="product">
						<a href="',$productsrcs[$i],'" title="',$productnames[$i],'"> <img src="top/',$productimgs[$i],'"></a>
						<br>
						<a href="',$productsrcs[$i],'" align="middle">',$productnames[$i],'</a>
						<br>
						<p align="center">',$productprices[$i],'руб.</p>';
					
			
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
			if ($_SESSION['item'.$j]==$productnames[$i])
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
	
	<p>Название:<br>
	<input type="text" size="40" name="productname" required></p>
	<p>Цена:<br>
	<input type="text" name="productprice" required></p>
	<p>Картинка (рекоменд. размер - 200x200px):<br>
	<input type="file" name="productimg" required></p>
	<p>Ссылка на товар(если есть):<br>
	<input type="text" size="40" name="productsrc" required></p>
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
			
		