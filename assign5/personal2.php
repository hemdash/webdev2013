<?php 
  session_start();
  $_SESSION['fname'] = $_POST['fname'];
  $_SESSION['lname'] = $_POST['lname'];
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<form method="post" action="hidden.php">
<p>First Name: <input type="text" maxlength="40" name="fname" id="fname" value="<?php echo $_SESSION['fname']; ?>"/></p>
<p>Last Name: <input type="text" maxlength="40" name="lname" id="lname" /></p>
<p>Street Address: <input type="text" maxlength="100" name="address" id="address" /></p>
<p>City: <input type="text" maxlength="40" name="city" id="city" /></p>
<p>State: <input type="text" maxlength="2" name="state" id="state" /></p>
<p>Zip Code: <input type="text" maxlength="5" name="zip" id="zip" /></p>
<p><input type="submit" name="submit" value="submit" id="submit" /></p>

<?php

echo "yo" . $_COOKIE["fname"];

?>

</body>
</html>