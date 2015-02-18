<?php

	 $gatq =  $_POST['gatq'];
     $catcherq = $_POST['catcherq'];
	 $wavesq = $_POST['wavesq'];
	 $ulyssesq = $_POST['ulyssesq'];
	 $strangerq = $_POST['strangerq'];
	 $prideq = $_POST['prideq'];
	 $mockingbirdq = $_POST['mockingbirdq'];
	 $roadq = $_POST['roadq'];
     setcookie( "gatq", $gatq, time() + 1000000000 );
     setcookie( "catcherq", $catcherq, time() + 1000000000 );
	 setcookie( "wavesq", $wavesq, time() + 1000000000 );
	 setcookie( "ulyssesq", $ulyssesq, time() + 1000000000 );
	 setcookie( "strangerq", $strangerq, time() + 1000000000 );
	 setcookie( "prideq", $prideq, time() + 1000000000 );
	 setcookie( "mockingbirdq", $mockingbirdq, time() + 1000000000 );
	 setcookie( "roadq", $roadq, time() + 1000000000 );
	 
setcookie('fname',$_POST['fname'], time() + 1000000000);
setcookie('lname', $_POST['lname'], time() + 1000000000);
setcookie('address',$_POST['address'], time() + 1000000000);
setcookie('city', $_POST['city'], time() + 1000000000);
setcookie('state',$_POST['state'], time() + 1000000000);
setcookie('zip', $_POST['zip'], time() + 1000000000);
setcookie('email', $_POST['email'], time() + 1000000000);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Inventory</title>
<link href="stylesheet.css" type="text/css" rel="stylesheet" title="main">
<link href="stylesheet2.css" type="text/css" rel="alternate stylesheet" title="alt1">
<link href="stylesheet3.css" type="text/css" rel="alternate stylesheet" title="alt2">
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

function updateTotal() {
        var g = document.forms[0]['gatq'].value;
        var gquantity = 0;
        if (g != "") {
            gquantity = parseInt(g);
        }
		
		var c = document.forms[0]['catcherq'].value;
        var cquantity = 0;
        if (c != "") {
            cquantity = parseInt(c);
        }
		
		var w = document.forms[0]['wavesq'].value;
        var wquantity = 0;
        if (w != "") {
            wquantity = parseInt(w);
        }
		
		var u = document.forms[0]['ulyssesq'].value;
        var uquantity = 0;
        if (u != "") {
            uquantity = parseInt(u);
        }
		
		var s = document.forms[0]['strangerq'].value;
        var squantity = 0;
        if (s != "") {
            squantity = parseInt(s);
        }
		
		var p = document.forms[0]['prideq'].value;
        var pquantity = 0;
        if (p != "") {
            pquantity = parseInt(p);
        }
		
		var m = document.forms[0]['mockingbirdq'].value;
        var mquantity = 0;
        if (m != "") {
            mquantity = parseInt(m);
        }
		
		var r = document.forms[0]['roadq'].value;
        var rquantity = 0;
        if (r != "") {
            rquantity = parseInt(r);
        }
		
        var totalPrice = (gquantity * 12.99 + cquantity * 10.99 + wquantity * 8.99 + uquantity * 18.99 + squantity * 7.99 + pquantity * 6.99 + mquantity * 9.99 + rquantity * 11.99);
        document.forms[0]['price'].value = totalPrice.toString();
    };</script>
</head>

<body>
<center><h1>BookShop: Inventory</h1></center>
<?php


$fname =  $_POST['fname'];
     $lname = $_POST['lname'];
	 $address = $_POST['address'];
	 $city = $_POST['city'];
	 $state = $_POST['state'];
	 $zip = $_POST['zip'];
	 
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

?>


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

<div class="content"><form name="userForm" action="confirmation.php" method="post">
<p><?php if ($currentgatsbyq == 0)
{echo '<img src="outofstock.jpg">';} else {echo '<img src="gatsby.jpg">';} ?> The Great Gatsby, $12.99</p>
<p> Quantity:<input type="text" name="gatq" id="gatq" value="<?php echo $_COOKIE['gatq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p><?php if ($currentcatcherq == 0) {echo '<img src="outofstock.jpg">';} else {echo '<img src="catcher.jpg">';}?> Catcher in the Rye, $10.99</p>
<p> Quantity: <input type="text" name="catcherq" id="catcherq" value="<?php echo $_COOKIE['catcherq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p> <?php if ($currentwavesq == 0) {echo '<img src="outofstock.jpg">';} else {echo '<img src="waves.jpg">';}?> The Waves, $8.99</p>
<p> Quantity: <input type="text" name="wavesq" id="wavesq" value="<?php echo $_COOKIE['wavesq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p> <?php if ($currentulyssesq == 0) {echo '<img src="outofstock.jpg">';} else {echo '<img src="ulysses.jpg">';}?> Ulysses, $18.99</p>
<p> Quantity: <input type="text" name="ulyssesq" id="ulyssesq" value="<?php echo $_COOKIE['ulyssesq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p> <?php if ($currentstrangerq == 0) {echo '<img src="outofstock.jpg">';} else {echo '<img src="stranger.jpg">';}?> The Stranger, $7.99</p>
<p> Quantity: <input type="text" name="strangerq" id="strangerq" value="<?php echo $_COOKIE['strangerq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p> <?php if ($currentprideq == 0) {echo '<img src="outofstock.jpg">';} else {echo '<img src="pride.jpg">';}?> Pride and Prejudice, $6.99</p>
<p> Quantity: <input type="text" name="prideq" id="prideq" value="<?php echo $_COOKIE['prideq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p> <?php if ($currentmockingbirdq == 0) {echo '<img src="outofstock.jpg">';} else {echo '<img src="mockingbird.jpg">';}?> To Kill a Mockingbird, $9.99</p>
<p> Quantity: <input type="text" name="mockingbirdq" id="mockingbirdq" value="<?php echo $_COOKIE['mockingbirdq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p> <?php if ($currentroadq == 0) {echo '<img src="outofstock.jpg">';} else {echo '<img src="ontheroad.jpg">';}?> On the Road, $11.99</p>
<p> Quantity: <input type="text" name="roadq" id="roadq" value="<?php echo $_COOKIE['roadq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p>Price <input type="text" name="price" id="price" value="0.00" /></p>
<p><input type="submit" name="submit" value="submit" /></p></form></div>


</body>
</html>