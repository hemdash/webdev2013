<?php
// set the cookie with the submitted user data
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
<title>Untitled Document</title>
</head>

<body>
<?php

$fname =  $_POST['fname'];
     $lname = $_POST['lname'];
	 $address = $_POST['address'];
	 $city = $_POST['city'];
	 $state = $_POST['state'];
	 $zip = $_POST['zip'];

echo "hello";

require ('mysqli_connect.php');

$q = "SELECT quantity AS quantity FROM products WHERE product_name = 'The Great Gatsby'";
$r = @mysqli_query ($dbc, $q);
if ($r) {
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
	{
		echo $row['quantity'];
}

mysqli_free_result($r);

} else {
	echo '<center><div class="container"><p>The current books could not be retrieved.</p>';
	
	echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p></div></center>';
	
}

echo $_POST['fname'];
echo "hi!";
echo $_COOKIE['fname'];
echo $_COOKIE['lname'];

?>

<a href="confirmation.php">confirmation</a>

</body>
</html>