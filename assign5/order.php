<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="stylesheet.css" type="text/css" rel="stylesheet" title="main">
<link href="stylesheet2.css" type="text/css" rel="alternate stylesheet" title="alt1">
<link href="stylesheet3.css" type="text/css" rel="alternate stylesheet" title="alt2">
<title>Order</title>
<script language="javascript">
function personal() {
	window.location.href="personal.php";}
	
function inventory() {
	window.location.href="inventory.php";}
	
function confirmation() {
	window.location.href="confirmation.php";}
	
function order() {
	window.location.href="order.php";}
	
function resetInfo() {
window.location.href="reset.php";}
	
	function setActiveStyleSheet(title) {
   var i, a, main;
   a = document.getElementsByTagName("link");
 for(i=0; i< a.length ; i++) {
 if(a[i].getAttribute("rel").indexOf("style") != -1
    && a[i].getAttribute("title")) {
   a[i].disabled = true;
   if(a[i].getAttribute("title") == title) a[i].disabled = false;
     }
   }
}
</script>
</head>

<body>
<h1><center>Order</center></h1>
<div class="sidebar"><center><p><b>Order Navigation</b></p>
<p><input type="radio" name="page" onClick="personal()"> Personal Info</p>
<p><input type="radio" name="page" onClick="inventory()"> Product Choice</p>
<p><input type="radio" name="page" onClick="confirmation()"> Confirmation</p>
<p><input type="radio" name="page" onClick="order()" />Order</p>
<p><input type="radio" name="page" onClick="resetInfo()"> Reset Order Info</p>
<br><br>
<p><b>See the shop your way!</b></p>
<p><input type="radio" name="look" onClick="setActiveStyleSheet('main')" checked> Light & dark blue</p>
<p><input type="radio" name="look" onClick="setActiveStyleSheet('alt1')"> Black & white</p>
<p><input type="radio" name="look" onClick="setActiveStyleSheet('alt2')">Yellow & red</p></div>

<div class="content">

<?php
require ('mysqli_connect.php');

//GATSBY:
	

$qgatsby = "SELECT quantity AS gatsbyquantity FROM products WHERE product_name = 'The Great Gatsby';";
$rgatsby = @mysqli_query ($dbc, $qgatsby);
if ($rgatsby) 
{
while ($row = mysqli_fetch_array($rgatsby, MYSQLI_ASSOC))
	{	$currentgatsbyq = $row['gatsbyquantity'];
	}

	$gatq = trim($_COOKIE['gatq']);

	$gatsbyquantity = $currentgatsbyq - $gatq;
	
	$querygatsby = "UPDATE products SET quantity='$gatsbyquantity' WHERE product_name='The Great Gatsby';";

	@mysqli_query($dbc, $querygatsby);

}
	else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qgatsby . '</p></div></center>';
	
}
	
	$qgatsbysold = "SELECT quantity AS gatsbyquantitysold FROM sold WHERE product_name = 'The Great Gatsby';";
	$rgatsbysold = @mysqli_query ($dbc, $qgatsbysold);
	
	if ($rgatsbysold)
	{
		while ($row = mysqli_fetch_array($rgatsbysold, MYSQLI_ASSOC))
		{ $currentgatsbysold = $row['gatsbyquantitysold'];
		}
		
		$gatsbyquantitysold = $currentgatsbysold + $gatq;
		
		$querygatsbysold = "UPDATE sold SET quantity='$gatsbyquantitysold' WHERE product_name='The Great Gatsby';";
		
		@mysql_query($dbc, $querygatsbysold);


} 
else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qgatsbysold . '</p></div></center>';
	
}

//
	
	
	//CATCHER IN THE RYE:

$qcatcher = "SELECT quantity AS catcherquantity FROM products WHERE product_name = 'Catcher in the Rye';";
$rcatcher = @mysqli_query ($dbc, $qcatcher);
if ($rcatcher) {
while ($row = mysqli_fetch_array($rcatcher, MYSQLI_ASSOC))
	{	$currentcatcherq = $row['catcherquantity'];
	}

$catcherq = trim($_COOKIE['catcherq']);

	$catcherquantity = $currentcatcherq - $catcherq;
	
	$querycatcher = "UPDATE products SET quantity='$catcherquantity' WHERE product_name='Catcher in the Rye';";

	@mysqli_query($dbc, $querycatcher);
	
}	else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qcatcher . '</p></div></center>';
	
}
	
		$qcatchersold = "SELECT quantity AS catcherquantitysold FROM sold WHERE product_name = 'Catcher in the Rye';";
	$rcatchersold = @mysqli_query ($dbc, $qcatchersold);
	
	
	
	if ($rcatchersold)
{
		while ($row = mysqli_fetch_array($rcatchersold, MYSQLI_ASSOC))
		{ $currentcatchersold = $row['catcherquantitysold'];
		}
		
		$catcherquantitysold = $currentcatchersold + $catcherq;
		
		$querycatchersold = "UPDATE sold SET quantity='$catcherquantitysold' WHERE product_name='Catcher in the Rye';";
		
		@mysql_query($dbc, $querycatchersold);
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qcatchersold . '</p></div></center>';
	
}

//THE WAVES:

$qwaves = "SELECT quantity AS wavesquantity FROM products WHERE product_name = 'The Waves';";
$rwaves = @mysqli_query ($dbc, $qwaves);
if ($rwaves) {
while ($row = mysqli_fetch_array($rwaves, MYSQLI_ASSOC))
	{	$currentwavesq = $row['wavesquantity'];
	}

$wavesq = trim($_COOKIE['wavesq']);

	$wavesquantity = $currentwavesq - $wavesq;
	
	$querywaves = "UPDATE products SET quantity='$wavesquantity' WHERE product_name='The Waves';";

	@mysqli_query($dbc, $querywaves);
	
}
else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qcatcher . '</p></div></center>';
	
}
	
	$qwavessold = "SELECT quantity AS wavesquantitysold FROM sold WHERE product_name = 'The Waves';";
	$rwavessold = @mysqli_query ($dbc, $qwavessold);
	
	if ($rwavessold) {
		while ($row = mysqli_fetch_array($rwavessold, MYSQLI_ASSOC))
		{ $currentwavessold = $row['wavesquantitysold'];
		}
		
		$wavesquantitysold = $currentwavessold + $wavesq;
		
		$querywavessold = "UPDATE sold SET quantity='$wavesquantitysold' WHERE product_name='The Waves';";
		
		@mysql_query($dbc, $querywavessold);
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qwavessold . '</p></div></center>';
	
}

//ULYSSES:

$qulysses = "SELECT quantity AS ulyssesquantity FROM products WHERE product_name = 'Ulysses';";
$rulysses = @mysqli_query ($dbc, $qulysses);
if ($rulysses) {
while ($row = mysqli_fetch_array($rulysses, MYSQLI_ASSOC))
	{	$currentulyssesq = $row['ulyssesquantity'];
	}

$ulyssesq = trim($_COOKIE['ulyssesq']);

	$ulyssesquantity = $currentulyssesq - $ulyssesq;
	
	$queryulysses = "UPDATE products SET quantity='$ulyssesquantity' WHERE product_name='Ulysses';";

	@mysqli_query($dbc, $queryulysses);
	
}else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qcatcher . '</p></div></center>';
	
}
	
		$qulyssessold = "SELECT quantity AS ulyssesquantitysold FROM sold WHERE product_name = 'Ulysses';";
	$rulyssessold = @mysqli_query ($dbc, $qulyssessold);
	
	if ($rulyssessold) {
		while ($row = mysqli_fetch_array($rulyssessold, MYSQLI_ASSOC))
		{ $currentulyssessold = $row['ulyssesquantitysold'];
		}
		
		$ulyssesquantitysold = $currentulyssessold + $ulyssesq;
		
		$queryulyssessold = "UPDATE sold SET quantity='$ulyssesquantitysold' WHERE product_name='Ulysses';";
		
		@mysql_query($dbc, $queryulyssessold);
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qulyssessold . '</p></div></center>';
	
}

//THE STRANGER:

$qstranger = "SELECT quantity AS strangerquantity FROM products WHERE product_name = 'The Stranger';";
$rstranger = @mysqli_query ($dbc, $qstranger);
if ($rstranger) {
while ($row = mysqli_fetch_array($rstranger, MYSQLI_ASSOC))
	{	$currentstrangerq = $row['strangerquantity'];
	}

$strangerq = trim($_COOKIE['strangerq']);

	$strangerquantity = $currentstrangerq - $strangerq;
	
	$querystranger = "UPDATE products SET quantity='$strangerquantity' WHERE product_name='The Stranger';";

	@mysqli_query($dbc, $querystranger);
	
}else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qcatcher . '</p></div></center>';
	
}
	
		$qstrangersold = "SELECT quantity AS strangerquantitysold FROM sold WHERE product_name = 'The Stranger';";
	$rstrangersold = @mysqli_query ($dbc, $qstrangersold);
	
	if ($rstrangersold) {
		while ($row = mysqli_fetch_array($rstrangersold, MYSQLI_ASSOC))
		{ $currentstrangersold = $row['strangerquantitysold'];
		}
		
		$strangerquantitysold = $currentstrangersold + $strangerq;
		
		$querystrangersold = "UPDATE sold SET quantity='$strangerquantitysold' WHERE product_name='The Stranger';";
		
		@mysql_query($dbc, $querystrangersold);
	
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qstrangersold . '</p></div></center>';
	
}

//PRIDE AND PREJUDICE:

$qpride = "SELECT quantity AS pridequantity FROM products WHERE product_name = 'Pride and Prejudice';";
$rpride = @mysqli_query ($dbc, $qpride);
if ($rpride) {
while ($row = mysqli_fetch_array($rpride, MYSQLI_ASSOC))
	{	$currentprideq = $row['pridequantity'];
	}

$prideq = trim($_COOKIE['prideq']);

	$pridequantity = $currentprideq - $prideq;
	
	$querypride = "UPDATE products SET quantity='$pridequantity' WHERE product_name='Pride and Prejudice';";

	@mysqli_query($dbc, $querypride);
	
}else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qcatcher . '</p></div></center>';
	
}
	
		$qpridesold = "SELECT quantity AS pridequantitysold FROM sold WHERE product_name = 'Pride and Prejudice';";
	$rpridesold = @mysqli_query ($dbc, $qpridesold);
	
	if ($rpridesold) {
		while ($row = mysqli_fetch_array($rpridesold, MYSQLI_ASSOC))
		{ $currentpridesold = $row['pridequantitysold'];
		}
		
		$pridequantitysold = $currentpridesold + $prideq;
		
		$querypridesold = "UPDATE sold SET quantity='$pridequantitysold' WHERE product_name='Pride and Prejudice';";
		
		@mysql_query($dbc, $querypridesold);
	
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qpridesold . '</p></div></center>';
	
}

//TO KILL A MOCKINGBIRD:

$qmockingbird = "SELECT quantity AS mockingbirdquantity FROM products WHERE product_name = 'To Kill a Mockingbird';";
$rmockingbird = @mysqli_query ($dbc, $qmockingbird);
if ($rmockingbird) {
while ($row = mysqli_fetch_array($rmockingbird, MYSQLI_ASSOC))
	{	$currentmockingbirdq = $row['mockingbirdquantity'];
	}

$mockingbirdq = trim($_COOKIE['mockingbirdq']);

	$mockingbirdquantity = $currentmockingbirdq - $mockingbirdq;
	
	$querymockingbird = "UPDATE products SET quantity='$mockingbirdquantity' WHERE product_name='To Kill a Mockingbird';";

	@mysqli_query($dbc, $querymockingbird);
	
}else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qcatcher . '</p></div></center>';
	
}
	
		$qmockingbirdsold = "SELECT quantity AS mockingbirdquantitysold FROM sold WHERE product_name = 'To Kill a Mockingbird';";
	$rmockingbirdsold = @mysqli_query ($dbc, $qmockingbirdsold);
	
	if ($rmockingbirdsold) {
		while ($row = mysqli_fetch_array($rmockingbirdsold, MYSQLI_ASSOC))
		{ $currentmockingbirdsold = $row['mockingbirdquantitysold'];
		}
		
		$mockingbirdquantitysold = $currentmockingbirdsold + $mockingbirdq;
		
		$querymockingbirdsold = "UPDATE sold SET quantity='$mockingbirdquantitysold' WHERE product_name='To Kill a Mockingbird';";
		
		@mysql_query($dbc, $querymockingbirdsold);


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qmockingbirdsold . '</p></div></center>';
	
}

//ON THE ROAD:

$qroad = "SELECT quantity AS roadquantity FROM products WHERE product_name = 'On the Road';";
$rroad = @mysqli_query ($dbc, $qroad);
if ($rroad) {
while ($row = mysqli_fetch_array($rroad, MYSQLI_ASSOC))
	{	$currentroadq = $row['roadquantity'];
	}

$roadq = trim($_COOKIE['roadq']);

	$roadquantity = $currentroadq - $roadq;
	
	$queryroad = "UPDATE products SET quantity='$roadquantity' WHERE product_name='On the Road';";

	@mysqli_query($dbc, $queryroad);
	
}else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qcatcher . '</p></div></center>';
	
}
	
		$qroadsold = "SELECT quantity AS roadquantitysold FROM sold WHERE product_name = 'The Waves';";
	$rroadsold = @mysqli_query ($dbc, $qroadsold);
	
	if ($rroadsold) {
		while ($row = mysqli_fetch_array($rroadsold, MYSQLI_ASSOC))
		{ $currentroadsold = $row['roadquantitysold'];
		}
		
		$roadquantitysold = $currentroadsold + $roadq;
		
		$queryroadsold = "UPDATE sold SET quantity='$roadquantitysold' WHERE product_name='The Waves';";
		
		@mysql_query($dbc, $queryroadsold);
	


} else {echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $qroadsold . '</p></div></center>';
	
}

	

$usergatsby = $_COOKIE['gatq'];
$usercatcher = $_COOKIE['catcherq'];
$userwaves = $_COOKIE['wavesq'];
$userstranger = $_COOKIE['strangerq'];
$userulysses = $_COOKIE['ulyssesq'];
$userpride = $_COOKIE['prideq'];
$usermockingbird = $_COOKIE['mockingbirdq'];
$userroad = $_COOKIE['roadq'];

if ($usergatsby > $currentgatsbyq or $usercatcher > $currentcatcherq or $userwaves > $currentwavesq or $userstranger > $currentstrangerq or $userulysses > $currentulyssesq or $userpride > $currentprideq or $usermockingbird > $currentmockingbirdq or $userroad > $currentroadq)
{echo '<script language="javascript">window.alert("Part of your order is larger than our current inventory! Your order has been cancelled.");
window.location.href="personal.php";</script>';}
                                
echo "<b>Personal Info</b><br><br>Name: " . $_COOKIE['fname'] . " " . $_COOKIE['lname'];
echo "<br>Address: " . $_COOKIE['address'];
echo "<br>City: " . $_COOKIE['city'];
echo "<br>State: " . $_COOKIE['state'];
echo "<br>Zip Code: " . $_COOKIE['zip'];
echo "<br>Email: " . $_COOKIE['email'] . "@nyu.edu";
echo "<br><br><b>Order:</b><br>";


$productarray = array($usergatsby=>'The Great Gatsby',
                 $usercatcher=>'Catcher in the Rye',
                  $userwaves=>'The Waves',
                  $userstranger=>'The Stranger',
                  $userulysses=>'Ulysses',
                  $userpride=>'Pride and Prejudice',
                  $usermockingbird=>'To Kill a Mockingbird',
                  $userroad=>'On the Road'
                  );

                                asort($productarray);
	
	foreach ($productarray as $book=>$info)
                                            {if ($book > 0)
                                                    {echo $info . ", Quantity: " . $book . "<br><br>";}
											}
						

echo "<b>Total Price:</b><br>$";
$totalprice = $usergatsby*12.99 + $usercatcher*10.99 + $userwaves*8.99 + $userstranger*7.99 + $userulysses*18.99 + $userpride*6.99 + $usermockingbird*9.99 + $userroad*11.99;
echo $totalprice;
							

								
								

$emailmsg1 = "Price: " . $totalprice . " // Order: ";
$order = '';
foreach ($productarray as $book1=>$info1)
{
    if ($book1 > 0)
    {
        $order .= $info1 . ", Quantity: " . $book1 . " // ";
    }
}
$emailmsg = $emailmsg1.$order;


$textFile = "text.txt";

chmod($textFile, 0777);
$fileHandle = fopen($textFile, 'w') or die('There was an error.');

fwrite($fileHandle, $emailmsg);

fclose($fileHandle);


?>
</div>

</body>
</html>

