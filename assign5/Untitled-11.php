
<p><?php if ($currentcatcherq == 0) {echo '<img src="outofstock.jpg">'}; else {echo '<img src="catcher.jpg">'};?> Catcher in the Rye, $10.99</p>
<p> Quantity: <input type="text" name="catcherq" id="catcherq" value="<?php if (isset($_COOKIE['catcherq'])) echo $_COOKIE['catcherq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p> <?php if ($currentwavesq == 0) {echo '<img src="outofstock.jpg">'}; else {echo '<img src="waves.jpg">'};?> The Waves, $8.99</p>
<p> Quantity: <input type="text" name="wavesq" id="wavesq" value="<?php if (isset($_POST['wavesq'])) echo $_POST['wavesq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p> <?php if ($currentulyssesq == 0) {echo '<img src="outofstock.jpg">'}; else {echo '<img src="ulysses.jpg">'};?> Ulysses, $18.99</p>
<p> Quantity: <input type="text" name="ulyssesq" id="ulyssesq" value="<?php if (isset($_POST['ulyssesq'])) echo $_POST['ulyssesq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p> <?php if ($currentstrangerq == 0) {echo '<img src="outofstock.jpg">'}; else {echo '<img src="stranger.jpg">'};?> The Stranger, $7.99</p>
<p> Quantity: <input type="text" name="strangerq" id="strangerq" value="<?php if (isset($_POST['strangerq'])) echo $_POST['strangerq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p> <?php if ($currentprideq == 0) {echo '<img src="outofstock.jpg">'}; else {echo '<img src="pride.jpg">'};?> Pride and Prejudice, $6.99</p>
<p> Quantity: <input type="text" name="prideq" id="prideq" value="<?php if (isset($_POST['prideq'])) echo $_POST['prideq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p> <?php if ($currentmockingbirdq == 0) {echo '<img src="outofstock.jpg">'}; else {echo '<img src="mockingbird.jpg">'};?> To Kill a Mockingbird, $9.99</p>
<p> Quantity: <input type="text" name="mockingbirdq" id="mockingbirdq" value="<?php if (isset($_POST['mockingbirdq'])) echo $_POST['mockingbirdq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>
<p> <?php if ($currentroadq == 0) {echo '<img src="outofstock.jpg">'}; else {echo '<img src="ontheroad.jpg">'};?> On the Road, $11.99</p>
<p> Quantity: <input type="text" name="roadq" id="roadq" value="<?php if (isset($_POST['roadq'])) echo $_POST['roadq']; ?>" maxlength="3" onkeyup="updateTotal()" /></p>

echo "hello";

$usergatsby = $_COOKIE['gatq'];
$usercatcher = $_COOKIE['catcherq'];
$userwaves = $_COOKIE['wavesq'];
$userstranger = $_COOKIE['strangerq'];
$userulysses = $_COOKIE['ulyssesq'];
$userpride = $_COOKIE['prideq'];
$usermockingbird = $_COOKIE['mockingbirdq'];
$userroad = $_COOKIE['roadq'];

if ($usergatsby > $currentgatsbyq
			 or $usercatcher > $currentcatcherq
			 or $userwaves > $currentwavesq
			 or $userstranger > $currentstrangerq
			 or $userulysses > $currentulyssesq
			 or $userpride > $currentprideq
			 or $usermockingbird > $currentmockingbirdq
			 or $userroad > $currentroadq)
	{echo "<script language='javascript'> window.alert('You have ordered more than there is available. Your ordered has been cancelled and you will be redirected back to the personal info page.'); window.location.href('personal.php';</script>";}
																																																						else { 


//

	require ('mysqli_connect.php');
	


//connects to the mysql database

//GATSBY:
	

$qgatsby = "SELECT quantity AS gatsbyquantity FROM products WHERE product_name = 'The Great Gatsby'";
$rgatsby = @mysqli_query ($dbc, $qgatsby);
if ($rgatsby) {
while ($row = mysqli_fetch_array($rgatsby, MYSQLI_ASSOC))
	{	$currentgatsbyq = $row['gatsbyquantity'];
	}
	
	
}

//CATCHER IN THE RYE:

$qcatcher = "SELECT quantity AS catcherquantity FROM products WHERE product_name = 'Catcher in the Rye'";
$rcatcher = @mysqli_query ($dbc, $qcatcher);
if ($rcatcher) {
while ($row = mysqli_fetch_array($rcatcher, MYSQLI_ASSOC))
	{	$currentcatcherq = $row['catcherquantity'];
	}
	
	
}

//THE WAVES:

$qwaves = "SELECT quantity AS wavesquantity FROM products WHERE product_name = 'The Waves'";
$rwaves = @mysqli_query ($dbc, $qwaves);
if ($rwaves) {
while ($row = mysqli_fetch_array($rwaves, MYSQLI_ASSOC))
	{	$currentwavesq = $row['wavesquantity'];
	}
	
	
}

//ULYSSES:

$qulysses = "SELECT quantity AS ulyssesquantity FROM products WHERE product_name = 'Ulysses'";
$rulysses = @mysqli_query ($dbc, $qulysses);
if ($rulysses) {
while ($row = mysqli_fetch_array($rulysses, MYSQLI_ASSOC))
	{	$currentulyssesq = $row['ulyssesquantity'];
	}
	
}

//THE STRANGER:

$qstranger = "SELECT quantity AS strangerquantity FROM products WHERE product_name = 'The Stranger'";
$rstranger = @mysqli_query ($dbc, $qstranger);
if ($rstranger) {
while ($row = mysqli_fetch_array($rstranger, MYSQLI_ASSOC))
	{	$currentstrangerq = $row['strangerquantity'];
	}
	
	
}

//PRIDE AND PREJUDICE:

$qpride = "SELECT quantity AS pridequantity FROM products WHERE product_name = 'Pride and Prejudice'";
$rpride = @mysqli_query ($dbc, $qpride);
if ($rpride) {
while ($row = mysqli_fetch_array($rpride, MYSQLI_ASSOC))
	{	$currentprideq = $row['pridequantity'];
	}
}

//TO KILL A MOCKINGBIRD:

$qmockingbird = "SELECT quantity AS mockingbirdquantity FROM products WHERE product_name = 'To Kill a Mockingbird'";
$rmockingbird = @mysqli_query ($dbc, $qmockingbird);
if ($rmockingbird) {
while ($row = mysqli_fetch_array($rmockingbird, MYSQLI_ASSOC))
	{	$currentmockingbirdq = $row['mockingbirdquantity'];
	}
}

//ON THE ROAD:

$qroad = "SELECT quantity AS roadquantity FROM products WHERE product_name = 'On the Road'";
$rroad = @mysqli_query ($dbc, $qroad);
if ($rroad) {
while ($row = mysqli_fetch_array($rroad, MYSQLI_ASSOC))
	{	$currentroadq = $row['roadquantity'];
	}
}
