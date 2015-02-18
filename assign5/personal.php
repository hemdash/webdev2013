<?php

	 $fname =  $_POST['fname'];
     $lname = $_POST['lname'];
	 $address = $_POST['address'];
	 $city = $_POST['city'];
	 $state = $_POST['state'];
	 $zip = $_POST['zip'];
	 $email = $_POST['email'];
     setcookie( "fname", $fname, time() + 1000000000 );
     setcookie( "lname", $lname, time() + 1000000000 );
	 setcookie( "address", $address, time() + 1000000000 );
	 setcookie( "city", $city, time() + 1000000000 );
	 setcookie( "state", $state, time() + 1000000000 );
	 setcookie( "zip", $zip, time() + 1000000000 );
	 setcookie( "email", $email, time() + 1000000000 );
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="stylesheet.css" type="text/css" rel="stylesheet" title="main">
<link href="stylesheet2.css" type="text/css" rel="alternate stylesheet" title="alt1">
<link href="stylesheet3.css" type="text/css" rel="alternate stylesheet" title="alt2">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Personal Info</title>
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
<center><h1>Book Shop</h1></center>

<div class="sidebar"><center><p><b>Order Navigation</b></p>
<p><input type="radio" name="page" onClick="personal()"> Personal Info</p>
<p><input type="radio" name="page" onClick="inventory()"> Product Choice</p>
<p><input type="radio" name="page" onClick="confirmation()"> Confirmation</p>
<p><input type="radio" name="page" onClick="order()"> Order</p>
<p><input type="radio" name="page" onClick="resetInfo()"> Reset Order Info</p>
<br><br>
<p><b>See the shop your way!</b></p>
<p><input type="radio" name="look" onClick="setActiveStyleSheet('main')" checked> Light & dark blue</p>
<p><input type="radio" name="look" onClick="setActiveStyleSheet('alt1')"> Black & white</p>
<p><input type="radio" name="look" onClick="setActiveStyleSheet('alt2')">Yellow & red</p></div>
<div class="content"><form method="post" action="inventory.php">
<p>First Name: <input type="text" maxlength="40" name="fname" id="fname" value="
<?php echo $_COOKIE['fname'];?>"/></p>
<p>Last Name: <input type="text" maxlength="40" name="lname" id="lname" value="
<?php echo $_COOKIE['lname'];?>"/></p>
<p>Street Address: <input type="text" maxlength="100" name="address" id="address" value="<?php echo $_COOKIE['address'];?>" /></p>
<p>City: <input type="text" maxlength="40" name="city" id="city" value="<?php echo $_COOKIE['city'];?>"/></p>
<p>State: <input type="text" maxlength="2" name="state" id="state" value="<?php echo $_COOKIE['state'];?>" /></p>
<p>Zip Code: <input type="text" maxlength="5" name="zip" id="zip" value="<?php echo $_COOKIE['zip'];?>" /></p>
<p>Email:<input type="text" maxlength="40" name="email" id="email" value="<?php echo $_COOKIE['email'];?>" />@nyu.edu</p>
<p><input type="submit" name="submit" value="submit" id="submit" /></p></form></center></div>

</body>
</html>