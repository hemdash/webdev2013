<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$productarray = array($_COOKIE['gatq']=>'The Great Gatsby <img src="gatsby.jpg">',
                 $_COOKIE['catcherq']=>'Catcher in the Rye <img src="catcher.jpg">',
                  $_COOKIE['wavesq']=>'The Waves <img src="waves.jpg">',
                  $_COOKIE['strangerq']=>'The Stranger <img src="stranger.jpg">',
                  $_COOKIE['ulyssesq']=>'Ulysses <img src="ulysses.jpg">',
                  $_COOKIE['prideq']=>'Pride and Prejudice <img src="pride.jpg">',
                  $_COOKIE['mockingbirdq']=>'To Kill a Mockingbird <img src="mockingbird.jpg">',
                  $_COOKIE['roadq']=>'On the Road <img src="road.jpg">'
                  );




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
                            {

                                asort($productarray);
                                foreach ($productarray as $book=>$info)
                                            {if ($book != NULL)
                                                    {echo $book . "$info\n";}
												else {echo hello;}
                                            }
                                echo $productarray;
                                echo "testing";


                            }

    
?>
</body>
</html>