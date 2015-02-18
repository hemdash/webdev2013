<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>foreach($array as $word)
{
	$first = substr($word, 0, [1]);
	$thsh = substr($word, 0, [2]);
	$thshrest = substr($word, 2, [100]);
	$rest = substr($word, 1, [100]);}

	echo "<p>$rest $first -way</p>"}
    
    
    
    
$array = explode(' ', $_POST['original']);
$piglatin = "";

foreach($array as $word)
	{$word = trim($word);
	$first = substr($word, 0, 1);
	$thsh = substr($word, 0, 2);
	$thshrest = substr($word, 2, 100);
	$rest = substr($word, 1, strlen($word)-1);
	
	if(trim($word)) 
        {
            $piglatin .= (strlen($word)==1)?$first." ":$rest.$first. " ";
        }
    }
	
	$piglatinreal = implode(' ', $piglatin);

    echo $original ." becomes: ".$piglatinreal;}
	
</body>
</html>