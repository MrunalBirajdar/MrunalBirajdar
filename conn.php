<?php

$conn=new mysqli('localhost','root','','schoolnews');
if ($conn->connect_errno) {
	die("Sorry,Unable to connect.");
}

?>
