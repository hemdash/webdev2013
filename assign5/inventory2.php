<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require ('mysqli_connect.php');

$qgatsby = "SELECT quantity AS gatsbyquantity FROM products WHERE product_name = 'The Great Gatsby'";
$rgatsby = @mysqli_query ($dbc, $qgatsby);

while ($row = mysqli_fetch_array($rgatsby, MYSQLI_ASSOC))
	{	$currentgatsbyq = $row['gatsbyquantity'];
	}

$qcatcher = "SELECT quantity AS catcherquantity FROM products WHERE product_name = 'Catcher in the Rye'";
$rcatcher = @mysqli_query ($dbc, $qcatcher);


while ($row = mysqli_fetch_array($rcatcher, MYSQLI_ASSOC))
	{	$currentcatcherq = $row['catcherquantity'];
	}
	
$qwaves = "SELECT quantity AS wavesquantity FROM products WHERE product_name = 'The Waves'";
$rwaves = @mysqli_query ($dbc, $qwaves);

while ($row = mysqli_fetch_array($rwaves, MYSQLI_ASSOC))
	{	$currentwavesq = $row['wavesquantity'];
	}
	
$qulysses = "SELECT quantity AS ulyssesquantity FROM products WHERE product_name = 'Ulysses'";
$rulysses = @mysqli_query ($dbc, $qulysses);

while ($row = mysqli_fetch_array($rulysses, MYSQLI_ASSOC))
	{	$currentulyssesq = $row['ulyssesquantity'];
	}
	
$qstranger = "SELECT quantity AS strangerquantity FROM products WHERE product_name = 'The Stranger'";
$rstranger = @mysqli_query ($dbc, $qstranger);

while ($row = mysqli_fetch_array($rstranger, MYSQLI_ASSOC))
	{	$currentstrangerq = $row['strangerquantity'];
	}
	
$qpride = "SELECT quantity AS pridequantity FROM products WHERE product_name = 'Pride and Prejudice'";
$rpride = @mysqli_query ($dbc, $qpride);

while ($row = mysqli_fetch_array($rpride, MYSQLI_ASSOC))
	{	$currentprideq = $row['pridequantity'];
	}
	
$qmockingbird = "SELECT quantity AS mockingbirdquantity FROM products WHERE product_name = 'To Kill a Mockingbird'";
$rmockingbird = @mysqli_query ($dbc, $qmockingbird);


while ($row = mysqli_fetch_array($rmockingbird, MYSQLI_ASSOC))
	{	$currentmockingbirdq = $row['mockingbirdquantity'];
	}
	
$qroad = "SELECT quantity AS roadquantity FROM products WHERE product_name = 'On the Road'";
$rroad = @mysqli_query ($dbc, $qroad);


while ($row = mysqli_fetch_array($rroad, MYSQLI_ASSOC))
	{	$currentroadq = $row['roadquantity'];
	}

echo $currentgatsbyq;

 if ($currentgatsbyq !== 0)
{echo '<img src="outofstock.jpg">'};

?>

</body>
</html>