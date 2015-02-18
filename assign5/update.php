<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if ($_SERVER['REQUEST_METHOD'] =='POST')
	{$errors = array( );
}
//creates an array for errors which can be displayed later as messages if need be

	if (empty($errors)) {
	require ('mysqli_connect.php');
	

}
//connects to the mysql database

echo "<b>Current Stock</b>:<br>";

//GATSBY:
	

$qgatsby = "SELECT quantity AS gatsbyquantity FROM products WHERE product_name = 'The Great Gatsby';";
$rgatsby = @mysqli_query ($dbc, $qgatsby);
if ($rgatsby) {
while ($row = mysqli_fetch_array($rgatsby, MYSQLI_ASSOC))
	{	$currentgatsbyq = $row['gatsbyquantity'];
	}
	
echo "The Great Gatsby: " . $currentgatsbyq . "<br>";


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qgatsby . '</p></div></center>';
	
}


//CATCHER IN THE RYE:

$qcatcher = "SELECT quantity AS catcherquantity FROM products WHERE product_name = 'Catcher in the Rye';";
$rcatcher = @mysqli_query ($dbc, $qcatcher);
if ($rcatcher) {
while ($row = mysqli_fetch_array($rcatcher, MYSQLI_ASSOC))
	{	$currentcatcherq = $row['catcherquantity'];
	}
	
echo "Catcher in the Rye: " . $currentcatcherq . "<br>";


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qcatcher . '</p></div></center>';
	
}

//THE WAVES:

$qwaves = "SELECT quantity AS wavesquantity FROM products WHERE product_name = 'The Waves';";
$rwaves = @mysqli_query ($dbc, $qwaves);
if ($rwaves) {
while ($row = mysqli_fetch_array($rwaves, MYSQLI_ASSOC))
	{	$currentwavesq = $row['wavesquantity'];
	}
	
echo "The Waves: " . $currentwavesq . "<br>";


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qwaves . '</p></div></center>';
	
}

//ULYSSES:

$qulysses = "SELECT quantity AS ulyssesquantity FROM products WHERE product_name = 'Ulysses';";
$rulysses = @mysqli_query ($dbc, $qulysses);
if ($rulysses) {
while ($row = mysqli_fetch_array($rulysses, MYSQLI_ASSOC))
	{	$currentulyssesq = $row['ulyssesquantity'];
	}
	
echo "Ulysses: " . $currentulyssesq . "<br>";
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qulysses . '</p></div></center>';
	
}

//THE STRANGER:

$qstranger = "SELECT quantity AS strangerquantity FROM products WHERE product_name = 'The Stranger';";
$rstranger = @mysqli_query ($dbc, $qstranger);
if ($rstranger) {
while ($row = mysqli_fetch_array($rstranger, MYSQLI_ASSOC))
	{	$currentstrangerq = $row['strangerquantity'];
	}
	
echo "The Stranger: " . $currentstrangerq . "<br>";


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qstranger . '</p></div></center>';
	
}

//PRIDE AND PREJUDICE:

$qpride = "SELECT quantity AS pridequantity FROM products WHERE product_name = 'Pride and Prejudice';";
$rpride = @mysqli_query ($dbc, $qpride);
if ($rpride) {
while ($row = mysqli_fetch_array($rpride, MYSQLI_ASSOC))
	{	$currentprideq = $row['pridequantity'];
	}
	
echo "Pride and Prejudice: " . $currentprideq . "<br>";



} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qpride . '</p></div></center>';
	
}

//TO KILL A MOCKINGBIRD:

$qmockingbird = "SELECT quantity AS mockingbirdquantity FROM products WHERE product_name = 'To Kill a Mockingbird';";
$rmockingbird = @mysqli_query ($dbc, $qmockingbird);
if ($rmockingbird) {
while ($row = mysqli_fetch_array($rmockingbird, MYSQLI_ASSOC))
	{	$currentmockingbirdq = $row['mockingbirdquantity'];
	}
	
echo "To Kill a Mockingbird: " . $currentmockingbirdq . "<br>";



} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qmockingbird . '</p></div></center>';
	
}

//ON THE ROAD:

$qroad = "SELECT quantity AS roadquantity FROM products WHERE product_name = 'On the Road';";
$rroad = @mysqli_query ($dbc, $qroad);
if ($rroad) {
while ($row = mysqli_fetch_array($rroad, MYSQLI_ASSOC))
	{	$currentroadq = $row['roadquantity'];
	}
	
echo "On the Road: " . $currentroadq . "<br><br>";




} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qroad . '</p></div></center>';
	
}

//



echo "<b>Number Sold:<br></b>";


$qgatsby2 = "SELECT quantity AS gatsbyquantity2 FROM sold WHERE product_name = 'The Great Gatsby';";
$rgatsby2 = @mysqli_query ($dbc, $qgatsby2);
if ($rgatsby2) {
while ($row = mysqli_fetch_array($rgatsby2, MYSQLI_ASSOC))
	{	$currentgatsby2 = $row['gatsbyquantity2'];
	}
	
	$intgatsby = (int)$currentgatsby2;
	
echo "The Great Gatsby: " . $intgatsby . "<br>";
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qgatsby . '</p></div></center>';
	
}

//

$qcatcher2 = "SELECT quantity AS catcherquantity2 FROM sold WHERE product_name = 'Catcher in the Rye';";
$rcatcher2 = @mysqli_query ($dbc, $qcatcher2);
if ($rcatcher2) {
while ($row = mysqli_fetch_array($rcatcher2, MYSQLI_ASSOC))
	{	$currentcatcher2 = $row['catcherquantity2'];
	}
	
	$intcatcher = (int)$currentcatcher2;
	
echo "Catcher in the Rye: " . $intcatcher . "<br>";
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qcatcher . '</p></div></center>';
	
}

//

$qwaves2 = "SELECT quantity AS wavesquantity2 FROM sold WHERE product_name = 'The Waves';";
$rwaves2 = @mysqli_query ($dbc, $qwaves2);
if ($rwaves2) {
while ($row = mysqli_fetch_array($rwaves2, MYSQLI_ASSOC))
	{	$currentwaves2 = $row['wavesquantity2'];
	}
	
	$intwaves = (int)$currentwavesq2;
	
echo "The Waves: " . $intwaves . "<br>";
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qwaves . '</p></div></center>';
	
}

//

$qulysses2 = "SELECT quantity AS ulyssesquantity2 FROM sold WHERE product_name = 'Ulysses';";
$rulysses2 = @mysqli_query ($dbc, $qulysses2);
if ($rulysses2) {
while ($row = mysqli_fetch_array($rulysses2, MYSQLI_ASSOC))
	{	$currentulysses2 = $row['ulyssesquantity2'];
	}
	
	$intulysses = (int)$currentulyssesq2;
	
echo "Ulysses: " . $intulysses . "<br>";
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qulysses . '</p></div></center>';
	
}

//

$qstranger2 = "SELECT quantity AS strangerquantity2 FROM sold WHERE product_name = 'The Stranger';";
$rstranger2 = @mysqli_query ($dbc, $qstranger2);
if ($rstranger2) {
while ($row = mysqli_fetch_array($rstranger2, MYSQLI_ASSOC))
	{	$currentstranger2 = $row['strangerquantity2'];
	}
	
	$intstranger = (int)$currentstrangerq2;
	
echo "The Stranger: " . $intstranger . "<br>";
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qstranger . '</p></div></center>';
	
}

$qpride2 = "SELECT quantity AS pridequantity2 FROM sold WHERE product_name = 'Pride and Prejudice';";
$rpride2 = @mysqli_query ($dbc, $qpride2);
if ($rpride2) {
while ($row = mysqli_fetch_array($rpride2, MYSQLI_ASSOC))
	{	$currentpride2 = $row['pridequantity2'];
	}
	
	$intpride = (int)$currentprideq2;
	
echo "Pride and Prejudice: " . $intpride . "<br>";
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qpride . '</p></div></center>';
	
}

$qmockingbird2 = "SELECT quantity AS mockingbirdquantity2 FROM sold WHERE product_name = 'To Kill a Mockingbird';";
$rmockingbird2 = @mysqli_query ($dbc, $qmockingbird2);
if ($rmockingbird2) {
while ($row = mysqli_fetch_array($rmockingbird2, MYSQLI_ASSOC))
	{	$currentmockingbird2 = $row['mockingbirdquantity2'];
	}
	
	$intmockingbird = (int)$currentmockingbird2;
	
echo "To Kill a Mockingbird: " . $intmockingbird . "<br>";
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qmockingbird . '</p></div></center>';
	
}

//

$qroad2 = "SELECT quantity AS roadquantity2 FROM sold WHERE product_name = 'On the Road';";
$rroad2 = @mysqli_query ($dbc, $qroad2);
if ($rroad2) {
while ($row = mysqli_fetch_array($rroad2, MYSQLI_ASSOC))
	{	$currentroad2 = $row['roadquantity2'];
	}
	
	$introad = (int)$currentroad2;
	
echo "On the Road: " . $introad . "<br>";
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qroad . '</p></div></center>';
	
}
?>

<form method="post" action="updateaction.php" name="updateform" id="updateform">
<p><b>Update Inventory:</b></p>
<p>The Great Gatsby <input type="text" maxlength="3" name="gatsbyupdate" value="" /></p>
<p>Catcher in the Rye <input type="text" maxlength="3" name="catcherupdate" value="" /></p>
<p>The Waves <input type="text" maxlength="3" name="wavesupdate" value="" /></p>
<p>Ulysses <input type="text" maxlength="3" name="ulyssesupdate" value="" /></p>
<p>The Stranger <input type="text" maxlength="3" name="strangerupdate" value="" /></p>
<p>Pride and Prejudice <input type="text" maxlength="3" name="prideupdate" value="" /></p>
<p>To Kill a Mockingbird <input type="text" maxlength="3" name="mockingbirdupdate" value="" /></p>
<p>On the Road <input type="text" maxlength="3" name="roadupdate" value="" /></p>
<p><input type="submit" value="submit" name="submit" /></p></form>
</body>
</html>