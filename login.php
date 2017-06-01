<? session_start();?>
<?php header("Content-Type: text/html; charset=utf-8");?>

		<?
        $dbconfig = require('db_params.php');
$mysqli = new mysqli($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['db']);
if ($mysqli->connect_errno) {
    echo "Ошибка: Не удалсь создать соединение с базой MySQL и вот почему: \n";
    echo "Номер_ошибки: " . $mysqli->connect_errno . "\n";
    echo "Ошибка: " . $mysqli->connect_error . "\n";
    exit;
}
        if(isset($_POST['submit'])) {
		
            $login = $mysqli->real_escape_string($_POST['login']);
            $password = md5($_POST['password']);
            $query = "SELECT * FROM users WHERE `login` = '.$login.' AND `password` = '$password' ";
                $result = $mysqli->query($query);
				while($user=$result->fetch_assoc()){
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
