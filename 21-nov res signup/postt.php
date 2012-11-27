<html><br><?php

echo"TAHNKZ FOR YOUR REGISTRATION WILL COME BY 6mins<br></br> ";


?></br><br>
<?php
echo "The Dish That You Are Provid are  ";
$mySelected=$_POST['dish'];
foreach ($mySelected as $item)
 echo $item."<br>\n";
    ?>

</br>
<br><?php
echo "The Quantity Amt You are Given as <br>\n".$_POST["qu"];

if($_POST["1"]==1)
{echo"u select <br></br> ";}
else if($_POST["2"]==2)
{echo"u select <br></br>";}
else if($_POST["3"]==3)
{
	echo"u select <br></br>";
}
	
?></br>

<br><?php
echo "The Ice Flavour That  Selected is ".$_POST["t"];

if($_POST["t"]==1)
{echo"u select   ";}
else if($_POST["t"]==2)
{echo"u select  ";}
else if($_POST["t"]==2)
{
	echo"u select ";
}
	
?></br>
<br><?php
echo "The toprings that u r selected is".$_POST["nut"];

if($_POST["nut"]==1)
{echo"u select    ";}
else if($_POST["t"]==2)
{echo"u select  ";}
else if($_POST["t"]==2)
{
	echo"u select ";
}
	
?></br>

</html>