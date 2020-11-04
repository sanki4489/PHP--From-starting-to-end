<?php
require 'connect.php';

$query="SELECT * FROM `student`";
if($is_query_run=mysql_query($query))
{
	echo "Query executed";
}
else
{
	echo "Query not executed";
}

?>