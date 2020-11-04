<?php
$time=time();
echo $time;
//setcookie(name,value,expire,path,domain); 
setcookie('student','sanki',$time+10);
?>