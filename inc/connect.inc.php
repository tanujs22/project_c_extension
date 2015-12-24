<?php

$db = new mysqli('localhost','root','ritika123','portal');

if($db->connect_errno>0){
	die('Unable to connect to the database['.$db->connect_error.']');
}

?>