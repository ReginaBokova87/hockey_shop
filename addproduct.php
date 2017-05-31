<?session_start();
if (isset($_SESSION['USER']['LOGIN']) && isset($_SESSION['adminmode'])) 
{
$productarticle=htmlspecialchars($_POST['productarticle']);
$productname=htmlspecialchars($_POST['productname']);
$productprice=(float)$_POST['productprice'];
$productimg=$_FILES['productimg']['name'];
$productsrc=htmlspecialchars($_POST['productsrc']);
copy($_FILES['productimg']['tmp_name'], 'top/'.$_FILES['productimg']['name']);
file_put_contents('files/top_productarticles.txt',$productarticle."\n", FILE_APPEND);
file_put_contents('files/top_productnames.txt',$productname."\n", FILE_APPEND);
file_put_contents('files/top_productprices.txt',$productprice."\n", FILE_APPEND);
file_put_contents('files/top_productimgs.txt',$productimg."\n", FILE_APPEND);
file_put_contents('files/top_productsrcs.txt',$productsrc."\n", FILE_APPEND);
echo '<script>location.href="index.php"</script>';
}
else header('Location:index.php');?>