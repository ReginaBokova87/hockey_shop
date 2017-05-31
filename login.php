<? session_start();?>
<?php header("Content-Type: text/html; charset=utf-8");?>

		<?
        $db = mysql_connect ("localhost","root","") or die(mysql_error());
        mysql_select_db ("shop",$db);
        if(isset($_POST['submit'])) {
            $login = $_POST['login'];
            $password = md5($_POST['password']);
            $query = mysql_query("SELECT * FROM users WHERE `login` = '$login' AND `password` = '$password' ");
                while($user = mysql_fetch_array($query)){
                    if($user){
                        if(isset($user['id'])){
                            echo "Вы успешно зашли в систему!"; 
							$_SESSION['USER']  = array(
                                'ID' => $user['id'],
                                'LOGIN' => $user['login'],
                            );
							if ($_SESSION['USER']['LOGIN']=='Regina')
							{
								$_SESSION['adminmode']='activated';
								echo ' Должность: администратор | <a href="admin_cabinet.php">Кабинет администратора | <a href="/index.php?auth=exit">Выйти</a>';
							}
							else 
								{
								echo ' Должность: пользователь | <a href="exit.php">Выйти</a>'; 
								}
							echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
							exit;	
                        }
                    }

                }
        }
		echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
        ?>