<?php
setcookie( "gatq", $_POST['gatq'], time() + 1000000000 );
     setcookie( "catcherq", $_POST['catcherq'], time() + 1000000000 );
	 setcookie( "wavesq", $_POST['wavesq'], time() + 1000000000 );
	 setcookie( "ulyssesq", $_POST['ulyssesq'], time() + 1000000000 );
	 setcookie( "strangerq", $_POST['strangerq'], time() + 1000000000 );
	 setcookie( "prideq", $_POST['prideq'], time() + 1000000000 );
	 setcookie( "mockingbirdq", $_POST['mockingbirdq'], time() + 1000000000 );
	 setcookie( "roadq", $_POST['roadq'], time() + 1000000000 );

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="stylesheet.css" type="text/css" rel="stylesheet" title="main">
<link href="stylesheet2.css" type="text/css" rel="alternate stylesheet" title="alt1">
<link href="stylesheet3.css" type="text/css" rel="alternate stylesheet" title="alt2">
<title>Confirmation</title>
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
<h1><center>Order Confirmation</h1><br />
If the page is blank, please refresh.</center>


<div class="sidebar"><center><p><b>Order Navigation</b></p>
<p><input type="radio" name="page" onClick="personal()"> Personal Info</p>
<p><input type="radio" name="page" onClick="inventory()"> Product Choice</p>
<p><input type="radio" name="page" onClick="confirmation()"> Confirmation</p>
<p><input type="radio" name="page" onclick="order()" /> Order</p>
<p><input type="radio" name="page" onClick="resetInfo()"> Reset Order Info</p>
<br><br>
<p><b>See the shop your way!</b></p>
<p><input type="radio" name="look" onClick="setActiveStyleSheet('main')" checked> Light & dark blue</p>
<p><input type="radio" name="look" onClick="setActiveStyleSheet('alt1')"> Black & white</p>
<p><input type="radio" name="look" onClick="setActiveStyleSheet('alt2')">Yellow & red</p></div>
<div class="content"><?php

$fname =  $_POST['fname'];
     $lname = $_POST['lname'];
	 $address = $_POST['address'];
	 $city = $_POST['city'];
	 $state = $_POST['state'];
	 $zip = $_POST['zip'];
	 $email = $_POST['email'];


$usergatsby = $_COOKIE['gatq'];
$usercatcher = $_COOKIE['catcherq'];
$userwaves = $_COOKIE['wavesq'];
$userstranger = $_COOKIE['strangerq'];
$userulysses = $_COOKIE['ulyssesq'];
$userpride = $_COOKIE['prideq'];
$usermockingbird = $_COOKIE['mockingbirdq'];
$userroad = $_COOKIE['roadq'];


if ($_COOKIE['fname'] == NULL or $_COOKIE['lname'] == NULL or $_COOKIE['address'] == NULL or $_COOKIE['city'] == NULL or $_COOKIE['state'] == NULL or $_COOKIE['zip'] == NULL or $_COOKIE['email'] == NULL)
{echo "<script language='javascript'>
window.alert('You left out some information on the personal info page! You will be redirected.');
		window.location.href='personal.php';</script>";
}
		
	else
		{	


        if ($_COOKIE['gatq'] == NULL &&
            $_COOKIE['catcherq'] == NULL &&
            $_COOKIE['wavesq'] == NULL &&
            $_COOKIE['strangerq'] == NULL &&
            $_COOKIE['ulyssesq'] == NULL &&
            $_COOKIE['prideq'] == NULL &&
            $_COOKIE['mockingbirdq'] == NULL &&
            $_COOKIE['roadq'] == NULL)

                {echo "<script language='javascript'>
                    window.alert('You don't have anything in your shopping cart! You will be redirected.');
                    window.location.href='inventory.php';</script>";
                }

                        else
                            {$productarray = array($usergatsby=>'The Great Gatsby <img src="gatsby.jpg">',
                 $usercatcher=>'Catcher in the Rye <img src="catcher.jpg">',
                  $userwaves=>'The Waves <img src="waves.jpg">',
                  $userstranger=>'The Stranger <img src="stranger.jpg">',
                  $userulysses=>'Ulysses <img src="ulysses.jpg">',
                  $userpride=>'Pride and Prejudice <img src="pride.jpg">',
                  $usermockingbird=>'To Kill a Mockingbird <img src="mockingbird.jpg">',
                  $userroad=>'On the Road <img src="ontheroad.jpg">'
                  );

                                asort($productarray);
                                foreach ($productarray as $book=>$info)
                                            {if ($book > 0)
                                                    {echo "Quantity: " . $book . " " . $info . "<br>";}
                                            }


                            }

								
		}
		
																																																						
?>

<center><br /><br /><br /><div style="width:100px; height:30px; background-color:#9FF; border:thin solid #FFF; color:#000;" onclick="inventory()">Adjust Order</div><br /><br /><div style="width:100px; height:30px; background-color:#9FF; border:thin solid #FFF; color:#000;" onclick="order()">Confirm Order</div></div>
</body>
</html>