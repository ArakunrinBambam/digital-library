<?php
error_reporting(0);
$db = new mysqli('localhost','root','dotman','dlibrary');

if($db->connect_errno) {

	die('Sorry we are currently experiencing difficulties The error occured: '.$db->connect_error);	
}
?>