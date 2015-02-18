<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require ('mysqli_connect.php');

//GATSBY:

	$gatsbyupdate = trim($_POST['gatsbyupdate']);
	
	if($gatsbyupdate != NULL)
	{
	
	$querygatsbyupdate = "UPDATE products SET quantity='$gatsbyupdate' WHERE product_name='The Great Gatsby';";

	@mysqli_query($dbc, $querygatsbyupdate);
	}

//CATCHER:

	$catcherupdate = trim($_POST['catcherupdate']);
	
	if ($catcherupdate != NULL)
	{
	$querycatcherupdate = "UPDATE products SET quantity='$catcherupdate' WHERE product_name='Catcher in the Rye';";

	@mysqli_query($dbc, $querycatcherupdate);
	}


//waves:

	$wavesupdate = trim($_POST['wavesupdate']);
	
	if ($wavesupdate != NULL)
	{
	$querywavesupdate = "UPDATE products SET quantity='$wavesupdate' WHERE product_name='The Waves';";

	@mysqli_query($dbc, $querywavesupdate);
	}
	
//ulysses:

	$ulyssesupdate = trim($_POST['ulyssesupdate']);
	
	if ($ulyssesupdate != NULL)
	{
	
	$queryulyssesupdate = "UPDATE products SET quantity='$ulyssesupdate' WHERE product_name='Ulysses';";

	@mysqli_query($dbc, $queryulyssesupdate);}


//stranger:

	$strangerupdate = trim($_POST['strangerupdate']);
	
	if($strangerupdate != NULL)
	{
	
	$querystrangerupdate = "UPDATE products SET quantity='$strangerupdate' WHERE product_name='The Stranger';";

	@mysqli_query($dbc, $querystrangerupdate);
	}


//pride:

	$prideupdate = trim($_POST['prideupdate']);
	
	if ($prideupdate != NULL)
	{
	
	$queryprideupdate = "UPDATE products SET quantity='$prideupdate' WHERE product_name='Pride and Prejudice';";

	@mysqli_query($dbc, $queryprideupdate);}


//mockingbird:

	$mockingbirdupdate = trim($_POST['mockingbirdupdate']);
	
	if ($mockingbirdupdate != NULL)
	{
	
	$querymockingbirdupdate = "UPDATE products SET quantity='$mockingbirdupdate' WHERE product_name='To Kill a Mockingbird';";

	@mysqli_query($dbc, $querymockingbirdupdate);
	}

//road:

	$roadupdate = trim($_POST['roadupdate']);
	
	if ($roadupdate != NULL)
	{
	
	$queryroadupdate = "UPDATE products SET quantity='$roadupdate' WHERE product_name='On the Road';";

	@mysqli_query($dbc, $queryroadupdate);}

//

echo "The database has been updated!";

?>
</body>
</html>