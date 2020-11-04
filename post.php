<?php
//Nothng will be visible in url

if(($_POST["name"]==="sanki") 
	and ($_POST["Age"]==="23") 
and ($_POST["Weight"]==="45"))
{
	echo"you can access the site ";
}
else{
	echo"enter the correct password";
}
?>