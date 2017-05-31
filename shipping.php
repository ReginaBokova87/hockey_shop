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
        <?include '/header.php';?>
        <div id="page">
            <div id="content">
				<h2 class="post_ttl">Доставка</h2>
				<div id="catalog">
				<div style="margin:40px; text-align:justify;"> 
				<p><b> Варианты доставки: </b></p>
 
<p><b>1. Самовывоз в офисе интернет магазина*</b> <br>
Вы можете оформить заказ и забрать его по адресу: г. Новосибирск, ул. Фрунзе 128, офис 35 <br>
Самовывоз из офиса по адресу г. Новосибирск, ул. Фрунзе 128 возможен с понедельника по пятницу с 10:00 до 17:00 <br>
* Бесплатно, любой способ оплаты, возможна примерка и отказ</p>
 
<p><b> 2. Курьерская доставка по Новосибирску</b>
<ul>
<li> Доставка по всей территории Новосибирска. Курьер привозит товар на следующий или через день</li>
<li>Курьерская доставка возможна с понедельника по пятницу с 9:00 до 21:00, в субботу с 9:00 до 18:00</li>
<li>Стоимость доставки по Новосибирску с 10:00 до 18:00 - 300 руб. C 18:00 до 21:00 надбавка 50% к тарифу</li>
<li>Примерка, возможность полностью или частично отказаться от заказанного товара в момент доставки</li>
<li>Возможен любой способ оплаты</li></ul></p>
 
<p><b>3. Самовывоз BoxBerry</b>
<ul>
<li>Более 100 пунктов самовывоза в крупных городах России</li>
<li>9 собственных отделений Boxberry в Москве</li>
<li>Доставка <b>БЕСПЛАТНАЯ</b> при предоплате заказа</li>
<li>При полном возврате товара или отказе от получения денежные средства возвращаются за вычетом стоимости доставки от 300 до 700 рублей в зависимости от объёма товарных вложений</li>
<li>Высокий уровень надежности</li>
<li>Возможность отслеживать отправление по номеру заказа на официальном сайте компании BoxBerry</li>
<li>Примерка не предусмотрена</li></ul></p>
 
<p><b>4. Почта России - Первый Класс</b>
<ul>
<li>Доступна для Всей России</li>
<li>Стоимость доставки высчитывается индивидуально в зависимости от веса, габаритов и стоимости товара</li>
<li>Любой способ оплаты (в том числе при получении)</li>
<li>Примерка до получения отсутствует</li></ul></p>
 
<p><b>5. Курьерская служба EMС Почта России</b>
<ul>
<li>Доставка по всей территории Российской Федерации в кратчайшие сроки</li>
<li>Стоимость доставки рассчитывается автоматически  в зависимости от веса, габаритов и стоимости товара</li>
<li>Высокий уровень надежности</li>
<li>Доставка по принципу «от двери до двери» (в населенных пунктах, где данная услуга оказывается компанией ЕМС Почта России, в остальных случаях пересылка осуществляется до отделения связи)</li>
<li>Возможность отслеживать отправление по номеру на официальном сайте компании ЕМС Почта России (информация об отправлении появляется на сайте компании ЕМС Почта России в течение 1-2 рабочих дней, после передачи отправления в компанию ЕМС Почта России)</li>
<li>Примерка не предусмотрен</li></ul></p>
 
<p><b>6. Russian Post (Доставка за пределы России)</b>
<ul>
<li>Стоимость доставки высчитывается индивидуально</li>
<li>Любой способ предоплаты</li>
<li>Примерка до получения отсутствует</li></ul></p>
</div>
            </div>
			</div>
        </div>
        <?include '/footer.php';?>
</div>		
</body>

</html>