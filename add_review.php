<?php 
$names=htmlspecialchars($_POST['name']);
$reviews=htmlspecialchars($_POST['review']);
$reviews_dates=date("d.m.y");
$reviews_times=date("H:i:s");
file_put_contents('files/review_name.txt',$names."\n", FILE_APPEND);
file_put_contents('files/review_text.txt',$reviews."\n", FILE_APPEND);
file_put_contents('files/review_date.txt',$reviews_dates."\n", FILE_APPEND);
file_put_contents('files/review_time.txt',$reviews_times."\n", FILE_APPEND);
echo '<script>location.href="reviews.php"</script>';
?>
