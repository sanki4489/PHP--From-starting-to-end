<?php
//Global variable
if(isset($_GET["name"]) and isset($_GET["Age"]) and isset($_GET["Weight"]))
{
$name=$_GET["name"];
$age=$_GET["Age"];
$weight=$_GET["Weight"];
if(!empty($name) and !empty($age) and !empty($weight)){
	echo 'Name:'.$_GET["name"];
echo 'Age'.$_GET["Age"];
echo 'Weight'.$_GET["Weight"];
}
else{
	echo"Enter the form in details";
}
}

//we have to pass value in url by using ?var_name=value
?>