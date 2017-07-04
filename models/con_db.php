<?php
if( $_SERVER['HTTP_HOST'] == "localhost" ) {

	mysql_connect("localhost","root","");
mysql_query("SET NAMES utf8");
mysql_select_db("company");
}
else {
		mysql_connect("localhost","neelneco_tech","Na82HAHOt~d5");
		mysql_query("SET NAMES utf8");
		mysql_select_db("neelneco_teach");
}
?>