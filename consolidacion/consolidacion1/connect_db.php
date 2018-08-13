<?php
	$link =mysql_connect("localhost","root","1234");
	if($link){
		mysql_select_db("clientes",$link);
	}
?>
