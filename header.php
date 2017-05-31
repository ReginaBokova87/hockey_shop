<div id="reg">
		
		<?if(!empty($_GET['auth'])){
                session_destroy();
				header('Location:index.php');
            }?>
            <? if(isset($_SESSION['USER'])):?>
                <p>Здравствуйте, <?=$_SESSION['USER']['LOGIN']?> | <?if ($_SESSION['USER']['LOGIN']=='Regina')
							{
								$_SESSION['adminmode']='activated';
								echo ' Должность: администратор | <a href="admin_cabinet.php">Кабинет администратора | <a href="index.php?auth=exit">Выйти</a>';
							}
							else 
								echo ' Должность: пользователь | <a href="index.php?auth=exit">Выйти</a>'; ?>
            <? if (isset($_SESSION['adminmode'])==false)
	{
		echo ' <a href="basket.php" style="float:right; margin-right:5px;"> Корзина: ', $_SESSION['basketcounter'], '</a>
		';
	}
	else
	{
		$orderscount=file('files/ordersitems.txt', FILE_IGNORE_NEW_LINES);
		echo '<a href="new_orders.php" style="float:right; margin-right:5px;">  Новые заказы: ', count($orderscount), '</a>
		';
	}?>
			<?else:?>
                <form method="POST" action="login.php">
                    <p align="center"> Авторизация 
                    <input  required type="text" name="login" placeholder="Логин"> 
                    <input required type="password" name="password" placeholder="Пароль"> 
                    <input type="submit" name="submit" value="Войти">
					<a id="button">Зарегистрироваться</a> <a href="basket.php">Корзина: <?=$_SESSION['basketcounter'] ?></a>
                </form>
				
				 
            <?endif;?>
		</div>
		
		<div id="popupContact">
		<a id="popupContactClose">x</a>

		<p id="contactArea">
			<form action="registration.php" method="POST">
		<p align="center"> Регистрация </p>
		<input required type="text" name="login" placeholder="Логин"><br>
		<input required type="password" name="password" placeholder="Пароль"><br>
		<input required type="text" name="FIO" placeholder="ФИО"><br>
		<input required type="text" name="email" placeholder="E-mail"><br>
		<input required type="text" name="city" placeholder="Город"><br>
		<input required type="submit" name="submit" value="Зарегистрироваться">
		
		</form>
		</p>
	</div>
	<div id="backgroundPopup"></div>
	

		<div>
        <a href="index.php"><img src="images/shapka.jpg" width="100%"></a>
        </div>
       
	   <div id="daynews">
		<?		
				$daynews=file('files/daynews.txt', FILE_IGNORE_NEW_LINES);
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