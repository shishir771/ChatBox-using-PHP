<?php

$con=new mysqli("localhost","root","","chat");

function formatDate($date)
{
	return date('g:i a', strtotime($date));
}

?>