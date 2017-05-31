<?session_start();
if (isset($_SESSION['USER']['LOGIN']) && isset($_SESSION['adminmode'])) 
{
$productnames=file('files/top_productarticles.txt', FILE_IGNORE_NEW_LINES);
$productnames=file('files/top_productnames.txt', FILE_IGNORE_NEW_LINES);
$productprices=file('files/top_productprices.txt', FILE_IGNORE_NEW_LINES);
$productimgs=file('files/top_productimgs.txt', FILE_IGNORE_NEW_LINES);
$productsrcs=file('files/top_productsrcs.txt', FILE_IGNORE_NEW_LINES);
for ($i=0; $i<count($productarticles); $i++)
{
	$productnumber=$_GET['product'.$i];
	if ($productnumber!='')
	{
		$productnumber=$i;
		break;
	}
}
file_put_contents('files/top_productarticles.txt', '');
file_put_contents('files/top_productnames.txt', '');
file_put_contents('files/top_productprices.txt', '');
file_put_contents('files/top_productimgs.txt', '');
file_put_contents('files/top_productsrcs.txt', '');
for ($i=$productnumber; $i<count($productarticles); $i++)
{
	$productarticles[$i]=$productarticles[$i+1];
	$productnames[$i]=$productnames[$i+1];
	$productprices[$i]=$productprices[$i+1];
	$productimgs[$i]=$productimgs[$i+1];
	$productsrc[$i]=$productsrcs[$i+1];
}
for ($i=0; $i<count($productarticles)-1; $i++)
{
	file_put_contents('files/top_productarticles.txt', $productarticles[$i]."\n", FILE_APPEND);
	file_put_contents('files/top_productnames.txt', $productnames[$i]."\n", FILE_APPEND);
	file_put_contents('files/top_productprices.txt', $productprices[$i]."\n", FILE_APPEND);
	file_put_contents('files/top_productimgs.txt', $productimgs[$i]."\n", FILE_APPEND);
	file_put_contents('files/top_productsrcs.txt', $productsrcs[$i]."\n", FILE_APPEND);
}
echo '<script>location.href="index.php"</script>';
}
else header('Location:index.php');?>