<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpwd = "";
	$dbname = "web_vuln";

	$conn = mysql_connect($dbhost, $dbuser, $dbpwd) or die ('Error connecting to mysql');

	mysql_query ("set character_set_results='utf8'");
    mysql_query ("set character_set_client='utf8'");
    mysql_query ("set collation_connection='utf8_general_ci'");
	mysql_select_db($dbname);
?>