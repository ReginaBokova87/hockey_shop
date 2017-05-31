<?php session_start();
if (isset($_SESSION['USER']['LOGIN']) && isset($_SESSION['adminmode'])) 
{
echo header('Location:index.php');
}
else
{
$productarticles=file('files/top_productarticles.txt', FILE_IGNORE_NEW_LINES);
$productnames=file('files/top_productnames.txt', FILE_IGNORE_NEW_LINES);
$productprices=file('files/top_productprices.txt', FILE_IGNORE_NEW_LINES);
for ($i=0; $i<count($productarticles); $i++)
{
	$productnumber=$_GET['product'.$i];
	if ($productnumber!='')
	{
		$productnumber=$i;
		break;
	}
}
$_SESSION['item'.$_SESSION['basketcounter']]=$productarticles[$productnumber];
$_SESSION['item_name'.$_SESSION['basketcounter']]=$productnames[$productnumber];
$_SESSION['price'.$_SESSION['basketcounter']]=$productprices[$productnumber];
$_SESSION['quantity'.$_SESSION['basketcounter']]=1;
$_SESSION['basketcounter']++;
echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';;

}?>