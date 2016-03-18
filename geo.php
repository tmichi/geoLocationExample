<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
<?php
	$x = $_POST["lat"]."";
	$y = $_POST["lon"]."";
	$fn1 = "temp.xxx";
	$fp = fopen ($fn1,'w');
	fputs($fp, $x);
	$z = " ";
	fputs($fp, $z);
	fputs($fp, $y);
	fclose ($fp);	
	$fn2 = "3gsa.xxx";
	copy($fn1, $fn2); 
	echo 'location = ['. $x . ',' . $y .']';
?>
<br/>
<input type = "submit" name = "buttonName" value="Back" onClick="history.back()" />
